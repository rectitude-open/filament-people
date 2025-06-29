<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentPeople\Filament\Resources;

use Awcodes\Curator\Components\Forms\CuratorPicker;
use Awcodes\Curator\Components\Tables\CuratorColumn;
use CodeWithDennis\FilamentSelectTree\SelectTree;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ToggleButtons;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use RalphJSmit\Filament\SEO\SEO;
use RectitudeOpen\FilamentPeople\Filament\Clusters\PeopleCluster;
use RectitudeOpen\FilamentPeople\Filament\Resources\PeopleResource\Pages;
use RectitudeOpen\FilamentPeople\Models\People;

class PeopleResource extends Resource
{
    protected static ?string $cluster = PeopleCluster::class;

    public static function getModel(): string
    {
        return static::$model ?? config('filament-people.people_model', People::class);
    }

    public static function getNavigationIcon(): string | Htmlable | null
    {
        return static::$navigationIcon ?? config('filament-people.people.navigation_icon', 'heroicon-o-identification');
    }

    public static function getNavigationSort(): ?int
    {
        return config('filament-people.people.navigation_sort', 0);
    }

    public static function getNavigationLabel(): string
    {
        return __('filament-people::filament-people.people.nav.label');
    }

    public static function getNavigationGroup(): ?string
    {
        return __('filament-people::filament-people.people.nav.group');
    }

    public static function getNavigationBadge(): ?string
    {
        return config('filament-people.people.navigation_badge', false)
                ? (string) static::getModel()::count()
                : '';
    }

    public static function form(Form $form): Form
    {
        $editorClass = config('filament-people.editor_component_class', RichEditor::class);
        $bioComponent = $editorClass::make('bio')
            ->label(__('filament-people::filament-people.people.field.bio'))
            ->fileAttachmentsDisk('public')
            ->fileAttachmentsDirectory('uploads')
            ->fileAttachmentsVisibility('public')
            ->columnSpan('full');

        $taglineComponent = Textarea::make('tagline')
            ->label(__('filament-people::filament-people.people.field.tagline'))
            ->default('')
            ->maxLength(255)
            ->columnSpan('full')
            ->dehydrateStateUsing(fn ($state) => $state ?? '');

        $sidebarComponent = $editorClass::make('sidebar')
            ->label(__('filament-people::filament-people.people.field.sidebar'))
            ->fileAttachmentsDisk('public')
            ->fileAttachmentsDirectory('uploads')
            ->fileAttachmentsVisibility('public')
            ->columnSpan('full')
            ->maxLength(1000);

        return $form
            ->schema([
                Grid::make(['sm' => 3])->schema([
                    Grid::make()->schema([
                        Grid::make()->schema([
                            TextInput::make('name')
                                ->label(__('filament-people::filament-people.people.field.name'))
                                ->required()
                                ->maxLength(255),
                            TextInput::make('title')
                                ->label(__('filament-people::filament-people.people.field.title'))
                                ->required()
                                ->maxLength(255),
                        ]),
                        TextInput::make('email')
                            ->label(__('filament-people::filament-people.people.field.email'))
                            ->maxLength(255),
                        TextInput::make('phone')
                            ->label(__('filament-people::filament-people.people.field.phone'))
                            ->maxLength(255),
                        $bioComponent,
                        $taglineComponent,
                        $sidebarComponent,
                    ])->columnSpan(['xl' => 2]),
                    Grid::make()->schema([
                        Section::make(__('filament-people::filament-people.people.field.taxonomy'))
                            ->compact()
                            ->schema([
                                SelectTree::make('categories')
                                    ->label(__('filament-people::filament-people.people.field.categories'))
                                    ->placeholder(__('filament-people::filament-people.people.info.select_categories'))
                                    ->parentNullValue(-1)
                                    ->relationship('categories', 'title', 'parent_id')
                                    ->searchable()
                                    ->defaultOpenLevel(3)
                                    ->columnSpanFull()
                                    ->required(),
                            ]),
                        Section::make(__('filament-people::filament-people.people.field.avatar'))
                            ->compact()
                            ->schema([
                                CuratorPicker::make('avatar_id')
                                    ->relationship('avatar', 'id')
                                    ->hiddenLabel()
                                    ->maxItems(1)
                                    ->directory('people')
                                    ->listDisplay(true),
                            ]),
                        Section::make(__('filament-people::filament-people.people.field.meta'))
                            ->compact()
                            ->schema([
                                TextInput::make('slug')
                                    ->label(__('filament-people::filament-people.people.field.slug'))
                                    ->maxLength(255)
                                    ->inlineLabel()
                                    ->columnSpanFull(),
                                TextInput::make('display_order')
                                    ->label(__('filament-people::filament-people.people.field.display_order'))
                                    ->default(0)
                                    ->numeric()
                                    ->step(1)
                                    ->inlineLabel()
                                    ->maxLength(255)
                                    ->columnSpanFull(),
                                ToggleButtons::make('is_published')
                                    ->label(__('filament-people::filament-people.people.field.status'))
                                    ->options([
                                        1 => __('filament-people::filament-people.people.field.status_published'),
                                        0 => __('filament-people::filament-people.people.field.status_draft'),
                                    ])
                                    ->default(1)
                                    ->colors([
                                        1 => 'success',
                                        0 => 'warning',
                                    ])
                                    ->icons([
                                        1 => 'heroicon-o-check-circle',
                                        0 => 'heroicon-o-x-circle',
                                    ])
                                    ->inline()
                                    ->inlineLabel(),
                                DateTimePicker::make('created_at')
                                    ->label(__('filament-people::filament-people.people.field.created_at'))
                                    ->native(false)
                                    ->default(now())
                                    ->suffixIcon('heroicon-o-calendar')
                                    ->columnSpanFull()
                                    ->inlineLabel()
                                    ->format(config('filament-people.people.datetime_format', 'Y-m-d H:i:s'))
                                    ->displayFormat(config('filament-people.people.datetime_format', 'Y-m-d H:i:s')),
                            ])
                            ->collapsible(),
                        Section::make(__('filament-people::filament-people.people.field.seo'))
                            ->compact()
                            ->schema([
                                SEO::make(),
                            ])
                            ->collapsible(),
                    ])->columnSpan(['xl' => 1]),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label(__('filament-people::filament-people.people.field.name'))
                    ->searchable()
                    ->limit(50),
                CuratorColumn::make('featured_image')
                    ->label('')
                    ->size(30),
                TextColumn::make('categories.title')
                    ->label(__('filament-people::filament-people.people.field.categories'))
                    ->searchable()
                    ->limit(50)
                    ->formatStateUsing(fn ($state) => implode('<br/>', explode(', ', $state)))
                    ->html(),
                IconColumn::make('is_published')
                    ->label(__('filament-people::filament-people.people.field.status'))
                    ->icon(fn ($state): string => match ($state) {
                        1 => 'heroicon-o-check-circle',
                        0 => 'heroicon-o-x-circle',
                        default => 'heroicon-o-question-mark-circle',
                    })
                    ->color(fn ($state): string => match ($state) {
                        1 => 'success',
                        0 => 'danger',
                        default => 'warning',
                    }),
                TextColumn::make('created_at')
                    ->label(__('filament-people::filament-people.people.field.created_at'))
                    ->sortable(),
            ])->filters([
                Tables\Filters\TrashedFilter::make(),
                SelectFilter::make('is_published')
                    ->label(__('filament-people::filament-people.people.field.status'))
                    ->options([
                        1 => __('filament-people::filament-people.people.field.status_published'),
                        0 => __('filament-people::filament-people.people.field.status_draft'),
                    ]),
                SelectFilter::make('categories')
                    ->label(__('filament-people::filament-people.people.field.categories'))
                    ->relationship('categories', 'title')
                    ->searchable(),
            ])->headerActions([
                //
            ])->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ForceDeleteAction::make(),
                Tables\Actions\RestoreAction::make(),
            ])->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                ]),
            ])->defaultSort('created_at', 'desc');
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPeople::route('/'),
            'create' => Pages\CreatePeople::route('/create'),
            'edit' => Pages\EditPeople::route('/{record}/edit'),
            'revisions' => Pages\PeopleRevisions::route('/{record}/revisions'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}

<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentPeople\Filament\Pages;

use Filament\Forms\Components\TextInput;
use RectitudeOpen\FilamentPeople\Filament\Clusters\PeopleCluster;
use RectitudeOpen\FilamentPeople\Models\PersonCategory as TreePageModel;
use SolutionForest\FilamentTree\Pages\TreePage as BasePage;

class PersonCategory extends BasePage
{
    protected static ?string $cluster = PeopleCluster::class;

    protected static int $maxDepth = 3;

    public static function getNavigationSort(): ?int
    {
        return config('filament-people.person_category.navigation_sort', 2);
    }

    public static function getNavigationIcon(): ?string
    {
        return config('filament-people.person_category.navigation_icon', 'heroicon-o-rectangle-stack');
    }

    public static function getNavigationLabel(): string
    {
        return __('filament-people::filament-people.person_category.nav.label');
    }

    public static function getNavigationGroup(): ?string
    {
        return __('filament-people::filament-people.person_category.nav.group');
    }

    public function getModel(): string
    {
        return static::$model ?? config('filament-people.person_category.model', TreePageModel::class);
    }

    protected function getActions(): array
    {
        return [
            $this->getCreateAction()->icon('heroicon-o-plus'),
        ];
    }

    protected function getFormSchema(): array
    {
        return [
            TextInput::make('title')
                ->label(__('filament-people::filament-people.person_category.field.title'))
                ->required()
                ->maxLength(255)
                ->columnSpanFull(),
        ];
    }

    protected function hasDeleteAction(): bool
    {
        return true;
    }

    protected function hasEditAction(): bool
    {
        return true;
    }

    protected function hasViewAction(): bool
    {
        return false;
    }

    protected function getHeaderWidgets(): array
    {
        return [];
    }

    protected function getFooterWidgets(): array
    {
        return [];
    }
}

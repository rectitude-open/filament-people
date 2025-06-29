<?php

declare(strict_types=1);

return [
    'cluster' => [
        'navigation_sort' => 0,
        'navigation_icon' => 'heroicon-o-identification',
    ],
    'people' => [
        'navigation_sort' => 0,
        'navigation_icon' => 'heroicon-o-identification',
        'datetime_format' => 'Y-m-d H:i:s',
        'navigation_badge' => false,
        'model' => \RectitudeOpen\FilamentPeople\Models\People::class,
        'filament_resource' => \RectitudeOpen\FilamentPeople\Filament\Resources\PeopleResource::class,
    ],
    'people_category' => [
        'model' => \RectitudeOpen\FilamentPeople\Models\PeopleCategory::class,
        'page' => \RectitudeOpen\FilamentPeople\Filament\Pages\PeopleCategory::class,
        'navigation_sort' => 2,
        'navigation_icon' => 'heroicon-o-rectangle-stack',
    ],

    'editor_component_class' => \Filament\Forms\Components\RichEditor::class,
];

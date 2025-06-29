<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentPeople\Filament\Resources\PeopleResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use RectitudeOpen\FilamentPeople\Filament\Resources\PeopleResource;

class ListPeople extends ListRecords
{
    protected static string $resource = PeopleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

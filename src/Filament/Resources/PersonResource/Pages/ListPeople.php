<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentPeople\Filament\Resources\PersonResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use RectitudeOpen\FilamentPeople\Filament\Resources\PersonResource;

class ListPeople extends ListRecords
{
    protected static string $resource = PersonResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

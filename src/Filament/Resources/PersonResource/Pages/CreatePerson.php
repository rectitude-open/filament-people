<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentPeople\Filament\Resources\PersonResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use RectitudeOpen\FilamentPeople\Filament\Resources\PersonResource;

class CreatePerson extends CreateRecord
{
    protected static string $resource = PersonResource::class;
}

<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentPeople\Filament\Resources\PersonResource\Pages;

use Mansoor\FilamentVersionable\RevisionsPage;
use RectitudeOpen\FilamentPeople\Filament\Resources\PersonResource;

class PeopleRevisions extends RevisionsPage
{
    protected static string $resource = PersonResource::class;
}

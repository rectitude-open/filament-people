<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentPeople\Filament\Resources\PeopleResource\Pages;

use Mansoor\FilamentVersionable\RevisionsPage;
use RectitudeOpen\FilamentPeople\Filament\Resources\PeopleResource;

class PeopleRevisions extends RevisionsPage
{
    protected static string $resource = PeopleResource::class;
}

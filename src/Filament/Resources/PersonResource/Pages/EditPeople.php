<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentPeople\Filament\Resources\PersonResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Mansoor\FilamentVersionable\Page\RevisionsAction;
use RectitudeOpen\FilamentPeople\Filament\Resources\PersonResource;

class EditPeople extends EditRecord
{
    protected static string $resource = PersonResource::class;

    protected function getHeaderActions(): array
    {
        return [
            RevisionsAction::make(),
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}

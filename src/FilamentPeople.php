<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentPeople;

use Illuminate\Database\Eloquent\Model;
use RectitudeOpen\FilamentPeople\Models\People;

class FilamentPeople
{
    /**
     * @return class-string<Model>
     */
    public function getModel(): string
    {
        return config('filament-people.people.model', People::class);
    }
}

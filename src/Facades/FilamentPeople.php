<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentPeople\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \RectitudeOpen\FilamentPeople\FilamentPeople
 */
class FilamentPeople extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \RectitudeOpen\FilamentPeople\FilamentPeople::class;
    }
}

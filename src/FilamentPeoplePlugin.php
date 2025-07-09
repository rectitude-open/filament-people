<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentPeople;

use Filament\Contracts\Plugin;
use Filament\Panel;
use RectitudeOpen\FilamentPeople\Filament\Pages\PersonCategory;
use RectitudeOpen\FilamentPeople\Filament\Resources\PersonResource;

class FilamentPeoplePlugin implements Plugin
{
    public function getId(): string
    {
        return 'filament-people';
    }

    public function register(Panel $panel): void
    {
        $panel
            ->resources([
                config('filament-people.person.filament_resource', PersonResource::class),
            ])
            ->pages([
                config('filament-people.person_category.page', PersonCategory::class),
            ])
            ->discoverClusters(
                __DIR__ . '/Filament/Clusters',
                'RectitudeOpen\\FilamentPeople\\Filament\\Clusters'
            );
    }

    public function boot(Panel $panel): void
    {
        //
    }

    public static function make(): static
    {
        return app(static::class);
    }

    public static function get(): static
    {
        /** @var static $plugin */
        $plugin = filament(app(static::class)->getId());

        return $plugin;
    }
}

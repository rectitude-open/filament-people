<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentPeople;

use Filament\Contracts\Plugin;
use Filament\Panel;
use RectitudeOpen\FilamentPeople\Filament\Pages\PeopleCategory;
use RectitudeOpen\FilamentPeople\Filament\Resources\PeopleResource;

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
                config('filament-people.people.filament_resource', PeopleResource::class),
            ])
            ->pages([
                config('filament-people.people_category.page', PeopleCategory::class),
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

<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentPeople\Filament\Clusters;

use Filament\Clusters\Cluster;
use Illuminate\Contracts\Support\Htmlable;

class PeopleCluster extends Cluster
{
    public static function getNavigationIcon(): string | Htmlable | null
    {
        return static::$navigationIcon ?? config('filament-people.cluster.navigation_icon', 'heroicon-o-identification');
    }

    public static function getNavigationSort(): ?int
    {
        return config('filament-people.cluster.navigation_sort', 0);
    }

    public static function getNavigationLabel(): string
    {
        return __('filament-people::filament-people.cluster.nav.label');
    }

    public static function getNavigationGroup(): ?string
    {
        return __('filament-people::filament-people.cluster.nav.group');
    }

    public static function getClusterBreadcrumb(): string
    {
        return __('filament-people::filament-people.cluster.nav.label');
    }
}

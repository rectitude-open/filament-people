<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentPeople;

use Filament\Support\Assets\AlpineComponent;
use Filament\Support\Assets\Asset;
use Filament\Support\Assets\Css;
use Filament\Support\Assets\Js;
use Filament\Support\Facades\FilamentAsset;
use Filament\Support\Facades\FilamentIcon;
use Illuminate\Filesystem\Filesystem;
use Livewire\Features\SupportTesting\Testable;
use RectitudeOpen\FilamentPeople\Commands\FilamentPeopleCommand;
use RectitudeOpen\FilamentPeople\Testing\TestsFilamentPeople;
use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentPeopleServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-people';

    public static string $viewNamespace = 'filament-people';

    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package->name(static::$name)
            // ->hasCommands($this->getCommands())
            ->hasInstallCommand(function (InstallCommand $command) {
                $command
                    ->publishConfigFile()
                    ->publishMigrations()
                    ->askToRunMigrations();
            });

        $configFileName = $package->shortName();

        if (file_exists($package->basePath("/../config/{$configFileName}.php"))) {
            $package->hasConfigFile();
        }

        if (file_exists($package->basePath('/../database/migrations'))) {
            $package->hasMigrations($this->getMigrations());
        }

        if (file_exists($package->basePath('/../resources/lang'))) {
            $package->hasTranslations();
        }

        if (file_exists($package->basePath('/../resources/views'))) {
            $package->hasViews(static::$viewNamespace);
        }
    }

    public function packageRegistered(): void {}

    public function packageBooted(): void
    {
        // Asset Registration
        // FilamentAsset::register(
        //     $this->getAssets(),
        //     $this->getAssetPackageName()
        // );

        // FilamentAsset::registerScriptData(
        //     $this->getScriptData(),
        //     $this->getAssetPackageName()
        // );

        // Icon Registration
        // FilamentIcon::register($this->getIcons());

        // Handle Stubs
        // if (app()->runningInConsole()) {
        //     foreach (app(Filesystem::class)->files(__DIR__ . '/../stubs/') as $file) {
        //         $this->publishes([
        //             $file->getRealPath() => base_path("stubs/filament-people/{$file->getFilename()}"),
        //         ], 'filament-people-stubs');
        //     }
        // }

        // Testing
        // Testable::mixin(new TestsFilamentPeople);
    }

    protected function getAssetPackageName(): ?string
    {
        return 'rectitude-open/filament-people';
    }

    /**
     * @return array<Asset>
     */
    protected function getAssets(): array
    {
        return [
            // AlpineComponent::make('filament-people', __DIR__ . '/../resources/dist/components/filament-people.js'),
            // Css::make('filament-people-styles', __DIR__ . '/../resources/dist/filament-people.css'),
            // Js::make('filament-people-scripts', __DIR__ . '/../resources/dist/filament-people.js'),
        ];
    }

    /**
     * @return array<class-string>
     */
    protected function getCommands(): array
    {
        return [
            // FilamentPeopleCommand::class,
        ];
    }

    /**
     * @return array<string>
     */
    protected function getIcons(): array
    {
        return [];
    }

    /**
     * @return array<string>
     */
    protected function getRoutes(): array
    {
        return [];
    }

    /**
     * @return array<string, mixed>
     */
    protected function getScriptData(): array
    {
        return [];
    }

    /**
     * @return array<string>
     */
    protected function getMigrations(): array
    {
        return [
            'create_people_table',
        ];
    }
}

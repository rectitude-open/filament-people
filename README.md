![Filament People Banner](./art/Filament%20People.png)
# Filament People

![Do not use](https://img.shields.io/badge/Under%20development-Don't%20use-red)
[![Tests](https://github.com/rectitude-open/filament-people/actions/workflows/run-tests.yml/badge.svg)](https://github.com/rectitude-open/filament-people/actions/workflows/run-tests.yml)
[![PHPStan](https://img.shields.io/badge/PHPStan-level%205-brightgreen)](https://phpstan.org/)
[![Latest Version on Packagist](https://img.shields.io/packagist/v/rectitude-open/filament-people.svg?style=flat-square)](https://packagist.org/packages/rectitude-open/filament-people)
[![Total Downloads](https://img.shields.io/packagist/dt/rectitude-open/filament-people.svg?style=flat-square)](https://packagist.org/packages/rectitude-open/filament-people)
[![PRs Welcome](https://img.shields.io/badge/PRs-welcome-brightgreen.svg?style=flat-square)](https://github.com/rectitude-open/filament-people/pulls)


Filament People is a Filament plugin that adds a member management section to your Filament admin panel. It allows you to easily manage and display information about people, such as their name, title, biography, and avatar. This package is ideal for organizations, companies, or teams that need to manage member information in the admin panel.

> **Note:** This plugin relies on several excellent Laravel/Filament plugins. Before installing Filament People, you must ensure that all the following dependencies are installed and properly configured in your project.
[Filament Tree](https://github.com/solutionforest/filament-tree), [Filament Select Tree](https://github.com/CodeWithDennis/filament-select-tree), [Eloquent Sluggable](https://github.com/cviebrock/eloquent-sluggable), [Filament Versionable](https://github.com/mansoorkhan96/filament-versionable), [Filament SEO](https://github.com/ralphjsmit/laravel-filament-seo), [Filament Curator](https://github.com/awcodes/filament-curator)

This package is also a standalone part of a CMS project: [FilaPress](https://github.com/rectitude-open/filapress).

Resource | Page | Cluster | Migration | Model | Config | View | Localization
--- | --- | --- | --- | --- | --- | --- | ---
✅ | ✅| ✅ | ✅ | ✅ | ✅ | ❌ | ✅  

## Installation

You can install the package via composer:

```bash
composer require rectitude-open/filament-people
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-people-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-people-config"
```

Optionally, you can publish the translations using

```bash
php artisan vendor:publish --tag="filament-people-translations"
```

This is the contents of the published config file:

```php
return [
    'cluster' => [
        'navigation_sort' => 0,
        'navigation_icon' => 'heroicon-o-identification',
    ],
    'person' => [
        'navigation_sort' => 0,
        'navigation_icon' => 'heroicon-o-identification',
        'datetime_format' => 'Y-m-d H:i:s',
        'navigation_badge' => false,
        'model' => \RectitudeOpen\FilamentPeople\Models\Person::class,
        'filament_resource' => \RectitudeOpen\FilamentPeople\Filament\Resources\PersonResource::class,
    ],
    'person_category' => [
        'model' => \RectitudeOpen\FilamentPeople\Models\PersonCategory::class,
        'page' => \RectitudeOpen\FilamentPeople\Filament\Pages\PersonCategory::class,
        'navigation_sort' => 2,
        'navigation_icon' => 'heroicon-o-rectangle-stack',
    ],

    'editor_component_class' => \Filament\Forms\Components\RichEditor::class,
];
```

## Usage

The package provides a resource page that allows you to manage People in your Filament admin panel. 

To use the resource page provided by this package, you need to register it in your Panel Provider first.

```php
namespace App\Providers\Filament;

use RectitudeOpen\FilamentPeople\FilamentPeoplePlugin;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->plugins([
                FilamentPeoplePlugin::make()
            ]);
    }
}
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Aspirant Zhang](https://github.com/aspirantzhang)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

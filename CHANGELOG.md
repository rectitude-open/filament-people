# Changelog

## [1.6.0](https://github.com/rectitude-open/filament-people/compare/v1.5.0...v1.6.0) (2025-07-14)


### Features

* add method to retrieve all published people ([b3e7c14](https://github.com/rectitude-open/filament-people/commit/b3e7c148b5902c47572413f08f95bab5a421463a))
* add more translations ([5851ffa](https://github.com/rectitude-open/filament-people/commit/5851ffa61c68b398f00bf4966d1848be4445ea2a))
* enhance getCategoriesWithPeople method to support filtering by category ID ([68daf40](https://github.com/rectitude-open/filament-people/commit/68daf4064f0cad17adcf015723fe186256df058f))


### Bug Fixes

* change ordering of created_at to ascending in ordered scope ([9e00a05](https://github.com/rectitude-open/filament-people/commit/9e00a057240fd18b652083f26c803714c9cd23ae))

## [1.5.0](https://github.com/rectitude-open/filament-people/compare/v1.4.1...v1.5.0) (2025-07-09)


### Features

* add category model retrieval and categories with people method to FilamentPeople ([30849eb](https://github.com/rectitude-open/filament-people/commit/30849eb3a4a499e35c37ad200b51186cf09f596d))
* enhance FilamentPeople model with published person retrieval methods by ID and slug ([6e1f102](https://github.com/rectitude-open/filament-people/commit/6e1f102745dae4802890d1c8de1c7445f1dfc69a))


### Bug Fixes

* add down method to drop 'people' table in migration ([1e966f7](https://github.com/rectitude-open/filament-people/commit/1e966f75169308cde6e666bdaf624c2dcb3f8b19))

## [1.4.1](https://github.com/rectitude-open/filament-people/compare/v1.4.0...v1.4.1) (2025-06-30)


### Bug Fixes

* change visibility of query scope methods to protected ([91d7cd3](https://github.com/rectitude-open/filament-people/commit/91d7cd398ad8e5522a7b92102650ed87027d27b9))

## [1.4.0](https://github.com/rectitude-open/filament-people/compare/v1.3.0...v1.4.0) (2025-06-30)


### Features

* add 'with' property to People model for eager loading avatar relationship ([f9d01be](https://github.com/rectitude-open/filament-people/commit/f9d01be4a8467d9db074dd03cc2690ed34b05938))
* add ordered method to PeopleCategory for sorting by weight and creation date ([60ed414](https://github.com/rectitude-open/filament-people/commit/60ed414e6e337cf76d2bd30b93ea69e48a6aef35))

## [1.3.0](https://github.com/rectitude-open/filament-people/compare/v1.2.1...v1.3.0) (2025-06-29)


### Features

* implement getModel method to return configured model class ([312a955](https://github.com/rectitude-open/filament-people/commit/312a955560ede4e96a9405777f81aae6acc87a49))
* rename unpublished method to draft and add ordered method for display order ([f3b38b0](https://github.com/rectitude-open/filament-people/commit/f3b38b0a2f9e4b80fbe303f68a301e75baa5fa96))

## [1.2.1](https://github.com/rectitude-open/filament-people/compare/v1.2.0...v1.2.1) (2025-06-29)


### Bug Fixes

* default string value for input fields in PeopleResource ([4b8c948](https://github.com/rectitude-open/filament-people/commit/4b8c94831a382656b261073794393cba87039215))

## [1.2.0](https://github.com/rectitude-open/filament-people/compare/v1.1.0...v1.2.0) (2025-06-29)


### Features

* add core management feature ([8d748c9](https://github.com/rectitude-open/filament-people/commit/8d748c9a8e14bfe43871c81990d71c75b08e3b42))
* add models and migrations ([0661b6b](https://github.com/rectitude-open/filament-people/commit/0661b6bfbe4e0b06be33db0d42ac5ba83702ec28))
* add phone and is_published fields to People model and factory ([f7efc33](https://github.com/rectitude-open/filament-people/commit/f7efc33f62de1471496996e1512c65b48ac8d96d))

## [1.1.0](https://github.com/rectitude-open/filament-people/compare/v1.0.0...v1.1.0) (2025-06-27)


### Features

* add dependencies ([31fb82c](https://github.com/rectitude-open/filament-people/commit/31fb82c1ecd84bffc8f173f3d646bcd8170c0016))

## 1.0.0 (2025-06-27)


### Features

* init package name ([bbde9fe](https://github.com/rectitude-open/filament-people/commit/bbde9fe1972bac87a5a2b8dc24a899bcb1d1a4a2))

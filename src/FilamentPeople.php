<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentPeople;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use RectitudeOpen\FilamentPeople\Models\Person;
use RectitudeOpen\FilamentPeople\Models\PersonCategory;

class FilamentPeople
{
    /**
     * @return class-string<Person>
     */
    public function getModel(): string
    {
        return config('filament-people.person.model', Person::class);
    }

    /**
     * @return class-string<Person>
     */
    public function getCategoryModel(): string
    {
        return config('filament-people.person_category.model', PersonCategory::class);
    }

    /**
     * @throws ModelNotFoundException
     */
    public function getPublishedPersonByIdOrFail(int $id): Person
    {
        // @phpstan-ignore-next-line
        $people = $this->getModel()::with(['categories'])->published()->findOrFail($id);

        assert($people instanceof Person);

        return $people;
    }

    /**
     * @throws ModelNotFoundException
     */
    public function getPublishedPersonBySlugOrFail(string $slug): Person
    {
        // @phpstan-ignore-next-line
        $people = $this->getModel()::with(['categories'])->published()->withSlug($slug)->firstOrFail();

        assert($people instanceof Person);

        return $people;
    }

    /**
     * @return Collection<int, PersonCategory>
     */
    public function getCategoriesWithPeople(): Collection
    {
        // @phpstan-ignore-next-line
        $categoriesWithPeople = $this->getCategoryModel()::query()
            ->with(['people' => function ($query) {
                $query->published()->ordered();
            }])
            ->ordered()
            ->get();

        /** @var Collection<int, PersonCategory> $categoriesWithPeople */
        return $categoriesWithPeople;
    }

    /**
     * @return Collection<int, Person>
     */
    public function getAllPublishedPeople(): Collection
    {
        // @phpstan-ignore-next-line
        $people = $this->getModel()::with(['categories'])->published()->ordered()->get();

        /** @var Collection<int, Person> $people */
        return $people;
    }
}

<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentPeople;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use RectitudeOpen\FilamentPeople\Models\People;
use RectitudeOpen\FilamentPeople\Models\PeopleCategory;

class FilamentPeople
{
    /**
     * @return class-string<People>
     */
    public function getModel(): string
    {
        return config('filament-people.people.model', People::class);
    }

    /**
     * @return class-string<People>
     */
    public function getCategoryModel(): string
    {
        return config('filament-people.people_category.model', PeopleCategory::class);
    }

    /**
     * @throws ModelNotFoundException
     */
    public function getPublishedPersonByIdOrFail(int $id): People
    {
        // @phpstan-ignore-next-line
        $people = $this->getModel()::with(['categories'])->published()->findOrFail($id);

        assert($people instanceof People);

        return $people;
    }

    /**
     * @throws ModelNotFoundException
     */
    public function getPublishedPersonBySlugOrFail(string $slug): People
    {
        // @phpstan-ignore-next-line
        $people = $this->getModel()::with(['categories'])->published()->withSlug($slug)->firstOrFail();

        assert($people instanceof People);

        return $people;
    }

    /**
     * @return Collection<int, PeopleCategory>
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

        /** @var Collection<int, PeopleCategory> $categoriesWithPeople */
        return $categoriesWithPeople;
    }
}

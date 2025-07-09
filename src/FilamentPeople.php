<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentPeople;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use RectitudeOpen\FilamentPeople\Models\People;

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
}

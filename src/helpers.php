<?php

declare(strict_types=1);

use Illuminate\Database\Eloquent\Collection;
use RectitudeOpen\FilamentPeople\FilamentPeople;
use RectitudeOpen\FilamentPeople\Models\PersonCategory;

if (! function_exists('person_category')) {
    /**
     * @return Collection<int, PersonCategory>
     */
    function person_category(?int $parentId = null, bool $withPeople = true): Collection
    {
        if ($withPeople) {
            $service = app(FilamentPeople::class);

            return $service->getCategoryTreeWithPeople($parentId);
        }

        $query = PersonCategory::query()->with('children');

        if ($parentId) {
            $query->where('parent_id', $parentId);
        } else {
            $query->isRoot();
        }

        return $query->ordered()->get();
    }
}

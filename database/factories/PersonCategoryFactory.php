<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentPeople\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use RectitudeOpen\FilamentPeople\Models\PersonCategory;

class PersonCategoryFactory extends Factory
{
    protected $model = PersonCategory::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->name(),
            'parent_id' => -1,
            'weight' => $this->faker->numberBetween(0, 100),
        ];
    }
}

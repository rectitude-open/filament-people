<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentPeople\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use RectitudeOpen\FilamentPeople\Models\Person;

class PersonFactory extends Factory
{
    protected $model = Person::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'title' => $this->faker->jobTitle(),
            'tagline' => $this->faker->realText(700),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
            'bio' => $this->faker->paragraph(),
            'sidebar' => $this->faker->realText(700),
            'is_published' => $this->faker->boolean(),
            'display_order' => $this->faker->numberBetween(0, 100),
            'created_at' => $this->faker->dateTimeThisYear(),
        ];
    }
}

<?php

declare(strict_types=1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->realTextBetween(20, 40),
            'description' => $this->faker->text,
            'finished_at' => $this->faker->dateTimeBetween('now', '+10 days'),
        ];
    }
}

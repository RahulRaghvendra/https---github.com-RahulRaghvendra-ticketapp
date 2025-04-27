<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\EventModel;  // Correct model reference

class EventModelFactory extends Factory
{
    protected $model = EventModel::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(3), // e.g., "Music Concert Night"
            'date' => $this->faker->dateTimeBetween('+1 week', '+2 months'),
            'venue' => $this->faker->city . ' Convention Center',
            'available_seats' => $this->faker->numberBetween(50, 200),
        ];
    }
}

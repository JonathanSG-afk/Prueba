<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class UsersFactory extends Factory
{
    protected $model = User::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return[
            'name' => $this->faker->name(),
            'age' => $this->faker->numberBetween($min = 18, $max = 90),
            'dateBirth' => $this->faker->date('Y-m-d','now'),
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\CommandLine;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommandLineFactory extends Factory
{
    protected $model = CommandLine::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name" => $this->faker->name(),
            "ref" => $this->faker->uuid(),
            "quantity" => $this->faker->numberBetween(1, 3),
            "price" => $this->faker->randomFloat(3, 5, 1000),
        ];
    }
}

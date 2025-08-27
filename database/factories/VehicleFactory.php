<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\vehicle>
 */
class VehicleFactory extends Factory
{
     protected $model = \App\Models\vehicle::class;
    /**
   
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' =>$this->faker->word(),
            'model' =>$this->faker->word(),
            'plat' => $this->faker->numberBetween(1, 100),
            'color' =>$this->faker->word(),
        ];
    }
}

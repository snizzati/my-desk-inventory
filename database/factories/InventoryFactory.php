<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\inventory>
 */
class InventoryFactory extends Factory
{
    protected $model = \App\Models\Inventory::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = \Faker\Factory::create('ms_MY');

        return [
            'name' =>$faker->name(),
            'quantity' =>$this->faker->numberBetween(1, 100),
            'price' => $this->faker->randomFloat(2, 1,1000),
            'description' =>$this->faker->word(),
            'user_id'=> \App\Models\User::factory(),
            
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rent>
 */
class RentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // faker region indonesia
            $faker = Factory::create('id_ID'),
            'name' => $faker->name,
            'deskripsi' => $faker->text(100),
            'image' => basename($this->faker->image(storage_path('app/public'))),
            'price' => $faker->number(1000, 10000),
        ];
    }
}

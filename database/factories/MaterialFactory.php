<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Material>
 */
class MaterialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    //4.9 Crear factory para material
    public function definition(): array
    {
        return [
            'existencia' =>$this->faker->numberBetween(1,100),
            'tipo' => $this->faker->word
        ];
    }
}

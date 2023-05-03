<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rutas>
 */
class RutasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => fake()->name(),
            'dificultad' => fake()->numberBetween(0,10),
            'deporte' => 'bici', // password
            'imagen' => fake()->sentence(),
            'municipio' => fake()->state(),
        ];
    }
}

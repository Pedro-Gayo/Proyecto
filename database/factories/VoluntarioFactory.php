<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Voluntario;
use Illuminate\Database\Eloquent\Factories\Factory;

class VoluntarioFactory extends Factory
{
    protected $model = Voluntario::class;

    public function definition()
    {
        $user = User::inRandomOrder()->first();

        return [
            'nombre' => $user->name,
            'metodoContacto' => $this->faker->email(),
            'calificacion' => $this->faker->numberBetween(1, 5),
            'id_user' => $user->id,
        ];
    }
}


<?php

namespace Database\Seeders;

use App\Models\Voluntario;
use App\Models\User;
use Illuminate\Database\Seeder;

class VoluntarioSeeder extends Seeder
{
    public function run()
    {
        // // Obtener 5 usuarios aleatorios
        // $users = User::inRandomOrder()->limit(5)->get();

        // // Crear un voluntario para cada usuario
        // foreach ($users as $user) {
        //     Voluntario::factory()->create([
        //         'nombre' => $user->name,
        //         'id_user' => $user->id,
        //     ]);
        // }
    }
}

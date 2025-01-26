<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Pedidos;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Crear 5 usuarios con datos ficticios
        $usuarios = User::factory()->count(5)->create();

        // Crear 3 pedidos por usuario
        foreach ($usuarios as $usuario) {
            Pedidos::factory()->count(3)->create(['id_usuario' => $usuario->id]);
    }
}
}

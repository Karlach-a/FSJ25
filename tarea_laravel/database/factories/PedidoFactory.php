<?php

namespace Database\Factories;
use App\Models\Pedidos;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PedidoFactory extends Factory
{
    protected $model = Pedidos::class; // Vincular el modelo Pedido
    public function definition(): array
    {
        return [
            'producto' => $this->faker->word, // Nombre del producto
            'cantidad' => $this->faker->numberBetween(1, 10), // Cantidad aleatoria
            'total' => $this->faker->randomFloat(2, 50, 300), // Total entre $50 y $300
            'id_usuario' => null, // Se asignara mas tarde en el Seeder
        ];
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pedidos;

class PedidoController extends Controller
{
    public function store(Request $request)
    {
        // Validar los datos de la solicitud
        $request->validate([
            'producto' => 'required|string|max:255',
            'cantidad' => 'required|integer|min:1',
            'total' => 'required|numeric|min:0',
            'user_id' => 'required|exists:usuarios,id', // Verifica que el usuario exista
        ]);

        // Crear el pedido
        $pedido = Pedidos::create([
            'producto' => $request->producto,
            'cantidad' => $request->cantidad,
            'total' => $request->total,
            'user_id' => $request->user_id,
        ]);

        // Retornar la respuesta
        return response()->json([
            'message' => 'Pedido creado correctamente',
            'data' => $pedido,
        ], 201);
    }
}

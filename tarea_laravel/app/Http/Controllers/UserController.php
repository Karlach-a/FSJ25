<?php
namespace App\Http\Controllers;

use App\Models\User;
use Exception;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(request $request)
    {
        try {
            $request->validate([
                'nombre' => 'required|string|max:255',
                'correo' => 'string|email|max:255|unique:users',
                'telefono' => 'nullable|string|max:15'
            ]);
            $user = User::create([
                'nombre' => $request->nombre,
                'correo' => $request->correo,
                'telefono' => $request->telefono
            ]);

            return response()->json([
                'message' => 'User created succesfully',
                'data' => $user
            ], 201);
        } catch (Exception $error) {
            return response()->json([
                'error' => $error->getMessage()
            ], 201);
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



class UserController extends Controller
{
    //
    public function register(request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8'
            ]);
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);

            return response()->json([
                'message' => 'User created succesfully',
                'data' => $user
            ], 201);
        } catch (Exception $error) {
            return response()->json([
                'error' => $error->getMessage()
            ], 400);
        }
    }

    public function login(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required|string|email',
                'password' => 'required|string|min:8'
            ]);

            $credentials=$request->only('email','password');

            if(!Auth::attempt($credentials)){
                throw new Exception('Invalid credentials');

            }
            $user=$request->user();
            
            $token=$user->createToken('auth_token')->plainTextToken;

            return response()->json([
              'message' => 'User logged successfully',
              'user'=>$user,
              'token'=> $token,
              'token_type'=>'Bearer'
            ]);

        } catch (Exception $error) {
            return response()->json([
                'error' => $error->getMessage()
            ], 400);
        }
    }
    public function logout(Request $request){ 

        try{
            // Revocar el token actual del usuario
            // $request->user()->currentAccessToken()->delete();

            //Eliminar todos los tokens del usuario
            $request->user()->tokens()->delete();

            return response()->json([
                'message' => 'User logged out successfully'
            ]);
        }catch(Exception $error){
        return response()->json([
            'error' => $error->getMessage()
        ], 400);
    };

}
}

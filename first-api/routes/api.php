<?php
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//rutas de las tareas API
Route::post('register',[UserController::class,'register']);
Route::post('login',[UserController::class,'login']);


Route::middleware('auth:sanctum')->group(function(){

Route::get('tasks', [TaskController::class,'index']);
Route::post('tasks', [TaskController::class,'store']);
Route::put('tasks/{id}',[TaskController::class,'update']);
Route::delete('tasks/{id}',[TaskController::class,'destroy']);
Route::post('logout',[UserController::class,'logout']);
});
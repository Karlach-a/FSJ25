<?php
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//rutas de las tareas API
Route::post('register',[UserController::class,'register']);
Route::post('login',[UserController::class,'login']);

Route::middleware('auth:sanctum')->group(function(){
Route::get('posts',[PostController::class,'index']);
Route::post('posts',[PostController::class,'store']);
Route::put('posts/{id}',[PostController::class,'update']);
Route::delete('posts/{id}',[PostController::class,'destroy']);


//Route::get('tasks', [TaskController::class,'index']);
//Route::post('tasks', [TaskController::class,'store']);

//Route::delete('tasks/{id}',[TaskController::class,'destroy']);
//Route::post('logout',[UserController::class,'logout']);
});
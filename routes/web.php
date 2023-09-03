<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class,'index']);
Route::get('tasks', [TaskController::class,'index']);
// Route::get('tasks/{param}', [TaskController::class,'show']);
Route::get('tasks/{id}', [TaskController::class,'show']);
Route::post('tasks', [TaskController::class,'store']);
Route::patch('tasks/{id}', [TaskController::class,'update']);
Route::delete('tasks/{id}', [TaskController::class,'destroy']);

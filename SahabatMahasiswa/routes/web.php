<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('tasks', 'App\Http\Controllers\TaskController');
Route::get('/dashboard', [TaskController::class, 'index']);
Route::get('/dashboard/AddSchedule', [TaskController::class, 'create']);
Route::post('/dashboard/store', [TaskController::class, 'store']);
Route::get('/dashboard/{id}/EditSchedule', [TaskController::class, 'edit']);
Route::put('/dashboard/{id}', [TaskController::class, 'update']);
Route::delete('/dashboard/{id}', [TaskController::class, 'delete']);
Route::get('/dashboard/{id}', [TaskController::class, 'show']);
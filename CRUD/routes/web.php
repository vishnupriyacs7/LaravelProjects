<?php

use App\Http\Controllers\CrudController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/tasks', [CrudController::class, 'index']);
Route::get('/tasks/{id}', [CrudController::class, 'show']);
Route::post('/tasks', [CrudController::class, 'store']);
Route::put('/tasks/{id}', [CrudController::class, 'update']);
Route::delete('/tasks/{id}', [CrudController::class, 'destroy']);


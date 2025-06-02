<?php

use App\Http\Controllers\CRUDController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/task', [CRUDController::class, 'index']);
// Route::get('/tasks/{id}', [CRUDController::class, 'show']);
Route::get('/store', [CRUDController::class, 'store']);
// Route::put('/tasks/{id}', [CRUDController::class, 'update']);
Route::delete('/tasks/{id}', [CRUDController::class, 'destroy']);


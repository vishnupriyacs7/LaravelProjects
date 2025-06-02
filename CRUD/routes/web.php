<?php

use App\Http\Controllers\CrudController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/items', [CrudController::class, 'index']);
Route::get('/items/{id}', [CrudController::class, 'show']);
Route::post('/items', [CrudController::class, 'store']);
Route::put('/items/{id}', [CrudController::class, 'update']);
Route::delete('/items/{id}', [CrudController::class, 'destroy']);

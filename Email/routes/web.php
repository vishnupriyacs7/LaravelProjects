<?php

use App\Http\Controllers\EmailController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/send-email', [EmailController::class,"sendEmail"]);


Route::get('/send', function () {
    return view('emailWithAttachment');
});

Route::post('/email', [EmailController::class,"Email"]);

//using send()
Route::get('/mail', [EmailController::class,"usingSend"]);

//api
Route::get('/users', [EmailController::class, 'index']);
<?php

use App\Http\Controllers\DBQuery;
use App\Http\Controllers\Form;
use App\Http\Controllers\NewUserController;
use App\Http\Controllers\StudentList;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/insert',[NewUserController::class,'insertData']);
Route::get('/viewData',[NewUserController::class,'view']);
Route::get('/add',[NewUserController::class,'addData']);
Route::get('/update',[NewUserController::class,'updateData']);
Route::get('/delete',[NewUserController::class,'delete']);

//select data from table
Route::get('/view',[NewUserController::class,'viewdata']);

//db class 
Route::get('/query',[DBQuery::class,'data']);

//form handling
// Route::get('/',[Form::class,'register']);
Route::post('/submit',[Form::class,'submit']);
Route::get('/success', [Form::class,'msg']);



Route::get('/',[StudentList::class,"show"]);
Route::get('/add',[StudentList::class,"add"])->name("add");
Route::post('/adddata',[StudentList::class,"add_data"])->name('adddata');
Route::get('/view',[StudentList::class,"view"])->name("view");

//view function
Route::get('/welcome', function () { 
    $name = 'SCOPE INDIA'; 
    return view('welcome')->with('firstname', $name);
});

Route::get('/newwelcome', function () {
    $value = 'Hello, Kerala!';
    $array = ["php", "laravel", "wordpress"]; 
    return view('newpage', ['variable' => $value,'array' =>$array]);
});
    
    




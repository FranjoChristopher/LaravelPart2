<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController; //add the ControllerNameSpace

Route::get('/', function () {
    return view('welcome');
});

Route::get('/f1', function () {
    return view('f1');
});

Route::get('users', [UserController::class, 'users']);

//blog\routes\web.php

 
Route::get('/', function () {
    return view('welcome');
});
 
Route::resource("/student", StudentController::class);
Route::get('/', function () {
    return view('welcome');
});
 
Route::resource("/student", StudentController::class);
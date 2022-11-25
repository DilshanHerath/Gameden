<?php

use Illuminate\Support\Facades\Route;


//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/admin', function () {
//    return view('admin.index');
//});

Route::resource('/login', App\Http\Controllers\LoginController::class);
Route::resource('/games', App\Http\Controllers\GameController::class);
Route::resource('/home', App\Http\Controllers\HomeController::class);
Route::resource('/admin', App\Http\Controllers\AdminController::class);
Route::resource('/blog', App\Http\Controllers\BlogController::class);
Route::resource('/', App\Http\Controllers\HomeController::class);

Route::get('check_user', [\App\Http\Controllers\LoginController::class, 'check_user'])->name('check_user');

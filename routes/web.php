<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/new', [App\Http\Controllers\HomeController::class, 'new']);

Route::post('/add', [App\Http\Controllers\HomeController::class, 'add']);

Route::get('/delete/{id}', [App\Http\Controllers\HomeController::class, 'remove']);

Route::get('/edit/{id}', [App\Http\Controllers\HomeController::class, 'edit']);

Route::post('/update/{id}', [App\Http\Controllers\HomeController::class, 'update']);



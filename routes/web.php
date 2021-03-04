<?php

use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', [Homecontroller::class, 'index']);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/company', [Homecontroller::class, 'company']);
// Route::get('/services', [Homecontroller::class, 'service']);
// Route::get('/contact', [Homecontroller::class, 'contact']);

Route::get('/', [PostController::class, 'post']);

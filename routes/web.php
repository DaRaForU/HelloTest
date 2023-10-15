<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\HelloConstroller;
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

Route::get('/about', [AboutController::class, 'index']);

Route::get('/hello', [HelloConstroller::class, 'hello']);

Route::get('/footer', [FooterController::class, 'welcome']);

Route::get('/', function () {
    return view('hello');
});
Route::get('/', function () {
    return view('hi');
});
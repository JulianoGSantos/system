<?php

use App\Http\Controllers\BoardController;
use App\Http\Controllers\WoodController;
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

Route::get('home', [BoardController::class, 'start'])->name('start');
Route::get('cliente', [BoardController::class, 'indexclient'])->name('index.client');
Route::post('cliente', [BoardController::class, 'storeclient'])->name('store.client');
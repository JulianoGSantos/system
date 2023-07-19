<?php

use App\Http\Controllers\BoardController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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

Route::middleware(['auth'])->group(function(){
    
    //Home
    Route::get('home', [BoardController::class, 'start'])->name('start');
    Route::view('busca', 'search')->name('search');

    //Cliente
    Route::get('cliente', [BoardController::class, 'indexclient'])->name('index.client');
    Route::post('cliente', [BoardController::class, 'storeclient'])->name('store.client');
    Route::get('busca/cliente', [BoardController::class, 'searchclient'])->name('search.client');
    Route::get('cliente/{id}', [BoardController::class, 'showclient'])->name('show.client');
    Route::get('cliente/{id}/edit', [BoardController::class, 'editclient'])->name('edit.client');
    Route::put('cliente/{id}', [BoardController::class, 'updateclient'])->name('update.client');
    Route::delete('cliente/{id}', [BoardController::class, 'destroyclient'])->name('destroy.client');

});

require __DIR__.'/auth.php';

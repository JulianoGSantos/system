<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\BoardController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EventController;
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

    //Consulta
    Route::get('consulta', [EventController::class, 'indexevent'])->name('index.event');
    Route::post('consulta', [EventController::class, 'storeevent'])->name('store.event');
    Route::get('busca/consulta', [EventController::class, 'searchevent'])->name('search.event');
    Route::get('consulta/{id}', [EventController::class, 'showevent'])->name('show.event');
    Route::get('consulta/{id}/edit', [EventController::class, 'editevent'])->name('edit.event');
    Route::put('consulta/{id}', [EventController::class, 'updateevent'])->name('update.event');
    Route::delete('consulta/{id}', [EventController::class, 'destroyevent'])->name('destroy.event');
});

require __DIR__.'/auth.php';

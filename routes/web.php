<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::middleware(['auth', 'verified'])->group(function () {    
    Route::controller(TaskController::class)->group(function () {
        Route::get('/dashboard', 'show')->name('dashboard');
        Route::get('/create', 'create')->name('create');
        Route::post('/create', 'save');
        Route::get('/delete/{id}', 'delete')->name('delete');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::get('/show/{id}', 'view')->name('show');
        Route::post('/edit/{id}', 'update');       
    });
});

require __DIR__.'/auth.php';

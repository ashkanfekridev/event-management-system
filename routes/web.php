<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'home'])->name('home');


Route::get('events/{event}', [EventController::class, 'show'])->name('events.show');



/**
 * Auth
 */
Route::get('login', [LoginController::class, 'form'])->name('auth.login');
Route::post('login', [LoginController::class, 'login'])->name('auth.login');







Route::get('/{vue_capture?}', function () {
    return view('index');
})->where('vue_capture', '[\/\w\.-]*');




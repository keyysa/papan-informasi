
<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\SambutanController;
use App\Http\Controllers\ProgramController;

Route::get('/', [PublicController::class, 'home'])
    ->name('public.home');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])
    ->middleware(['auth', 'admin'])
    ->name('home');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('informasi', InformasiController::class);
    Route::resource('slider', SliderController::class);
    Route::resource('card', CardController::class);
    Route::resource('sambutan', SambutanController::class);
    Route::resource('program', ProgramController::class);
});

Route::get('/papan-informasi', [PublicController::class, 'index'])
    ->name('public.index');

Route::get('/papan-informasi/{id}', [PublicController::class, 'show'])
    ->name('public.show');
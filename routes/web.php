<?php

use App\Http\Controllers\Frontend\FrontController;
use Illuminate\Support\Facades\Route;

Route::controller(FrontController::class)
    ->as('front.')
    ->group(function () {
        Route::get('/', 'index')->name('home');
    });

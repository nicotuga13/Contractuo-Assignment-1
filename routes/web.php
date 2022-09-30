<?php

use App\Http\Controllers\HomeController;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->get('/', function () {
    return redirect(RouteServiceProvider::HOME);
});

Auth::routes();

Route::prefix('overview')->middleware('auth')->group(function () {
    Route::get('/{any}', [HomeController::class, 'index'])->where('any', '.*');
});
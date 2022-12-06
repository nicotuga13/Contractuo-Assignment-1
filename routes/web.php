<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ViewController;
use App\Providers\RouteServiceProvider;
use App\Http\Middleware\EnsureAdmin;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->get('/', function () {
    return redirect(RouteServiceProvider::HOME);
});

Auth::routes();

Route::prefix('overview')->middleware('auth')->group(function () {

    //uses middleware EnsureAdmin to check if user is an admin. If not can not create tasks
    //route for Task Controller
    Route::resource('tasks', TaskController::class)->only(['index', 'store'])->middleware(EnsureAdmin::class);
    //route for View controller
    Route::get('view', [ViewController::class, 'index']);

    Route::get('/{any}', [HomeController::class, 'index'])->where('any', '.*');
    
});


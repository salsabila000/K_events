<?php

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



route::prefix('admin')
->group(function(){
        Route::get('/',[App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    });


Route::prefix('user')->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('detail', [App\Http\Controllers\HomeController::class, 'eventdetail'])->name('detail_events'); 

    Route::get('login-user', [App\Http\Controllers\HomeController::class, 'sign_in'])->name('login');
}); 
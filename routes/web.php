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
        Route::get('event-page',[App\Http\Controllers\Admin\EventController::class, 'event'])->name('eventdetail');
        Route::get('transaction',[App\Http\Controllers\Admin\EventController::class, 'transaction'])->name('transactionadmin');


    });


Route::prefix('user')->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('detail', [App\Http\Controllers\HomeController::class, 'eventdetail'])->name('detail_events'); 

    Route::get('login-user', [App\Http\Controllers\HomeController::class, 'sign_in'])->name('login');

    Route::get('faq', [App\Http\Controllers\HomeController::class, 'faq'])->name('faq-page');

    Route::get('history', [App\Http\Controllers\HomeController::class, 'history'])->name('history-page');

    Route::get('register', [App\Http\Controllers\HomeController::class, 'register'])->name('daftar');

    Route::get('viewhome', [App\Http\Controllers\HomeController::class, 'viewhome'])->name('more');

    Route::get('viewhomenor', [App\Http\Controllers\HomeController::class, 'viewhomenor'])->name('noraebang');

    Route::get('viewhomebday', [App\Http\Controllers\HomeController::class, 'viewhomebday'])->name('birthday');

    Route::get('viewhomecompt', [App\Http\Controllers\HomeController::class, 'viewhomecompt'])->name('competition');
    
    Route::get('konten', [App\Http\Controllers\HomeController::class, 'konten'])->name('event');





}); 
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WingersController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['as' => 'wingers.'], function (){
    Route::get('/', [HomeController::class, 'index'])->name('index');
    Route::get('/careers', [HomeController::class, 'careers'])->name('careers');

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

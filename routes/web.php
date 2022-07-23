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

Route::group(['as' => '5bdf.'], function (){
    Route::get('/', [HomeController::class, 'index'])->name('index');
    Route::get('/careers', [HomeController::class, 'careers'])->name('careers');
    Route::get('/events', [HomeController::class, 'events'])->name('events');
    Route::get('/csr', [HomeController::class, 'csr'])->name('csr');
    Route::get('/our-group', [HomeController::class, 'ourGroup'])->name('our-group');

});

Route::group(['as' => '5bdf.wingers.'], function (){
    Route::get('/wingers', [WingersController::class, 'index'])->name('index');
    Route::get('/wingers/promotions',[WingersController::class, 'promotions'])->name('promotions');
    Route::get('/wingers/careers', [WingersController::class, 'careers'])->name('careers');
    Route::get('/wingers/franchise', [WingersController::class, 'franchise'])->name('franchise');

});

Auth::routes();



<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WingersController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HotWingController;
use App\Http\Controllers\SportController;

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
    Route::get('/wingers/store', [WingersController::class, 'store'])->name('store');

});

Route::group(['as'=>'5bdf.hot-wings.'], function (){
    Route::get('/hot-wings', [HotWingController::class, 'index'])->name('index');
    Route::get('/hot-wings/promotions', [HotWingController::class, 'promotions'])->name('promotions');
    Route::get('/hot-wings/careers', [HotWingController::class, 'careers'])->name('careers');
    Route::get('/hot-wings/franchise', [HotWingController::class, 'franchise'])->name('franchise');
    Route::get('/hot-wings/store', [HotWingController::class, 'store'])->name('store');

});

Route::group(['as'=>'5bdf.sports.'], function (){
    Route::get('/sports',[SportController::class, 'index'])->name('index');
    Route::get('/sports/promotions', [SportController::class, 'promotions'])->name('promotions');
    Route::get('/sports/careers', [SportController::class, 'careers'])->name('careers');
    Route::get('/sports/franchise', [SportController::class, 'franchise'])->name('franchise');
    Route::get('/sports/store', [SportController::class, 'store'])->name('store');

});

Auth::routes();



<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WingersController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HotWingController;
use App\Http\Controllers\SportController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\CareerPostController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\CsrController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;


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



Route::group(['as' => '5bdf.'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('index');

    // Careers
    Route::get('/careers', [HomeController::class, 'careers'])->name('careers');
    Route::get('/careers/{career}', [HomeController::class, 'career_view'])->name('career_view');

    Route::get('/events', [HomeController::class, 'events'])->name('events');
    Route::get('/csr', [HomeController::class, 'csr'])->name('csr');
    Route::get('/our-group', [HomeController::class, 'ourGroup'])->name('our-group');

});

Route::group(['as' => '5bdf.wingers.'], function () {
    Route::get('/wingers', [WingersController::class, 'index'])->name('index');

    Route::get('/wingers/careers', [WingersController::class, 'careers'])->name('careers');
    // Route::get('/wingers/careers/{career}', [WingersController::class, 'career_view'])->name('career_view');

    Route::get('/wingers/promotions', [WingersController::class, 'promotions'])->name('promotions');
    Route::get('/wingers/franchise', [WingersController::class, 'franchise'])->name('franchise');
    Route::get('/wingers/store', [WingersController::class, 'store'])->name('store');
});

Route::group(['as' => '5bdf.hot-wings.'], function () {
    Route::get('/hot-wings', [HotWingController::class, 'index'])->name('index');
    Route::get('/hot-wings/promotions', [HotWingController::class, 'promotions'])->name('promotions');
    Route::get('/hot-wings/careers', [HotWingController::class, 'careers'])->name('careers');
    Route::get('/hot-wings/franchise', [HotWingController::class, 'franchise'])->name('franchise');
    Route::get('/hot-wings/store', [HotWingController::class, 'store'])->name('store');
});

Route::group(['as' => '5bdf.sports.'], function () {
    Route::get('/sports', [SportController::class, 'index'])->name('index');
    Route::get('/sports/promotions', [SportController::class, 'promotions'])->name('promotions');
    Route::get('/sports/careers', [SportController::class, 'careers'])->name('careers');
    Route::get('/sports/franchise', [SportController::class, 'franchise'])->name('franchise');
    Route::get('/sports/store', [SportController::class, 'store'])->name('store');
});

// Global Resources
Route::group(['as'=> '5bdf.resources.'], function () {
    //
});

Route::group(['as' => '5bdf.admin.', 'middleware' => 'auth'], function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('index');

    // Carousel CRUD
    Route::post('/admin/carousel/store', [CarouselController::class, 'store'])->name('carousel.store');
    Route::delete('/admin/carousel/delete/{id}', [CarouselController::class, 'delete'])->name('carousel.delete');
    // Carousel Pages
    Route::get('/admin/carousel/main', [CarouselController::class, 'mainView'])->name('carousel.main');
    Route::get('/admin/carousel/wingers', [CarouselController::class, 'wingersView'])->name('carousel.wingers');
    Route::get('/admin/carousel/hot-wings', [CarouselController::class, 'hotWingsView'])->name('carousel.hot-wings');
    Route::get('/admin/carousel/sports', [CarouselController::class, 'sportsView'])->name('carousel.sports');

    // Careers CRUD
    Route::resource('/admin/careers', CareerPostController::class);

    // Events CRUD
    Route::resource('/admin/events', EventController::class);

    // Promotion CRUD
    Route::resource('/admin/promotions', PromotionController::class);

    // CSR CRUD
    Route::resource('/admin/csr', CsrController::class);

    // Products CRUD
    Route::resource('/admin/products', ProductController::class);
});



Auth::routes([
    'register' => false,
]);

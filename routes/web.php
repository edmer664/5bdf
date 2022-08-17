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
use App\Http\Controllers\EmailController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MonthlyEventController;
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
    Route::get('/events/{event}', [HomeController::class, 'event_view'])->name('event_view');
    Route::get('/csr', [HomeController::class, 'csr'])->name('csr');
    Route::get('/our-group', [HomeController::class, 'ourGroup'])->name('our-group');

    Route::get('/franchise', [EmailController::class, 'franchiseForm'])->name('email');

});

Route::group(['as' => '5bdf.wingers.'], function () {
    Route::get('/wingersunlimited', [WingersController::class, 'index'])->name('index');

    Route::get('/wingersunlimited/careers', [WingersController::class, 'careers'])->name('careers');
    // Route::get('/wingers/careers/{career}', [WingersController::class, 'career_view'])->name('career_view');

    Route::get('/wingersunlimited/promotions', [WingersController::class, 'promotions'])->name('promotions');
    Route::get('/wingersunlimited/franchise', [WingersController::class, 'franchise'])->name('franchise');
    Route::get('/wingersunlimited/store', [WingersController::class, 'store'])->name('store');
});

Route::group(['as' => '5bdf.hot-wings.'], function () {
    Route::get('/nybuffalobradshotwings', [HotWingController::class, 'index'])->name('index');
    Route::get('/nybuffalobradshotwings/promotions', [HotWingController::class, 'promotions'])->name('promotions');
    Route::get('/nybuffalobradshotwings/careers', [HotWingController::class, 'careers'])->name('careers');
    Route::get('/nybuffalobradshotwings/franchise', [HotWingController::class, 'franchise'])->name('franchise');
    Route::get('/nybuffalobradshotwings/store', [HotWingController::class, 'store'])->name('store');
});

Route::group(['as' => '5bdf.sports.'], function () {
    Route::get('/nybuffalobradssportslounge', [SportController::class, 'index'])->name('index');
    Route::get('/nybuffalobradssportslounge/promotions', [SportController::class, 'promotions'])->name('promotions');
    Route::get('/nybuffalobradssportslounge/careers', [SportController::class, 'careers'])->name('careers');
    Route::get('/nybuffalobradssportslounge/franchise', [SportController::class, 'franchise'])->name('franchise');
    Route::get('/nybuffalobradssportslounge/store', [SportController::class, 'store'])->name('store');
});

// Global Resources
Route::group(['as'=> '5bdf.resources.'], function () {
    //
});

Route::group(['as' => '5bdf.admin.', 'middleware' => 'auth'], function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('index');
    Route::get('/admin/settings', [AdminController::class, 'settings'])->name('settings');
    Route::put('/admin/settings', [AdminController::class, 'update_detail'])->name('update_detail');
    Route::put('/admin/password', [AdminController::class, 'update_password'])->name('update_password');

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

    // Monthly Events CRUD
    Route::resource('/admin/monthly-events', MonthlyEventController::class);
});



Auth::routes([
    'register' => false,
]);

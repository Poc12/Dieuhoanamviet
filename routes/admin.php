<?php

use App\Http\Controllers\BackEnd\Banner\BannerController;
use App\Http\Controllers\BackEnd\Categories\CategoriesController;
use App\Http\Controllers\BackEnd\Config\ConfigController;
use App\Http\Controllers\BackEnd\Contact\ContactController;
use App\Http\Controllers\BackEnd\Customer\CustomerController;
use App\Http\Controllers\BackEnd\Media\MediaController;
use App\Http\Controllers\BackEnd\Member\MemberController;
use App\Http\Controllers\BackEnd\Auth\LoginController;
use App\Http\Controllers\BackEnd\Auth\RegisterController;
use App\Http\Controllers\BackEnd\Menu\MenuController;
use App\Http\Controllers\BackEnd\Post\PostController;
use App\Http\Controllers\BackEnd\Statics\StaticsController;
use App\Http\Controllers\BackEnd\Product\ProductController;
use App\Http\Controllers\BackEnd\Subscriber\SubscriberController;
use App\Http\Controllers\BackEnd\Video\VideoController;
use App\Http\Controllers\HomeController;
use App\Http\Service\Media\UploadMediaService;
use Illuminate\Support\Facades\Route;

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

Route::prefix('admin')->group(function (){
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/save_login', [LoginController::class, 'login'])->name('save_login');
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('admin.register');
    Route::post('/logout', [LoginController::class, 'logout'])->name('admin.logout');
    Route::any('/upload', [UploadMediaService::class, 'upload'])->name('upload');
    Route::middleware('auth.admin:admin')->group(function (){
        Route::get('/home', [HomeController::class, 'index'])->name('home');
        Route::any('/member/{cmd?}', [MemberController::class, 'index'])->name('member');
        Route::any('/customer/{cmd?}', [CustomerController::class, 'index'])->name('customer');
        Route::any('/config/{cmd?}', [ConfigController::class, 'index'])->name('config');
        Route::any('/subscriber/{cmd?}', [SubscriberController::class, 'index'])->name('subscriber');
        Route::any('/video/{cmd?}', [VideoController::class, 'index'])->name('video');
        Route::any('/banner/{cmd?}', [BannerController::class, 'index'])->name('banner');
        Route::any('/products/{cmd?}', [ProductController::class, 'index'])->name('products');
        Route::any('/menu/{cmd?}', [MenuController::class, 'index'])->name('menu');
        Route::any('/categories/{cmd?}', [CategoriesController::class, 'index'])->name('categories');
        Route::any('/statics/{cmd?}', [StaticsController::class, 'index'])->name('statics');
        Route::any('/post/{cmd?}', [PostController::class, 'index'])->name('post');
        Route::any('/contact/{cmd?}', [ContactController::class, 'index'])->name('contact');
    });
});


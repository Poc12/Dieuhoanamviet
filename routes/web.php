<?php

use App\Http\Controllers\Auth\SocialLoginController;
use App\Http\Controllers\FrontEnd\Categories\CategoriesController;
use App\Http\Controllers\FrontEnd\Contact\ContactController;
use App\Http\Controllers\FrontEnd\Customer\CustomerController;
use App\Http\Controllers\FrontEnd\Home\HomeController;
use App\Http\Controllers\FrontEnd\Post\PostController;
use App\Http\Controllers\FrontEnd\Products\ProductController;
use App\Http\Controllers\FrontEnd\Sitemap\SitemapController;
use App\Http\Controllers\FrontEnd\Subscriber\SubscriberController;
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



Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('fe.home');
Route::any('/contact/{cmd?}', [ContactController::class, 'index'])->name('fe.contact');
Route::any('/subscriber/{cmd?}', [SubscriberController::class, 'index'])->name('fe.subscriber');
Route::any('/{cmd?}.html', [PostController::class, 'index_post'])->name('fe.post');
Route::any('/{cmd?}.c', [CategoriesController::class, 'check_list'])->name('fe.category');
Route::any('/{cmd?}.p', [ProductController::class, 'index_products'])->name('fe.products');
Route::any('/products/{cmd?}', [ProductController::class, 'index'])->name('fe.products_action');
Route::any('/comment/{cmd?}', [PostController::class, 'ajax_save'])->name('fe.comment');
Route::any('/sitemap', [SitemapController::class, 'index'])->name('sitemap');
Route::any('/cmp/{cmd?}', [ProductController::class, 'ajax_save'])->name('fe.cmp');
Route::prefix('social')->name('social.')->group(function () {
    Route::get('auth/{provider}', [SocialLoginController::class, 'loginUsingSocial'])->name('login');
    Route::get('callback/{provider}', [SocialLoginController::class, 'callbackFromSocial'])->name('callback');
});
Route::middleware('auth:web')->group(function (){
    Route::any('/customer/{cmd?}', [CustomerController::class, 'index'])->name('fe.customer');
    Route::any('/upload', [UploadMediaService::class, 'upload'])->name('fe.upload');
});

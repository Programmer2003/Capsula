<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\GithubAuthController;
use App\Http\Controllers\GoogleAuthController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReviewController;
use App\Models\Product;
use App\Models\ProductTag;
use App\Models\Tag;

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

Route::redirect('/', '/home');

Auth::routes();

Route::get('/test', function () {

    $product = Product::find(3);
    dump($product->averageRating());
});


Route::group(['prefix' => LaravelLocalization::setLocale()], function () {
    Route::post('{product}/reviews/store', [ReviewController::class, 'store'])->name('add-review');
    Route::get('/login-resiter', [HomeController::class, 'auth'])->name('login-resiter')->middleware('guest');
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/products', [HomeController::class, 'products'])->name('products');
    Route::get('/products/{product:slug}', [HomeController::class, 'product'])->name('product');

    Route::get('/privacy', [HomeController::class, 'privacy'])->name('privacy');
    Route::get('/terms', [HomeController::class, 'terms'])->name('terms');
    Route::get('/about', [HomeController::class, 'about'])->name('about');

    Route::get('/account', [HomeController::class, 'account'])->name('account');
    Route::get('/wishlist', [HomeController::class, 'wishlist'])->name('wishlist');
    Route::get('/cart', [HomeController::class, 'cart'])->name('cart');
    Route::get('/terms', [HomeController::class, 'terms'])->name('terms');

    Route::get('/blog', [BlogController::class, 'index'])->name('blog');
});


Route::prefix('auth')->group(function () {
    Route::prefix('google')->group(function () {
        Route::get('', [GoogleAuthController::class, 'redirect'])->name('google-auth');
        Route::get('callback', [GoogleAuthController::class, 'callback']);
    });

    Route::prefix('github')->group(function () {
        Route::get('', [GithubAuthController::class, 'redirect'])->name('github-auth');
        Route::get('callback', [GithubAuthController::class, 'callback']);
    });
});

<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\User\CartController;
use App\Http\Controllers\User\CheckoutController;
use App\Http\Controllers\User\Dashboard\AccountDeleteController;
use App\Http\Controllers\User\Dashboard\AddressController;
use App\Http\Controllers\User\Dashboard\ChangePasswordController;
use App\Http\Controllers\User\Dashboard\OrderController;
use App\Http\Controllers\User\Dashboard\ProfileController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\ProductController;
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

// Route::get('/', function () {
//     return view('user.home.index');
//     // return view('user.home.test');
// });
// Route::get('/login', function () {
//     return view('user.auth.login');
// })->name('login');
// Route::get('/signup', function () {
//     return view('user.auth.signup');
//     // return view('user.home.test');
// });
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
Route::get('/signup', [RegisterController::class, 'showSignup'])->name('signup');
Route::get('/forgot-password', [ForgotPasswordController::class, 'showForgotPassword'])->name('forgot-password');

Route::get('/products', [ProductController::class, 'showProductList'])->name('product-list');
// ROute::get('/products/{id}', [ProductController::class, 'showProductDetails'])->name('products.show');
Route::get('/product-details', [ProductController::class, 'showProductDetails'])->name('product-details');

Route::get('/view-cart', [CartController::class, 'showCart'])->name('view-cart');
Route::get('/checkout', [CheckoutController::class, 'showCheckout'])->name('checkout');

// Route::get('/dashboard-content', [DashboardController::class, 'showContent'])->name('dashboard-content');
Route::get('/profile', [ProfileController::class, 'showProfile'])->name('dashboard-profile');
Route::get('/orders', [OrderController::class, 'showOrder'])->name('dashboard-orders');
Route::get('/address', [AddressController::class, 'showAddress'])->name('dashboard-address');
Route::get('/change-password', [ChangePasswordController::class, 'showChangePassword'])->name('dashboard-change-password');
Route::get('/account-delete', [AccountDeleteController::class, 'showAccountDelete'])->name('account-delete');






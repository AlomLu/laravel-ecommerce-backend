<?php


use App\Http\Controllers\Administrative\AdministrativeController;
use App\Http\Controllers\Administrative\DistrictController;
use App\Http\Controllers\Administrative\DivisionController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\OrderDetailController;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SupportTicketController;
use App\Http\Controllers\Admin\UserController;

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

// Admin
Route::get('/admin-dashboard', [AdminHomeController::class, 'index'])->name('admin.dashboard');
Route::get('/admin-login', [LoginController::class, 'adminShowLogin'])->name('admin.login');
Route::get('/admin-signup', [RegisterController::class, 'adminShowSignup'])->name('admin.signup');

Route::get('/add-category', [CategoryController::class, 'showAddCategory'])->name('add.category');
Route::get('/category-list', [CategoryController::class, 'showCategoryList'])->name('category.list');

Route::get('/order-detail', [OrderDetailController::class, 'showOrderDetails'])->name('order.details');
Route::get('/order-list', [OrderController::class, 'showOrderList'])->name('order.list');

Route::get('/add-product', [AdminProductController::class, 'showAddProduct'])->name('add.product');

Route::get('/products', [AdminProductController::class, 'showProductList'])->name('products');
Route::get('/product-review', [AdminProductController::class, 'showProductReview'])->name('product.review');

Route::get('/create-roles', [RoleController::class, 'showCreateRoles'])->name('create.roles');
Route::get('/all-roles', [RoleController::class, 'showAllRoles'])->name('all.roles');

Route::get('/create-coupons', [CouponController::class, 'showCreateCoupon'])->name('create.coupons');
Route::get('/coupon-list', [CouponController::class, 'showCouponList'])->name('coupon.list');


Route::get('/add-user', [UserController::class, 'showAddUser'])->name('add.user');
Route::get('/all-user', [UserController::class, 'showAllUser'])->name('all.user');

Route::get('/support-ticket', [SupportTicketController::class, 'showSupportTicket'])->name('support.ticket');

Route::get('/admin-profile', [SettingController::class, 'showProfile'])->name('profile');

Route::get('/division', [DivisionController::class, 'showDivision'])->name('division');
Route::post('/add-division', [DivisionController::class, 'addDivision'])->name('add.division');
Route::post('/update-division', [DivisionController::class, 'updateDivision'])->name('update.division');
Route::post('/delete-division', [DivisionController::class, 'deleteDivision'])->name('delete.division');

Route::get('/district', [DistrictController::class, 'district'])->name('district');
Route::get('/district-list', [DistrictController::class, 'districtList'])->name('district.list');
Route::get('/edit-district/{id}', [DistrictController::class, 'showEditDistrict'])->name('edit.district');
Route::post('/add-district', [DistrictController::class, 'addDistrict'])->name('add.district');
Route::post('/update-district', [DistrictController::class, 'updateDistrict'])->name('update.district');
Route::delete('/district/{id}', [DistrictController::class, 'deleteDistrict'])->name('delete.district');


// User

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
Route::get('/signup', [RegisterController::class, 'showSignup'])->name('signup');
Route::get('/forgot-password', [ForgotPasswordController::class, 'showForgotPassword'])->name('forgot-password');

Route::get('/product-list', [ProductController::class, 'showProductList'])->name('product-list');
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






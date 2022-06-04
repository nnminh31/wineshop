<?php
// Import
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Brand\BrandController;
use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Cart\CartController;
use App\Http\Controllers\Order\OrderController;

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

// Website
Route::group(['prefix'=>'/'], function(){
    Route::get('/', [HomeController::class, 'index'])->name('home');
    // Login
    Route::match(['get', 'post'], '/dang-nhap', [AuthController::class, 'customer_login'])->name('login');
    // Logout
    Route::get('/dang-xuat', [AuthController::class, 'customer_logout'])->name('logout');
    // Register
    Route::match(['get', 'post'], '/dang-ky', [AuthController::class, 'customer_register'])->name('register');
    // Chi tiết sản phẩm  
    Route::get('san-pham/{slug}', [ProductController::class,'show'])->name('product');
    // Category
    Route::get('shop-ruou-uy-tin/danh-muc/{slug}', [CategoryController::class,'show'])->name('category');
    // Thương hiệu
    Route::get('shop-ruou-uy-tin/thuong-hieu/{slug}', [BrandController::class,'show'])->name('brand');
    // Tìm kiếm sản phẩm
    Route::get('tim-kiem', [HomeController::class, 'search'])->name('search');
    // Giỏ hàng
    Route::get('gio-hang', [CartController::class, 'index'])->name('cart');
    Route::post('/add-product-to-cart', [CartController::class, 'create'])->name('cart.create');
    Route::match(['get', 'post'], '/update-cart', [CartController::class, 'update'])->name('cart.update');
    Route::match(['get', 'delete'], '/remove-cart', [CartController::class, 'remove'])->name('cart.remove');
    // Checkout - Thanh toán
    Route::match(['get', 'post'], '/thanh-toan-don-hang', [OrderController::class, 'checkout'])->name('checkout');
    Route::get('/thong-tin-hoa-don', [OrderController::class, 'success'])->name('success')->middleware('auth:web');
});

// Admin
Route::get('admin', function (){{
    return redirect()->route('admin.login');
}});
Route::match(['get', 'post'],'admin/login', [AuthController::class, 'login'])->name("admin.login");
Route::get('admin/logout', [AuthController::class, 'logout'])->name("admin.logout");
Route::middleware('auth:admin')->prefix('admin')->group(function () {
    // User
    Route::prefix('users')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name("admin.users.index");
        Route::match(['get', 'post'], '/create', [UserController::class, 'create'])->name("admin.users.add");
        Route::match(['get', 'post'], '/edit/{slug}', [UserController::class, 'update'])->name("admin.users.edit");
        // Route::post('delete/{id}', [UserController::class, 'destroy'])->name("admin.users.delete");
    });
    // Brand
    Route::prefix('brands')->group(function () {
        Route::get('/', [BrandController::class, 'index'])->name("admin.brands.index");
        Route::match(['get', 'post'], '/create', [BrandController::class, 'create'])->name("admin.brands.add");
        Route::match(['get', 'post'], '/edit/{slug}', [BrandController::class, 'update'])->name("admin.brands.edit");
        // Route::post('delete/{id}', [UserController::class, 'destroy'])->name("admin.users.delete");
    });
    // Category
    Route::prefix('categories')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name("admin.categories.index");
        Route::match(['get', 'post'], '/create', [CategoryController::class, 'create'])->name("admin.categories.add");
        Route::match(['get', 'post'], '/edit/{slug}', [CategoryController::class, 'update'])->name("admin.categories.edit");
        Route::match(['get', 'delete'], '/delete/{id}', [CategoryController::class, 'destroy'])->name("admin.categories.delete");
    });
    // Product
    Route::prefix('products')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name("admin.products.index");
        Route::match(['get', 'post'], '/create', [ProductController::class, 'create'])->name("admin.products.add");
        Route::match(['get', 'post'], '/edit/{slug}', [ProductController::class, 'update'])->name("admin.products.edit");
        Route::match(['get', 'delete'], '/delete/{id}', [ProductController::class, 'destroy'])->name("admin.products.delete");
    });
    // Order
    Route::prefix('orders')->group(function () {
        Route::match(['get', 'put'], '/', [OrderController::class, 'index'])->name("admin.orders.index");
        // Route::match(['get', 'post'], '/create', [ProductController::class, 'create'])->name("admin.products.add");
        Route::match(['get', 'post'], '/edit/{id}', [OrderController::class, 'update'])->name("admin.orders.edit");
        // Route::post('delete/{id}', [UserController::class, 'destroy'])->name("admin.users.delete");
    });
});
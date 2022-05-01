<?php
// Import
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Brand\BrandController;
use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\User\UserController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Website
Route::group(['prefix'=>'/'], function(){
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/dang-nhap', [AuthController::class, 'login'])->name('login');
    Route::get('san-pham/', [ProductController::class,'show'])->name('product');
});

// Admin
Route::get('admin', function (){{
    return redirect()->route('admin.login');
}});
Route::match(['get', 'post'],'admin/login', [AuthController::class, 'login'])->name("admin.login");

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
        // Route::post('delete/{id}', [UserController::class, 'destroy'])->name("admin.users.delete");
    });
    // Category
    Route::prefix('products')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name("admin.products.index");
        Route::match(['get', 'post'], '/create', [ProductController::class, 'create'])->name("admin.products.add");
        Route::match(['get', 'post'], '/edit/{slug}', [ProductController::class, 'update'])->name("admin.products.edit");
        // Route::post('delete/{id}', [UserController::class, 'destroy'])->name("admin.users.delete");
    });
});
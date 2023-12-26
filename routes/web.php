<?php

use App\Http\Controllers\AcceptShoppingCart;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ShoppingCartController;

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


 
Route::get('/', function () {
    return view('User.login');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

Route::group(['middleware' => 'checklogin'], function () {
    // Routes that require authentication
    Route::get('admin/', [AdminController::class, 'index'])->name("admin.index");
    Route::resource('admin/product', ProductController::class);
    Route::get('admin/logout', [AdminController::class, 'logout'])->name("admin.logout");
    Route::resource('admin/categories', CategoryController::class);
});
Route:: get('admin/login',[AdminController::class,'login'])->name("admin.login");
Route:: post('admin/login',[AdminController::class,'checklogin'])->name("admin.loginpost");
// Route:: get('admin/',[AdminController::class,'index'])->name("admin.index");

Route::group(['middleware' => 'checkloginuser'], function () {
    Route::get('user/home', [ProductController::class, 'home'])->name("user.home");
    Route::get('user/cart', [ShoppingCartController::class, 'index'])->name('shoppingcart');
    Route::get('user/deleteall', [ShoppingCartController::class, 'deleteall'])->name('deleteall');
    Route::get('user/delete', [ShoppingCartController::class, 'delete'])->name('delete');
    Route::post('user/update', [ShoppingCartController::class, 'update'])->name('update');
    Route::get('user/accept', [AcceptShoppingCart::class, 'accept'])->name('acceptshoppingcart');
    Route::get('user/productdetail', [ProductController::class, 'productdetail'])->name('productdetail');
    Route::get('user/logout', [UserController::class, 'logout'])->name('logout');
});

Route:: get('user/login',[UserController::class,'login'])->name("user.login");



Route:: post('user/login',[UserController::class,'checklogin'])->name('user.loginpost');




Route:: get('login',[UserController::class,'login']);
Route:: get('register',[UserController::class,'register'])->name('user.register');
Route:: post('register',[UserController::class,'store'])->name('user.create');


require __DIR__.'/auth.php';

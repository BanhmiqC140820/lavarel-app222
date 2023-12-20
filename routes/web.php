<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

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
});

Route:: get('user/login',[UserController::class,'login'])->name("user.login");



Route:: post('user/login',[UserController::class,'checklogin'])->name('user.loginpost');




Route:: get('login',[UserController::class,'login']);
Route:: get('register',[UserController::class,'register'])->name('user.register');
Route:: post('register',[UserController::class,'store'])->name('user.create');


require __DIR__.'/auth.php';

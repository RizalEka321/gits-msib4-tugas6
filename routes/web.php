<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;

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

Route::group(['middleware' => 'guest'], function () {
    // Login
    Route::get('/', [AuthController::class, "login"])->name('/');
    Route::post('/login', [AuthController::class, "doLogin"])->name('do.login');
    // Register
    Route::get('/register', [AuthController::class, "register"])->name('register');
    Route::post('/register', [AuthController::class, "doRegister"])->name('do.register');
});

// Logout
Route::get('/logout', [AuthController::class, "logout"])->name('logout');

Route::group(['middleware' => 'auth'], function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // Edit Profile
    Route::get('/editprofile', [UserController::class, 'edit'])->name('profile.edit');
    Route::put('/editprofile', [UserController::class, 'update'])->name('profile.update');
    // Category
    Route::get('/category', [CategoryController::class, 'index'])->name('category');
    Route::get('/category/add', [CategoryController::class, 'create'])->name('category.add');
    Route::post('/category/create', [CategoryController::class, 'store'])->name('category.create');
    Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::put('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/category/destroy/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
    // Product
    Route::get('/product', [ProductController::class, 'index'])->name('product');
    Route::get('/product/add', [ProductController::class, 'create'])->name('product.add');
    Route::post('/product/create', [ProductController::class, 'store'])->name('product.create');
    Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('/product/update/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::get('/product/destroy/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
});

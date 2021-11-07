<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\ProductAdminController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ShoppingCartController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\AboutAdminController;
use App\Http\Controllers\admin\ContactAdminController;

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


Route::get('/', [HomeController::class, 'index'])->name('clients.index');
Route::get('/product', [ProductController::class, 'index'])->name('clients.product.index');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('clients.product.detail');
Route::get('/about', [AboutController::class, 'index'])->name('clients.about.index');
Route::get('/contact', [ContactController::class, 'index'])->name('clients.contact.index');
Route::get('/shopping-cart', [ShoppingCartController::class, 'index'])->name('clients.shopping-cart.index');

Route::prefix('store-admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.home');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::post('/', [AdminController::class, 'login'])->name('login');
    Route::get('/logout', [AdminController::class, 'logout'])->name('logout');

    Route::prefix('product')->group(function () {
        Route::get('/', [ProductAdminController::class, 'index'])->name('admin.product.index');
        Route::get('insert', [ProductAdminController::class, 'create'])->name('admin.product.create');
        Route::post('insert-product', [ProductAdminController::class, 'store'])->name('admin.product.store');
        Route::get('update/{id}', [ProductAdminController::class, 'edit'])->name('admin.product.edit');
        Route::post('update-product/{id}', [ProductAdminController::class, 'update'])->name('admin.product.update');
        Route::get('delete/{id}', [ProductAdminController::class, 'delete'])->name('admin.product.delete');
    });

    Route::prefix('category')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('admin.category.index');
        Route::get('insert', [CategoryController::class, 'create'])->name('admin.category.create');
        Route::post('insert-category', [CategoryController::class, 'store'])->name('admin.category.store');
        Route::get('update/{id}', [CategoryController::class, 'edit'])->name('admin.category.edit');
        Route::post('update-category/{id}', [CategoryController::class, 'update'])->name('admin.category.update');
        Route::get('delete/{id}', [CategoryController::class, 'delete'])->name('admin.category.delete');
    });

    Route::prefix('about')->group(function () {
        Route::get('/', [AboutAdminController::class, 'index'])->name('admin.about.index');
        Route::get('insert', [AboutAdminController::class, 'create'])->name('admin.about.create');
        Route::post('insert-category', [AboutAdminController::class, 'store'])->name('admin.about.store');
        Route::get('update/{id}', [AboutAdminController::class, 'edit'])->name('admin.about.edit');
        Route::post('update-category/{id}', [AboutAdminController::class, 'update'])->name('admin.about.update');
        Route::get('delete/{id}', [AboutAdminController::class, 'delete'])->name('admin.about.delete');
    });
});


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\CategoryControler;

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


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('store-admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.home');
    Route::post('/', [AdminController::class, 'login'])->name('login');

    Route::prefix('product')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('admin.product.index');
        Route::get('insert', [ProductController::class, 'create'])->name('admin.product.create');
        Route::post('insert-product', [ProductController::class, 'store'])->name('admin.product.store');
        Route::get('update/{id}', [ProductController::class, 'edit'])->name('admin.product.edit');
        Route::post('update-product/{id}', [ProductController::class, 'update'])->name('admin.product.update');
        Route::get('delete/{id}', [ProductController::class, 'delete'])->name('admin.product.delete');
    });

    Route::prefix('category')->group(function () {
        Route::get('/', [CategoryController::class, 'delete'])->name('admin.category.index');
        Route::get('insert', 'CategoryController@create')->name('admin.category.create');
        Route::post('insert-category', 'CategoryController@createPost')->name('admin.category.create-post');
        Route::get('update/{id}', 'CategoryController@update')->name('admin.category.update');
        Route::post('update-category/{id}', 'CategoryController@updatePost')->name('admin.category.update-post');
        Route::get('delete/{id}', 'CategoryController@destroy')->name('admin.category.delete');
    });
});


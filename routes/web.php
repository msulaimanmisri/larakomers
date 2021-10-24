<?php

use App\Http\Controllers\Admin\CustomerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductCategoryController;
use App\Http\Controllers\Admin\SliderController;

// Public Page
Route::get('/', [PageController::class, 'index'])->name('page.index');

// Admin Page
Route::prefix('/admin')->middleware('auth')->group(function () {

    // === Dashboard ===
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard.index');

    // === Product ===
    Route::resource('/products', ProductController::class, ['as' => 'admin']);

    // === Product Category ===
    Route::resource('/product-category', ProductCategoryController::class, ['as' => 'admin']);

    // === Order ===
    Route::resource('/order', OrderController::class, ['as' => 'admin'])->only('index', 'show');

    // === Customer ===
    Route::get('/customer', [CustomerController::class, 'index'])->name('admin.customer.index');

    // === Slider ===
    Route::resource('/slider', SliderController::class, ['as' => 'admin']);
});
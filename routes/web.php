<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductCategoryController;

// Public Page
Route::get('/', [PageController::class, 'index'])->name('page.index');

// Admin Page
Route::prefix('/admin')->middleware('auth')->group(function () {

    // === Dashboard ===
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard.index');

    // === Product ===
    Route::resource('/product', ProductController::class, ['as' => 'admin']);

    // === Product Category ===
    Route::resource('/product-category', ProductCategoryController::class, ['as' => 'admin']);
});
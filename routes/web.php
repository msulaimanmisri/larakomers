<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\DashboardController;

// Public Page
Route::get('/', [PageController::class, 'index'])->name('page.index');

// Admin Page
Route::prefix('/admin')->middleware('auth')->group(function () {

    // === Dashboard ===
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard.index');
});
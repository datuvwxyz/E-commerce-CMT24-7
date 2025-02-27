<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Frontend\WishlistController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/admin/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

Route::get('/admin/listCategory', [CategoryController::class, 'listCategory'])->name('listCategory');

Route::get('/admin/addCategory', [CategoryController::class, 'addCategory'])->name('addCategory');

Route::get('/admin/listProduct', [ProductController::class, 'listProduct'])->name('listProduct');

Route::get('/admin/addProduct', [ProductController::class, 'addProduct'])->name('addProduct');

Route::get('/admin/listOrder', [OrderController::class, 'listOrder'])->name('listOrder');

Route::get('/admin/addOrder', [OrderController::class, 'addOrder'])->name('addOrder');

Route::get('/admin/listReview', [ReviewController::class, 'listReview'])->name('listReview');

Route::get('/admin/listContact', [ContactController::class, 'listContact'])->name('listContact');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

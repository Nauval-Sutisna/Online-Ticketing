<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

// Category routes (admin old)
// Route::prefix('admin')->name('categories.')->middleware(['auth', 'verified'])->group(function () {
//     Route::get('/categories', [DashboardController::class, 'index'])->name('index');
//     Route::post('/categories', [CategoryController::class, 'store'])->name('store');
//     Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('update');
//     Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('destroy');
// });

// Profile old
// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });
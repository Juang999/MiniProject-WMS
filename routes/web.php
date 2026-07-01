<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthenticatedSessionController::class, 'create']);
Route::post('login', [AuthenticatedSessionController::class, 'store']);

Route::livewire('/dashboard', 'pages::dashboard.index')->middleware(['auth', 'verified'])->name('dashboard');
Route::livewire('/master-products', 'pages::master_data.master_product')->middleware(['auth', 'verified'])->name('master-products');
Route::livewire('/categories', 'pages::master_data.categories')->middleware(['auth', 'verified'])->name('categories');
Route::livewire('/locations', 'pages::master_data.locations')->middleware(['auth', 'verified'])->name('locations');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

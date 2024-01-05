<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

/* Route::get('/categories', function () {
    return view('categories/categories');
})->middleware(['auth', 'verified'])->name('categories'); */

/* Route::middleware('auth')->group(function () {
    Route::get('/category', [CategoriesController::class, 'index'])->name('category.index');
    Route::get('/category', [CategoriesController::class, 'edit'])->name('category.edit');
    Route::patch('/category', [CategoriesController::class, 'update'])->name('category.update');
    Route::delete('/category', [CategoriesController::class, 'destroy'])->name('category.destroy');
}); */

Route::middleware('auth')->group(function () {
    Route::get('/category', [CategoryController::class, 'index'])->name('category.index');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

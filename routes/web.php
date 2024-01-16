<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\InstitutionController;
use App\Http\Controllers\DivisionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // RUTAS PARA CONTACTOS
    Route::view('/contact/index', 'contacts.index')->name('contact.index');

    // RUTAS PARA INSTITUCIONES
    Route::get('/institution/index',[InstitutionController::class, 'index'])->name('institution.index');
    Route::get('/institution/create',[InstitutionController::class, 'create'])->name('institution.create');
    Route::post('/institution', [InstitutionController::class, 'store'])->name('institution.store');
    Route::get('/institution/show/{id}', [InstitutionController::class, 'show'])->name('institution.show');
    Route::get('/institution/edit/{id}', [InstitutionController::class, 'edit'])->name('institution.edit');
    Route::put('/institution/update/{id}', [InstitutionController::class, 'update'])->name('institution.update');
    Route::delete('/institution/delete/{id}', [InstitutionController::class, 'destroy'])->name('institution.delete');

    // RUTAS PARA CATEGORIAS
    Route::get('/category/index', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/category', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/show/{id}', [CategoryController::class, 'show'])->name('category.show');
    Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::put('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('/category/delete/{id}', [CategoryController::class, 'destroy'])->name('category.delete');

    // RUTAS PARA SUBCATEGORIAS
    Route::get('/subcategory/index', [SubcategoryController::class, 'index'])->name('subcategory.index');
    Route::get('/subcategory/create', [SubcategoryController::class, 'create'])->name('subcategory.create');
    Route::post('/subcategory', [SubcategoryController::class, 'store'])->name('subcategory.store');
    Route::get('/subcategory/show/{id}', [SubcategoryController::class, 'show'])->name('subcategory.show');
    Route::get('/subcategory/edit/{id}', [SubcategoryController::class, 'edit'])->name('subcategory.edit');
    Route::put('/subcategory/update/{id}', [SubcategoryController::class, 'update'])->name('subcategory.update');
    Route::delete('/subcategory/delete/{id}', [SubcategoryController::class, 'destroy'])->name('subcategory.delete');

    // RUTAS PARA DIVISIONES
    Route::get('/division/index', [DivisionController::class, 'index'])->name('division.index');
    Route::get('/division/create', [DivisionController::class, 'create'])->name('division.create');
    Route::post('/division', [DivisionController::class, 'store'])->name('division.store');
    Route::get('/division/show/{id}', [DivisionController::class, 'show'])->name('division.show');
    Route::get('/division/edit/{id}', [DivisionController::class, 'edit'])->name('division.edit');
    Route::put('/division/update/{id}', [DivisionController::class, 'update'])->name('division.update');
    Route::delete('/division/delete/{id}', [DivisionController::class, 'destroy'])->name('division.delete');

    // RUTAS PARA USUARIOS
    Route::view('/user/index', 'users.index')->name('user.index');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

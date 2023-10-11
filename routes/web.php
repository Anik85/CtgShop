<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\RedirectIfAuthenticated;
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
    return view('frontend.index');
})->name('homepage');
Route::get('/admin/dashboard',[AdminController::class,
        'adminDashboard'])->name('admin.Dashboard')->middleware('auth');
Route::get('/admin/logout',[AdminController::class,'adminDestroy'])->name('admin.logout');
Route::get('/product/inactive/{id}',[ProductController::class,'ProductInactive'])->name('product.inactive');
Route::get('/product/active/{id}',[ProductController::class,'ProductActive'])->name('product.active');
Route::resource('brands',BrandController::class);
Route::resource('sliders',SliderController::class);
Route::resource('categories',CategoryController::class);
Route::resource('products',ProductController::class);

Route::get('/product/details/{id}/{slug}',[IndexController::class,'ProductDetails']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

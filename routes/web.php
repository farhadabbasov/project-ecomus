<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogDetailController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Contact1Controller;
use App\Http\Controllers\Contact2Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeSearchController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

require __DIR__.'/auth.php';
Route::get('/dashboard', [App\Http\Controllers\Backend\DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])->name('dashboard');

Route::redirect('/', '/az');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['prefix' => '{locale}'], function (){
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/about', [AboutController::class, 'about'])->name('about-us');
    Route::get('/blog-detail/{id}', [BlogDetailController::class, 'blogDetail'])->name('page-detail');
    Route::get('/bloglist', [BlogController::class, 'blogList'])->name('blog-list');
    Route::get('/categories/{id}', [CategoryController::class, 'categoryDetail'])->name('category.detail');
    Route::get('/homesearch', [HomeSearchController::class, 'homeSearch'])->name('home-search');
    Route::get('/brands', [BrandController::class, 'brands'])->name('brands');
    Route::get('/contact', [Contact1Controller::class, 'contact1'])->name('contact.create');
    Route::post('/contact', [Contact1Controller::class, 'store'])->name('contact.store');
    Route::get('/contact-2', [Contact2Controller::class, 'contact2'])->name('contact-2');
});


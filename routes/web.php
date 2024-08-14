<?php

use App\Http\Controllers\admin\AdminAuthController;
use App\Http\Controllers\admin\AdminCategoryController;
use App\Http\Controllers\admin\AdminProductController;
use App\Http\Controllers\admin\AdminViewController;
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ViewController::class, 'index'])->name('index');
Route::get('/404', [ViewController::class, 'error'])->name('404');
Route::get('/about', [ViewController::class, 'about'])->name('about');
Route::get('/blog_author', [ViewController::class, 'blog_author'])->name('blog_author');
Route::get('/blog_grid', [ViewController::class, 'blog_grid'])->name('blog_grid');
Route::get('/blog_list', [ViewController::class, 'blog_list'])->name('blog_list');
Route::get('/blog_single', [ViewController::class, 'blog_single'])->name('blog_single');
Route::get('/coming_soon', [ViewController::class, 'coming_soon'])->name('coming_soon');
Route::get('/compare', [ViewController::class, 'compare'])->name('compare');
Route::get('/contact', [ViewController::class, 'contact'])->name('contact');
Route::get('/create_ads', [ViewController::class, 'create_ads'])->name('create_ads');
Route::get('/dashboard', [ViewController::class, 'dashboard'])->name('dashboard');
Route::get('/faq', [ViewController::class, 'faq'])->name('faq');
Route::get('/favourite', [ViewController::class, 'favourite'])->name('favourite');
Route::get('/forgot_password', [ViewController::class, 'forgot_password'])->name('forgot_password');
Route::get('/inventory_grid', [ViewController::class, 'inventory_grid'])->name('inventory_grid');
Route::get('/inventory_list', [ViewController::class, 'inventory_list'])->name('inventory_list');
Route::get('/inventory_single', [ViewController::class, 'inventory_single'])->name('inventory_single');
Route::get('/login', [ViewController::class, 'login'])->name('login');
Route::get('/notify', [ViewController::class, 'notify'])->name('notify');
Route::get('/posted_ads', [ViewController::class, 'posted_ads'])->name('posted_ads');
Route::get('/pricing_plan', [ViewController::class, 'pricing_plan'])->name('pricing_plan');
Route::get('/privacy', [ViewController::class, 'privacy'])->name('privacy');
Route::get('/profile', [ViewController::class, 'profile'])->name('profile');
Route::get('/register', [ViewController::class, 'register'])->name('register');
Route::get('/review', [ViewController::class, 'review'])->name('review');
Route::get('/setting', [ViewController::class, 'setting'])->name('setting');
Route::get('/vendor_grid', [ViewController::class, 'vendor_grid'])->name('vendor_grid');
Route::get('/vendor_list', [ViewController::class, 'vendor_list'])->name('vendor_list');
Route::get('/logout', [ViewController::class, 'logout'])->name('logout');



Route::get('admin/login', [AdminViewController::class, 'login'])->name('login');
Route::get('register', [AdminViewController::class, 'register'])->name('register');
Route::post('register', [AdminAuthController::class, 'register'])->name('register');
Route::post('login', [AdminAuthController::class, 'login'])->name('login');



Route::get('/', [AdminViewController::class, 'index'])->name('index');
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('settings', [AdminViewController::class, 'settings'])->name('settings');
    Route::get('profile', [AdminViewController::class, 'profile'])->name('profile');
    Route::get('add', [AdminViewController::class, 'add'])->name('add');
    Route::get('invoice', [AdminViewController::class, 'invoice'])->name('invoice');
    Route::get('orders', [AdminViewController::class, 'orders'])->name('orders');
    Route::get('customers', [AdminViewController::class, 'customers'])->name('customers');
    Route::get('shipments', [AdminViewController::class, 'shipments'])->name('shipments');
    Route::get('lockscreen', [AdminViewController::class, 'lockscreen'])->name('lockscreen');
    Route::get('reviews', [AdminViewController::class, 'reviews'])->name('reviews');
    Route::get('detail', [AdminViewController::class, 'detail'])->name('detail');
    Route::get('list', [AdminViewController::class, 'list'])->name('list');
    Route::get('catalogue', [AdminViewController::class, 'catalogue'])->name('catalogue');
    Route::get('category', [AdminViewController::class, 'category'])->name('category');
    Route::get('passwordRecovery', [AdminViewController::class, 'password_recovery'])->name('password_recovery');
    Route::get('/logout', [AdminAuthController::class, 'logout'])->name('logout');
    Route::get('add/category', [AdminViewController::class, 'add_category'])->name('add_category');
    Route::post('add/category', [AdminCategoryController::class, 'category_add'])->name('category_add');
    Route::post('delete/category/{id}', [AdminCategoryController::class, 'category_delete'])->name('category_delete');
    Route::get('edit/category/{id}', [AdminCategoryController::class, 'edit_category'])->name('edit_category');
    Route::put('/categories/{category}', [AdminCategoryController::class, 'update_category'])->name('update_category');
    Route::post('add/product', [AdminProductController::class, 'product_add'])->name('product_add');
    Route::post('delete/product/{id}', [AdminProductController::class, 'product_delete'])->name('product_delete');
});



Route::fallback(function () {
    return redirect('/404');
});

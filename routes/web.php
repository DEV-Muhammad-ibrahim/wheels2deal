<?php



use App\Http\Controllers\AdminViewController;

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


Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [ViewController::class, 'admin_dashboard'])->name('admin_dashboard');
    Route::get('/car_rental', [AdminViewController::class, 'car_rental_dashboard'])->name('car_rental_dashboard');
});






Route::fallback(function () {
    return redirect('/404');
});

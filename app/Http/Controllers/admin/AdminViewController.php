<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminViewController extends Controller
{
    public function index()
    {
        $view = 'admin.index';
        if (view()->exists($view)) {
            return view($view);
        }
    }
    public function login()
    {

        $view = 'admin.login';
        if (view()->exists($view)) {
            return view($view);
        }
    }
    public function settings()
    {
        $view = 'admin.settings';
        if (view()->exists($view)) {
            return view($view);
        }
    }
    public function profile()
    {
        $view = 'admin.profile';
        if (view()->exists($view)) {
            return view($view);
        }
    }
    public function register()
    {
        $view = 'admin.register';
        if (view()->exists($view)) {
            return view($view);
        }
    }
    public function add()
    {
        $view = 'admin.add';
        $categories = Category::all();
        if (view()->exists($view)) {
            return view($view, compact('categories'));
        }
    }
    public function invoice()
    {
        $view = 'admin.invoice';
        if (view()->exists($view)) {
            return view($view);
        }
    }
    public function orders()
    {
        $view = 'admin.orders';
        if (view()->exists($view)) {
            return view($view);
        }
    }
    public function customers()
    {
        $view = 'admin.customers';
        if (view()->exists($view)) {
            return view($view);
        }
    }
    public function shipments()
    {
        $view = 'admin.index';
        if (view()->exists($view)) {
            return view($view);
        }
    }
    public function lockscreen()
    {
        $view = 'admin.lockscreen';
        if (view()->exists($view)) {
            return view($view);
        }
    }
    public function reviews()
    {
        $view = 'admin.reviews';
        if (view()->exists($view)) {
            return view($view);
        }
    }
    public function detail()
    {
        $view = 'admin.products-details';
        if (view()->exists($view)) {
            return view($view);
        }
    }
    public function list()
    {
        $view = 'admin.product-list';
        $products = Product::all();
        if (view()->exists($view)) {
            return view($view, compact('products'));
        }
    }
    public function catalogue()
    {
        $view = 'admin.catalogue';
        if (view()->exists($view)) {
            return view($view);
        }
    }
    public function password_recovery()
    {
        $view = 'admin.password-recovery';
        if (view()->exists($view)) {
            return view($view);
        }
    }
    public function category()
    {
        $categories = Category::all();
        $view = 'admin.category';
        if (view()->exists($view)) {
            return view($view, compact('categories'));
        }
    }
    public function add_category()
    {
        $view = 'admin.add_category';
        if (view()->exists($view)) {
            return view($view);
        }
    }
}

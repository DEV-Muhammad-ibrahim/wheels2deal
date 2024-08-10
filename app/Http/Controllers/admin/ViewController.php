<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index()
    {
        $view = 'index';
        if (view()->exists($view)) {
            return view($view);
        }
    }
    public function login()
    {
        $view = 'login';
        if (view()->exists($view)) {
            return view($view);
        }
    }
    public function settings()
    {
        $view = 'settings';
        if (view()->exists($view)) {
            return view($view);
        }
    }
    public function profile()
    {
        $view = 'profile';
        if (view()->exists($view)) {
            return view($view);
        }
    }
    public function register()
    {
        $view = 'register';
        if (view()->exists($view)) {
            return view($view);
        }
    }
    public function add()
    {
        $view = 'add';
        $categories = Category::all();
        if (view()->exists($view)) {
            return view($view, compact('categories'));
        }
    }
    public function invoice()
    {
        $view = 'invoice';
        if (view()->exists($view)) {
            return view($view);
        }
    }
    public function orders()
    {
        $view = 'orders';
        if (view()->exists($view)) {
            return view($view);
        }
    }
    public function customers()
    {
        $view = 'customers';
        if (view()->exists($view)) {
            return view($view);
        }
    }
    public function shipments()
    {
        $view = 'index';
        if (view()->exists($view)) {
            return view($view);
        }
    }
    public function lockscreen()
    {
        $view = 'lockscreen';
        if (view()->exists($view)) {
            return view($view);
        }
    }
    public function reviews()
    {
        $view = 'reviews';
        if (view()->exists($view)) {
            return view($view);
        }
    }
    public function detail()
    {
        $view = 'products-details';
        if (view()->exists($view)) {
            return view($view);
        }
    }
    public function list()
    {
        $view = 'product-list';
        $products = Product::all();
        if (view()->exists($view)) {
            return view($view, compact('products'));
        }
    }
    public function catalogue()
    {
        $view = 'catalogue';
        if (view()->exists($view)) {
            return view($view);
        }
    }
    public function password_recovery()
    {
        $view = 'password-recovery';
        if (view()->exists($view)) {
            return view($view);
        }
    }
    public function category()
    {
        $categories = Category::all();
        $view = 'category';
        if (view()->exists($view)) {
            return view($view, compact('categories'));
        }
    }
    public function add_category()
    {
        $view = 'add_category';
        if (view()->exists($view)) {
            return view($view);
        }
    }
}

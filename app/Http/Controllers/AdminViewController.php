<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminViewController extends Controller
{
    public function admin_dashboard()
    {
        return view('admin.admin-dashboard');
    }
    public function car_list()
    {
        return view('admin.admin-car-list');
    }
}

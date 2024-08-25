<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminViewController extends Controller
{
    public function car_rental_dashboard()
    {
        return view('admin.dashboards-car-rental');
    }
}

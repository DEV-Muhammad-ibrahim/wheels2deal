<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginAllController extends Controller
{
    public function login_all(Request $request)
    {

        $validation =   $request->validate([
            'email' => 'email|required',
            'password' => 'required|min:8'
        ]);
        if ($validation) {

            $credentials = $request()->only('email', 'password');
            if (auth()->attempt($credentials)) {
                $role = auth()->user()->role;
                if ($role == 'user') {
                    return redirect()->intended();
                } else if ($role == 'moderator') {
                    return redirect()->route('dashboard');
                } else if ($role == 'admin') {
                    return redirect()->route('admin_dashboard');
                }
            } else {
                return redirect()->route('login')->with('error', 'Invalid Credentials');
            }
        } else {
            return redirect()->back()->with('error', "Please fill the form ");
        }
    }
}

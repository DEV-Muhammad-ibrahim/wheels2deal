<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

class RegisterUserController extends Controller
{
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' =>  [
                'required',
                'string',
                'min:8', // Minimum length of 8 characters
                'regex:/[a-z]/', // must contain at least one lowercase letter
                'regex:/[A-Z]/', // must contain at least one uppercase letter
                'regex:/[0-9]/', // must contain at least one digit
                'regex:/[@$!%*?&]/', // must contain a special character
            ],
        ], [
            'password.regex' => 'Password must include at least one uppercase letter, one lowercase letter, one number, and one special character.',
        ]);

        try {
            $user = new User();
            $user->name = $validatedData['name'];
            $user->email = $validatedData['email'];
            $user->password = Hash::make($validatedData['password']);
            $user->save();

            // Authenticate the user
            Auth::login($user);

            // Redirect to the index route
            return redirect()->route('index')->with('success', 'Registration successful!');
        } catch (Exception $e) {
            // Log the error for debugging purposes
            Log::error('Error registering user: ' . $e->getMessage());

            // Return an error response
            return response()->json(['error' => 'Something went wrong, unable to register user'], 500);
        }
    }
}

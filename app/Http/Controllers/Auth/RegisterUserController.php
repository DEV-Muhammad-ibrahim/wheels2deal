<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

class RegisterUserController extends Controller
{
    public function register(Request $request)
    {
        // // dd($request);
        // try {
        //     //code...
        // } catch (ValidationException $e) {
        //     return response()->json(['errors' => $e->errors()], 422);
        // }
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
        //Registering user and sending email otp
        try {
            //code..

            $user = new User();
            $user->name = $validatedData['name'];
            $user->email = $validatedData['email'];
            $user->password = Hash::make($validatedData['password']);
            $user->save();

            // $otp = Str::random(6);
        } catch (Exception $e) {
            // Log the error for debugging purposes
            Log::error('Error adding product: ' . $e->getMessage());

            // Return an error response
            return response()->json(['error' => 'Something went wrong, unable to add product'], 500);
        }
    }
}

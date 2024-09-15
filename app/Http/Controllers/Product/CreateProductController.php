<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

class CreateProductController extends Controller
{
    public function create_product(Request $request)
    {
        //validation block
        try {
            //code...
            $request->validate(['name' => 'required|min:3',  'model' => 'required', 'comapany' => 'required', 'price' => 'required']);
        } catch (ValidationException $e) {
            return response()->json(['errors' => $e->errors()], 422);
        }
        //Product block
        try {
            //code
            $user = auth()->user();
            if ($user->user_can_add_products = true & $user->role = 'admin' || 'vendor') {

                $product = new Product();
                $product->name = $request->input('name');
                $product->model = $request->input('model');
                $product->company = $request->input('company');
                $product->price = $request->input('price');
                $product->user_id = $user->id;
                $product->save();
            } else {
                return redirect()->back()->with('error', "You cannot add products until you are verified");
            }
        } catch (Exception $e) {
            // Log the error for debugging purposes
            Log::error('Error adding product: ' . $e->getMessage());

            // Return an error response
            return response()->json(['error' => 'Something went wrong, unable to add product'], 500);
        }
    }
}

<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminCategoryController extends Controller
{
    public function category_add(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = Str::slug($request->name) . '.' . $request->image->extension();
        $request->image->move(public_path('category_images'), $imageName);

        Category::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $imageName,
        ]);

        return redirect()->route('category');
    }
    public function category_delete($id)
    {
        Category::destroy($id);
        return redirect()->route('category');
    }
    public function edit_category($id)
    {
        $category = Category::find($id);
        return view('edit_category', compact('category'));
    }
    public function update_category(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust file size and allowed types as needed
            ]);

            $imageName = Str::slug($request->name) . '.' . $request->image->extension();
            $request->image->move(public_path('category_images'), $imageName);
            $category->image = $imageName;
        }

        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();

        return redirect()->route('category');
    }
}

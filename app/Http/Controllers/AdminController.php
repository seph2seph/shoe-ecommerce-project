<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category; // Assuming you have a Category model

class AdminController extends Controller
{
    public function view_category()
    {
        $data = Category::all(); // Fetch all categories from the database
        // Logic to view categories
        return view('admin.category', compact('data'));
    }
    public function add_category(Request $request)
    {
        // Logic to add a new category
       $category = new Category;

         $category->category_name = $request->category;

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('uploads', 'public');
            $category->image = $path;
        }

        $category->save();

        return redirect()->back()->with('message', 'Category added successfully');

    }
}

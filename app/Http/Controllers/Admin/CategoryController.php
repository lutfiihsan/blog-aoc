<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categories()
    {
        $catergories = Category::orderBy('category_name', 'asc')->paginate(5);
        return view('admin.categories.read', ['categories' => $catergories]);
    }

    public function create_category()
    {
        return view('admin.categories.create');
    }

    public function edit_category()
    {
        return view('admin.blogs.edit');
    }
}

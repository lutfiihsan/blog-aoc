<?php

namespace App\Http\Controllers\Backend\System;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::paginate(10);
        return view('backend.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = new Category();
        return view('backend.category.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:255'
        ]);

        try {
            $category = new Category();
            $category->name = $request->name;
            $category->slug = Str::slug($category->name);
            $category->save();

            return redirect()->route('backend.categories.index')->with('success', 'Berhasil menambahkan kategori');
        } catch (\Exception $e) {
            return redirect()->route('backend.categories.index')->with('error', 'Gagal menambahkan kategori');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::findOrFail($id);
        return view('backend.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:255'
        ]);

        try {
            $category = Category::findOrFail($id);
            $category->name = $request->name;
            $category->slug = Str::slug($category->name);
            $category->save();

            return redirect()->route('backend.categories.index')->with('success', 'Berhasil mengubah kategori');
        } catch (\Exception $e) {
            return redirect()->route('backend.categories.index')->with('error', 'Gagal mengubah kategori');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('backend.categories.index')->with('success', 'Berhasil menghapus kategori');
    }
}

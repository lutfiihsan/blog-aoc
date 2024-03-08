<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function blogs()
    {
        $blogs = Blog::join('users', 'blogs.inputed_by', '=', 'users.user_id')
            ->join('categories', 'blogs.category_id', '=', 'categories.category_id')
            ->select('blogs.*', 'users.fullname', 'categories.category_name')
            ->orderBy('blogs.created_at', 'desc')
            ->paginate(5);
        return view('admin.blogs.read', ['blogs' => $blogs]);
    }

    public function create_blog()
    {
        return view('admin.blogs.create');
    }

    public function single_blog($slug)
    {
        $blog = Blog::join('users', 'blogs.inputed_by', '=', 'users.user_id')
            ->join('categories', 'blogs.category_id', '=', 'categories.category_id')
            ->select('blogs.*', 'users.fullname', 'categories.category_name')
            ->where('blogs.slug', $slug)
            ->first();
        return view('admin.blogs.single', ['blog' => $blog]);
    }

    public function edit_blog($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        return view('admin.blogs.edit', ['blog' => $blog]);
    }

    public function upload_images(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;

            $request->file('upload')->move(public_path('images'), $fileName);

            $url = asset('images/' . $fileName);

            return response()->json(['fileName' => $fileName, 'uploaded' => 1, 'url' => $url]);
        }
    }

    public function remove_images(Request $request)
    {
        $fileName = $request->get('fileName');
        $path = public_path('images') . '/' . $fileName;

        if (file_exists($path)) {
            unlink($path);
        }

        return response()->json(['removed' => 1]);
    }
}

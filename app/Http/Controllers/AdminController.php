<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function create()
    {
        return view('admin.blogs.create');
    }

    public function blogs()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->paginate(5);
        return view('admin.blogs.read', ['blogs' => $blogs]);
    }

    public function single($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        return view('admin.blogs.single', ['blog' => $blog]);
    }

    public function edit($slug)
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

            return response()->json(['fileName' => $fileName, 'uploaded'=> 1, 'url' => $url]);
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

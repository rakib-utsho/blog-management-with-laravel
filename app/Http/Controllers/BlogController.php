<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    private static $blog;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('read', [
            'blogs' => Blog::all()
        ]);
    }

    public function create()
    {
        return view('create', [
            'categories' => Category::all()
        ]);
    }

    public function store(Request $request)
    {
        Blog::create($request);
        return back();
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        return view('edit',[
            'blog'=> Blog::find($id),
            'categories' => Category::all()
        ]);
    }


    public function update(Request $request, string $id)
    {
        Blog::change($request, $id);
        return redirect(route('blogs.index'));
    }


    public function destroy(string $id)
    {
        self::$blog = Blog::find($id);
        if (file_exists(self::$blog->image))
        {
            unlink(self::$blog->image);
        }
        self::$blog->delete();
        return back();
    }
}

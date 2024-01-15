<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        return view('category.view',[
            'categories' => Category::all()
        ]);
    }


    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        Category::SaveInfo($request);
        return redirect(route('categories.index'));
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        return view('category.edit',[
            'category' => Category::find($id)
        ]);
    }

    public function update(Request $request, string $id)
    {
        Category::SaveInfo($request, $id);
        return redirect(route('categories.index'));
    }

    public function destroy(string $id)
    {
        //
    }
}

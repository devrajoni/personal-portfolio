<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\CategoryFormRequest;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::latest()->get();

        return view('backend.category.index', compact('categories'));
    }

    public function create()
    {
        return view('backend.category.form');
    }

    public function store(CategoryFormRequest $request)
    {
        Category::create($request->persist());

        return redirect()->route('backend.categories.index')->flashify('created');
    }

    public function show($id)
    {
        //
    }

    public function edit(Category $category)
    {
        return view('backend.category.form', compact('category'));
    }

    public function update(CategoryFormRequest $request, Category $category)
    {
        $category->update($request->persist());

        return redirect()->route('backend.categories.index')->flashify('updated');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return back()->flashify('deleted');
    }
}

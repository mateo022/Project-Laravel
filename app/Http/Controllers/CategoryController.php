<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('motorcyclist_category.index', [
            'category' => Category::all()
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('motorcyclist_category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        // Category::create($request->all());

        $file = $request->file('img');
        $url = Storage::disk('public')->putFile('categoryImg', $file);

        $category = new Category();
        $category->img = $url;
        $category->name = $request->get('name');
        $category->description = $request->get('description');
        $category->priority = $request->get('priority');
        $category->status = $request->get('status');

        $category->save();
        return redirect('/categories');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)

    {
        return view('motorcyclist_category.details', [
            'category'=> $category
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('motorcyclist_category.edit', [
            'category' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, Category $category)
    {
        $file = $request->file('img');
        $url = Storage::disk('public')->putFile('categoryImg', $file);

        $category->img = $url;
        $category->name = $request->get('name');
        $category->description = $request->get('description');
        $category->priority = $request->get('priority');
        $category->status = $request->get('status');

        $category->update();
        return redirect('/categories');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return back();
    }
}

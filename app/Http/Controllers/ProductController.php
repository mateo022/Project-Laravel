<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('motorcyclist_product.index', [
            'product' => $product = Product::orderBy('name', 'desc')->get()
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('motorcyclist_product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $file = $request->file('img');
        $url = Storage::disk('public')->putFile('ProductImg', $file);

        $category = new Category();
        $product = new Product();
        $product->img = $url;
        $product->name = $request->get('name');
        $product->description = $request->get('description');
        $product->value = $request->get('value');
        $product->status = $request->get('status');
        $product->category_id = $request->get('category_id');

        $product->save();
        return redirect('/products');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('motorcyclist_product.details', [
            'product'=> $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('motorcyclist_product.edit', [
            'product' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, Product $product)
    {
        $file = $request->file('img');
        $url = Storage::disk('public')->putFile('categoryImg', $file);

        $product->img = $url;
        $product->name = $request->get('name');
        $product->description = $request->get('description');
        $product->value = $request->get('value');
        $product->status = $request->get('status');

        $product->update();
        return redirect('/products');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return back();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        return Inertia::render('Products/Index', [
            'products' => Product::all(),
        ]);
    }
    // /products/create
    public function create()
    {
        return Inertia::render('Products/Create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
        ]);

        Product::create([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
        ]);

        return redirect()->route('products.index');
    }
    // /products/{id}
    public function show(Product $product)
    {
        return Inertia::render('Products/Show', [
            'product' => $product,
        ]);
    }
    // /products/{id}/edit
    public function edit(Product $product)
    {
        return Inertia::render('Products/Edit', [
            'product' => $product,
        ]);
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
        ]);

        $product->update([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
        ]);

        return redirect()->route('products.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Product;
use App\Models\Subcategory;

class ProductController extends Controller
{
    public function index()
    {

        $products = Product::with("images")->paginate(5);
        return Inertia::render('Products/Index', [
            'products' => $products,
        ]);
    }
    // /products/create
    public function create()
    {
        $categories = Category::all();
        $subcategories = Subcategory::all();
        return Inertia::render('Products/Create', ["categories" => $categories, "subcategories" => $subcategories]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'subcategory_id' => 'required|exists:subcategories,id',
            'title' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'brand' => 'nullable|string',
            'dimension' => 'nullable|string',
            'weight' => 'nullable|numeric',
            'is_on_sale' => 'boolean',
            'discount' => 'nullable|numeric',
            'sale_start_date' => 'nullable|date',
            'sale_end_date' => 'nullable|date|after_or_equal:sale_start_date',
            'is_visible' => 'boolean',
        ]);

        Product::create([
            'subcategory_id' => $request->input('subcategory_id'),
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'brand' => $request->input('brand'),
            'dimension' => $request->input('dimension'),
            'weight' => $request->input('weight'),
            'is_on_sale' => $request->input('is_on_sale', false),
            'discount' => $request->input('discount'),
            'sale_start_date' => $request->input('sale_start_date'),
            'sale_end_date' => $request->input('sale_end_date'),
            'is_visible' => $request->input('is_visible', true),
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
            'subcategory_id' => 'required|exists:subcategories,id',
            'title' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'brand' => 'nullable|string',
            'dimension' => 'nullable|string',
            'weight' => 'nullable|numeric',
            'is_on_sale' => 'boolean',
            'discount' => 'nullable|numeric',
            'sale_start_date' => 'nullable|date',
            'sale_end_date' => 'nullable|date|after_or_equal:sale_start_date',
            'is_visible' => 'boolean',
        ]);

        $product->update([
            'subcategory_id' => $request->input('subcategory_id'),
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'brand' => $request->input('brand'),
            'dimension' => $request->input('dimension'),
            'weight' => $request->input('weight'),
            'is_on_sale' => $request->input('is_on_sale', false),
            'discount' => $request->input('discount'),
            'sale_start_date' => $request->input('sale_start_date'),
            'sale_end_date' => $request->input('sale_end_date'),
            'is_visible' => $request->input('is_visible', true),
        ]);

        return redirect()->route('products.index');
    }


    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index');
    }
}

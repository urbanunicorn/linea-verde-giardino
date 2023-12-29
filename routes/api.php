<?php

use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// API per ricevere tutte le categorie

Route::get("/categories", function () {

    $categories = Category::all();

    return response()->json($categories);
});

// API per ricevere tutte le sottocategorie di una categoria

Route::get("/subcategory", function () {

    $subcategories = Subcategory::all();

    return response()->json($subcategories);
});

// API per ricevere tutti i prodotti di una sottocategoria

Route::get("/categories/{category}/products", function (string $id) {

    $products =  Product::where("subcategory_id", $id)->get();

    return response()->json($products);
});

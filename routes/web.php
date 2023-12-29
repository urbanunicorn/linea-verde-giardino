<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::inertia('/', 'homepage/homepage')->name('home')->uses(HomeController::class);

Route::get('admin/dashboard', function () {
    if (auth()->user()->is_admin) {
        return Inertia::render('Admin/Dashboard');
    } else {
        abort(403, 'Unauthorized action.');
    }
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Rotte index con Inertia per i prodotti
    Route::inertia('/products', 'Products/Index')->name('products.index');
    Route::resource('products', ProductController::class);
});



require __DIR__ . '/auth.php';

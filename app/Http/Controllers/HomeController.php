<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function __invoke()
    {
        $categories = Category::all();

        return Inertia::render('Homepage/HomePage', [
            'canLogin' => route('login'),
            'canRegister' => route('register'),
            'laravelVersion' => Application::VERSION,
            'phpVersion' => PHP_VERSION,
            'categories' => $categories,
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

class CategoriesController extends Controller
{
    public function show()
    {

        $categories=Category::all();

        return view('books', compact('categories'));
    }

    
}

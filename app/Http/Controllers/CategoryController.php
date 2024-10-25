<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return view('app.categories.index', compact('categories'));
    }

    public function create()
    {

    }
    public function show(Category $category)
    {
    }






}

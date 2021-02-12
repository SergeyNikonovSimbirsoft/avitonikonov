<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CatalogController extends Controller
{
    public function catalog() {
        $categories = Category::where('parent_category_id', null)->get();
        return view('catalog.catalog', compact('categories'));
    }
    public function category($code) {
        $category = Category::where('code', $code)->firstOrFail();
        return view('catalog.category', compact('category'));
    }
}

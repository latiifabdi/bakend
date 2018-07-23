<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index($categoryId = null)
    {
    	$categoryId = $categoryId ?? 3;

    	$products = Product::where('category_id', $categoryId)->simplePaginate(12);

    	return view('home.index', compact('products'));
    }

    public function show(Product $product)
    {
    	return view('products.show', compact('product'));
    }
}

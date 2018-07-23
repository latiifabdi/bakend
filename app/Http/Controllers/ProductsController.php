<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
    	return Category::with('products')->get();
    }
}

<?php

namespace App\Http\Controllers;

use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
    	$ids = [];

    	foreach (Cart::content() as $item) {
    		$ids[] = $item->model->id;
    	}

    	$products = Product::findMany($ids);

    	return view('order.index', compact('products'));
    }
}

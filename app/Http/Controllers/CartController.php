<?php

namespace App\Http\Controllers;

use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
	public function index()
	{
        return view('cart');
		
	}
    public function store()
    {
        $product = Product::findOrFail(request('productId'));


    	$duplicates = Cart::search(function ($cartItem, $rowId) {
            return $cartItem->id === intval(request('productId'));
        });

        if (!$duplicates->isEmpty()) {
            return redirect('cart')->withErrorMessage('Item is already in your cart!');
        }

        Cart::add($product->id, $product->name, 1, $product->price)->associate('App\Product');
        return redirect('cart')->withSuccessMessage('Item was added to your cart!');

    }

    public function destroy($id)
    {
        Cart::remove($id);
        return redirect('cart')->withSuccessMessage('Item has been removed!');
    }
}

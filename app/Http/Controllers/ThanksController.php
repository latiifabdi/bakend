<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class ThanksController extends Controller
{
    public function index()
    {
    	Cart::destroy();
    	
    	return view('thanks');
    }
}

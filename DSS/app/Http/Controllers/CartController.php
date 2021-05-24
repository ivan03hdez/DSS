<?php

namespace App\Http\Controllers;

use Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function getCart()
    {
        return view('site.pages.cart');
    }
}

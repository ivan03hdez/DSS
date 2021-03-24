<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ShoppingCart;

class ShoppingCartController extends Controller{
    public function list(){
        $shoppingCarts = ShoppingCart::all();
        return view('promotions.list')->with('shoppingCarts',$shoppingCarts);///si estuviera en una carpeta views/products/list.blade.php seria view('promotions.list')
    }
    public function get($id){
        $shoppingCart = ShoppingCart::where('id',$id)->get()[0];//->get() devuelve una array asociativo de tipo name:producto1 con las columnas de la tabla producto 
        return view('promotions.details')->with('shoppingCart',$shoppingCart);
    }
    
}
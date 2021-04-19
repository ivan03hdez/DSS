<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ShoppingCart;

class ShoppingCartController extends Controller{
    public function list(){
        $shoppingCarts = ShoppingCart::sortable(['id'=> 'asc'])->paginate(10);
        return view('shoppingCarts.list')->with('shoppingCarts',$shoppingCarts);///si estuviera en una carpeta views/products/list.blade.php seria view('promotions.list')
    }
    public function get($id){
        $shoppingCart = ShoppingCart::where('id',$id)->get()[0];//->get() devuelve una array asociativo de tipo name:producto1 con las columnas de la tabla producto 
        return view('shoppingCarts.details')->with('shoppingCart',$shoppingCart);
    }
    
}
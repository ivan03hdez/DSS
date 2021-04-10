<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller{
    public function list(){
        $products = Product::sortable(['id'=> 'asc'])->paginate(10);
        return view('products.list')->with('products',$products);///si estuviera en una carpeta views/products/list.blade.php seria view('product.list')
    }
    public function get($id){
        $product = Product::where('id',$id)->get()[0];//->get() devuelve una array asociativo de tipo name:producto1 con las columnas de la tabla producto 
        return view('products.details')->with('product',$product);
    }
    public function create(){
        $product = new Product();
    }
    public function searchP(){
        $search = \Request::input('search-query'); 
        $products = Product::where('name', 'like', '%'.$search.'%')->paginate(10);
        return view('products.list')->with('products',$products);
    }
}

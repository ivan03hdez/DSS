<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\User;

class ProductController extends Controller{
    public function list(){
        $products = Product::All;
        return view('products')->with('products',$products);///si estuviera en una carpeta views/products/list.blade.php seria view('product.list')
    }
    public function get($id){
        $productDetails = Product::Where('id',$id);
        return view('product')->with('product',$productDetails);
    }
    public function create(){
        $product = new Product();
    }
}

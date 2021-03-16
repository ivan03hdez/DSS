<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\Product;

class ProductController extends Controller{
    public function list(){
        $products = Product::all();
        return view('products')->with('products',$products);///si estuviera en una carpeta views/products/list.blade.php seria view('product.list')
    }
    public function get($id){
        $productDetails = Product::where('id',$id);
        return view('product')->with('product',$productDetails);
    }
    public function create(){
        $product = new Product();
    }
}

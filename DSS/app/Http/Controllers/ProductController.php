<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Promotion;

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
    public function delete($id){
        $res=Product::where('id',$id)->delete();
        $res->delete();
        return redirect('products.list');
    }
    public function searchP(Request $request){
        $searchId = \Request::input('searchP-id'); 
        $searchName = \Request::input('searchP-name'); 
        $searchModel = \Request::input('searchP-model'); 
        $searchDescription = \Request::input('searchP-description'); 
        $searchDiscount = \Request::input('searchP-discount'); 

        $products = Product::where('id', 'like', '%'.$searchId.'%')
                            ->where('name', 'like', '%'.$searchName.'%')
                            ->where('model', 'like', '%'.$searchModel.'%')
                            ->where('description', 'like', '%'.$searchDescription.'%')
                            ->paginate(10);
       //->where('{{product->promotion->discount}}', 'like', '%'.$searchDiscount.'%')
        return view('products.list')->with('products',$products);
        //return $searchId . $searchName . $searchModel . $searchDiscount . $searchDescription;
    }
}

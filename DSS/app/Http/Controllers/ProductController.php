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
    public function create(Request $request){
        $name = $request->input('exampleInputName1');
        $price = $request->input('exampleInputPrice1');
        $promotionPrice = $request->input('exampleInputPromotionPrice1');
        $description = $request->input('exampleInputDescription1');
        $stock = $request->input('exampleInputStock1');
        $color = $request->input('exampleInputColor1');
        $model = $request->input('exampleInputModel1');
        $image = $request->input('exampleInputImage1');
        $type = $request->input('exampleInputType1');
        $promotion_id = $request->input('exampleInputPromId1');
        $product = new Product();
        $product->name = $name;
        $product->price = $price;
        $product->promotionPrice = $promotionPrice;
        $product->description = $description;
        $product->stock = $stock;
        $product->color = $color;
        $product->model = $model;
        $product->image = $image;
        $product->type = $type;
        $product->promotion_id = $promotion_id;
        $product->save();
        return redirect()->action('ProductController@list');
    }
    public function update($id){
        return view('products/update')->with('id',$id);
    }
    public function updateData(Request $request,$id){
        $name = $request->input('exampleInputName1');
        $price = $request->input('exampleInputPrice1');
        $promotionPrice = $request->input('exampleInputPromotionPrice1');
        $description = $request->input('exampleInputDescription1');
        $stock = $request->input('exampleInputStock1');
        $color = $request->input('exampleInputColor1');
        $model = $request->input('exampleInputModel1');
        $image = $request->input('exampleInputImage1');
        $type = $request->input('exampleInputType1');
        $promotion_id = $request->input('exampleInputPromId1');
        $product = Product::find($id);
        $product->id= $id;
        $product->name = $name;
        $product->price = $price;
        $product->promotionPrice = $promotionPrice;
        $product->description = $description;
        $product->stock = $stock;
        $product->color = $color;
        $product->model = $model;
        $product->image = $image;
        $product->type = $type;
        $product->promotion_id = $promotion_id;
        $product->save();
        return redirect()->action('ProductController@list');
    }
    public function delete($id){
        $res=Product::where('id', '=' ,$id)->get()[0]->delete(); //Product::destroy($id); tb funciona
        return redirect()->action('ProductController@list');
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
    public function addToCart(Request $request)
    {
        $product = $this->products->searchId($request->input('id'));
        $options = $request->except('_token', 'id', 'price', 'qty');

        Cart::add(uniqid(), $product->name, $request->input('price'), $request->input('qty'), $options);

        return redirect()->back()->with('message', 'Articulo añadido satisfactoriamente a la cesta');
    }
    public function search(){
        $products = Product::All();
        return view('search')->with('products',$products);
    }
    public function listType($type){
        $products = Product::where('type' , $type);
        return view('categorias')->with('products',$products);
    }
    
}

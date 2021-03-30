<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller{
    public function list(){
        $orders = Order::sortable(['id'=> 'asc'])->paginate(10);
        return view('orders.list')->with('orders',$orders);///si estuviera en una carpeta views/products/list.blade.php seria view('product.list')
    }
    public function filter($userId){
        $orders = Order::where('user_id',$userId)->paginate(10);
        return view('orders.list')->with('orders',$orders);///si estuviera en una carpeta views/products/list.blade.php seria view('product.list')
    }
    public function get($id){
        $order = Order::where('id',$id)->get()[0];//->get() devuelve una array asociativo de tipo name:producto1 con las columnas de la tabla producto 
        return view('orders.details')->with('order',$order);
    }
    
}
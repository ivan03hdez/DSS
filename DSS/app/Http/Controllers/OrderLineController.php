<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OrderLine;

class OrderLineController extends Controller{
    public function list(){
        $orderLines = OrderLine::sortable(['id'=> 'asc'])->paginate(10);
        return view('orderLines.list')->with('orderLines',$orderLines);///si estuviera en una carpeta views/products/list.blade.php seria view('product.list')
    }
    public function get($id){
        $orderLine = OrderLine::where('id',$id)->get()[0];//->get() devuelve una array asociativo de tipo name:producto1 con las columnas de la tabla producto 
        return view('orderLines.details')->with('orderLine',$orderLine);
    }
    
}
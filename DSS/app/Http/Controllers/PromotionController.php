<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Promotion;

class PromotionController extends Controller{
    public function list(){
        $promotions = Promotion::all();
        return view('promotions.list')->with('promotions',$promotions);///si estuviera en una carpeta views/products/list.blade.php seria view('promotions.list')
    }
    public function get($id){
        $promotion = Promotion::where('id',$id)->get()[0];//->get() devuelve una array asociativo de tipo name:producto1 con las columnas de la tabla producto 
        return view('promotions.details')->with('promotion',$promotion);
    }
    
}
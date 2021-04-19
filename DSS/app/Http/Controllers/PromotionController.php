<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Promotion;

class PromotionController extends Controller{
    public function list(){
        $promotions = Promotion::sortable(['id'=> 'asc'])->paginate(10);
        return view('promotions.list')->with('promotions',$promotions);///si estuviera en una carpeta views/products/list.blade.php seria view('promotions.list')
    }
    public function get($id){
        $promotion = Promotion::where('id',$id)->get()[0];//->get() devuelve una array asociativo de tipo name:producto1 con las columnas de la tabla producto 
        return view('promotions.details')->with('promotion',$promotion);
    }
    public function searchD(Request $request){
        $searchId = \Request::input('searchD-id'); 
        $searchDiscount = \Request::input('searchD-discount');
        $searchbeg = \Request::input('searchD-beginDate');
        $searchend = \Request::input('searchD-endDate');

        $promotions = Promotion::where('id', 'like', '%'.$searchId.'%')
                            ->where('discount', 'like', '%'.$searchDiscount.'%')
                            ->where('beginDate', 'like', '%'.$searchbeg.'%')
                            ->where('endDate', 'like', '%'.$searchend.'%')
                            ->paginate(10);
        return view('promotions.list')->with('promotions',$promotions);
    }
    
}
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
    public function create(Request $request){
        $discount = $request->input('exampleInputDiscount1');
        $beginDate = $request->input('exampleInputBeginDate1');
        $endDate = $request->input('exampleInputEndDate1');
        $promotion = new Promotion();
        $promotion->discount = $discount;
        $promotion->beginDate = $beginDate;
        $promotion->endDate = $endDate;
        $promotion->save();
        return redirect()->action('PromotionController@list');
    }
    public function update($id){
        return view('promotions.update')->with('id',$id);
    }
    public function updateData(Request $request){
        $id = $request->input('idUpdate');
        $discount = $request->input('exampleInputDiscount1');
        $beginDate = $request->input('exampleInputBeginDate1');
        $endDate = $request->input('exampleInputEndDate1');
        $promotion = Promotion::find($id);
        $promotion->id = $id;
        $promotion->discount = $discount;
        $promotion->beginDate = $beginDate;
        $promotion->endDate = $endDate;
        $promotion->save();
        return redirect()->action('PromotionController@list');
    }
    public function delete($id){
        Promotion::destroy($id);
        return redirect()->action('PromotionController@list');
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
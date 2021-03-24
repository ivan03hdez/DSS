<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FavoriteList;

class FavoriteListController extends Controller{
    public function list(){
        $favoriteLists = FavoriteList::all();
        return view('favoriteLists.list')->with('favoriteLists',$favoriteLists);///si estuviera en una carpeta views/products/list.blade.php seria view('product.list')
    }
    public function get($id){
        $favoriteList = FavoriteList::where('id',$id)->get()[0];//->get() devuelve una array asociativo de tipo name:producto1 con las columnas de la tabla producto 
        return view('favoriteLists.details')->with('favoriteList',$favoriteList);
    }
    
}
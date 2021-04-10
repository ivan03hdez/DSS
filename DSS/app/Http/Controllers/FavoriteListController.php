<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FavoriteList;

class FavoriteListController extends Controller{
    public function list(){
        $favoriteLists = FavoriteList::sortable(['id' => 'asc'])->paginate(10);
        return view('favoriteLists.list')->with('favoriteLists',$favoriteLists);
    }
    public function filter($userId){
        $favoriteLists = FavoriteList::where('user_id',$userId)->paginate(10);
        return view('favoriteLists.list')->with('favoriteLists',$favoriteLists);
    }
    public function get($id){
        $favoriteList = FavoriteList::where('id',$id)->get()[0];//->get() devuelve una array asociativo de tipo name:producto1 con las columnas de la tabla producto 
        return view('favoriteLists.details')->with('favoriteList',$favoriteList);
    }
    public function searchFL(){
        $search = \Request::input('search-query'); 
        $favoriteLists = FavoriteList::where('name', 'like', '%'.$search.'%')->paginate(10);
        return view('favoriteLists.list')->with('favoriteLists',$favoriteLists);
    }
}
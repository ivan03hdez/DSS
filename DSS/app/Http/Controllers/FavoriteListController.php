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
    public function delete($id){
        $res=FavoriteList::where('id',$id)->delete();
        $res->delete();
        return redirect('favoriteLists.list');
    }
    public function searchFL(){
        $searchId = \Request::input('searchFL-id'); 
        $searchName = \Request::input('searchFL-name'); 
        $searchDescr = \Request::input('searchFL-description'); 
        $favoriteLists = FavoriteList::where('id', 'like', '%'.$searchId.'%')->
                        where('name', 'like', '%'.$searchName.'%')->
                        where('description', 'like', '%'.$searchDescr.'%')->
                        paginate(10);
        return view('favoriteLists.list')->with('favoriteLists',$favoriteLists);
    }
    public static function numberOfLists($userId){
        $count = FavoriteList::where('user_id',$userId)->get('id')->count();
        return $count;
    }
}
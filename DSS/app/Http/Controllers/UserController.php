<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller{
    public function list(){
        $users = user::sortable(['id'=> 'asc'])->paginate(10);
        return view('users.list')->with('users',$users);///si estuviera en una carpeta views/products/list.blade.php seria view('product.list')
    }
    public function get($id){
        $user = User::where('id',$id)->get()[0];//->get() devuelve una array asociativo de tipo name:producto1 con las columnas de la tabla producto 
        return view('users.details')->with('user',$user);
    }
    
}

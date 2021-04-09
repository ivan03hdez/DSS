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
    public function create(Request $request){
        $name = $request->input('name');
        $addres = $request->input('addres');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $password = $request->input('password');
        $role = $request->input('role');
        $image = $request->input('image');
        $user = new User($name,$addres,$phone,$email,$password,$role,$image);
        $user->save();

    }
    public function edit(Request $request, $id) {
        $user = User::findOrFail( $id );
        if( $request->has('name') ) {
        $user->name = $request->input('name');
        $user->save();
        }
    }
        
    public function searchU(){
        $search = \Request::input('search-query'); 
        $users = User::where('name', 'like', '%'.$search.'%')->paginate(10);
        return view('users.list')->with('users',$users);
    }
}

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
    public function create(Request $request){ //////SE USA PARA EL FORMULARIO DE CREAR//////
        $name = $request->input('exampleInputName1');
        $email = $request->input('exampleInputEmail1');
        $password = $request->input('exampleInputPassword1');
        $address = $request->input('exampleInputAddress1');
        $phone = $request->input('exampleInputPhone1');
        $role = $request->input('exampleInputRole1');
        $image = $request->input('exampleInputImage1');
        $user = new User();//$name,$addres,$phone,$email,$password,$role,$image);
        $user->name = $name;
        $user->email = $email;
        $user->password = $password;
        $user->address = $address;
        $user->phone = $phone;
        $user->role = $role;
        $user->image = $image;
        $user->save();
        return redirect()->action('UserController@list');
    }
    public function edit(Request $request, $id) {
        $user = User::findOrFail( $id );
        if( $request->has('name') ) {
        $user->name = $request->input('name');
        $user->save();
        }
    }
    public function delete($id){
        User::destroy($id);
        return redirect()->action('UserController@list');
    }
    public function searchU(){
        $searchId = \Request::input('searchU-id'); 
        $searchName = \Request::input('searchU-name'); 
        $searchAdd = \Request::input('searchU-address');
        $searchPass = \Request::input('searchU-password');  
        $searchPh = \Request::input('searchU-phone'); 
        $searchEmail = \Request::input('searchU-email');
        $searchRole = \Request::input('searchU-role'); 
        $searchDImage = \Request::input('searchU-image');  

        $users = User::where('name', 'like', '%'.$searchName.'%')->
        where('id', 'like', '%'.$searchId.'%')->
        where('address', 'like', '%'.$searchAdd.'%')->
        where('password', 'like', '%'.$searchPass.'%')->
        where('phone', 'like', '%'.$searchPh.'%')->
        where('email', 'like', '%'.$searchEmail.'%')->   
        where('role', 'like', '%'.$searchRole.'%')->   
        where('image', 'like', '%'.$searchDImage.'%')->       
        paginate(10);

        return view('users.list')->with('users',$users);
    }
}

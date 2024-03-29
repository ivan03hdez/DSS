<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;
use App\FavoriteList;
use App\Http\Controllers\HomeController;
use Auth;
Use Hash;
use DB;

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
        if($request->input('exampleInputRole1'))
            $role = 'admin';
        else $role = 'user';
        $image = $request->input('exampleInputImage1');
        $user = new User();//$name,$addres,$phone,$email,$password,$role,$image);
        $user->name = $name;
        $user->email = $email;
        $user->password = Hash::make($password);
        $user->address = $address;
        $user->phone = $phone;
        $user->role = $role;
        $user->image = $image;
        $user->save();
        return redirect()->action('UserController@list');
    }
    public function update($id){
        return view('users/update')->with('id',$id);
    }
    public function updateData($id){
        $name = $request->input('exampleInputName1');
        $email = $request->input('exampleInputEmail1');
        $password = $request->input('exampleInputPassword1');
        $address = $request->input('exampleInputAddress1');
        $phone = $request->input('exampleInputPhone1');
        if($request->input('exampleInputRole1'))
            $role = 'admin';
        else $role = 'user';
        $image = $request->input('exampleInputImage1');
        $user = User::find($id);
        $user->id = $id;
        $user->name = $name;
        $user->email = $email;
        $user->password = Hash::make($password);
        $user->address = $address;
        $user->phone = $phone;
        $user->role = $role;
        $user->image = $image;
        $user->update();
        return redirect()->action('UserController@list');
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
    public function closeSession(){
        Auth::logout();
        // Session::flush();  removes all session data
        //Session::forget('yourKeyGoesHere') Removes a specific variable
        //Auth::logout() logs out the user 
        return redirect()->route('home');
    }
    public function isLogged(){
        return Auth::check();
    }
    public function myAccount(){
        $user = auth()->user();
        return view('myAccount')->with('user',$user);
    }
    public function addData(Request $request){
        $add = $request->input('address-myaccount');
        $phone = $request->input('phone-myaccount');
        $img = $request->input('image-myaccount');

        $user = auth()->user();
        $user->address = $add;
        $user->phone = $phone;
        $user->image = $img;
        $user->save();
        return view('myAccount')->with('user', $user);
    }
    public function editData(){
        $user = auth()->user();
        return view('myAccountEdit')->with('user',$user);
    }
    
    public function updateDataMyaccount(Request $request){
        $name = $request->input('exampleInputName1');
        $email = $request->input('exampleInputEmail1');
        $password = $request->input('exampleInputPassword1');
        $address = $request->input('exampleInputAddress1');
        $phone = $request->input('exampleInputPhone1');
        $image = $request->input('exampleInputImage1');
        $user = auth()->user();

        if(strcmp($name, '') == 0){
            $name = $user->name;
        }
        if(strcmp($email, '') == 0){
            $email = $user->email;
        }
        if(strcmp($password, '') == 0){
            $password = $user->password;
        }
        if(strcmp($address, '') == 0){
            $address = $user->address;
        }
        if(strcmp($phone, '') == 0){
            $phone = $user->phone;
        }
        if(strcmp($image, '') == 0){
            $image = $user->image;
        }
        
        $user->name = $name;
        $user->email = $email;
        $user->password = Hash::make($password);
        $user->address = $address;
        $user->phone = $phone;
        $user->image = $image;
        $user->update();
        return view('myAccountEdit')->with('user',$user);
    }
    public function addToCart($id,$number){
        if(Auth::check()){
            $count = DB::table('product_shopping_cart')->where('shopping_cart_id','=',Auth::user()->cart->id)->where('product_id',$id)->get('quantity');
            if($count == null || $count->isEmpty() || $count->max('quantity') < 0){
                DB::table('product_shopping_cart')->insert([
                    'product_id' => $id,
                    'shopping_cart_id' => Auth::user()->cart->id,
                    'quantity' => intval($number)
                ]);
            }else{
                $amount = ($count->max('quantity') + intval($number));
                DB::table('product_shopping_cart')->where('product_id',$id)->where('shopping_cart_id',Auth::user()->cart->id)->update(['quantity' => $amount]);
            }
            return view('shoppingCart');
        }
        else return abort(403, 'Necesitas iniciar Sesion para poder comprar');
        
    }
    public function favlists(){
        $user = auth()->user();
        $favlist =  FavoriteList::where('user_id', $user->id)->get();
        return view('favoriteList')->with('favlist', $favlist)->with('user', $user);
    }
    public function createFL(Request $request){
        $user = auth()->user();
        $fl = new FavoriteList();
        $fl->name = $request->input('name-fl');
        $fl->description = $request->input('description-fl');
        $fl->user_id = $user->id;
        $fl->save();
        $favlist =  FavoriteList::where('user_id', $user->id)->get();
        return Redirect()->back();
    }
    
    public function addP2FL(Request $request){
        $user = auth()->user();
        $flId = $request->input('id-fl');
        $prodName = $request->input('prod-fl');
        
        $product1 = new Product();
        $product = Product::where('name', $prodName)->get()->first();
        $product1 = Product::findOrFail($product->id);
        $favlist = new FavoriteList();
        $favlist = FavoriteList::findOrFail($flId);

        
        $favlist->products()->attach($product1->id);
        
        return Redirect()->back();
    }
    public function deleteFL(Request $request){
        $user = auth()->user();
        $flId = $request->input('id-fl');
        
        
        /*$product1 = new Product();
        $product = Product::where('name', $prodName)->get()->first();
        $product1 = Product::findOrFail($product->id);
*/
        $favlist = new FavoriteList();
        $favlist = FavoriteList::findOrFail($flId);

        //$collP [] = new Product($favlist->products()->count());
        
        
        foreach($favlist->products as $pr){
            $favlist->products()->detach($pr->id);
        }
        $favlist->delete();
  //      $favlist->products()->attach($product1->id);
        
        return Redirect()->back();
    }
    
    public function deleteP2FL(Request $request){
        $user = auth()->user();
        $flId = $request->input('id-fl');
        $pId = $request->input('idP-fl');
        
  
        $favlist = new FavoriteList();
        $favlist = FavoriteList::findOrFail($flId);

        $favlist->products()->detach($pId);        
        return Redirect()->back();
    }
    public function updateFLUser(Request $request){
        
        $name = $request->input('name-fl');
        $description = $request->input('description-fl');
        $id = $request->input('selectFL');
        
  
        $favlist = new FavoriteList();
        $favlist = FavoriteList::findOrFail($id);
        if(strcmp($name, '') != 0){
            $favlist->name = $name;
        }
        if(strcmp($description, '') != 0){
            $favlist->description = $description;
        }   
        $favlist->save();
        return Redirect()->back();
    }
}

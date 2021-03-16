<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\FavoriteList;
use App\User;
use App\Product;


class FavoriteListTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {   
        $flid = array();
        $uid = array();
        $p2id = array();
        $p1id = array();
        for($i = 1; $i < 3; $i++)
        {
            $FavList = new FavoriteList();
            $User = new User();

            $User->name = "FavListTest$i";
            $User->email = "FavListTest$i";
            $User->password = "FavListTest$i";
            $User->phone = "FavListTestPhone$i";
            $User->address = "FavListTest$i";
            $User->role = "user";
            $User->image = "FavListTest$i";
            $User->save();
            
            $FavList->name = "FavListTest$i";
            $FavList->description = "FavListTest$i";
            $FavList->user_id = $User->id;
            $FavList->user()->associate($User);
            $FavList->save();

            $producto1 = new Product(['name' => "Producto1favs$i",'promotionPrice' => 45,'price' => 5,'color'=>'rojo','description'=>'probando model favs','model' => 'model 1','stock' => 100,'image'=>'holaimagen']);
            $producto1->save();
            $producto2 = new Product(['name' => "Producto2favs$i",'promotionPrice' => 35,'price' => 15,'color'=>'azul','description'=>'probando model favs2','model' => 'model 2','stock' => 200,'image'=>'holaimagen2']);
            $producto2->save();
            $FavList->products()->attach([$producto1->id,$producto2->id]);

            array_push($uid, $User->id);
            array_push($flid, $FavList->id);
            array_push($p1id, $producto1->id);
            array_push($p2id, $producto2->id);

            



            //Test Create
            $this->assertDataBaseHas('favorite_lists', ['id' => $flid[$i-1], 'name' => "FavListTest$i"]);
            
            //Test Update
            $FavList->name = "FavListTestMod$i";
            $FavList->save();
            $this->assertDataBaseHas('favorite_lists', ['id' => $flid[$i-1], 'name' => "FavListTestMod$i"]);

            ////////////Probar foreign keys//////////////
            ///foreign key User
            $this->assertEquals("FavListTestPhone$i" , $FavList->user->phone);
            ///foreign key Product
            $this->assertEquals("Producto1favs$i" , $FavList->products[0]->name);
            $this->assertEquals("Producto2favs$i" , $FavList->products[1]->name);
            
            //Test Delete All Instances Created
            $producto1->delete();
            $producto2->delete();
            $FavList->delete();
            $User->delete();
            $this->assertDatabaseMissing('favorite_lists', ['id' => $flid[$i-1], 'name' => "FavListTestMod$i"]);
            $this->assertDatabaseMissing('products', ['id' => $p1id[$i-1], 'name' => "Producto1favs$i"]);
            $this->assertDatabaseMissing('products', ['id' => $p2id[$i-1], 'name' => "Producto2favs$i"]);
            $this->assertDatabaseMissing('users', ['id' => $uid[$i-1], 'name' => "FavListTestMod$i"]);
        }
    }
}


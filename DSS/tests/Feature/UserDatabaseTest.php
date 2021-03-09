<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\User;
use App\FavoriteList;
use App\ShoppingCart;

class UserDataBaseTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        ///CRUD///
        $user = new User(['name' => 'ivan','email' => 'ivan@gmail.com','password' => 'pw1','role' =>'user','address' => 'ivanStreet','image' => 'imagen1','phone' => '605968475']);
        $user->save();
        $this->assertEquals('ivan',$user->name);
        $this->assertDatabaseHas('users',['name' => 'ivan', 'email' => 'ivan@gmail.com']);
        $user->name = 'Diego';
        $user->save();
        $this->assertEquals('Diego',$user->name);
        $this->assertDatabaseHas('users',['name' => 'Diego', 'email' => 'ivan@gmail.com']);

        /////CLAVES AJENAS/////
        ///favList
        $lista = new FavoriteList(['name' => 'mis favoritos','description' => 'lista favs de prueba']);
        $lista->save();
        $lista2 = new FavoriteList(['name' => 'favs2','description' => 'prueba2']);
        $lista2->save();
        $user->favLists()->saveMany([$lista,$lista2]);
        $this->assertEquals('mis favoritos',$user->favLists[0]->name);
        $this->assertEquals('favs2',$user->favLists[1]->name);
        ///shoppingCart
        $cart = new ShoppingCart(['total'=>150]);
        $cart->save();
        $user->cart()->save($cart);// 1 a 1 en el que no tiene clave ajena se usa save()
        $this->assertEquals(150,$user->cart->total);

        //DELETE//
        $user->delete();
        $this->assertDatabaseMissing('users',['name' => 'Diego']);
    }
}
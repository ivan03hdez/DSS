<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\User;
use App\FavoriteList;
use App\ShoppingCart;
use App\Order;

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

        /////////////////////////CLAVES AJENAS////////////////////////
        ///favList
        $lista = new FavoriteList(['name' => 'mis favoritos','description' => 'lista favs de prueba']);
        $lista->save();
        $lista2 = new FavoriteList(['name' => 'favs2','description' => 'prueba2']);
        $lista2->save();
        $user->favLists()->saveMany([$lista,$lista2]);
        $user->save();
        $this->assertEquals('mis favoritos',$user->favLists[0]->name);
        $this->assertEquals('favs2',$user->favLists[1]->name);
        ///shoppingCart
        $cart = new ShoppingCart(['total'=>150]);
        $cart->save();
        $user->cart()->save($cart);// 1 a 1 en el que no tiene clave ajena se usa save()
        $this->assertEquals(150,$user->cart->total);
        ///user
        $order1 = new Order(['totalPrice' => 10]);
        $order1->save();
        $order2 = new Order(['totalPrice' => 20]);
        $order2->save();
        $order3 = new Order(['totalPrice' => 30]);
        $order3->save();
        $user->orders()->saveMany([$order1,$order2,$order3]);
        $user->save();
        $this->assertEquals(10,$user->orders[0]->totalPrice);
        $this->assertEquals(20,$user->orders[1]->totalPrice);
        $this->assertEquals(30,$user->orders[2]->totalPrice);
        //DELETE//
        $user->orders()->delete(); /// o añadir onDelete('cascade') en la propiedad user_id de la tabla orders)
        $user->delete();
        $this->assertDatabaseMissing('users',['name' => 'Diego']);
    }
}
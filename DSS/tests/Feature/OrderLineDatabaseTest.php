<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Order;
use App\Product;
use DB;

class OrderLineDatabaseTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $olid = array();
        $oid = array();
        $pid = array();

        for($i = 1; $i < 3; $i++)
        {
            $orderline = new OrderLine();
            $order = new Order();
            $product = new Product();

            $User->name = "OrdeLineTest$i";
            $User->email = "OrdeLineTest$i";
            $User->password = "OrdeLineTest$i";
            $User->phone = "OrdeLineTest$i";
            $User->address = "OrdeLineTest$i";
            $User->role = "user";
            $User->image = "FavListTest$i";
            $User->save();
            
            $FavList->name = "FavListTest$i";
            $FavList->description = "FavListTest$i";
            $FavList->user_id = $User->id;
            //$phone->user()->associate($user);
            $FavList->user()->associate($User);
            $FavList->save();

            array_push($uid, $User->id);
            array_push($flid, $FavList->id);

            //Test Create
            $this->assertDataBaseHas('favorite_lists', ['id' => $flid[$i-1], 'name' => "FavListTest$i"]);
            
            //Test Update
            $FavList->name = "FavListTestMod$i";
            $FavList->save();
            $this->assertDataBaseHas('favorite_lists', ['id' => $flid[$i-1], 'name' => "FavListTestMod$i"]);

            //Probar foreign key
            $this->assertEquals("FavListTestPhone$i" , $FavList->user->phone);
            
            //Test Delete
            
            $FavList->delete();
            $this->assertDatabaseMissing('favorite_lists', ['id' => $flid[$i-1], 'name' => "FavListTestMod$i"]);
        }
    }
    /*
    OrderLine
        $table->integer('price')
        $table->integer('quantity');
        $table->string('description');
        $table->foreign('product_id) ('products')
        $table->foreign('order_id') ('orders')

    Order
        $table->integer('totalPrice');
        $table->foreign('user_id') ('users');
    Product
        $table->string('name');
        $table->integer('price');
        $table->integer('promotionPrice');
        $table->string('description');
        $table->integer('stock');
        $table->string('color');
        $table->string('model');
        $table->bigInteger('promotion_id')->unsigned()->index();
        $table->foreign('promotion_id')->references('id')->on('promotions')->onDelete('cascade')->nullable();
        $table->string('image');
    */
}

<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Order;
use App\User;
use App\OrderLine;
use DB;

class OrderDatabaseTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $oid = array();

        for($i = 1; $i < 3; $i++)
        {
            
            $order = new Order(['totalPrice' => $i]);
            $user = new User(['name' => "ShoppingCartTest$i", 'email' => "ShoppingCartTestEmail$i", 'password' => "ShoppingCartTest$i",
                             'address' => "ShoppingCartTest$i", 'phone' => "ShoppingCartTest$i", 'role' => "user", 
                             'image' => "ImageForeignO$i"]); 
            $orderlineA = new OrderLine(['price' => $i, 'quantity' => $i, 'description' => "OrderTestA$i"]);
            //M2M
            $orderlineB = new OrderLine(['price' => $i, 'quantity' => $i, 'description' => "OrderTestB$i"]);

            $user->save();
            $orderlineA->save();
            $orderlineB->save();
            $order->user()->associate($user->id);
            $order->save();
            $order->lineas()->saveMany([$orderlineA, $orderlineB]);


            array_push($oid, $order->id);

            //Test Create
            $this->assertDataBaseHas('orders', ['id' => $oid[$i-1], 'totalPrice' => $i]);
            
            //Test Update
            $order->totalPrice = 99;
            $order->save();
            $this->assertDataBaseHas('orders', ['id' => $oid[$i-1], 'totalPrice' => 99]);

            //Probar foreign key
                //user
            $this->assertEquals("ImageForeignO$i" , $order->user->image);
                //product
            $this->assertEquals("OrderTestA$i" , $order->lineas[0]->description);
            $this->assertEquals("OrderTestB$i" , $order->lineas[1]->description);

            //Test Delete
            
            $order->delete();
            $this->assertDatabaseMissing('orders', ['id' => $oid[$i-1], 'totalPrice' => 99]);
        }
    }
}

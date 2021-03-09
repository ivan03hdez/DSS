<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Order;
use App\Product;
use App\OrderLine;
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

        for($i = 1; $i < 3; $i++)
        {
            
            $orderline = new OrderLine(['price' => $i, 'quantity' => $i, 'description' => "OrderLineTest$i"]);
            $order = new Order(['totalPrice' => $i]);
            $product = new Product(['name' => "OrderLineTest$i", 'price' => $i, 'promotionPrice' => $i, 'description' => "OrderLineTest$i",
                                    'stock' => $i, 'color' => "OrderLineTest$i", 'model' => "OrderLineTest$i", 'image' => "ImageForeign$i"]);
            
            $order->save();
            $product->save();
            $orderline->order()->associate($order);
            $orderline->product()->associate($product);
            $orderline->save();

            array_push($olid, $orderline->id);

            //Test Create
            $this->assertDataBaseHas('order_lines', ['id' => $olid[$i-1], 'description' => "OrderLineTest$i"]);
            
            //Test Update
            $orderline->description = "OrderLineTestMod$i";
            $orderline->save();
            $this->assertDataBaseHas('order_lines', ['id' => $olid[$i-1], 'description' => "OrderLineTestMod$i"]);

            //Probar foreign key
                //Order
            $this->assertEquals($i , $orderline->order->totalPrice);
                //product
            $this->assertEquals("ImageForeign$i" , $orderline->product->image);

            //Test Delete
            
            $orderline->delete();
            $this->assertDatabaseMissing('order_lines', ['id' => $olid[$i-1], 'description' => "OrderLineTestMod$i"]);
        }
    }
}

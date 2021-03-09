<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\ShoppingCart;
use App\Product;
use App\User;
use DB;

class ShoppingCartDatabaseTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $scid = array();

        for($i = 1; $i < 3; $i++)
        {
            
            $shopcart = new ShoppingCart(['total' => $i]);
            $user = new User(['name' => "ShoppingCartTest$i", 'email' => "ShoppingCartTest$i", 'password' => "ShoppingCartTest$i",
                             'address' => "ShoppingCartTest$i", 'phone' => "ShoppingCartTest$i", 'role' => "user", 
                             'image' => "ImageForeignSC$i"]); //claje ajena ***
            $productA = new Product(['name' => "OrderLineTestA$i", 'price' => $i, 'promotionPrice' => $i, 'description' => "OrderLineTestA$i",
                                    'stock' => $i, 'color' => "OrderLineTestA$i", 'model' => "OrderLineTestA$i", 'image' => "ImageForeignA$i"]);
            //M2M
            $productB = new Product(['name' => "OrderLineTestB$i", 'price' => $i, 'promotionPrice' => $i, 'description' => "OrderLineTestB$i",
                                    'stock' => $i, 'color' => "OrderLineTestB$i", 'model' => "OrderLineTestB$i", 'image' => "ImageForeignB$i"]);

            $user->save();
            $productA->save();
            $productB->save();
            $shopcart->user()->associate($user->id);
            $shopcart->save();
            $shopcart->carts()->attach([$productA->id, $productB->id]);


            array_push($scid, $shopcart->id);

            //Test Create
            $this->assertDataBaseHas('shopping_carts', ['id' => $scid[$i-1], 'total' => $i]);
            
            //Test Update
            $shopcart->total = 99;
            $shopcart->save();
            $this->assertDataBaseHas('shopping_carts', ['id' => $scid[$i-1], 'total' => 99]);

            //Probar foreign key
                //user
            $this->assertEquals("ImageForeignSC$i" , $shopcart->user->image);
                //product
            $this->assertEquals("ImageForeignA$i" , $shopcart->carts[0]->image);
            $this->assertEquals("ImageForeignB$i" , $shopcart->carts[1]->image);

            //Test Delete
            
            $shopcart->delete();
            $this->assertDatabaseMissing('shopping_carts', ['id' => $scid[$i-1], 'total' => 99]);
        }
    }
}

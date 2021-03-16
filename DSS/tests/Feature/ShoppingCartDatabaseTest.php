<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\ShoppingCart;
use App\Product;
use App\User;

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
                             'image' => "ImageForeignSC$i"]); //clave ajena ***
            $productA = new Product(['name' => "shopCartTest$i", 'price' => $i, 'promotionPrice' => $i, 'description' => "shopCartTest$i",
                                    'stock' => $i, 'color' => "shopCartTest$i", 'model' => "shopCartTest$i", 'image' => "ImageForeignA$i"]);
            //M2M
            $productB = new Product(['name' => "shopCartTest$i", 'price' => $i, 'promotionPrice' => $i, 'description' => "shopCartTest$i",
                                    'stock' => $i, 'color' => "shopCartTest$i", 'model' => "shopCartTest$i", 'image' => "ImageForeignB$i"]);

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

            //Test Delete All instances
            
            $user->delete(); ///con el onDelete('cascade') se borraria el carrito asociado al usuario y sus relaciones en la tabla (M2M) product_shopping_cart
            $productA->delete();
            $productB->delete();
            $this->assertDatabaseMissing('shopping_carts', ['id' => $scid[$i-1], 'total' => 99]);
            $this->assertDatabaseMissing('product_shopping_cart', ['shopping_cart_id' => $scid[$i-1]]);
        }
    }
}

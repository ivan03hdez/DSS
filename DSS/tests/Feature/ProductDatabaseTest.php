<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Product;
use App\Promotion;
use App\ShoppingCart;
use App\FavoriteList;

class ProductDatabaseTest extends TestCase{
     /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest(){

        //PROBANDO CLAVE AJENA A PROMOCION/////
        $promotion = new Promotion();
        $promotion->discount = 25;
        $promotion->save();
        $product = new Product();
        $product->name = 'productoPrueba';
        $product->price = 35;
        $product->color = 'color rojo';
        $product->description = 'producto de prueba para las pruebas unitarias';
        $product->model = 'modelo 100';
        $product->image = '/home/ivan/dss/productImage.png';
        $product->stock = 100;
        $product->promotion()->associate($promotion); //crea un atributo promotion en la clase product que contiene a la promocion
        $product->promotionPrice = $product->price * (1-($product->promotion->discount/100));
        $product->save();
        $this->assertequals(26.25,$product->promotionPrice);

        //////CREATE////
        $this->assertDatabaseHas('products', ['name' => 'productoPrueba', 'image'=> '/home/ivan/dss/productImage.png','price' => 35]);
        $MaxPrice = Product::max('price');
        $this->assertEquals(35,$MaxPrice);
        /////UPDATE//////
        $product->price = 45;
        $product->save();
        $this->assertDatabaseHas('products', ['name' => 'productoPrueba', 'image'=> '/home/ivan/dss/productImage.png','price' => 45]);
       
        /////PRUebas para las M2M///////
        ///FavoriteList
        $lista = new FavoriteList(['name' => 'mis favoritos','description' => 'lista favs de prueba']);
        $lista->save();
        $lista2 = new FavoriteList(['name' => 'favs2','description' => 'prueba2']);
        $lista2->save();
        $product->favLists()->attach([$lista->id,$lista2->id]);//attach() hay que pasarle las IDs
        $this->assertEquals('mis favoritos',$product->favLists[0]->name);
        $this->assertEquals('favs2',$product->favLists[1]->name);

        ///shoppingCart
        $cart = new ShoppingCart(['total'=>150]);
        $cart->save();
        $product->carts()->attach($cart);
        $this->assertEquals(150,$product->carts[0]->total);
        
        /////DELETE/////
        $product->delete();
        $this->assertDatabaseMissing('products', ['name' => 'productoPrueba', 'image'=> '/home/ivan/dss/productImage.png']);

    }
}
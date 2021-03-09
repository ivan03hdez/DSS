<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Product;
use App\Promotion;
use DB;

class ProductDatabaseTest extends TestCase{
     /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest(){
        $promotion = new Promotion();
        $promotion->discount = 25;
        $promotion->save();
        $product = new Product();
        $product->name = 'productoPrueba';
        $product->price = 35;
        $product->promotionPrice = 35;
        $product->color = 'color rojo';
        $product->description = 'producto de prueba para las pruebas unitarias';
        $product->model = 'modelo 100';
        $product->image = '/home/ivan/dss/productImage.png';
        $product->stock = 100;
        $product->promotion()->attach($promotion->id);
        $product->save();


        //////CREATE////
        echo $product->promotion_id->discount;
        $this->assertDatabaseHas('products', ['name' => 'productoPrueba', 'image'=> '/home/ivan/dss/productImage.png','price' => 35]);
        $MaxPrice = Product::max('price');
        $this->assertEquals(35,$MaxPrice);
        /////UPDATE//////
        $product->price = 45;
        echo "$product->id\n";
        $product->save();
        $this->assertDatabaseHas('products', ['name' => 'productoPrueba', 'image'=> '/home/ivan/dss/productImage.png','price' => 45]);
        /////DELETE/////
        $product->delete();
        $MaxPrice = Product::max('price');
        $this->assertEquals(24,$MaxPrice);
        $this->assertDeleted('products', ['name' => 'productoPrueba', 'image'=> '/home/ivan/dss/productImage.png']);
    }
}
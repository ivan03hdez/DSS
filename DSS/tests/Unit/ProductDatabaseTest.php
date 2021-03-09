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
        /*$products = DB::table('products')->get();
        $i = 0;
        foreach ($products as $product) {
            echo "$product->promotion_id";
            $this->assertEquals("producto$i",$product->name);
            $this->assertEquals("color$i",$product->color);
            ///para comprobar que la clave ajena de producto esta bien hecha, comprobamos que desde cada producto se pueden llegar a su descuento mediante la tabla promociones
            $discounts = DB::table('promotions')->where('id', '=',$product->promotion_id)->get('discount');
            $this->assertEquals(10 +$i,$discounts[0]->discount);
            $i++;
        }*/
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

        
        


        echo $product->promotion_id->discount;
        $this->assertDatabaseHas('products', ['name' => 'productoPrueba', 'image'=> '/home/ivan/dss/productImage.png']);
        $MaxPrice = Product::max('price');
        $this->assertEquals(35,$MaxPrice);


        $product->delete();
        $MaxPrice = Product::max('price');
        $this->assertEquals(24,$MaxPrice);
    }
}
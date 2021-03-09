<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Product;
use DB;

class ProductDatabaseTest extends TestCase{
     /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest(){
        $products = DB::table('products')->get();
        $i = 0;
        foreach ($products as $product) {
            echo "$product->promotion_id";
            $this->assertEquals("producto$i",$product->name);
            $this->assertEquals("color$i",$product->color);
            ///para comprobar que la clave ajena de producto esta bien hecha, comprobamos que desde cada producto se pueden llegar a su descuento mediante la tabla promociones
            $discounts = DB::table('promotions')->where('id', '=',$product->promotion_id)->get('discount');
            $this->assertEquals(10 +$i,$discounts[0]->discount);
            $i++;
        }
    }
}
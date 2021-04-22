<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Promotion;
use App\Product;

class PromotionDatabaseTest extends TestCase{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $promotion = new Promotion();
        $promotion->discount = 45;
        $promotion->save();
        $this->assertDatabaseHas('promotions', ['discount' => 45]);
        $promotion->discount = 55;
        $promotion->save();
        $this->assertDatabaseHas('promotions', ['discount' => 55]);
        
        ////Probando claves ajenas/////
        $producto1 = new Product(['name' => 'Producto1Promocion1','promotionPrice' => 45,'price' => 5,'color'=>'rojo','description'=>'probando model promociones','model' => 'model 1','stock' => 100,'image'=>'holaimagen']);
        $promotion->products()->saveMany([$producto1]);
        $this->assertEquals('Producto1Promocion1',$promotion->products[0]->name);//$promotion->products es una collection de este tipo ['name':'nombre1...]

        $producto1->delete();
        $promotion->delete();
        $this->assertDatabaseMissing('promotions', ['discount' => 55]);
        
    }
}
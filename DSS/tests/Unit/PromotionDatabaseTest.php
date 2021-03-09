<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Promotion;
use DB;

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
        $promotion->delete();
        $this->assertDeleted('promotions', ['discount' => 55]);
    }
}
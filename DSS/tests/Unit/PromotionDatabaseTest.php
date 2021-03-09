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
        $promotions = DB::table('promotions')->get();
        $i = 0;
        foreach ($promotions as $promotion) {
            $this->assertEquals(10+ $i,$promotion->discount);
            $i++;
        }
    }
    
}
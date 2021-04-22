<?php

use Illuminate\Database\Seeder;

class PromotionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('promotions')->delete();
        
        for($i = 0; $i < 10; $i++){
            DB::table('promotions')->insert([
                'discount' => (10 + $i)
            ]);
        }
    }
}
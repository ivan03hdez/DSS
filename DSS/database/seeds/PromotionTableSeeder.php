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
        
        for($i = 0; $i < 40; $i++){
            DB::table('promotions')->insert([
                'discount' => (10 + $i),
                'beginDate' => '12-03-2021',
                'endDate' => '12-05-2021'
            ]);
        }
    }
}
<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->delete();
        
        for($i = 0; $i < 40; $i++){
            DB::table('products')->insert([
                'name' => "producto$i",
                'price' => (15 + $i),
                'promotionPrice' => (15 + $i), 
                'description' => "description$i",
                'stock' => (10 + $i),
                'color' => "color$i",
                'model' => "model$i",
                'promotion_id' => $i +1, ///las ids empiezan por 1 y el bucle por 0
                'image' => "images/producto$i.jpg",
                'type' => "altavoz$i",

            ]);
        }
    }
}
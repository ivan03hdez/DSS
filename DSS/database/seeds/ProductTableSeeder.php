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
            if($i<10){
                $tipo = 'Altavoz';
                $num = intval($i / 2) ; ;
                $image = "$tipo$num.png";
            }
            else if($i < 20){
                $tipo = 'Cascos';
                $num = intval($i / 2) ;
                $image = "$tipo$num.png";
            }
            else if($i < 30){
                $tipo = 'Auriculares';
                $num = intval($i / 2) ;;
                $image = "$tipo$num.png";
            }
            else{
                $tipo = 'Microfono';
                $num = intval($i / 2) ; ;
                $image = "$tipo$num.png";
            }
            DB::table('products')->insert([
                'name' => "producto$i",
                'price' => (15 + (2*$i)),
                'promotionPrice' => (15 + $i), 
                'description' => "description$i",
                'stock' => (10 + $i),
                'color' => "color$i",
                'model' => "model$i",
                'promotion_id' => $i +1,
                'image' => "images/products/$image",
                'type' => "$tipo",

            ]);
        }
    }
}
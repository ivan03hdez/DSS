<?php

use Illuminate\Database\Seeder;

class ProductShoppingCartTableSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        
        DB::table('product_shopping_cart')->delete();
        $products = DB::table('products')->get();
        $shopcarts = DB::table('shopping_carts')->get();
        $pr = array();
        $sc = array();
        foreach($products as $product)
        {
            array_push($pr, $product);
        }

        foreach($shopcarts as $shopcart)
        {
            array_push($sc, $shopcart);   
        }
        $tam = min(count($pr), count($sc));
        for($i = 0; $i < $tam; $i++)
        {
            DB::table('product_shopping_cart')->insert([
                'product_id' => ($pr[$i]->id),
                'shopping_cart_id' => ($sc[$i]->id),
                'quantity' => 1
            ]);
        }
    }
}
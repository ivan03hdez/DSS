<?php

use Illuminate\Database\Seeder;

class ProductFavoriteListTableSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('favorite_list_product')->delete();
        $products = DB::table('products')->get();
        $favlists = DB::table('favorite_lists')->get();
        $pr = array();
        $fl = array();
        foreach($products as $product)
        {
            array_push($pr, $product);
        }

        foreach($favlists as $favlist)
        {
            array_push($fl, $favlist);   
        }
        $tam = min(count($pr), count($fl));
        for($i = 0; $i < $tam; $i++)
        {
            DB::table('favorite_list_product')->insert([
                'product_id' => ($pr[$i]->id),
                'favorite_list_id' => ($fl[$i]->id)
            ]);
        }
    }
}
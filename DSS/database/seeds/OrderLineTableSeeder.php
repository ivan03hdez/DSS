<?php

use Illuminate\Database\Seeder;

class OrderLineTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('order_lines')->delete();
        $products = DB::table('products')->get();
        $orders = DB::table('orders')->get();
        $pr = array();
        $or = array();
        foreach($products as $product)
        {
            array_push($pr, $product);
        }

        foreach($orders as $order)
        {
            array_push($or, $order);   
        }
        $tam = min(count($pr), count($or));
        for($i = 0; $i < $tam; $i++)
        {
            for($j = 0; $j < 4; $j++){
                $description = "Description$i$j";
                DB::table('order_lines')->insert([
                    'price' => ($i + $j),
                    'quantity' => ($i + $j),
                    'description' => ($description),
                    'product_id' => ($pr[$i]->id),
                    'order_id' => ($or[$i]->id)
                ]);
            }
        }
    }
}

<?php

use Illuminate\Database\Seeder;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('orders')->delete();
        $users = DB::table('users')->get();
        $i = 1;
        foreach($users as $user)
        {
            if($user->role == 'user')
            {
                DB::table('orders')->insert([
                    'totalPrice' => ($i),
                    'user_id' => ($user->id),
                    'paymentMethod' => 'paypal'
                ]);
                $i++;
            }
        }
    }
}

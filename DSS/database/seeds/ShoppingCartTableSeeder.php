<?php

use Illuminate\Database\Seeder;

class ShoppingCartTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('shopping_carts')->delete();
        $users = DB::table('users')->get();
        $i = 1;
        foreach($users as $user)
        {
            if($user->role == 'user')
            {
                DB::table('shopping_carts')->insert([
                    'total' => ($i),
                    'user_id' => ($user->id)
                ]);
                $i++;
            }
        }
    }
}

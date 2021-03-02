<?php

use Illuminate\Database\Seeder;

class FavoriteListTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('favorite_lists')->delete();
        $users = DB::table('users')->get();
        foreach($users as $user)
        {
            if($user->role == 'user')
            {

            }
        }
        
    }
}

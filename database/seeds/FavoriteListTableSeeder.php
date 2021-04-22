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
        $i = 1;
        foreach($users as $user)
        {
            if($user->role == 'user')
            {
                $name = "FavList$i";
                $description = "Description$i";
                DB::table('favorite_lists')->insert([
                    'name' => ($name),
                    'description' => ($description),
                    'user_id' => ($user->id)
                ]);
                $i++;
            }
        }
        
    }
}

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
            for($j =0; $j<3; $j++){
                if($user->role == 'user')
                {
                    $name = "FavList$i$j";
                    $description = "Description$i$j";
                    DB::table('favorite_lists')->insert([
                        'name' => ($name),
                        'description' => ($description),
                        'user_id' => ($user->id)
                    ]);
                    
                }
            }
            $i++;
        }
        
    }
}

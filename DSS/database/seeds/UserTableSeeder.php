<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        // Añadimos una entrada a esta tabla
        
        for($i = 0; $i < 10; $i++){
            if ($i == 0)
            {
                $role = 'admin';
            }
            else
            {
                $role = 'user';
            }

            $phone = 'phonenumber' . $i;

            DB::table('users')->insert([
                'name' => "Username$i",
                'email' => "email$i@domain.com",
                'password' => "pass$i", 
                'address' => "address$i",
                'phone' => intval($phone, 10),
                'role' => $role,
                'image' => "image$i"
            ]);
        }
    }
}

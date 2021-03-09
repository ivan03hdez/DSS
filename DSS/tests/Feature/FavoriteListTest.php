<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\FavoriteList;
use App\User;
use DB;


class FavoriteListTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {   
        $flid = array();
        $uid = array();
        for($i = 1; $i < 3; $i++)
        {
            $FavList = new FavoriteList();
            $User = new User();

            $User->name = "FavListTest$i";
            $User->email = "FavListTest$i";
            $User->password = "FavListTest$i";
            $User->phone = "FavListTestPhone$i";
            $User->address = "FavListTest$i";
            $User->role = "user";
            $User->image = "FavListTest$i";
            $User->save();
            
            $FavList->name = "FavListTest$i";
            $FavList->description = "FavListTest$i";
            $FavList->user_id = $User->id;
            //$phone->user()->associate($user);
            $FavList->user()->associate($User);
            $FavList->save();

            array_push($uid, $User->id);
            array_push($flid, $FavList->id);



            //Test Create
            $this->assertDataBaseHas('favorite_lists', ['id' => $flid[$i-1], 'name' => "FavListTest$i"]);
            
            //Test Update
            $FavList->name = "FavListTestMod$i";
            $FavList->save();
            $this->assertDataBaseHas('favorite_lists', ['id' => $flid[$i-1], 'name' => "FavListTestMod$i"]);

            //Probar foreign key
            $this->assertEquals("FavListTestPhone$i" , $FavList->user->phone);
            
            //Test Delete
            
            $FavList->delete();
            $this->assertDatabaseMissing('favorite_lists', ['id' => $flid[$i-1], 'name' => "FavListTestMod$i"]);
        }
    }
}


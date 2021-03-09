<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

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
            $User->address = "FavListTest$i";
            $User->role = "user";
            $User->image = "FavListTest$i";
            $User->save();
            
            $FavList->name = "FavListTest$i";
            $FavList->desciption = "FavListTest$i";
            $FavList->user_id = $User->id;
            $FavList->save();

            array_push($uid, $User->id);
            array_push($flid, $FavList->id);

            //Test Create
            $this->assertDataBaseHas('favorite_lists', []);
        }
        
        



    }
}

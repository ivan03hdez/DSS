<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\User;
use DB;

class UserDataBaseTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        ///////COMPROBAMOS QUE SE HAN INTRODUCIDO BIEN LAS CONTRASEÑAS DE LOS USUARIOS////////////////////
        $users = DB::table('users')->get();
        $i = 0;
        foreach ($users as $user) {
            $this->assertEquals("pass$i",$user->password);
            $i++;
        }
        ///////COMPROBAMOS QUE SE HAN INTRODUCIDO BIEN LOS Nombres DE LOS USUARIOS////////////////////
        $userNames = array("name" => "Username0",
        "name" =>"Username1",
        "name" =>"Username2",
        "name" =>"Username3",
        "name" =>"Username4",
        "name" =>"Username5",
        "name" =>"Username6",
        "name" =>"Username7",
        "name" =>"Username8",
        "name" =>"Username9");
        $this->assertDatabaseHas('users', $userNames);
        ///////COMPROBAMOS QUE SE HAN INTRODUCIDO BIEN LOS EMAILS DE LOS USUARIOS////////////////////
        $userEmails = array('email' => 'email0@domain.com',
        'email' => 'email1@domain.com',
        'email' => 'email2@domain.com',
        'email' => 'email3@domain.com',
        'email' => 'email4@domain.com',
        'email' => 'email5@domain.com',
        'email' => 'email6@domain.com',
        'email' => 'email7@domain.com',
        'email' => 'email8@domain.com',
        'email' => 'email9@domain.com',
        );
        
        $this->assertDatabaseHas('users', $userEmails);
    }
}
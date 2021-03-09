<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\User;

class UserDataBaseTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        ///CRUD///
        $user = new User(['name' => 'ivan','email' => 'ivan@gmail.com','password' => 'pw1','role' =>'user','address' => 'ivanStreet','image' => 'imagen1','phone' => '605968475']);
        $user->save();
        $this->assertEquals('ivan',$user->name);
        $this->assertDatabaseHas('users',['name' => 'ivan']);
        $user->name = 'Diego';
        $user->save();
        $this->assertEquals('Diego',$user->name);
        $this->assertDatabaseHas('users',['name' => 'Diego']);
    }
}
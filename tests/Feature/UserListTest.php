<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserListTest extends TestCase
{

    public function canAccessUserListPageWithoutError()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function canSeeAllUsersInList()
    {
        $user = factory('App\Users')->create();
        $response = $this->get('/users');
        $response->assertSee($users->name);
    }

    public function canAddNewUser()
    {
        $user = factory('App\Users')->create();
        $response = $this->get('/users');
        $response->assertStatus(200);
    }

    public function canDeleteExistingUser(){
        $user = factory('App\Users')->create();
        $response = $this->delete('/users/'.$user->id);
        $response->assertStatus(200);
    }

}

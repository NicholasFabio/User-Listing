<?php

namespace App\Repositories;

use App\Users;
use App\Repositories\Interfaces\UserRepositoryInterface;
use Illuminate\Http\Request;

class UserRepository implements UserRepositoryInterface
{
    public function fetchAllUsers()
    {
        return Users::latest()->paginate(5);
    }

    public function deleteUser(Users $user)
    {
        $user->delete();
    }

    public function createUser(Request $userData)
    {           
        Users::create($userData->all());
    }
}
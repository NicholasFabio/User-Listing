<?php

namespace App\Repositories\Interfaces;

use App\Users;
use Illuminate\Http\Request;

interface UserRepositoryInterface
{
    public function fetchAllUsers();

    public function deleteUser(Users $user);

    public function createUser(Request $userData);
    

}
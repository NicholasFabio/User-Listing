<?php

namespace App\Http\Controllers;

use App\Users;
use App\Repositories\Interfaces\UserRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    private $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index()
    {   
        $users = $this->userRepository->fetchAllUsers();
  
        return view('users.index',compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {   
        $this->userRepository->createUser($request);
        
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'position' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('error',$validator->messages()->first());
        }else{
            
            return redirect()->route('users.index')
            ->with('success','User created successfully.');
        }
        
    }

    public function destroy(Users $user)
    {
        $this->userRepository->deleteUser($user);
        return redirect()->route('users.index')
                        ->with('success','User deleted successfully');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $usersList = User::all();
        return view('user', [
            'users' => $usersList
        ]);
    }

    public function show(User $user)
    {
        return view('user', [
            'user' => $user
        ]);
//        return view('user', [
//            'user' => $user
//        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        $table_classes = [
            '_striped',
            '_shaded',
            '_bordered',
            '_lined',
        ];
        
        return view('user/index', [
            'users' => $users,
            'table_classes' => $table_classes,
        ]);
    }

    public function show(User $user)
    {
        return view('user/show', [
            'user' => $user,
        ]);
    }
    
}
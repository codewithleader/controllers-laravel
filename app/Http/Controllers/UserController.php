<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        // return view('user.index', ['users' => $users]);
        return view('user.index', compact('users')); // compact() nos permite simplificar el array asociativo cuando la variable es igual a los datos 'users' $users
    }
}

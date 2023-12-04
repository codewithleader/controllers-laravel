<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        // return view('user.index', ['users' => $users]);
        return view('user.index', compact('users')); // compact() nos permite simplificar el array asociativo cuando la variable es igual a los datos 'users' $users
    }

    public function create()
    {
        $user = new User;
        $user->name = 'Alan Brito';
        $user->email = 'alan@brito.com';
        $user->password = Hash::make('Abc123');
        $user->age = 25;
        $user->address = 'Street Av 24';
        $user->zip_code = 195003;

        $user->save();

        // Otra opción
        User::create([
            'name' => 'Elsa Polindo',
            'email' => 'elsa@polindo.com',
            'password' => Hash::make('Abc123'),
            'age' => 34,
            'address' => '4th Av Main Street',
            'zip_code' => 440320,
        ]);

        User::create([
            'name' => 'Susana Oria',
            'email' => 'susana@oria.com',
            'password' => Hash::make('Abc123'),
            'age' => 26,
            'address' => 'Street 44 The Savior',
            'zip_code' => 909433,
        ]);

        return redirect()->route('user.index');
    }
}

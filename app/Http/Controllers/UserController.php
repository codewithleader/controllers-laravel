<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        /* Consultas con el ORM */
        // $users = User::where('age', '>=', '26')->orWhere()->orderBy('name', 'desc')->limit(1)->get();
        // $users = User::all();

        /* Consultas Directas SQL sin el ORM */
        $users = DB::select("SELECT * FROM users WHERE age >= 18");
        // $users = DB::table('users')->select(DB::raw('*'))->where('age', '>=', 18)->get();

        /* Pasarle los datos a la vista */
        // return view('user.index', ['users' => $users]);
        return view('user.index', compact('users')); // compact() nos permite simplificar el array asociativo cuando la variable es igual a los datos 'users' $users
    }

    public function create()
    {
        // $user = new User;
        // $user->name = 'Alan Brito';
        // $user->email = 'alan@brito.com';
        // $user->password = Hash::make('Abc123');
        // $user->age = 25;
        // $user->address = 'Street Av 24';
        // $user->zip_code = 195003;

        // $user->save();

        // // Otra opción
        // User::create([
        //     'name' => 'Elsa Polindo',
        //     'email' => 'elsa@polindo.com',
        //     'password' => Hash::make('Abc123'),
        //     'age' => 34,
        //     'address' => '4th Av Main Street',
        //     'zip_code' => 440320,
        // ]);

        // User::create([
        //     'name' => 'Susana Oria',
        //     'email' => 'susana@oria.com',
        //     'password' => Hash::make('Abc123'),
        //     'age' => 26,
        //     'address' => 'Street 44 The Savior',
        //     'zip_code' => 909433,
        // ]);

        // DB::insert(DB::raw('INSERT INTO users VALUES ("Armando Esteban Quito", "armando@estebanquito.com","???Hash???")'));
        DB::table('users')->insert([
            'name' => 'Mily Brito',
            'email' => 'mily@brito.com',
            'password' => Hash::make('Abc123'),
            'age' => 18,
            'address' => 'Av Liberator 92 Street',
            'zip_code' => 203137,
        ]);

        return redirect()->route('user.index');
    }
}

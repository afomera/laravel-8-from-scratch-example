<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function create() {
        return view("register.create");
    }


    public function store() {
        // Lets first validate the request data
        $attributes = request()->validate([
            'name' => ['required', 'min:2'],
            'username' => ['required', 'max:255', 'unique:users,username'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'min:6', 'max:255']
        ]);

        // create the user
        User::create($attributes);

        // TODO: sign in the user here

        // redirect to the home page
        return redirect('/')->with('success', 'Your account has been created!');
    }
}

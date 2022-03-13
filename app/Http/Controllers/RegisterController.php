<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $user = User::create($attributes);

        // sign in the user here
        auth()->login($user);

        // redirect to the home page
        return redirect('/')->with('success', 'Your account has been created!');
    }
}

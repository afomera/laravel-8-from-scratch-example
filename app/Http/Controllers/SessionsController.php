<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{
    public function create() {
        return view("sessions.create");
    }

    public function store() {
        // Lets first validate the request data
        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        // Attempt to log the user in
        if (auth()->attempt($attributes)) {
            // regnerate the session ID, to prevent session fixation attacks
            session()->regenerate();

            // redirect to the home page
            return redirect('/')->with('success', 'You are now logged in!');
        }

        // If the login attempt fails, we will redirect back to the login page
        // return redirect('/login')->with('error', 'Login failed!');
        return back()
            ->withInput()
            ->withErrors([
                'email' => 'Your provided credentials could not be verified.'
            ]);
    }

    public function destroy() {
        auth()->logout();

        return redirect('/')->with('success', 'You have been logged out!');
    }
}

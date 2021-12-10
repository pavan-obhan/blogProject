<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        //validate the request
        $attributes = request()->validate([
            'email' => 'required|exists:users,email',
            'password' => 'required'
        ]);


        if (!auth()->attempt($attributes)) {
            throw ValidationException::withMessages([
                'password' => 'Your provided credentials could not be verified'
            ]);
        }
        session()->regenerate();
        return redirect(Session::get('url'))->with('success', 'Welcome Back');

    }

    public function destroy()
    {
        auth()->logout();
//        return redirect('/')->with('success', 'Successfully Logged Out');
    return back()->with('success', 'Successfully Logged Out');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        $attributes =
            request()->validate([
                'name' => 'required|min:3|max:255',
                'username' => 'required|min:3|max:255|unique:users,username',
                'email' => 'required|email|max:255|unique:users,email',
                'password' => 'required|min:7|max:255'
            ]);
        $user = User::create($attributes);
        auth()->login($user);
//        session()->flash('success', "Your account is created successfully"); //can be replaced with 'with keyword'
        return redirect(Session::get('url'))->with('success', 'Your account is created successfully');
    }
}

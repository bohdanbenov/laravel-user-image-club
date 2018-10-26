<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
    public function create(){
        return view('registration.create');
    }

    public function store(){

        $this->validate(request(), [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'country' => 'max:100',
            'city' => 'max:100',
            'street' => 'max:100',
            'postcode' => 'digits:5',
            'homenumber' => 'numeric|max:5000'
        ]);

        $user = User::create([
            'firstname' => request('firstname'),
            'lastname' => request('lastname'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),
            'country' => request('country'),
            'city' => request('city'),
            'street' => request('street'),
            'postcode' => request('postcode'),
            'homenumber' => request('homenumber'),
            'sex' => request('sex')
        ]);

        auth()->login($user);

        return redirect()->home();
    }
}

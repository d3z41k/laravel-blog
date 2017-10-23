<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function destroy()
    {

        auth()->logout();

        return redirect()->home();

    }

    public function store()
    {
        $this->validate(request(), [
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);

        $user = User::create(request(['email', 'password']));

        auth()->login($user);

        return redirect()->home();
    }
}

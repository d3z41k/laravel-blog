<?php

namespace App\Http\Controllers;

use App\User;

class RegistrationController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'destroy']);
    }

    public function create()
    {
        return view('registration.create');
    }

    public function store()
    {
        if (!auth()->attempt(['email', 'password'])) {
            return back()->whithError([
                'message' => 'Try again!'
            ]);
        };

        return redirect()->home();
    }


}

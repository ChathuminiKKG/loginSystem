<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class signupController extends Controller
{
    public function signupLink()
    {
        return view('registerForm');
    }

    public function loginLink()
    {
        return redirect('/');
    }
}

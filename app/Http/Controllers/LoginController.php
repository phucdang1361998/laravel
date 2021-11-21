<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function login()
    {
        return view('clients.login');
    }

    public function user(Request $request)
    {

    }
}

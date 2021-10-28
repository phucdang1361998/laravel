<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $attributes = $request->all();
        $checkUser = User::where([
            'email'    => $attributes['email'],
            'password' => $attributes['password'],
        ])->first();
        if (!isset($checkUser)) {
            return view('admin.login');
        }

        return view('admin.index', ['name' => $checkUser['name']]);
    }
}

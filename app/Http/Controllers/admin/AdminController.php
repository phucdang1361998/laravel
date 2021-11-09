<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function Auth()
    {
        $admin = Session::get('admin_id');
        if ($admin) {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->route('admin.home')->send();
        }
    }

    public function index()
    {
        return view('admin.login');
    }

    public function dashboard()
    {
        $this->Auth();
        return view('admin.index');
    }

    public function login(Request $request)
    {
        $attributes = $request->all();
        $checkUser = User::where([
            'email'    => $attributes['email'],
            'password' => $attributes['password'],
        ])->first();
        if (isset($checkUser)) {
            Session::put('admin_name', $checkUser->name);
            Session::put('admin_id', $checkUser->id);
            return redirect()->route('admin.dashboard');
        } else {
            Session::put('message', ERROR_ACCOUT);
            return redirect()->route('admin.home');
        }
    }

    public function logout()
    {
        $this->Auth();
        Session::put('admin_name', null);
        Session::put('admin_id', null);

        return redirect()->route('admin.home');
    }
}

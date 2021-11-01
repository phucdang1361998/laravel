<?php

namespace App\Http\Controllers;

use App\Models\About;

class AboutController extends Controller
{

    public function index()
    {
        $about = About::all();
        return view('clients.about.index', ['about' => $about]);
    }

    public function show($id)
    {

    }
}

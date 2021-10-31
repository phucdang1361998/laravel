<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class AboutController extends Controller
{

    public function index()
    {
        return view('clients.about.index');
    }

    public function show($id)
    {

    }
}

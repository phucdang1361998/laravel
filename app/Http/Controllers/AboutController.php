<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Slider;

class AboutController extends Controller
{

    public function index()
    {
        $about = About::all();
        $slider = Slider::where('page', 'about')->get();
        return view('clients.about.index', [
            'about'  => $about,
            'slider' => $slider
        ]);
    }

    public function show($id)
    {

    }
}

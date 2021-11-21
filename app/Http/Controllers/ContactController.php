<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index(Request $request)
    {
        $slider = Slider::where('page', 'contact')->get();
        return view('clients.contact.index', [
            'slider' => $slider,
            'message'  => isset($request->all()['message']) ? $request->all()['message'] : ''
        ]);
    }

    public function show($id)
    {

    }
}

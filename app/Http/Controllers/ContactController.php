<?php

namespace App\Http\Controllers;

class ContactController extends Controller
{

    public function index()
    {
        return view('clients.contact.index');
    }

    public function show($id)
    {

    }
}

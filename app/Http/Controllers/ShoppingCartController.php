<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{

    public function index()
    {
        return view('clients.shopping-cart.index');
    }

    public function show($id)
    {

    }
}

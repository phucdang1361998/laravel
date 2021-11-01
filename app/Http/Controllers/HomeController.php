<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;

class HomeController extends Controller
{

    public function index()
    {
        $category = Category::all();

        $product = Product::all();

        $slider = Slider::all();

        return view('clients.index', [
            'category' => $category,
            'product'  => $product,
            'slider'   => $slider,
        ]);
    }
}

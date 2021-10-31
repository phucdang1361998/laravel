<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $category = Category::all()->toArray();

        $product = Product::all()->toArray();

        $slider = Slider::all()->toArray();

        return view('clients.index', [
            'category' => $category,
            'product'  => $product,
            'slider'   => $slider,
        ]);
    }
}

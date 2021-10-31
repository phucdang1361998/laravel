<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $category = Category::all()->toArray();

        $product = Product::all()->toArray();

        return view('clients.product.index', [
            'category' => $category,
            'product'  => $product,
        ]);
    }

    public function show($id)
    {
        $product = Product::where('id', $id)->first();
        $category = Category::all()->toArray();
        return view('clients.product.detail', [
            'product'  => $product,
            'category' => $category
        ]);
    }
}

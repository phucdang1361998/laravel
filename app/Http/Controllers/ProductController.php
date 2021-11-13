<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index(Request $request)
    {
        $attributes = $request->all();
        $category = Category::all();

        $product = Product::query();
        if (!empty($attributes)) {
            if (isset($attributes['name'])) {
                $product->where('name', 'like', '%' . $attributes['name'] . '%');
            }

            if (isset($attributes['from_price']) && isset($attributes['to_price'])) {
                $product->where([
                    ['price', '>=', $attributes['from_price']],
                    ['price', '<=', $attributes['to_price']]
                ]);
            }

            if (isset($attributes['sort'])) {
                foreach ($attributes['sort'] as $key => $value) {
                    $product->orderBy($key, $value);
                }
            }
        }

        return view('clients.product.index', [
            'category' => $category,
            'product'  => $product->get(),
        ]);
    }

    public function show($id)
    {
        $product = Product::where('id', $id)->first();
        $relative = Product::where([
            'product_type_id' => $product['product_type_id'],
            ['id', '<>', $id]
        ])->get();
        $category = Category::all()->toArray();
        return view('clients.product.detail', [
            'product'  => $product,
            'category' => $category,
            'relative' => $relative
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\PaymentMethod;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ShoppingCartController extends Controller
{
    public function index()
    {
        $slider = Slider::where('page', 'shopping-cart')->first();

        return view('clients.shopping-cart.index', ['slider' => $slider]);
    }

    public function checkout(Request $request)
    {
        $payment = PaymentMethod::all();
        return view('clients.checkout.index', [
            'payment' => $payment,
            'message' => isset($request->all()['message']) ? $request->all()['message'] : ''
        ]);
    }

    public function insert(Request $request)
    {
        $attributes = $request->all();
        $slider = Slider::where('page', 'shopping-cart')->first();
        $product = Product::where('id', $attributes['id'])->first();
        if (isset($attributes['delete'])) {
            $current = Session::get('cart');
            $filter = array_filter($current, function ($q) use ($product) {
                return $q['id'] != $product['id'];
            });
            Session::put('cart', $filter);
        } else {
            Session::push('cart', $product);
        }

        return view('clients.shopping-cart.index', ['slider' => $slider]);
    }
}

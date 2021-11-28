<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\PaymentMethod;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Session;

class ShoppingCartController extends Controller
{
    public function index(Request $request)
    {
        $slider = Slider::where('page', 'shopping-cart')->first();

        return view('clients.shopping-cart.index', [
            'slider'  => $slider,
            'message' => $request->all()['message'] ?? ''
        ]);
    }

    public function checkout(Request $request)
    {
        $payment = PaymentMethod::all();
        $session = Session::get('cart');

        if (!isset($session)) {
            return redirect()->route('clients.shopping-cart.index', [
                'message' => 'Bạn chưa có sản phẩm trong giỏ hàng'
            ]);
        }

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
        $session = Session::get('cart');

        if (isset($session)) {
            if (isset($attributes['delete'])) {
                $filter = array_filter($session, function ($q) use ($product) {
                    return $q['id'] != $product['id'];
                });
                Session::put('cart', $filter);
            } else {
                if (in_array($product['id'], Arr::pluck($session, 'id'))) {
                    foreach ($session as $detail) {
                        if ($detail['id'] == $product['id']) {
                            $detail['quantity'] = $detail['quantity'] + 1;
                        }
                    }
                } else {
                    $product['quantity'] = 1;
                    Session::push('cart', $product);
                }
            }
        } else {
            $product['quantity'] = 1;
            Session::push('cart', $product);
        }


        return view('clients.shopping-cart.index', ['slider' => $slider]);
    }
}

<?php

namespace App\Http\Controllers\admin;

use App\Blog;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrderStatus;
use App\Models\PaymentMethod;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class OrderAdminController extends Controller
{
    protected $model;

    public function __construct()
    {
        $this->model = new Order();
    }

    public function validator(array $attributes)
    {
        $fields = [
            'customer_name'    => 'required',
            'customer_phone'   => 'required',
            'customer_address' => 'required',
            'payment_method'   => 'required',
        ];

        $messages = [
            'customer_name.required'    => 'Tên khách hàng không được để trống',
            'customer_phone.required'   => 'Số điện thoại không được để trống',
            'customer_address.required' => 'Địa chỉ không được để trống',
            'payment_method.required'   => 'Bạn chưa chọn phương thức thanh toán',
        ];

        return $validator = Validator::make($attributes, $fields, $messages);
    }

    public function Auth()
    {
        $admin = Session::get('admin_id');
        if ($admin) {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->route('admin.home')->send();
        }
    }

    public function index()
    {
        $this->Auth();
        $order = $this->model->select('*')->orderBy('id', 'DESC')->paginate(15);

        return view('admin.orders.index', [
            'orders' => $order,
        ]);
    }

    public function store(Request $request)
    {
        $this->Auth();
        $attributes = $request->all();

        $orderDetail = Session::get('cart');

        $attributes['order_status'] = 1;

        $attributes['order_num'] = $this->generateCode();

        $validate = $this->validator($attributes);
        if ($validate->fails()) {
            return redirect()->route('clients.checkout.index', ['message' => $validate->errors()->all()]);
        }

        try {
            DB::beginTransaction();
            $param = [
                'customer_name'    => $attributes['customer_name'],
                'order_num'        => $attributes['order_num'],
                'customer_phone'   => $attributes['customer_phone'],
                'customer_address' => $attributes['customer_address'],
                'description'      => $attributes['description'],
                'payment_id'       => $attributes['payment_method'],
                'order_status'     => $attributes['order_status'],
                'order_total'      => $attributes['total'],
            ];

            $model = $this->model->create($param);

            foreach ($orderDetail as $detail) {

                $paramDtl [] = [
                    'product_id'       => $detail['id'],
                    'product_name'     => $detail['name'],
                    'product_price'    => $detail['price'],
                    'product_quantity' => 1,
                    'total_price'      => $detail['price'] * 1,
                    'product_image'    => $detail['image'],
                ];
            }

            $model->detail()->createMany($paramDtl);


            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('clients.checkout.index', [
                'message' => [ERROR],
            ]);
        }

        return redirect()->route('clients.checkout.index', ['message' => 'Bạn đã đặt hành thành công']);
    }

    public function generateCode()
    {
        return 'ORDER_NUMBER_' . (count($this->model->get()) + 1);
    }

    public function edit(Request $request, $id)
    {
        $this->Auth();
        $order = $this->model->find($id);
        $payment = PaymentMethod::all();
        $orderStatus = OrderStatus::all();
        return view('admin.orders.update', [
            'order'   => $order,
            'status'  => $orderStatus,
            'payment' => $payment,
            'message' => isset($request->all()['message']) ? $request->all()['message'] : ''
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->Auth();
        $attributes = $request->all();
        $attributes['order_total'] = str_replace(',', '', $attributes['order_total']);
        $order = $this->model->find($id);

        $validate = $this->validator($attributes);
        if ($validate->fails()) {
            return redirect()->route('admin.orders.update', ['message' => $validate->errors()->all()]);
        }

        try {
            DB::beginTransaction();
            $param = [
                'customer_name'    => $attributes['customer_name'],
                'customer_phone'   => $attributes['customer_phone'],
                'customer_address' => $attributes['customer_address'],
                'order_status'     => $attributes['order_status'],
                'order_total'      => $attributes['order_total'],
                'description'      => $attributes['description'],
                'payment_id'       => $attributes['payment_method'],
            ];

            $order->update($param);

            DB::commit();
        } catch (\Exception $e) {
            dd($e);
            DB::rollBack();
            return redirect()->route('admin.orders.edit', [
                'message' => ERROR,
                'order'   => $order
            ]);
        }

        return redirect()->route('admin.orders.index');
    }

    public function delete($id)
    {
        $this->Auth();
        $this->model->find($id)->update([
            'order_status' => 5
        ]);

        return redirect()->route('admin.orders.index');
    }
}

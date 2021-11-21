<?php

namespace App\Http\Controllers\admin;

use App\Blog;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ProductAdminController extends Controller
{
    protected $model;

    public function __construct()
    {
        $this->model = new Product();
    }

    public function validator(array $attributes)
    {
        $fields = [
            'name'            => 'required',
            'code'            => 'required',
            'product_type_id' => 'required',
            'price'           => 'required',
            'sale_off'        => 'nullable',
            'price_sale'      => 'nullable',
            'description'     => 'nullable',
        ];

        $messages = [
            'name.required'            => 'Tên sản phẩm không được để trống',
            'code.required'            => 'Mã sản phẩm không được để trống',
            'product_type_id.required' => 'Loại sản phẩm không được để trống',
            'price.required'           => 'Giá không được để trống',
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
        $product = $this->model->select('*')->orderBy('id', 'DESC')->paginate(10);

        return view('admin.product.index', [
            'product' => $product,
        ]);
    }


    public function create(Request $request)
    {
        $this->Auth();
        $category = Category::all();

        return view('admin.product.create', [
            'category' => $category,
            'message'  => isset($request->all()['message']) ? $request->all()['message'] : ''
        ]);
    }

    public function store(Request $request)
    {
        $this->Auth();
        $attributes = $request->all();

        $validate = $this->validator($attributes);
        if ($validate->fails()) {

            return redirect()->route('admin.product.create', ['message' => $validate->errors()->all()]);
        }

        try {
            DB::beginTransaction();
            $param = [
                'name'            => $attributes['name'],
                'code'            => $attributes['code'],
                'product_type_id' => $attributes['product_type_id'],
                'price'           => $attributes['price'],
                'sale_off'        => $attributes['sale_off'],
                'price_sale'      => $attributes['price_sale'],
                'description'     => $attributes['description'],
            ];

            $model = $this->model->create($param);

            if ($request->file('image')) {
                $file = $request->image;

                $fileName = $file->getClientOriginalName();
                $destination = public_path(Product::IMAGE_PATH);
                $file->move($destination, $fileName);

                $model->image = Product::IMAGE_PATH . $fileName;
                $model->save();
            }
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('admin.product.create', [
                'message' => ERROR,
            ]);
        }

        return redirect()->route('admin.product.index');
    }

    public function edit(Request $request, $id)
    {
        $this->Auth();
        $product = $this->model->find($id);
        $category = Category::all();
        return view('admin.product.update', [
            'product'  => $product,
            'category' => $category,
            'message'  => isset($request->all()['message']) ? $request->all()['message'] : ''
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->Auth();
        $attributes = $request->all();
        $attributes['price'] = str_replace(',', '', $attributes['price']);
        $product = $this->model->find($id);

        $validate = $this->validator($attributes);
        if ($validate->fails()) {
            return redirect()->route('admin.product.update', ['message' => $validate->errors()->all()]);
        }

        try {
            DB::beginTransaction();
            $param = [
                'name'            => $attributes['name'],
                'code'            => $attributes['code'],
                'product_type_id' => $attributes['product_type_id'],
                'price'           => $attributes['price'],
                'sale_off'        => $attributes['sale_off'],
                'price_sale'      => $attributes['price_sale'],
                'description'     => $attributes['description'],
            ];

            $product->update($param);

            if ($request->file('image')) {
                $file = $request->image;

                $fileName = $file->getClientOriginalName();
                $destination = public_path(Product::IMAGE_PATH);
                if ($product['image']) {
                    File::delete(public_path($product['image']));
                }

                $file->move($destination, $fileName);

                $product->image = Product::IMAGE_PATH . $fileName;
                $product->save();
            }
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('admin.product.edit', [
                'message' => ERROR,
                'id'      => $id
            ]);
        }

        return redirect()->route('admin.product.index', ['name' => $attributes['name']]);
    }

    public function delete($id)
    {
        $this->Auth();
        $product = $this->model->find($id);
        File::delete(public_path($product['image']));
        $product->delete();

        return redirect()->route('admin.product.index');
    }
}

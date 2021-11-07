<?php

namespace App\Http\Controllers\admin;

use App\Blog;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Symfony\Component\Console\Input\Input;

class ProductAdminController extends Controller
{
    protected $model;

    public function __construct()
    {
        $this->model = new Product();
    }

    public function index(Request $request)
    {
        $product = $this->model->select('*')->paginate(15);

        return view('admin.product.index', [
            'product' => $product,
            'name'    => $request->all()['name']
        ]);
    }


    public function create(Request $request)
    {
        $category = Category::all();

        return view('admin.product.create', [
            'name'     => $request->all()['name'],
            'category' => $category,
            'message'  => isset($request->all()['message']) ? $request->all()['message'] : ''
        ]);
    }

    public function store(Request $request)
    {
        $attributes = $request->all();

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
                'name'    => 'phuc',
            ]);
        }

        return redirect()->route('admin.product.index', ['name' => $attributes['name']]);
    }

    public function edit(Request $request, $id)
    {
        $product = $this->model->find($id);
        $category = Category::all();
        return view('admin.product.update', [
            'product'  => $product,
            'name'     => 'phuc',
            'category' => $category,
            'message'  => isset($request->all()['message']) ? $request->all()['message'] : ''
        ]);
    }

    public function update(Request $request, $id)
    {
        $attributes = $request->all();
        $attributes['price'] = str_replace(',', '', $attributes['price']);
        $product = $this->model->find($id);

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
            return redirect()->route('admin.product.edit', [
                'message' => ERROR,
                'name'    => 'phuc',
                'id'      => $id
            ]);
            DB::rollBack();
        }

        return redirect()->route('admin.product.index', ['name' => $attributes['name']]);
    }

    public function delete($id)
    {
        $product = $this->model->find($id);
        File::delete(public_path($product['image']));
        $product->delete();

        return redirect()->route('admin.product.index');
    }
}

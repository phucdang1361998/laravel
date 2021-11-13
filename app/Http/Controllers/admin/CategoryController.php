<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    protected $model;

    public function __construct()
    {
        $this->model = new Category();
    }

    public function validator(array $attributes)
    {
        $fields = [
            'name' => 'required',
            'code' => 'required',
        ];

        $messages = [
            'name.required' => 'Tên loại sản phẩm không được để trống',
            'code.required' => 'Mã loại sản phẩm không được để trống',
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

    public function index(Request $request)
    {
        $this->Auth();
        $category = Category::select('*')->orderBy('id', 'DESC')->get();
        return view('admin.category.index', [
            'category' => $category,
        ]);
    }


    public function create(Request $request)
    {
        $this->Auth();
        return view('admin.category.create', [
            'message' => isset($request->all()['message']) ? $request->all()['message'] : ''
        ]);
    }

    public function store(Request $request)
    {
        $this->Auth();
        $attributes = $request->all();

        $validate = $this->validator($attributes);
        if ($validate->fails()) {
            return redirect()->route('admin.category.create', ['message' => $validate->errors()->all()]);
        }

        try {
            DB::beginTransaction();
            $param = [
                'code' => $attributes['code'],
            ];

            $this->model->create($param);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('admin.category.create', [
                'message' => ERROR,
            ]);
        }

        return redirect()->route('admin.category.index');
    }

    public function edit(Request $request, $id)
    {
        $this->Auth();
        $category = $this->model->find($id);

        $validate = $this->validator($request->all());
        if ($validate->fails()) {
            return redirect()->route('admin.category.update', ['message' => $validate->errors()->all()]);
        }

        return view('admin.category.update', [
            'category' => $category,
            'message'  => isset($request->all()['message']) ? $request->all()['message'] : ''
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->Auth();
        $attributes = $request->all();

        $category = $this->model->find($id);
        try {
            DB::beginTransaction();
            $param = [
                'name' => $attributes['name'],
                'code' => $attributes['code'],
            ];

            $category->update($param);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('admin.category.edit', [
                'message' => ERROR,
                'id'      => $id
            ]);
        }

        return redirect()->route('admin.category.index', ['name' => 'phuc']);
    }

    public function destroy($id)
    {
        $this->Auth();
        $category = $this->model->find($id);
        $category->delete();
    }
}

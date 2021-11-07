<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    protected $model;

    public function __construct()
    {
        $this->model = new Category();
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
        $category = Category::select('*')->get();
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

<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    protected $model;

    public function __construct()
    {
        $this->model = new Category();
    }

    public function index(Request $request)
    {
        $category = Category::select('*')->get();
        return view('admin.category.index', [
            'category' => $category,
            'name'     => $request->all()['name']
        ]);
    }


    public function create(Request $request)
    {
        return view('admin.category.create', [
            'message' => isset($request->all()['message']) ? $request->all()['message'] : ''
        ]);
    }

    public function store(Request $request)
    {
        $attributes = $request->all();
        try {
            DB::beginTransaction();
            $param = [
                'name' => $attributes['name'],
                'code' => $attributes['code'],
            ];

            $this->model->create($param);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('admin.category.create', [
                'message' => ERROR,
                'name'    => 'phuc'
            ]);
        }

        return redirect()->route('admin.category.index');
    }

    public function edit(Request $request, $id)
    {
        $category = $this->model->find($id);
        return view('admin.category.update', [
            'category' => $category,
            'name'     => 'phuc',
            'message'  => isset($request->all()['message']) ? $request->all()['message'] : ''
        ]);
    }

    public function update(Request $request, $id)
    {
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
                'name'    => 'phuc',
                'id'      => $id
            ]);
        }

        return redirect()->route('admin.category.index', ['name' => 'phuc']);
    }

    public function destroy($id)
    {
        $category = $this->model->find($id);
        $category->delete();
    }
}

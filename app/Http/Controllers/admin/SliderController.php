<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class SliderController extends Controller
{
    protected $model;

    public function __construct()
    {
        $this->model = new Slider();
    }

    public function validator(array $attributes)
    {
        $fields = [
            'title1' => 'required',
            'title2' => 'required',
        ];

        $messages = [
            'title1.required' => 'Tên loại sản phẩm không được để trống',
            'title2.required' => 'Mã loại sản phẩm không được để trống',
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
        $slider = Slider::select('*')->orderBy('id', 'DESC')->get();
        return view('admin.slider.index', [
            'slider' => $slider,
        ]);
    }


    public function create(Request $request)
    {
        $this->Auth();
        return view('admin.slider.create', [
            'message' => isset($request->all()['message']) ? $request->all()['message'] : ''
        ]);
    }

    public function store(Request $request)
    {
        $this->Auth();
        $attributes = $request->all();

        $validate = $this->validator($attributes);
        if ($validate->fails()) {
            return redirect()->route('admin.slider.create', ['message' => $validate->errors()->all()]);
        }

        try {
            DB::beginTransaction();
            $param = [
                'title1' => $attributes['title1'],
                'title2' => $attributes['title2'],
                'page'   => $attributes['page'],
            ];

            $model = $this->model->create($param);

            if ($request->file('image')) {
                $file = $request->image;

                $fileName = $file->getClientOriginalName();
                $destination = public_path(Slider::IMAGE_PATH);
                $file->move($destination, $fileName);

                $model->image = Slider::IMAGE_PATH . $fileName;
                $model->save();
            }
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('admin.slider.create', [
                'message' => ERROR,
            ]);
        }

        return redirect()->route('admin.slider.index');
    }

    public function edit(Request $request, $id)
    {
        $this->Auth();
        $slider = $this->model->find($id);

        return view('admin.slider.update', [
            'slider'  => $slider,
            'message' => isset($request->all()['message']) ? $request->all()['message'] : ''
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->Auth();
        $attributes = $request->all();

        $slider = $this->model->find($id);
        try {
            DB::beginTransaction();
            $param = [
                'title1' => $attributes['title1'],
                'title2' => $attributes['title2'],
                'page'   => $attributes['page'],
            ];

            $slider->update($param);

            if ($request->file('image')) {
                $file = $request->image;

                $fileName = $file->getClientOriginalName();
                $destination = public_path(Slider::IMAGE_PATH);
                if ($slider['image']) {
                    File::delete(public_path($slider['image']));
                }

                $file->move($destination, $fileName);

                $slider->image = Slider::IMAGE_PATH . $fileName;
                $slider->save();
            }
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('admin.slider.edit', [
                'message' => ERROR,
                'id'      => $id
            ]);
        }

        return redirect()->route('admin.slider.index');
    }

    public function destroy($id)
    {
        $this->Auth();
        $category = $this->model->find($id);
        $category->delete();
    }
}

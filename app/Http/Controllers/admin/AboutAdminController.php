<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class AboutAdminController extends Controller
{
    protected $model;

    public function __construct()
    {
        $this->model = new About();
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
        $about = About::select('*')->get();
        return view('admin.about.index', [
            'about' => $about,
        ]);
    }


    public function create(Request $request)
    {
        $this->Auth();
        return view('admin.about.create', [
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
                'title'       => $attributes['title'],
                'description' => $attributes['description'],
            ];

            $about = $this->model->create($param);

            if ($request->file('image')) {
                $file = $request->image;

                $fileName = $file->getClientOriginalName();
                $destination = public_path(About::IMAGE_PATH);

                $file->move($destination, $fileName);

                $about->image = About::IMAGE_PATH . $fileName;
                $about->save();
            }

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('admin.about.create', [
                'message' => ERROR,
            ]);
        }

        return redirect()->route('admin.about.index');
    }

    public function edit(Request $request, $id)
    {
        $this->Auth();
        $about = $this->model->find($id);
        return view('admin.about.update', [
            'about'   => $about,
            'message' => isset($request->all()['message']) ? $request->all()['message'] : ''
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->Auth();
        $attributes = $request->all();

        $about = $this->model->find($id);

        try {
            DB::beginTransaction();

            $param = [
                'title'       => $attributes['title'],
                'description' => $attributes['description'],
            ];

            $about->update($param);

            if ($request->file('image')) {
                $file = $request->image;

                $fileName = $file->getClientOriginalName();
                $destination = public_path(About::IMAGE_PATH);
                if ($about['image']) {
                    File::delete(public_path($about['image']));
                }

                $file->move($destination, $fileName);

                $about->image = About::IMAGE_PATH . $fileName;
                $about->save();
            }

            DB::commit();
        } catch (\Exception $e) {
            dd($e);
            DB::rollBack();
            return redirect()->route('admin.about.edit', [
                'message' => ERROR,
                'id'      => $id
            ]);
        }

        return redirect()->route('admin.about.index');
    }

    public function destroy($id)
    {
        $this->Auth();
        //
    }
}

<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class AboutAdminController extends Controller
{
    protected $model;

    public function __construct()
    {
        $this->model = new About();
    }

    public function index(Request $request)
    {
        $about = About::select('*')->get();
        return view('admin.about.index', [
            'about' => $about,
            'name'  => $request->all()['name']
        ]);
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function edit(Request $request, $id)
    {
        $about = $this->model->find($id);
        return view('admin.about.update', [
            'about'   => $about,
            'name'    => 'phuc',
            'message' => isset($request->all()['message']) ? $request->all()['message'] : ''
        ]);
    }

    public function update(Request $request, $id)
    {
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
            DB::rollBack();
            return redirect()->route('admin.about.edit', [
                'message' => ERROR,
                'name'    => 'phuc',
                'id'      => $id
            ]);
        }

        return redirect()->route('admin.about.index', ['name' => 'phuc']);
    }

    public function destroy($id)
    {
        //
    }
}

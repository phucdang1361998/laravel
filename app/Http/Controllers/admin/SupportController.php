<?php

namespace App\Http\Controllers\admin;

use App\Models\About;
use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Models\Support;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SupportController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = new Support();
    }

    public function index()
    {
        $support = $this->model->paginate(15);

        return view('admin.support.index', [
            'support'  => $support,
        ]);
    }

    public function store(Request $request)
    {
        $attribute = $request->all();

        try {
            DB::beginTransaction();

            $param = [
                'name'        => $attribute['name'],
                'phone'       => $attribute['phone'],
                'email'       => $attribute['email'],
                'description' => $attribute['description'],
            ];

            $this->model->create($param);

            DB::commit();
        } catch (\Exception $e) {
            dd($e);
            DB::rollBack();
            return redirect()->route('clients.contact.index', [
                'message' => [ERROR],
            ]);
        }

        return redirect()->route('clients.contact.index');
    }
}

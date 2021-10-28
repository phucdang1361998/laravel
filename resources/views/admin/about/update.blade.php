@extends('admin.layouts.master')

@section('main')

<div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <form action="{{route('admin.about.update', $model->id)}}" method="post"  enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="card-header py-3" style="display: flex; padding-top: 10px !important; padding-bottom: 10px !important;">
                <div class="col-sm-12 col-md-6">
                    <h6 class="m-0 font-weight-bold text-primary">Cập nhật giới thiệu</h6>
                </div>
                <div class="col-sm-12 col-md-6 dataTables_filter" style="text-align: right;">
                    <button type="submit" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Lưu</button>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="form-group col-sm-4">
                                @include('admin.forms.select', ['label' => 'Ngôn ngữ', 'name' => 'language', 'data' => \App\Language::returnLanguage(), 'value' => $model->language])
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-6">
                                @include('admin.forms.text', ['label' => 'Tiêu đề', 'name' => 'title', 'value' => $model->title])
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-12">
                                @include('admin.forms.textarea', ['label' => 'Miêu tả', 'name' => 'des', 'value' => $model->des])
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-12">
                                @include('admin.forms.textarea', ['label' => 'Nội dung', 'name' => 'content', 'class' => 'form-control ckeditor', 'value' => $model->content])
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-12">
                                @include('admin.forms.text', ['label' => 'Địa chỉ 1', 'name' => 'addr_1', 'value' => $model->addr_1])
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-12">
                                @include('admin.forms.text', ['label' => 'Địa chỉ 2', 'name' => 'addr_2', 'value' => $model->addr_2])
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label>Ảnh đại diện</label>
                                <input type="file" name="img">
                                <img src="{{asset(\App\About::IMAGE_PATH . '/' . $model->img)}}" style="width: 100px; border: 1px solid">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-12">
                                @include('admin.forms.text', ['label' => 'Text 1', 'name' => 'free_text_1', 'value' => $model->free_text_1])
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-12">
                                @include('admin.forms.text', ['label' => 'Text 2', 'name' => 'free_text_2', 'value' => $model->free_text_2])
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-12">
                                @include('admin.forms.text', ['label' => 'Text 3', 'name' => 'free_text_3', 'value' => $model->free_text_3])
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-12">
                                @include('admin.forms.text', ['label' => 'Text 4', 'name' => 'free_text_4', 'value' => $model->free_text_4])
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-12">
                                @include('admin.forms.text', ['label' => 'Text 4', 'name' => 'free_text_5', 'value' => $model->free_text_5])
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection


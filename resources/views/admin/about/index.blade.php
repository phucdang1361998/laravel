@extends('admin.layouts.master')

@section('main')

<div>
    <div class="card shadow mb-4">
        <div class="card-header py-3" style="display: flex; padding-top: 10px !important; padding-bottom: 10px !important;">
            <div class="col-sm-12 col-md-6" style="padding-top: 7px;">
                <h6 class="m-0 font-weight-bold text-primary">Danh Sách Giới thiệu</h6>
            </div>
            {{--<div class="col-sm-12 col-md-6 dataTables_filter" style="text-align: right;">
                <a class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" href="{{route('admin.category.create-view')}}">Thêm Mới</a>
            </div>--}}
        </div>
        <div class="card-body table-responsive">
            <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                            <thead>
                                <tr role="row">
                                    <th style="width: 70px;">Ngôn ngữ</th>
                                    <th style="width: 20px;">Tiêu đề</th>
                                    <th style="width: 150px;">Miêu tả</th>
                                    <th style="width: 100px;">Địa chỉ 1</th>
                                    <th style="width: 100px;">Địa chỉ 2</th>
                                    <th style="width: 50px;">Text 1</th>
                                    <th style="width: 50px;">Text 2</th>
                                    <th style="width: 50px;">Text 3</th>
                                    <th style="width: 50px;">Text 4</th>
                                    <th style="width: 50px;">Text 5</th>
                                    <th style="width: 120px;">Cập nhật lần cuối</th>
                                    <th style="width: 80px;">Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pagination as $item)
                                    <tr>
                                        <td>{{$item->title}}</td>
                                        <td>{{$item->des}}</td>
                                        <td>{{$item->addr_1}}</td>
                                        <td>{{$item->addr_2}}</td>
                                        <td>{{$item->free_text_1}}</td>
                                        <td>{{$item->free_text_2}}</td>
                                        <td>{{$item->free_text_3}}</td>
                                        <td>{{$item->free_text_4}}</td>
                                        <td>{{$item->free_text_5}}</td>
                                        <td>{{$item->updated_at}}</td>
                                        <td style="text-align: center">
                                            @include('admin.forms.btn-edit', ['route' => 'admin.about.update-view', 'id' => $item->id])
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="row">{{ $pagination->links('vendor.pagination.default') }}</div>
            </div>
        </div>
    </div>
</div>
@endsection


@extends('admin.index')

@section('content')
    <section class="wrapper">
        <div class="table-agile-info">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Quản lý loại sản phẩm
                </div>
                <div>
                    <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
                        <thead>
                        <tr>
                            <th data-breakpoints="xs">ID</th>
                            <th>Tên loại sản phẩm</th>
                            <th>Mã loại sản phẩm</th>
                            <th>Hành động</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($category as $key => $detail)
                            <tr data-expanded="true">
                                <td>{{$key + 1}}</td>
                                <td>{{$detail['name']}}</td>
                                <td>{{$detail['code']}}</td>
                                <td>
                                    @include('admin.forms.btn-edit', ['route' => 'admin.category.edit', 'id' => $detail->id])
                                    @include('admin.forms.btn-delete', ['route' => 'admin.category.delete', 'id' => $detail->id])
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection

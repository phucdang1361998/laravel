@extends('admin.index')

@section('content')
    <section class="wrapper">
        <div class="table-agile-info">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Giới thiệu
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
                            <th>Tiêu đề</th>
                            <th>Hình ảnh</th>
                            <th>Nội dung</th>
                            <th>Hành động</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($about as $key => $detail)
                            <tr data-expanded="true">
                                <td>{{$key + 1}}</td>
                                <td>{{$detail['title']}}</td>
                                <td><img src="{{asset($detail['image'])}}" style="width: 100px; border: 1px solid"></td>
                                <td>{{$detail['description']}}</td>
                                <td>
                                    @include('admin.forms.btn-edit', ['route' => 'admin.about.edit', 'id' => $detail->id])
                                    @include('admin.forms.btn-delete', ['route' => 'admin.about.delete', 'id' => $detail->id])
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

@extends('admin.index')

@section('content')
    <section class="wrapper">
        <div class="table-agile-info">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Quản lý sản phẩm
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
                            <th>Tên sản phẩm</th>
                            <th>Mã sản phẩm</th>
                            <th>Loại sản phẩm</th>
                            <th>Giá</th>
                            <th>Hình ảnh</th>
                            <th>Giảm giá</th>
                            <th>Giá giảm</th>
                            <th>Mô tả</th>
                            <th>Hành động</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($product as $key => $detail)
                            <tr data-expanded="true">
                                <td>{{$detail['name']}}</td>
                                <td>{{$detail['code']}}</td>
                                <td>{{$detail->type->name}}</td>
                                <td>{{number_format($detail['price'])}}</td>
                                <td><img src="{{asset($detail['image'])}}" style="width: 100px; border: 1px solid"></td>
                                <td>{{$detail['sale_off'] == 0 ? 'không' : 'có'}}</td>
                                <td>{{$detail['price_sale'] ? number_format($detail['price_sale']) : null}}</td>
                                <td>{{$detail['description']}}</td>
                                <td>
                                    @include('admin.forms.btn-edit', ['route' => 'admin.product.edit', 'id' => $detail->id])
                                    @include('admin.forms.btn-delete', ['route' => 'admin.product.delete', 'id' => $detail->id])
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row">{{ $product->links('vendor.pagination.default',['name' => $name]) }}</div>
            </div>
        </div>
    </section>
@endsection
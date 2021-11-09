@extends('admin.index')

@section('content')
    <section id="wrapper">
        <div class="main-content">
            <div class="row small-spacing">
                <div class="col-xs-12">
                    <div class="box-content">
                        <h4 class="box-title">Sản phẩm</h4>
                        <!-- /.box-title -->
                        <div class="dropdown js__drop_down">
                            <a href="#"
                               class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
                            <ul class="sub-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else there</a></li>
                                <li class="split"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                            <!-- /.sub-menu -->
                        </div>
                        <!-- /.dropdown js__dropdown -->
                        <table id="example" class="table table-striped table-bordered display" style="width:100%">
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
                            @foreach($product as $detail)
                                <tr>
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
                                        <a onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này không?')"
                                           style="color: #ea4335"
                                           href="{{route('admin.product.delete',['id' => $detail->id])}}"><i
                                                class="fas fa-fw fa-trash"></i></a>
                                        <a onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này không?')"
                                           style="color: #ea4335"
                                           href="{{route('admin.product.create',['id' => $detail->id])}}"><i
                                                class="fas fa-fw fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">{{ $product->links('vendor.pagination.default') }}</div>
                </div>
            </div>
        </div>
    </section>
@endsection

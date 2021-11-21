@extends('admin.index')

@section('content')
    <section id="wrapper">
        <div class="main-content">
            <div class="row small-spacing">
                <div class="col-xs-12">
                    <div class="box-content">
                        <h4 class="box-title">Danh sách đơn hàng</h4>
                        <!-- /.box-title -->
{{--                        <div class="dropdown js__drop_down">--}}
{{--                            <button type="button" class="btn btn-primary waves-effect waves-light">--}}
{{--                                <a style="color: white" href="{{route('admin.orders.create')}}">Tạo mới</a>--}}
{{--                            </button>--}}
{{--                            <!-- /.sub-menu -->--}}
{{--                        </div>--}}
                        <!-- /.dropdown js__dropdown -->
                        <table id="example" class="table table-striped table-bordered display" style="width:100%">
                            <thead>
                            <tr>
                                <th>Mã đơn hàng</th>
                                <th>Tên khách hàng</th>
                                <th>Khách hàng</th>
                                <th>Tổng tiền đơn</th>
                                <th>Trạng thái</th>
                                <th>Hành động</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $detail)
                                <tr>
                                    <td>{{$detail['order_num']}}</td>
                                    <td>{{$detail['customer_name']}}</td>
                                    <td>{{$detail['customer_id'] ? 'Thành viên' : 'Khách'}}</td>
                                    <td>{{number_format($detail['order_total'])}}</td>
                                    <td>
                                        {{$detail->status->name}}
                                    </td>
                                    <td>
                                        @include('admin.forms.btn-edit', ['route' => 'admin.orders.edit', 'id' => $detail->id])
                                        <a onclick="return confirm('Bạn có chắc muốn hủy đơn hàng này không?')"
                                           style="color: #ea4335"
                                           href="{{route('admin.orders.delete',['id' => $detail->id])}}"><i
                                                class="fas fa-fw fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">{{ $orders->links('vendor.pagination.default') }}</div>
                </div>
            </div>
        </div>
    </section>
@endsection

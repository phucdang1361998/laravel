@extends('admin.index')

@section('content')
    <section id="wrapper">
        <div class="main-content">
            <div class="row small-spacing">
                <div class="col-lg-6 col-xs-12">
                    <div class="box-content card white">
                        <h4 class="box-title">Thông tin đơn hàng</h4>
                        <!-- /.box-title -->
                        <div class="card-content">
                            <form method="post" action="{{route('admin.orders.update',['id' => $order['id']])}}"
                                  enctype="multipart/form-data">
                                @csrf
                                @if($message)
                                    @if(is_array($message))
                                        @foreach($message as $detailMes)
                                            <p style="color: red">{{$detailMes}}</p>
                                        @endforeach
                                    @else
                                        <p style="color: red">{{$message}}</p>
                                    @endif
                                @endif
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mã đơn hàng</label>
                                    <input type="text" class="form-control" disabled
                                           value="{{$order['order_num']}}">
                                </div>
                                @if($order['customer_id'])
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Tên khách hàng</label>
                                        <span style="color: red">(*)</span>
                                        <input type="text" class="form-control" name="customer_name" disabled
                                               value="{{$order['customer_name']}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Số điện thoại</label>
                                        <span style="color: red">(*)</span>
                                        <input type="text" class="form-control" name="customer_name" disabled
                                               value="{{$order['customer_phone']}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Địa chỉ</label>
                                        <span style="color: red">(*)</span>
                                        <input type="text" class="form-control" name="customer_name" disabled
                                               value="{{$order['customer_address']}}">
                                    </div>
                                @else
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Tên khách hàng</label>
                                        <span style="color: red">(*)</span>
                                        <input type="text" class="form-control" name="customer_name"
                                               value="{{$order['customer_name']}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Số điện thoại</label>
                                        <span style="color: red">(*)</span>
                                        <input type="text" class="form-control" name="customer_phone"
                                               value="{{$order['customer_phone']}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Địa chỉ</label>
                                        <span style="color: red">(*)</span>
                                        <input type="text" class="form-control" name="customer_address"
                                               value="{{$order['customer_address']}}">
                                    </div>
                                @endif
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Khách hàng</label>
                                    <input type="text" class="form-control" disabled
                                           value="{{$order->status->name}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Tổng tiền đơn</label>
                                    <input type="text" class="form-control" name="order_total"
                                           value="{{number_format($order['order_total'])}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Phương thức thanh toán</label>
                                    <span style="color: red">(*)</span>
                                    <select class="form-control input-sm m-bot15" name="payment_method">
                                        @foreach($payment as $detail)
                                            @if($detail['id'] == $order['payment_id'])
                                                <option value="{{$detail['id']}}"
                                                        selected>{{$detail['name']}}</option>
                                            @else
                                                <option value="{{$detail['id']}}">{{$detail['name']}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Ghi chú</label>
                                    <input type="text" class="form-control" name="description"
                                           value="{{$order['description']}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Trạng thái</label>
                                    <span style="color: red">(*)</span>
                                    <select class="form-control input-sm m-bot15" name="order_status">
                                        @foreach($status as $detail)
                                            @if($detail['id'] == $order['order_status'])
                                                <option value="{{$detail['id']}}"
                                                        selected>{{$detail['name']}}</option>
                                            @else
                                                <option value="{{$detail['id']}}">{{$detail['name']}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary btn-sm waves-effect waves-light">Lưu
                                </button>
                            </form>
                        </div>
                        <!-- /.card-content -->
                    </div>
                    <!-- /.box-content -->
                </div>
            </div>
        </div>
        <div class="main-content">
            <div class="row small-spacing">
                <div class="col-xs-12">
                    <div class="box-content">
                        <h4 class="box-title">Chi tiết đơn hàng</h4>
                        <table id="example" class="table table-striped table-bordered display" style="width:100%">
                            <thead>
                            <tr>
                                <th>Sản phẩm</th>
                                <th>Hình ảnh</th>
                                <th>Giá sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Tổng tiền</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($order->detail as $detail)
                                <tr>
                                    <td>{{$detail['product_name']}}</td>
                                    <td><img style="width: 100px" src="{{asset($detail['product_image'])}}"></td>
                                    <td>{{number_format($detail['product_price'])}}</td>
                                    <td>{{$detail['product_quantity']}}</td>
                                    <td>{{number_format($detail['total_price'])}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


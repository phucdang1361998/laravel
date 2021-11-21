@extends('admin.index')

@section('content')
    <section id="wrapper">
        <div class="main-content">
            <div class="row small-spacing">
                <div class="col-lg-6 col-xs-12">
                    <div class="box-content card white">
                        <h4 class="box-title">Tạo mới sliderm</h4>
                        <!-- /.box-title -->
                        <div class="card-content">
                            <form method="post" action="{{route('admin.slider.store')}}" enctype="multipart/form-data">
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
                                    <label for="exampleInputEmail1">Tiêu đề 1</label>
                                    <span style="color: red">(*)</span>
                                    <input type="text" class="form-control" name="title1">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Tiêu đề 2</label>
                                    <span style="color: red">(*)</span>
                                    <input type="text" class="form-control" name="title2">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Trang chứa slider</label>
                                    <span style="color: red">(*)</span>
                                    <select class="form-control input-sm m-bot15" name="page">
                                            <option value="{{''}}">Trang chủ</option>
                                            <option value="{{'product'}}">Sản phẩm</option>
                                            <option value="{{'about'}}">Giới thiệu</option>
                                            <option value="{{'contact'}}">Liên hệ</option>
                                            <option value="{{'shipping-cart'}}">Giỏ hàng</option>
                                            <option value="{{'checkout'}}">Thanh toán</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Hình ảnh</label>
                                    <input type="file" name="image">
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
    </section>
@endsection


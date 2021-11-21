@extends('admin.index')

@section('content')
    <section id="wrapper">
        <div class="main-content">
            <div class="row small-spacing">
                <div class="col-lg-6 col-xs-12">
                    <div class="box-content card white">
                        <h4 class="box-title">Cập nhật slider</h4>
                        <!-- /.box-title -->
                        <div class="card-content">
                            <form method="post" action="{{route('admin.slider.update',['id' => $slider['id']])}}"
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
                                    <label for="exampleInputEmail1">Tiêu đề 1</label>
                                    <span style="color: red">(*)</span>
                                    <input type="text" class="form-control" name="title1" value="{{$slider['title1']}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Tiêu đề 2</label>
                                    <span style="color: red">(*)</span>
                                    <input type="text" class="form-control" name="title2" value="{{$slider['title2']}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Trang chứa slider</label>
                                    <span style="color: red">(*)</span>
                                    <select class="form-control input-sm m-bot15" name="page">
                                        @if($slider['page'] == '')
                                            <option value="{{''}}" selected>Trang chủ</option>
                                        @else
                                            <option value="{{''}}">Trang chủ</option>
                                        @endif

                                        @if($slider['page'] == 'product')
                                            <option value="{{'product'}}" selected>Sản phẩm</option>
                                        @else
                                            <option value="{{'product'}}">Sản phẩm</option>
                                        @endif

                                        @if($slider['page'] == 'about')
                                            <option value="{{'about'}}" selected>Giới thiệu</option>
                                        @else
                                            <option value="{{'about'}}">Giới thiệu</option>
                                        @endif

                                        @if($slider['page'] == 'contact')
                                            <option value="{{'contact'}}" selected>Liên hệ</option>
                                        @else
                                            <option value="{{'contact'}}">Liên hệ</option>
                                        @endif

                                        @if($slider['page'] == 'shopping-cart')
                                            <option value="{{'shopping-cart'}}" selected>Giỏ hàng</option>
                                        @else
                                            <option value="{{'shopping-cart'}}">Giỏ hàng</option>
                                        @endif

                                        @if($slider['page'] == 'checkout')
                                            <option value="{{'checkout'}}" selected>Thanh toán</option>
                                        @else
                                            <option value="{{'checkout'}}">Thanh toán</option>
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Hình ảnh</label>
                                    <input type="file" name="image">
                                    <img src="{{asset($slider['image'])}}" alt="">
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


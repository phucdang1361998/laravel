@extends('admin.index')

@section('content')
    <section id="wrapper">
        <div class="main-content">
            <div class="row small-spacing">
                <div class="col-lg-6 col-xs-12">
                    <div class="box-content card white">
                        <h4 class="box-title">Tạo mới sản phẩm</h4>
                        <!-- /.box-title -->
                        <div class="card-content">
                            <form method="post" action="{{route('admin.product.store')}}" enctype="multipart/form-data">
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
                                    <label for="exampleInputEmail1">Tên sản phẩm</label>
                                    <span style="color: red">(*)</span>
                                    <input type="text" class="form-control" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mã sản phẩm</label>
                                    <span style="color: red">(*)</span>
                                    <input type="text" class="form-control" name="code">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Loại sản phẩm</label>
                                    <span style="color: red">(*)</span>
                                    <select class="form-control input-sm m-bot15" name="product_type_id">
                                        @foreach($category as $detail)
                                            <option value="{{$detail['id']}}">{{$detail['name']}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Giá</label>
                                    <span style="color: red">(*)</span>
                                    <input type="number" class="form-control" name="price">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Giảm giá</label><br>
                                    <input type="radio" name="sale_off"
                                           value="1">
                                    <label for="vehicle1">Có</label><br>
                                    <input type="radio" name="sale_off"
                                           value="0">
                                    <label for="vehicle1">Không</label><br>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Giá giảm</label>
                                    <input type="text" class="form-control" name="price_sale">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả</label>
                                    <input type="text" class="form-control" name="description">
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


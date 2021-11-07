@extends('admin.index')

@section('content')
    <section class="wrapper">
        <div class="form-w3layouts">
            <!-- page start-->
            <!-- page start-->
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm sản phẩm mới
                        </header>
                        @if(isset($message))
                            <tr>{{$message}}</tr>
                        @endif
                        <div class="panel-body">
                            <div class="position-center">
                                <form enctype="multipart/form-data" method="POST" action="{{route('admin.product.store')}}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tên sản phẩm</label>
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Mã sản phẩm</label>
                                        <input type="text" class="form-control" name="code">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Loại sản phẩm</label>
                                        <select class="form-control input-sm m-bot15" name="product_type_id">
                                            @foreach($category as $detail)
                                                <option value="{{$detail['id']}}">{{$detail['name']}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Giá</label>
                                        <input type="text" class="form-control" name="price">
                                    </div>
                                    <div class="form-group">
                                        <label>Giảm giá</label><br>
                                        <input type="radio" id="vehicle1" name="sale_off" value="1">
                                        <label>Có</label><br>
                                        <input type="radio" id="vehicle1" name="sale_off" value="0">
                                        <label>Không</label><br>
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
                                    <button type="submit" class="btn btn-info">Lưu</button>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
@endsection


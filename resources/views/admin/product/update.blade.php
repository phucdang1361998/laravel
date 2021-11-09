@extends('admin.index')

@section('content')
    <section id="wrapper">
        <div class="main-content">
            <div class="row small-spacing">
                <div class="col-lg-6 col-xs-12">
                    <div class="box-content card white">
                        <h4 class="box-title">Chi tiết sản phẩm</h4>
                        <!-- /.box-title -->
                        <div class="card-content">
                            <form method="post" action="{{route('admin.product.update',['id' => $product['id']])}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên sản phẩm</label>
                                    <input type="text" class="form-control" name="name"
                                           value="{{$product['name']}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mã sản phẩm</label>
                                    <input type="text" class="form-control" name="code"
                                           value="{{$product['code']}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Loại sản phẩm</label>
                                    <select class="form-control input-sm m-bot15" name="product_type_id">
                                        @foreach($category as $detail)
                                            @if($detail['id'] == $product['product_type_id'])
                                                <option value="{{$detail['id']}}"
                                                        selected>{{$detail['name']}}</option>
                                            @else
                                                <option value="{{$detail['id']}}">{{$detail['name']}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Giá</label>
                                    <input type="text" class="form-control" name="price"
                                           value="{{number_format($product['price'])}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Giảm giá</label><br>
                                    <input type="radio" name="sale_off"
                                           value="1" {{$product['sale_off'] == 1 ? 'checked="true"' : ''}}>
                                    <label for="vehicle1">Có</label><br>
                                    <input type="radio" name="sale_off"
                                           value="0" {{$product['sale_off'] == 0 ? 'checked="true"' : ''}}>
                                    <label for="vehicle1">Không</label><br>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Giá giảm</label>
                                    <input type="text" class="form-control" name="price_sale"
                                           value="{{$product['price_sale'] ? number_format($product['price_sale']) : null}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả</label>
                                    <input type="text" class="form-control" name="description"
                                           value="{{$product['description']}}">
                                </div>
                                <div class="form-group">
                                    <label>Hình ảnh</label>
                                    <input type="file" name="image">
                                    <img src="{{asset($product['image'])}}" style="width:100px"/>
                                </div>
                                <button type="submit" class="btn btn-primary btn-sm waves-effect waves-light">Lưu</button>
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


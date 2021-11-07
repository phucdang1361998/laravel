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
                            Chỉnh sửa sản phẩm
                        </header>
                        @if(isset($message))
                            <td>
                                {{$message}}
                            </td>
                        @endif
                        <div class="panel-body">
                            <div class="position-center">
                                <form enctype="multipart/form-data" method="POST"
                                      action="{{route('admin.product.update',['id' => $product['id']])}}">
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


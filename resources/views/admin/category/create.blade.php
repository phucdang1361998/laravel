@extends('admin.index')

@section('content')
    <section id="wrapper">
        <div class="main-content">
            <div class="row small-spacing">
                <div class="col-lg-6 col-xs-12">
                    <div class="box-content card white">
                        <h4 class="box-title">Tạo mới danh mục sản phẩm</h4>
                        <!-- /.box-title -->
                        <div class="card-content">
                            <form method="post" action="{{route('admin.category.store')}}">
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
                                    <label for="exampleInputEmail1">Tên danh mục sản phẩm</label>
                                    <span style="color: red">(*)</span>
                                    <input type="text" class="form-control" name="title">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mã danh mục sản phẩm</label>
                                    <span style="color: red">(*)</span>
                                    <input type="text" class="form-control" name="title">
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


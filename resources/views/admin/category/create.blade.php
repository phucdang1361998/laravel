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
                            Thêm mới loại sản phẩm
                        </header>
                        @if(isset($message))
                            <td>
                                {{$message}}
                            </td>
                        @endif
                        <div class="panel-body">
                            <div class="position-center">
                                <form method="POST" action="{{route('admin.category.store')}}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tên loại sản phẩm</label>
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Mã loại sản phẩm</label>
                                        <input type="text" class="form-control" name="code">
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


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
                            Thêm giới thiệu
                        </header>
                        @if(isset($message))
                            <td>
                                {{$message}}
                            </td>
                        @endif
                        <div class="panel-body">
                            <div class="position-center">
                                <form method="POST" enctype="multipart/form-data"
                                      action="{{route('admin.about.create')}}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tiêu đề</label>
                                        <input type="text" class="form-control" name="title">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Hình ảnh</label>
                                        <input type="file" class="form-control" name="image"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Nội dung</label>
                                        <input type="text" class="form-control" name="description">
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


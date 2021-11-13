@extends('admin.index')

@section('content')
    <section id="wrapper">
        <div class="main-content">
            <div class="row small-spacing">
                <div class="col-lg-6 col-xs-12">
                    <div class="box-content card white">
                        <h4 class="box-title">Tạo bài giới thiệu</h4>
                        <!-- /.box-title -->
                        <div class="card-content">
                            <form method="post" action="{{route('admin.about.store')}}" enctype="multipart/form-data">
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
                                    <label for="exampleInputEmail1">Tiêu đề</label>
                                    <span style="color: red">(*)</span>
                                    <input type="text" class="form-control" name="title">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Nội dung</label>
                                    <span style="color: red">(*)</span>
                                    <textarea id="tinymce" type="text" class="form-control" name="description"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Hình ảnh</label>
                                    <input type="file" name="image">
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


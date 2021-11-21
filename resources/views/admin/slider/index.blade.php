@extends('admin.index')

@section('content')
    <section id="wrapper">
        <div class="main-content">
            <div class="row small-spacing">
                <div class="col-xs-12">
                    <div class="box-content">
                        <h4 class="box-title">Slider</h4>
                        <!-- /.box-title -->
                        <div class="dropdown js__drop_down">
                            <button type="button" class="btn btn-primary waves-effect waves-light">
                                <a style="color: white" href="{{route('admin.slider.create')}}">Tạo mới</a>
                            </button>
                            <!-- /.sub-menu -->
                        </div>
                        <!-- /.dropdown js__dropdown -->
                        <table id="example" class="table table-striped table-bordered display" style="width:100%">
                            <thead>
                            <tr>
                                <th>Tiêu đề 1</th>
                                <th>Tiêu đề 2</th>
                                <th>Trang chứa slider</th>
                                <th>Hình ảnh</th>
                                <th>Hành động</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($slider as $detail)
                                <tr>
                                    <td>{{$detail['title1']}}</td>
                                    <td>{{$detail['title2']}}</td>
                                    <td>{{PAGE[$detail['page']]}}</td>
                                    <td><img style="width: 300px;" src="{{asset($detail['image'])}}"></td>
                                    <td>
                                        @include('admin.forms.btn-edit', ['route' => 'admin.slider.edit', 'id' => $detail->id])
                                        <a onclick="return confirm('Bạn có chắc muốn xóa bài giới thiệu này không?')"
                                           style="color: #ea4335"
                                           href="{{route('admin.slider.delete',['id' => $detail->id])}}"><i
                                                class="fas fa-fw fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

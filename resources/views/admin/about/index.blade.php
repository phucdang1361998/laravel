@extends('admin.index')

@section('content')
    <section id="wrapper">
        <div class="main-content">
            <div class="row small-spacing">
                <div class="col-xs-12">
                    <div class="box-content">
                        <h4 class="box-title">Giới thiệu</h4>
                        <!-- /.box-title -->
                        <div class="dropdown js__drop_down">
                            <button type="button" class="btn btn-primary waves-effect waves-light">
                                <a style="color: white" href="{{route('admin.about.create')}}">Tạo mới</a>
                            </button>
                            <!-- /.sub-menu -->
                        </div>
                        <!-- /.dropdown js__dropdown -->
                        <table id="example" class="table table-striped table-bordered display" style="width:100%">
                            <thead>
                            <tr>
                                <th>Tiêu đề</th>
                                <th>Hình ảnh</th>
                                <th>Nội dung</th>
                                <th>Hành động</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($about as $detail)
                            <tr>
                                <td>{{$detail['title']}}</td>
                                <td><img style="width: 300px;" src="{{asset($detail['image'])}}"></td>
                                <td>{{$detail['description']}}</td>
                                <td>
                                    @include('admin.forms.btn-edit', ['route' => 'admin.about.edit', 'id' => $detail->id])
                                    <a onclick="return confirm('Bạn có chắc muốn xóa bài giới thiệu này không?')"
                                       style="color: #ea4335"
                                       href="{{route('admin.about.delete',['id' => $detail->id])}}"><i
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

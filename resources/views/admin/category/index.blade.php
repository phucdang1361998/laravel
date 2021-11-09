@extends('admin.index')

@section('content')
    <section id="wrapper">
        <div class="main-content">
            <div class="row small-spacing">
                <div class="col-xs-12">
                    <div class="box-content">
                        <h4 class="box-title">Danh mục sản phẩm</h4>
                        <!-- /.box-title -->
                        <div class="dropdown js__drop_down">
                            <a href="#"
                               class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
                            <ul class="sub-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else there</a></li>
                                <li class="split"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                            <!-- /.sub-menu -->
                        </div>
                        <!-- /.dropdown js__dropdown -->
                        <table id="example" class="table table-striped table-bordered display" style="width:100%">
                            <thead>
                            <tr>
                                <th>Tên loại sản phẩm</th>
                                <th>Mã loại sản phẩm</th>
                                <th>Hành động</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($category as $detail)
                                <tr>
                                    <td>{{$detail['name']}}</td>
                                    <td>{{$detail['code']}}</td>
                                    <td>
                                        @include('admin.forms.btn-edit', ['route' => 'admin.category.edit', 'id' => $detail->id])
                                        <a onclick="return confirm('Bạn có chắc muốn xóa danh mục sản phẩm này không?')"
                                           style="color: #ea4335"
                                           href="{{route('admin.category.delete',['id' => $detail->id])}}"><i
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

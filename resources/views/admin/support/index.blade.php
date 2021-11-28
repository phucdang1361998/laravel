@extends('admin.index')

@section('content')
    <section id="wrapper">
        <div class="main-content">
            <div class="row small-spacing">
                <div class="col-xs-12">
                    <div class="box-content">
                        <h4 class="box-title">Hỗ trợ</h4>
                        <table class="table table-striped table-bordered display" style="width:100%">
                            <thead>
                            <tr>
                                <th>Tên</th>
                                <th>Email</th>
                                <th>Số điện thoại</th>
                                <th>Nội dung</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($support as $detail)
                                <tr>
                                    <td>{{$detail['name']}}</td>
                                    <td>{{$detail['email']}}</td>
                                    <td>{{$detail['phone']}}</td>
                                    <td>{{$detail['description']}}</td>
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

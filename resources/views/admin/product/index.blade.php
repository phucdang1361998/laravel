

    <div>
        <div class="card shadow mb-4">
            <div class="card-header py-3" style="display: flex; padding-top: 10px !important; padding-bottom: 10px !important;">
                <div class="col-sm-12 col-md-6" style="padding-top: 7px;">
                    <h6 class="m-0 font-weight-bold text-primary">Danh Sách Sản phẩm</h6>
                </div>
                {{--<div class="col-sm-12 col-md-6 dataTables_filter" style="text-align: right;">
                    <a class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" href="{{route('admin.category.create-view')}}">Thêm Mới</a>
                </div>--}}
            </div>
            <div class="card-body table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                <thead>
                                <tr role="row">
                                    <th style="width: 50px;">Tên sản phẩm</th>
                                    <th style="width: 50px;">Mã sản phẩm</th>
                                    <th style="width: 50px;">Loại sản phẩm</th>
                                    <th style="width: 120px;">Hình ảnh</th>
                                    <th style="width: 80px;">Giá</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $item)
                                    <tr>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->code}}</td>
                                        <td>{{$item->image}}</td>
                                        <td>{{$item->product_type_id}}</td>
                                        <td>{{$item->price}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


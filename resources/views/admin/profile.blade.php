@extends('admin.index')

@section('content')
    <section id="wrapper">
        <div class="main-content">
            <div class="row small-spacing">
                <div class="col-md-3 col-xs-12">
                    <div class="box-content bordered primary margin-bottom-20">
                        <div class="profile-avatar">
                            <img src="{{asset($user['image'])}}" alt="">
                            <a href="#" class="btn btn-block btn-friend"><i class="fa fa-check-circle"></i>Ảnh đại diện</a>
                        </div>
                        <!-- .profile-avatar -->
                    </div>
                    <!-- /.box-content bordered -->
                    <!-- /.box-content -->
                </div>
                <!-- /.col-md-3 col-xs-12 -->
                <div class="col-md-9 col-xs-12">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box-content card">
                                <h4 class="box-title"><i class="fa fa-user ico"></i>Thông tin cá nhân</h4>
                                <!-- /.box-title -->
                                <!-- /.dropdown js__dropdown -->
                                <div class="card-content">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-xs-5"><label>First Name:</label></div>
                                                <!-- /.col-xs-5 -->
                                                <div class="col-xs-7">Betty</div>
                                                <!-- /.col-xs-7 -->
                                            </div>
                                            <!-- /.row -->
                                        </div>
                                        <!-- /.col-md-6 -->
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-xs-5"><label>Last Name:</label></div>
                                                <!-- /.col-xs-5 -->
                                                <div class="col-xs-7">Simmons</div>
                                                <!-- /.col-xs-7 -->
                                            </div>
                                            <!-- /.row -->
                                        </div>
                                        <!-- /.col-md-6 -->
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-xs-5"><label>User Name:</label></div>
                                                <!-- /.col-xs-5 -->
                                                <div class="col-xs-7">Betty</div>
                                                <!-- /.col-xs-7 -->
                                            </div>
                                            <!-- /.row -->
                                        </div>
                                        <!-- /.col-md-6 -->
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-xs-5"><label>Email:</label></div>
                                                <!-- /.col-xs-5 -->
                                                <div class="col-xs-7">youremail@gmail.com</div>
                                                <!-- /.col-xs-7 -->
                                            </div>
                                            <!-- /.row -->
                                        </div>
                                        <!-- /.col-md-6 -->
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-xs-5"><label>City:</label></div>
                                                <!-- /.col-xs-5 -->
                                                <div class="col-xs-7">Los Angeles</div>
                                                <!-- /.col-xs-7 -->
                                            </div>
                                            <!-- /.row -->
                                        </div>
                                        <!-- /.col-md-6 -->
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-xs-5"><label>Country:</label></div>
                                                <!-- /.col-xs-5 -->
                                                <div class="col-xs-7">United States</div>
                                                <!-- /.col-xs-7 -->
                                            </div>
                                            <!-- /.row -->
                                        </div>
                                        <!-- /.col-md-6 -->
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-xs-5"><label>Birthday:</label></div>
                                                <!-- /.col-xs-5 -->
                                                <div class="col-xs-7">Jan 22, 1984</div>
                                                <!-- /.col-xs-7 -->
                                            </div>
                                            <!-- /.row -->
                                        </div>
                                        <!-- /.col-md-6 -->
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-xs-5"><label>Interests:</label></div>
                                                <!-- /.col-xs-5 -->
                                                <div class="col-xs-7">Basketball, Web, Design, etc.</div>
                                                <!-- /.col-xs-7 -->
                                            </div>
                                            <!-- /.row -->
                                        </div>
                                        <!-- /.col-md-6 -->
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-xs-5"><label>Website:</label></div>
                                                <!-- /.col-xs-5 -->
                                                <div class="col-xs-7"><a href="#">yourwebsite.com</a></div>
                                                <!-- /.col-xs-7 -->
                                            </div>
                                            <!-- /.row -->
                                        </div>
                                        <!-- /.col-md-6 -->
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-xs-5"><label>Phone:</label></div>
                                                <!-- /.col-xs-5 -->
                                                <div class="col-xs-7">+1-234-5678</div>
                                                <!-- /.col-xs-7 -->
                                            </div>
                                            <!-- /.row -->
                                        </div>
                                        <!-- /.col-md-6 -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.card-content -->
                            </div>
                            <!-- /.box-content card -->
                        </div>
                        <!-- /.col-md-12 -->

                        <!-- /.box-content card -->
                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.col-md-9 col-xs-12 -->
        </div>
        <!-- /.main-content -->
    </section><!--/#wrapper -->
@endsection

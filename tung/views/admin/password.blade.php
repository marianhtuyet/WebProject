@extends('layout.index')
@section('title')

@endsection
@section('style')

@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- breadcrumb-->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li aria-current="page" class="breadcrumb-item active">Liên hệ</li>
                    </ol>
                </nav>
            </div>
            <div class="col-lg-3">
                <!--
                *** PAGES MENU ***
                _________________________________________________________
                -->
                <div class="card sidebar-menu mb-4">
                    <div class="card-header">
                        <h3 class="h4 card-title">Admin</h3>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-pills flex-column">
                            <li><a href="{{route('admin.password')}}" class="nav-link">Đổi mật khẩu</a></li>
                            <li><a href="{{route('admin.product')}}" class="nav-link">Sản phẩm</a></li>
                            <li><a href="#" class="nav-link">Thống kê</a></li>
                        </ul>
                    </div>
                </div>
                <!-- *** PAGES MENU END ***-->
                <div class="banner"><img src="img_new/company4.jpg" alt="menu picture" class="img-fluid"></div>
            </div>
            <div class="col-lg-9">
                <div id="contact" class="box">
                    <h1>Đổi mật khẩu</h1>
                    <hr>
                    <h3>Mật khẩu mới phải khác mật khẩu cũ và dài hơn 12 ký tự!</h3>
                    <form>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="present-password">Mật khẩu hiện tại</label>
                                    <input id="present-password" type="password" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="new-password">Mật khẩu mới</label>
                                    <input id="new-password" type="password" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="new-password2">Nhập lại mật khẩu</label>
                                    <input id="new-password2" type="password" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-save	"></i>Xác nhận</button>
                            </div>
                        </div>
                        <!-- /.row-->
                    </form>

                </div>
            </div>
            <!-- /.col-md-9-->

        </div>
    </div>


@endsection
@section('script-ori')

    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.cookie/jquery.cookie.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.js"></script>
    <script src="assets/js/front.js"></script>


@endsection
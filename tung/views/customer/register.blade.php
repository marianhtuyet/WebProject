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
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li aria-current="page" class="breadcrumb-item active">Tạo tài khoản / Đăng nhập</li>
                    </ol>
                </nav>
            </div>
            <div class="col-lg-6">
                <div class="box">
                    <h1>Tạo tài khoản</h1>
                    <p class="lead">Bạn chưa tạo tài khoản?</p>
                    <p>Mau chóng đăng ký thành viên để nhận được nhiều ưu đãi và khuyến mãi từ cửa hàng. Đừng lo việc đăng ký chỉ mất chưa đầy 1 phút!</p>
                    <p class="text-muted">Nếu có nhu cầu liên hệ hoặc khiếu nại vui lòng tới <a href="contact.html">trang liên hệ</a>, trung tâm chăm sóc khách hàng của chúng tôi làm việc 24/7.</p>
                    <hr>
                    <form action="{{route('register.post')}}" method="post">
                        {{csrf_field()}}}
                        <div class="form-group">
                            <label for="name">Tên</label>
                            <input id="name" name="name" type="text" class="form-control" placeholder="Nguyễn Văn A">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" name="email" type="text" class="form-control" placeholder="abc123456@gmail.com">
                        </div>
                        <div class="form-group">
                            <label for="password">Mật khẩu</label>
                            <input id="password" name="password" type="password" class="form-control" placeholder="Mật khẩu">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-user-md"></i> Đăng ký</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="box">
                    <h1>Đăng nhập</h1>
                    <p class="lead">Bạn đã có tài khoản?</p>
                    <p class="text-muted">Đăng nhập ngay để nhận nhiều ưu đãi từ cửa hàng.</p>
                    <hr>
                    <form action="customer-orders.html" method="post">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" name="email_modal" type="text" class="form-control" placeholder="abc123456@gmail.com">
                        </div>
                        <div class="form-group">
                            <label for="password">Mật khẩu</label>
                            <input id="password" name="password_modal" type="password" class="form-control" placeholder="Mật khẩu">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-sign-in"></i> Đăng nhập</button>
                        </div>
                    </form>
                </div>
            </div>
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
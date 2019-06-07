<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

?>


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
                        <li aria-current="page" class="breadcrumb-item active">My account</li>
                    </ol>
                </nav>
            </div>
            <div class="col-lg-3">
                <!--
                *** CUSTOMER MENU ***
                _________________________________________________________
                -->
                <div class="card sidebar-menu">
                    <div class="card-header">
                        <h3 class="h4 card-title">Customer section</h3>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-pills flex-column">
                            @if( $_SESSION["customer"][0]["cus_role"]==1)
                            <a href="{{route('customer.invoice')}}" class="nav-link active"><i class="fa fa-list"></i>
                                My orders</a>
                            {{--<a href="customer-wishlist.html" class="nav-link"><i class="fa fa-heart"></i> My wishlist</a>--}}
                            <a href="{{route('customer.info')}}" class="nav-link"><i class="fa fa-user"></i> My account</a>
                            <li><a href="{{route('admin.product')}}" class="nav-link"><i class="fa fa-plus-square "></i>Sản phẩm mới</a></li>
                            <li><a href="" class="nav-link" ><i class="fa fa-list-alt"></i>Danh sách sản phẩm</a> </li>
                            <li><a href="#" class="nav-link"><i class="fa fa-bar-chart "></i>Thống kê</a></li>
                            <a href="{{route('customer.logout')}}" class="nav-link"><i class="fa fa-sign-out"></i>
                                Logout</a>
                                @else
                                {{--<a href="{{route('customer.invoice')}}" class="nav-link active"><i class="fa fa-list"></i>--}}
                                    {{--My orders</a>--}}
                                {{--<a href="customer-wishlist.html" class="nav-link"><i class="fa fa-heart"></i> My wishlist</a>--}}
                                <a href="{{route('customer.info')}}" class="nav-link"><i class="fa fa-user"></i> My account</a>
                                <a href="{{route('customer.logout')}}" class="nav-link"><i class="fa fa-sign-out"></i>
                                    Logout</a>

                                @endif
                        </ul>
                    </div>
                </div>
                <!-- /.col-lg-3-->
                <!-- *** CUSTOMER MENU END ***-->
                <div class="banner"><img src="assets/img_new/company4.jpg" alt="menu picture" class="img-fluid"></div>
            </div>
            <div class="col-lg-9">
                <div class="box">
                    <h1>My account</h1>
                    <p class="lead">Change your personal details or your password here.</p>
                    <p class="text-muted">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                        turpis egestas.</p>
                    <h3>Change password</h3>
                    <form method="post" action="{{route('customer.changepass')}}" >
                        {{csrf_field()}}
                    {{--<form>--}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="password_old">Old password</label>
                                    <input class="hidden" id="password_old_val"
                                           value="{{$_SESSION["customer"][0]["cus_password"]}}">
                                    <input id="password_old" type="password" class="form-control"
                                           onblur="CheckOldPass()">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="password_1">New password</label>
                                    <input id="password_1" type="password" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="password_2">Retype new password</label>
                                    <input id="password_2" name="password_2" type="password" class="form-control"
                                           onblur="CheckPassTrue()">
                                </div>
                            </div>
                            <div class="col-md-1">
                                <div class="form-group">
                                    <i class="fa fa-check" id="checkpass" style="color: green"></i>
                                </div>
                            </div>

                        </div>
                        <!-- /.row-->
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save new password
                            </button>
                        </div>
                    </form>
                    <h3 class="mt-5">Personal details</h3>

                    <form method="post" action="{{route('customer.changeinfo')}}">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fulname">Full name</label>
                                    <input id="fullname" name="fullname" type="text" class="form-control"
                                           value="{{$_SESSION["customer"][0]["cus_name"]}}">
                                </div>
                            </div>
                        </div>
                        <!-- /.row-->
                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label for="house_number">Số nhà</label>
                                    <input type="text" id="house_number" name="house_number" class="form-control"
                                           value="{{$_SESSION["customer"][0]["cus_house_number"]}}">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">

                                <div class="form-group">
                                    <label for="street">Đường</label>
                                    <input id="street" name="street" type="text" class="form-control"
                                           value="{{$_SESSION["customer"][0]["cus_street"]}}">
                                </div>

                            </div>
                            <div class="col-md-6 col-lg-4">

                                <div class="form-group">
                                    <label for="city">Thành phố</label>
                                    <input id="city" name="city" type="text" class="form-control"
                                           value="{{$_SESSION["customer"][0]["cus_city"]}}">
                                </div>
                            </div>

                        </div>
                        <!-- /.row-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">Telephone</label>
                                    <input id="phone" name="phone" type="text" class="form-control"
                                           value="{{$_SESSION["customer"][0]["cus_phone_number"]}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" name="email" type="text" class="form-control"
                                           value="{{$_SESSION["customer"][0]["cus_email"]}}">
                                </div>
                            </div>
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save changes
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
@section('script-ori')
    <script>
        $(document).ready(function () {
            document.getElementById("checkpass").style.display = 'none';
            document.getElementById("password_old_val").style.display = 'none';
        });

        function CheckPassTrue() {
            let old_pass = document.getElementById("password_old");
            if (old_pass.value != '') {
                let pass1 = document.getElementById("password_1");
                let pass2 = document.getElementById("password_2");
                if (pass1.value == pass2.value)
                    document.getElementById("checkpass").style.display = 'block';
                else
                    alert("Mật khẩu chưa khớp vui lòng nhập lại!");
            } else {
                alert("Vui lòng nhập lại mật khẩu cũ!")
            }
        }

        function CheckOldPass() {
            let oldpass_val = document.getElementById("password_old_val");
            let oldpass = document.getElementById("password_old");
            if (!(oldpass_val.value == oldpass.value)) {
                alert('Mật khẩu chưa đúng vui lòng nhập lại');
            }
        }
    </script>

    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.cookie/jquery.cookie.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.js"></script>
    <script src="assets/js/front.js"></script>
@endsection
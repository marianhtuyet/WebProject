<?php
if(session_status() == PHP_SESSION_NONE)
{
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
                        <li class="breadcrumb-item"><a href="{{route('trangchu.index')}}">Trang chủ</a></li>
                        <li aria-current="page" class="breadcrumb-item active">Thanh toán - Địa chỉ</li>
                    </ol>
                </nav>
            </div>
            <div id="checkout" class="col-lg-9">
                <div class="box">
                    <form method="post" action="{{route('checkout2.post')}}">
                        {{csrf_field()}}
                        <h1>Thanh toán - Địa chỉ</h1>
                        
                        <div class="nav flex-column flex-sm-row nav-pills"><a href="{{route('checkout1.get')}}" class="nav-link flex-sm-fill text-sm-center active">
                                <i class="fa fa-map-marker">
                                </i>Địa chỉ</a><a href="{{route('checkout2.get')}}" class="nav-link flex-sm-fill text-sm-center"> <i class="fa fa-truck">
                                </i>Phương thức giao hàng</a>
                                <a href="{{route('checkout3.get')}}" class="nav-link flex-sm-fill text-sm-center "> <i class="fa fa-eye">
                                </i>Review đơn hàng</a>

                            </div>

                        <div class="content py-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="fullname">Họ Tên</label>
                                        <input id="fullname" name="fullname" type="text" class="form-control"

                                             @if(isset($_SESSION["invoice"]))
                                             value={{$_SESSION["invoice"][0]["invoice_name"]}}
                                             @endif;

                                        >
                                    </div>
                                </div>
                            </div>
                            <!-- /.row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="house_nmber">Số nhà</label>
                                        <input id="house_nmber" name="house_number" type="text" class="form-control"
                                        @if(isset($_SESSION["invoice"]))
                                             value={{$_SESSION["invoice"][0]["invoice_house_number"]}}
                                             @endif;>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="street">Đường</label>
                                        <input id="street" name="street" type="text" class="form-control"
                                            @if(isset($_SESSION["invoice"]))
                                                 value={{$_SESSION["invoice"][0]["invoice_street"]}}
                                                 @endif;>
                                    </div>
                                </div>
                            </div>
                            <!-- /.row-->
                            <div class="row">
                                <div class="col-md-12 col-lg-6">
                                    <div class="form-group">
                                        <label for="city">Thành phố</label>
                                        <input id="city" name="city" type="text" class="form-control"
                                        @if(isset($_SESSION["invoice"]))
                                             value={{$_SESSION["invoice"][0]["invoice_city"]}}
                                             @endif;
                                        >
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <div class="form-group">
                                        <label for="phone_number">Số điện thoại</label>
                                        <input id="phone_number" name="phone_number" type="text" class="form-control"@if(isset($_SESSION["invoice"]))
                                             value={{$_SESSION["invoice"][0]["invoice_phone_number"]}}
                                             @endif;>
                                    </div>
                                </div>
                                <!-- <div class="col-md-12 col-lg-4">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input id="email" name="email" type="text" class="form-control"
                                       >
                                    </div>
                                </div> -->
                        <input type="hidden" name="total" value="{{$total}}">
                            </div>
                            <!-- /.row-->
                        </div>
                        <div class="box-footer d-flex justify-content-between"><a href="{{route('basket.get')}}" class="btn btn-outline-secondary"><i class="fa fa-chevron-left"></i>Về lại giỏ hàng</a>
                            <button type="submit" class="btn btn-primary">Tiếp tục qua phương thức giao hàng<i class="fa fa-chevron-right"></i></button>
                        </div>
                    </form>
                </div>
                <!-- /.box-->
            </div>
            <!-- /.col-lg-9-->
            <div class="col-lg-3">
                <div id="order-summary" class="card">
                    <div class="card-header">
                        <h3 class="mt-4 mb-4">Tổng kết đơn hàng</h3>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Phí giao hàng và phí thuế tùy vào giá trị đơn đặt hàng.</p>
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td>Giá tổng đơn hàng</td>
                                    <th>{{number_format($total,0)}}</th>

                                </tr>
                                <tr>
                                    <td>Phí ship</td>
                                    <th>20.0000đ</th>
                                </tr>
                                <tr>
                                    <td>Thuế</td>
                                    <th>0đ</th>
                                </tr>
                                <tr class="total">
                                    <td>Tổng</td>
                                    <th>{{number_format($total + 20000,0)}}</th>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col-lg-3-->
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
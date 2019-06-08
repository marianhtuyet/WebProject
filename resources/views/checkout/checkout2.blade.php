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
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li aria-current="page" class="breadcrumb-item active">Thanh toán -Giao hàng</li>
                    </ol>
                </nav>
            </div>
            <div id="checkout" class="col-lg-9">
                <div class="box">
                    <form method="post" action="{{route('checkout3.post')}}">
                        {{csrf_field()}}
                        <h1>Thanh toán -Giao hàng</h1>
                        <div class="nav flex-column flex-sm-row nav-pills"><a href="{{route('checkout1.get')}}" class="nav-link flex-sm-fill text-sm-center">
                                <i class="fa fa-map-marker">
                                </i>Địa chỉ</a><a href="{{route('checkout2.get')}}" class="nav-link flex-sm-fill text-sm-center active"> <i class="fa fa-truck">
                                </i>Phương thức giao hàng</a><a href="{{route('checkout3.get')}}" class="nav-link flex-sm-fill text-sm-center "> <i class="fa fa-eye">
                                </i>Review đơn hàng</a></div>
                        <div class="content py-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="box shipping-method">
                                        <h4>Giao hàng nhanh</h4>
                                        <p>Nhận hàng sau 1-2 ngày.</p>
                                        <div class="box-footer text-center">
                                            <input type="radio" name="delivery" value="1"
                                                   @if(isset($_SESSION["invoice"]) && $_SESSION["invoice"][0]["invoice_method_delivery"]==1 )
                                                   checked="checked"
                                                   @endif;>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="box shipping-method">
                                        <h4>Giao hàng tiêu chuẩn</h4>
                                        <p>Nhận hàng sau 5 - 10 ngày.</p>
                                        <div class="box-footer text-center">
                                            <input type="radio" name="delivery" value="2"
                                                   @if(isset($_SESSION["invoice"]) && $_SESSION["invoice"][0]["invoice_method_delivery"]==2 )
                                                   checked="checked"
                                                   @endif;>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="box-footer d-flex justify-content-between"><a href="{{route('checkout1.get')}}" class="btn btn-outline-secondary"><i class="fa fa-chevron-left"></i>Back to address</a>
                            <button type="submit" class="btn btn-primary">Chuyển qua review đơn hàng<i class="fa fa-chevron-right"></i></button>
                        </div>
                    </form>
                </div>
                <!-- /.box-->
            </div>
            <!-- /.col-md-9-->
            <div class="col-md-3">
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
                                    <th>{{$_SESSION["invoice"][0]["invoice_total"]}}</th>
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
                                    <th>{{$_SESSION["invoice"][0]["invoice_total"] + 20000}}</th>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col-md-3-->
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
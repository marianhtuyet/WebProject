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
                        <li aria-current="page" class="breadcrumb-item active">Đơn hàng</li>

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
                        <h3 class="h4 card-title">Đơn hàng của tôi</h3>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-pills flex-column">
                            <a href="{{route('customer.invoice')}}" class="nav-link active"><i class="fa fa-list"></i>
                                Đơn hàng</a>
                            {{--<a href="customer-wishlist.html" class="nav-link"><i class="fa fa-heart"></i> My wishlist</a>--}}
                            <a href="{{route('customer.info')}}" class="nav-link"><i class="fa fa-user"></i> Tài
                                khoản</a>
                            <li><a href="{{route('admin.product')}}" class="nav-link"><i class="fa fa-plus-square "></i>Sản
                                    phẩm mới</a></li>
                            <li><a href="{{route('list_product_page')}}" class="nav-link"><i class="fa fa-list-alt"></i>Danh
                                    sách sản phẩm</a></li>
                            <li><a href="{{route('chart')}}" class="nav-link"><i class="fa fa-bar-chart "></i>Thống
                                    kê</a></li>
                            <a href="{{route('customer.logout')}}" class="nav-link"><i class="fa fa-sign-out"></i>
                                Logout</a>
                        </ul>
                    </div>
                </div>
                <!-- /.col-lg-3-->
                <!-- *** CUSTOMER MENU END ***-->
                <div class="banner"><img src="assets/img_new/company4.jpg" alt="menu picture" class="img-fluid"></div>
            </div>
            <div id="customer-orders" class="col-lg-9">
                <div class="box">
                    <h1>Đơn hàng của tôi</h1>
                    <p class="lead">Xử lý đơn hàng.</p>
                    {{--<p class="text-muted">If you have any questions, please feel free to <a href="contact.html">contact us</a>, our customer service center is working for you 24/7.</p>--}}
                    <hr>
                    <div class="table-responsive">
                        <div class="Invoice">
                            <p>Họ tên khách hàng : {{$invoice->name_customer}}</p>
                            <p>Địa chỉ: {{$invoice->house_number}}, {{$invoice->street}}, {{$invoice->city}}</p>
                            <p>Số điện thoại: {{$invoice->phone_number}}</p>
                            <p>Phương thức giao hàng:
                            @if($invoice->method_delivery == 1)
                                Giao hàng tiêu chuẩn
                                @else
                                Giao hàng nhanh
                            @endif
                            </p>
                        </div>
                        <table class="table table-hover table-striped">
                            <thead>

                            <tr>
                                <th>Tên hàng</th>
                                <th>Số lượng</th>
                                <th>Giá</th>
                                <th>Tổng cộng</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php $total =0?>
                            @foreach($detail as $key=>$value)
                                <tr>
                                    <input type="hidden" class="id_invoice" value="{{$value->id}}">
                                    <td>{{$value->name}}</td>
                                    <td>{{$value->quality}}</td>
                                    @if($value->discount > 0)
                                        <td>{{$value->discount}}</td>
                                        <td> {{$value->discount*$value->quality}}</td>
                                         <?php $total = $total + ($value->discount *$value->quality) ;
                                        ?>
                                    @else
                                        <td>{{$value->cost}}</td>
                                        <td> {{$value->cost*$value->quality}}</td>
                                <?php $total = $total + ($value->cost *$value->quality) ;
                                ?>
                                    @endif

                            @endforeach
                                <tr>
                                    <th colspan="3">Tổng cộng</th>
                                    <th>{{$total}}</th>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
@section('script-ori')
    <script>

    </script>

    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.cookie/jquery.cookie.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.js"></script>
    <script src="assets/js/front.js"></script>
@endsection
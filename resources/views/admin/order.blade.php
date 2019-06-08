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
                            <a href="{{route('customer.info')}}" class="nav-link"><i class="fa fa-user"></i> Tài khoản</a>
                            <li><a href="{{route('admin.product')}}" class="nav-link"><i class="fa fa-plus-square "></i>Sản phẩm mới</a></li>
                            <li><a href="{{route('list_product_page')}}" class="nav-link" ><i class="fa fa-list-alt"></i>Danh sách sản phẩm</a> </li>
                            <li><a href="{{route('chart')}}" class="nav-link"><i class="fa fa-bar-chart "></i>Thống kê</a></li>
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
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Số hóa đơn</th>
                                <th>Ngày hóa đơn</th>
                                <th>Tổng cộng</th>
                                <th>Trạng thái</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($invoice as $key=>$value)
                                <tr>
                                    <input type="hidden" class="id_invoice" value="{{$value->id}}">
                                    <th>{{$value->id}}</th>
                                    <td>{{$value->create_date}}</td>
                                    <td>{{$value->total}}</td>
                                    @if($value->state==0)
                                        <td class="status"><span class="badge badge-warning">Chưa xác nhận</span></td>
                                        <td class="btnConfirm"><a class="btn btn-primary btn-sm"
                                                                  onclick="Confirm(this)">Xác
                                                nhận</a></td>
                                        <td class="btnCancelation"><a class="btn btn-primary btn-sm"
                                                                      onclick="Cancelation(this)">Hủy </a></td>
                                    @elseif($value->state ==1)
                                        <td  class="status"><span class="badge badge-success">Đã xác nhận</span></td>
                                        <td class="btnConfirm"></td>
                                        <td class="btnCancelation"><a class="btn btn-primary btn-sm"
                                                                      onclick="Cancelation(this)">Hủy </a></td>

                                    @else
                                        <td  class="status" ><span class="badge badge-danger">Đã hủy đơn hàng</span></td>
                                        <td class="btnConfirm"><a class="btn btn-muted btn-sm" disabled="True">Đã hủy</a></td>
                                        <td></td>
                                    @endif
                                </tr>
                            @endforeach

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
        function Confirm(obj) {
            console.log('OK');
            let $table = $(obj).parent().parent();
            $table.find(".status").html('<span class="badge badge-success">Đã xác nhận</span>');
            $table.find(".btnConfirm").html('<a  class="btn btn-muted btn-sm" disabled="True">Xác nhận</a>');
            let id = $table.find(".id_invoice").val();
            $.ajax({
                    url: "{{route('confirm.invoice')}}",
                    type: 'GET',
                    async: true,
                    data: {'_id': id},
                    success: function (data) {
                        console.log(data);
                    }
                }
            )
            ;
        }

        function Cancelation(obj) {
            console.log('cancel');
            let $table = $(obj).parent().parent();
            $table.find(".status").html('<span class="badge badge-danger">Đã hủy đơn hàng</span>');
            $table.find(".btnConfirm").html('<a  class="btn btn-muted btn-sm" disabled="True">Đã hủy</a>');
            $table.find(".btnCancelation").html('<a  class="btn btn-muted btn-sm" disabled="True"></a>');
            let id = $table.find(".id_invoice").val();
            $.ajax({
                    url: "{{route('cancel.invoice')}}",
                    type: 'GET',
                    async: true,
                    data: {'_id': id},
                    success: function (data) {
                        console.log(data);
                    }
                }
            );
        }
    </script>

    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.cookie/jquery.cookie.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.js"></script>
    <script src="assets/js/front.js"></script>
@endsection
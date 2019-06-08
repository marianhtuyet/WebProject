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
                                <li><a href="chart" class="nav-link"><i class="fa fa-bar-chart "></i>Thống kê</a></li>
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
                <form>
                    {{ csrf_field() }}
                    <div class="form-row">
                        <div class="form-inline col-md-12">
                            Từ ngày
                            <input type="date" name="fromDate" style="margin-right: 10px" class="form-control" required>
                            Đến ngày
                            <input type="date" name="toDate" style="margin-right: 20px"  class="form-control" required>
                        </div>
                    </div>
                </form>
                <button class="btn btn-success" onclick="thongke()" style="margin: 10px 0px">Search</button>
                <br>
                <div id="container" data-order="{{ $orderYear }}"></div>
                <br>
                <div>
                    Tổng cộng:<b id="total"></b>
                </div>
            </div>
        </div>
    </div>


@endsection
@section('script-ori')
    <script>
        $(document).ready(function () {
            var order = $('#container').data('order');
            var total=0;
            var listOfValue = [];
            var listOfYear = [];
            order.forEach(function(element){
                listOfYear.push(element.getDate);
                listOfValue.push(element.value);
                total+=element.value;
            });
            /*console.log(total);*/
            var chart = Highcharts.chart('container', {

                title: {
                    text: 'Doanh thu theo ngày'
                },

                subtitle: {
                    text: ''
                },

                xAxis: {
                    categories: listOfYear,
                },

                series: [{
                    name: "Trị giá",
                    type: 'column',
                    colorByPoint: true,
                    data: listOfValue,
                    showInLegend: false
                }]
            });
            document.getElementById("total").innerHTML = total;
        });

        function thongke() {
            //console.log($('#container').data('order'));
            var _token = $('input[name="_token"]').val();
            var v_fromDate = $('input[name="fromDate"]').val();
            var v_toDate = $('input[name="toDate"]').val();
            $.ajax({
                type:'POST',
                url:"{{route('chartByDate')}}",
                data:{fromDate:v_fromDate, toDate:v_toDate,_token:_token},
                success:function(data) {
                    $('#container').data('order',data.msg);
                    var order = $('#container').data('order');
                    var total =0;
                    var listOfValue = [];
                    var listOfYear = [];
                    order.forEach(function(element){
                        listOfYear.push(element.getDate);
                        listOfValue.push(element.value);
                        total+=element.value;
                    });
                    console.log(listOfYear);
                    var chart = Highcharts.chart('container', {

                        title: {
                            text: 'Doanh thu theo ngày'
                        },

                        subtitle: {
                            text: ''
                        },

                        xAxis: {
                            categories: listOfYear,
                        },

                        series: [{
                            name: "Trị giá",
                            type: 'column',
                            colorByPoint: true,
                            data: listOfValue,
                            showInLegend: false
                        }]
                    });
                    document.getElementById("total").innerHTML = total;
                }

            });

        }
    </script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.cookie/jquery.cookie.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.js"></script>
    <script src="assets/js/front.js"></script>
@endsection

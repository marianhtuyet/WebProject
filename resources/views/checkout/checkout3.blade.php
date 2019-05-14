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
                        <li aria-current="page" class="breadcrumb-item active">Thanh toán - Review đơn hàng</li>
                    </ol>
                </nav>
            </div>
            <div id="checkout" class="col-lg-9">
                <div class="box">
                    <form>
                        <h1>Thanh toán - Review đơn hàng</h1>
                        <div class="nav flex-column flex-sm-row nav-pills"><a href="{{route('checkout1.get')}}" class="nav-link flex-sm-fill text-sm-center">
                                <i class="fa fa-map-marker">
                                </i>Địa chỉ</a><a href="{{route('checkout2.get')}}" class="nav-link flex-sm-fill text-sm-center"> <i class="fa fa-truck">
                                </i>Phương thức giao hàng</a><a href="{{route('checkout3.get')}}" class="nav-link flex-sm-fill text-sm-center active"> <i class="fa fa-eye">
                                </i>Review đơn hàng</a></div>
                        <div class="content">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th colspan="2">Sản phẩm</th>
                                        <th>Số lượng</th>
                                        <th>Giá</th>
                                        <th>Giảm giá</th>
                                        <th colspan="2">Tổng cộng</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><a href="Acer_Nitro_5_AN515_52_51GF.html"><img src="img_new/Acer/Nitro%20series/Laptop%20Acer%20Nitro%205%20AN515-52-51LW%20(NH.Q3LSV.002)/2.jpg" alt="Laptop Acer Nitro 5 AN515-52-51LW"></a></td>
                                        <td><a href="#">Laptop Acer Nitro 5 AN515-52-51LW</a></td>
                                        <td>1</td>
                                        <td>24.990.000đ</td>
                                        <td>2.000.000đ</td>
                                        <td>22.990.000đ</td>
                                    </tr>
                                    <tr>
                                        <td><a href="#"><img src="img_new/Acer/Predator%20series/Laptop%20Predator%20Triton%20500%20PT515-51-7391%20(NH.Q50SV.003)/1.jpg" alt="Laptop Acer Predator Triton 500 PT515-51-7391"></a></td>
                                        <td><a href="#">Laptop Acer Predator Triton 500 PT515-51-7391</a></td>
                                        <td>1</td>
                                        <td>49.990.000đ</td>
                                        <td>0đ</td>
                                        <td>49.990.000đ</td>
                                    </tr>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th colspan="5">Tổng cộng</th>
                                        <th colspan="2">72.980.000đ</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.table-responsive-->
                        </div>
                        <!-- /.content-->
                        <div class="box-footer d-flex justify-content-between"><a href="{{route('checkout3.get')}}" class="btn btn-outline-secondary"><i class="fa fa-chevron-left"></i>Quay về phương thức giao hàng</a>
                            <button class="btn btn-primary" >Thanh toán<i class="fa fa-chevron-right"></i></button>
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
                                    <th>72.980.000đ</th>
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
                                    <th>73.000.000đ</th>
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
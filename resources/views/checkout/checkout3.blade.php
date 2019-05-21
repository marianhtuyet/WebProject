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
                    <form method="get" action="{{route('trangchu.index')}}">
                        {{--{{csrf_field()}}--}}
                        <h1>Thanh toán - Review đơn hàng</h1>
                        <div class="nav flex-column flex-sm-row nav-pills"><a href="{{route('checkout1.get')}}"
                                                                              class="nav-link flex-sm-fill text-sm-center">
                                <i class="fa fa-map-marker">
                                </i>Địa chỉ</a><a href="{{route('checkout2.get')}}"
                                                  class="nav-link flex-sm-fill text-sm-center"> <i class="fa fa-truck">
                                </i>Phương thức giao hàng</a><a href="{{route('checkout3.get')}}"
                                                                class="nav-link flex-sm-fill text-sm-center active"> <i
                                        class="fa fa-eye">
                                </i>Review đơn hàng</a></div>
                        <div class="content">
                            <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                        <th colspan="2">Product</th>
                                        <th>Quantity</th>
                                        <th>Unit price</th>
                                        <th >Total</th>
                                    </tr>
                                    <?php $total = 0?>
                                    @foreach ($_SESSION["shopping_cart"] as $keys => $value)
                                        <tr>
                                            <input type="hidden" value="{{$keys}}" class="rowid">
                                            <td><img src="assets/img/{{$value["item_img"]}}_1.jpg"
                                                     alt="null"></td>
                                            <td>{{$value["item_name"]}}</td>
                                            <td>
                                                <input name="quality" type="number" value="{{($value["item_quality"])}}"
                                                       class="form-control">
                                            </td>
                                            <td class="item_cost">
                                                {{number_format($value["item_cost"],0)}}
                                                vnd
                                            </td>
                                            <input type="hidden" class="item_cost_val" value="{{$value["item_cost"]}}">
                                            <td class="total">{{number_format($value["item_quality"] * $value["item_cost"], 0)}}
                                                vnd
                                            </td>
                                            <input type="hidden"
                                                   value="{{$value["item_quality"] * $value["item_cost"]}}"
                                                   class="total_val" name="total_val">

                                        </tr>
                                        <?php $total = $total + ($value["item_quality"] * $value["item_cost"]);
                                        ?>
                                    @endforeach

                                    <tr>
                                        <td colspan="4" align="right">Total</td>
                                        <td class="grand_total">
                                            {{number_format($total, 0)}} vnd
                                        </td>
                                        <input type="hidden" name="grand_total" class="grand_total_val"
                                               value=" {{$total}}">
                                    </tr>
                                </table>
                            </div>
                            <!-- /.table-responsive-->
                        </div>
                        <!-- /.content-->
                        <div class="box-footer d-flex justify-content-between"><a href="{{route('checkout2.get')}}"
                                                                                  class="btn btn-outline-secondary"><i
                                        class="fa fa-chevron-left"></i>Quay về phương thức giao hàng</a>
                            <button class="btn btn-primary"><a href="{{route('trangchu.index')}}"></a>Thanh toán<i class="fa fa-chevron-right"></i></button>
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
                                    <th>{{$total}}</th>
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
                                    <th>{{$total + 20000}}</th>
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
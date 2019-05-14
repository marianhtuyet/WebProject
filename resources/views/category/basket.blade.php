@extends('layout.index')
@section('title')

@endsection
@section('style')

@endsection
@section('content')

    <div class="container">
        <div class="row">
            <div id="basket" class="col-lg-9">
                <div class="box">
                    <form method="post" action="{{route('checkout1.get')}}">
                        {{csrf_field()}}
                        <h1>Shopping cart</h1>
                        @if(!empty($_SESSION["shopping_cart"]))
                        <p class="text-muted">You currently have <?php echo count($_SESSION["shopping_cart"])?> item(s) in your cart.</p>
                        @endif
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th colspan="2">Product</th>
                                    <th>Quantity</th>
                                    <th>Unit price</th>
                                    <th colspan="2">Total</th>
                                </tr>
                                @if(!empty($_SESSION["shopping_cart"]))
                               <?php $total = 0; ?>
                                @foreach ($_SESSION["shopping_cart"] as $keys => $value)
                                <tr>
                                    <td><img src="assets/img/{{$value["item_img"]}}_1.jpg"
                                    alt="null"></td>
                                    <td>{{$value["item_name"]}}</td>
                                    <td>
                                    <input name="quality" type="number" value="{{($value["item_quality"])}}" class="form-control" onchange="ChangeQuality(this.value)">
                                    </td>
                                    <td>{{number_format($value["item_cost"],0)}} vnd</td>
                                    <td>{{number_format($value["item_quality"] * $value["item_cost"], 0)}} vnd</td>
                                    <td><a href="{{route('basket.remove', [$value["item_id"]])}}"><i class="fa fa-trash-o"></i></a></td>
                                </tr>
                                    <?php $total=$total + ($value["item_quality"] * $value["item_cost"]);
                                    ?>
                                   @endforeach

                            <tr>
                                <td colspan="4" align="right">Total</td>
                                <td colspan="2" >
                                    <input name="total" id="total" value=" {{number_format($total, 0)}}">
                                    {{number_format($total, 0)}} vnd </td>

                            </tr>
                                @endif
                            </table>
                        </div>
                        <!-- /.table-responsive-->
                        <div class="box-footer d-flex justify-content-between flex-column flex-lg-row">
                            <div class="left"><a href="{{route('acer.category_acer_nitro')}}" class="btn btn-outline-secondary"><i
                                            class="fa fa-chevron-left"></i> Continue shopping</a></div>
                            <div class="right">
                                <button  class="btn btn-outline-secondary"><i class="fa fa-refresh"></i> Update cart
                                </button>
                                <button type="submit" class="btn btn-primary">Proceed to checkout <i
                                            class="fa fa-chevron-right"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.box-->

            </div>

        </div>
    </div>
    </div>




@endsection
@section('script-ori')
    {{--<-- co footer va cac thu vien js--}}
    {{--<script>--}}
        {{--function ChangeQuality(value)--}}
        {{--{--}}
            {{--var _quality= $("input[name='quality']").val();--}}

            {{--$("input[name'total']").val=--}}
            {{--// lay gia tri cua input--}}
            {{--$.ajax({--}}
                    {{--url: "{{route('basket.updatecard')}}",--}}
                {{--type: "GET",--}}
                {{--dataType: "json",--}}
                {{--data: {"quality": _quality, "key": value},--}}
                {{--success: function (data) {--}}
                    {{--$("#quality").html(data);--}}
                {{--}--}}
            {{--})--}}
        {{--}--}}
    {{--</script>--}}

    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.cookie/jquery.cookie.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.js"></script>
    <script src="assets/js/front.js"></script>
@endsection
@extends('layout.index')
@section('title')

@endsection
@section('style')

@endsection
@section('content')

    <div class="container">
        <div class="row">
            <div id="basket" class="col-lg-12">
                <div class="box">
                    {{--<form method="get" action="{{route('checkout1.get')}}">--}}
{{--                        {{csrf_field()}}--}}
                        <h1>Shopping cart</h1>
                        <?php $total = 0; ?>
                        @if(!empty($_SESSION["shopping_cart"]))
                            <p class="text-muted">You currently have <?php echo count($_SESSION["shopping_cart"])?>
                                item(s) in your cart.</p>

                            <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                        <th colspan="2">Product</th>
                                        <th>Quantity</th>
                                        <th>Unit price</th>
                                        <th colspan="2">Total</th>
                                    </tr>

                                    @foreach ($_SESSION["shopping_cart"] as $keys => $value)
                                        <tr>
                                            <input type="hidden" value="{{$keys}}" class="rowid">
                                            <td><img src="assets/img/{{$value["item_img"]}}_1.jpg"
                                                     alt="null"></td>
                                            <td>{{$value["item_name"]}}</td>
                                            <td>
                                                <input name="quality" type="number" value="{{($value["item_quality"])}}"
                                                       class="form-control" onchange="ChangeQuality(this)">
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
                                            <td><a href="{{route('basket.remove', [$value["item_id"]])}}"><i
                                                            class="fa fa-trash-o"></i></a></td>
                                        </tr>
                                        <?php $total = $total + ($value["item_quality"] * $value["item_cost"]);
                                        ?>
                                    @endforeach

                                    <tr>
                                        <td colspan="4" align="right">Total</td>
                                        <td colspzn="2" class="grand_total">
                                            {{number_format($total, 0)}} vnd
                                        </td>
                                        <input type="hidden" name="grand_total" class="grand_total_val"
                                               value=" {{$total}}">
                                    </tr>
                                    @endif
                                </table>
                            </div>
                            <!-- /.table-responsive-->
                            <div class="box-footer d-flex justify-content-between flex-column flex-lg-row">
                                <div class="left"><a href="{{route('acer.category_acer_nitro')}}"
                                                     class="btn btn-outline-secondary"><i
                                                class="fa fa-chevron-left"></i> Continue shopping</a></div>
                                <div class="right">
                                    <a href="{{route('basket.get')}}" class="btn btn-outline-secondary"><i class="fa fa-refresh"></i> Update cart
                                    </a>
                                    <a href="{{route('checkout1.get', [$total])}}" class="btn btn-primary">Proceed to checkout <i
                                                class="fa fa-chevron-right"></i></a>
                                </div>
                            </div>
                    {{--</form>--}}
                </div>

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

    <script>
        $(document).ready(function () {
            // $('input[name="quality"]').change(function () {
            //     changeQuality();
            // })
        });

        function ChangeQuality(obj) {
            let objtable = $(obj).parent().parent(); //ra toi <tr>
            let old_total = objtable.find(".total_val").val();
            let qty = obj.value;
            // console.log(qty);
            let item_cost = objtable.find(".item_cost_val").val();
            let total = parseInt(item_cost) * 1 * qty;
            // console.log(total);
            objtable.find(".total_val").val(total);
            objtable.find(".total").html(formatMoney(total));
            let rowid = objtable.find(".rowid").val();
            // console.log(rowid);
            let grand_total = 0;
            grand_total = parseInt(objtable.parent().find(".grand_total_val").val()) + total - old_total;
            // console.log(grand_total);
            objtable.parent().find(".grand_total_val").val(grand_total); //ra table
            objtable.parent().find(".grand_total").html(formatMoney(grand_total));

            // ajax
            $.ajax({
                url:"{{route('checkout.save')}}",
                type: 'GET',
                async: true,
                data:  {"_quality":qty, "_key": rowid, "_grand_total": grand_total},
                success: function (data) {
                    console.log(data);
                }

            });

        }
    </script>
@endsection
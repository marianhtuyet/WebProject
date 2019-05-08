@extends('layout.index')
@section('title')

@endsection
@section('style')
@endsection
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-3 order-2 order-lg-1">
                @include('layout.menu')
            </div>
            <div class="col-lg-9 order-1 order-lg-2">
                <div id="productMain" class="row">
                    <div class="col-md-6">
                        <div data-slider-id="1" class="owl-carousel shop-detail-carousel">

                            @for($i=1; $i<4;  $i++)

                            <div class="item"> <img src='assets/img/{{$detail->id_product}}_{{$detail->id_type}}_<?php echo $i?>.jpg' alt="" class="img-fluid" style="height: 350px;"></div>
                            @endfor

                            {{--<div class="item"> <img src="img/detailbig2.jpg" alt="" class="img-fluid"></div>--}}
                            {{--<div class="item"> <img src="img/detailbig3.jpg" alt="" class="img-fluid"></div>--}}
                        </div>
                        <div class="ribbon sale">
                            <div class="theribbon">SALE</div>
                            <div class="ribbon-background"></div>
                        </div>
                        <!-- /.ribbon-->
                        <div class="ribbon new">
                            <div class="theribbon">NEW</div>
                            <div class="ribbon-background"></div>
                        </div>
                        <!-- /.ribbon-->
                        <div data-slider-id="1" class="owl-thumbs">
                            @for($i=1; $i<4;  $i++)
                                <button class="owl-thumb-item"><img src="assets/img/{{$detail->id_product}}_{{$detail->id_type}}_<?php echo $i?>.jpg" alt="" class="img-fluid"></button>
                            @endfor
                            {{--<button class="owl-thumb-item"><img src="img/detailsquare.jpg" alt="" class="img-fluid"></button>--}}
                            {{--<button class="owl-thumb-item"><img src="img/detailsquare2.jpg" alt="" class="img-fluid"></button>--}}
                            {{--<button class="owl-thumb-item"><img src="img/detailsquare3.jpg" alt="" class="img-fluid"></button>--}}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="box">
                            <h3 class="text-center">{{$detail->name}}</h3>
                            <p class="goToDescription"><a href="#details" class="scroll-to">Scroll to product details, material &amp; care and sizing</a></p>
                            <p class="price">{{$detail->cost}}</p>
                            <p class="text-center buttons"><a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add to cart</a><a href="basket.html" class="btn btn-outline-primary"><i class="fa fa-heart"></i> Add to wishlist</a></p>
                        </div>

                    </div>
                </div>
                <div id="details" class="box">
                    {!! $detail->description !!}

                        <!-- /.product-->
                    </div>
                    {{--<div class="col-md-3 col-sm-6">--}}
                        {{--<div class="product same-height">--}}
                            {{--<div class="flip-container">--}}
                                {{--<div class="flipper">--}}
                                    {{--<div class="front"><a href="detail.html"><img src="img/product1.jpg" alt="" class="img-fluid"></a></div>--}}
                                    {{--<div class="back"><a href="detail.html"><img src="img/product1_2.jpg" alt="" class="img-fluid"></a></div>--}}
                                {{--</div>--}}
                            {{--</div><a href="detail.html" class="invisible"><img src="img/product1.jpg" alt="" class="img-fluid"></a>--}}
                            {{--<div class="text">--}}
                                {{--<h3>Fur coat</h3>--}}
                                {{--<p class="price">$143</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- /.product-->--}}
                    {{--</div>--}}
                    {{--<div class="col-md-3 col-sm-6">--}}
                        {{--<div class="product same-height">--}}
                            {{--<div class="flip-container">--}}
                                {{--<div class="flipper">--}}
                                    {{--<div class="front"><a href="detail.html"><img src="img/product3.jpg" alt="" class="img-fluid"></a></div>--}}
                                    {{--<div class="back"><a href="detail.html"><img src="img/product3_2.jpg" alt="" class="img-fluid"></a></div>--}}
                                {{--</div>--}}
                            {{--</div><a href="detail.html" class="invisible"><img src="img/product3.jpg" alt="" class="img-fluid"></a>--}}
                            {{--<div class="text">--}}
                                {{--<h3>Fur coat</h3>--}}
                                {{--<p class="price">$143</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- /.product-->--}}
                    {{--</div>--}}
                </div>
                {{--<div class="row same-height-row">--}}
                    {{--<div class="col-md-3 col-sm-6">--}}
                        {{--<div class="box same-height">--}}
                            {{--<h3>Products viewed recently</h3>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-3 col-sm-6">--}}
                        {{--<div class="product same-height">--}}
                            {{--<div class="flip-container">--}}
                                {{--<div class="flipper">--}}
                                    {{--<div class="front"><a href="detail.html"><img src="img/product2.jpg" alt="" class="img-fluid"></a></div>--}}
                                    {{--<div class="back"><a href="detail.html"><img src="img/product2_2.jpg" alt="" class="img-fluid"></a></div>--}}
                                {{--</div>--}}
                            {{--</div><a href="detail.html" class="invisible"><img src="img/product2.jpg" alt="" class="img-fluid"></a>--}}
                            {{--<div class="text">--}}
                                {{--<h3>Fur coat</h3>--}}
                                {{--<p class="price">$143</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- /.product-->--}}
                    {{--</div>--}}
                    {{--<div class="col-md-3 col-sm-6">--}}
                        {{--<div class="product same-height">--}}
                            {{--<div class="flip-container">--}}
                                {{--<div class="flipper">--}}
                                    {{--<div class="front"><a href="detail.html"><img src="img/product1.jpg" alt="" class="img-fluid"></a></div>--}}
                                    {{--<div class="back"><a href="detail.html"><img src="img/product1_2.jpg" alt="" class="img-fluid"></a></div>--}}
                                {{--</div>--}}
                            {{--</div><a href="detail.html" class="invisible"><img src="img/product1.jpg" alt="" class="img-fluid"></a>--}}
                            {{--<div class="text">--}}
                                {{--<h3>Fur coat</h3>--}}
                                {{--<p class="price">$143</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- /.product-->--}}
                    {{--</div>--}}
                    {{--<div class="col-md-3 col-sm-6">--}}
                        {{--<div class="product same-height">--}}
                            {{--<div class="flip-container">--}}
                                {{--<div class="flipper">--}}
                                    {{--<div class="front"><a href="detail.html"><img src="img/product3.jpg" alt="" class="img-fluid"></a></div>--}}
                                    {{--<div class="back"><a href="detail.html"><img src="img/product3_2.jpg" alt="" class="img-fluid"></a></div>--}}
                                {{--</div>--}}
                            {{--</div><a href="detail.html" class="invisible"><img src="img/product3.jpg" alt="" class="img-fluid"></a>--}}
                            {{--<div class="text">--}}
                                {{--<h3>Fur coat</h3>--}}
                                {{--<p class="price">$143</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- /.product-->--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>
        </div>
    </div>




@endsection
@section('script-ori')
    {{--<-- co footer va cac thu vien js--}}


    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.cookie/jquery.cookie.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.js"></script>
    <script src="assets/js/front.js"></script>
@endsection

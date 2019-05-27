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
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="box">

                            <h3 class="text-center">{{$detail->name}}</h3>
                            <p class="goToDescription"><a href="#details" class="scroll-to">Kéo xuống để xem thông tin chi tiết sản phẩm hoặc nhấp tại đây!</a></p>
                            <p class="price">{{number_format($detail->cost, 0)}}đ</p>


                            <p class="text-center buttons">
                                <a name="add_to_cart" href="{{route('category.basket', [$detail->id])}}" class="btn btn-primary">
                                    <i class="fa fa-shopping-cart"></i>
                                    Add to cart
                                </a>
                                <a href="basket.html" class="btn btn-outline-primary">
                                    <i class="fa fa-heart"></i> Add to wishlist
                                </a>
                            </p>

                        </div>

                    </div>
                </div>
                <div id="details" class="box">
                    {{--mo ta san pham--}}
                    {!! $detail->description !!}

                    </div>

                </div>

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

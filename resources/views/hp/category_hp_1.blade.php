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
                        <li aria-current="page" class="breadcrumb-item active">HP</li>
                    </ol>
                </nav>
            </div>
            @include('layout.menu')

            <div class="col-lg-9">
                <div class="box">
                    <h1>Laptop HP 14/15</h1>
                </div>

                <div class="row products">

                    <!--                        --><?php //$list_product = \App\Http\Controllers\AcerController::getListAcer($value->id_product)?>
                    @foreach($product as $key=>$value)
                        <div class="col-lg-4 col-md-6">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front"><a href="{{route('category.detail', [$value->id])}}"><img
                                                        src="assets/img/{{$value->id_product}}_{{$key+1}}_1.jpg"
                                                        alt="{{$value->id_product}}_{{$key+1}}" class="img-fluid"></a></div>
                                        <div class="back"><a href="{{route('category.detail', [$value->id])}}"><img
                                                        src="assets/img/{{$value->id_product}}_{{$key+1}}_2.jpg"
                                                        alt="{{$value->id_product}}_{{$key+1}}" class="img-fluid"></a></div>
                                    </div>
                                </div>
                                <a href="{{route('category.detail', [$value->id])}}" class="invisible"><img src="assets/img/{{$value->id_product}}_{{$key+1}}_1.jpg"
                                                                                                            alt=""   class="img-fluid"></a>
                                <div class="text">
                                    <h3><a href="{{route('category.detail', [$value->id])}}">{{$value->name}}</a></h3>
                                    <p class="price">
                                        {{--<del>$value->cost đ</del>--}}
                                        {{number_format($value->cost, 0)}}đ
                                    </p>
                                    <p class="buttons"><a href="{{route('category.detail', [$value->id])}}"
                                                          class="btn btn-outline-secondary">View detail</a><a
                                                href="{{route('category.basket', [$value->id])}}" class="btn btn-primary"><i
                                                    class="fa fa-shopping-cart"></i>Add to cart</a></p>
                                </div>
                                <!-- /.text-->
                                <div class="ribbon sale">
                                    <div class="theribbon">SALE</div>
                                    <div class="ribbon-background"></div>
                                </div>
                            </div>
                            <div class="ribbon new">
                                <div class="theribbon">NEW</div>
                                <div class="ribbon-background"></div>
                            </div>
                            <!-- /.ribbon-->
                            <div class="ribbon gift">
                                <div class="theribbon">GIFT</div>
                                <div class="ribbon-background"></div>
                            </div>
                            <!-- /.product            -->


                        </div>
                    @endforeach
                </div> <!-- end Row-product-->
                <!-- /.products-->

                <div class="pages">
                    {{--<p class="loadMore"><a href="#" class="btn btn-primary btn-lg"><i class="fa fa-chevron-down"></i>--}}
                            {{--Load more</a></p>--}}
                    <nav aria-label="Page navigation example" class="d-flex justify-content-center">
                        <ul class="pagination">
                            <li class="page-item"><a href="#" aria-label="Previous" class="page-link"><span
                                            aria-hidden="true">«</span><span class="sr-only">Previous</span></a></li>
                            <li class="page-item active"><a href="#" class="page-link">1</a></li>
                            <li class="page-item"><a href="#" class="page-link">2</a></li>
                            <li class="page-item"><a href="#" class="page-link">3</a></li>
                            <li class="page-item"><a href="#" class="page-link">4</a></li>
                            <li class="page-item"><a href="#" class="page-link">5</a></li>
                            <li class="page-item"><a href="#" aria-label="Next" class="page-link"><span
                                            aria-hidden="true">»</span><span class="sr-only">Next</span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /.col-lg-9-->
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
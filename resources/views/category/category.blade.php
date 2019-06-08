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
                        <li aria-current="page" class="breadcrumb-item active">Acer</li>
                    </ol>
                </nav>
            </div>
            <div class="col-lg-3">
                <!--
                *** MENUS AND FILTERS ***
                _________________________________________________________
                -->
                <div class="card sidebar-menu mb-4">
                    <div class="card-header">
                        <h3 class="h4 card-title">Danh mục</h3>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-pills flex-column category-menu">
                            <li><a href="category/category" class="nav-link active">Laptop Acer</a>
                                <ul class="list-unstyled">
                                    <li><a href="category/category_acer_nitro" class="nav-link">Nitro series</a></li>
                                    <li><a href="category/category_acer_prefator" class="nav-link">Predator series</a>
                                    </li>
                                    <li><a href="category/category_acer_swift" class="nav-link">Swift series</a></li>
                                </ul>
                            </li>
                            <li><a href="category/category" class="nav-link ">Laptop Asus</a>
                                <ul class="list-unstyled">
                                    <li><a href="category.html" class="nav-link">ROG series</a></li>
                                    <li><a href="category.html" class="nav-link">FX_TUF series</a></li>
                                    <li><a href="category.html" class="nav-link">Vivobook series</a></li>
                                </ul>
                            </li>
                            <li><a href="category-Dell.html" class="nav-link">Laptop Dell</a>
                                <ul class="list-unstyled">
                                    <li><a href="category-Dell-Inspiron.html" class="nav-link">Inspiron series</a></li>
                                    <li><a href="category-Dell-Vostro.html" class="nav-link">Vostro series</a></li>
                                </ul>
                            </li>
                            <li><a href="category.html" class="nav-link">Laptop HP</a>
                                <ul class="list-unstyled">
                                    <li><a href="category.html" class="nav-link">Probook series</a></li>
                                    <li><a href="category.html" class="nav-link">Pavilion series</a></li>
                                    <li><a href="category.html" class="nav-link">14/15 series</a></li>
                                </ul>
                            </li>
                            <li><a href="category.html" class="nav-link">Laptop Lenovo</a>
                                <ul class="list-unstyled">
                                    <li><a href="category.html" class="nav-link">Legion series</a></li>
                                    <li><a href="category.html" class="nav-link">Thinkpad series</a></li>
                                    <li><a href="category.html" class="nav-link">Ideapad series</a></li>
                                </ul>
                            </li>
                            <li><a href="category.html" class="nav-link">Macbook</a>
                                <ul class="list-unstyled">
                                    <li><a href="category.html" class="nav-link">Macbook series</a></li>
                                    <li><a href="category.html" class="nav-link">Macbook Pro series</a></li>
                                    <li><a href="category.html" class="nav-link">Macbook Air series</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- *** MENUS AND FILTERS END ***-->
                <!--<div class="banner"><a href="#"><img src="img/banner.jpg" alt="sales 2014" class="img-fluid"></a></div>-->
            </div>
            <div class="col-lg-9">
                <div class="box">
                    <h1>Laptop Acer</h1>
                </div>

                <div class="row products">
                    <div class="col-lg-4 col-md-6">
                        <div class="product">
                            <div class="flip-container">
                                <div class="flipper">
                                    <div class="front"><a href="Acer_Nitro_5_AN515_52_51GF.html"><img
                                                    src="img_new/Acer/Nitro%20series/Laptop%20Acer%20Nitro%205%20AN515-52-51LW%20(NH.Q3LSV.002)/1.jpg"
                                                    alt="" class="img-fluid"></a></div>
                                    <div class="back"><a href="Acer_Nitro_5_AN515_52_51GF.html"><img
                                                    src="img_new/Acer/Nitro%20series/Laptop%20Acer%20Nitro%205%20AN515-52-51LW%20(NH.Q3LSV.002)/2.jpg"
                                                    alt="" class="img-fluid"></a></div>
                                </div>
                            </div>
                            <a href="Acer_Nitro_5_AN515_52_51GF.html" class="invisible"><img src="img/product1.jpg"
                                                                                             alt=""
                                                                                             class="img-fluid"></a>
                            <div class="text">
                                <h3><a href="Acer_Nitro_5_AN515_52_51GF.html">Laptop Acer Nitro 5 AN515-52-51LW
                                        (NH.Q3LSV.002)</a></h3>
                                <p class="price">
                                    <del>24.990.000đ</del>
                                    22.990.000đ
                                </p>
                                <p class="buttons"><a href="Acer_Nitro_5_AN515_52_51GF.html"
                                                      class="btn btn-outline-secondary">View detail</a><a
                                            href="basket.html" class="btn btn-primary"><i
                                                class="fa fa-shopping-cart"></i>Add to cart</a></p>
                            </div>
                            <!-- /.text-->
                            <div class="ribbon sale">
                                <div class="theribbon">SALE</div>
                                <div class="ribbon-background"></div>
                            </div>
                        </div>
                        <!-- /.ribbon-->
                        <div class="ribbon gift">
                            <div class="theribbon">GIFT</div>
                            <div class="ribbon-background"></div>
                        </div>
                        <!-- /.product            -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="product">
                            <div class="flip-container">
                                <div class="flipper">
                                    <div class="front"><a href="Acer_Predator_Triton_500_PT515_51_7391.html"><img
                                                    src="img_new/Acer/Predator%20series/Laptop%20Predator%20Triton%20500%20PT515-51-7391%20(NH.Q50SV.003)/1.jpg"
                                                    alt="" class="img-fluid"></a></div>
                                    <div class="back"><a href="Acer_Predator_Triton_500_PT515_51_7391.html"><img
                                                    src="img_new/Acer/Predator%20series/Laptop%20Predator%20Triton%20500%20PT515-51-7391%20(NH.Q50SV.003)/1.jpg"
                                                    alt="" class="img-fluid"></a></div>
                                </div>
                            </div>
                            <a href="Acer_Predator_Triton_500_PT515_51_7391.html" class="invisible"><img
                                        src="img/product2.jpg" alt="" class="img-fluid"></a>
                            <div class="text">
                                <h3><a href="Acer_Predator_Triton_500_PT515_51_7391.html">Laptop Predator Triton 500
                                        PT515-51-7391 (NH.Q50SV.003)</a></h3>
                                <p class="price">
                                    <del></del>
                                    49.990.000đ
                                </p>
                                <p class="buttons"><a href="Acer_Predator_Triton_500_PT515_51_7391.html"
                                                      class="btn btn-outline-secondary">View detail</a><a
                                            href="basket.html" class="btn btn-primary"><i
                                                class="fa fa-shopping-cart"></i>Add to cart</a></p>
                            </div>
                            <!-- /.text-->
                            <!-- /.ribbon-->
                            <div class="ribbon new">
                                <div class="theribbon">NEW</div>
                                <div class="ribbon-background"></div>
                            </div>
                            <!-- /.ribbon-->
                            <div class="ribbon gift">
                                <div class="theribbon">GIFT</div>
                                <div class="ribbon-background"></div>
                            </div>
                            <!-- /.ribbon-->
                        </div>
                        <!-- /.product            -->

                        <!-- /.product            -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="product">
                            <div class="flip-container">
                                <div class="flipper">
                                    <div class="front"><a href="Acer_Swift_5_SF514_53T_720R.html"><img
                                                    src="img_new/Acer/Swift%20series/Laptop%20Acer%20Swift%205%20SF514-53T-720R%20(NX.H7HSV.002)/1.jpg"
                                                    alt="" class="img-fluid"></a></div>
                                    <div class="back"><a href="Acer_Swift_5_SF514_53T_720R.html"><img
                                                    src="img_new/Acer/Swift%20series/Laptop%20Acer%20Swift%205%20SF514-53T-720R%20(NX.H7HSV.002)/1.jpg"
                                                    alt="" class="img-fluid"></a></div>
                                </div>
                            </div>
                            <a href="Acer_Swift_5_SF514_53T_720R.html" class="invisible"><img src="img/product2.jpg"
                                                                                              alt="" class="img-fluid"></a>
                            <div class="text">
                                <h3><a href="Acer_Swift_5_SF514_53T_720R.html">Laptop Acer Swift 5 SF514-53T-720R
                                        (NX.H7HSV.002)</a></h3>
                                <p class="price">
                                    <del>29.990.000đ</del>
                                    28.990.000đ
                                </p>
                                <p class="buttons"><a href="Acer_Swift_5_SF514_53T_720R.html"
                                                      class="btn btn-outline-secondary">View detail</a><a
                                            href="basket.html" class="btn btn-primary"><i
                                                class="fa fa-shopping-cart"></i>Add to cart</a></p>
                            </div>
                            <!-- /.text-->
                            <!-- /.ribbon-->
                            <div class="ribbon new">
                                <div class="theribbon">NEW</div>
                                <div class="ribbon-background"></div>
                            </div>
                            <!-- /.ribbon-->
                            <div class="ribbon sale">
                                <div class="theribbon">SALE</div>
                                <div class="ribbon-background"></div>
                            </div>
                        </div>
                        <!-- /.ribbon-->
                    </div>
                    <!-- /.product            -->

                </div> <!-- end Row-product-->


                <!-- /.products-->

                <div class="pages">
                    <nav aria-label="Page navigation example" class="d-flex justify-content-center">
                        <ul class="pagination">
                            <li class="page-item"><a href="#" aria-label="Previous" class="page-link"><span
                                            aria-hidden="true">«</span><span class="sr-only">Trước</span></a></li>
                            <li class="page-item active"><a href="#" class="page-link">1</a></li>
                            <li class="page-item"><a href="#" class="page-link">2</a></li>
                            <li class="page-item"><a href="#" class="page-link">3</a></li>
                            <li class="page-item"><a href="#" class="page-link">4</a></li>
                            <li class="page-item"><a href="#" class="page-link">5</a></li>
                            <li class="page-item"><a href="#" aria-label="Next" class="page-link"><span
                                            aria-hidden="true">»</span><span class="sr-only">Tiếp theo</span></a></li>
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
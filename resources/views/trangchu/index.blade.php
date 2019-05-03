@extends('layout.index')
@section('title')

@endsection
<!-- Bootstrap CSS-->
@section('style')
@endsection
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="main-slider" class="owl-carousel owl-theme">
                    <div class="item"><img src="assets/img_new/banner1.png" alt="" class="img-fluid"></div>
                    <div class="item"><img src="assets/img_new/banner2.png" alt="" class="img-fluid"></div>
                    <div class="item"><img src="assets/img_new/banner3.png" alt="" class="img-fluid"></div>
                    <!-- img-fluid tùy chỉnh ảnh sao cho hợp với body web -->
                </div>
                <!-- /#main-slider-->
                <!-- img-fluid giúp hình ảnh tùy chỉnh kích cỡ theo slide theo trang web-->
            </div>
        </div>
    </div>
    <!--
    *** ADVANTAGES HOMEPAGE ***
    _________________________________________________________
    -->
    <div id="advantages">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-4">
                    <div class="box clickable d-flex flex-column justify-content-center mb-0 h-100">
                        <!-- d-flex flex-column giúp chỉnh kích thước box theo độ dài đoạn text -->
                        <div class="icon"><i class="fa fa-heart"></i></div>
                        <h3><a href="#">Quan tâm đến khách hàng</a></h3>
                        <p class="mb-0">Chúng tôi nổi tiếng với việc cung cấp các dịch vụ tốt nhất có thể.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box clickable d-flex flex-column justify-content-center mb-0 h-100">
                        <div class="icon"><i class="fa fa-tags"></i></div>
                        <h3><a href="#">Giá cả tốt nhất</a></h3>
                        <p class="mb-0">Chúng tôi mang lại giá cả hợp lý nhất có thể cho các bạn.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box clickable d-flex flex-column justify-content-center mb-0 h-100">
                        <div class="icon"><i class="fa fa-thumbs-up"></i></div>
                        <h3><a href="#">Đảm bảo sự hài lòng 100%</a></h3>
                        <p class="mb-0">Hoàn trả trong 3 tháng với tất cả mặt hàng bị lỗi.</p>
                    </div>
                </div>
            </div>
            <!-- /.row-->
        </div>
        <!-- /.container-->
    </div>
    <!-- /#advantages-->
    <!-- *** ADVANTAGES END ***-->
    <!--
    *** HOT PRODUCT SLIDESHOW ***
    _________________________________________________________
    -->
    <div id="hot">
        <div class="box py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="mb-0">Mặt hàng mua nhiều nhất trong tuần</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="product-slider owl-carousel owl-theme">
                <div class="item">
                    <div class="product">
                        <div class="flip-container">
                            <div class="flipper">
                                <div class="front"><a href="Acer_Nitro_5_AN515_52_51GF.html"><img
                                                src="assets/img/acer_1_1_1.jpg" alt="" class="img-fluid"></a></div>
                                <div class="back"><a href="Acer_Nitro_5_AN515_52_51GF.html"><img
                                                src="assets/img/acer_1_1_2.jpg" alt="" class="img-fluid"></a></div>
                                <!-- front - back: đặt 2 hình khi chỉ vào sẽ xoay -->
                            </div>
                        </div>
                        <a href="Acer_Nitro_5_AN515_52_51GF.html" class="invisible"><img src="assets/img/acer_1_1_1.jpg"
                                                                                         alt="" class="img-fluid"></a>
                        <div class="text">
                            <h3><a href="Acer_Nitro_5_AN515_52_51GF.html">Laptop Asus TUF Gaming FX505GM-BN117T</a></h3>
                            <p class="price">
                                <del></del>
                                28.490.000đ
                                <!-- <del> gạch ngang và làm mờ chữ -->
                            </p>
                        </div>
                        <!-- /.text-->
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
                        <div class="ribbon gift">
                            <div class="theribbon">GIFT</div>
                            <div class="ribbon-background"></div>
                        </div>
                        <!-- /.ribbon-->
                    </div>
                    <!-- /.product-->
                </div>
                <div class="item">
                    <div class="product">
                        <div class="flip-container">
                            <div class="flipper">
                                <div class="front"><a href="Acer_Nitro_5_AN515_52_51GF.html"><img
                                                src="assets/img/acer_2_1_1.jpg" alt="" class="img-fluid"></a></div>
                                <div class="back"><a href="Acer_Nitro_5_AN515_52_51GF.html"><img
                                                src="assets/img/acer_2_1_2.jpg" alt="" class="img-fluid"></a></div>
                            </div>
                        </div>
                        <a href="Acer_Nitro_5_AN515_52_51GF.html" class="invisible"><img src="assets/img/acer_2_1_2.jpg"
                                                                                         alt="" class="img-fluid"></a>
                        <div class="text">
                            <h3><a href="Acer_Nitro_5_AN515_52_51GF.html">Laptop Asus GL703GE-EE047T (I7-8750H)</a></h3>
                            <p class="price">
                                <del>30.990.000</del>
                                <br></br>29.990.000đ
                            </p>
                        </div>
                        <!-- /.text-->
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
                        <div class="ribbon gift">
                            <div class="theribbon">GIFT</div>
                            <div class="ribbon-background"></div>
                        </div>
                        <!-- /.ribbon-->
                    </div>
                    <!-- /.product-->
                </div>
                <div class="item">
                    <div class="product">
                        <div class="flip-container">
                            <div class="flipper">
                                <div class="front"><a href="Acer_Nitro_5_AN515_52_51GF.html"><img
                                                src="assets/img/acer_3_1_1.jpg" alt="" class="img-fluid"></a></div>
                                <div class="back"><a href="Acer_Nitro_5_AN515_52_51GF.html"><img
                                                src="assets/img/acer_3_1_2.jpg" alt="" class="img-fluid"></a></div>
                            </div>
                        </div>
                        <a href="Acer_Nitro_5_AN515_52_51GF.html" class="invisible"><img src="assets/img/acer_3_1_2.jpg"
                                                                                         alt="" class="img-fluid"></a>
                        <div class="text">
                            <h3><a href="Acer_Nitro_5_AN515_52_51GF.html">Laptop Acer Nitro 5 AN515-52-51GF
                                    (NH.Q3MSV.001)</a></h3>
                            <p class="price">
                                <del></del>
                                18.699.000đ
                            </p>
                        </div>
                        <!-- /.text-->
                    </div>
                    <!-- /.product-->
                </div>

                <div class="item">
                    <div class="product">
                        <div class="flip-container">
                            <div class="flipper">
                                <div class="front"><a href="Acer_Nitro_5_AN515_52_51GF.html"><img
                                                src="assets/img/acer_3_1_1.jpg" alt="" class="img-fluid"></a></div>
                                <div class="back"><a href="Acer_Nitro_5_AN515_52_51GF.html"><img
                                                src="assets/img/acer_3_1_2.jpg" alt="" class="img-fluid"></a></div>
                            </div>
                        </div>
                        <a href="Acer_Nitro_5_AN515_52_51GF.html" class="invisible"><img src="assets/img/acer_3_1_2.jpg"
                                                                                         alt="" class="img-fluid"></a>
                        <div class="text">
                            <h3><a href="Acer_Nitro_5_AN515_52_51GF.html">Laptop Acer Nitro 5 AN515-52-51GF
                                    (NH.Q3MSV.001)</a></h3>
                            <p class="price">
                                <del></del>
                                18.699.000đ
                            </p>
                        </div>
                        <!-- /.text-->
                    </div>
                    <!-- /.product-->
                </div>


                <div class="item">
                    <div class="product">
                        <div class="flip-container">
                            <div class="flipper">
                                <div class="front"><a href="Dell_Inspiron_5370_N3I3002W.html"><img src="#" alt=""
                                                                                                   class="img-fluid"></a>
                                </div>
                                <div class="back"><a href="Dell_Inspiron_5370_N3I3002W.html"><img
                                                src="img_new\New folder\LinhKien\CPU\Core i5\Bộ vi xử lý_ CPU Intel Core I5-8600 (3.1GHz - 4.3GHz _LGA 1151-v2) _ PhongVu.vn_files/2.jpg"
                                                alt="" class="img-fluid"></a></div>
                            </div>
                        </div>
                        <a href="Dell_Inspiron_5370_N3I3002W.html" class="invisible"><img src="img/product2.jpg" alt=""
                                                                                          class="img-fluid"></a>
                        <div class="text">
                            <h3><a href="Dell_Inspiron_5370_N3I3002W.html">Bộ vi xử lý_ CPU Intel Core I5-8600 (3.1GHz -
                                    4.3GHz _LGA 1151-v2)</a></h3>
                            <p class="price">
                                <del></del>
                                6.399.000đ
                            </p>
                        </div>
                        <!-- /.text-->
                        <div class="ribbon new">
                            <div class="theribbon">NEW</div>
                            <div class="ribbon-background"></div>
                        </div>
                        <!-- /.ribbon-->
                    </div>
                    <!-- /.product-->
                </div>
                <div class="item">
                    <div class="product">
                        <div class="flip-container">
                            <div class="flipper">
                                <div class="front"><a href="Dell_Inspiron_5370_N3I3002W.html"><img
                                                src="img_new\New folder\Laptop\Macbook\Laptop MacBook Pro 2018 13.3_ MR9R2_files/1.jpg"
                                                alt="" class="img-fluid"></a></div>
                                <div class="back"><a href="Dell_Inspiron_5370_N3I3002W.html"><img
                                                src="img_new\New folder\Laptop\Macbook\Laptop MacBook Pro 2018 13.3_ MR9R2_files/2.jpg"
                                                alt="" class="img-fluid"></a></div>
                            </div>
                        </div>
                        <a href="Dell_Inspiron_5370_N3I3002W.html" class="invisible"><img src="img/product1.jpg" alt=""
                                                                                          class="img-fluid"></a>
                        <div class="text">
                            <h3><a href="Dell_Inspiron_5370_N3I3002W.html">Macbook</a></h3>
                            <p class="price">
                                <del></del>
                                50.990.000đ
                            </p>
                        </div>
                        <!-- /.text-->
                        <div class="ribbon gift">
                            <div class="theribbon">GIFT</div>
                            <div class="ribbon-background"></div>
                        </div>
                        <!-- /.ribbon-->
                    </div>
                    <!-- /.product-->
                </div>
                <div class="item">
                    <div class="product">
                        <div class="flip-container">
                            <div class="flipper">
                                <div class="front"><a href="Dell_Inspiron_5370_N3I3002W.html"><img
                                                src="img_new\New folder\LinhKien\HDD_SSD\HDD\Ổ cứng HDD Western Digital Black 4TB 3.5_ SATA 3 - WD4005FZBX _ Phong Vũ_files/1.jpg"
                                                alt="" class="img-fluid"></a></div>
                                <div class="back"><a href="Dell_Inspiron_5370_N3I3002W.html"><img
                                                src="img_new\New folder\LinhKien\HDD_SSD\HDD\Ổ cứng HDD Western Digital Black 4TB 3.5_ SATA 3 - WD4005FZBX _ Phong Vũ_files/2.jpg"
                                                alt="" class="img-fluid"></a></div>
                            </div>
                        </div>
                        <a href="Dell_Inspiron_5370_N3I3002W.html" class="invisible"><img src="img/product2.jpg" alt=""
                                                                                          class="img-fluid"></a>
                        <div class="text">
                            <h3><a href="Dell_Inspiron_5370_N3I3002W.html">Ổ cứng HDD Western Digital Black 4TB 3.5_
                                    SATA 3 - WD4005FZBX</a></h3>
                            <p class="price">
                                <del>$280</del>
                                4.990.000đ
                            </p>
                        </div>
                        <!-- /.text-->
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
                        <div class="ribbon gift">
                            <div class="theribbon">GIFT</div>
                            <div class="ribbon-background"></div>
                        </div>
                        <!-- /.ribbon-->
                    </div>
                    <!-- /.product-->
                </div>
                <div class="item">
                    <div class="product">
                        <div class="flip-container">
                            <div class="flipper">
                                <div class="front"><a href="Dell_Inspiron_5370_N3I3002W.html"><img
                                                src="img_new\New folder\LinhKien\CardManHinh\GTX\Card màn hình ASUS GeForce GTX 1050Ti 4GB Cerberus OC _ PhongVu.vn_files/1.png"
                                                alt="" class="img-fluid"></a></div>
                                <div class="back"><a href="Dell_Inspiron_5370_N3I3002W.html"><img
                                                src="img_new\New folder\LinhKien\CardManHinh\GTX\Card màn hình ASUS GeForce GTX 1050Ti 4GB Cerberus OC _ PhongVu.vn_files/2.png"
                                                alt="" class="img-fluid"></a></div>
                            </div>
                        </div>
                        <a href="Dell_Inspiron_5370_N3I3002W.html" class="invisible"><img src="img/product3.jpg" alt=""
                                                                                          class="img-fluid"></a>
                        <div class="text">
                            <h3><a href="Dell_Inspiron_5370_N3I3002W.html">Card màn hình ASUS GeForce GTX 1050Ti 4GB
                                    Cerberus OCe</a></h3>
                            <p class="price">
                                <del></del>
                                4.660.000đ
                            </p>
                        </div>
                        <!-- /.text-->
                    </div>
                    <!-- /.product-->
                </div>
                <!-- /.product-slider-->
            </div>
            <!-- /.container-->
        </div>
        <!-- /#hot-->
        <!-- *** HOT END ***-->
    </div>
    <!--

@endsection
@section('script-ori')
    {{--<-- co footer va cac thu vien js--}}
@endsection


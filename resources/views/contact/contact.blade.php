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
                        <li aria-current="page" class="breadcrumb-item active">Liên hệ</li>
                    </ol>
                </nav>
            </div>
            <div class="col-lg-3">
                <!--
                *** PAGES MENU ***
                _________________________________________________________
                -->
                <div class="card sidebar-menu mb-4">
                    <div class="card-header">
                        <h3 class="h4 card-title">Trang</h3>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-pills flex-column">
                            <li><a href="{{route('contact.text')}}" class="nav-link">Giới thiệu</a></li>
                            <li><a href="{{route('contact.info')}}" class="nav-link">Liên hệ</a></li>
                            <li><a href="{{route('contact.faq')}}" class="nav-link">Những câu hỏi thường gặp</a></li>
                        </ul>
                    </div>
                </div>
                <!-- *** PAGES MENU END ***-->
                <div class="banner"><img src="assets/img_new/company4.jpg" alt="menu picture" class="img-thumbnail"></div>
            </div>
            <div class="col-lg-9">
                <div id="contact" class="box">
                    <h1>Liên hệ</h1>
                    <p class="lead">Muốn tìm hiểu về chúng tôi? Sản phẩm của bạn bị hư hỏng?</p>
                    <p>Liên hệ ngay với chúng tôi. Đội ngũ chăm sóc khách hàng của chúng tôi làm việc 24/7.</p>
                    <hr>
                    <div class="row">
                        <div class="col-md-4">
                            <h3><i class="fa fa-map-marker"></i>Địa chỉ</h3>
                            <p><strong>Đại học Công nghệ thông tin</strong><br>Đại học Quốc gia Tp Hồ Chí Minh<br>Khu phố 6, quận Thủ Đức<br>Thành phố Hồ Chí Minh<br><strong>Việt Nam</strong></p>
                        </div>
                        <!-- /.col-sm-4-->
                        <div class="col-md-4">
                            <h3><i class="fa fa-phone"></i> Call center</h3>
                            <p class="text-muted">Cuộc gọi trong nước không tính phí. Liên quốc gia có thể tính phí.</p>
                            <p><strong>+84 363 391 813</strong></p>
                        </div>
                        <!-- /.col-sm-4-->
                        <div class="col-md-4">
                            <h3><i class="fa fa-envelope"></i>Hỗ trợ online</h3>
                            <p class="text-muted">Đừng ngần ngại gửi mail cho chúng tôi để được hỗ trợ nhanh nhất.</p>
                            <p><strong><a href="mailto:">16521396@gm.uit.edu.vn</a></strong></p>
                        </div>
                        <!-- /.col-sm-4-->
                    </div>
                    <!-- /.row-->
                    <hr>

                    <div id="map1"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.229838296002!2d106.80136461411715!3d10.870115660431424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317527587e9ad5bf%3A0xafa66f9c8be3c91!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2jhu4cgVGjDtG5nIHRpbiDEkEhRRyBUUC5IQ00!5e0!3m2!1svi!2s!4v1555055267888!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <hr>
                    <h2>Form liên hệ</h2>
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="firstname">Họ</label>
                                    <input id="firstname" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="lastname">Tên</label>
                                    <input id="lastname" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="subject">Chủ đề</label>
                                    <input id="subject" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="message">Tin nhắn</label>
                                    <textarea id="message" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i>Gửi tin nhắn</button>
                            </div>
                        </div>
                        <!-- /.row-->
                    </form>
                </div>
            </div>
            <!-- /.col-md-9-->

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
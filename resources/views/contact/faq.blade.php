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
                        <li aria-current="page" class="breadcrumb-item active">Những câu hỏi thường gặp</li>
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
                <div class="banner"><img src="img_new/company4.jpg" alt="sales 2014" class="img-fluid"></div>
            </div>
            <div class="col-lg-9">
                <div id="contact" class="box">
                    <h1>Những câu hỏi thường gặp</h1>
                    <p class="lead">Bạn muốn tìm hiểu về chúng tôi? Sản phẩm của bạn bị hư hỏng?</p>
                    <p>Liên hệ ngay với chúng tôi. Tổ chăm sóc khách hàng của chúng tôi làm việc 24/7.</p>
                    <hr>
                    <div id="accordion">
                        <!-- accordion tạo 1 collapse group đổ dữ liệu ẩn xuống khi ta nhấn vào (collapse bootstrap) -->
                        <div class="card border-primary mb-3">
                            <div id="headingOne" class="card-header p-0 border-0">
                                <h4 class="mb-0"><a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="btn btn-primary d-block text-left rounded-0">1. Tôi phải làm gì nếu như vẫn chưa nhận được sản phẩm?</a></h4>
                                <!-- collapse giúp ta khi nhấn vào dòng chữ, nội dung ẩn sẽ hiện ra -->
                            </div>
                            <div id="collapseOne" aria-labelledby="headingOne" data-parent="#accordion" class="collapse show">
                                <div class="card-body">
                                    <p>Bạn hãy làm theo 1 trong những cách sau:</p>
                                    <ul>
                                        <li>Chờ thêm 1 khoảng thời gian.</li>
                                        <li>Liên hệ với tổ CSKH.</li>
                                        <li>Viết vào phần comment ở sản phẩm.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card border-primary mb-3">
                            <div id="headingTwo" class="card-header p-0 border-0">
                                <h4 class="mb-0"><a href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="btn btn-primary d-block text-left rounded-0">2. Nếu sản phẩm bị lỗi thì tôi phải làm gì?</a></h4>
                            </div>
                            <div id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordion" class="collapse">
                                <div class="card-body">
                                    <p>Vui lòng làm theo những bước sau:</p>
                                    <ul>
                                        <li>Gọi điện cho tổ CSKH.</li>
                                        <li>Thông báo về sản phẩm bị lỗi.</li>
                                        <li>Chờ nhân viên đến đổi trả sản phẩm hoặc hoàn tiền.</li>
                                    </ul>
                                    <p>Hoặc bạn cũng có thể tới trực tiếp cơ sở để đổi trả sản phẩm.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card border-primary">
                            <div id="headingThree" class="card-header p-0 border-0">
                                <h4 class="mb-0"><a href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" class="btn btn-primary d-block text-left rounded-0">3. Cửa hàng có giao hàng qua nước ngoài không?</a></h4>
                            </div>
                            <div id="collapseThree" aria-labelledby="headingThree" data-parent="#accordion" class="collapse">
                                <div class="card-body">Cửa hàng chúng tôi có nhận giao hàng ngoài nước. Để được tư vấn trực tiếp vui lòng gọi điện cho tổ CSKH hoặc tới cơ sở gần nhất.</div>
                            </div>
                        </div>
                    </div>
                    <!-- /.accordion-->
                </div>
            </div>
            <!-- /.col-lg-9-->
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
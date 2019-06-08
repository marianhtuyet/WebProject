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
                        <li aria-current="page" class="breadcrumb-item active">Giới thiệu</li>
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
                <div id="text-page" class="box">
                    <h1>3 O'clock - Web bán hàng điện tử số 1 Việt Nam</h1>
                    <p class="lead">Lịch sử giới thiệu về trang web bán hàng điện tử lớn nhất Việt Nam</p>
                    <h2>1. Lịch sử hình thành</h2>
                    <blockquote class="blockquote">
                        <p>Được thành lập vào tháng 4 năm 1997, O'clock lúc đó là một cửa hàng buôn bán máy tính nhỏ. Qua nhiều năm 3 O'clock đã từng bước lớn mạnh và phát triển trong lĩnh vực kinh doanh các sản phẩm, linh kiện máy tính, thiết bị văn phòng, thông tin liên lạc và giải trí do các hãng điện tử hàng đầu trên thế giới sản xuất. Và đến tháng 7 năm 2007, 3 O'clock chính thức thành lập Công ty Cô phần Thương mại - Dịch vụ 3 O'clock.</p>
                        <p>3 O'clock luôn phấn đấu, nỗ lực không ngừng để đem lại cho người tiêu dùng những sản phẩm công nghệ tiên tiến, và đã trở thành một trong những thương hiệu đáng tin cậy và được yêu thích nhất. 3 O'clock luôn cam kết cung cấp hàng chính hãng từ các nhà sản xuất, chất lượng luôn được đảm bảo và mức giá phù hợp trong môi trường cạnh tranh.</p>
                    </blockquote>
                    <h3>2. Lĩnh vực hoạt động</h3>
                    <blockquote class="blockquote">
                        <p>3 O'clock luôn đa dạng các mặt hàng và phong phú về mẫu mã trong lĩnh vực Công nghệ thông tin nhằm đáp ứng nhu cầu ngày càng cao của khách hàng.</p>
                        <p>Phân phối máy tính bảng, nhiều dòng máy laptop , máy tính để bàn, các linh kiện, phụ kiện, kỹ thuật số, camera,… của nhiều hãng nổi tiếng trên thế giới như Acer, HP, Samsung, Asus, LG, Linksys, Kingmax,…</p>
                        <p>3 O'clock còn là địa chỉ tin cậy đối với khách hàng có nhu cầu bảo hành và bảo trì cho các loại máy tính để bàn, máy tính xách tay, máy in, UPS (thiết bị điện), và các thiết bị ngoại vi,… Với các loại hình dịch vụ bảo hành và bảo trì tận nơi, bảy ngày trong tuần, chúng tôi bảo đảm tối ưu hóa năng lực các máy móc, thiết bị của khách hàng.</p>
                        <p>Hoàn thuế GTGT cho người nước ngoài (VAT refund for foreigners).</p>
                    </blockquote>
                    <hr>
                    <h2>Hình ảnh</h2>
                    <div class="row">
                        <div class="col-md-4">
                            <p class="text-center"><img src="img_new/company1.jpg" alt="" class="rounded-circle img-fluid"></p>
                            <p class="text-center">Hà Nội</p>
                        </div>
                        <div class="col-md-4">
                            <p class="text-center"><img src="img_new/company2.jpg" alt="" class="img-thumbnail img-fluid"></p>
                            <p class="text-center">Đà Nẵng</p>
                        </div>
                        <div class="col-md-4">
                            <p class="text-center"><img src="img_new/company3.jpg" alt="" class="img-circle img-fluid"></p>
                            <p class="text-center">Tp Hồ Chí Minh</p>
                        </div>
                    </div>
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
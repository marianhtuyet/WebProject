


<div id="top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center text-lg-right">
                <ul class="menu list-inline mb-0">
                    <li class="list-inline-item"><a href="#" data-toggle="modal" data-target="#login-modal">Đăng nhập</a></li>
                    <li class="list-inline-item"><a href="register.html">Đăng ký</a></li>
                    <li class="list-inline-item"><a href="contact.html">Liên hệ</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true" class="modal fade">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Khách hàng đăng nhập </h5>
                    <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <form action="customer-orders.html" method="post">
                        <div class="form-group">
                            <input id="email-modal" type="text" placeholder="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <input id="password-modal" type="password" placeholder="mật khẩu" class="form-control">
                        </div>
                        <p class="text-center">
                            <button class="btn btn-primary"><i class="fa fa-sign-in"></i> Đăng nhập</button>
                        </p>
                    </form>
                    <p class="text-center text-muted">Chưa có tài khoản?</p>
                    <p class="text-center text-muted"><a href="register.html"><strong>Đăng kí ngay</strong></a>! Đăng ký cực nhanh chỉ một phút để nhận được nhiều ưu đãi đặc biệt!</p>
                </div>
            </div>
        </div>
    </div>
    <!-- *** TOP BAR END ***-->


</div>
<nav class="navbar navbar-expand-lg">
    <div class="container"><a href="{{route('trangchu.index')}}" class="navbar-brand home"><img src="assets/img_new/logo.png" alt="3 O'clock logo" class="d-none d-md-inline-block">
            <img src="assets/img_new/logo.png" alt="3 O'Clock logo" class="d-inline-block d-md-none">
            <span class="sr-only">3 O'clock - go to homepage</span></a>
        <div class="navbar-buttons">
            <button type="button" data-toggle="collapse" data-target="#navigation" class="btn btn-outline-secondary navbar-toggler"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
            <button type="button" data-toggle="collapse" data-target="#search" class="btn btn-outline-secondary navbar-toggler"><span class="sr-only">Toggle search</span><i class="fa fa-search"></i>
            </button><a href="{{route('basket.get')}}" class="btn btn-outline-secondary navbar-toggler">
                <i class="fa fa-shopping-cart"></i></a>
        </div>
        <div id="navigation" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a href="{{route('trangchu.index')}}" class="nav-link active">Trang chủ</a></li>
                <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle nav-link">Laptop - Macbook<b class="caret"></b></a>
                    <ul class="dropdown-menu megamenu">
                        <li>
                            <div class="row">
                                <div class="col-md-6 col-lg-3">
                                    <h5>Laptop Acer</h5>
                                    <ul class="list-unstyled mb-3">
                                        <li class="nav-item"><a href="{{route('acer.category_acer_nitro')}}" class="nav-link">Nitro series</a></li>
                                        <li class="nav-item"><a href="{{route('acer.category_acer_predator')}}" class="nav-link">Predator series</a></li>
                                        <li class="nav-item"><a href="{{route('acer.category_acer_swift')}}" class="nav-link">Swift series</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <h5>Laptop Asus</h5>
                                    <ul class="list-unstyled mb-3">
                                        <li class="nav-item"><a href="{{route('asus.category_asus_rog')}}" class="nav-link">ROG series</a></li>
                                        <li class="nav-item"><a href="{{route('asus.category_asus_fx')}}" class="nav-link">FX/TUF series</a></li>
                                        <li class="nav-item"><a href="{{route('asus.category_asus_vivo')}}" class="nav-link">Vivobook series</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <h5>Laptop Dell</h5>
                                    <ul class="list-unstyled mb-3">
                                        <li class="nav-item"><a href="{{route('acer.category_acer_predator')}}" class="nav-link">Inspiron series</a></li>
                                        <li class="nav-item"><a href="{{route('acer.category_acer_predator')}}" class="nav-link">Vostro series</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <h5>Laptop HP</h5>
                                    <ul class="list-unstyled mb-3">
                                        <li class="nav-item"><a href="{{route('hp.category_hp_probook')}}" class="nav-link">Probook series</a></li>
                                        <li class="nav-item"><a href="{{route('hp.category_hp_pavilion')}}" class="nav-link">Pavilion series</a></li>
                                        <li class="nav-item"><a href="{{route('hp.category_hp_1')}}" class="nav-link">14/15 series</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <h5>Laptop Lenovo</h5>
                                    <ul class="list-unstyled mb-3">
                                        <li class="nav-item"><a href="{{route('lenovo.category_lenovo_legion')}}" class="nav-link">Legion series</a></li>
                                        <li class="nav-item"><a href="{{route('lenovo.category_lenovo_thinkpad')}}" class="nav-link">Thinkpad series</a></li>
                                        <li class="nav-item"><a href="{{route('lenovo.category_lenovo_ideapad')}}" class="nav-link">Ideapad series</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <h5>Macbook</h5>
                                    <ul class="list-unstyled mb-3">
                                        <li class="nav-item"><a href="{{route('macbook.category_macbook_nomal')}}" class="nav-link">Macbook series</a></li>
                                        <li class="nav-item"><a href="{{route('macbook.category_macbook_pro')}}" class="nav-link">Macbook Pro series</a></li>
                                        <li class="nav-item"><a href="{{route('macbook.category_macbook_air')}}l" class="nav-link">Macbook Air series</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <div class="banner"><a href="#"><img src="assets/img_new/menu_pic1.jpg" alt="" class="img img-fluid"></a></div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <div class="banner"><a href="#"><img src="assets/img_new/menu_pic2.jpg " alt="" class="img img-fluid"></a></div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle nav-link">Máy tính - linh kiện<b class="caret"></b></a>
                    <ul class="dropdown-menu megamenu">
                        <li>
                            <div class="row">
                                <div class="col-md-6 col-lg-3">
                                    <h5>Card màn hình</h5>
                                    <ul class="list-unstyled mb-3">
                                        <li class="nav-item"><a href="{{route('acer.category_acer_nitro')}}" class="nav-link">GTX</a></li>
                                        <li class="nav-item"><a href="{{route('acer.category_acer_nitro')}}" class="nav-link">MSI</a></li>
                                        <li class="nav-item"><a href="{{route('acer.category_acer_nitro')}}" class="nav-link">RTX</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <h5>CPU</h5>
                                    <ul class="list-unstyled mb-3">
                                        <li class="nav-item"><a href="{{route('acer.category_acer_nitro')}}" class="nav-link">Core i5</a></li>
                                        <li class="nav-item"><a href="{{route('acer.category_acer_nitro')}}" class="nav-link">Core i7</a></li>
                                        <li class="nav-item"><a href="{{route('acer.category_acer_nitro')}}" class="nav-link">Core i9</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <h5>HDD - SSD</h5>
                                    <ul class="list-unstyled mb-3">
                                        <li class="nav-item"><a href="{{route('acer.category_acer_nitro')}}" class="nav-link">HDD</a></li>
                                        <li class="nav-item"><a href="{{route('acer.category_acer_nitro')}}" class="nav-link">SSD</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <h5>RAM</h5>
                                    <ul class="list-unstyled mb-3">
                                        <li class="nav-item"><a href="{{route('acer.category_acer_nitro')}}" class="nav-link">Corsair</a></li>
                                        <li class="nav-item"><a href="{{route('acer.category_acer_nitro')}}" class="nav-link">Kingmax</a></li>
                                        <li class="nav-item"><a href="{{route('acer.category_acer_nitro')}} " class="nav-link">Kingston</a></li>
                                        <li class="nav-item"><a href="{{route('acer.category_acer_nitro')}} " class="nav-link">Kingston</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <div class="banner"><a href="#"><img src="assets/img_new/menu_pic3.jpg" alt="" class="img img-fluid"></a></div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <div class="banner"><a href="#"><img src="assets/img_new/menu_pic4.jpg" alt="" class="img img-fluid"></a></div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="navbar-buttons d-flex justify-content-end">
                <!-- /.nav-collapse-->
                <div id="search-not-mobile" class="navbar-collapse collapse"></div>
                <a data-toggle="collapse" href="#search" class="btn navbar-btn btn-primary d-none d-lg-inline-block">
                    <span class="sr-only">Toggle search</span><i class="fa fa-search"></i>
                </a>
                <div id="basket-overview" class="navbar-collapse collapse d-none d-lg-block">
                    <a href="{{route('basket.get')}}" class="btn btn-primary navbar-btn">
                        <i class="fa fa-shopping-cart"></i>
                        <span>Giỏ hàng</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
<div id="search" class="collapse">
    <div class="container">
        <form role="search" class="ml-auto">
            <div class="input-group">
                <input type="text" placeholder="Search" class="form-control">
                <div class="input-group-append"> <!-- input-group-append giúp đoạn text search và nút search dính liền nhau -->
                    <button type="button" class="btn btn-primary"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </form>
    </div>
</div>
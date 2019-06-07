@extends('layout.index')
@section('title')

@endsection
@section('style')
    <script src="assets/ckeditor/ckeditor.js"></script>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- breadcrumb-->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
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
                        <h3 class="h4 card-title">Admin</h3>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-pills flex-column">
                            <a href="{{route('customer.invoice')}}" class="nav-link active"><i class="fa fa-list"></i>
                                My orders</a>
                            {{--<a href="customer-wishlist.html" class="nav-link"><i class="fa fa-heart"></i> My wishlist</a>--}}
                            <a href="{{route('customer.info')}}" class="nav-link"><i class="fa fa-user"></i> My account</a>
                            <li><a href="{{route('admin.product')}}" class="nav-link"><i class="fa fa-plus-square "></i>Sản phẩm mới</a></li>
                            <li><a href="" class="nav-link" ><i class="fa fa-list-alt"></i>Danh sách sản phẩm</a> </li>
                            <li><a href="#" class="nav-link"><i class="fa fa-bar-chart "></i>Thống kê</a></li>
                            <a href="{{route('customer.logout')}}" class="nav-link"><i class="fa fa-sign-out"></i>
                                Logout</a>
                        </ul>
                    </div>
                </div>
                <!-- *** PAGES MENU END ***-->
                <div class="banner"><img src="assets/img_new/company4.jpg" alt="menu picture" class="img-fluid"></div>
            </div>
            <div id="list_product" class="col-lg-9">
                <div class="box">
                    <h1>Danh sách sản phẩm</h1>
                    {{--<p class="text-muted">If you have any questions, please feel free to <a href="contact.html">contact us</a>, our customer service center is working for you 24/7.</p>--}}
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="select-lon">Danh mục lớn</label>
                                <select id="select-lon" class="form-control" onchange="categoryChange(this)" onload="categoryChange(this)">
                                    <option value="" selected >-- Chọn --</option>
                                    <option value="LaptopAcer">Laptop Acer</option>
                                    <option value="LaptopAsus">Laptop Asus</option>
                                    <option value="LaptopDell">Laptop Dell</option>
                                    <option value="LaptopHP">Laptop HP</option>
                                    <option value="LaptopLenovo">Laptop Lenovo</option>
                                    <option value="LaptopMacbook">Laptop Macbook</option>
                                    <option value="CardMH">Card màn hình</option>
                                    <option value="CPU">CPU</option>
                                    <option value="HDD-SSD">HDD - SSD</option>
                                    <option value="RAM">RAM</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <label for="select_nho">Danh mục nhỏ</label>
                                <select id="select_nho" name="select_nho" class="form-control select_nho" onchange="getTable(this)" onload="getTable(this)">
                                    <option >--Chọn--</option>
                                </select>
                            </div>
                        </div>
                        {{--<div class="col-md-4">--}}
                            {{--<a class="btn btn-primary btn-sm" onclick="getTable(this)">Xác--}}
                                {{--nhận</a>--}}
                        {{--</div>--}}
                        <div class="table-responsive table table-bordered table-striped" >
                            <table style="height: auto" class="table table-hover">
                                <div id="list"></div>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col-md-9-->

        </div>
    </div>



@endsection
@section('script-ori')
    <script language="javascript">
        function categoryChange(obj) {
            var select_nho = document.getElementById('select_nho');
            var value = obj.value;
            select_nho.options.length = 1;
            var option = document.createElement("option");
            option.text = "Acer Series";
            option.value = "acer_1";
            var option1 = document.createElement("option");
            option1.text = "Predator Series";
            option1.value = "acer_2";
            var option3 = document.createElement("option");
            option3.text = "Swift Series";
            option3.value = "acer_3";
            var option4 = document.createElement("option");
            option4.text = "ROG Series";
            option4.value = "asus_2";
            var option5 = document.createElement("option");
            option5.text = "FX/TUF Series";
            option5.value = "asus_3";
            var option6 = document.createElement("option");
            option6.text = "VivoBook Series";
            option6.value = "asus_1";
            var option7 = document.createElement("option");
            option7.text = "Inspiron Series";
            option7.value = "Dell_1";
            var option8 = document.createElement("option");
            option8.text = "Vostro Series";
            option8.value = "Dell_2";
            var option9 = document.createElement("option");
            option9.text = "Probook Series";
            option9.value = "hp_2";
            var option10 = document.createElement("option");
            option10.text = "Paviliom Series";
            option10.value = "hp_3";
            var option11 = document.createElement("option");
            option11.text = "14/15 Series";
            option11.value = "hp_1";
            var option12 = document.createElement("option");
            option12.text = "Legion Series";
            option12.value = "lenovo_1";
            var option13 = document.createElement("option");
            option13.text = "Thinkpad Series";
            option13.value = "lenovo_2";
            var option14 = document.createElement("option");
            option14.text = "Ideapad Series";
            option14.value = "lenovo_3";
            var option15 = document.createElement("option");
            option15.text = "Macbook Series";
            option15.value = "macbook_1";
            var option16 = document.createElement("option");
            option16.text = "Macbook Pro Series";
            option16.value = "macbook_2";
            var option17 = document.createElement("option");
            option17.text = "Macbook Air Series";
            option17.value = "macbook_3";
            var option18 = document.createElement("option");
            option18.text = "GTX";
            option18.value = "";
            var option19 = document.createElement("option");
            option19.text = "MSI";
            option19.value = "";
            var option20 = document.createElement("option");
            option20.text = "RTX";
            option20.value = "";
            var option21 = document.createElement("option");
            option21.text = "Core i5";
            option21.value = "";
            var option22 = document.createElement("option");
            option22.text = "Core i7";
            option22.value = "";
            var option23 = document.createElement("option");
            option23.text = "Core i9";
            option23.value = "";
            var option24 = document.createElement("option");
            option24.text = "HDD";
            option24.value = "";
            var option25 = document.createElement("option");
            option25.text = "SSD";
            option25.value = "";
            var option26 = document.createElement("option");
            option26.text = "Corsair";
            option26.value = "";
            var option27 = document.createElement("option");
            option27.text = "Kingmax";
            option27.value = "";
            var option28 = document.createElement("option");
            option28.text = "Kingston";
            option28.value = "";
            if (value === 'LaptopAcer') {
                select_nho.add(option);
                select_nho.add(option1);
                select_nho.add(option3);
            } else if (value === 'LaptopAsus') {
                select_nho.add(option4);
                select_nho.add(option5);
                select_nho.add(option6);
            } else if (value === 'LaptopDell') {
                select_nho.add(option7);
                select_nho.add(option8);
            } else if (value === 'LaptopHP') {
                select_nho.add(option9);
                select_nho.add(option10);
                select_nho.add(option11);
            } else if (value === 'LaptopLenovo') {
                select_nho.add(option12);
                select_nho.add(option13);
                select_nho.add(option14);
            } else if (value === 'LaptopMacbook') {
                select_nho.add(option15);
                select_nho.add(option16);
                select_nho.add(option17);
            } else if (value === 'CardMH') {
                select_nho.add(option18);
                select_nho.add(option19);
                select_nho.add(option20);
            } else if (value === 'CPU') {
                select_nho.add(option21);
                select_nho.add(option22);
                select_nho.add(option23);
            } else if (value === 'HDD-SSD') {
                select_nho.add(option24);
                select_nho.add(option25);
            } else if (value === 'RAM') {
                select_nho.add(option26);
                select_nho.add(option27);
                select_nho.add(option28);
            }
        }

    </script>
    <script>
        function getTable(obj) {
            let objective = $(obj).parent().parent();
            let id_product = objective.find(".select_nho").val();
            console.log(id_product);

            $.ajax({
                url:"{{route('list_product')}}",
                type:'GET',
                async: true,
                data: {"_id_type":id_product},
                success: function (result) {
                    $('#list').html(result);
                }
            });
        }
    </script>
    <script>

    </script>
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.cookie/jquery.cookie.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.js"></script>
    <script src="assets/js/front.js"></script>


@endsection

@extends('layout.index')
@section('title')

@endsection
@section('style')
@endsection
@section('content')
<div class="card sidebar-menu mb-4">
    <div class="card-header">
        <h3 class="h4 card-title">Danh mục</h3>
    </div>
    <div class="card-body">
        <ul class="nav nav-pills flex-column category-menu">
            <li><a href="category/category" class="nav-link active">Laptop Acer</a>
                <ul class="list-unstyled">
                    <li  id="acer_1" onclick="myFunction()"><a  class="nav-link">Nitro series</a></li>
                    <?php $id_product='acer_1'?>
                    <li id="acer_2" onclick="myFunction()"><a href="category-Acer-Predator.html" class="nav-link" id="acer_2">Predator series</a></li>
                    <?php $id_product='acer_2'?>
                    <li id="acer_3"><a href="category-Acer-Swift.html" class="nav-link" id="acer_3">Swift series</a></li>
                    <?php $id_product='acer_3'?>
                </ul>
            </li>
            <li><a href="category.html" class="nav-link ">Laptop Asus</a>
                <ul class="list-unstyled">
                    <li><a href="category.html" class="nav-link" id="asus_1">ROG series</a></li>
                    <?php $id_product='asus_1'?>
                    <li><a href="category.html" class="nav-link" id="asus_2">FX_TUF series</a></li>
                    <?php $id_product='asus_2'?>
                    <li><a href="category.html" class="nav-link" id="asus_3">Vivobook series</a></li>
                    <?php $id_product='asus_3'?>
                </ul>
            </li>
            <li><a href="category-Dell.html" class="nav-link">Laptop Dell</a>
                <ul class="list-unstyled">
                    <li><a href="category-Dell-Inspiron.html" class="nav-link">Inspiron series</a></li>
                    <?php $id_product='dell_1'?>
                    <li><a href="category-Dell-Vostro.html" class="nav-link">Vostro series</a></li>
                    <?php $id_product='dell_2'?>
                </ul>
            </li>
            <li><a href="category.html" class="nav-link">Laptop HP</a>
                <ul class="list-unstyled">
                    <li><a href="category.html" class="nav-link">Probook series</a></li>
                    <?php $id_product='hp_3'?>
                    <li><a href="category.html" class="nav-link">Pavilion series</a></li>
                    <?php $id_product='hp_2'?>
                    <li><a href="category.html" class="nav-link">14/15 series</a></li>
                    <?php $id_product='hp_1'?>
                </ul>
            </li>
            <li><a href="category.html" class="nav-link">Laptop Lenovo</a>
                <ul class="list-unstyled">
                    <li><a href="category.html" class="nav-link">Legion series</a></li>
                    <?php $id_product='lenovo_1'?>
                    <li><a href="category.html" class="nav-link">Thinkpad series</a></li>
                    <?php $id_product='lenovo_2'?>
                    <li><a href="category.html" class="nav-link">Ideapad series</a></li>
                    <?php $id_product='lenovo_3'?>
                </ul>
            </li>
            <li><a href="category.html" class="nav-link">Macbook</a>
                <ul class="list-unstyled">
                    <li><a href="category.html" class="nav-link">Macbook series</a></li>
                    <?php $id_product='macbook_1'?>
                    <li><a href="category.html" class="nav-link">Macbook Pro series</a></li>
                    <?php $id_product='macbook_1'?>
                    <li><a href="category.html" class="nav-link">Macbook Air series</a></li>
                    <?php $id_product='macbook_1'?>
                </ul>
            </li>
        </ul>
    </div>
</div>
@endsection


@section('script-ori')
    {{--<-- co footer va cac thu vien js--}}

        <script>
            function myFunction()
            {
                var x = document.getElementsByClassName("list-unstyled")[0].id;
                alert(x);
            }
        // $('li').click( function(){
        //    var x = document.getElementsByClassName("list-unstyled")[1].id;
        //    alert(x);


            // alert(($(this).html()).id);
        // });
    </script>
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.cookie/jquery.cookie.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.js"></script>
    <script src="assets/js/front.js"></script>
@endsection


<!DOCTYPE html>
<html>
<head>
    <title>Ajax Autocomplete Textbox in Laravel using JQuery</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />--}}
    {{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>--}}
    {{--<style type="text/css">--}}
        {{--.box{--}}
            {{--width:600px;--}}
            {{--margin:0 auto;--}}
        {{--}--}}
    {{--</style>--}}
</head>
<body>
<br />

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



<div id="search" class="collapse">
    <div class="container">
        <form role="search" class="ml-auto">
            {{ csrf_field() }}
            <div class="input-group">
                <input type="text" placeholder="Search" class="form-control" name="search" id="search_text" autocomplete="off">
                <div class="input-group-append">
                    <!-- input-group-append giúp đoạn text search và nút search dính liền nhau -->
                    <button type="button" class="btn btn-primary"><i class="fa fa-search"></i></button>
                </div>
                <div id="ListProduct">
                </div>

            </div>
        </form>
    </div>
</div>

</body>
</html>

<script>
    $(document).ready(function(){

        $('#search_text').keyup(function(){
            var query = $(this).val();
            if(query != '')
            {
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url:"{{ route('header.search') }}",
                    method:"POST",
                    data:{query:query, _token:_token},
                    success:function(data){
                        $('#ListProduct').fadeIn();
                        $('#ListProduct').html(data);
                    }
                });
            }
        });

        $(document).on('click', 'li', function(){
            $('#ListProduct').val($(this).text());
            $('#ListProduct').fadeOut();
        });

    });
</script>

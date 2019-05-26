
@extends('layout.index')
@section('title')

@endsection
@section('style')
@endsection
@section('content')
        <table>

        </table>
@endsection


@section('script-ori')
    {{--<-- co footer va cac thu vien js--}}

        <script>

            $('.nav-link').click(function() {
                // alert(this.id);
                var x;
                x = this.id;
                alert("day la x: " + x);
            $.ajax({
            url:
            })
            });

    </script>
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.cookie/jquery.cookie.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.js"></script>
    <script src="assets/js/front.js"></script>
@endsection


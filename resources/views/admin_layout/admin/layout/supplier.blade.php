<!DOCTYPE html>
<html>
<head>
    <title>Supplier Area</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('dist/admin.css')}}">
    <link rel="stylesheet" href="{{asset('dist/gambar.css')}}">
    <link rel="stylesheet" href="{{asset('dist/tabel.css')}}"/>

<link href="{{asset('job/css/metisMenu.min.css')}}" rel="stylesheet">
<link href="{{asset('job/css/startmin.css')}}" rel="stylesheet">

<link href="{{asset('job/css/font-awesome.min.css')}}"  rel="stylesheet" type="text/css">






</head>
<body>
@include('admin_layout.admin.layout.includes.headersup')
<div class="page-content">
    @if(Session::has('message'))
        <div class="alert alert-info">
            <p>{{ Session::get('message') }}</p>
        </div>
    @endif

    <div class="row">
        @include('admin_layout.admin.layout.includes.sidenavsup')
        <div class="col-md-10 display-area">
            <div class="row text-center">
                <div class="col-md-10 col-md-offset-1">
                    <div class="content-box-large">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div><!--/Display area after sidenav-->
    </div>

</div><!--/Page Content-->

<script src="https://code.jquery.com/jquery.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function () {
        $(".submenu > a").click(function (e) {
            e.preventDefault();
            var $li = $(this).parent("li");
            var $ul = $(this).next("ul");

            if ($li.hasClass("open")) {
                $ul.slideUp(350);
                $li.removeClass("open");
            } else {
                $(".nav > li > ul").slideUp(350);
                $(".nav > li").removeClass("open");
                $ul.slideDown(350);
                $li.addClass("open");
            }
        });
    });
</script>

</body>
</html>
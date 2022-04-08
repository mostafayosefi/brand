<!DOCTYPE html>
<html dir="rtl" class=" " lang="fa-IR"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <link rel="icon" href="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="robots" content="max-image-preview:large">
    <meta name="csrf-token" content="{{ csrf_token() }}">


	{{-- <title>ثبت برند | موسسه مشاوره آنلاین و فوری ثبت برندها در ایران</title> --}}


    <title> {{ $tabTitle ?? '' }}</title>

    <meta name="description" content="{{$setting->description}}">
	<meta name="robots" content="index, follow">
	<meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
	<meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
	<meta property="og:locale" content="fa_IR">
	<meta property="og:type" content="website">
	<meta property="og:title" content="{{$setting->title}}">
	<meta property="og:description" content="{{$setting->description}}">
	<meta property="og:url" content="{{url('/')}}">
	<meta property="og:site_name" content="{{$setting->title}}">
	<meta name="twitter:card" content="summary">
 


<link rel="stylesheet" href="{{asset('sabt_files/style-rtl.css')}}">
<link rel="stylesheet" href="{{asset('sabt_files/style.css')}}">
<link rel="stylesheet" href="{{asset('sabt_files/animate.css')}}">
<link rel="stylesheet" href="{{asset('sabt_files/bootstrap.css')}}">
<link rel="stylesheet" href="{{asset('sabt_files/bootstrap-rtl.css')}}">
<link rel="stylesheet" href="{{asset('sabt_files/fontawesome.css')}}">
<link rel="stylesheet" href="{{asset('sabt_files/owl.css')}}">
<link rel="stylesheet" href="{{asset('sabt_files/leaflet.css')}}">
<link rel="stylesheet" href="{{asset('sabt_files/main.css')}}">
<link rel="stylesheet" href="{{asset('sabt_files/formreset.css')}}">
<link rel="stylesheet" href="{{asset('sabt_files/formsmain.css')}}">
<link rel="stylesheet" href="{{asset('sabt_files/readyclass.css')}}">
<link rel="stylesheet" href="{{asset('sabt_files/browsers.css')}}">
<link rel="stylesheet" href="{{asset('sabt_files/rtl.css')}}">
<script src="{{asset('sabt_files/jquery.js')}}" id="jquery-core-js"></script>
<script src="{{asset('sabt_files/jquery-migrate.js')}}" id="jquery-migrate-js"></script>

    @yield('style')
</head>

<body>

    <div class="top-menu">
        <div class="container">
            <div class="top-menu-body">
                <span>ثبت برند میزان ارائه دهنده خدمات ثبت برندها</span>
            </div>
        </div>
    </div>

    @include('index.brand.layouts.menulist')
    <main>
    @yield('content')
    </main>


@include('index.brand.layouts.footer')



<script src="{{asset('sabt_files/bootstrap.js')}}" id="bootstrap-js-js"></script>
<script src="{{asset('sabt_files/modernizr.js')}}" id="modernizr-js-js"></script>
<script src="{{asset('sabt_files/owl.js')}}" id="owl.carousel-js-js"></script>
<script src="{{asset('sabt_files/leaflet.js')}}" id="leaflet-js-js"></script>
<script src="{{asset('sabt_files/main.js')}}" id="main-js-js"></script>
<script src="{{asset('sabt_files/wp-embed.js')}}" id="wp-embed-js"></script>





@include('sweetalert::alert')

@yield('script')

</body>
</html>

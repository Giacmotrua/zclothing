<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
          rel="stylesheet">
    <link rel="icon" href="{{asset('frontend/img/zloho11.png')}}" type="image/x-icon">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}" type="text/css">
</head>

<body>

<!-- Offcanvas Menu Begin -->
@include('frontend.partials.topbar')
<!-- Header Section End -->

@yield('content')

<!-- Footer Section Begin -->
@include('frontend.partials.footer')
<!-- Footer Section End -->

<!-- Search Begin -->
@include('frontend.modal.search')
<!-- Search End -->

<!-- Js Plugins -->
<script src="{{ asset('frontend/js/jquery-3.3.1.min.js') }} "></script>
<script src="{{ asset('frontend/js/bootstrap.min.js') }} "></script>
<script src="{{ asset('frontend/js/jquery.nice-select.min.js') }} "></script>
<script src="{{ asset('frontend/js/jquery.nicescroll.min.js') }} "></script>
<script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }} "></script>
<script src="{{ asset('frontend/js/jquery.countdown.min.js') }} "></script>
<script src="{{ asset('frontend/js/jquery.slicknav.js') }} "></script>
<script src="{{ asset('frontend/js/mixitup.min.js') }} "></script>
<script src="{{ asset('frontend/js/owl.carousel.min.js') }} "></script>
<script src="{{ asset('frontend/js/main.js') }} "></script>

<script type="text/javascript">
    $(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });
</script>

@stack('javascripts')
</body>

</html>

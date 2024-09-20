<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>SMK AKN MARZUQI | {{ $title ?? '' }}</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('templates/frontend/clever/img/core-img/logo.png') }}">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('templates/frontend/clever/style.css') }}">
    @stack('css')
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner"></div>
    </div>

    <!-- Header Area Start  -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header-area d-flex justify-content-between align-items-center">
            <!-- Contact Info -->
            <div class="contact-info">
                <a href="#"><span>Phone:</span> 0821-2309-8482</a>
                <a href="#"><span>Email:</span> smkaknmarzuqi@gmail.com</a>
            </div>
            <!-- Follow Us -->
            <div class="follow-us">
                <span>Follow us</span>
                <a href="https://www.facebook.com/smkaknofficial"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            </div>
        </div>

        <!-- Navbar Area -->
        @include('layouts.frontend.navbar')
    </header>
    <!-- Header Area End -->

    @yield('content')

    <!-- Footer Area Start -->
    @include('layouts.frontend.footer')
    <!-- Footer Area End -->

    <!--All Javascript Script -->
    <script src="{{ asset('templates/frontend/clever') }}/js/jquery/jquery-2.2.4.min.js"></script>
    <script src="{{ asset('templates/frontend/clever') }}/js/bootstrap/popper.min.js"></script>
    <script src="{{ asset('templates/frontend/clever') }}/js/bootstrap/bootstrap.min.js"></script>
    <script src="{{ asset('templates/frontend/clever') }}/js/plugins/plugins.js"></script>
    <script src="{{ asset('templates/frontend/clever') }}/js/active.js"></script>
    @stack('js')
</body>
</html>
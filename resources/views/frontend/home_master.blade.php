<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>AutoWash - Car Wash Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="{{asset('front/img/favicon.ico')}}" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="{{asset('front/lib/flaticon/font/flaticon.css')}}" rel="stylesheet">
        <link href="{{asset('front/lib/animate/animate.min.css')}}" rel="stylesheet">
        <link href="{{asset('front/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{asset('front/css/style.css')}}" rel="stylesheet">
    </head>

    <body>
        <!-- Top Bar Start -->
        @include('frontend.body.header')
        <!-- Nav Bar End -->


        <!-- Carousel Start -->
        @include('frontend.body.slider')
        <!-- Carousel End -->


       @yield('home_content')


        <!-- Footer Start -->
        @include('frontend.body.footer')
        <!-- Footer End -->

        <!-- Back to top button -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- Pre Loader -->
        <div id="loader" class="show">
            <div class="loader"></div>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('front/lib/easing/easing.min.js')}}"></script>
        <script src="{{asset('front/lib/owlcarousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('front/lib/waypoints/waypoints.min.js')}}"></script>
        <script src="{{asset('front/lib/counterup/counterup.min.js')}}"></script>

        <!-- Contact Javascript File -->
        <script src="{{asset('front/mail/jqBootstrapValidation.min.js')}}"></script>
        <script src="{{asset('front/mail/contact.js')}}"></script>

        <!-- Template Javascript -->
        <script src="{{asset('front/js/main.js')}}"></script>
    </body>
</html>

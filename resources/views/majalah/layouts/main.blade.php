<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Manerser</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">   

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
{{-- update --}}
    <!-- Libraries Stylesheet -->
    <link href="{{ asset('asset/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('asset/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    @include('majalah.partials.topbar')
    <!-- Topbar End -->


    <!-- Navbar Start -->
    @include('majalah.partials.navbar')
    <!-- Navbar End -->


    <!-- Top News Slider Start -->
    @include('majalah.partials.topnews')
    <!-- Top News Slider End -->


    <!-- Main News Slider Start -->
    @include('majalah.partials.category')
    <!-- Main News Slider End -->


    <!-- Featured News Slider Start -->
    @yield('container')
    <!-- News With Sidebar End -->


    <!-- Footer Start -->
    @include('majalah.partials.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-dark back-to-top"><i class="fa fa-angle-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('asset/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('asset/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Contact Javascript File -->
    <script src="{{ asset('asset/mail/jqBootstrapValidation.min.js') }}"></script>
    <script src="{{ asset('asset/mail/contact.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('asset/js/main.js') }}"></script>
</body>

</html>
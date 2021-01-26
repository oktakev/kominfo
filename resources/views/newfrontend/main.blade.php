<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap Min CSS -->
    <link rel="stylesheet" href="{{ asset('resources/sinmun/assets/css/bootstrap.min.css') }}">

    <!-- Animate Min CSS -->
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="{{ asset('resources/sinmun/assets/css/animate.min.css') }}">
    <!-- IcoFont Min CSS -->
    <link rel="stylesheet" href="{{ asset('resources/sinmun/assets/css/icofont.min.css') }}">
    <!-- MeanMenu CSS -->
    <link rel="stylesheet" href="{{ asset('resources/sinmun/assets/css/meanmenu.css') }}">
    <!-- Owl Carousel Min CSS -->
    <link rel="stylesheet" href="{{ asset('resources/sinmun/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/sinmun/assets/css/magnific-popup.min.css') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('resources/sinmun/assets/css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('resources/sinmun/assets/css/responsive.css') }}">




    <title>@yield('title')</title>

    <link rel="icon" type="image/png" href="{{ asset('resources/sinmun/assets/img/favicon.png') }}">
</head>

<style>
    .sinmun-nav.is-sticky {
        background-color: #007bff !important;
    }

    .sinmun-nav nav .navbar-nav {
        margin-left: 0;
    }

    .sinmun-nav nav .navbar-nav .nav-item:hover a {
        color: #f8f9fa;
    }

    .responsive {
        object-fit: cover;
        width: 400px;
        height: 400px;
    }
</style>

<body>


    <!-- Start Header Area -->
    <header class="header-area pb-1">

        <!-- Start Navbar Area -->
        <div class="navbar-area">
            <div class="sinmun-mobile-nav">
                <div class="logo">
                    <a href="#"><img src="{{ asset('resources/sinmun/assets/img/logo1.png') }}"
                            alt="logo"></a>
                </div>
            </div>

            <div class="sinmun-nav pt-0">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-dark">
                        <a href="@yield('beranda')"><img src="{{ asset('resources/sinmun/assets/img/logo1.png') }}"
                                alt="logo"></a>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->

        <!-- Start Breaking News -->
        <div class="breaking-news">


        </div>
        <!-- End Breaking News -->
    </header>
    <!-- End Header Area -->

    <!-- Navbar Menu -->
    @yield('navbar')
    <div class="sinmun-nav bg-primary">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-dark">
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="@yield('beranda')" class="nav-link">Beranda</a>
                            
                        </li>
<!-- 
                        <li class="nav-item"><a href="#" class="nav-link">Tentang</a></li>

                        <li class="nav-item"><a href="#" class="nav-link">Layanan</a></li> -->

                        <li class="nav-item"><a href="@yield('beranda')" class="nav-link">Berita</a>
                        <ul class="dropdown-menu">
                                <li class="nav-item"><a href="kategori_hoaks" class="nav-link">Hoaks</a></li>

                                <li class="nav-item"><a href="kategori_disinformasi" class="nav-link">Disinformasi</a></li>

                            </ul>
                        </li>                   

                        <li class="nav-item"><a href="#" class="nav-link">Kontak</a>
                            
                        </li>
                    </ul>

                    <div class="others-options">
                        <ul>
                            <li><a href="login.html"><i class="icofont-user-alt-5"></i></a></li>
                            <li class="header-search">
                                <div class="nav-search">
                                    <div class="nav-search-button">
                                        <i class="icofont-ui-search"></i>
                                    </div>

                                    <form method="GET" action="{{ url('query') }}" role="search">
                                    {{ csrf_field() }}
                                        <span class="nav-search-close-button" tabindex="0">✕</span>
                                        <div class="nav-search-inner">
                                            <input type="search" name="q" placeholder="Search here....">
                                        </div>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- End Navbar Menu -->


        @yield('content')

        @yield('content2')
        @yield('footer')
        <!-- Start Footer Area -->
        <footer class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="single-footer-widget">


                            <div class="contact-info">
                                <p>Ini adalah website milik kominfo Bondowoso dengan jam kerja Senin - Jumat 07.00 -
                                    16.00, Sabtu - Minggu TUTUP</p>

                                <ul>
                                    <li><i class="icofont-google-map"></i> Jl. Letjen Panjaitan No. 234
                                        <strong>Bondowoso</strong></li>
                                    <li><i class="icofont-phone"></i> <a href="#">0332 - 421707</a></li>
                                    <li><i class="icofont-envelope"></i> <a href="#">diskominfo@bondowosokab.go.id</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="connect-social">

                                <ul>
                                    <li><a href="#" target="_blank"><i class="icofont-facebook"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="icofont-twitter"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="icofont-linkedin"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="icofont-instagram"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="icofont-rss"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">

                    </div>
                </div>
            </div>

            <div class="copyright-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12">
                            <p>Copyright © 2019 <a href="http://envytheme.com" target="_blank">EnvyTheme</a>. All Rights
                                Reserved.</p>
                        </div>

                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer Area -->

        <div class="go-top"><i class="icofont-swoosh-up"></i></div>

        <!-- Jquery Min JS -->
        <script src="{{ asset('resources/sinmun/assets/js/jquery.min.js') }}"></script>
        <!-- Popper Min JS -->
        <script src="{{ asset('resources/sinmun/assets/js/popper.min.js') }}"></script>
        <!-- Bootstrap Min JS -->
        <script src="{{ asset('resources/sinmun/assets/js/bootstrap.min.js') }}"></script>
        <!-- MeanMenu JS -->
        <script src="{{ asset('resources/sinmun/assets/js/jquery.meanmenu.js') }}"></script>
        <!-- Owl Carousel Min JS -->
        <script src="{{ asset('resources/sinmun/assets/js/owl.carousel.min.js') }}"></script>
        <!-- Magnific Popup Min JS -->
        <script src="{{ asset('resources/sinmun/assets/js/jquery.magnific-popup.min.js') }}"></script>
        <!-- Form Validator Min JS -->
        <script src="{{ asset('resources/sinmun/assets/js/form-validator.min.js') }}"></script>
        <!-- Contact Form Script JS -->
        <script src="{{ asset('resources/sinmun/assets/js/contact-form-script.js') }}"></script>
        <!-- ajaxChimp Min JS -->
        <script src="{{ asset('resources/sinmun/assets/js/jquery.ajaxchimp.min.js') }}"></script>
        <!-- Main JS -->
        <script src="{{ asset('resources/sinmun/assets/js/main.js') }}"></script>
</body>

</html>
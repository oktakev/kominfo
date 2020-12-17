<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap Min CSS -->
    <link rel="stylesheet" href="resources/sinmun/assets/css/bootstrap.min.css">
    <!-- Animate Min CSS -->
    <link rel="stylesheet" href="resources/sinmun/assets/css/animate.min.css">
    <!-- IcoFont Min CSS -->
    <link rel="stylesheet" href="resources/sinmun/assets/css/icofont.min.css">
    <!-- MeanMenu CSS -->
    <link rel="stylesheet" href="resources/sinmun/assets/css/meanmenu.css">
    <!-- Owl Carousel Min CSS -->
    <link rel="stylesheet" href="resources/sinmun/assets/css/owl.carousel.min.css">
    <!-- Magnific Popup Min CSS -->
    <link rel="stylesheet" href="resources/sinmun/assets/css/magnific-popup.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="resources/sinmun/assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="resources/sinmun/assets/css/responsive.css">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>



    <title>@yield('title')</title>

    <link rel="icon" type="image/png" href="resources/sinmun/assets/img/favicon.png">
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
    
        .sinmun-nav nav .others-options ul li .nav-search .nav-search-inner input
        {
            padding-right : 50px;
        } 

</style>

<body>


    <!-- Start Header Area -->
    <header class="header-area pb-1">

        <!-- Start Navbar Area -->
        <div class="navbar-area">
            <div class="sinmun-mobile-nav">
                <div class="logo">
                    <a href="HomeBeritaHoax"><img src="resources/sinmun/assets/img/logo1.png" alt="logo"></a>
                </div>
            </div>

            <div class="sinmun-nav pt-0">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-dark">
                        <a class="navbar-brand" href="HomeBeritaHoax"><img src="resources/sinmun/assets/img/logo1.png"
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

                    <li class="nav-item"><a href="BerandaHoax" class="nav-link">Beranda</a></li>
                    
                        <li class="nav-item"><a href="" class="nav-link">Tentang</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="index.html" class="nav-link">Visi Misi</a></li>

                                <li class="nav-item"><a href="index-2.html" class="nav-link">Tugas Pokok Dan Fungsi</a></li>

                                <li class="nav-item"><a href="index-3.html" class="nav-link">Struktur Organisasi</a></li>
                            </ul>
                        </li>

                    
                        <li class="nav-item"><a href="post-category-1.html" class="nav-link">Layanan</a></li>

                        <li class="nav-item"><a href="post-category-5.html" class="nav-link">Berita</a></li>

                        <li class="nav-item"><a href="post-category-3.html" class="nav-link">Galeri</a></li>

                        <li class="nav-item"><a href="#" class="nav-link">Kontak</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="#" class="nav-link">Category Layout</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="post-category-1.html" class="nav-link">Category
                                                Layout 1</a></li>

                                        <li class="nav-item"><a href="post-category-2.html" class="nav-link">Category
                                                Layout 2</a></li>

                                        <li class="nav-item"><a href="post-category-3.html" class="nav-link">Category
                                                Layout 3</a></li>

                                        <li class="nav-item"><a href="post-category-4.html" class="nav-link">Category
                                                Layout 4</a></li>

                                        <li class="nav-item"><a href="post-category-5.html" class="nav-link">Category
                                                Layout 5</a></li>

                                        <li class="nav-item"><a href="post-category-6.html" class="nav-link">Category
                                                Layout 6</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item"><a href="#" class="nav-link">Post Fomate</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="single-post-1.html" class="nav-link">Single Post
                                                1</a></li>

                                        <li class="nav-item"><a href="single-post-2.html" class="nav-link">Single Post
                                                2</a></li>

                                        <li class="nav-item"><a href="single-post-3.html" class="nav-link">Single Post
                                                3</a></li>

                                        <li class="nav-item"><a href="single-post-4.html" class="nav-link">Single Post
                                                4</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item"><a href="author.html" class="nav-link">Author</a></li>

                                <li class="nav-item"><a href="contact.html" class="nav-link">Contact Us</a></li>

                                <li class="nav-item"><a href="login.html" class="nav-link">Log In</a></li>

                                <li class="nav-item"><a href="signup.html" class="nav-link">Sign Up</a></li>

                                <li class="nav-item"><a href="404-error.html" class="nav-link">404 Error</a>
                                </li>

                                <li class="nav-item"><a href="coming-soon.html" class="nav-link">Coming Soon</a>
                                </li>
                            </ul>
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

                                    <form class="">
                                        <span class="nav-search-close-button" tabindex="0">✕</span>
                                        <div class="nav-search-inner">
                                            <input type="text" name="search" placeholder="Search here....">
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

    @yield('footer')
    <!-- Start Footer Area -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="single-footer-widget">
                        

                        <div class="contact-info">
                            <p>You can reach us via phone, email and website. Or send us some message through our
                                Contact Page.</p>

                            <ul>
                                <li><i class="icofont-google-map"></i> 27 Division St, New York, NY 10002, USA</li>
                                <li><i class="icofont-phone"></i> <a href="#">+(587) 234-4521</a></li>
                                <li><i class="icofont-envelope"></i> <a href="#">info@sinmun.com</a></li>
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
                    <div class="single-footer-widget">
                        <h3>Latest News</h3>

                        <div class="footer-latest-news-list">
                            <div class="media latest-news-media align-items-center">
                                <a href="#">
                                    <img src="resources/sinmun/assets/img/small-2.jpg" alt="image">
                                </a>

                                <div class="content">
                                    <ul>
                                        <li><i class="icofont-calendar"></i> March 22, 2019</li>
                                        <li><a href="#"><i class="icofont-comment"></i> 12</a></li>
                                    </ul>

                                    <h3><a href="#">Judul berita terakhir</a></h3>
                                </div>
                            </div>

                            <div class="media latest-news-media align-items-center">
                                <a href="#">
                                    <img src="resources/sinmun/assets/img/small-4.jpg" alt="image">
                                </a>

                                <div class="content">
                                    <ul>
                                        <li><i class="icofont-calendar"></i> March 22, 2019</li>
                                        <li><a href="#"><i class="icofont-comment"></i> 12</a></li>
                                    </ul>

                                    <h3><a href="#">Judul berita terakhir</a></h3>
                                </div>
                            </div>

                            <div class="media latest-news-media align-items-center">
                                <a href="#">
                                    <img src="resources/sinmun/assets/img/small-3.jpg" alt="image">
                                </a>

                                <div class="content">
                                    <ul>
                                        <li><i class="icofont-calendar"></i> March 22, 2019</li>
                                        <li><a href="#"><i class="icofont-comment"></i> 12</a></li>
                                    </ul>

                                    <h3><a href="#">Judul berita terakhir</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
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
    <script src="resources/sinmun/assets/js/jquery.min.js"></script>
    <!-- Popper Min JS -->
    <script src="resources/sinmun/assets/js/popper.min.js"></script>
    <!-- Bootstrap Min JS -->
    <script src="resources/sinmun/assets/js/bootstrap.min.js"></script>
    <!-- MeanMenu JS -->
    <script src="resources/sinmun/assets/js/jquery.meanmenu.js"></script>
    <!-- Owl Carousel Min JS -->
    <script src="resources/sinmun/assets/js/owl.carousel.min.js"></script>
    <!-- Magnific Popup Min JS -->
    <script src="resources/sinmun/assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Form Validator Min JS -->
    <script src="resources/sinmun/assets/js/form-validator.min.js"></script>
    <!-- Contact Form Script JS -->
    <script src="resources/sinmun/assets/js/contact-form-script.js"></script>
    <!-- ajaxChimp Min JS -->
    <script src="resources/sinmun/assets/js/jquery.ajaxchimp.min.js"></script>
    <!-- Main JS -->
    <script src="resources/sinmun/assets/js/main.js"></script>
</body>

</html>

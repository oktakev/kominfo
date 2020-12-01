@extends('newfrontend.main')
@section('title','Kategori Hoax')

<style>
    .sinmun-nav nav .navbar-nav {
  margin-left: 0;
 
    }
</style>

    @section('navbar')
    

    <!--------------------->   
    <!------Content-------->
    <!--------------------->

        @section('content')   
        <!-- Start Default News Area -->
        <section class="default-news-area bg-color-none">
            <div class="container">
                <div class="row">
                    <div class="default-news-slides owl-carousel owl-theme">
                        <div class="col-lg-12 col-md-12">
                            <div class="single-default-news">
                                <img src="resources/sinmun/assets/img/1.jpg" alt="image">

                                <div class="news-content">
                                    <ul>
                                        <li><i class="icofont-user-suited"></i> by <a href="#">John Smith</a></li>
                                        <li><i class="icofont-calendar"></i> March 22, 2019</li>
                                    </ul>
                                    <h3><a href="#">As well as stopping goals for an, Cristiane Endler is opening.</a></h3>
                                </div>

                                <div class="tags">
                                    <a href="#">Sports</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="single-default-news">
                                <img src="resources/sinmun/assets/img/2.jpg" alt="image">

                                <div class="news-content">
                                    <ul>
                                        <li><i class="icofont-user-suited"></i> by <a href="#">John Smith</a></li>
                                        <li><i class="icofont-calendar"></i> March 22, 2019</li>
                                    </ul>
                                    <h3><a href="#">As well as stopping goals for an, Cristiane Endler is opening.</a></h3>
                                </div>

                                <div class="tags bg-2">
                                    <a href="#">Sports</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="single-default-news">
                                <img src="resources/sinmun/assets/img/3.jpg" alt="image">

                                <div class="news-content">
                                    <ul>
                                        <li><i class="icofont-user-suited"></i> by <a href="#">John Smith</a></li>
                                        <li><i class="icofont-calendar"></i> March 22, 2019</li>
                                    </ul>
                                    <h3><a href="#">As well as stopping goals for an, Cristiane Endler is opening.</a></h3>
                                </div>

                                <div class="tags bg-3">
                                    <a href="#">Sports</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="single-default-news">
                                <img src="resources/sinmun/assets/img/4.jpg" alt="image">

                                <div class="news-content">
                                    <ul>
                                        <li><i class="icofont-user-suited"></i> by <a href="#">John Smith</a></li>
                                        <li><i class="icofont-calendar"></i> March 22, 2019</li>
                                    </ul>
                                    <h3><a href="#">As well as stopping goals for an, Cristiane Endler is opening.</a></h3>
                                </div>

                                <div class="tags bg-4">
                                    <a href="#">Sports</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Default News Area -->

        <!-- Start All Category News Area -->
        <section class="all-category-news ptb-40">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="section-title">
                            <h2>All News</h2>
                        </div>
                        
                        <div class="single-category-news">
                            <div class="row m-0 align-items-center">
                                <div class="col-lg-5 col-md-6 p-0">
                                    <div class="category-news-image">
                                        <a href="#"><img src="resources/sinmun/assets/img/1.jpg" alt="image"></a>

                                        <div class="tags">
                                            <a href="#">Sports</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-7 col-md-6">
                                    <div class="category-news-content">
                                        <span><i class="icofont-clock-time"></i> 10 minutes ago</span>
                                        <h3><a href="#">Erik Jones Has Day He Won’t Soon Forget As Denny Backup At Bristol</a></h3>
                                        <p>Lorem Ipsum dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s andard dummy text ever since 1921.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pagination-area">
                            <a href="#" class="prev page-numbers"><i class="icofont-double-left"></i></a>
                            <a href="#" class="page-numbers">1</a>
                            <span class="page-numbers current" aria-current="page">2</span>
                            <a href="#" class="page-numbers">3</a>
                            <a href="#" class="page-numbers">4</a>
                            <a href="#" class="next page-numbers"><i class="icofont-double-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12">
                        
                        
                        <div class="featured-news">
                            <div class="section-title">
                                <h2>Featured News</h2>
                            </div>

                            <div class="single-featured-news">
                                <img src="resources/sinmun/assets/img/1.jpg" alt="image">

                                <div class="news-content">
                                    <ul>
                                        <li><i class="icofont-user-suited"></i> by <a href="#">John Smith</a></li>
                                        <li><i class="icofont-calendar"></i> March 22, 2019</li>
                                    </ul>
                                    <h3><a href="#">As well as stopping goals, Cristiane Endler is opening doors</a></h3>
                                </div>

                                <div class="tags">
                                    <a href="#">Sports</a>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- End All Category News Area -->
        @endsection
    <!--------------------->
    <!-----End Content----->
    <!--------------------->

    @section('navbar')
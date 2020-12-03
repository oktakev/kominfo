@extends('newfrontend.main')
@section('title','Home')


    @section('navbar')


    <!------Content-------->
    <!--------------------->
    <!--------------------->

    @section('content')
    <!-- Start Main Content Area -->
    <section class="main-content-area ptb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                    <div class="blog-box">
                        <div class="d-flex flex-wrap">
                            <div class="posts-thumb align-self-stretch">
                                <a href="#">
                                    <span class="fullimage thumb-bg1"></span>
                                </a>
                            </div>
                            <div class="posts-content">
                                <div class="cat">
                                    <a href="KategoriHoax">Kategori - Disinformasi</a>
                                </div>
                                <h3 class="title"><a href="#">Ini Judul Berita</a></h3>

                                <div class="posts-meta">
                                    <!-- <span class="posts-author"> -->
                                        <!-- <a href="KategoriHoax">Kategori - Disinformasi</a> -->
                                    <!-- </span> -->

                                    <!-- <span class="posts-date"> -->
                                        February 25, 2019
                                    <!-- </span> -->
                                </div>

                                <p>Integer at faucibus urna. Nullam condimentum leo id elit sagittis auctor. Curabitur
                                    elementum nunc.</p>

                                <a href="PostHoax" class="read-more-btn"><span>Baca Lanjutan</span> <i
                                        class="icofont-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Pagination -->
                    <div class="pagination-area">
                        <a href="#" class="prev page-numbers"><i class="icofont-double-left"></i></a>
                        <a href="#" class="page-numbers">1</a>
                        <span class="page-numbers current" aria-current="page">2</span>
                        <a href="#" class="page-numbers">3</a>
                        <a href="#" class="page-numbers">4</a>
                        <a href="#" class="next page-numbers"><i class="icofont-double-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4">
                    <aside class="widget-area" id="secondary">


                        <section class="widget wiget_posts_thumbs">
                            <h3 class="widget-title">Popular Posts</h3>

                            <article>
                                <a href="#" class="thumb">
                                    <span class="fullimage thumb-bg1"></span>
                                </a>

                                <div class="info">
                                    <time datetime="2019-05-11">May 11, 2019</time>
                                    <h4 class="title">
                                        <a href="#">Ini judul top topics</a>
                                    </h4>
                                </div>
                            </article>

                            <article>
                                <a href="#" class="thumb">
                                    <span class="fullimage thumb-bg2"></span>
                                </a>

                                <div class="info">
                                    <time datetime="2019-05-11">May 11, 2019</time>
                                    <h4 class="title">
                                        <a href="#">Ini judul top topics</a>
                                    </h4>
                                </div>
                            </article>

                            <article>
                                <a href="#" class="thumb">
                                    <span class="fullimage thumb-bg3"></span>
                                </a>

                                <div class="info">
                                    <time datetime="2019-05-11">May 11, 2019</time>
                                    <h4 class="title">
                                        <a href="#">Ini judul top topics</a>
                                    </h4>
                                </div>
                            </article>

                            <article>
                                <a href="#" class="thumb">
                                    <span class="fullimage thumb-bg4"></span>
                                </a>

                                <div class="info">
                                    <time datetime="2019-05-11">May 11, 2019</time>
                                    <h4 class="title">
                                        <a href="#">Ini judul top topics</a>
                                    </h4>
                                </div>
                            </article>
                        </section>

                        <section class="widget widget_categories">
                            <h3 class="widget-title">Kategori</h3>

                            <ul>
                                <li><a href="#">Hoax</a></li>
                                <li><a href="#">Disinformasi</a></li>
                            </ul>
                        </section>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- End Main Content Area -->
    @endsection

    <!--------------------->
    <!-----End Content----->
    <!--------------------->
    
    @section('footer')
   
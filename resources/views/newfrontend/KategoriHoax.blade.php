@extends('newfrontend.main')
@section('title','Kategori Hoax')


    @section('navbar')
    
    <!------Content-------->
    <!--------------------->
    <!--------------------->

    @section('content')
        <!-- Start All Category News Area -->
        <section class="all-category-news ptb-40">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="section-title">
                            <h2>Kategori - Hoax</h2>
                        </div>
                        @foreach($beritahoax as $h)
                        <div class="single-category-news">
                            <div class="row  m-0 align-items-center">
                                <div class="col-lg-5 col-md-6 p-0">
                                    <div class="category-news-image">
                                        <a href="PostHoax"><img style="height: 100px; width: 100px;"  src="{{ url('/images/gallery/'.$h->img) }}" alt="image"></a>

                                        <!-- <div class="tags bg-3">
                                            <a href="#">Hoax</a>
                                        </div> -->
                                    </div>
                                </div>

                                <div class="col-lg-7 col-md-6">
                                    <div class="category-news-content">
                                        <span><i class="icofont-clock-time"></i> {{ $h->tanggal_upload }}</span>
                                        <h3><a href="#">{{ $h->judul}}</a></h3>
                                        <p>{{ substr($h->content,0,150) }} ...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                                        <br/>
                                        Halaman : {{ $beritahoax->currentPage() }} <br/>
                                        Jumlah Data : {{ $beritahoax->total() }} <br/>
                                        Data Per Halaman : {{ $beritahoax->perPage() }} <br/>
                                                                            

                        <div class="pagination-area">
                            <a href="{{ $beritahoax->previousPageUrl() }}" class="prev page-numbers"><i class="icofont-double-left"></i></a>
                            <a href="#" class="page-numbers">1</a>
                            <span class="page-numbers current" aria-current="page">2</span>
                            <a href="#" class="page-numbers">3</a>
                            <a href="#" class="page-numbers">4</a>
                            <a href="{{ $beritahoax->nextPageUrl() }}" class="next page-numbers"><i class="icofont-double-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12">
                        
                         <div class="single-featured-news">
                            <div class="single-featured-news">
                                <div class="news-content">
                                    <ul>
                                        <li><i class="icofont-user-suited"></i> by <a href="#">John Smith</a></li>
                                        <li><i class="icofont-calendar"></i> March 22, 2019</li>
                                    </ul>
                                    <h3><a href="#">Newspaper Theme: Enhance Your Pages with the Row Divider</a></h3>
                                </div>

                                <div class="tags bg-3">
                                    <a href="#">Sports</a>
                                </div>

                                
                            </div>
                        </div>
                        <aside class="widget-area" id="secondary">
                            <section class="widget widget_categories">
                                <h3 class="widget-title">Kategori</h3>

                                <ul>
                                    <li><a href="KategoriHoax">Hoax</a></li>
                                    <li><a href="KategoriHoax">Disinformasi</a></li>
                                </ul>
                            </section>
                        </aside>
                    </div>
                </div>
            </div>
        </section>
        <!-- End All Category News Area -->

        @endsection

    <!--------------------->
    <!-----End Content----->
    <!--------------------->
    
    @section('footer')   
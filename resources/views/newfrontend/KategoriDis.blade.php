@extends('newfrontend.main')
@section('title','Kategori Hoax')
@section('beranda','./beranda')

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
                            <h2>Kategori - Disinformasi</h2>
                        </div>
                        @foreach($beritahoax as $h)
                        <div class="single-category-news">
                            <div class="row  m-0 align-items-center">
                                <div class="col-lg-5 col-md-6 p-0">
                                    <div class="category-news-image">
                                        <a href="PostHoax"><img width="480" height="240" src="{{ url('/images/gallery/'.$h->img) }}" alt="image"></a>

                                        <a href="PostHoax"><img width="400" height="200" src="{{ url('/images/gallery/'. $h->kategori .'.png') }}" alt="image" id="image2" style="position: absolute; top: 5px; left: 5px;"></a>

                                        <!-- <div class="tags bg-3">
                                            <a href="#">Hoax</a>
                                        </div> -->
                                    </div>
                                </div>

                                <div class="col-lg-7 col-md-6">
                                    <div class="category-news-content">
                                        <span><i class="icofont-clock-time"></i> {{ $h->tanggal_upload }}</span>
                                        <h3><a href="detil_hoax2/{{ $h->id_hoax }}">{{ $h->judul}}</a></h3>
                                        <div>
                                        <!-- {!! substr($h->content,0,150) !!} -->
                                        <p>Mungkin diisi sinopsis</p>
                                        <br><br>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                                        <!-- <br/>
                                        Halaman : {{ $beritahoax->currentPage() }} <br/>
                                        Jumlah Data : {{ $beritahoax->total() }} <br/>
                                        Data Per Halaman : {{ $beritahoax->perPage() }} <br/> -->
                    
                        <!-- <div class="single-category-news">
                            <div class="row m-0 align-items-center">
                                <div class="col-lg-5 col-md-6 p-0">
                                    <div class="category-news-image">
                                        <a href="PostHoax"><img src="resources/sinmun/assets/img/3.jpg" alt="image"></a>

                                        <div class="tags bg-5">
                                            <a href="#">Disinformasi</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-7 col-md-6">
                                    <div class="category-news-content">
                                        <span><i class="icofont-clock-time"></i> 10 minutes ago</span>
                                        <h3><a href="#">Ini juga Judul</a></h3>
                                        <p>INI KONTEN GK BENER</p>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        @if ($beritahoax->currentPage()  == 1)
                        <div class="pagination-area">
                        <a href="#" class="prev page-numbers"><i class="icofont-double-left"></i></a>
                            <span class="page-numbers current" aria-current="page">{{ $beritahoax->currentPage() }}</span>
                            <a href="kategori_disinformasi?page={{ $beritahoax->currentPage() + 1 }}" class="page-numbers">{{ $beritahoax->currentPage() + 1 }} </a>
                            <a href="kategori_disinformasi?page={{ $beritahoax->currentPage() + 2 }}" class="page-numbers">{{ $beritahoax->currentPage() + 2 }} </a>
                            <a href="{{ $beritahoax->nextPageUrl() }}" class="next page-numbers"><i class="icofont-double-right"></i></a>
                        </div>
                        @elseif ($beritahoax->currentPage()  == 2 && $beritahoax->currentPage() ==  $beritahoax->lastPage())
                        
                        
                        <div class="pagination-area">
                            <a href="{{ $beritahoax->previousPageUrl() }}" class="prev page-numbers"><i class="icofont-double-left"></i></a>
                            
                            <a href="kategori_disinformasi?page={{ $beritahoax->currentPage() - 1 }}" class="page-numbers">{{ $beritahoax->currentPage() - 1 }} </a>
                            <span class="page-numbers current" aria-current="page">{{ $beritahoax->currentPage() }}</span>
                            
                            <a href="{{ $beritahoax->nextPageUrl() }}" class="next page-numbers"><i class="icofont-double-right"></i></a>
                        </div>
                        @elseif ($beritahoax->currentPage()  == 2)
                        
                        
                        <div class="pagination-area">
                            <a href="{{ $beritahoax->previousPageUrl() }}" class="prev page-numbers"><i class="icofont-double-left"></i></a>
                            
                            <a href="kategori_disinformasi?page={{ $beritahoax->currentPage() - 1 }}" class="page-numbers">{{ $beritahoax->currentPage() - 1 }} </a>
                            <span class="page-numbers current" aria-current="page">{{ $beritahoax->currentPage() }}</span>
                            <a href="kategori_disinformasi?page={{ $beritahoax->currentPage() + 1 }}" class="page-numbers">{{ $beritahoax->currentPage() + 1 }} </a>
                            <a href="kategori_disinformasi?page={{ $beritahoax->currentPage() + 2 }}" class="page-numbers">{{ $beritahoax->currentPage() + 2 }} </a>
                            <a href="{{ $beritahoax->nextPageUrl() }}" class="next page-numbers"><i class="icofont-double-right"></i></a>
                        </div>
                        @elseif ($beritahoax->currentPage() ==  $beritahoax->lastPage() - 1)
                        
                        
                        <div class="pagination-area">
                            <a href="{{ $beritahoax->previousPageUrl() }}" class="prev page-numbers"><i class="icofont-double-left"></i></a>
                            <a href="kategori_disinformasi?page={{ $beritahoax->currentPage() - 2 }}" class="page-numbers">{{ $beritahoax->currentPage() - 2 }} </a>
                            <a href="kategori_disinformasi?page={{ $beritahoax->currentPage() - 1 }}" class="page-numbers">{{ $beritahoax->currentPage() - 1 }} </a>
                            <span class="page-numbers current" aria-current="page">{{ $beritahoax->currentPage() }}</span>
                            <a href="kategori_disinformasi?page={{ $beritahoax->currentPage() + 1 }}" class="page-numbers">{{ $beritahoax->currentPage() + 1 }} </a>
                            <a href="{{ $beritahoax->nextPageUrl() }}" class="next page-numbers"><i class="icofont-double-right"></i></a>
                        </div>
                        
                        @elseif ($beritahoax->currentPage() < $beritahoax->total() /  $beritahoax->perPage() )
                        
                        
                        <div class="pagination-area">
                            <a href="{{ $beritahoax->previousPageUrl() }}" class="prev page-numbers"><i class="icofont-double-left"></i></a>
                            <a href="kategori_disinformasi?page={{ $beritahoax->currentPage() - 2 }}" class="page-numbers">{{ $beritahoax->currentPage() - 2 }} </a>
                            <a href="kategori_disinformasi?page={{ $beritahoax->currentPage() - 1 }}" class="page-numbers">{{ $beritahoax->currentPage() - 1 }} </a>
                            <span class="page-numbers current" aria-current="page">{{ $beritahoax->currentPage() }}</span>
                            <a href="kategori_disinformasi?page={{ $beritahoax->currentPage() + 1 }}" class="page-numbers">{{ $beritahoax->currentPage() + 1 }} </a>
                            <a href="kategori_disinformasi?page={{ $beritahoax->currentPage() + 2 }}" class="page-numbers">{{ $beritahoax->currentPage() + 2 }} </a>
                            <a href="{{ $beritahoax->nextPageUrl() }}" class="next page-numbers"><i class="icofont-double-right"></i></a>
                        </div>
                       
                        
                        @elseif ($beritahoax->currentPage()  == $beritahoax->total() /  $beritahoax->perPage() )
                        
                        
                        <div class="pagination-area">
                            <a href="{{ $beritahoax->previousPageUrl() }}" class="prev page-numbers"><i class="icofont-double-left"></i></a>
                            <a href="kategori_disinformasi?page={{ $beritahoax->currentPage() - 2 }}" class="page-numbers">{{ $beritahoax->currentPage() - 2 }} </a>
                            <a href="kategori_disinformasi?page={{ $beritahoax->currentPage() - 1 }}" class="page-numbers">{{ $beritahoax->currentPage() - 1 }} </a>
                            <span class="page-numbers current" aria-current="page">{{ $beritahoax->currentPage() }}</span>
                            
                            <a href="{{ $beritahoax->nextPageUrl() }}" class="next page-numbers"><i class="icofont-double-right"></i></a>
                        </div>
                        @elseif ($beritahoax->currentPage()  > $beritahoax->total() /  $beritahoax->perPage() && $beritahoax->currentPage() ==  $beritahoax->lastPage())
                        
                        <div class="pagination-area">
                            <a href="{{ $beritahoax->previousPageUrl() }}" class="prev page-numbers"><i class="icofont-double-left"></i></a>
                            <a href="kategori_disinformasi?page={{ $beritahoax->currentPage() - 2 }}" class="page-numbers">{{ $beritahoax->currentPage() - 2 }} </a>
                            <a href="kategori_disinformasi?page={{ $beritahoax->currentPage() - 1 }}" class="page-numbers">{{ $beritahoax->currentPage() - 1 }} </a>
                            <span class="page-numbers current" aria-current="page">{{ $beritahoax->currentPage() }}</span>
                            
                            <a href="{{ $beritahoax->nextPageUrl() }}" class="next page-numbers"><i class="icofont-double-right"></i></a>
                        </div>
                        
                        @elseif ($beritahoax->currentPage()  > $beritahoax->total() /  $beritahoax->perPage() )
                        
                        
                        <div class="pagination-area">
                        <br>
                        <br><br>
                        <br><br><br>
                        <br><br><br><br>
                            <h1>GK ADA</h1>
                        <br><br><br><br>
                        <br><br><br>
                        <br><br>
                        <br>
                        <div class="pagination-area">
                            <a href="{{ $beritahoax->previousPageUrl() }}" class="prev page-numbers"><i class="icofont-double-left"></i></a>
                            <a href="kategori_disinformasi?page={{ $beritahoax->currentPage() - 2 }}" class="page-numbers">{{ $beritahoax->currentPage() - 2 }} </a>
                            <a href="kategori_disinformasi?page={{ $beritahoax->currentPage() - 1 }}" class="page-numbers">{{ $beritahoax->currentPage() - 1 }} </a>
                            <span class="page-numbers current" aria-current="page">{{ $beritahoax->currentPage() }}</span>
                            
                            <a href="{{ $beritahoax->nextPageUrl() }}" class="next page-numbers"><i class="icofont-double-right"></i></a>
                        </div>
                        </div>
                        @endif
                        
                        
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
                                    <li><a href="kategori_hoaks">Hoax</a></li>
                                    <li><a href="kategori_disinformasi">Disinformasi</a></li>
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
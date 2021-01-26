@extends('newfrontend.main')
@section('title','Home')
@section('beranda','./beranda')

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
            <div class="section-title">
                            <h2>Berita Terbaru</h2>
                        </div>
                <div class="blog-box">

                    <div class="d-flex flex-wrap">
                        @foreach($beritahoax as $h)
                        
                        <div class="posts-thumb align-self-stretch">
                        <a href="detil_hoax2/{{ $h->id_hoax }}"><img width="600" height="400" src="{{ url('/images/gallery/'.$h->img) }}" alt="image" class="responsive"></a>

                        <a href="detil_hoax2/{{ $h->id_hoax }}"><img width="400" height="200" src="{{ url('/images/gallery/'. $h->kategori .'.png') }}" alt="image" id="image2" style="position: absolute; top: 50px; left: 5px;" ></a>

                        
                        </div>

                        <div class="posts-content">
                            <div class="cat">
                                <a href="#">Kategori - {{ $h->kategori }}</a>
                            </div>
                            <h3 class="title"><a href="detil_hoax2/{{ $h->id_hoax }}">{{ $h->judul }}</a></h3>

                            <div class="posts-meta">
                            {{ $h->tanggal_upload }}
                            </div>

                            <p id="demo">
                            {!! substr("$h->content",0,100) !!} ...
                            <a href="detil_hoax2/{{ $h->id_hoax }}">Baca selengkapnya</a>
                            
                            </p>
              
                            
                                    <br>
                            <a href="PostHoax" class="read-more-btn"></a>
                        </div>
                        
                        @endforeach
                    </div>

                </div>

                <!-- Pagination -->
                @if ($beritahoax->currentPage()  == 1)
                        <div class="pagination-area">
                        <a href="#" class="prev page-numbers"><i class="icofont-double-left"></i></a>
                            <span class="page-numbers current" aria-current="page">{{ $beritahoax->currentPage() }}</span>
                            <a href="beranda?page={{ $beritahoax->currentPage() + 1 }}" class="page-numbers">{{ $beritahoax->currentPage() + 1 }} </a>
                            <a href="beranda?page={{ $beritahoax->currentPage() + 2 }}" class="page-numbers">{{ $beritahoax->currentPage() + 2 }} </a>
                            <a href="{{ $beritahoax->nextPageUrl() }}" class="next page-numbers"><i class="icofont-double-right"></i></a>
                        </div>
                        @elseif ($beritahoax->currentPage()  == 2 && $beritahoax->currentPage() ==  $beritahoax->lastPage())
                        
                        
                        <div class="pagination-area">
                            <a href="{{ $beritahoax->previousPageUrl() }}" class="prev page-numbers"><i class="icofont-double-left"></i></a>
                            
                            <a href="beranda?page={{ $beritahoax->currentPage() - 1 }}" class="page-numbers">{{ $beritahoax->currentPage() - 1 }} </a>
                            <span class="page-numbers current" aria-current="page">{{ $beritahoax->currentPage() }}</span>
                            
                            <a href="{{ $beritahoax->nextPageUrl() }}" class="next page-numbers"><i class="icofont-double-right"></i></a>
                        </div>
                        @elseif ($beritahoax->currentPage()  == 2)
                        
                        
                        <div class="pagination-area">
                            <a href="{{ $beritahoax->previousPageUrl() }}" class="prev page-numbers"><i class="icofont-double-left"></i></a>
                            
                            <a href="beranda?page={{ $beritahoax->currentPage() - 1 }}" class="page-numbers">{{ $beritahoax->currentPage() - 1 }} </a>
                            <span class="page-numbers current" aria-current="page">{{ $beritahoax->currentPage() }}</span>
                            <a href="beranda?page={{ $beritahoax->currentPage() + 1 }}" class="page-numbers">{{ $beritahoax->currentPage() + 1 }} </a>
                            <a href="beranda?page={{ $beritahoax->currentPage() + 2 }}" class="page-numbers">{{ $beritahoax->currentPage() + 2 }} </a>
                            <a href="{{ $beritahoax->nextPageUrl() }}" class="next page-numbers"><i class="icofont-double-right"></i></a>
                        </div>
                        @elseif ($beritahoax->currentPage() ==  $beritahoax->lastPage() - 1)
                        
                        
                        <div class="pagination-area">
                            <a href="{{ $beritahoax->previousPageUrl() }}" class="prev page-numbers"><i class="icofont-double-left"></i></a>
                            <a href="beranda?page={{ $beritahoax->currentPage() - 2 }}" class="page-numbers">{{ $beritahoax->currentPage() - 2 }} </a>
                            <a href="beranda?page={{ $beritahoax->currentPage() - 1 }}" class="page-numbers">{{ $beritahoax->currentPage() - 1 }} </a>
                            <span class="page-numbers current" aria-current="page">{{ $beritahoax->currentPage() }}</span>
                            <a href="beranda?page={{ $beritahoax->currentPage() + 1 }}" class="page-numbers">{{ $beritahoax->currentPage() + 1 }} </a>
                            <a href="{{ $beritahoax->nextPageUrl() }}" class="next page-numbers"><i class="icofont-double-right"></i></a>
                        </div>
                        
                        @elseif ($beritahoax->currentPage() < $beritahoax->total() /  $beritahoax->perPage() )
                        
                        
                        <div class="pagination-area">
                            <a href="{{ $beritahoax->previousPageUrl() }}" class="prev page-numbers"><i class="icofont-double-left"></i></a>
                            <a href="beranda?page={{ $beritahoax->currentPage() - 2 }}" class="page-numbers">{{ $beritahoax->currentPage() - 2 }} </a>
                            <a href="beranda?page={{ $beritahoax->currentPage() - 1 }}" class="page-numbers">{{ $beritahoax->currentPage() - 1 }} </a>
                            <span class="page-numbers current" aria-current="page">{{ $beritahoax->currentPage() }}</span>
                            <a href="beranda?page={{ $beritahoax->currentPage() + 1 }}" class="page-numbers">{{ $beritahoax->currentPage() + 1 }} </a>
                            <a href="beranda?page={{ $beritahoax->currentPage() + 2 }}" class="page-numbers">{{ $beritahoax->currentPage() + 2 }} </a>
                            <a href="{{ $beritahoax->nextPageUrl() }}" class="next page-numbers"><i class="icofont-double-right"></i></a>
                        </div>
                       
                        
                        @elseif ($beritahoax->currentPage()  == $beritahoax->total() /  $beritahoax->perPage() )
                        
                        
                        <div class="pagination-area">
                            <a href="{{ $beritahoax->previousPageUrl() }}" class="prev page-numbers"><i class="icofont-double-left"></i></a>
                            <a href="beranda?page={{ $beritahoax->currentPage() - 2 }}" class="page-numbers">{{ $beritahoax->currentPage() - 2 }} </a>
                            <a href="beranda?page={{ $beritahoax->currentPage() - 1 }}" class="page-numbers">{{ $beritahoax->currentPage() - 1 }} </a>
                            <span class="page-numbers current" aria-current="page">{{ $beritahoax->currentPage() }}</span>
                            
                            <a href="{{ $beritahoax->nextPageUrl() }}" class="next page-numbers"><i class="icofont-double-right"></i></a>
                        </div>
                        @elseif ($beritahoax->currentPage()  > $beritahoax->total() /  $beritahoax->perPage() && $beritahoax->currentPage() ==  $beritahoax->lastPage())
                        
                        <div class="pagination-area">
                            <a href="{{ $beritahoax->previousPageUrl() }}" class="prev page-numbers"><i class="icofont-double-left"></i></a>
                            <a href="beranda?page={{ $beritahoax->currentPage() - 2 }}" class="page-numbers">{{ $beritahoax->currentPage() - 2 }} </a>
                            <a href="beranda?page={{ $beritahoax->currentPage() - 1 }}" class="page-numbers">{{ $beritahoax->currentPage() - 1 }} </a>
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
                            <a href="beranda?page={{ $beritahoax->currentPage() - 2 }}" class="page-numbers">{{ $beritahoax->currentPage() - 2 }} </a>
                            <a href="beranda?page={{ $beritahoax->currentPage() - 1 }}" class="page-numbers">{{ $beritahoax->currentPage() - 1 }} </a>
                            <span class="page-numbers current" aria-current="page">{{ $beritahoax->currentPage() }}</span>
                            
                            <a href="{{ $beritahoax->nextPageUrl() }}" class="next page-numbers"><i class="icofont-double-right"></i></a>
                        </div>
                        </div>
                        @endif
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

                    </section>

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
<!-- End Main Content Area -->
@endsection

<!--------------------->
<!-----End Content----->
<!--------------------->

@section('footer')

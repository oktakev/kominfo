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

                <div class="blog-box">

                    <div class="d-flex flex-wrap">
                            @if (empty($hasil))

                            <h1>NO POST</h1>
                            @else
                        @foreach($hasil as $h)
                        <div class="posts-thumb align-self-stretch">
                        <a href="PostHoax"><img width="600" height="400" src="{{ url('/images/gallery/'.$h->img) }}" alt="image" class="responsive"></a>

                        <a href="PostHoax"><img width="400" height="200" src="{{ url('/images/gallery/'. $h->kategori .'.png') }}" alt="image" id="image2" style="position: absolute; top: 5px; left: 5px;" ></a>

                        
                        </div>

                        <div class="posts-content">
                            <div class="cat">
                                <a href="KategoriHoax">Kategori - {{ $h->kategori }}</a>
                            </div>
                            <h3 class="title"><a href="#">{{ $h->judul }}</a></h3>

                            <div class="posts-meta">
                            {{ $h->tanggal_upload }}
                            </div>

                            <p id="demo">
                            {!! substr("$h->content",0,100) !!}...
                            <a href="detil_hoax2/{{ $h->id_hoax }}">Baca selengkapnya</a>
                            
                            </p>
              
                            
                                    <br>
                            <a href="PostHoax" class="read-more-btn"></a>
                        </div>
                        
                        @endforeach
                    </div>

                </div>

                <!-- Pagination -->
                
                        </div>
                        @endif

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


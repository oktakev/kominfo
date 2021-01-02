@extends('newfrontend.main')
@section('title','Home')
@section('beranda','../beranda')

@section('navbar')
@stop

<!------Content-------->
<!--------------------->
<!--------------------->

@section('content2')

<!-- Start News Details Area -->
<section class="news-details-area-custom">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 offset-lg-2 offset-md-0">
                <div class="news-details">
                    @foreach($hoax as $h)
                    <div class="article-content">
                        <ul class="entry-meta">

                            <li><i class="icofont-eye-alt"></i> 1040</li>
                            <li><i class="icofont-calendar"></i> {{ $h->tanggal_upload }}</li>
                            <li><i class="icofont-eye-alt"></i>Kategori - {{ $h->kategori }}</li>
                        </ul>

                        <h3 class="mb-0">{{ $h->judul}}</h3>

                    </div>

                    <div class="article-img">


                        <img src="{{ url('/images/gallery/'.$h->img) }}" alt="image">
                        <img src="{{ url('/images/gallery/'. $h->kategori .'.png') }}" alt="image"
                            style="position: absolute; top: 200px; left: 5px;">
                    </div>

                    <div class="article-content">
                        {!! $h->content !!}
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>

</section>
<section class="more-news-area">
    <div class="container">
        <div class="more-news-inner">
            <div class="section-title">
                <h2>Berita Lainnya</h2>
            </div>

            <div class="row">
                <div class="more-news-slides owl-carousel owl-theme owl-loaded owl-drag">

                    <div class="owl-stage-outer">
                        <div class="owl-stage"
                            style="transform: translate3d(-1020px, 0px, 0px); transition: all 0.25s ease 0s; width: 2720px;">
                            @foreach($beritahoax as $h)
                            <div class="owl-item " style="width: 340px;">
                                <div class="col-lg-12 col-md-12">
                                    <div class="single-more-news">
                                    
                                        <img src="{{ url('/images/gallery/'.$h->img) }}" alt="image" class="responsive">

                                        <div class="news-content">
                                            <ul>
                                                
                                                <li><i class="icofont-calendar"></i> March 22, 2019</li>
                                            </ul>
                                            <h3><a href="#">{{ $h->judul }}</a></h3>
                                        </div>

                                        <div class="tags bg-4">
                                            <a href="#">{{ $h->kategori }}</a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            
                        </div>
                    </div>
                    <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i
                                class="icofont-rounded-left"></i></button><button type="button" role="presentation"
                            class="owl-next"><i class="icofont-rounded-right"></i></button></div>
                    <div class="owl-dots disabled"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End News Details Area -->
@endsection

<!--------------------->
<!-----End Content----->
<!--------------------->

@section('footer')

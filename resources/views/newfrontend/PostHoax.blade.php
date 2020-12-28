@extends('newfrontend.main')
@section('title','Home')


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
                                </ul>

                                <h3 class="mb-0">{{ $h->judul}}</h3>
                            </div>

                            <div class="article-img">
                                
                                <img src="{{ url('/images/gallery/'.$h->img) }}"  alt="image">
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
    <!-- End News Details Area -->
    @endsection

<!--------------------->
<!-----End Content----->
<!--------------------->

@section('footer')
    
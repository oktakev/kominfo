@extends('frontend.template.main')


@section('hoax')
            <div id="main">
                <div class="page_title transparent disable_title">
                    <div class="container">
                    </div>
                </div>
                <div class="container">

                    <div class="row">
                        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                            <div class="col_in __padd-right">
                                <div class="posts_list with_sidebar">
                                    <ul class="post_list_ul no-paginate">
                                    @foreach($beritahoax as $h)
                                    <!-- {{ $loop->iteration }} -->
                                        <li id="post-1853"
                                            class="stm_post_info post-1853 post type-post status-publish format-standard has-post-thumbnail hentry category-berita-terbaru">
                                            <h4 class="">{{ $h->judul}}</h4>
                                            <div class="stm_post_details clearfix">
                                                <ul class="clearfix">
                                                    <li class="post_date">
                                                        <i class="fa fa fa-clock-o"></i>{{ $h->tanggal_upload }}</li>
                                                    <!-- <li class="post_by">Posted by: <span>admin berita hoaks</span></li> -->
                                                    <li class="post_cat">Category: <span>{{ $h->kategori }}</span>
                                                    </li>
                                                </ul>
                                                <!-- <div class="comments_num">
                                                    <a
                                                        href="https://kominfo.bondowosokab.go.id/lindungi-pegawai-non-asn-bpjs-ketenagakerjaan-gelar-sosialisasi-di-diskominfo-bondowoso.html#respond"><i
                                                            class="fa fa-comment-o"></i>Tidak ada Komentar </a>
                                                </div> -->
                                            </div>
                                            <div class="post_thumbnail">
                                                <img width="800" height="458"
                                                    src="{{ url('/images/gallery/'.$h->img) }}"
                                                    class="attachment-consulting-image-1110x550-croped size-consulting-image-1110x550-croped wp-post-image"
                                                    alt="" loading="lazy"
                                                    srcset="{{ url('/images/gallery/'.$h->img) }}" /> </div>
                                            <div class="post_excerpt">
                                            </div>
                                            <div class="post_read_more">
                                                <a class="button bordered icon_right"
                                                    href="detil_hoax/{{ $h->id_hoax }}">
                                                    read more <i class="fa fa-chevron-right"></i>
                                                </a>
                                            </div>
                                        </li>
                                        @endforeach
                                        <br/>
                                        Halaman : {{ $beritahoax->currentPage() }} <br/>
                                        Jumlah Data : {{ $beritahoax->total() }} <br/>
                                        Data Per Halaman : {{ $beritahoax->perPage() }} <br/>
                                                                            
                                        
                                        {{ $beritahoax->links() }}
                                        
                                            
                                        
                                        <div class="post_read_more">
                                            <a class="button bordered icon_center"
                                                href="{{ $beritahoax->previousPageUrl() }}">
                                                  << 
                                            </a>

                                            <a class="button bordered icon_center"
                                                href="">
                                                 
                                            </a>                                            
                                            <a class="button bordered icon_center"
                                                href="{{ $beritahoax->nextPageUrl() }} ">
                                                >>
                                        
                                                
                                            </a>
                                            
                                            
                                        </div>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        
                        
@endsection
@section('berita_hoax_lainnya')

    <aside id="recent-posts-3" class="widget widget_recent_entries">
                                    <h5 class="widget_title">Berita Hoax Lainnya</h5>
                                    @foreach($beritahoax as $a)
                                    <ul>
                                        <li>
                                            <a
                                                href="detil_hoax/{{ $a->id_hoax }}">{{ $a->judul}}</a>
                                        </li>
                                        
                                    </ul>
                                    @endforeach
                                </aside>

@endsection

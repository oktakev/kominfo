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
                                                    src="https://kominfo.bondowosokab.go.id/wp-content/uploads/2019/04/Lindungi-Pegawai-Non-ASN-BPJS-Ketenagakerjaan-Gelar-Sosialisasi-di-Diskominfo-Bondowoso.jpg"
                                                    class="attachment-consulting-image-1110x550-croped size-consulting-image-1110x550-croped wp-post-image"
                                                    alt="" loading="lazy"
                                                    srcset="https://kominfo.bondowosokab.go.id/wp-content/uploads/2019/04/Lindungi-Pegawai-Non-ASN-BPJS-Ketenagakerjaan-Gelar-Sosialisasi-di-Diskominfo-Bondowoso.jpg 800w, https://kominfo.bondowosokab.go.id/wp-content/uploads/2019/04/Lindungi-Pegawai-Non-ASN-BPJS-Ketenagakerjaan-Gelar-Sosialisasi-di-Diskominfo-Bondowoso-300x172.jpg 300w, https://kominfo.bondowosokab.go.id/wp-content/uploads/2019/04/Lindungi-Pegawai-Non-ASN-BPJS-Ketenagakerjaan-Gelar-Sosialisasi-di-Diskominfo-Bondowoso-768x440.jpg 768w"
                                                    sizes="(max-width: 800px) 100vw, 800px" /> </div>
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

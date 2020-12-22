@extends('frontend.template.main')


@section('detil_hoax')
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
                                <div class="without_vc">
                                            <div class="post_details_wr">
                                            @foreach($hoax as $h)
                                                <div class="stm_post_info">

                                                    <div class="stm_post_details clearfix">
                                                        <div class="">

                                                            <h1 class="h2">{{ $h->judul}}</h1>
                                                        </div>
                                                        <ul class="clearfix">
                                                            <li class="post_date">
                                                                <i class="fa fa fa-clock-o"></i>{{ $h->tanggal_upload }}</li>
                                                            <!-- <li class="post_by">Posted by: <span>admin
                                                                    kominfo</span>
                                                            </li> -->
                                                            <li class="post_cat">Category: <span>{{ $h->kategori }}</span>
                                                    </li>
                                                        </ul>
                                                        <!-- <div class="comments_num">
                                                                <a
                                                                    href="https://kominfo.bondowosokab.go.id/lindungi-pegawai-non-asn-bpjs-ketenagakerjaan-gelar-sosialisasi-di-diskominfo-bondowoso.html#respond"><i
                                                                        class="fa fa-comment-o"></i>Tidak ada Komentar
                                                                </a>
                                                            </div> -->
                                                    </div>
                                                    <div class="post_thumbnail">
                                                        <img width="800" height="458"
                                                            src="https://kominfo.bondowosokab.go.id/wp-content/uploads/2019/04/Lindungi-Pegawai-Non-ASN-BPJS-Ketenagakerjaan-Gelar-Sosialisasi-di-Diskominfo-Bondowoso.jpg"
                                                            class="attachment-consulting-image-1110x550-croped size-consulting-image-1110x550-croped wp-post-image"
                                                            alt="" loading="lazy"
                                                            srcset="{{ url('/images/gallery/'.$h->img) }}"
                                                            sizes="(max-width: 800px) 100vw, 800px" /> </div>
                                                </div>
                                            </div>
                                            <div class="wpb_text_column">
                                                <!-- <p style="text-align: justify;">{{ $h->content }}</p> -->
                                                <article>
                                                {!! $h->content !!}
                                                <p>ini</p>

<p>adalah</p>

<p><strong>asu</strong></p>

<p><strong><em>goblok</em></strong></p>

<p><strong><em><s>guendeng</s></em></strong></p>

<p><a href="https://localhost/kominfo/detil_hoax/24">Dinas Komunikasi dan Informatika</a></p>
  
                                                </article>
                                                <section id='keyPointsSection'>
  <h2>Key Points:</h2>
  <ul><!-- extracted key points will go in here --></ul>
</section>
{{ $h->content }}
<p>Want to see where the key points are on the page? <button onclick='showKeyPoints(this)'>YES</button></p>
<!-- template for the key points  -->
<template id='keyPointsTemplate'>
  <li><slot name='keyPoints'></slot></li>
  <li style="text-align: center;">&#x2919;&mdash;&#x291a;</li>
</template>
<script>
/* extract key points */
const keyPointsTemplate = document.querySelector('#keyPointsTemplate').content;
const keyPointsSection = document.querySelector('#keyPointsSection > ul');
document.querySelectorAll('[slot]').forEach((slot)=>{
  let span = slot.parentNode.cloneNode(true);
  span.attachShadow({  mode: 'closed' }).appendChild(keyPointsTemplate.cloneNode(true));
  keyPointsSection.appendChild(span);
});






/* function to highlight/unhighlight the key points on the article */
function showKeyPoints(button){
  switch(button.textContent){
    case 'YES': document.querySelectorAll('article [slot]').forEach((span)=>{span.style.background = 'rgb(254, 231, 70)';}); 
    button.textContent = 'NO'; break;
    case 'NO': document.querySelectorAll('article [slot]').forEach((span)=>{span.style.background = 'none';}); 
    button.textContent = 'YES';
  }
}
</script>
                                            </div>
                                            <br />
                                            <br />
                                            @endforeach
                                        </div>
                                </div>

                            </div>
                        </div>
                        
                        
                        
    @endsection
    @section('berita_lainnya')
    <div class="vc_row wpb_row vc_row-fluid vc_custom_1556364350879">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div class="vc_custom_heading vc_custom_1556428511096 text_align_center">
                                    <h2 style="text-align: center" class="consulting-custom-title">Berita Terbaru</h2>
                                </div>

                                <div class="stm_news ">
                                    <ul class="news_list posts_per_row_4">

                                        <li>
                                            <div class="post_inner">
                                                <div class="image">
                                                    <a
                                                        href="https://kominfo.bondowosokab.go.id/lindungi-pegawai-non-asn-bpjs-ketenagakerjaan-gelar-sosialisasi-di-diskominfo-bondowoso.html">
                                                        <img width="350" height="250"
                                                            src="https://kominfo.bondowosokab.go.id/wp-content/uploads/2019/04/Lindungi-Pegawai-Non-ASN-BPJS-Ketenagakerjaan-Gelar-Sosialisasi-di-Diskominfo-Bondowoso-350x250.jpg"
                                                            class="attachment-consulting-image-350x250-croped" alt=""
                                                            loading="lazy"
                                                            srcset="https://kominfo.bondowosokab.go.id/wp-content/uploads/2019/04/Lindungi-Pegawai-Non-ASN-BPJS-Ketenagakerjaan-Gelar-Sosialisasi-di-Diskominfo-Bondowoso-350x250.jpg 350w, https://kominfo.bondowosokab.go.id/wp-content/uploads/2019/04/Lindungi-Pegawai-Non-ASN-BPJS-Ketenagakerjaan-Gelar-Sosialisasi-di-Diskominfo-Bondowoso-255x182.jpg 255w"
                                                            sizes="(max-width: 350px) 100vw, 350px"> </a>
                                                </div>
                                                <div class="category"><h5 class="no_stripe"><a
                                                    href="https://kominfo.bondowosokab.go.id/category/berita-terbaru"
                                                    rel="category tag">Berita Terbaru</a></h5>
                                                </div>    
                                                <div class="stm_news_unit-block">
                                                    <h5 class="no_stripe"><a
                                                            href="https://kominfo.bondowosokab.go.id/lindungi-pegawai-non-asn-bpjs-ketenagakerjaan-gelar-sosialisasi-di-diskominfo-bondowoso.html">Lindungi
                                                            Pegawai Non-ASN, BPJS Ketenagakerjaan Gelar Sosialisasi di
                                                            Diskominfo BondowosoLindungi
                                                            Pegawai Non-ASN, BPJS Ketenagakerjaan Gelar Sosialisasi di
                                                            Diskominfo Bondowoso Lindungi
                                                            Pegawai Non-ASN, BPJS Ketenagakerjaan Gelar Sosialisasi di
                                                            Diskominfo Bondowoso  </a>
                                                    </h5>
                                                    

                                                    <div class="stm_the_excerpt">
                                                        <p>Pegawai non-Aparatur Sipil Negara (ASN) di Dinas Komunikasi
                                                            dan Informatika (Diskominfo) Kabupaten Bondowoso mengikuti
                                                            sosialisasi program Badan Penyelenggaran Jaminan Sosial
                                                            (BPJS) Ketenagakerjaan di aula Diskominfo setempat, Rabu
                                                            (20/3/2019). Kepala Diskominfo Kabupaten Bondowoso, Haeriyah
                                                            Yuliati menyampaikan bahwa, keikutsertaan BPJS
                                                            Ketenagakerjaan menjadi sangat penting demi perlindungan
                                                            keselamatan para pegawai non-ASN di dinas yang dipimpinnya
                                                            itu. “Kami sebagai</p>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </li>
                                        
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                @endsection

                @section('berita_hoax_lainnya')

<aside id="recent-posts-3" class="widget widget_recent_entries">
                                <h5 class="widget_title">Berita Hoax Lainnya</h5>
                                @foreach($hoax as $a)
                                <ul>
                                    <li>
                                        <a
                                            href="detil_hoax/{{ $a->id_hoax }}">{{ $a->judul}}</a>
                                    </li>
                                    
                                </ul>
                                @endforeach
                            </aside>

@endsection


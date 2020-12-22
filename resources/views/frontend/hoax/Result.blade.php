@extends('frontend.template.main')
<p><strong><span>&sol; &ast;</span> Key points from the article, shown at the end, are extracted using HTML slot and Shadow DOM. <span>&ast; &sol;</span></strong></p>
<article>
  <h1>Bears</h1>
  <p>ini</p>

<p>adalah</p>

<p><strong>asu</strong></p>

<p><strong><em>goblok</em></strong></p>

<p><strong><em><s>guendeng</s></em></strong></p>

<p><a href="https://localhost/kominfo/detil_hoax/24">Dinas Komunikasi dan Informatika</a></p>
  
</article>

<!-- section where the extracted keypoints will be displayed -->
<section id='keyPointsSection'>
  <h2>Key Points:</h2>
  <ul><!-- extracted key points will go in here --></ul>
</section>
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
                            @if (empty($hasil))

                            <h1>NO POST</h1>
                            @else
                            @foreach($hasil as $h)
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
                                    <img width="800" height="458" src="{{ url('/images/gallery/'.$h->img) }}"
                                        class="attachment-consulting-image-1110x550-croped size-consulting-image-1110x550-croped wp-post-image"
                                        alt="" loading="lazy" srcset="{{ url('/images/gallery/'.$h->img) }}" /> </div>
                                <div class="post_excerpt">
                                </div>
                                <div class="post_read_more">
                                    <a class="button bordered icon_right" href="detil_hoax/{{ $h->id_hoax }}">
                                        read more <i class="fa fa-chevron-right"></i>
                                    </a>
                                </div>
                            </li>
                            @endforeach
                            <br />
                            Halaman : {{ $hasil->currentPage() }} <br />
                            Jumlah Data : {{ $hasil->total() }} <br />
                            Data Per Halaman : {{ $hasil->perPage() }} <br />


                            {{ $hasil->links() }}



                            <div class="post_read_more">
                                <a class="button bordered icon_center" href="{{ $hasil->previousPageUrl() }}">
                                    << </a> <a class="button bordered icon_center" href="">

                                </a>
                                <a class="button bordered icon_center" href="{{ $hasil->nextPageUrl() }} ">
                                    >>


                                </a>


                            </div>
                        </ul>
                        @endif
                    </div>

                </div>
            </div>


            @endsection

@extends('public.template.index')

@section('content')


<!-- download Section start -->
<section id="download" class="section bg-gray">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-8 col-xs-12">
        <div class="download-wrapper">
          <div>
            <div class="download-text">
              <h4>PT. Selaras Mitra Integra</h4>
              <p class="text-dark">PT Selaras Mitra Integra atau biasa disebut SMI merupakan perusahaan human resources management system atau human resources solution. SMI adalah konsultan yang fokus pada pengembangan human capital dan organisasi. SMI menggunakan pendekatan yang humanis dan metode-metode yang reliabel untuk membantu setiap human capital dan organisasi untuk berkembang. SMI mengkombinasikan teori dan praktik human resource sebagai pendekatan yang diterapkan. Spesialiasi SMI di area rekrutmen, assessment center, training & development, coaching & counseling, labour supply dan layanan terkait lainnya. SMI percaya bahwa manusia merupakan aset yang paling penting bagi organisasi. Paradigma ini memberi SMI perspektif yang unik dalam mencari solusi yang holistik akan masalah human capital dan organisasi.</p>
            </div>
            <div class="app-button">
            <!-- <a href="#" class="btn btn-border"><i class="lni-apple"></i>Download <br> <span>From App Store</span></a>
            <a href="#" class="btn btn-common btn-effect"><i class="lni-android"></i> Download <br> <span>From Play Store</span></a> -->
          </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-4 col-xs-12">
        <div class="download-thumb">
          <img class="img-fluid" src="{{asset('/img/smi-illustration.svg') }}" alt="">
        </div>
      </div>
    </div>
  </div>
</section>
<!-- download Section end -->

<!-- KategoriSection Start -->
<div class="container">
<section class="section-carousel owl-carousel" >
<section class="item category section bg-gray" style="width:100%;">
  <div class="container">
    <div class="section-header">
      <h2 class="section-title">Kategori</h2>
      <p>Lowongan Yang Dibuka</p>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6 col-xs-12 f-category">
        <a href="browse-jobs.html">
          <div class="icon bg-color-1">
            <i class="lni-home"></i>
          </div>
          <h3>Finance</h3>
          <p>(4286 jobs)</p>
        </a>
      </div>
</section>

<section class="item category section bg-gray" style="width:100%;">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title">Kategori</h2>
        <p>Lowongan Yang Dibuka</p>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-6 col-xs-12 f-category">
          <a href="browse-jobs.html">
            <div class="icon bg-color-1">
              <i class="lni-home"></i>
            </div>
            <h3>Finance</h3>
            <p>(4286 jobs)</p>
          </a>
        </div>
</section>
</section>
</div>
<!-- Mitra Section End -->

 <!-- Latest Section Start -->
 <section id="latest-jobs" class="section bg-gray">
  <div class="container">
    <div class="section-header">
      <h2 class="section-title">Lowongan Terakhir</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ellentesque dignissim quam et <br> metus effici turac fringilla lorem facilisis.</p>
    </div>
    <div class="row">
      <div class="col-lg-6 col-md-12 col-xs-12">
        <div class="jobs-latest">
          <div class="img-thumb">
            <img src="assets/img/features/img-1.jpg" alt="">
          </div>
          <div class="content">
            <h3><a href="job-details.html">UX Designer</a></h3>
            <p class="brand">MagNews</p>
            <div class="tags">
              <span><i class="lni-map-marker"></i> New York</span>
              <span><i class="lni-user"></i>  John Smith</span>
            </div>
            <div class="tag mb-3"><i class="lni-tag"></i> #Html #Css #PHP</div>
            <span class="full-time">Full Time</span>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 col-xs-12">
        <div class="jobs-latest">
          <div class="img-thumb">
            <img src="assets/img/features/img-2.jpg" alt="">
          </div>
          <div class="content">
            <h3><a href="job-details.html">UI Designer</a></h3>
            <p class="brand">Hunter Inc.</p>
            <div class="tags">
              <span><i class="lni-map-marker"></i> New York</span>
              <span><i class="lni-user"></i>  John Smith</span>
            </div>
            <div class="tag mb-3"><i class="lni-tag"></i> #Html #Css #PHP</div>
            <span class="part-time">Part Time</span>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 col-xs-12">
        <div class="jobs-latest">
          <div class="img-thumb">
            <img src="assets/img/features/img-3.jpg" alt="">
          </div>
          <div class="content">
            <h3><a href="job-details.html">Web Developer</a></h3>
            <p class="brand">MagNews</p>
            <div class="tags">
              <span><i class="lni-map-marker"></i> New York</span>
              <span><i class="lni-user"></i>  John Smith</span>
            </div>
            <div class="tag mb-3"><i class="lni-tag"></i> #Html #Css #PHP</div>
            <span class="full-time">Full Time</span>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 col-xs-12">
        <div class="jobs-latest">
          <div class="img-thumb">
            <img src="assets/img/features/img-4.jpg" alt="">
          </div>
          <div class="content">
            <h3><a href="job-details.html">UX Designer</a></h3>
            <p class="brand">AmazeSoft</p>
            <div class="tags">
              <span><i class="lni-map-marker"></i> New York</span>
              <span><i class="lni-user"></i>  John Smith</span>
            </div>
            <div class="tag mb-3"><i class="lni-tag"></i> #Html #Css #PHP</div>
            <span class="full-time">Full Time</span>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 col-xs-12">
        <div class="jobs-latest">
          <div class="img-thumb">
            <img src="assets/img/features/img-2.jpg" alt="">
          </div>
          <div class="content">
            <h3><a href="job-details.html">Digital Marketer</a></h3>
            <p class="brand">Bingo</p>
            <div class="tags">
              <span><i class="lni-map-marker"></i> New York</span>
              <span><i class="lni-user"></i>  John Smith</span>
            </div>
            <div class="tag mb-3"><i class="lni-tag"></i> #Html #Css #PHP</div>
            <span class="part-time">Part Time</span>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 col-xs-12">
        <div class="jobs-latest">
          <div class="img-thumb">
            <img src="assets/img/features/img-1.jpg" alt="">
          </div>
          <div class="content">
            <h3><a href="job-details.html">Web Developer</a></h3>
            <p class="brand">MagNews</p>
            <div class="tags">
              <span><i class="lni-map-marker"></i> New York</span>
              <span><i class="lni-user"></i>  John Smith</span>
            </div>
            <div class="tag mb-3"><i class="lni-tag"></i> #Html #Css #PHP</div>
            <span class="full-time">Full Time</span>
          </div>
        </div>
      </div>
      <div class="col-12 text-center mt-4">
        <a href="job-page.html" class="btn btn-common"><i class="fa fa-search">&nbsp;</i>Cari Lowogan Lain</a>
      </div>
    </div>
  </div>
</section>
<!-- Latest Section End -->
@endsection
@section('script')
<script>
  $(".section-carousel").owlCarousel({
    loop:true,
    autoplay:true,
    autoplayTimeout:2000,
    autoplayHoverPause:true,
    dots:true,
    responsive:{
        0:{
          items:1
        },
      991:{
            items:1
          }
      }

  });
</script>
@endsection

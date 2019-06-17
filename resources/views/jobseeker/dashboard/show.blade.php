@extends('jobseeker.template.index_content')

@section('content')

<!-- Job Detail Section Start -->
<section class="job-detail section">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-lg-8 col-md-12 col-xs-12">
        <div class="content-area">
          <h4>Deskripsi Pekerjaan</h4>
          {!!$lowongan->deskripsi_pekerjaan!!}
          <h5>Persyaratan</h5>
          {!!$lowongan->persyaratan!!}
          <a href="#" class="btn btn-common">Lamar Pekerjaan</a>
        </div>
      </div>
      <div class="col-lg-4 col-md-12 col-xs-12">
        <div class="sideber">
          <div class="widghet">
            <h3>Job Location</h3>
            <div class="maps">
              <div id="map" class="map-full">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d405691.57240383344!2d-122.3212843181106!3d37.40247298383319!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb68ad0cfc739%3A0x7eb356b66bd4b50e!2sSilicon+Valley%2C+CA%2C+USA!5e0!3m2!1sen!2sbd!4v1538319316724" allowfullscreen=""></iframe>
              </div>
            </div>
          </div>
          <div class="widghet">
            <h3>Share This Job</h3>
            <div class="share-job">
              <form method="post" class="subscribe-form">
                <div class="form-group">
                  <input type="email" name="Email" class="form-control" placeholder="https://joburl.com" required="">
                  <button type="submit" name="subscribe" class="btn btn-common sub-btn"><i class="lni-files"></i></button>
                  <div class="clearfix"></div>
                </div>
              </form>
              <ul class="mt-4 footer-social">
                <li><a class="facebook" href="#"><i class="lni-facebook-filled"></i></a></li>
                <li><a class="twitter" href="#"><i class="lni-twitter-filled"></i></a></li>
                <li><a class="linkedin" href="#"><i class="lni-linkedin-fill"></i></a></li>
                <li><a class="google-plus" href="#"><i class="lni-google-plus"></i></a></li>
              </ul>
              <div class="meta-tag">
                <span class="meta-part"><a href="#"><i class="lni-star"></i> Write a Review</a></span>
                <span class="meta-part"><a href="#"><i class="lni-warning"></i> Reports</a></span>
                <span class="meta-part"><a href="#"><i class="lni-share"></i> Share</a></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Job Detail Section End -->


@endsection

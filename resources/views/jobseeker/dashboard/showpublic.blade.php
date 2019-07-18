@extends('jobseeker.template.index')

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
          <br><br>
          <a href="{{url('login')}}" class="btn btn-common">Lamar Pekerjaan</a>
        </div>
      </div>
      <div class="col-lg-4 col-md-12 col-xs-12">
        <div class="sideber">
          <div class="widghet">
            <h3>Lokasi Pekerjaan</h3>
            <div class="maps">
              <div id="map" class="map-full">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d405691.57240383344!2d-122.3212843181106!3d37.40247298383319!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb68ad0cfc739%3A0x7eb356b66bd4b50e!2sSilicon+Valley%2C+CA%2C+USA!5e0!3m2!1sen!2sbd!4v1538319316724" allowfullscreen=""></iframe>
              </div>
            </div>
          </div>
          <div class="widghet">
            <h3>Share Pekerjaan Ini</h3>
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
               <!--These buttons are created by frinmash.blogspot.com,frinton madtha-->
               <div id="share-buttons">
                 <!-- Facebook -->
                 <a href="https://www.facebook.com/sharer.php?u={{url()->current()}}" target="_blank"><img src="https://4.bp.blogspot.com/-raFYZvIFUV0/UwNI2ek6i3I/AAAAAAAAGSA/zs-kwq0q58E/s1600/facebook.png" alt="Facebook" /></a>
                 <!-- Twitter -->
                 <a href="https://twitter.com/share?url=https://frinmash.blogspot.com&text=Simple Share Buttons" target="_blank"><img src="https://4.bp.blogspot.com/--ISQEurz3aE/UwNI4hDaQMI/AAAAAAAAGS4/ZAgmPiM9Xpk/s1600/twitter.png" alt="Twitter" /></a>
                 <!-- Google+ -->
                 <a href="https://plus.google.com/share?url=https://frinmash.blogspot.com" target="_blank"><img src="https://2.bp.blogspot.com/-9ijXNtKTaSk/UwNI3ANT4MI/AAAAAAAAGSY/Tu4kE8x9SnI/s1600/google.png" alt="Google" /></a>
                 <!-- LinkedIn -->
                 <a href="https://www.linkedin.com/shareArticle?mini=true&url=https://frinmash.blogspot.com" target="_blank"><img src="https://2.bp.blogspot.com/-3_cATk7Wlho/UwNI3eoTTLI/AAAAAAAAGSQ/Y8cpq6S-SeQ/s1600/linkedin.png" alt="LinkedIn" /></a>
                 <!-- Pinterest -->
                 <a href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','https://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());"><img src="https://2.bp.blogspot.com/-3CfsOmDx-Dg/UwNI3kMVjgI/AAAAAAAAGSU/OSixn3lcjX4/s1600/pinterest.png" alt="Pinterest" /></a>
                 <!-- Email -->
                 <a href="mailto:?Subject=FrinMash&Body=I%20saw%20this%20and%20thought%20of%20you!%20 https://frinmash.blogspot.com"><img src="https://4.bp.blogspot.com/-njgKtNLrPqI/UwNI2o-9WfI/AAAAAAAAGR4/f8da1gBgyLs/s1600/email.png" alt="Email" /></a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Job Detail Section End -->


@endsection

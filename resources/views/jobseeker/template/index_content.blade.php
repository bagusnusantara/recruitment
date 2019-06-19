<!DOCTYPE html>
<html lang="en">
  <head>
      @include('jobseeker/template/head')
      @yield('css')
  </head>

  <body>


    @include('jobseeker/template/header_content')
    @yield('content')

    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="lni-arrow-up"></i>
    </a>

    <!-- Preloader -->
    <div id="preloader">
      <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->
    @include('jobseeker/template/footer')
    @include('jobseeker/template/script')
    @yield('script')
  </body>
</html>
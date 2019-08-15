<!DOCTYPE html>
<html lang="en">
  <head>
      @include('public/template/head')
      
  </head>

  <body>
    @include('public/template/header') 
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
    @include('public/template/footer')
    @include('public/template/script')
    @yield('script')
  </body>
</html>

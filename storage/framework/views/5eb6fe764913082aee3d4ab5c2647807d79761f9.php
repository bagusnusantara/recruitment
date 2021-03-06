<!-- Header Section Start -->
<header id="home" class="hero-area">
  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar">
    <div class="container">
      <div class="theme-header clearfix">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            <span class="lni-menu"></span>
            <span class="lni-menu"></span>
            <span class="lni-menu"></span>
          </button>
        <a href="<?php echo e(route('JobseekerDashboard')); ?>" class="navbar-brand"><img src="<?php echo e(asset('jobx/assets/img/logo.png')); ?>" alt=""></a>
        </div>
        <div class="collapse navbar-collapse" id="main-navbar">
          <ul class="navbar-nav mr-auto w-100 justify-content-end">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(url('jobseeker/dashboard')); ?>">
                Lowongan Pekerjaan
              </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url('jobseeker/datadiri')); ?>">
                  Data Diri
                </a>
              </li>
            <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Profil Saya
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="about.html">About</a></li>
                <li><a class="dropdown-item" href="job-page.html">Job Page</a></li>
                <li><a class="dropdown-item" href="job-details.html">Job Details</a></li>
              </ul>
            </li> -->

            <li>
              <a class="nav-link" href="">
                Welcome <?php echo e(Auth::user()->name); ?> !
              </a>

            </li>
            <li class="button-group">
              <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="button btn btn-common">Sign out</a>
              <form id="logout-form" method="POST" action="<?php echo e(route('logout')); ?>" style="display: none">
                <?php echo csrf_field(); ?>
              </form>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="mobile-menu" data-logo="<?php echo e(asset('jobx/assets/img/logo-mobile.png')); ?>"></div>
  </nav>
  <!-- Navbar End -->

  <!-- Page Header Start -->
<div class="page-header">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="inner-header">
        <?php echo $__env->yieldContent('header-title'); ?>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Page Header End -->

</header>
<!-- Header Section End -->
<?php /**PATH C:\xampp\htdocs\recruitment\resources\views/jobseeker/template/header_content.blade.php ENDPATH**/ ?>
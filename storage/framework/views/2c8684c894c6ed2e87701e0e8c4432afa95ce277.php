<!DOCTYPE html>
<html lang="en">
  <head>
      <?php echo $__env->make('jobseeker/template/head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </head>

  <body>
    <?php echo $__env->make('jobseeker/template/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('content'); ?>
    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="lni-arrow-up"></i>
    </a>

    <!-- Preloader -->
    <div id="preloader">
      <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->
    <?php echo $__env->make('jobseeker/template/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('jobseeker/template/script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  </body>
</html>
<?php /**PATH C:\xampp\htdocs\recruitment\resources\views/jobseeker/template/index.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>

<!-- Job Browse Section Start -->
<section class="job-browse section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-xs-12">
        <div class="wrap-search-filter row">
          <div class="col-lg-5 col-md-5 col-xs-12">
            <input type="text" class="form-control" placeholder="Keyword: Name, Tag">
          </div>
          <div class="col-lg-5 col-md-5 col-xs-12">
            <input type="text" class="form-control" placeholder="Location: City, State, Zip">
          </div>
          <div class="col-lg-2 col-md-2 col-xs-12">
            <button type="submit" class="btn btn-common float-right">Filter</button>
          </div>
        </div>
      </div>
      <?php $__currentLoopData = $lowongan_pekerjaan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lowongan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="col-lg-6 col-md-12 col-xs-12">
        <a class="job-listings-featured" href="<?php echo e(route('PublicLowonganById',['id'=>$lowongan->id])); ?>">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12">
              <div class="job-company-logo">
                <!-- <img src="<?php echo e(asset('jobx/assets/img/features/img1.png')); ?>" alt=""> -->
              </div>
              <div class="job-details">
                <h3><b><?php echo e($lowongan->job_tittle); ?></b><br></h3>
                <span class="company-neme"><?php echo e($lowongan->nama_client); ?></span>
                <div class="tags">
                  <span><i class="lni-map-marker"></i> Surabaya</span>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12 text-right">
              <div class="tag-type">
                <span class="heart-icon">
                  <i class="lni-heart"></i>
                </span>
                <span class="full-time">Full Time</span>
              </div>
            </div>
          </div>
        </a>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      <div class="col-lg-12 col-md-12 col-xs-12">
        <!-- Start Pagination -->
        <ul class="pagination">
          <?php echo e($lowongan_pekerjaan->links()); ?>

        </ul>
        <!-- End Pagination -->
      </div>
    </div>
  </div>
</section>
<!-- Job Browse Section End -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('public.template.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\recruitment\resources\views/public/dashboard/index.blade.php ENDPATH**/ ?>
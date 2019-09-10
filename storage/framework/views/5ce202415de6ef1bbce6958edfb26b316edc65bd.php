<?php $__env->startSection('content'); ?>

    <!-- Content section Start -->
    <section id="content" class="section-padding">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 col-md-6 col-xs-12">
            <div class="page-login-form box">
              <h3>
                Login
              </h3>
              <form class="login-form" method="POST" action="<?php echo e(route('login')); ?>">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                  <div class="input-icon">
                    <i class="lni-user"></i>
                    <input type="email" id="email" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email" placeholder="Alamat Email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>
                  </div>
                  <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                      <span class="invalid-feedback" role="alert">
                          <strong><?php echo e($message); ?></strong>
                      </span>
                  <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                </div>
                <div class="form-group">
                  <div class="input-icon">
                    <i class="lni-lock"></i>
                    <input type="password" id="password" class="form-control <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="password" required autocomplete="current-password" placeholder="Password">
                  </div>
                </div>
                <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Keep Me Signed In</label>
                </div>
                <button class="btn btn-common log-btn">Submit</button>
              </form>
              <ul class="form-links">
                <li class="text-center"><a href="<?php echo e(route('register')); ?>">Belum punya akun?</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Content section End -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('jobseeker.template.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\recruitment\resources\views/auth/login.blade.php ENDPATH**/ ?>
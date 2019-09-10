<input type="hidden" name="hseq" id="hseq" value="" />
<input type="hidden" name="huser_login" id="huser_login" value="" />
<div class="form-group"><label class="col-sm-4 control-label">User Login</label>
  <div class="col-sm-8">
     <select class="form-control chosen-select-width" name="user_login" id="user_login">
            <option value="null" selected disabled>--Roles--</option>
             <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($data->roles); ?>">  <?php echo e($data->roles); ?></option>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
  </div>
</div>
<div class="form-group"><label class="col-sm-4 control-label">Nama</label>
    <div class="col-sm-8"><input type="text"  class="form-control" name="nama" id="nama"></div>
</div>
<?php /**PATH C:\xampp\htdocs\recruitment\resources\views/hrd/setup/creatorpaymentrequisition/form.blade.php ENDPATH**/ ?>
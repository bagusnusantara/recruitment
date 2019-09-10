<input type="hidden" name="hkode_group" id="hkode_group" value="" />
<input type="hidden" name="hschid" id="hschid" value="" />
<div class="form-group"><label class="col-sm-4 control-label">Kode Group</label>
  <div class="col-sm-8">
     <select class="form-control chosen-select-width" name="kode_group" id="kode_group">
            <option value="null" selected disabled>--kode_group--</option>
             <?php $__currentLoopData = $st_group; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($data->kode); ?>">  <?php echo e($data->deskripsi); ?></option>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
  </div>
</div>
<div class="form-group"><label class="col-sm-4 control-label">Kode jadwal</label>
  <div class="col-sm-8">
     <select class="form-control chosen-select-width" name="schid" id="schid">
            <option value="null" selected disabled>--schid--</option>
             <?php $__currentLoopData = $schclass; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($data->kode); ?>">  <?php echo e($data->deskripsi); ?></option>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
  </div>
</div>
<?php /**PATH C:\xampp\htdocs\recruitment\resources\views/hrd/setup/jadwalgroup/form.blade.php ENDPATH**/ ?>
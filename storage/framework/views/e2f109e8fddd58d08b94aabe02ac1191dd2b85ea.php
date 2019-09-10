<input type="hidden" name="hnik" id="hnik" value="" />
<input type="hidden" name="hschid" id="hschid" value="" />
<div class="form-group"><label class="col-sm-4 control-label">NIK</label>
  <div class="col-sm-8">
     <select class="form-control chosen-select-width" name="nik" id="nik">
            <option value="null" selected disabled>--NIK--</option>
             <?php $__currentLoopData = $md_karyawan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($data->NIK); ?>">  <?php echo e($data->NIK); ?> - <?php echo e($data->nama_lengkap); ?></option>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
  </div>
</div>
<div class="form-group"><label class="col-sm-4 control-label">Kode Jadwal</label>
  <div class="col-sm-8">
     <select class="form-control chosen-select-width" name="schid" id="schid">
            <option value="null" selected disabled>--kode jadwal--</option>
             <?php $__currentLoopData = $schclass; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($data->kode); ?>">  <?php echo e($data->kode); ?> - <?php echo e($data->deskripsi); ?></option>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
  </div>
</div>
<?php /**PATH C:\xampp\htdocs\recruitment\resources\views/hrd/setup/jadwalpersonal/form.blade.php ENDPATH**/ ?>
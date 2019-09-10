<input type="hidden" name="hseq" id="hseq" value="" />
<div class="form-group"><label class="col-sm-4 control-label">Nama</label>
    <div class="col-sm-8"><input type="text" class="form-control" name="nama" id="nama"></div>
</div>
<div class="form-group"><label class="col-sm-4 control-label">Jabatan</label>
  <div class="col-sm-8">
     <select class="form-control chosen-select-width" name="jabatan" id="jabatan">
            <option value="null" selected disabled>--Jabatan--</option>
             <?php $__currentLoopData = $st_jabatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($data->Deskripsi); ?>">  <?php echo e($data->Deskripsi); ?></option>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
  </div>
</div><?php /**PATH C:\xampp\htdocs\recruitment\resources\views/hrd/setup/penandatanganangaji/form.blade.php ENDPATH**/ ?>
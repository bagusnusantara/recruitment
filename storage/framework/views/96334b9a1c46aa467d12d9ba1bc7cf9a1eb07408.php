<input type="hidden" name="hseq" id="hseq" value="" />
<div class="form-group"><label class="col-sm-4 control-label">NIK Karyawan</label>
  <div class="col-sm-8">
     <select class="form-control chosen-select-width" name="nik" id="nik">
            <option value="null" selected disabled>--nik--</option>
             <?php $__currentLoopData = $md_karyawan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($data->NIK); ?>"><?php echo e($data->NIK); ?> - <?php echo e($data->nama_lengkap); ?></option>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
  </div>
</div>
<div class="form-group"><label class="col-sm-4 control-label">Sisa Cuti</label>
    <div class="col-sm-8"><input type="number" step="any" maxlength="2" class="form-control" name="sisa_cuti" id="sisa_cuti"></div>
</div>
<?php /**PATH C:\xampp\htdocs\recruitment\resources\views/hrd/setup/sisacuti/form.blade.php ENDPATH**/ ?>
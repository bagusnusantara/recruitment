<input type="hidden" name="htgl_libur" id="htgl_libur" value="" />
<div class="form-group"><label class="col-sm-4 control-label">Tanggal Libur</label>
    <div class="col-sm-8"><input type="text" class="form-control date input-sm" name="tgl_libur" id="tgl_libur" value="<?php echo e(\Carbon\Carbon::now()->toDateString()); ?>"></div>
</div>
<div class="form-group"><label class="col-sm-4 control-label">Kode Hari Libur</label>
  <div class="col-sm-8">
     <select class="form-control chosen-select-width" name="kode_hari_libur" id="kode_hari_libur">
            <option value="null" selected disabled>--Kode hari libur--</option>
             <?php $__currentLoopData = $hari_libur; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($data->id); ?>">  <?php echo e($data->id); ?> - <?php echo e($data->deskripsi); ?></option>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
  </div>
</div>
<div class="form-group"><label class="col-sm-4 control-label">Keterangan</label>
    <div class="col-sm-8"><input type="text" class="form-control" name="keterangan" id="keterangan"></div>
</div>
<div class="form-group"><label class="col-sm-4 control-label">ID Lebaran</label>
  <div class="col-sm-8">
     <select class="form-control chosen-select-width" name="id_lebaran" id="id_lebaran">
            <option value="null" selected disabled>--id lebaran--</option>
            <option value="1">Ya</option>
            <option value="0">TIdak</option>
      </select>
  </div>
</div>
<div class="form-group"><label class="col-sm-4 control-label">ID Cuti bersama</label>
  <div class="col-sm-8">
     <select class="form-control chosen-select-width" name="id_cutibersama" id="id_cutibersama">
            <option value="null" selected disabled>--id cuti bersama--</option>
            <option value="1">Ya</option>
            <option value="0">TIdak</option>
      </select>
  </div>
</div>
<?php /**PATH C:\xampp\htdocs\recruitment\resources\views/hrd/setup/kalenderlibur/form.blade.php ENDPATH**/ ?>
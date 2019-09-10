<input type="hidden" name="hid" id="hid" value="" />
<div class="form-group"><label class="col-sm-4 control-label">Tanggal</label>
    <div class="col-sm-8"><input type="text" class="form-control date input-sm" name="tanggal" id="tanggal" value="<?php echo e(\Carbon\Carbon::now()->toDateString()); ?>"></div>
</div>
<div class="form-group"><label class="col-sm-4 control-label">Deskripsi</label>
    <div class="col-sm-8"><input type="text" class="form-control" name="deskripsi" id="deskripsi"></div>
</div>
<div class="form-group"><label class="col-sm-4 control-label">Kategori</label>
  <div class="col-sm-8">
     <select class="form-control chosen-select-width" name="kategori" id="kategori">
            <option value="null" selected disabled>--Kategori--</option>
             <?php $__currentLoopData = $st_Kategoripekerjaan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($data->id); ?>">  <?php echo e($data->deskripsi); ?></option>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
  </div>
</div>
<?php /**PATH C:\xampp\htdocs\recruitment\resources\views/hrd/setup/harilibur/form.blade.php ENDPATH**/ ?>
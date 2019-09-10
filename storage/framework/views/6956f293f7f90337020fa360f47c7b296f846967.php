<input type="hidden" name="id" id="id" value="" />
<input type="hidden" name="uukode_jabatan" id="uukode_jabatan" value="" />
<input type="hidden" name="uukode_site" id="uukode_site" value="" />
<div class="form-group"><label class="col-sm-4 control-label">Kode Jabatan</label>
  <div class="col-sm-8">
     <select class="form-control chosen-select-width" name="kode_jabatan" id="kode_jabatan">
            <option value="null" selected disabled>--Jabatan--</option>
             <?php $__currentLoopData = $st_jabatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($data->kode); ?>">  <?php echo e($data->kode); ?> - <?php echo e($data->Deskripsi); ?></option>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
  </div>
</div>
<div class="form-group"><label class="col-sm-4 control-label">Nama Lokasi kerja</label>
  <div class="col-sm-8">
     <select class="form-control chosen-select-width" name="kode_site" id="kode_site">
            <option value="null" selected disabled>--Lokasi kerja--</option>
             <?php $__currentLoopData = $md_client; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($data->id); ?>">  <?php echo e($data->nama_client); ?></option>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
  </div>
</div>
<div class="form-group"><label class="col-sm-4 control-label">Tunjangan Jabatan</label>
    <div class="col-sm-8"><input type="number" step="any" class="form-control" name="tunjangan_jabatan" id="tunjangan_jabatan"></div>
</div>
<div class="form-group"><label class="col-sm-4 control-label">Tanggal Berlaku</label>
    <div class="col-sm-8"><input type="text" class="form-control date input-sm" name="tanggal_berlaku" id="tanggal_berlaku"></div>
</div>
<?php /**PATH C:\xampp\htdocs\recruitment\resources\views/hrd/setup/tunjanganjabatan/form.blade.php ENDPATH**/ ?>
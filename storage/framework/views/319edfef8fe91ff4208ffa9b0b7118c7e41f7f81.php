<input type="hidden" name="htgl_berlaku" id="htgl_berlaku" value="" />
<input type="hidden" name="hkode_lokasi" id="hkode_lokasi" value="" />
<input type="hidden" name="hkode_jabatan" id="hkode_jabatan" value="" />
<div class="form-group"><label class="col-sm-4 control-label">Tanggal Berlaku</label>
    <div class="col-sm-8"><input type="text" class="form-control date input-sm" name="tgl_berlaku" id="tgl_berlaku" value="<?php echo e(\Carbon\Carbon::now()->toDateString()); ?>"></div>
</div>
<div class="form-group"><label class="col-sm-4 control-label">Nama Lokasi Kerja</label>
  <div class="col-sm-8">
     <select class="form-control chosen-select-width" name="kode_lokasi" id="kode_lokasi">
            <option value="null" selected disabled>--Nama Lokasi kerja--</option>
             <?php $__currentLoopData = $md_client; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($data->id); ?>">  <?php echo e($data->nama_client); ?></option>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
  </div>
</div>
<div class="form-group"><label class="col-sm-4 control-label">Jabatan</label>
  <div class="col-sm-8">
     <select class="form-control chosen-select-width" name="kode_jabatan" id="kode_jabatan">
            <option value="null" selected disabled>--Jabatan--</option>
             <?php $__currentLoopData = $st_jabatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($data->kode); ?>">  <?php echo e($data->Deskripsi); ?></option>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
  </div>
</div>
<div class="form-group"><label class="col-sm-4 control-label">Nilai</label>
    <div class="col-sm-8"><input type="number" step="any" class="form-control" name="nilai" id="nilai"></div>
</div>
<?php /**PATH C:\xampp\htdocs\recruitment\resources\views/hrd/setup/gpjabatansite/form.blade.php ENDPATH**/ ?>
<input type="hidden" name="hkode_jab" id="hkode_jab" value="" />
<div class="form-group"><label class="col-sm-4 control-label">Nama Jabatan</label>
  <div class="col-sm-8">
     <select class="form-control chosen-select-width" name="kode_jab" id="kode_jab">
            <option value="null" selected disabled>--Nama Jabatan--</option>
             <?php $__currentLoopData = $st_jabatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($data->kode); ?>"> <?php echo e($data->kode); ?> - <?php echo e($data->Deskripsi); ?></option>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
  </div>
</div>
<div class="form-group"><label class="col-sm-4 control-label">Nama Lokasi Kerja</label>
  <div class="col-sm-8">
     <select class="form-control chosen-select-width" name="kode_lokasi" id="kode_lokasi">
            <option value="null" selected disabled>--Nama Lokasi Kerja--</option>
             <?php $__currentLoopData = $md_client; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($data->id); ?>"> <?php echo e($data->id); ?> - <?php echo e($data->nama_client); ?></option>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
  </div>
</div>
<div class="form-group"><label class="col-sm-4 control-label">KJK Paket</label>
  <div class="col-sm-8">
     <select class="form-control chosen-select-width" name="id_kjk_paket" id="id_kjk_paket">
            <option value="null" selected disabled>--kjk paket--</option>
            <option value="1">YA</option>
            <option value="0">TIDAK</option>
      </select>
  </div>
</div><?php /**PATH C:\xampp\htdocs\recruitment\resources\views/hrd/setup/kjkperjabatansite/form.blade.php ENDPATH**/ ?>
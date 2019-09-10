<input type="hidden" name="id" id="id" value="" />
<div class="form-group"><label class="col-sm-4 control-label">Nama Client</label>
  <div class="col-sm-8">
     <select class="form-control chosen-select-width" name="nama_client" id="nama_client">
            <option value="null" selected disabled>--Nama Client--</option>
             <?php $__currentLoopData = $st_md_client; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($data->id); ?>">  <?php echo e($data->nama_client); ?></option>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
  </div>
</div>
<div class="form-group"><label class="col-sm-4 control-label">Tunjangan Transport</label>
    <div class="col-sm-8"><input type="number" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control" name="tunj_transport" id="tunj_transport"></div>
</div>

<?php /**PATH C:\xampp\htdocs\recruitment\resources\views/hrd/setup/tunjangantransport/form.blade.php ENDPATH**/ ?>
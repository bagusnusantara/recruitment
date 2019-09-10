<input type="hidden" name="id_umk" id="id_umk" value="" />
<div class="form-group"><label class="col-sm-4 control-label">Tanggal Mulai Berlaku</label>
    <div class="col-sm-8"><input type="text" class="form-control date input-sm" name="tanggal_umk" id="tanggal_umk" value="<?php echo e(\Carbon\Carbon::now()->toDateString()); ?>"></div>
</div>
<div class="form-group"><label class="col-sm-4 control-label">Nama Client</label>
  <div class="col-sm-8">
     <select class="form-control chosen-select-width combo" name="md_client_id_umk" id="md_client_id_umk">
            <option value="null" selected disabled>--Nama Client--</option>
             <?php $__currentLoopData = $st_md_client; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($data->id); ?>"><?php echo e($data->nama_client); ?></option>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
  </div>
</div>
<div class="form-group"><label class="col-sm-4 control-label">UMK</label>
    <div class="col-sm-8"><input type="number" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control" name="umk_umk" id="umk_umk"></div>
</div>
<div class="form-group"><label class="col-sm-4 control-label">UMK BPJS Sehat</label>
    <div class="col-sm-8"><input type="number" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control" name="umk_bpjs_sehat" id="umk_bpjs_sehat"></div>
</div>
<?php /**PATH C:\xampp\htdocs\recruitment\resources\views/hrd/setup/umk/form.blade.php ENDPATH**/ ?>
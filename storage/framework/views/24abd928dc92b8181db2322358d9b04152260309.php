<input type="hidden" name="id" id="id" value=""/>
<div class="form-group"><label class="col-sm-3 control-label">Karyawan Id</label>
  <div class="col-sm-9">
     <select class="form-control chosen-select-width pilih" name="karyawan_id" id="karyawan_id">
            <option value="null" selected disabled>--Karyawan Id--</option>
             <?php $__currentLoopData = $md_karyawan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($data->users_id); ?>">  <?php echo e($data->NIK); ?> - <?php echo e($data->nama_lengkap); ?></option>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
  </div>
</div>
<div class="form-group row"><label class="col-sm-3 control-label">Tanggal Mulai</label>
    <div class="col-sm-9">
    	<div class="input-group">
	    	<input type="text" class="form-control date input-sm" name="tanggal_awal" id="tanggal_awal" value="<?php echo e(\Carbon\Carbon::now()->toDateString()); ?>">
    		<span class="input-group-addon">
	            <i class="glyphicon glyphicon-calendar"></i>
	        </span>
    	</div>
    </div>
</div>
<div class="form-group row"><label class="col-sm-3 control-label">Tanggal Akhir</label>
    <div class="col-sm-9">
        <div class="input-group">
            <input type="text" class="form-control date input-sm" name="tanggal_akhir" id="tanggal2" value="<?php echo e(\Carbon\Carbon::now()->toDateString()); ?>">
            <span class="input-group-addon">
                <i class="glyphicon glyphicon-calendar"></i>
            </span>
        </div>
    </div>
</div>
<div class="form-group row"><label class="col-sm-3 control-label">Keterangan</label>
    <div class="col-sm-9"><input type="text" class="form-control" name="keterangan" id="keterangan"></div>
</div>
<div class="form-group row"><label class="col-sm-3 control-label">Status</label>
 	<div class="col-sm-9">
	 	<select class="form-control chosen-select-width" name="status" id="status">
	        <option value="null" selected disabled>--status--</option>
	        <option value="0">Cuti Belum Diambil</option>
            <option value="1">Cuti Sudah Diambil</option>
	  	</select>
  	</div>
</div>
<div class="form-group row"><label class="col-sm-3 control-label">Notes</label>
    <div class="col-sm-9"><textarea class="form-control" rows="3" name="notes" id="notes"></textarea></div>
</div><?php /**PATH C:\xampp\htdocs\recruitment\resources\views/pegawai/cuti/form.blade.php ENDPATH**/ ?>
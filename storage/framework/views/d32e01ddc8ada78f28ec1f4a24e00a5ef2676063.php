<input type="hidden" name="hid" id="hid" value="" />
<div class="form-group row"><label class="col-sm-3 control-label">Nama</label>
    <div class="col-sm-9"><input type="text" class="form-control" name="nama" id="nama"></div>
</div>
<div class="form-group row"><label class="col-sm-3 control-label">Tanggal</label>
    <div class="col-sm-9">
    	<div class="input-group">
	    	<input type="text" class="form-control date input-sm" name="tanggal" id="tanggal" value="<?php echo e(\Carbon\Carbon::now()->toDateString()); ?>">
    		<span class="input-group-addon">
	            <i class="glyphicon glyphicon-calendar"></i>
	        </span>
    	</div>
    </div>
</div>
<div class="form-group row"><label class="col-sm-3 control-label">Jam</label>
    <div class="col-sm-9">
    	<div class="input-group bootstrap-timepicker timepicker">
            <input id="timepicker2" type="text" class="form-control input-small">
            <span class="input-group-addon">
                <i class="glyphicon glyphicon-time"></i>
            </span>
        </div>
    </div>
</div>
<div class="form-group row"><label class="col-sm-3 control-label">Status</label>
 	<div class="col-sm-9">
	 	<select class="form-control chosen-select-width" name="status" id="status">
	        <option value="null" selected disabled>--status--</option>
	        <option value="Hadir">Hadir</option>
	        <option value="Izin">Izin</option>
	        <option value="Alpha">Alpha</option>
	  	</select>
  	</div>
</div><?php /**PATH C:\xampp\htdocs\recruitment\resources\views/pegawai/presensi/form.blade.php ENDPATH**/ ?>
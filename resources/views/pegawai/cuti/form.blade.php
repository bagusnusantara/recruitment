<input type="hidden" name="hid" id="hid" value="" />
<div class="form-group row"><label class="col-sm-3 control-label">Nama</label>
    <div class="col-sm-9"><input type="text" class="form-control" name="nama" id="nama"></div>
</div>
<div class="form-group row"><label class="col-sm-3 control-label">Tanggal Mulai</label>
    <div class="col-sm-9">
    	<div class="input-group">
	    	<input type="text" class="form-control date input-sm" name="tanggal" id="tanggal" value="{{ \Carbon\Carbon::now()->toDateString() }}">
    		<span class="input-group-addon">
	            <i class="glyphicon glyphicon-calendar"></i>
	        </span>
    	</div>
    </div>
</div>
<div class="form-group row"><label class="col-sm-3 control-label">Tanggal Akhir</label>
    <div class="col-sm-9">
        <div class="input-group">
            <input type="text" class="form-control date input-sm" name="tanggal" id="tanggal" value="{{ \Carbon\Carbon::now()->toDateString() }}">
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
	        <option value="Hadir">Hadir</option>
	        <option value="Izin">Izin</option>
	        <option value="Alpha">Alpha</option>
	  	</select>
  	</div>
</div>
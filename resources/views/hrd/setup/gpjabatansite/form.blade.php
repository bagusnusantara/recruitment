<input type="hidden" name="htgl_berlaku" id="htgl_berlaku" value="" />
<input type="hidden" name="hkode_lokasi" id="hkode_lokasi" value="" />
<input type="hidden" name="hkode_jabatan" id="hkode_jabatan" value="" />
<div class="form-group"><label class="col-sm-4 control-label">Tanggal Berlaku</label>
    <div class="col-sm-8"><input type="text" class="form-control date input-sm" name="tgl_berlaku" id="tgl_berlaku" value="{{ \Carbon\Carbon::now()->toDateString() }}"></div>
</div>
<div class="form-group"><label class="col-sm-4 control-label">Kode Lokasi</label>
    <div class="col-sm-8"><input type="text" class="form-control" name="kode_lokasi" id="kode_lokasi"></div>
</div>
<div class="form-group"><label class="col-sm-4 control-label">Kode Jabatan</label>
    <div class="col-sm-8"><input type="text" class="form-control" name="kode_jabatan" id="kode_jabatan"></div>
</div>
<div class="form-group"><label class="col-sm-4 control-label">Nilai</label>
    <div class="col-sm-8"><input type="number" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control" name="nilai" id="nilai"></div>
</div>

<input type="hidden" name="htanggal" id="htanggal" value="" />
<input type="hidden" name="hkode_lokasi" id="hkode_lokasi" value="" />
<input type="hidden" name="hshift_malam" id="hshift_malam" value="" />
<div class="form-group"><label class="col-sm-4 control-label">Tanggal</label>
    <div class="col-sm-8"><input type="text" class="form-control date input-sm" name="tanggal" id="tanggal" value="{{ \Carbon\Carbon::now()->toDateString() }}"></div>
</div>
<div class="form-group"><label class="col-sm-4 control-label">Kode Lokasi</label>
    <div class="col-sm-8"><input type="text" class="form-control" name="kode_lokasi" id="kode_lokasi"></div>
</div>
<div class="form-group"><label class="col-sm-4 control-label">Tunjangan SHIFT MALAM</label>
    <div class="col-sm-8"><input type="number" step="any" class="form-control" name="shift_malam" id="shift_malam"></div>
</div>
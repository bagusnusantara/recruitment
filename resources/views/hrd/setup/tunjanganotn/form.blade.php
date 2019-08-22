<input type="hidden" name="htanggal" id="htanggal" value="" />
<input type="hidden" name="hkode_lokasi" id="hkode_lokasi" value="" />
<input type="hidden" name="hotn" id="hotn" value="" />
<div class="form-group"><label class="col-sm-4 control-label">Tanggal</label>
    <div class="col-sm-8"><input type="text" class="form-control date input-sm" name="tanggal" id="tanggal" value="{{ \Carbon\Carbon::now()->toDateString() }}"></div>
</div>
<div class="form-group"><label class="col-sm-4 control-label">Kode Lokasi</label>
    <div class="col-sm-8"><input type="text" class="form-control" name="kode_lokasi" id="kode_lokasi"></div>
</div>
<div class="form-group"><label class="col-sm-4 control-label">OTN</label>
    <div class="col-sm-8"><input type="number" step="any" class="form-control" name="otn" id="otn"></div>
</div>
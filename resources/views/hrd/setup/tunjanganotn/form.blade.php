<input type="hidden" name="htanggal" id="htanggal" value="" />
<input type="hidden" name="hkode_lokasi" id="hkode_lokasi" value="" />
<input type="hidden" name="hotn" id="hotn" value="" />
<input type="hidden" name="hotn_paket" id="hotn_paket" value="" />
<div class="form-group"><label class="col-sm-4 control-label">Tanggal</label>
    <div class="col-sm-8"><input type="text" class="form-control date input-sm" name="tanggal" id="tanggal" value="{{ \Carbon\Carbon::now()->toDateString() }}"></div>
</div>
<div class="form-group"><label class="col-sm-4 control-label">Lokasi Kerja</label>
  <div class="col-sm-8">
     <select class="form-control chosen-select-width" name="kode_lokasi" id="kode_lokasi">
            <option value="null" selected disabled>--Lokasi kerja--</option>
             @foreach($md_client as $data)
            <option value="{{ $data->id }}">  {{ $data->id }} - {{ $data->nama_client }}</option>
             @endforeach
      </select>
  </div>
</div>
<div class="form-group"><label class="col-sm-4 control-label">OTN</label>
    <div class="col-sm-8"><input type="number" step="any" class="form-control" name="otn" id="otn"></div>
</div>
<div class="form-group"><label class="col-sm-4 control-label">OTN PAKET</label>
    <div class="col-sm-8"><input type="number" step="any" class="form-control" name="otn_paket" id="otn_paket"></div>
</div>
<input type="hidden" name="htgl_berlaku" id="htgl_berlaku" value="" />
<input type="hidden" name="hkode_lokasi" id="hkode_lokasi" value="" />
<input type="hidden" name="hnik" id="hnik" value="" />
<div class="form-group"><label class="col-sm-4 control-label">Tanggal Berlaku</label>
    <div class="col-sm-8"><input type="text" class="form-control date input-sm" name="tgl_berlaku" id="tgl_berlaku" value="{{ \Carbon\Carbon::now()->toDateString() }}"></div>
</div>
<div class="form-group"><label class="col-sm-4 control-label">Nama Lokasi Kerja</label>
  <div class="col-sm-8">
     <select class="form-control chosen-select-width" name="kode_lokasi" id="kode_lokasi">
            <option value="null" selected disabled>--Nama Lokasi Kerja--</option>
             @foreach($md_client as $data)
            <option value="{{ $data->id }}">{{ $data->id }} - {{ $data->nama_client }}</option>
             @endforeach
      </select>
  </div>
</div>
<div class="form-group"><label class="col-sm-4 control-label">NIK Karyawan</label>
  <div class="col-sm-8">
     <select class="form-control chosen-select-width" name="nik" id="nik">
            <option value="null" selected disabled>--NIK Karyawan--</option>
             @foreach($md_karyawan as $data)
            <option value="{{ $data->NIK }}">{{ $data->NIK }} - {{ $data->nama_lengkap }}</option>
             @endforeach
      </select>
  </div>
</div>
<div class="form-group"><label class="col-sm-4 control-label">Nilai</label>
    <div class="col-sm-8"><input type="number" step="any" class="form-control" name="nilai" id="nilai"></div>
</div>

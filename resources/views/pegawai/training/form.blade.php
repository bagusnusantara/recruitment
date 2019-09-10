<input type="hidden" name="hnik" id="hnik" value="" />
<input type="hidden" name="hsdate" id="hsdate" value="" />
<input type="hidden" name="hedate" id="hedate" value="" />
<input type="hidden" name="hkode_pelatihan" id="hkode_pelatihan" value="" />
<div class="form-group"><label class="col-sm-3 control-label">NIK</label>
  <div class="col-sm-9">
     <select class="form-control chosen-select-width pilih" name="nik" id="nik">
            @foreach($md_karyawan as $data)
            <option value="{{ $data->NIK }}">{{ $data->NIK }} - {{ $data->nama_lengkap }}</option>
            @endforeach
      </select>
  </div>
</div>
<div class="form-group row"><label class="col-sm-3 control-label">Tanggal Mulai Pelatihan</label>
    <div class="col-sm-9">
        <div class="input-group">
            <input type="text" class="form-control date input-sm" name="sdate" id="sdate" value="{{ \Carbon\Carbon::now()->toDateString() }}">
            <span class="input-group-addon">
                <i class="glyphicon glyphicon-calendar"></i>
            </span>
        </div>
    </div>
</div>
<div class="form-group row"><label class="col-sm-3 control-label">Tanggal Akhir Pelatihan</label>
    <div class="col-sm-9">
        <div class="input-group">
            <input type="text" class="form-control date input-sm" name="edate" id="edate" value="{{ \Carbon\Carbon::now()->toDateString() }}">
            <span class="input-group-addon">
                <i class="glyphicon glyphicon-calendar"></i>
            </span>
        </div>
    </div>
</div>
<div class="form-group"><label class="col-sm-3 control-label">Kode Pelatihan</label>
  <div class="col-sm-9">
     <select class="form-control chosen-select-width pilih" name="kode_pelatihan" id="kode_pelatihan">
            @foreach($st_pelatihan as $data)
            <option value="{{ $data->kode }}">{{ $data->kode }} - {{ $data->deskripsi }}</option>
            @endforeach
      </select>
  </div>
</div>
<div class="form-group"><label class="col-sm-3 control-label">Penyelenggara Pelatihan</label>
    <div class="col-sm-9"><input type="text" class="form-control" name="vendor_pelatihan" id="vendor_pelatihan"></div>
</div>
<div class="form-group"><label class="col-sm-3 control-label">Target Hasil Pelatihan</label>
    <div class="col-sm-9"><input type="text" class="form-control" name="target_pelatihan" id="target_pelatihan"></div>
</div>
<div class="form-group"><label class="col-sm-3 control-label">Realisasi Hasil Pelatihan</label>
    <div class="col-sm-9"><input type="text" class="form-control" name="realisasi_hasil" id="realisasi_hasil"></div>
</div>
<div class="form-group"><label class="col-sm-3 control-label">Nilai Pelatihan</label>
    <div class="col-sm-9"><input type="number" step="any" class="form-control" name="nilai_pelatihan" id="nilai_pelatihan"></div>
</div>
<div class="form-group"><label class="col-sm-3 control-label">Biaya Pelatihan (Rp)</label>
    <div class="col-sm-9"><input type="number" step="any" class="form-control" name="biaya_pelatihan" id="biaya_pelatihan"></div>
</div>
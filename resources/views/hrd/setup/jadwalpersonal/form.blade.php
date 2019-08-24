<input type="hidden" name="hnik" id="hnik" value="" />
<input type="hidden" name="hschid" id="hschid" value="" />
<div class="form-group"><label class="col-sm-4 control-label">NIK</label>
  <div class="col-sm-8">
     <select class="form-control chosen-select-width" name="nik" id="nik">
            <option value="null" selected disabled>--NIK--</option>
             @foreach($md_karyawan as $data)
            <option value="{{ $data->NIK }}">  {{ $data->NIK }} - {{ $data->nama_lengkap }}</option>
             @endforeach
      </select>
  </div>
</div>
<div class="form-group"><label class="col-sm-4 control-label">Kode Jadwal</label>
  <div class="col-sm-8">
     <select class="form-control chosen-select-width" name="schid" id="schid">
            <option value="null" selected disabled>--kode jadwal--</option>
             @foreach($schclass as $data)
            <option value="{{ $data->kode }}">  {{ $data->kode }} - {{ $data->deskripsi }}</option>
             @endforeach
      </select>
  </div>
</div>

<input type="hidden" name="id" id="id" value="" />
<input type="hidden" name="uukode_jabatan" id="uukode_jabatan" value="" />
<input type="hidden" name="uukode_site" id="uukode_site" value="" />
<div class="form-group"><label class="col-sm-4 control-label">Kode Jabatan</label>
  <div class="col-sm-8">
     <select class="form-control chosen-select-width" name="kode_jabatan" id="kode_jabatan">
            <option value="null" selected disabled>--Jabatan--</option>
             @foreach($st_jabatan as $data)
            <option value="{{ $data->kode }}">  {{ $data->kode }} - {{ $data->Deskripsi }}</option>
             @endforeach
      </select>
  </div>
</div>
<div class="form-group"><label class="col-sm-4 control-label">Nama Lokasi kerja</label>
  <div class="col-sm-8">
     <select class="form-control chosen-select-width" name="kode_site" id="kode_site">
            <option value="null" selected disabled>--Lokasi kerja--</option>
             @foreach($md_client as $data)
            <option value="{{ $data->id }}">  {{ $data->nama_client }}</option>
             @endforeach
      </select>
  </div>
</div>
<div class="form-group"><label class="col-sm-4 control-label">Tunjangan Jabatan</label>
    <div class="col-sm-8"><input type="number" step="any" class="form-control" name="tunjangan_jabatan" id="tunjangan_jabatan"></div>
</div>
<div class="form-group"><label class="col-sm-4 control-label">Tanggal Berlaku</label>
    <div class="col-sm-8"><input type="text" class="form-control date input-sm" name="tanggal_berlaku" id="tanggal_berlaku"></div>
</div>

<input type="hidden" name="hkode_jab" id="hkode_jab" value="" />
<input type="hidden" name="hkode_lokasi" id="hkode_lokasi" value="" />
<div class="form-group"><label class="col-sm-4 control-label">Nama Jabatan</label>
  <div class="col-sm-8">
     <select class="form-control chosen-select-width" name="kode_jab" id="kode_jab">
            <option value="null" selected disabled>--Nama Jabatan--</option>
             @foreach($st_jabatan as $data)
            <option value="{{ $data->kode }}"> {{ $data->kode }} - {{ $data->Deskripsi }}</option>
             @endforeach
      </select>
  </div>
</div>
<div class="form-group"><label class="col-sm-4 control-label">Nama Lokasi Kerja</label>
  <div class="col-sm-8">
     <select class="form-control chosen-select-width" name="kode_lokasi" id="kode_lokasi">
            <option value="null" selected disabled>--Nama Lokasi Kerja--</option>
             @foreach($md_client as $data)
            <option value="{{ $data->id }}"> {{ $data->id }} - {{ $data->nama_client }}</option>
             @endforeach
      </select>
  </div>
</div>
<div class="form-group"><label class="col-sm-4 control-label">OTN Paket</label>
  <div class="col-sm-8">
     <select class="form-control chosen-select-width" name="id_otn_paket" id="id_otn_paket">
            <option value="null" selected disabled>--kjk paket--</option>
            <option value="1">YA</option>
            <option value="0">TIDAK</option>
      </select>
  </div>
</div>
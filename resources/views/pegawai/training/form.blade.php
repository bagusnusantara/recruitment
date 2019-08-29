<input type="hidden" name="hid" id="hid" value="" />
<div class="form-group"><label class="col-sm-4 control-label">NIK</label>
  <div class="col-sm-8">
     <select class="form-control chosen-select-width pilih" name="nama_client" id="nama_client">
            <option value="null" selected disabled>--NIK--</option>
            <option value="123">123146 - FULAN</option>
      </select>
  </div>
</div>
<div class="form-group row"><label class="col-sm-4 control-label">Tanggal Mulai Pelatihan</label>
    <div class="col-sm-8">
        <div class="input-group">
            <input type="text" class="form-control date input-sm" name="tanggal1" id="tanggal1" value="{{ \Carbon\Carbon::now()->toDateString() }}">
            <span class="input-group-addon">
                <i class="glyphicon glyphicon-calendar"></i>
            </span>
        </div>
    </div>
</div>
<div class="form-group row"><label class="col-sm-4 control-label">Tanggal Akhir Pelatihan</label>
    <div class="col-sm-8">
        <div class="input-group">
            <input type="text" class="form-control date input-sm" name="tanggal2" id="tanggal2" value="{{ \Carbon\Carbon::now()->toDateString() }}">
            <span class="input-group-addon">
                <i class="glyphicon glyphicon-calendar"></i>
            </span>
        </div>
    </div>
</div>
<div class="form-group"><label class="col-sm-4 control-label">Deskripsi Pelatihan</label>
  <div class="col-sm-8">
     <select class="form-control chosen-select-width pilih" name="nama_client" id="nama_client">
            <option value="null" selected disabled>--Deskripsi Pelatihan--</option>
            <option value="123">Pelatihan 1</option>
      </select>
  </div>
</div>
<div class="form-group"><label class="col-sm-4 control-label">Penyelenggara Pelatihan</label>
  <div class="col-sm-8">
     <select class="form-control chosen-select-width pilih" name="nama_client" id="nama_client">
            <option value="null" selected disabled>--Penyelenggara Pelatihan--</option>
            <option value="123">Penyelenggara 1</option>
      </select>
  </div>
</div>
<div class="form-group"><label class="col-sm-4 control-label">Target Hasil Pelatihan</label>
    <div class="col-sm-8"><input type="text" class="form-control" name="tunj_makan" id="tunj_makan"></div>
</div>
<div class="form-group"><label class="col-sm-4 control-label">Realisasi Hasil Pelatihan</label>
    <div class="col-sm-8"><input type="text" class="form-control" name="tunj_makan" id="tunj_makan"></div>
</div>
<div class="form-group"><label class="col-sm-4 control-label">Nilai Pelatihan</label>
    <div class="col-sm-8"><input type="number" step="any" class="form-control" name="tunj_makan" id="tunj_makan"></div>
</div>
<div class="form-group"><label class="col-sm-4 control-label">Biaya Pelatihan (Rp)</label>
    <div class="col-sm-8"><input type="number" step="any" class="form-control" name="tunj_makan" id="tunj_makan"></div>
</div>
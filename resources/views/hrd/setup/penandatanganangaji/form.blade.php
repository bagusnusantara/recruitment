<input type="hidden" name="hseq" id="hseq" value="" />
<div class="form-group"><label class="col-sm-4 control-label">Nama</label>
    <div class="col-sm-8"><input type="text" class="form-control" name="nama" id="nama"></div>
</div>
<div class="form-group"><label class="col-sm-4 control-label">Jabatan</label>
  <div class="col-sm-8">
     <select class="form-control chosen-select-width" name="jabatan" id="jabatan">
            <option value="null" selected disabled>--Jabatan--</option>
             @foreach($st_jabatan as $data)
            <option value="{{ $data->Deskripsi }}">  {{ $data->Deskripsi }}</option>
             @endforeach
      </select>
  </div>
</div>
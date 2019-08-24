<input type="hidden" name="hkode_group" id="hkode_group" value="" />
<input type="hidden" name="hschid" id="hschid" value="" />
<div class="form-group"><label class="col-sm-4 control-label">Kode Group</label>
  <div class="col-sm-8">
     <select class="form-control chosen-select-width" name="kode_group" id="kode_group">
            <option value="null" selected disabled>--kode_group--</option>
             @foreach($st_group as $data)
            <option value="{{ $data->kode }}">  {{ $data->deskripsi }}</option>
             @endforeach
      </select>
  </div>
</div>
<div class="form-group"><label class="col-sm-4 control-label">Kode jadwal</label>
  <div class="col-sm-8">
     <select class="form-control chosen-select-width" name="schid" id="schid">
            <option value="null" selected disabled>--schid--</option>
             @foreach($schclass as $data)
            <option value="{{ $data->kode }}">  {{ $data->deskripsi }}</option>
             @endforeach
      </select>
  </div>
</div>

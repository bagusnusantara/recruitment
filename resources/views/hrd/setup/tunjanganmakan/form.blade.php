<input type="hidden" name="id" id="id" value="" />
<div class="form-group"><label class="col-sm-4 control-label">Nama Client</label>
  <div class="col-sm-8">
     <select class="form-control chosen-select-width" name="nama_client" id="nama_client">
            <option value="null" selected disabled>--Nama Client--</option>
             @foreach($st_md_client as $data)
            <option value="{{ $data->id }}">  {{ $data->nama_client }}</option>
             @endforeach
      </select>
  </div>
</div>
<div class="form-group"><label class="col-sm-4 control-label">Tunjangan Makan</label>
    <div class="col-sm-8"><input type="number" step="any" class="form-control" name="tunj_makan" id="tunj_makan"></div>
</div>

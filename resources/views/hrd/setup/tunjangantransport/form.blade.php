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
<div class="form-group"><label class="col-sm-4 control-label">Tunjangan Transport</label>
    <div class="col-sm-8"><input type="number" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control" name="tunj_transport" id="tunj_transport"></div>
</div>


<input type="hidden" name="id_umk" id="id_umk" value="" />
<div class="form-group"><label class="col-sm-4 control-label">Tanggal Mulai Berlaku</label>
    <div class="col-sm-8"><input type="text" class="form-control date input-sm" name="tanggal_umk" id="tanggal_umk" value="{{ \Carbon\Carbon::now()->toDateString() }}"></div>
</div>
<div class="form-group"><label class="col-sm-4 control-label">Nama Client</label>
  <div class="col-sm-8">
     <select class="form-control chosen-select-width" name="md_client_id_umk" id="md_client_id_umk">
            <option value="null" selected disabled>--Nama Client--</option>
             @foreach($st_md_client as $data)
            <option value="{{ $data->id }}">{{ $data->nama_client }}</option>
             @endforeach
      </select>
  </div>
</div>
<div class="form-group"><label class="col-sm-4 control-label">UMK</label>
    <div class="col-sm-8"><input type="number" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control" name="umk_umk" id="umk_umk"></div>
</div>
<div class="form-group"><label class="col-sm-4 control-label">UMK BPJS Sehat</label>
    <div class="col-sm-8"><input type="number" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control" name="umk_bpjs_sehat" id="umk_bpjs_sehat"></div>
</div>

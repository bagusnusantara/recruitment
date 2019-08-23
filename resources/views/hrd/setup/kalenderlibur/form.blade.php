<input type="hidden" name="htgl_libur" id="htgl_libur" value="" />
<div class="form-group"><label class="col-sm-4 control-label">Tanggal</label>
    <div class="col-sm-8"><input type="text" class="form-control date input-sm" name="tanggal" id="tanggal" value="{{ \Carbon\Carbon::now()->toDateString() }}"></div>
</div>
<div class="form-group"><label class="col-sm-4 control-label">Deskripsi</label>
    <div class="col-sm-8"><input type="text" class="form-control" name="deskripsi" id="deskripsi"></div>
</div>
<div class="form-group"><label class="col-sm-4 control-label">Kategori</label>
  <div class="col-sm-8">
     <select class="form-control chosen-select-width" name="kategori" id="kategori">
            <option value="null" selected disabled>--Kategori--</option>
             @foreach($st_Kategoripekerjaan as $data)
            <option value="{{ $data->id }}">  {{ $data->deskripsi }}</option>
             @endforeach
      </select>
  </div>
</div>

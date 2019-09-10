<input type="hidden" name="hseq" id="hseq" value="" />
<div class="form-group"><label class="col-sm-4 control-label">NIK Karyawan</label>
  <div class="col-sm-8">
     <select class="form-control chosen-select-width" name="nik" id="nik">
            <option value="null" selected disabled>--nik--</option>
             @foreach($md_karyawan as $data)
            <option value="{{ $data->NIK }}">{{ $data->NIK }} - {{ $data->nama_lengkap }}</option>
             @endforeach
      </select>
  </div>
</div>
<div class="form-group"><label class="col-sm-4 control-label">Sisa Cuti</label>
    <div class="col-sm-8"><input type="number" step="any" maxlength="2" class="form-control" name="sisa_cuti" id="sisa_cuti"></div>
</div>

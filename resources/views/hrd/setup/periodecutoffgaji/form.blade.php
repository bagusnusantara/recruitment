<input type="hidden" name="id" id="id" value="" />
<div class="form-group"><label class="col-sm-4 control-label">Bulan</label>
  <div class="col-sm-8">
  <select class="form-control chosen-select-width" name="bulan" id="bulan">
            <option value="null" disabled>--Bulan--</option>
             @for ($i = 1; $i <= 12; $i++)
               @php $nol; @endphp
               @if ($i >= 1 && $i <=9)
                  <?php $nol = "0"; ?>
                  @else
                    <?php $nol = ""; ?>
               @endif
            <option value="{{ $nol.$i }}"> {{ $nol.$i }}</option>
             @endfor
  </select>
  </div>
</div>
<div class="form-group"><label class="col-sm-4 control-label">Tahun</label>
  <div class="col-sm-8">
  <select class="form-control chosen-select-width" name="tahun" id="tahun">
            <option value="null" disabled>--Tahun--</option>
             @for ($i = 1999; $i <= 2050; $i++)
            <option value="{{ $i }}">{{ $i }}</option>
             @endfor
  </select>
  </div>
</div>
<div class="form-group"><label class="col-sm-4 control-label">Start Date</label>
  <div class="col-sm-8">
     <input type="text" id="sdate" name="sdate" class="form-control date">
  </div>
</div>
<div class="form-group"><label class="col-sm-4 control-label">End Date</label>
  <div class="col-sm-8">
     <input type="text" id="edate" name="edate" class="form-control date">
  </div>
</div>
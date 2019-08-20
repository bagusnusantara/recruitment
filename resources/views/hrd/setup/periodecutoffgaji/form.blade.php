<input type="hidden" name="id" id="id" value="" />
<input type="hidden" name="start_date" id="start_date" value="" />
<input type="hidden" name="end_date" id="end_date" value="" />
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
<div class="form-group"><label class="col-sm-4 control-label">Start Date - End Date</label>
  <div class="col-sm-8">
     <input type="text" id="config-demo" class="form-control">
  </div>
</div>
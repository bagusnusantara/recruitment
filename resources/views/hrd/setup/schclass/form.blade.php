<input type="hidden" name="hkode" id="hkode" value="" />
<div class="form-group"><label class="col-sm-4 control-label">Kode</label>
    <div class="col-sm-8"><input type="text" maxlength="2" class="form-control" name="kode" id="kode"></div>
</div>
<div class="form-group"><label class="col-sm-4 control-label">Deskripsi</label>
    <div class="col-sm-8"><input type="text" maxlength="100" class="form-control" name="deskripsi" id="deskripsi"></div>
</div>
<div class="form-group"><label class="col-sm-4 control-label">Start Time (format HH:MM:SS)</label>
      <div class="col-md-2">
	      <select class="form-control chosen-select-width" name="starth" id="starth">
	      		<option value="" selected disabled>hh</option>
	            @for($sh=0; $sh<=24; $sh++)
	            	@if($sh <= 9)
	            		{{$sh = "0".$sh}}
	            	@endif
	            <option value="{{$sh}}">{{$sh}}</option>
	            @endfor
	      </select>
	  </div>
	  <div class="col-md-1">
	      <label>:</label>
	  </div>
	  <div class="col-md-2">
	      <select class="form-control chosen-select-width" name="startm" id="startm">
	      		<option value="" selected disabled>mm</option>
	            @for($sm=0; $sm<=60; $sm++)
	            	@if($sm <= 9)
	            		{{$sm = "0".$sm}}
	            	@endif
	            <option value="{{$sm}}">{{$sm}}</option>
	            @endfor
	      </select>
	  </div>
	  <div class="col-md-1">
	      <label>:</label>
	  </div>
	  	  <div class="col-md-2">
	      <select class="form-control chosen-select-width" name="starts" id="starts">
	      		<option value="" selected disabled>ss</option>
	            @for($ss=0; $ss<=60; $ss++)
	            	@if($ss <= 9)
	            		{{$ss = "0".$ss}}
	            	@endif
	            <option value="{{$ss}}">{{$ss}}</option>
	            @endfor
	      </select>
	  </div>  
</div>
<div class="form-group"><label class="col-sm-4 control-label">End Time (format HH:MM:SS)</label>
          <div class="col-md-2">
	      <select class="form-control chosen-select-width" name="endh" id="endh">
	      		<option value="" selected disabled>hh</option>
	            @for($sh=0; $sh<=24; $sh++)
	            	@if($sh <= 9)
	            		{{$sh = "0".$sh}}
	            	@endif
	            <option value="{{$sh}}">{{$sh}}</option>
	            @endfor
	      </select>
	  </div>
	  <div class="col-md-1">
	      <label>:</label>
	  </div>
	  <div class="col-md-2">
	      <select class="form-control chosen-select-width" name="endm" id="endm">
	      		<option value="" selected disabled>mm</option>
	            @for($sm=0; $sm<=60; $sm++)
	            	@if($sm <= 9)
	            		{{$sm = "0".$sm}}
	            	@endif
	            <option value="{{$sm}}">{{$sm}}</option>
	            @endfor
	      </select>
	  </div>
	  <div class="col-md-1">
	      <label>:</label>
	  </div>
	  	  <div class="col-md-2">
	      <select class="form-control chosen-select-width" name="ends" id="ends">
	      		<option value="" selected disabled>ss</option>
	            @for($ss=0; $ss<=60; $ss++)
	            	@if($ss <= 9)
	            		{{$ss = "0".$ss}}
	            	@endif
	            <option value="{{$ss}}">{{$ss}}</option>
	            @endfor
	      </select>
	  </div>  
</div>
<div class="form-group"><label class="col-sm-4 control-label">Minat Lembur Wajib</label>
  <div class="col-sm-8">
     <select class="form-control chosen-select-width" name="mnt_lembur_wajib" id="mnt_lembur_wajib">
            <option value="null" selected disabled>--minat lembur wajib--</option>
            <option value="0">0</option>
            <option value="15">15</option>
            <option value="30">30</option>
            <option value="45">45</option>
            <option value="60">60</option>
      </select>
  </div>
</div>
<div class="form-group"><label class="col-sm-4 control-label">Minat Lembur SPL</label>
  <div class="col-sm-8">
     <select class="form-control chosen-select-width" name="mnt_lembur_spl" id="mnt_lembur_spl">
            <option value="null" selected disabled>--minat lembur spl--</option>
            <option value="0">0</option>
            <option value="15">15</option>
            <option value="30">30</option>
            <option value="45">45</option>
            <option value="60">60</option>
      </select>
  </div>
</div>
<div class="form-group"><label class="col-sm-4 control-label">ID Shift Malam</label>
  <div class="col-sm-8">
     <select class="form-control chosen-select-width" name="id_shift_malam" id="id_shift_malam">
            <option value="null" selected disabled>--id shift malam--</option>
            <option value="1">1 - YA</option>
            <option value="0">0 - Tidak</option>
      </select>
  </div>
</div>
<div class="form-group"><label class="col-sm-4 control-label">ID Lembur Wajib</label>
  <div class="col-sm-8">
     <select class="form-control chosen-select-width" name="id_lbr_wajib" id="id_lbr_wajib">
            <option value="null" selected disabled>--id lembur wajib--</option>
            <option value="1">1 - YA</option>
            <option value="0">0 - Tidak</option>
      </select>
  </div>
</div>
<div class="form-group"><label class="col-sm-4 control-label">Total Jam</label>
  <div class="col-sm-8">
     <select class="form-control chosen-select-width" name="tol_jam" id="tol_jam">
            <option value="null" selected disabled>--tol jam--</option>
            @for($i=0; $i<=6; $i++)
            <option value="{{$i}}">{{$i}}</option>
            @endfor
      </select>
  </div>
</div>
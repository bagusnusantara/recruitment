<input type="hidden" name="hsd_prd" id="hsd_prd" value="" />
<input type="hidden" name="hsd_prd" id="hsd_prd" value="" />
<div class="form-group"><label class="col-sm-3 control-label">Start Periode (format YYYY-MM-DD)</label>
      <div class="col-md-3">
	      <select class="form-control chosen-select-width" name="stahun" id="stahun">
	      		<option value="" selected disabled>yyyy</option>
	            @for($sh=1945; $sh<=2050; $sh++)
	            <option value="{{$sh}}">{{$sh}}</option>
	            @endfor
	      </select>
	  </div>
	  <div class="col-md-1">
	      <label>-</label>
	  </div>
	  <div class="col-md-2">
	      <select class="form-control chosen-select-width" name="sbulan" id="sbulan">
	      		<option value="" selected disabled>mm</option>
	            @for($sm=1; $sm<=12; $sm++)
	            	@if($sm <= 9)
	            		{{$sm = "0".$sm}}
	            	@endif
	            <option value="{{$sm}}">{{$sm}}</option>
	            @endfor
	      </select>
	  </div>
	  <div class="col-md-1">
	      <label>-</label>
	  </div>
	  	  <div class="col-md-2">
	      <select class="form-control chosen-select-width" name="shari" id="shari">
	      		<option value="" selected disabled>dd</option>
	            @for($ss=1; $ss<=31; $ss++)
	            	@if($ss <= 9)
	            		{{$ss = "0".$ss}}
	            	@endif
	            <option value="{{$ss}}">{{$ss}}</option>
	            @endfor
	      </select>
	  </div>  
</div>
<div class="form-group"><label class="col-sm-3 control-label">End Periode (format YYYY-MM-DD)</label>
          <div class="col-md-3">
	      <select class="form-control chosen-select-width" name="etahun" id="etahun">
	      		<option value="" selected disabled>yyyy</option>
	            @for($sh=1945; $sh<=2050; $sh++)
	            <option value="{{$sh}}">{{$sh}}</option>
	            @endfor
	      </select>
	  </div>
	  <div class="col-md-1">
	      <label>-</label>
	  </div>
	  <div class="col-md-2">
	      <select class="form-control chosen-select-width" name="ebulan" id="ebulan">
	      		<option value="" selected disabled>mm</option>
	            @for($sm=0; $sm<=12; $sm++)
	            	@if($sm <= 9)
	            		{{$sm = "0".$sm}}
	            	@endif
	            <option value="{{$sm}}">{{$sm}}</option>
	            @endfor
	      </select>
	  </div>
	  <div class="col-md-1">
	      <label>-</label>
	  </div>
	  	  <div class="col-md-2">
	      <select class="form-control chosen-select-width" name="ehari" id="ehari">
	      		<option value="" selected disabled>dd</option>
	            @for($ss=1; $ss<=31; $ss++)
	            	@if($ss <= 9)
	            		{{$ss = "0".$ss}}
	            	@endif
	            <option value="{{$ss}}">{{$ss}}</option>
	            @endfor
	      </select>
	  </div>  
</div>

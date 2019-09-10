<input type="hidden" name="hsd_prd" id="hsd_prd" value="" />
<input type="hidden" name="hsd_prd" id="hsd_prd" value="" />
<div class="form-group"><label class="col-sm-3 control-label">Start Periode (format YYYY-MM-DD)</label>
      <div class="col-md-3">
	      <select class="form-control chosen-select-width" name="stahun" id="stahun">
	      		<option value="" selected disabled>yyyy</option>
	            <?php for($sh=1945; $sh<=2050; $sh++): ?>
	            <option value="<?php echo e($sh); ?>"><?php echo e($sh); ?></option>
	            <?php endfor; ?>
	      </select>
	  </div>
	  <div class="col-md-1">
	      <label>-</label>
	  </div>
	  <div class="col-md-2">
	      <select class="form-control chosen-select-width" name="sbulan" id="sbulan">
	      		<option value="" selected disabled>mm</option>
	            <?php for($sm=1; $sm<=12; $sm++): ?>
	            	<?php if($sm <= 9): ?>
	            		<?php echo e($sm = "0".$sm); ?>

	            	<?php endif; ?>
	            <option value="<?php echo e($sm); ?>"><?php echo e($sm); ?></option>
	            <?php endfor; ?>
	      </select>
	  </div>
	  <div class="col-md-1">
	      <label>-</label>
	  </div>
	  	  <div class="col-md-2">
	      <select class="form-control chosen-select-width" name="shari" id="shari">
	      		<option value="" selected disabled>dd</option>
	            <?php for($ss=1; $ss<=31; $ss++): ?>
	            	<?php if($ss <= 9): ?>
	            		<?php echo e($ss = "0".$ss); ?>

	            	<?php endif; ?>
	            <option value="<?php echo e($ss); ?>"><?php echo e($ss); ?></option>
	            <?php endfor; ?>
	      </select>
	  </div>  
</div>
<div class="form-group"><label class="col-sm-3 control-label">End Periode (format YYYY-MM-DD)</label>
          <div class="col-md-3">
	      <select class="form-control chosen-select-width" name="etahun" id="etahun">
	      		<option value="" selected disabled>yyyy</option>
	            <?php for($sh=1945; $sh<=2050; $sh++): ?>
	            <option value="<?php echo e($sh); ?>"><?php echo e($sh); ?></option>
	            <?php endfor; ?>
	      </select>
	  </div>
	  <div class="col-md-1">
	      <label>-</label>
	  </div>
	  <div class="col-md-2">
	      <select class="form-control chosen-select-width" name="ebulan" id="ebulan">
	      		<option value="" selected disabled>mm</option>
	            <?php for($sm=0; $sm<=12; $sm++): ?>
	            	<?php if($sm <= 9): ?>
	            		<?php echo e($sm = "0".$sm); ?>

	            	<?php endif; ?>
	            <option value="<?php echo e($sm); ?>"><?php echo e($sm); ?></option>
	            <?php endfor; ?>
	      </select>
	  </div>
	  <div class="col-md-1">
	      <label>-</label>
	  </div>
	  	  <div class="col-md-2">
	      <select class="form-control chosen-select-width" name="ehari" id="ehari">
	      		<option value="" selected disabled>dd</option>
	            <?php for($ss=1; $ss<=31; $ss++): ?>
	            	<?php if($ss <= 9): ?>
	            		<?php echo e($ss = "0".$ss); ?>

	            	<?php endif; ?>
	            <option value="<?php echo e($ss); ?>"><?php echo e($ss); ?></option>
	            <?php endfor; ?>
	      </select>
	  </div>  
</div>
<?php /**PATH C:\xampp\htdocs\recruitment\resources\views/hrd/setup/periode/form.blade.php ENDPATH**/ ?>
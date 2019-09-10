<input type="hidden" name="hkode" id="hkode" value="" />
<div class="form-group">
<div ><label class="col-md-2 control-label">Kode</label></div>
<div class="col-md-4"><input type="text" maxlength="10" class="form-control" name="kode" id="kode"></div>
<div><label class="col-md-2 control-label">Deskripsi</label></div>
<div class="col-md-4"><input type="text" maxlength="100" class="form-control" name="deskripsi" id="deskripsi"></div>
<div><label class="col-md-2 control-label">Lama Cuti</label></div>
<div class="col-md-4">
 <select class="form-control chosen-select-width" name="lama_cuti" id="lama_cuti">
        <option value="null" selected disabled>--lama cuti--</option>
         <?php for($a = 0; $a <= 12; $a++): ?>
         	$a++;
        <option value="<?php echo e($a); ?>"><?php echo e($a); ?></option>
         <?php endfor; ?>
  </select>
</div>
<div><label class="col-md-2 control-label">ID Cuti Thn</label></div>
<div class="col-md-4">
 <select class="form-control chosen-select-width" name="id_cutithn" id="id_cutithn">
        <option value="null" selected disabled>--id cuti thn--</option>
        <option value="1">1 - YA</option>
        <option value="0">0 - Tidak</option>
  </select>
</div>
<div><label class="col-md-2 control-label">Potongan Absen</label></div>
<div class="col-md-4">
 <select class="form-control chosen-select-width" name="pot_absen" id="pot_absen">
        <option value="null" selected disabled>--potongan absen--</option>
        <option value="1">1 - YA</option>
        <option value="0">0 - TIDAK</option>
  </select>
</div>
<div><label class="col-md-2 control-label">ID Cuti</label></div>
<div class="col-md-4">
 <select class="form-control chosen-select-width" name="id_cuti" id="id_cuti">
        <option value="null" selected disabled>--id cuti--</option>
        <option value="1">1 - YA</option>
        <option value="0">0 - TIDAK</option>
  </select>
</div>
<div><label class="col-md-2 control-label">Potongan Bonus</label></div>
<div class="col-sm-4">
 <select class="form-control chosen-select-width" name="pot_bonus" id="pot_bonus">
        <option value="null" selected disabled>--potongan absen--</option>
        <option value="1">1 - YA</option>
        <option value="0">0 - TIDAK</option>
  </select>
</div>
<div><label class="col-md-2 control-label">ID Sakit</label></div>
<div class="col-md-4">
 <select class="form-control chosen-select-width" name="id_sakit" id="id_sakit">
        <option value="null" selected disabled>--id sakit--</option>
        <option value="1">1 - YA</option>
        <option value="0">0 - TIDAK</option>
  </select>
</div>
<div><label class="col-md-2 control-label">Kehadiran</label></div>
<div class="col-md-4">
 <select class="form-control chosen-select-width" name="id_present" id="id_present">
        <option value="null" selected disabled>--kehadiran--</option>
        <option value="1">1 - YA</option>
        <option value="0">0 - TIDAK</option>
  </select>
</div>
<div><label class="col-md-2 control-label">ID Ijin</label></div>
<div class="col-md-4">
 <select class="form-control chosen-select-width" name="id_ijin" id="id_ijin">
        <option value="null" selected disabled>--id ijin--</option>
        <option value="1">1 - YA</option>
        <option value="0">0 - TIDAK</option>
  </select>
</div>
<div><label class="col-md-2 control-label">Potongan Premi %</label></div>
<div class="col-sm-4">
 <select class="form-control chosen-select-width" name="prosen_pot" id="prosen_pot">
        <option value="null" selected disabled>--kehadiran--</option>
         <?php for($b = 0; $b <= 100; $b++): ?>
         	$b++;
        <option value="<?php echo e($b); ?>"><?php echo e($b); ?> %</option>
         <?php endfor; ?>
  </select>
</div>
<div><label class="col-md-2 control-label">Id alpha</label></div>
<div class="col-sm-4">
 <select class="form-control chosen-select-width" name="id_alpha" id="id_alpha">
        <option value="null" selected disabled>--id alpha--</option>
        <option value="1">1 - YA</option>
        <option value="0">0 - TIDAK</option>
  </select>
</div>
</div><?php /**PATH C:\xampp\htdocs\recruitment\resources\views/hrd/setup/alasanabsen/form.blade.php ENDPATH**/ ?>
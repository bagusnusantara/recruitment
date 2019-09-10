<div id="identitas" class="tab-content my-resume">
  <div class="inner-box">
      <!--identitas-->
      <div class="item">
          <h3>Identitas</h3>
      </div>
      <form class="form-identitas">
          <div class="inner-box" style="overflow:auto; height:90vh; overflow-y:scroll;">
              <div class="item">
                  <div class="form-group">
                      <h4><label for="NIK">NIK</label></h4>
                      <input id="NIK" type="text" class="form-control" name="NIK" maxlength="16" placeholder="Masukan NIK" value="<?php echo e($dataUser->NIK); ?>" required>

                  </div>
                  <div class="form-group">
                      <h4><label for="NamaLengkap">Nama Lengkap</label></h4>
                      <input type="text" class="form-control" id="NamaLengkap" name="NamaLengkap" placeholder="Masukan nama lengkap" value="<?php echo e($dataUser->nama_lengkap); ?>" required>
                  </div>
                  <div class="form-group">
                      <h4><label for="NamaPanggilan">Nama Panggilan</label></h4>
                      <input type="text" class="form-control" id="NamaPanggilan" name="NamaPanggilan" placeholder="Masukan nama panggilan" value="<?php echo e($dataUser->nama_panggilan); ?>">
                  </div>
                  <div class="row">
                      <div class="form-group col-6">
                          <h4><label class="my-1 mr-2" for="TempatLahir">Tempat Lahir</label></h4>
                          <input type="text" class="my-1 mr-2 form-control" name="TempatLahir" id="TempatLahir" placeholder="Masukan Tempat Lahir" value="<?php echo e($dataUser->tempat_lahir); ?>">
                      </div>
                      <div class="form-group col-6">
                          <h4><label class="my-1 mr-2" for="TanggalLahir">Tanggal Lahir</label></h4>
                          <input type="text" class=" my-1 mr-2 form-control" name="TanggalLahir" id="TanggalLahir" value="<?php echo e(date(" Y-m-d ",strtotime($dataUser->tanggal_lahir))); ?>">
                          <div id="DateTanggalLahir">
                          </div>
                      </div>
                  </div>
                  <div class="form-group">
                      <h4><label class="my-1 mr-2" for="JenisKelamin">Jenis Kelamin</label></h4>
                      <select class="custom-select my-1 mr-sm-2" id="JenisKelamin" name="JenisKelamin">
                          <option <?php echo e((isset($dataUser->jenis_kelamin) || $dataUser->jenis_kelamin == "0")? "selected" : ""); ?> value="">Pilih . . .</option>
                          <option <?php echo e(($dataUser->jenis_kelamin=='Laki-laki')? "selected" : ""); ?> value="1">Laki-laki</option>
                          <option <?php echo e(($dataUser->jenis_kelamin=='Perempuan')? "selected" : ""); ?> value="2">Perempuan</option>
                      </select>
                  </div>
                  <div id="ktp" class="border rounded form-group">
                      <div class="form-group mx-2">
                          <h4><label for="Alamat">Alamat KTP</label></h4>
                          <textarea name="Alamat" class="form-control" rows="3" id="Alamatktp"><?php echo e($dataUser->alamat_ktp); ?></textarea>
                      </div>
                      <div class="row">
                          <div class="col-lg-5 col-xs-10 mx-2 form-group">
                              <h4><label class="my-1 mr-2" for="Negara">Negara</label></h4>
                              <select class="custom-select my-1 mr-sm-2" id="Negaraktp" name="Negaraktp">
                                  <option <?php echo e((!isset($dataUser->negara_ktp))? "selected" : ""); ?> value="">Pilih . . .</option>
                                  <?php $__currentLoopData = $st_data["Negara"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <option value="<?php echo e($item->id); ?>" <?php echo e(($dataUser->negara_ktp == $item->id)? "selected" : ""); ?>><?php echo e($item->negara); ?></option>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </select>
                          </div>
                          <div class="col-lg-5 col-xs-10 mx-2 form-group">
                              <h4><label class="my-1 mr-2" for="Provinsi" >Provinsi</label></h4>
                              <select class="custom-select my-1 mr-sm-2" id="Provinsiktp" name="Provinsiktp" <?php echo e((!isset($dataUser->negara_ktp))? "disabled" : ""); ?>>
                                  <option <?php echo e((!isset($dataUser->provinsi_ktp))? "selected" : ""); ?> value="">Pilih . . .</option>
                                  <?php $__currentLoopData = $st_data["Provinsiktp"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <option value="<?php echo e($item->id); ?>" <?php echo e(($dataUser->provinsi_ktp == $item->id)? "selected" : ""); ?>><?php echo e($item->name); ?></option>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </select>
                          </div>
                          <div class="col-lg-5 col-xs-10 mx-2 form-group">
                              <h4><label class="my-1 mr-2" for="Kota">Kota</label></h4>
                              <select class="custom-select my-1 mr-sm-2" id="Kotaktp" name="Kotaktp" <?php echo e((!isset($dataUser->provinsi_ktp) )? "disabled" : ""); ?>>
                                  <option <?php echo e((!isset($dataUser->kabkota_ktp))? "selected" : ""); ?> value="">Pilih . . .</option>
                                  <?php $__currentLoopData = $st_data["Kabkotaktp"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <option value="<?php echo e($item->id); ?>" <?php echo e(($dataUser->kabkota_ktp == $item->id)? "selected" : ""); ?>><?php echo e($item->name); ?></option>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </select>
                          </div>
                          <div class="col-lg-5 col-xs-10 mx-2 form-group">
                              <h4><label class="my-1 mr-2" for="Kecamatan" >Kecamatan</label></h4>
                              <select class="custom-select my-1 mr-sm-2" id="Kecamatanktp" Name="Kecamatanktp" <?php echo e((!isset($dataUser->kabkota_ktp) )? "disabled" : ""); ?>>
                                  <option <?php echo e(!(isset($dataUser->kecamatan_ktp))? "selected" : ""); ?> value="" >Pilih . . .</option>
                                  <?php $__currentLoopData = $st_data["Kecamatanktp"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <option value="<?php echo e($item->id); ?>" <?php echo e(($dataUser->kecamatan_ktp == $item->id)? "selected" : ""); ?>><?php echo e($item->name); ?></option>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </select>
                          </div>
                          <div class="col-lg-5 col-xs-10 mx-2 form-group">
                              <h4><label for="KodePos">Kode Pos</label></h4>
                              <input type="number" class="form-control" id="KodePosktp" name="KodePosktp" placeholder="Masukan Kode Pos" value="<?php echo e($dataUser->kode_pos_ktp); ?>">
                          </div>
                      </div>
                  </div>
                  <div class="form-group">
                      <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="1" id="domisiliduplicate" checked="">
                          <label class="form-check-label" for="domisiliduplicate">
                              Check Jika alamat domisili sama dengan KTP
                          </label>
                      </div>
                  </div>
                  <div id="domisili" class="border rounded form-group">
                      <div class="form-group mx-2">
                          <h4><label for="Alamat">Alamat Domisili</label></h4>
                          <textarea name="Alamat" class="form-control" rows="3" id="Alamatdomisili"><?php echo e($dataUser->alamat_domisili); ?></textarea>
                      </div>
                      <div class="row">
                          <div class="col-lg-5 col-xs-10 mx-2 form-group">
                              <h4><label class="my-1 mr-2" for="Negaradomisili">Negara</label></h4>
                              <select class="custom-select my-1 mr-sm-2" id="Negaradomisili" name="Negaradomisili">
                                  <option <?php echo e((!isset($dataUser->negara_domisili))? "selected" : ""); ?> value="">Pilih . . .</option>
                                  <?php $__currentLoopData = $st_data["Negara"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <option value="<?php echo e($item->id); ?>" <?php echo e(($dataUser->negara_domisili == $item->id)? "selected" : ""); ?>><?php echo e($item->negara); ?></option>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </select>
                          </div>
                          <div class="col-lg-5 col-xs-10 mx-2 form-group">
                              <h4><label class="my-1 mr-2" for="Provinsidomisili" >Provinsi</label></h4>
                              <select class="custom-select my-1 mr-sm-2" id="Provinsidomisili" name="Provinsidomisili" <?php echo e((!isset($dataUser->negara_domisili) )? "disabled" : ""); ?>>
                                  <option <?php echo e((!isset($dataUser->provinsi_domisili))? "selected" : ""); ?> value="">Pilih . . .</option>
                                  <?php $__currentLoopData = $st_data["Provinsidomisili"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <option value="<?php echo e($item->id); ?>" <?php echo e(($dataUser->provinsi_domisili == $item->id)? "selected" : ""); ?>><?php echo e($item->name); ?></option>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </select>
                          </div>
                          <div class="col-lg-5 col-xs-10 mx-2 form-group">
                              <h4><label class="my-1 mr-2" for="Kotadomisili">Kota</label></h4>
                              <select class="custom-select my-1 mr-sm-2" id="Kotadomisili" name="Kotadomisili" <?php echo e((!isset($dataUser->provinsi_domisili) )? "disabled" : ""); ?>>
                                  <option <?php echo e((!isset($dataUser->kabkota_domisili))? "selected" : ""); ?> value="">Pilih . . .</option>
                                  <?php $__currentLoopData = $st_data["Kabkotadomisili"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <option value="<?php echo e($item->id); ?>" <?php echo e(($dataUser->kabkota_domisili == $item->id)? "selected" : ""); ?>><?php echo e($item->name); ?></option>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </select>
                          </div>
                          <div class="col-lg-5 col-xs-10 mx-2 form-group">
                              <h4><label class="my-1 mr-2" for="Kecamatandomisili" >Kecamatan</label></h4>
                              <select class="custom-select my-1 mr-sm-2" id="Kecamatandomisili" Name="Kecamatandomisili" <?php echo e((!isset($dataUser->kabkota_domisili) )? "disabled" : ""); ?>>
                                  <option <?php echo e(!(isset($dataUser->kecamatan_domisili))? "selected" : ""); ?> value="">Pilih . . .</option>
                                  <?php $__currentLoopData = $st_data["Kecamatandomisili"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <option value="<?php echo e($item->id); ?>" <?php echo e(($dataUser->kecamatan_domisili == $item->id)? "selected" : ""); ?>><?php echo e($item->name); ?></option>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </select>
                          </div>

                          <div class="col-lg-5 col-xs-10 mx-2 form-group">
                              <h4><label for="KodePosdomisili">Kode Pos</label></h4>
                              <input type="number" class="form-control" id="KodePosdomisili" name="KodePosdomisili" placeholder="Masukan Kode Pos" value="<?php echo e($dataUser->kode_pos_domisili); ?>">
                          </div>
                      </div>
                  </div>
                  <div class="form-group">
                      <h4><label for="Email">Email</label></h4>
                      <input type="email" class="form-control" id="Email" name="Email" placeholder="Masukan alamat email" value="<?php echo e($dataUser->email); ?>">
                  </div>
                  <div class="form-group">
                      <h4><label for="NoTelp">No Telephone</label></h4>
                      <input type="tel" class="form-control" id="NoTelp" name="NoTelp" placeholder="Masukan nomer telephone" value="<?php echo e($dataUser->notelp); ?>">
                  </div>
                  <div class="form-group">
                      <h4><label for="NoHP">No Handphone</label></h4>
                      <input type="tel" class="form-control" id="NoHP" name="NoHP" placeholder="Masukan nomer handphone" value="<?php echo e($dataUser->nohp); ?>">
                  </div>
                  <div class="form-group" style="display:none">
                      <h4><label class="my-1 mr-2" for="Agama">Agama</label></h4>
                      <select class="custom-select my-1 mr-sm-2" id="Agama" name="Agama">
                          <option <?php echo e((!isset($dataUser->agama) || $dataUser->agama=='0')? "selected" : ""); ?> value="">Pilih . . .</option>
                          <option <?php echo e(($dataUser->agama=='Islam')? "selected" : ""); ?> value="1">Islam</option>
                          <option <?php echo e(($dataUser->agama=='Kristen Protestan')? "selected" : ""); ?> value="2">Kristen Protestan</option>
                          <option <?php echo e(($dataUser->agama=='Kristen Katolik')? "selected" : ""); ?> value="3">Kristen Katolik</option>
                          <option <?php echo e(($dataUser->agama=='Hindu')? "selected" : ""); ?> value="4">Hindu</option>
                          <option <?php echo e(($dataUser->agama=='Budha')? "selected" : ""); ?> value="5">Budha</option>
                          <option <?php echo e(($dataUser->agama=='Kong Hu Chu')? "selected" : ""); ?> value="6">Kong Hu Chu</option>
                      </select>
                  </div>
                  <div class="form-group">
                      <h4>Informasi ID Card</h4>
                      <label class="my-1 mr-2" for="IDCard">ID Card</label>
                      <select class="custom-select my-1 mr-sm-2" id="IDCard" name="IDCard">
                          <option <?php echo e((!isset($dataUser->kategori_idcard) || $dataUser->kategori_idcard=='0')? "selected" : ""); ?> value="">Pilih . . .</option>
                          <?php $__currentLoopData = $st_data["Idcard"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option <?php echo e(($dataUser->kategori_idcard==$item->id)? "selected" : ""); ?> value="<?php echo e($item->id); ?>"><?php echo e($item->kartu); ?></option>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                      <label for="NoIDCard" name="NoIDCard">NOMOR ID</label>
                      <input type="text" class="form-control" id="NoIDCard" placeholder="Masukan Nomer ID Card" value="<?php echo e($dataUser->nomor_idcard); ?>">
                  </div>
              </div>
          </div>
      </form>
      <div class="item">
          <div class="mr-0">
              <!--button type="button" class="btn btn-secondary btn-lg" width='20px' height='20px'>Reset</button -->
              <button type="button" class="btn btn-primary btn-lg" id="submitIdentitas">
                  <a>Simpan</a>
                  <img id="loader" src='<?php echo e(asset(' img/loader.gif ')); ?>' width='20px' height='20px' style="display:none;">
              </button>
          </div>
      </div>
  </div>
</div><?php /**PATH C:\xampp\htdocs\recruitment\resources\views/jobseeker/datadiri/identitas.blade.php ENDPATH**/ ?>
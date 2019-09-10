<div id="minat"  class="tab-content my-resume">
    <div class="inner-box">
      <div class="item">
        <h3>Minat</h3>
      </div>
      <div class="inner-box">
        <div class="item">
          <!--minat-->
          <div class="table-responsive">
          <h4>Minat dan Harapan</h4>
            <table id="minat-table" class="table table-bordered" style="border-radius:25px;">
                <tr class="thead-smi th-center">
                    <th><h4>Bidang Bisnis</h4></th>
                    <th><h4>Lingkungan Kerja</h4></th>
                    <th><h4>Spesialisasi</h4></th>
                    <th><h4>Posisi Kerja</h4></th>
                    <th><h4>Level Jabatan</h4></th>
                    <th><h4>Gaji Bulanan(IDR)</h4></th>
                    <th width="10%"><h4>Option</h4></th>
                </tr>
              <?php $__currentLoopData = $dataUserSt['MinatKerja']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <th data-value="<?php echo e($item->bidang_bisnis); ?>"><?php echo e($item->st_bisnisperusahaan->name); ?></th>
                  <th data-value="<?php echo e($item->lingkungan_kerja); ?>"><?php echo e($item->st_lingkungankerja->lingkungan); ?></th>
                  <th data-value="<?php echo e($item->spesialisasi); ?>"><?php echo e($item->st_spesialisasipekerjaan->spesial); ?></th>
                  <th data-value="<?php echo e($item->posisi_kerja); ?>"><?php echo e($item->st_posisikerja->posisi); ?></th>
                  <th data-value="<?php echo e($item->level_jabatan); ?>"><?php echo e($item->st_leveljabatan->jabatan); ?></th>
                  <th><?php echo e("Rp. ".number_format($item->gaji_bulanan,2,",",".")); ?></th>
                  <th>
                      <button data-toggle="modal" data-target=".minat-modal" data-id="<?php echo e($item->id); ?>" class="mx-auto btn-outline-primary rounded"><i class="fa fa-edit fa-1x"></i></button>
                      <button data-toggle="modal"  data-target="#deletemodal"  data-id="<?php echo e($item->id); ?>" data-href="datadiri/deleteminat/"  class="btn-outline-danger rounded"><i class="fa fa-trash fa-1x"></i></button>
                  </th>
                 </tr>    
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
            <button type="button" class="pull-right btn btn-primary" data-toggle="modal" data-target=".minat-modal">
                <i class="fa fa-plus"></i>
              Tambah</button>
            </div>
            <br>
            <!--modal minat-->
            <form>
                <div class="modal fade minat-modal" id="MinatKerjaModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-head">
                          <h3 class="modal-title ml-4 mt-3">Data Minat</h3>
                      </div>
                      <div class="modal-body">
                        <div class="inner-box">
                            <div class="item">
                              <input type="hidden" class="form-control" id="id">
                              <div class="form-group">
                                  <h4><label class="my-1 mr-2" for="BidangBisnis">Bidang Bisnis</label></h4>
                                  <select class="custom-select my-1 mr-sm-2" id="BidangBisnis">
                                    <option value="" selected>Pilih...</option>
                                    <?php $__currentLoopData = $st_data["BisnisPerusahaan"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>    
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </select>
                              </div>
                              <div class="form-group">
                                  <h4><label class="my-1 mr-2" for="LingkunganKerja">Lingkungan Kerja</label></h4>
                                  <select class="custom-select my-1 mr-sm-2" id="LingkunganKerja">
                                    <option value ="" selected>Pilih...</option>
                                    <?php $__currentLoopData = $st_data["LingkunganKerja"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <option value="<?php echo e($item->id); ?>"><?php echo e($item->lingkungan); ?></option>    
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </select>
                              </div>
                              <div class="form-group">
                                  <h4><label class="my-1 mr-2" for="Spesialisasi">Spesialisasi</label></h4>
                                  <select class="custom-select my-1 mr-sm-2" id="Spesialisasi">
                                    <option value ="" selected>Pilih...</option>
                                    <?php $__currentLoopData = $st_data["SpesialisasiPekerjaan"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <option value="<?php echo e($item->id); ?>"><?php echo e($item->spesial); ?></option>    
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </select>
                              </div>
                              <div class="form-group">
                                  <h4><label class="my-1 mr-2" for="PosisiKerja">Posisi Kerja</label></h4>
                                  <select class="custom-select my-1 mr-sm-2" id="PosisiKerja">
                                    <option value="" selected>Pilih...</option>
                                    <?php $__currentLoopData = $st_data["PosisiKerja"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <option value="<?php echo e($item->id); ?>"><?php echo e($item->posisi); ?></option>    
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </select>
                              </div>
                              <div class="form-group">
                                  <h4><label class="my-1 mr-2" for="LevelJabatan">Level Jabatan</label></h4>
                                  <select class="custom-select my-1 mr-sm-2" id="LevelJabatan">
                                    <option value="" selected>Pilih...</option>
                                    <?php $__currentLoopData = $st_data["LevelJabatan"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <option value="<?php echo e($item->id); ?>"><?php echo e($item->jabatan); ?></option>    
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </select>
                              </div>
                              <div class="form-group">
                                <h4><label for="gajibulan">Gaji Bulanan</label></h4>
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text">Rp.</div>
                                  </div>
                                  <input type="text" class="form-control" id="_GajiBulan" placeholder="Masukan minat gaji ">
                                  <input type="hidden" class="form-control" id="GajiBulan" placeholder="Masukan minat gaji ">
                                  <div class="input-group-append">
                                    <div class="input-group-text">.00</div>
                                  </div>
                                </div>
                              </div>
                          </div>
                      </div>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary btn-lg" id="submitMinat">
                              <a>Simpan</a>
                              <img id="loader" src='<?php echo e(asset('img/loader.gif')); ?>' width='20px' height='20px' style="display:none;">
                          </button>
                        </div>
    
                    </div>
                  </div>
                </div>
              </form>
          <!--modal minat end-->
          <!--minat end-->
                </div>
              </div>
  </div>
</div><?php /**PATH C:\xampp\htdocs\recruitment\resources\views/jobseeker/datadiri/minat.blade.php ENDPATH**/ ?>
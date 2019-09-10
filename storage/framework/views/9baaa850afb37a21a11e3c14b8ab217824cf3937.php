<?php $__env->startSection('main'); ?>
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Setup UMK</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="<?php echo e(url('/dashboard')); ?>">Home</a>
                </li>
                <li class="active">
                    <strong>Setup UMK</strong>
                </li>
            </ol>

        </div>
    </div>


    <div class="wrapper wrapper-content animated fadeInRight">


        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Edit Tunjangan Jabatan</h5>
                    </div>
                    <div class="ibox-content">
                      <div class="box-body">
                      <?php $__currentLoopData = $st_tunj_jabatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <form role="form" method="POST" action=" <?php echo e(url('/hrd/setup/tunjanganjabatan/update/{id}')); ?>" class="form">
                        <?php echo e(csrf_field()); ?>

                        <input type="hidden" name="id" id="id" value="" />
                          <input type="hidden" name="uukode_jabatan" id="uukode_jabatan" value="<?php echo e($datas->kode_jabatan); ?>" />
                          <input type="hidden" name="uukode_site" id="uukode_site" value="<?php echo e($datas->kode_site); ?>" />
                          <div class="form-group row">
                            <div class="form-group"><label class="col-sm-4 control-label">Kode Jabatan</label>
                              <div class="col-sm-8">
                                 <select class="form-control chosen-select-width" name="kode_jabatan" id="kode_jabatan" disabled>
                                        <option value="<?php echo e($datas->kode_jabatan); ?>" selected disabled><?php echo e($datas->Deskripsi); ?></option>
                                         <?php $__currentLoopData = $st_jabatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($data->kode); ?>">  <?php echo e($data->kode); ?> - <?php echo e($data->Deskripsi); ?></option>
                                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </select>
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="form-group"><label class="col-sm-4 control-label">Nama Lokasi kerja</label>
                              <div class="col-sm-8">
                                 <select class="form-control chosen-select-width" name="kode_site" id="kode_site" disabled>
                                        <option value="<?php echo e($datas->kode_site); ?>" selected disabled><?php echo e($datas->nama_client); ?></option>
                                         <?php $__currentLoopData = $md_client; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($data->id); ?>">  <?php echo e($data->nama_client); ?></option>
                                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </select>
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="form-group"><label class="col-sm-4 control-label">Tunjangan Jabatan</label>
                                <div class="col-sm-8"><input type="number" value="<?php echo e($datas->tunj_jabatan); ?>" step="any" class="form-control" name="tunjangan_jabatan" id="tunjangan_jabatan"></div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="form-group"><label class="col-sm-4 control-label">Tanggal Berlaku</label>
                                <div class="col-sm-8"><input type="text" value="<?php echo e($datas->tgl_berlaku); ?>" class="form-control date input-sm" name="tanggal_berlaku" id="tanggal_berlaku"></div>
                            </div>
                          </div>
 
                          </div>
                          <div class="box-footer">
                            <button type="submit" class="btn btn-primary">update</button>
                          </div>
                          
                        </form>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<?php echo $__env->make('template.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Page-Level Scripts -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
<script>
    $(document).ready(function(){

      //-------------
      $('.date').datepicker({
          autoclose: true,
          todayHighlight: true,
          format: 'yyyy-mm-dd'
      });

      $('.chosen-select-width').chosen();


    });

</script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\recruitment\resources\views/hrd/setup/tunjanganjabatan/edit.blade.php ENDPATH**/ ?>
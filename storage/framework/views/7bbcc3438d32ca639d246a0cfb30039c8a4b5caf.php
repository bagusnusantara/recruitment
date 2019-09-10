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
                        <h5>Edit UMK</h5>
                    </div>
                    <div class="ibox-content">
                      <div class="box-body">
                      <?php $__currentLoopData = $umk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <form role="form" method="POST" action=" <?php echo e(url('/hrd/setup/umk/update/{id}')); ?>" class="form">
                        <?php echo e(csrf_field()); ?> 
                          <input type="hidden" name="id_umk" id="id_umk" value="<?php echo e($datas->id); ?>" />
                            <div class="form-group row">
                              <div class="form-group"><label class="col-sm-4 control-label">Tanggal Mulai Berlaku</label>
                                  <div class="col-sm-8"><input type="text" class="form-control date input-sm" name="tanggal_umk" id="tanggal_umk" value="<?php echo e($datas->tanggal); ?>"></div>
                              </div>
                            </div>
                            <div class="form-group row">
                              <div class="form-group"><label class="col-sm-4 control-label">Nama Client</label>
                                <div class="col-sm-8">
                                   <select class="form-control chosen-select-width" name="md_client_id_umk" id="md_client_id_umk">
                                          <option value="<?php echo e($datas->md_client_id); ?>" selected><?php echo e($datas->nama_client); ?></option>
                                           <?php $__currentLoopData = $st_md_client; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <option value="<?php echo e($data->id); ?>"><?php echo e($data->nama_client); ?></option>
                                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                              </div>
                            </div>
                            <div class="form-group row">
                              <div class="form-group"><label class="col-sm-4 control-label">UMK</label>
                                  <div class="col-sm-8"><input type="number" value="<?php echo e($datas->umk); ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control" name="umk_umk" id="umk_umk"></div>
                              </div>
                            </div>
                            <div class="form-group row">
                              <div class="form-group"><label class="col-sm-4 control-label">UMK BPJS Sehat</label>
                                  <div class="col-sm-8"><input type="number" value="<?php echo e($datas->umk_bpjs_sehat); ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control" name="umk_bpjs_sehat" id="umk_bpjs_sehat"></div>
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

<?php echo $__env->make('template.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\recruitment\resources\views/hrd/setup/umk/edit.blade.php ENDPATH**/ ?>
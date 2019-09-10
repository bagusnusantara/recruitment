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
                        <h5>Edit Periode Cutoff gaji</h5>
                    </div>
                    <div class="ibox-content">
                      <div class="box-body">
                      <?php $__currentLoopData = $st_cutoff_gaji; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <form role="form" method="POST" action=" <?php echo e(url('/hrd/setup/periodecutoffgaji/update/')); ?>" class="form">
                        <?php echo e(csrf_field()); ?>

                          <input type="hidden" name="id" id="id" value="" />
                          <input type="hidden" name="uubulan" id="uubulan" value="<?php echo e($datas->bln); ?>" />
                          <input type="hidden" name="uutahun" id="uutahun" value="<?php echo e($datas->thn); ?>" />
                          <div class="form-group row">
                            <div class="form-group"><label class="col-sm-4 control-label">Bulan</label>
                              <div class="col-sm-8">
                              <select class="form-control chosen-select-width" name="bulan" id="bulan" disabled>
                                        <option value="<?php echo e($datas->bln); ?>" disabled><?php echo e($datas->bln); ?></option>
                                         <?php for($i = 1; $i <= 12; $i++): ?>
                                           <?php $nol; ?>
                                           <?php if($i >= 1 && $i <=9): ?>
                                              <?php $nol = "0"; ?>
                                              <?php else: ?>
                                                <?php $nol = ""; ?>
                                           <?php endif; ?>
                                        <option value="<?php echo e($nol.$i); ?>"> <?php echo e($nol.$i); ?></option>
                                         <?php endfor; ?>
                              </select>
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="form-group"><label class="col-sm-4 control-label">Tahun</label>
                              <div class="col-sm-8">
                              <select class="form-control chosen-select-width" name="tahun" id="tahun" disabled>
                                        <option value="<?php echo e($datas->thn); ?>" disabled><?php echo e($datas->thn); ?></option>
                                         <?php for($i = 1999; $i <= 2050; $i++): ?>
                                        <option value="<?php echo e($i); ?>"><?php echo e($i); ?></option>
                                         <?php endfor; ?>
                              </select>
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="form-group"><label class="col-sm-4 control-label">Start Date</label>
                              <div class="col-sm-8">
                                 <input type="text" id="sdate" name="sdate" value="<?php echo e($datas->sd_prd); ?>" class="form-control date">
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="form-group"><label class="col-sm-4 control-label">End Date</label>
                              <div class="col-sm-8">
                                 <input type="text" id="edate" name="edate" value="<?php echo e($datas->ed_prd); ?>" class="form-control date">
                              </div>
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



    });

</script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\recruitment\resources\views/hrd/setup/periodecutoffgaji/edit.blade.php ENDPATH**/ ?>
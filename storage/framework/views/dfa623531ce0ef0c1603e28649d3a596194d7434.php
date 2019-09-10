<?php $__env->startSection('main'); ?>
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Lowongan Pekerjaan</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="<?php echo e(url('/dashboard')); ?>">Home</a>
                </li>
                <li class="">
                    <strong>Lowongan Pekerjaan</strong>
                </li>
                <li class="active">
                    <strong>Create</strong>
                </li>
            </ol>

        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight">

      <div class="row">
          <div class="col-lg-12">
              <div class="ibox float-e-margins">
                  <div class="ibox-title">
                      <h5>Create Lowongan Pekerjaan</h5>
                      <div class="ibox-tools">
                          <a class="collapse-link">
                              <i class="fa fa-chevron-up"></i>
                          </a>
                          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                              <i class="fa fa-wrench"></i>
                          </a>
                          <ul class="dropdown-menu dropdown-user">
                              <li><a href="#">Config option 1</a>
                              </li>
                              <li><a href="#">Config option 2</a>
                              </li>
                          </ul>
                          <a class="close-link">
                              <i class="fa fa-times"></i>
                          </a>
                      </div>
                  </div>
                  <div class="ibox-content">
                    <form method="POST" id="postForm" action="<?php echo e(url('/admin/lowongan/store')); ?>" class="form-horizontal" enctype="multipart/form-data" onsubmit="return postForm()">
                        <?php echo csrf_field(); ?>
                            <div class="form-group"><label class="col-sm-2 control-label">Job Tittle</label>
                                <div class="col-sm-10"><input type="text" class="form-control" name="job_tittle"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">Client</label>

                                <div class="col-sm-10">
                                  <select class="select2_demo_3 form-control" name="md_client_id">
                                      <option value="0">Pilih ... </option>
                                    <?php $__currentLoopData = $md_client; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($client->id); ?>"><?php echo e($client->nama_client); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </select>
                                </div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">Kategori Pekerjaan</label>
                                <div class="col-sm-10">
                                    <select class="select2_demo_3 form-control" name="st_kategori_pekerjaan_id">
                                      <option value="0">Pilih ... </option>
                                      <?php $__currentLoopData = $st_kategori_pekerjaan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <option value="<?php echo e($kategori->id); ?>"><?php echo e($kategori->deskripsi); ?></option>
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group"><label class="col-sm-2 control-label">Spesialisasi Pekerjaan</label>
                                <div class="col-sm-10">
                                    <select class="select2_demo_3 form-control" name="st_spesialisasi_pekerjaan_id">
                                      <option value="0" selected>Pilih ... </option>
                                      <?php $__currentLoopData = $st_spesialisasi_pekerjaan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $spesialisasi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <option value="<?php echo e($spesialisasi->id); ?>"><?php echo e($spesialisasi->spesial); ?></option>
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label" for="Kota">Kota</label>
                                <div class="col-sm-10">
                                  <select class="select2_demo_3 form-control" name="st_kabkota_id">
                                            <option value="0">Pilih . . .</option>
                                            <?php $__currentLoopData = $st_kabkota; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                             <option value="<?php echo e($k->id); ?>"><?php echo e($k->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                 </select>
                                </div>
                             </div>
                             <div class="form-group"><label class="col-sm-2 control-label" for="foto">Foto</label>
                                 <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                     <div class="form-control" data-trigger="fileinput">
                                         <i class="glyphicon glyphicon-file fileinput-exists"></i>
                                         <span class="fileinput-filename"></span>
                                     </div>
                                     <span class="input-group-addon btn btn-default btn-file">
                                        <span class="fileinput-new">Select file</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="file" name="foto"/>
                                     </span>
                                     <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                 </div>
                             </div>






                            <div class="form-group" id="data_1">
                                <label class="col-sm-2 control-label">Tanggal Berakhir Iklan</label>
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" name="end_date" class="form-control" value="">
                                </div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">Deskripsi Pekerjaan</label>
                                <fieldset>
                                    <p class="container">
                                              <textarea class="input-block-level" id="summernote2" name="deskripsi_pekerjaan" rows="8">
                                              </textarea>
                                    </p>
                                </fieldset>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">Persyaratan</label>
                                    <fieldset>
                                        <p class="container">
                                          <textarea class="input-block-level" id="summernote" name="persyaratan" rows="8">
                                          </textarea>
                                        </p>
                                     </fieldset>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Komposisi Tes</label>
                                <div class="col-sm-10">
                                    <div class="i-checks"><label> <input type="checkbox" value="1" name="st_nilai_administrasi"> <i></i> Administrasi</label></div>
                                    <div class="i-checks"><label> <input type="checkbox" value="1" name="st_nilai_interview_walk"> <i></i> Walk in Interview</label></div>
                                    <div class="i-checks"><label> <input type="checkbox" value="1" name="st_nilai_psikotes"> <i></i> Psikotes</label></div>
                                    <div class="i-checks"><label> <input type="checkbox" value="1" name="st_nilai_interview_regular"> <i></i>Interview Psikolog</label></div>
                                    <div class="i-checks"><label> <input type="checkbox" value="1" name="st_nilai_interview_user"> <i></i>Interview User/HR</label></div>
                                </div>
                            </div>

                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-white" type="submit">Cancel</button>
                                    <button class="btn btn-primary" type="submit">Save changes</button>
                                </div>
                            </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>


    </div>


</div>
</div>



</div>
</div>


<?php echo $__env->make('template.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- SUMMERNOTE -->
   <script src="<?php echo e(asset('inspinia/js/plugins/summernote/summernote.min.js')); ?>"></script>

   <script>
      //  $(document).ready(function(){
      //
      //      $('.summernote').summernote({
      //        height: 200,
      //      });
      //
      // });
      $(document).ready(function() {
      	$('#summernote').summernote({
      		height: "200px",
          width : "800px"
      	});
      });
      $(document).ready(function() {
      	$('#summernote2').summernote({
      		height: "200px",
          width : "800px"
      	});
      });
      var postForm = function() {
	    var persyaratan = $('textarea[name="persyaratan"]').html($('#summernote').code());
      var deskripsi_pekerjaan = $('textarea[name="deskripsi_pekerjaan"]').html($('#summernote2').code());
      }
      $('#data_1 .input-group.date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });

   </script>
   <!-- iCheck -->
    <script src="<?php echo e(asset('inspinia/js/plugins/iCheck/icheck.min.js')); ?>"></script>
        <script>
            $(document).ready(function () {
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                });
            });
        </script>
    <!-- Select2 -->
    <script src="<?php echo e(asset('inspinia/js/plugins/select2/select2.full.min.js')); ?>"></script>
    <script>
        $(".select2_demo_1").select2();
        $(".select2_demo_2").select2();
        $(".select2_demo_3").select2({
            placeholder: "Select a state",
            allowClear: true
        });
    </script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('template.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\recruitment\resources\views/admin/lowongan/create.blade.php ENDPATH**/ ?>
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
                                  <select class="form-control m-b" name="md_client_id">
                                    <?php $__currentLoopData = $md_client; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($client->id); ?>"><?php echo e($client->nama_client); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </select>
                                </div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">Kategori Pekerjaan</label>
                                <div class="col-sm-10">
                                    <select class="form-control m-b" name="st_kategori_pekerjaan_id">
                                      <option value="0">Pilih ... </option>
                                      <?php $__currentLoopData = $st_kategori_pekerjaan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <option value="<?php echo e($kategori->id); ?>"><?php echo e($kategori->deskripsi); ?></option>
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">Spesialisasi Pekerjaan</label>
                                <div class="col-sm-10">
                                    <select class="form-control m-b" name="st_spesialisasi_pekerjaan_id">
                                      <option value="0" selected>Pilih ... </option>
                                      <?php $__currentLoopData = $st_spesialisasi_pekerjaan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $spesialisasi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <option value="<?php echo e($spesialisasi->id); ?>"><?php echo e($spesialisasi->spesial); ?></option>
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label" for="Negara">Negara</label>
                                <div class="col-sm-10">
                                    <select class="form-control m-b custom-select my-1 mr-sm-2" id="Negara" name="Negara">
                                      <option value="0">Pilih . . .</option>
                                      <?php $__currentLoopData = $st_negara; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <option value="<?php echo e($item->id); ?>"><?php echo e($item->negara); ?></option>    
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label" for="Provinsi" >Provinsi</label>
                                <div class="col-sm-10">
                                    <select class="form-control custom-select my-1 mr-sm-2" id="Provinsi" name="Provinsi">
                                        <option value="0">Pilih . . .</option>
                                        <?php $__currentLoopData = $st_provinsi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>    
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label" for="Kota">Kota</label>
                                <div class="col-sm-10">
                                  <select class="form-control custom-select my-1 mr-sm-2" id="Kota" name="Kota">
                                      <option value="0">Pilih . . .</option>
                                  </select>
                                </div>
                             </div>
                            <div class="form-group" id="data_1">
                                <label class="col-sm-2 control-label">Start Date</label>
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" name="start_date" class="form-control">
                                </div>
                            </div>
                            <div class="form-group" id="data_1">
                                <label class="col-sm-2 control-label">End Date</label>
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" name="end_date" class="form-control" value="">
                                </div>
                            </div>

                            <div class="form-group"><label class="col-sm-2 control-label">Persyaratan</label>
                                    <fieldset>
                                        <p class="container">
                                          <textarea class="input-block-level" id="summernote" name="persyaratan" rows="8">
                                          </textarea>
                                        </p>
                                     </fieldset>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">Deskripsi Pekerjaan</label>
                                    <fieldset>
                                        <p class="container">
                                          <textarea class="input-block-level" id="summernote2" name="deskripsi_pekerjaan" rows="8">
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
                                    <div class="i-checks"><label> <input type="checkbox" value="1" name="st_nilai_interview_regular"> <i></i>Interview Regular</label></div>
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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>
    function getst(id,param,selectedTarget){
        console.log('start');
        let now = $.now();
        $.ajaxSetup({
            headers:{
            'X-CSRF-TOKEN':$('meta[name="_token"]').attr('content')
            } });
        $.ajax({
            url:"/support/getst/",
            method:"post",
            data :{
                st_category : id,
                st_id       :param
            },
            success:function(result){
                console.log($.now()-now);
            for(var item in result.data){
                let option = result.data[item];
                selectedTarget.prop("disabled",false);
                selectedTarget.append($('<option>',{
                    value : option.id,
                    text  : option.name
                    }));
            }
                
            }
        });
    };

    $("#Negara").change(function(){
        $("#Provinsi").find('option').remove().end();
        $("#Provinsi").append($('<option>',{
            value : "0",
            text  : "Pilih . . ."
        }));
        if(this.value==0){
            $("#Provinsi").prop("disabled",true);
            $("#Kota").prop("disabled",true);
            $("#Kecamatan").prop("disabled",true);
        }
       else
            getst("Negara",$("#Negara > option:selected").val(),$("#Provinsi"));
    });
    
    $("#Provinsi").change(function(){
        $("#Kota").find('option').remove().end();
        $("#Kota").append($('<option>',{
            value : "0",
            text  : "Pilih . . ."
        }));
    
        if(this.value==0){
            $("#Kota").prop("disabled",true);
            $("#Kecamatan").prop("disabled",true);
        }
        else
             getst("Provinsi",$("#Provinsi > option:selected").val(),$("#Kota"));
     });
    
</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('template.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\recruitment\resources\views/admin/lowongan/create.blade.php ENDPATH**/ ?>
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
                        <h5>UMK</h5>

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
                        <div class="text-right">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal5">Tambah UMK</button>
                        </div>
                        <div class="modal inmodal fade" id="myModal5" tabindex="-1" role="dialog"  aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title">Tambah UMK</h4>
                                    </div>
                                    <div class="modal-body">
                                      <form method="POST" action="<?php echo e(url('/hrd/setup/umk/store')); ?>" class="form-horizontal" enctype="multipart/form-data">
                                            <?php echo csrf_field(); ?>
                                            <?php echo $__env->make('hrd.setup.umk.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>


                        <table class="table table-striped table-bordered table-hover dataTables-client" style="width: 100%">
                            <thead>
                            <tr>
                              <th class="text-center">No</th>
                              <th class="text-center">Tanggal Mulai Berlaku</th>
                              <th class="text-center">Klien</th>
                              <th class="text-center">UMK</th>
                              <th class="text-center">UMK BPJS</th>
                              <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                              <?php
                			   $i=1;
                			  ?>
                              <?php $__currentLoopData = $umk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                              <tr>
                                  <td class="text-center"><?php echo e($i); ?></td>
                                  <td class="text-center"><?php echo e($u->tanggal); ?></td>
                                  <td><?php echo e($u->nama_client); ?></td>
                                  <td><center><?php echo e($u->umk); ?></center></td>
                                  <td><center><?php echo e($u->umk_bpjs_sehat); ?></center></td>
                                  <td class="text-center">
                                    <button class="btn btn-default btn-circle"
                                          data-id="<?php echo e($u->id); ?>"
                                          data-tanggal="<?php echo e($u->tanggal); ?>"
                                          data-namaclient="<?php echo e($u->md_client_id); ?>"
                                          data-umk="<?php echo e($u->umk); ?>"
                                          data-umkbpjs="<?php echo e($u->umk_bpjs_sehat); ?>"
                                          data-toggle="modal" data-target="#show"><i class="fa fa-eye"></i>
                                    </button>
                                    <a href="<?php echo e(url('/hrd/setup/umk/edit',$u->id)); ?>">
                                      <button class="btn btn-default btn-circle"
                                            data-id="<?php echo e($u->id); ?>"
                                            data-tanggal="<?php echo e($u->tanggal); ?>"
                                            data-namaclient="<?php echo e($u->md_client_id); ?>"
                                            data-umk="<?php echo e($u->umk); ?>"
                                            data-umkbpjs="<?php echo e($u->umk_bpjs_sehat); ?>"><i class="fa fa-pencil-square-o"></i>
                                      </button>
                                    </a>
                                    <button class="btn btn-default btn-circle"
                                          data-id="<?php echo e($u->id); ?>"
                                          data-tanggal="<?php echo e($u->tanggal); ?>"
                                          data-namaclient="<?php echo e($u->md_client_id); ?>"
                                          data-umk="<?php echo e($u->umk); ?>"
                                          data-umkbpjs="<?php echo e($u->umk_bpjs_sehat); ?>"
                                          data-toggle="modal" data-target="#delete"><i class="fa fa-trash"></i>
                                    </button>
                                  </td>

                                  
                              <?php
                				$i++;
                			  ?>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tr>
                          </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</div>

<div class="modal inmodal fade" id="delete" tabindex="-1" role="dialog"  aria-hidden="true">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title">Delete Confirmation</h4>
              </div>
              <div class="modal-body">
              <form method="POST" action="<?php echo e(url('/hrd/setup/umk/delete/{id}')); ?>" class="form-horizontal" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <h4 class="text-center">Apakah Anda yakin untuk menghapus data?</h4>
                <input type="hidden" name="id_umk" id="id_umk" value="" />
                <div class="form-group"><label class="col-sm-4 control-label">Tanggal Mulai Berlaku</label>
                    <div class="col-sm-8"><input type="text" class="form-control" name="tanggal_umk" id="tanggal_umk" readonly disabled></div>
                </div>
                <div class="form-group"><label class="col-sm-4 control-label">Nama Client</label>
                  <div class="col-sm-8">
                     <select class="form-control chosen-select-width" name="md_client_id_umk" id="md_client_id_umk" disabled>
                            <option value="null" selected disabled>--Nama Client--</option>
                             <?php $__currentLoopData = $umk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dataumk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($dataumk->md_client_id); ?>">  <?php echo e($dataumk->nama_client); ?></option>
                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                  </div>
                </div>
                <div class="form-group"><label class="col-sm-4 control-label">UMK</label>
                    <div class="col-sm-8"><input type="number" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control" name="umk_umk" id="umk_umk" disabled></div>
                </div>
                <div class="form-group"><label class="col-sm-4 control-label">UMK BPJS Sehat</label>
                    <div class="col-sm-8"><input type="number" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control" name="umk_bpjs_sehat" id="umk_bpjs_sehat" disabled></div>
                </div>
             </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-white" data-dismiss="modal">Tidak</button>
                  <button type="submit" class="btn btn-primary">Ya</button>
              </div>
              </form>
      </div>
  </div>
</div>

<div class="modal inmodal fade" id="show" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title">Show UMK</h4>
                </div>
                <div class="modal-body">
                <form method="POST" action="" class="form-horizontal" enctype="multipart/form-data">
                <input type="hidden" name="id_umk" id="id_umk" value="" />
                <div class="form-group"><label class="col-sm-4 control-label">Tanggal Mulai Berlaku</label>
                    <div class="col-sm-8"><input type="text" class="form-control" name="tanggal_umk" id="tanggal_umk" readonly disabled></div>
                </div>
                <div class="form-group"><label class="col-sm-4 control-label">Nama Client</label>
                  <div class="col-sm-8">
                     <select class="form-control chosen-select-width" name="md_client_id_umk" id="md_client_id_umk" disabled>
                            <option value="null" selected disabled>--Nama Client--</option>
                             <?php $__currentLoopData = $umk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dataumk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($dataumk->md_client_id); ?>">  <?php echo e($dataumk->nama_client); ?></option>
                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                  </div>
                </div>
                <div class="form-group"><label class="col-sm-4 control-label">UMK</label>
                    <div class="col-sm-8"><input type="number" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control" name="umk_umk" id="umk_umk" disabled></div>
                </div>
                <div class="form-group"><label class="col-sm-4 control-label">UMK BPJS Sehat</label>
                    <div class="col-sm-8"><input type="number" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control" name="umk_bpjs_sehat" id="umk_bpjs_sehat" disabled></div>
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                </div>
                </form>
        </div>
    </div>
</div>
</div>

<div class="modal inmodal fade" id="edit" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title">Edit UMK</h4>
              </div>
              <div class="modal-body">
                <form method="POST" action="<?php echo e(url('/hrd/setup/umk/update/{id}')); ?>" class="form-horizontal" enctype="multipart/form-data">
                      <?php echo csrf_field(); ?>
                      <?php echo $__env->make('hrd.setup.umk.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
              <div class="modal-footer">
                  <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
              </form>
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

      //-x set datepicker
      // var date_input=$('input[name="tanggal_umk"]'); //our date input has the name "date"
      //   var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      //   var options={
      //     format: 'yyyy-mm-dd',
      //     container: container,
      //     todayHighlight: true,
      //     autoclose: true,
      //   };
      //   date_input.datepicker(options);
      //-------------
      $('.date').datepicker({
          autoclose: true,
          todayHighlight: true,
          format: 'yyyy-mm-dd'
      });

        $('.dataTables-client').DataTable({
            pageLength: 25,
            responsive: true,
            dom: '<"html5buttons"B>lTfgitp',
            buttons: [
                { extend: 'copy'},
                {extend: 'csv'},
                {extend: 'excel', title: 'ExampleFile'},
                {extend: 'pdf', title: 'ExampleFile'},

                {extend: 'print',
                 customize: function (win){
                        $(win.document.body).addClass('white-bg');
                        $(win.document.body).css('font-size', '10px');

                        $(win.document.body).find('table')
                                .addClass('compact')
                                .css('font-size', 'inherit');
                }
                }
            ]

        });

    });

    $('#show').on('show.bs.modal', function (event) {
                        var button = $(event.relatedTarget) // Button that triggered the modal

                        var id = button.data('id')
                        var tanggal = button.data('tanggal')
                        var namaclient = button.data('namaclient')
                        var umk = button.data('umk')
                        var umkbpjs = button.data('umkbpjs')

                        var modal = $(this)
                        modal.find('.modal-body #id_umk').val(id);
                        modal.find('.modal-body #tanggal_umk').val(tanggal);
                        modal.find('.modal-body #md_client_id_umk').val(namaclient);
                        modal.find('.modal-body #umk_umk').val(umk);
                        modal.find('.modal-body #umk_bpjs_sehat').val(umkbpjs);
                    })
    $('#edit').on('show.bs.modal', function (event) {
                        var button = $(event.relatedTarget) // Button that triggered the modal

                        var id = button.data('id')
                        var tanggal = button.data('tanggal')
                        var namaclient = button.data('namaclient')
                        var umk = button.data('umk')
                        var umkbpjs = button.data('umkbpjs')

                        var modal = $(this)
                        modal.find('.modal-body #id_umk').val(id);
                        modal.find('.modal-body #tanggal_umk').val(tanggal);
                        modal.find('.modal-body #md_client_id_umk').val(namaclient);
                        modal.find('.modal-body #umk_umk').val(umk);
                        modal.find('.modal-body #umk_bpjs_sehat').val(umkbpjs);
                    })
    $('#delete').on('show.bs.modal', function (event) {
                        var button = $(event.relatedTarget) // Button that triggered the modal

                        var id = button.data('id')
                        var tanggal = button.data('tanggal')
                        var namaclient = button.data('namaclient')
                        var umk = button.data('umk')
                        var umkbpjs = button.data('umkbpjs')

                        var modal = $(this)
                        modal.find('.modal-body #id_umk').val(id);
                        modal.find('.modal-body #tanggal_umk').val(tanggal);
                        modal.find('.modal-body #md_client_id_umk').val(namaclient);
                        modal.find('.modal-body #umk_umk').val(umk);
                        modal.find('.modal-body #umk_bpjs_sehat').val(umkbpjs);
                                    })



</script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\recruitment\resources\views/hrd/setup/umk/index.blade.php ENDPATH**/ ?>
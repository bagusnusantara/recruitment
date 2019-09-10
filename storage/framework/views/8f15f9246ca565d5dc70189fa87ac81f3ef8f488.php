<?php $__env->startSection('main'); ?>
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Setup Kalender Libur</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="<?php echo e(url('/dashboard')); ?>">Home</a>
                </li>
                <li class="active">
                    <strong>Setup Kalender Libur</strong>
                </li>
            </ol>
            
        </div>
    </div>


    <div class="wrapper wrapper-content animated fadeInRight">


        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Kalender Libur</h5>

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
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal5">Tambah Kalender Libur</button>
                        </div>
                        <div class="modal inmodal fade" id="myModal5" tabindex="-1" role="dialog"  aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title">Tambah kalender Libur</h4>
                                    </div>
                                    <div class="modal-body">
                                      <form method="POST" action="<?php echo e(url('/hrd/setup/kalenderlibur/store')); ?>" class="form-horizontal" enctype="multipart/form-data">
                                            <?php echo csrf_field(); ?>
                                            <?php echo $__env->make('hrd.setup.kalenderlibur.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
                              <th class="text-center">Tanggal</th>
                              <th class="text-center">Kode Hari Libur</th>
                              <th class="text-center">Keterangan</th>
                              <th class="text-center">ID Lebaran</th>
                              <th class="text-center">ID Cuti Bersama</th>
                              <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                              <?php
                								$i=1;
                							?>
                              <?php $__currentLoopData = $md_kalender_libur; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                              <tr>
                                  <td class="text-center"><?php echo e($i); ?></td>
                                  <td><center><?php echo e($u->tgl_libur); ?></center></td>
                                  <td><center><?php echo e($u->kode_hari_libur); ?></center></td>
                                  <td><center><?php echo e($u->keterangan); ?></center></td>
                                  <td><center><?php echo e($u->id_lebaran); ?></center></td>
                                  <td><center><?php echo e($u->id_cutibersama); ?></center></td>
                                  <td class="text-center">
                                    <button class="btn btn-default btn-circle"
                                          data-tgllibur="<?php echo e($u->tgl_libur); ?>"
                                          data-kodeharilibur="<?php echo e($u->kode_hari_libur); ?>"
                                          data-keterangan="<?php echo e($u->keterangan); ?>"
                                          data-idlebaran="<?php echo e($u->id_lebaran); ?>"
                                          data-idcutibersama="<?php echo e($u->id_cutibersama); ?>"
                                          data-toggle="modal" data-target="#show"><i class="fa fa-eye"></i>
                                    </button>
                                    <button class="btn btn-default btn-circle"
                                          data-tgllibur="<?php echo e($u->tgl_libur); ?>"
                                          data-kodeharilibur="<?php echo e($u->kode_hari_libur); ?>"
                                          data-keterangan="<?php echo e($u->keterangan); ?>"
                                          data-idlebaran="<?php echo e($u->id_lebaran); ?>"
                                          data-idcutibersama="<?php echo e($u->id_cutibersama); ?>"
                                          data-toggle="modal" data-target="#edit"><i class="fa fa-pencil-square-o"></i>
                                    </button>
                                    <button class="btn btn-default btn-circle"
                                          data-tgllibur="<?php echo e($u->tgl_libur); ?>"
                                          data-kodeharilibur="<?php echo e($u->kode_hari_libur); ?>"
                                          data-keterangan="<?php echo e($u->keterangan); ?>"
                                          data-idlebaran="<?php echo e($u->id_lebaran); ?>"
                                          data-idcutibersama="<?php echo e($u->id_cutibersama); ?>"
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
              <form method="POST" action="<?php echo e(url('/hrd/setup/kalenderlibur/delete/{id}')); ?>" class="form-horizontal" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <h4 class="text-center">Apakah Anda yakin untuk menghapus data?</h4>
                  <input type="hidden" name="htgl_libur" id="htgl_libur" value="" />
                  <div class="form-group"><label class="col-sm-4 control-label">Tanggal Libur</label>
                      <div class="col-sm-8"><input type="text" class="form-control" name="tgl_libur" id="tgl_libur" value="<?php echo e(\Carbon\Carbon::now()->toDateString()); ?>" disabled></div>
                  </div>
                  <div class="form-group"><label class="col-sm-4 control-label">Kode Hari Libur</label>
                    <div class="col-sm-8">
                       <select class="form-control chosen-select-width" name="kode_hari_libur" id="kode_hari_libur" disabled>
                              <option value="null" selected disabled>--Kode hari libur--</option>
                               <?php $__currentLoopData = $hari_libur; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo e($data->id); ?>">  <?php echo e($data->id); ?> - <?php echo e($data->deskripsi); ?></option>
                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                  </div>
                  <div class="form-group"><label class="col-sm-4 control-label">Keterangan</label>
                      <div class="col-sm-8"><input type="text" class="form-control date input-sm" name="keterangan" id="keterangan" disabled></div>
                  </div>
                  <div class="form-group"><label class="col-sm-4 control-label">ID Lebaran</label>
                    <div class="col-sm-8">
                       <select class="form-control chosen-select-width" name="id_lebaran" id="id_lebaran" disabled>
                              <option value="null" selected disabled>--id lebaran--</option>
                              <option value="1">Ya</option>
                              <option value="0">TIdak</option>
                        </select>
                    </div>
                  </div>
                  <div class="form-group"><label class="col-sm-4 control-label">ID Cuti bersama</label>
                    <div class="col-sm-8">
                       <select class="form-control chosen-select-width" name="id_cutibersama" id="id_cutibersama" disabled>
                              <option value="null" selected disabled>--id cuti bersama--</option>
                              <option value="1">Ya</option>
                              <option value="0">TIdak</option>
                        </select>
                    </div>
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
                    <h4 class="modal-title">Show Kalender Libur</h4>
                </div>
                <div class="modal-body">
                <form method="POST" action="" class="form-horizontal" enctype="multipart/form-data">
                  <input type="hidden" name="htgl_libur" id="htgl_libur" value="" />
                  <div class="form-group"><label class="col-sm-4 control-label">Tanggal Libur</label>
                      <div class="col-sm-8"><input type="text" class="form-control date input-sm" name="tgl_libur" id="tgl_libur" value="<?php echo e(\Carbon\Carbon::now()->toDateString()); ?>" disabled></div>
                  </div>
                  <div class="form-group"><label class="col-sm-4 control-label">Kode Hari Libur</label>
                    <div class="col-sm-8">
                       <select class="form-control chosen-select-width" name="kode_hari_libur" id="kode_hari_libur" disabled>
                              <option value="null" selected disabled>--Kode hari libur--</option>
                               <?php $__currentLoopData = $hari_libur; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo e($data->id); ?>">  <?php echo e($data->id); ?> - <?php echo e($data->deskripsi); ?></option>
                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                  </div>
                  <div class="form-group"><label class="col-sm-4 control-label">Keterangan</label>
                      <div class="col-sm-8"><input type="text" class="form-control" name="keterangan" id="keterangan" disabled></div>
                  </div>
                  <div class="form-group"><label class="col-sm-4 control-label">ID Lebaran</label>
                    <div class="col-sm-8">
                       <select class="form-control chosen-select-width" name="id_lebaran" id="id_lebaran" disabled>
                              <option value="null" selected disabled>--id lebaran--</option>
                              <option value="1">Ya</option>
                              <option value="0">TIdak</option>
                        </select>
                    </div>
                  </div>
                  <div class="form-group"><label class="col-sm-4 control-label">ID Cuti bersama</label>
                    <div class="col-sm-8">
                       <select class="form-control chosen-select-width" name="id_cutibersama" id="id_cutibersama" disabled>
                              <option value="null" selected disabled>--id cuti bersama--</option>
                              <option value="1">Ya</option>
                              <option value="0">TIdak</option>
                        </select>
                    </div>
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
                    <h4 class="modal-title">Edit Kalender Libur</h4>
                </div>
                <div class="modal-body">
                <form method="POST" action="<?php echo e(url('/hrd/setup/kalenderlibur/update/{id}')); ?>" class="form-horizontal" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="htgl_libur" id="htgl_libur" value="" />
                        <div class="form-group"><label class="col-sm-4 control-label">Tanggal Libur</label>
                            <div class="col-sm-8"><input type="text" class="form-control date input-sm" name="tgl_libur" id="tgl_libur" value="<?php echo e(\Carbon\Carbon::now()->toDateString()); ?>" disabled></div>
                        </div>
                        <div class="form-group"><label class="col-sm-4 control-label">Kode Hari Libur</label>
                          <div class="col-sm-8">
                             <select class="form-control chosen-select-width" name="kode_hari_libur" id="kode_hari_libur">
                                    <option value="null" selected disabled>--Kode hari libur--</option>
                                     <?php $__currentLoopData = $hari_libur; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($data->id); ?>">  <?php echo e($data->id); ?> - <?php echo e($data->deskripsi); ?></option>
                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </select>
                          </div>
                        </div>
                        <div class="form-group"><label class="col-sm-4 control-label">Keterangan</label>
                            <div class="col-sm-8"><input type="text" class="form-control" name="keterangan" id="keterangan"></div>
                        </div>
                        <div class="form-group"><label class="col-sm-4 control-label">ID Lebaran</label>
                          <div class="col-sm-8">
                             <select class="form-control chosen-select-width" name="id_lebaran" id="id_lebaran">
                                    <option value="null" selected disabled>--id lebaran--</option>
                                    <option value="1">Ya</option>
                                    <option value="0">TIdak</option>
                              </select>
                          </div>
                        </div>
                        <div class="form-group"><label class="col-sm-4 control-label">ID Cuti bersama</label>
                          <div class="col-sm-8">
                             <select class="form-control chosen-select-width" name="id_cutibersama" id="id_cutibersama">
                                    <option value="null" selected disabled>--id cuti bersama--</option>
                                    <option value="1">Ya</option>
                                    <option value="0">TIdak</option>
                              </select>
                          </div>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update Data</button>
                </div>
                </form>
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

    $('.date').datepicker({
          autoclose: true,
          todayHighlight: true,
          format: 'yyyy-mm-dd'
      });

    $(document).ready(function(){

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

                        var tgllibur = button.data('tgllibur')
                        var kodeharilibur = button.data('kodeharilibur')
                        var keterangan = button.data('keterangan')
                        var idlebaran = button.data('idlebaran')
                        var idcutibersama = button.data('idcutibersama')

                        var modal = $(this)
                        modal.find('.modal-body #tgl_libur').val(tgllibur);
                        modal.find('.modal-body #htgl_libur').val(tgllibur);
                        modal.find('.modal-body #kode_hari_libur').val(kodeharilibur);
                        modal.find('.modal-body #keterangan').val(keterangan);
                        modal.find('.modal-body #id_lebaran').val(idlebaran);
                        modal.find('.modal-body #id_cutibersama').val(idcutibersama);
                    })
    $('#edit').on('show.bs.modal', function (event) {
                        var button = $(event.relatedTarget) // Button that triggered the modal

                        var tgllibur = button.data('tgllibur')
                        var kodeharilibur = button.data('kodeharilibur')
                        var keterangan = button.data('keterangan')
                        var idlebaran = button.data('idlebaran')
                        var idcutibersama = button.data('idcutibersama')

                        var modal = $(this)
                        modal.find('.modal-body #tgl_libur').val(tgllibur);
                        modal.find('.modal-body #htgl_libur').val(tgllibur);
                        modal.find('.modal-body #kode_hari_libur').val(kodeharilibur);
                        modal.find('.modal-body #keterangan').val(keterangan);
                        modal.find('.modal-body #id_lebaran').val(idlebaran);
                        modal.find('.modal-body #id_cutibersama').val(idcutibersama);
                    })
    $('#delete').on('show.bs.modal', function (event) {
                        var button = $(event.relatedTarget) // Button that triggered the modal

                        var tgllibur = button.data('tgllibur')
                        var kodeharilibur = button.data('kodeharilibur')
                        var keterangan = button.data('keterangan')
                        var idlebaran = button.data('idlebaran')
                        var idcutibersama = button.data('idcutibersama')

                        var modal = $(this)
                        modal.find('.modal-body #tgl_libur').val(tgllibur);
                        modal.find('.modal-body #htgl_libur').val(tgllibur);
                        modal.find('.modal-body #kode_hari_libur').val(kodeharilibur);
                        modal.find('.modal-body #keterangan').val(keterangan);
                        modal.find('.modal-body #id_lebaran').val(idlebaran);
                        modal.find('.modal-body #id_cutibersama').val(idcutibersama);
                    })


</script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\recruitment\resources\views/hrd/setup/kalenderlibur/index.blade.php ENDPATH**/ ?>
<?php $__env->startSection('main'); ?>
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Setup JKS Lain</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="<?php echo e(url('/dashboard')); ?>">Home</a>
                </li>
                <li class="active">
                    <strong>Setup Jks Lain</strong>
                </li>
            </ol>

        </div>
    </div>


    <div class="wrapper wrapper-content animated fadeInRight">


        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>JKS Lain</h5>

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
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal5">Tambah JKS Lain</button>
                        </div>
                        <div class="modal inmodal fade" id="myModal5" tabindex="-1" role="dialog"  aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title">Tambah JKS Lain</h4>
                                    </div>
                                    <div class="modal-body">
                                      <form method="POST" action="<?php echo e(url('/hrd/setup/jkslain/store')); ?>" class="form-horizontal" enctype="multipart/form-data">
                                            <?php echo csrf_field(); ?>
                                            <?php echo $__env->make('hrd.setup.jkslain.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
                              <th class="text-center">Kode</th>
                              <th class="text-center">Deskripsi</th>
                              <th class="text-center">Nilai Premi</th>
                              <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                              <?php
                								$i=1;
                							?>
                              <?php $__currentLoopData = $st_asuransi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                              <tr>
                                  <td class="text-center"><?php echo e($i); ?></td>
                                  <td><?php echo e($u->kode); ?></td>
                                  <td><center><?php echo e($u->deskripsi); ?></center></td>
                                  <td><center><?php echo e($u->nilai_premi); ?></center></td>
                                  <td class="text-center">
                                    <button class="btn btn-default btn-circle"
                                          data-kode="<?php echo e($u->kode); ?>"
                                          data-deskripsi="<?php echo e($u->deskripsi); ?>"
                                          data-nilaipremi="<?php echo e($u->nilai_premi); ?>"
                                          data-toggle="modal" data-target="#show"><i class="fa fa-eye"></i>
                                    </button>
                                    <button class="btn btn-default btn-circle"
                                          data-kode="<?php echo e($u->kode); ?>"
                                          data-deskripsi="<?php echo e($u->deskripsi); ?>"
                                          data-nilaipremi="<?php echo e($u->nilai_premi); ?>"
                                          data-toggle="modal" data-target="#edit"><i class="fa fa-pencil-square-o"></i>
                                    </button>
                                    <button class="btn btn-default btn-circle"
                                          data-kode="<?php echo e($u->kode); ?>"
                                          data-deskripsi="<?php echo e($u->deskripsi); ?>"
                                          data-nilaipremi="<?php echo e($u->nilai_premi); ?>"
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
              <form method="POST" action="<?php echo e(url('/hrd/setup/jkslain/delete/{id}')); ?>" class="form-horizontal" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <h4 class="text-center">Apakah Anda yakin untuk menghapus data?</h4>
                <input type="hidden" name="hkode" id="hkode" value="" />
                <div class="form-group"><label class="col-sm-4 control-label">Kode</label>
                    <div class="col-sm-8"><input type="text"  class="form-control" name="kode" id="kode" maxlength="5" disabled></div>
                </div>
                <div class="form-group"><label class="col-sm-4 control-label">Deskripsi</label>
                    <div class="col-sm-8"><input type="text"  class="form-control" name="deskripsi" id="deskripsi" disabled></div>
                </div>
                <div class="form-group"><label class="col-sm-4 control-label">Nilai Premi</label>
                    <div class="col-sm-8"><input type="number" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control" name="nilai_premi" id="nilai_premi" disabled></div>
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
                    <h4 class="modal-title">Show JKS Lain</h4>
                </div>
                <div class="modal-body">
                <form method="POST" action="" class="form-horizontal" enctype="multipart/form-data">
                <input type="hidden" name="hkode" id="hkode" value="" />
                <div class="form-group"><label class="col-sm-4 control-label">Kode</label>
                    <div class="col-sm-8"><input type="text"  class="form-control" name="kode" id="kode" maxlength="5" disabled></div>
                </div>
                <div class="form-group"><label class="col-sm-4 control-label">Deskripsi</label>
                    <div class="col-sm-8"><input type="text"  class="form-control" name="deskripsi" id="deskripsi" disabled></div>
                </div>
                <div class="form-group"><label class="col-sm-4 control-label">Nilai Premi</label>
                    <div class="col-sm-8"><input type="number" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control" name="nilai_premi" id="nilai_premi" disabled></div>
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
                    <h4 class="modal-title">Edit JKS Lain</h4>
                </div>
                <div class="modal-body">
                <form method="POST" action="<?php echo e(url('/hrd/setup/jkslain/update/{id}')); ?>" class="form-horizontal" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="hkode" id="hkode" value="" />
                        <div class="form-group"><label class="col-sm-4 control-label">Kode</label>
                            <div class="col-sm-8"><input type="text"  class="form-control" name="kode" id="kode" maxlength="5" disabled></div>
                        </div>
                        <div class="form-group"><label class="col-sm-4 control-label">Deskripsi</label>
                            <div class="col-sm-8"><input type="text"  class="form-control" name="deskripsi" id="deskripsi"></div>
                        </div>
                        <div class="form-group"><label class="col-sm-4 control-label">Nilai Premi</label>
                            <div class="col-sm-8"><input type="number" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control" name="nilai_premi" id="nilai_premi"></div>
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
<script>
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

                        var kode = button.data('kode')
                        var deskripsi = button.data('deskripsi')
                        var nilaipremi = button.data('nilaipremi')

                        var modal = $(this)
                        modal.find('.modal-body #kode').val(kode);
                        modal.find('.modal-body #hkode').val(kode);
                        modal.find('.modal-body #deskripsi').val(deskripsi);
                        modal.find('.modal-body #nilai_premi').val(nilaipremi);
                    })
    $('#edit').on('show.bs.modal', function (event) {
                        var button = $(event.relatedTarget) // Button that triggered the modal

                        var kode = button.data('kode')
                        var deskripsi = button.data('deskripsi')
                        var nilaipremi = button.data('nilaipremi')

                        var modal = $(this)
                        modal.find('.modal-body #kode').val(kode);
                        modal.find('.modal-body #hkode').val(kode);
                        modal.find('.modal-body #deskripsi').val(deskripsi);
                        modal.find('.modal-body #nilai_premi').val(nilaipremi);
                    })
    $('#delete').on('show.bs.modal', function (event) {
                        var button = $(event.relatedTarget) // Button that triggered the modal

                        var kode = button.data('kode')
                        var deskripsi = button.data('deskripsi')
                        var nilaipremi = button.data('nilaipremi')

                        var modal = $(this)
                        modal.find('.modal-body #kode').val(kode);
                        modal.find('.modal-body #hkode').val(kode);
                        modal.find('.modal-body #deskripsi').val(deskripsi);
                        modal.find('.modal-body #nilai_premi').val(nilaipremi);
                    })


</script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\recruitment\resources\views/hrd/setup/jkslain/index.blade.php ENDPATH**/ ?>
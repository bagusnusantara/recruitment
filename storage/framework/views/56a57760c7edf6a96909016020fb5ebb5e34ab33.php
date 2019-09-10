<?php $__env->startSection('main'); ?>
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Setup Tunjangan KJK</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="<?php echo e(url('/dashboard')); ?>">Home</a>
                </li>
                <li class="active">
                    <strong>Setup Tunjangan KJK</strong>
                </li>
            </ol>

        </div>
    </div>


    <div class="wrapper wrapper-content animated fadeInRight">


        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Tunjangan KJK</h5>

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
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal5">Tambah Tunjangan KJK</button>
                        </div>
                        <div class="modal inmodal fade" id="myModal5" tabindex="-1" role="dialog"  aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title">Tambah Tunjangan KJK</h4>
                                    </div>
                                    <div class="modal-body">
                                      <form method="POST" action="<?php echo e(url('/hrd/setup/tunjangankjk/store')); ?>" class="form-horizontal" enctype="multipart/form-data">
                                            <?php echo csrf_field(); ?>
                                            <?php echo $__env->make('hrd.setup.tunjangankjk.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
                              <th class="text-center">Kode Lokasi</th>
                              <th class="text-center">Nama Lokasi Kerja</th>
                              <th class="text-center">Tunj KJK Per Jam</th>
                              <th class="text-center">Tunj KJK Per Bulan</th>
                              <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                              <?php
                      			   $i=1;
                      			  ?>
                              <?php $__currentLoopData = $st_tunj_kjk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                              <tr>
                                  <td class="text-center"><?php echo e($i); ?></td>
                                  <td class="text-center"><?php echo e($u->tanggal); ?></td>
                                  <td><center><?php echo e($u->kode_lokasi); ?><center></td>
                                  <td><center><?php echo e($u->nama_client); ?><center></td>
                                  <td><center><?php echo e($u->kjk); ?></center></td>
                                  <td><center><?php echo e($u->kjk_paket); ?></center></td>
                                  <td class="text-center">
                                    <button class="btn btn-default btn-circle"
                                          data-tanggal="<?php echo e($u->tanggal); ?>"
                                          data-kodelokasi="<?php echo e($u->kode_lokasi); ?>"
                                          data-kjk="<?php echo e($u->kjk); ?>"
                                          data-kjkpaket="<?php echo e($u->kjk_paket); ?>"
                                          data-toggle="modal" data-target="#show"><i class="fa fa-eye"></i>
                                    </button>
                                    <button class="btn btn-default btn-circle"
                                          data-tanggal="<?php echo e($u->tanggal); ?>"
                                          data-kodelokasi="<?php echo e($u->kode_lokasi); ?>"
                                          data-kjk="<?php echo e($u->kjk); ?>"
                                          data-kjkpaket="<?php echo e($u->kjk_paket); ?>"
                                          data-toggle="modal" data-target="#edit"><i class="fa fa-pencil-square-o"></i>
                                    </button>
                                    <button class="btn btn-default btn-circle"
                                          data-tanggal="<?php echo e($u->tanggal); ?>"
                                          data-kodelokasi="<?php echo e($u->kode_lokasi); ?>"
                                          data-kjk="<?php echo e($u->kjk); ?>"
                                          data-kjkpaket="<?php echo e($u->kjk_paket); ?>"
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
              <form method="POST" action="<?php echo e(url('/hrd/setup/tunjangankjk/delete/{id}')); ?>" class="form-horizontal" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <h4 class="text-center">Apakah Anda yakin untuk menghapus data?</h4>
                  <input type="hidden" name="htanggal" id="htanggal" value="" />
                  <input type="hidden" name="hkode_lokasi" id="hkode_lokasi" value="" />
                  <input type="hidden" name="hkjk" id="hkjk" value="" />
                  <input type="hidden" name="hkjk_paket" id="hkjk_paket" value="" />
                  <div class="form-group"><label class="col-sm-4 control-label">Tanggal</label>
                      <div class="col-sm-8"><input type="text" class="form-control date input-sm" readonly name="tanggal" id="tanggal" value="<?php echo e(\Carbon\Carbon::now()->toDateString()); ?>"></div>
                  </div>
                   <div class="form-group"><label class="col-sm-4 control-label">Lokasi Kerja</label>
                    <div class="col-sm-8">
                       <select class="form-control chosen-select-width" name="kode_lokasi" id="kode_lokasi" readonly>
                              <option value="null" selected disabled>--Lokasi kerja--</option>
                               <?php $__currentLoopData = $md_client; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo e($data->id); ?>">  <?php echo e($data->id); ?> - <?php echo e($data->nama_client); ?></option>
                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                  </div>
                  <div class="form-group"><label class="col-sm-4 control-label">T.KJK per jam</label>
                      <div class="col-sm-8"><input type="text" class="form-control" name="kjk" id="kjk" readonly></div>
                  </div>
                  <div class="form-group"><label class="col-sm-4 control-label">T. KJK Paket per bulan</label>
                      <div class="col-sm-8"><input type="text" class="form-control" name="kjk_paket" id="kjk_paket" readonly></div>
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
                    <h4 class="modal-title">Show Tunjangan KJK</h4>
                </div>
                <div class="modal-body">
                <form method="POST" action="" class="form-horizontal" enctype="multipart/form-data">
                  <input type="hidden" name="htanggal" id="htanggal" value="" />
                  <input type="hidden" name="hkode_lokasi" id="hkode_lokasi" value="" />
                  <input type="hidden" name="hkjk" id="hkjk" value="" />
                  <input type="hidden" name="hkjk_paket" id="hkjk_paket" value="" />
                  <div class="form-group"><label class="col-sm-4 control-label">Tanggal</label>
                      <div class="col-sm-8"><input type="text" class="form-control date input-sm" name="tanggal" id="tanggal" value="<?php echo e(\Carbon\Carbon::now()->toDateString()); ?>" readonly></div>
                  </div>
                  <div class="form-group"><label class="col-sm-4 control-label">Lokasi Kerja</label>
                    <div class="col-sm-8">
                       <select class="form-control chosen-select-width" name="kode_lokasi" id="kode_lokasi">
                              <option value="null" selected disabled>--Lokasi kerja--</option>
                               <?php $__currentLoopData = $md_client; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo e($data->id); ?>">  <?php echo e($data->id); ?> - <?php echo e($data->nama_client); ?></option>
                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                  </div>
                  <div class="form-group"><label class="col-sm-4 control-label">T.KJK per jam</label>
                      <div class="col-sm-8"><input type="text" class="form-control" name="kjk" id="kjk" readonly></div>
                  </div>
                  <div class="form-group"><label class="col-sm-4 control-label">T.KJK Paket per bulan</label>
                      <div class="col-sm-8"><input type="text" class="form-control" name="kjk_paket" id="kjk_paket" readonly></div>
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
                  <h4 class="modal-title">Edit Tunjangan KJK</h4>
              </div>
              <div class="modal-body">
                <form method="POST" action="<?php echo e(url('/hrd/setup/tunjangankjk/update/{id}')); ?>" class="form-horizontal" enctype="multipart/form-data">
                      <?php echo csrf_field(); ?>
                      <input type="hidden" name="htanggal" id="htanggal" value="" />
                      <input type="hidden" name="hkode_lokasi" id="hkode_lokasi" value="" />
                      <input type="hidden" name="hkjk" id="hkjk" value="" />
                      <input type="hidden" name="hkjk_paket" id="hkjk_paket" value="" />
                      <div class="form-group"><label class="col-sm-4 control-label">Tanggal</label>
                          <div class="col-sm-8"><input type="text" class="form-control date input-sm" name="tanggal" id="tanggal" value="<?php echo e(\Carbon\Carbon::now()->toDateString()); ?>" ></div>
                      </div>
                      <div class="form-group"><label class="col-sm-4 control-label">Lokasi Kerja</label>
                        <div class="col-sm-8">
                           <select class="form-control chosen-select-width" name="kode_lokasi" id="kode_lokasi">
                                  <option value="null" selected disabled>--Lokasi kerja--</option>
                                   <?php $__currentLoopData = $md_client; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <option value="<?php echo e($data->id); ?>">  <?php echo e($data->id); ?> - <?php echo e($data->nama_client); ?></option>
                                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                      </div>
                      <div class="form-group"><label class="col-sm-4 control-label">T.KJK per jam</label>
                          <div class="col-sm-8"><input type="number" step="any" class="form-control" name="kjk" id="kjk" ></div>
                      </div>
                      <div class="form-group"><label class="col-sm-4 control-label">T.KJK Paket per bulan</label>
                          <div class="col-sm-8"><input type="number" step="any" class="form-control" name="kjk_paket" id="kjk_paket" ></div>
                      </div>
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

                        var tanggal = button.data('tanggal')
                        var kodelokasi = button.data('kodelokasi')
                        var kjk = button.data('kjk')
                        var kjkpaket = button.data('kjkpaket')

                        var modal = $(this)
                        modal.find('.modal-body #tanggal').val(tanggal);
                        modal.find('.modal-body #htanggal').val(tanggal);
                        modal.find('.modal-body #kode_lokasi').val(kodelokasi);
                        modal.find('.modal-body #hkode_lokasi').val(kodelokasi);
                        modal.find('.modal-body #kjk').val(kjk);
                        modal.find('.modal-body #hkjk').val(kjk);
                        modal.find('.modal-body #kjk_paket').val(kjkpaket);
                        modal.find('.modal-body #hkjk_paket').val(kjkpaket);
                    })
    $('#edit').on('show.bs.modal', function (event) {
                        var button = $(event.relatedTarget) // Button that triggered the modal

                        var tanggal = button.data('tanggal')
                        var kodelokasi = button.data('kodelokasi')
                        var kjk = button.data('kjk')
                        var kjkpaket = button.data('kjkpaket')

                        var modal = $(this)
                        modal.find('.modal-body #tanggal').val(tanggal);
                        modal.find('.modal-body #htanggal').val(tanggal);
                        modal.find('.modal-body #kode_lokasi').val(kodelokasi);
                        modal.find('.modal-body #hkode_lokasi').val(kodelokasi);
                        modal.find('.modal-body #kjk').val(kjk);
                        modal.find('.modal-body #hkjk').val(kjk);
                        modal.find('.modal-body #kjk_paket').val(kjkpaket);
                        modal.find('.modal-body #hkjk_paket').val(kjkpaket);
                    })
    $('#delete').on('show.bs.modal', function (event) {
                        var button = $(event.relatedTarget) // Button that triggered the modal

                        var tanggal = button.data('tanggal')
                        var kodelokasi = button.data('kodelokasi')
                        var kjk = button.data('kjk')
                        var kjkpaket = button.data('kjkpaket')

                        var modal = $(this)
                        modal.find('.modal-body #tanggal').val(tanggal);
                        modal.find('.modal-body #htanggal').val(tanggal);
                        modal.find('.modal-body #kode_lokasi').val(kodelokasi);
                        modal.find('.modal-body #hkode_lokasi').val(kodelokasi);
                        modal.find('.modal-body #kjk').val(kjk);
                        modal.find('.modal-body #hkjk').val(kjk);
                        modal.find('.modal-body #kjk_paket').val(kjkpaket);
                        modal.find('.modal-body #hkjk_paket').val(kjkpaket);
                    })



</script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\recruitment\resources\views/hrd/setup/tunjangankjk/index.blade.php ENDPATH**/ ?>
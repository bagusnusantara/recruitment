<?php $__env->startSection('main'); ?>

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Pengajuan Lembur</h2>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo e(url('home')); ?>">Dashboard</a>
            </li>
            <li>Pegawai</li>
            <li class="active">Pengajuan Lembur</li>
        </ol>
    </div>
</div>

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Pengajuan Lembur</h5>
                <div class="text-right">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modaltambah"><i class="fa fa-plus"></i>&nbsp Tambah Pengajuan Lembur</button>
                </div>
            </div>
            <div class="ibox-content">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-client" style="width: 100%">
                        <thead>
                            <tr>
                              <th class="text-center">No</th>
                              <th class="text-center">NIK</th>
                              <th class="text-center">Nama</th>
                              <th class="text-center">Jam Mulai Lembur</th>
                              <th class="text-center">Jam Akhir Lembur</th>
                              <th class="text-center">Keterangan</th>
                              <th class="text-center">Status</th>
                              <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>                
                            <?php
                                $i=1;
                            ?>
                            <?php $__currentLoopData = $lembur; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                              <td class="text-center"><?php echo e($i); ?></td>
                              <td class="text-center"><?php echo e($u->NIK); ?></td>
                              <td class="text-center"><?php echo e($u->nama_lengkap); ?></td>
                              <td class="text-center"><?php echo e($u->waktu_awal); ?></td>
                              <td class="text-center"><?php echo e($u->waktu_akhir); ?></td>
                              <td class="text-center"><?php echo e($u->keterangan); ?></td>
                              <td class="text-center">
                                <?php if( $u->status == 0 ): ?>
                                <span class="label label-warning">Belum Lembur</span>
                                <?php elseif($u->status == 1): ?>
                                <span class="label label-success">Sudah Lembur</span>
                                <?php endif; ?>
                              </td>
                              <td class="text-center">
                                    <button class="btn btn-default btn-circle"
                                          data-id="<?php echo e($u->id); ?>"
                                          data-karyawanid="<?php echo e($u->karyawan_id); ?>"
                                          data-nik="<?php echo e($u->NIK); ?>"
                                          data-namalengkap="<?php echo e($u->nama_lengkap); ?>"
                                          data-waktuawal="<?php echo e($u->waktu_awal); ?>"
                                          data-waktuakhir="<?php echo e($u->waktu_akhir); ?>"
                                          data-waktulembur="<?php echo e($u->waktu_lembur); ?>"
                                          data-keterangan="<?php echo e($u->keterangan); ?>"
                                          data-status="<?php echo e($u->status); ?>"
                                          data-notes="<?php echo e($u->notes); ?>"
                                          data-toggle="modal" data-target="#Modaldetail"><i class="fa fa-eye" title="delete"></i>
                                    </button>
                                    <button class="btn btn-default btn-circle"
                                          data-id="<?php echo e($u->id); ?>"
                                          data-karyawanid="<?php echo e($u->karyawan_id); ?>"
                                          data-nik="<?php echo e($u->NIK); ?>"
                                          data-namalengkap="<?php echo e($u->nama_lengkap); ?>"
                                          data-waktuawal="<?php echo e($u->waktu_awal); ?>"
                                          data-waktuakhir="<?php echo e($u->waktu_akhir); ?>"
                                          data-waktulembur="<?php echo e($u->waktu_lembur); ?>"
                                          data-keterangan="<?php echo e($u->keterangan); ?>"
                                          data-status="<?php echo e($u->status); ?>"
                                          data-notes="<?php echo e($u->notes); ?>"
                                          data-toggle="modal" data-target="#Modaledit"><i class="fa fa-edit" title="edit"></i>
                                    </button>
                                    <button class="btn btn-default btn-circle"
                                          data-id="<?php echo e($u->id); ?>"
                                          data-karyawanid="<?php echo e($u->karyawan_id); ?>"
                                          data-nik="<?php echo e($u->NIK); ?>"
                                          data-namalengkap="<?php echo e($u->nama_lengkap); ?>"
                                          data-waktuawal="<?php echo e($u->waktu_awal); ?>"
                                          data-waktuakhir="<?php echo e($u->waktu_akhir); ?>"
                                          data-waktulembur="<?php echo e($u->waktu_lembur); ?>"
                                          data-keterangan="<?php echo e($u->keterangan); ?>"
                                          data-status="<?php echo e($u->status); ?>"
                                          data-notes="<?php echo e($u->notes); ?>"
                                          data-toggle="modal" data-target="#Modaldelete"><i class="fa fa-trash" title="Hapus"></i>
                                    </button>
                              </td>
                            </tr>
                            <?php
                                $i++;
                            ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </tbody>
                    </table>
                </div>          
            </div>
        </div>
    </div>
</div>
<?php echo $__env->make('pegawai.lembur.modal_add', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('pegawai.lembur.modal_edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('pegawai.lembur.modal_detail', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('pegawai.lembur.modal_delete', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('template.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Page-Level Scripts -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<script>$(function() {
    $('input[name="waktu_awal"]').daterangepicker({
        singleDatePicker: true,
        timePicker: true,
        timePicker24Hour:true,
        locale: {
          format: 'YYYY-MM-DD HH:mm:ss'
        }
      });
    });
</script>
<script>$(function() {
    $('input[name="waktu_akhir"]').daterangepicker({
        singleDatePicker: true,
        timePicker: true,
        timePicker24Hour: true,
        locale: {
          format: 'YYYY-MM-DD HH:mm:ss'
        }
      });
    });
</script>
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

        $('#Modaldetail').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget) // Button that triggered the modal

                var id = button.data('id')
                var karyawanid = button.data('karyawanid')
                var nik = button.data('nik')
                var namalengkap = button.data('namalengkap')
                var waktuawal = button.data('waktuawal')
                var waktuakhir = button.data('waktuakhir')
                var waktulembur = button.data('waktulembur')
                var keterangan = button.data('keterangan')
                var status = button.data('status')
                var notes = button.data('notes')
                if (waktulembur <= 9){
                    waktulembur = '0'+waktulembur;
                }

                var modal = $(this)
                modal.find('.modal-body #id').val(id);
                modal.find('.modal-body #karyawan_id').val(karyawanid);
                modal.find('.modal-body #waktu_awal').val(waktuawal);
                modal.find('.modal-body #waktu_akhir').val(waktuakhir);
                modal.find('.modal-body #waktu_lembur').val(waktulembur);
                modal.find('.modal-body #keterangan').val(keterangan);
                modal.find('.modal-body #status').val(status);
                modal.find('.modal-body #notes').val(notes);
            })

    $('#Modaledit').on('show.bs.modal', function (event) {
                    var button = $(event.relatedTarget) // Button that triggered the modal

                var id = button.data('id')
                var karyawanid = button.data('karyawanid')
                var nik = button.data('nik')
                var namalengkap = button.data('namalengkap')
                var waktuawal = button.data('waktuawal')
                var waktuakhir = button.data('waktuakhir')
                var waktulembur = button.data('waktulembur')
                var keterangan = button.data('keterangan')
                var status = button.data('status')
                var notes = button.data('notes')
                if (waktulembur <= 9){
                    waktulembur = '0'+waktulembur;
                }

                var modal = $(this)
                modal.find('.modal-body #id').val(id);
                modal.find('.modal-body #karyawan_id').val(karyawanid);
                modal.find('.modal-body #waktu_awal').val(waktuawal);
                modal.find('.modal-body #waktu_akhir').val(waktuakhir);
                modal.find('.modal-body #waktu_lembur').val(waktulembur);
                modal.find('.modal-body #keterangan').val(keterangan);
                modal.find('.modal-body #status').val(status);
                modal.find('.modal-body #notes').val(notes);
                })

    $('#Modaldelete').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget) // Button that triggered the modal

                var id = button.data('id')

                var modal = $(this)
                modal.find('.modal-body #id').val(id);
                })

</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\recruitment\resources\views/pegawai/lembur/index.blade.php ENDPATH**/ ?>
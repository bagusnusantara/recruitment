<?php $__env->startSection('main'); ?>

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Pelatihan dan Training</h2>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo e(url('home')); ?>">Dashboard</a>
            </li>
            <li>Pegawai</li>
            <li class="active">Pelatihan dan Training</li>
        </ol>
    </div>
</div>

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Pelatihan dan Training</h5>
                <div class="text-right">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modaltambah"><i class="fa fa-plus"></i>&nbsp Tambah Pelatihan dan Training</button>
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
                              <th class="text-center">Tanggal Mulai</th>
                              <th class="text-center">Tanggal Selesai</th>
                              <th class="text-center">Nama Pelatihan</th>
                              <th class="text-center">Penyelenggara Pelatihan</th>
                              <th class="text-center">Target Pelatihan</th>
                              <th class="text-center">Realisasi Hasil</th>
                              <th class="text-center">Nilai Pelatihan</th>
                              <th class="text-center">Biaya Pelatihan</th>
                              <th class="text-center" width="20%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $i=1;
                            ?>
                            <?php $__currentLoopData = $tbl_pelatihan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                              <td class="text-center"><?php echo e($i); ?></td>
                              <td class="text-center"><?php echo e($u->nik); ?></td>
                              <td class="text-center"><?php echo e($u->nama_lengkap); ?></td>
                              <td class="text-center"><?php echo e($u->sdate); ?></td>
                              <td class="text-center"><?php echo e($u->edate); ?></td>
                              <td class="text-center"><?php echo e($u->deskripsi); ?></td>
                              <td class="text-center"><?php echo e($u->vendor_pelatihan); ?></td>
                              <td class="text-center"><?php echo e($u->target_pelatihan); ?></td>
                              <td class="text-center"><?php echo e($u->realisasi_hasil); ?></td>
                              <td class="text-center"><?php echo e($u->nilai_pelatihan); ?></td>
                              <td class="text-center"><?php echo e($u->biaya_pelatihan); ?></td>
                              <td class="text-center">
                                  <button class="btn btn-default btn-circle"
                                        data-nik="<?php echo e($u->nik); ?>"
                                        data-sdate="<?php echo e($u->sdate); ?>"
                                        data-edate="<?php echo e($u->edate); ?>"
                                        data-kodepelatihan="<?php echo e($u->kode_pelatihan); ?>"
                                        data-vendorpelatihan="<?php echo e($u->vendor_pelatihan); ?>"
                                        data-targetpelatihan="<?php echo e($u->target_pelatihan); ?>"
                                        data-realisasihasil="<?php echo e($u->realisasi_hasil); ?>"
                                        data-nilaipelatihan="<?php echo e($u->nilai_pelatihan); ?>"
                                        data-biayapelatihan="<?php echo e($u->biaya_pelatihan); ?>"
                                        data-toggle="modal" data-target="#Modaldetail"><i class="fa fa-eye" title="delete"></i>
                                  </button>
                                  <button class="btn btn-default btn-circle"
                                        data-nik="<?php echo e($u->nik); ?>"
                                        data-sdate="<?php echo e($u->sdate); ?>"
                                        data-edate="<?php echo e($u->edate); ?>"
                                        data-kodepelatihan="<?php echo e($u->kode_pelatihan); ?>"
                                        data-vendorpelatihan="<?php echo e($u->vendor_pelatihan); ?>"
                                        data-targetpelatihan="<?php echo e($u->target_pelatihan); ?>"
                                        data-realisasihasil="<?php echo e($u->realisasi_hasil); ?>"
                                        data-nilaipelatihan="<?php echo e($u->nilai_pelatihan); ?>"
                                        data-biayapelatihan="<?php echo e($u->biaya_pelatihan); ?>"
                                        data-toggle="modal" data-target="#Modaledit"><i class="fa fa-edit" title="edit"></i>
                                  </button>
                                  <button class="btn btn-default btn-circle"
                                        data-nik="<?php echo e($u->nik); ?>"
                                        data-sdate="<?php echo e($u->sdate); ?>"
                                        data-edate="<?php echo e($u->edate); ?>"
                                        data-kodepelatihan="<?php echo e($u->kode_pelatihan); ?>"
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
<?php echo $__env->make('pegawai.training.modal_add', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('pegawai.training.modal_edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('pegawai.training.modal_detail', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('pegawai.training.modal_delete', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('template.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Page-Level Scripts -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<script>$(function() {
    $('input[name="sdate"]').daterangepicker({
        singleDatePicker: true,
        locale: {
          format: 'YYYY-MM-DD'
        }
      });
    });
</script>
<script>$(function() {
    $('input[name="edate"]').daterangepicker({
        singleDatePicker: true,
        locale: {
          format: 'YYYY-MM-DD'
        }
      });
    });
</script>
<script type="text/javascript">
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

                    var nik = button.data('nik')
                    var sdate = button.data('sdate')
                    var edate = button.data('edate')
                    var kodepelatihan = button.data('kodepelatihan')
                    var vendorpelatihan = button.data('vendorpelatihan')
                    var targetpelatihan = button.data('targetpelatihan')
                    var realisasihasil = button.data('realisasihasil')
                    var nilaipelatihan = button.data('nilaipelatihan')
                    var biayapelatihan = button.data('biayapelatihan')


                    var modal = $(this)
                    modal.find('.modal-body #nik').val(nik);
                    modal.find('.modal-body #sdate').val(sdate);
                    modal.find('.modal-body #edate').val(edate);
                    modal.find('.modal-body #kode_pelatihan').val(kodepelatihan);
                    modal.find('.modal-body #hnik').val(nik);
                    modal.find('.modal-body #hsdate').val(sdate);
                    modal.find('.modal-body #hedate').val(edate);
                    modal.find('.modal-body #hkode_pelatihan').val(kodepelatihan);
                    modal.find('.modal-body #vendor_pelatihan').val(vendorpelatihan);
                    modal.find('.modal-body #target_pelatihan').val(targetpelatihan);
                    modal.find('.modal-body #realisasi_hasil').val(realisasihasil);
                    modal.find('.modal-body #nilai_pelatihan').val(nilaipelatihan);
                    modal.find('.modal-body #biaya_pelatihan').val(biayapelatihan);

                })

    $('#Modaledit').on('show.bs.modal', function (event) {
                    var button = $(event.relatedTarget) // Button that triggered the modal

                    var nik = button.data('nik')
                    var sdate = button.data('sdate')
                    var edate = button.data('edate')
                    var kodepelatihan = button.data('kodepelatihan')
                    var vendorpelatihan = button.data('vendorpelatihan')
                    var targetpelatihan = button.data('targetpelatihan')
                    var realisasihasil = button.data('realisasihasil')
                    var nilaipelatihan = button.data('nilaipelatihan')
                    var biayapelatihan = button.data('biayapelatihan')


                    var modal = $(this)
                    modal.find('.modal-body #nik').val(nik);
                    modal.find('.modal-body #sdate').val(sdate);
                    modal.find('.modal-body #edate').val(edate);
                    modal.find('.modal-body #kode_pelatihan').val(kodepelatihan);
                    modal.find('.modal-body #hnik').val(nik);
                    modal.find('.modal-body #hsdate').val(sdate);
                    modal.find('.modal-body #hedate').val(edate);
                    modal.find('.modal-body #hkode_pelatihan').val(kodepelatihan);
                    modal.find('.modal-body #vendor_pelatihan').val(vendorpelatihan);
                    modal.find('.modal-body #target_pelatihan').val(targetpelatihan);
                    modal.find('.modal-body #realisasi_hasil').val(realisasihasil);
                    modal.find('.modal-body #nilai_pelatihan').val(nilaipelatihan);
                    modal.find('.modal-body #biaya_pelatihan').val(biayapelatihan);
                })


    $('#Modaldelete').on('show.bs.modal', function (event) {
                    var button = $(event.relatedTarget) // Button that triggered the modal

                    var nik = button.data('nik')
                    var sdate = button.data('sdate')
                    var edate = button.data('edate')
                    var kodepelatihan = button.data('kodepelatihan')

                    var modal = $(this)

                    modal.find('.modal-body #hnik').val(nik);
                    modal.find('.modal-body #hsdate').val(sdate);
                    modal.find('.modal-body #hedate').val(edate);
                    modal.find('.modal-body #hkode_pelatihan').val(kodepelatihan);
                })

</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\recruitment\resources\views/pegawai/training/index.blade.php ENDPATH**/ ?>
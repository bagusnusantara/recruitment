<?php $__env->startSection('main'); ?>

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Sanksi</h2>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo e(url('home')); ?>">Dashboard</a>
            </li>
            <li>Pegawai</li>
            <li class="active">Sanksi</li>
        </ol>
    </div>
</div>

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Sanksi</h5>
            </div>
            <div class="ibox-content">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-client" style="width: 100%">
                        <thead>
                            <tr>
                              <th class="text-center">No</th>
                              <th class="text-center">NIK</th>
                              <th class="text-center">Nama</th>
                              <th class="text-center">Tanggal</th>
                              <th class="text-center">Alasan</th>
                              <th class="text-center">Jenis Sanksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $i=1;
                            ?>
                            <?php $__currentLoopData = $tbl_sanksi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                              <td class="text-center"><?php echo e($i); ?></td>
                              <td class="text-center"><?php echo e($u->nik); ?></td>
                              <td class="text-center"><?php echo e($u->nama_lengkap); ?></td>
                              <td class="text-center"><?php echo e($u->tanggal); ?></td>
                              <td class="text-center"><?php echo e($u->alasan); ?></td>
                              <td class="text-center"><?php echo e($u->deskripsi); ?></td>
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

<?php echo $__env->make('template.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Page-Level Scripts -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
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

</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\recruitment\resources\views/pegawai/sanksi/index.blade.php ENDPATH**/ ?>
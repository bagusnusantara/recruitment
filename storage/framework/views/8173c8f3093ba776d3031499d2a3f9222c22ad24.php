<?php $__env->startSection('main'); ?>
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Lowongan Pekerjaan</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="<?php echo e(url('/admin/dashboard')); ?>">Home</a>
                </li>
                <li class="active">
                    <strong>Lowongan Pekerjaan</strong>
                </li>
            </ol>

        </div>
    </div>


    <div class="wrapper wrapper-content animated fadeInRight">


        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>List Lowongan Pekerjaan</h5>

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
                            <a class="btn btn-primary" href="<?php echo e(url('admin/lowongan/create')); ?>">Tambah Lowongan Pekerjaan</a>
                        </div>
                        <?php echo csrf_field(); ?>

                        <table class="table table-striped table-bordered table-hover dataTables-client" style="width: 100%">
                            <thead>
                            <tr>
                              <th><center>No</center></th>
                              <th><center>Job Tittle</center></th>
                              <th><center>Klien</center></th>
                              <th><center>Masa Berlaku</center></th>
                              <th><center>Action</center></th>
                            </tr>
                            </thead>
                            <tbody>
                              <?php
                								$i=1;
                							?>
                              <?php $__currentLoopData = $lowongan_pekerjaan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lowongan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                              <tr>
                                  <td><center><?php echo e($i); ?></center></td>
                                  <td><center><?php echo e($lowongan->job_tittle); ?></center></td>
                                  <td><?php echo e($lowongan->nama_client); ?></td>
                                  <td><center><?php echo e(date('d-m-Y', strtotime($lowongan->start_date))); ?> sampai <?php echo e(date('d-m-Y', strtotime($lowongan->end_date))); ?></center></td>
                                  <td><center>
                                    <a type="button" class="btn btn-default btn-circle" href="lowongan/show/<?php echo e($lowongan->id); ?>" type="button"><i class="fa fa-eye"></i></a>
                                    <button class="btn btn-default btn-circle" type="button"><i class="fa fa-pen-square"></i>
                                    </center>
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

</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\recruitment\resources\views/admin/lowongan/index.blade.php ENDPATH**/ ?>
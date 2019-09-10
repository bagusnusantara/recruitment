<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SMI | Human Resources Information System</title>

    <link href="<?php echo e(asset('inspinia/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('fa/css/all.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(asset('inspinia/css/plugins/dataTables/datatables.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('inspinia/css/plugins/dropzone/basic.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('inspinia/css/plugins/dropzone/dropzone.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('inspinia/css/plugins/jasny/jasny-bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('inspinia/css/plugins/codemirror/codemirror.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('inspinia/css/animate.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('inspinia/css/plugins/jQueryUI/jquery-ui-1.10.4.custom.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('inspinia/css/plugins/jqGrid/ui.jqgrid.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('inspinia/css/style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('inspinia/css/plugins/datapicker/datepicker3.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('inspinia/css/plugins/chosen/bootstrap-chosen.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('inspinia/css/plugins/iCheck/custom.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(asset('inspinia/css/plugins/toastr/toastr.min.css')); ?>" rel="stylesheet">

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
    <link href="<?php echo e(asset('inspinia/css/plugins/sweetalert/sweetalert.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('inspinia/css/plugins/summernote/summernote.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('inspinia/css/plugins/summernote/summernote-bs3.css')); ?>" rel="stylesheet">
    <!-- Gritter -->
  	<link href="<?php echo e(asset('inspinia/js/plugins/gritter/jquery.gritter.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('inspinia/css/plugins/steps/jquery.steps.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('inspinia/css/plugins/select2/select2.min.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedcolumns/3.2.6/css/fixedColumns.dataTables.min.css">
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/fixedcolumns/3.2.6/js/dataTables.fixedColumns.min.js"></script>
    <link href="<?php echo e(asset('inspinia/css/plugins/clockpicker/clockpicker.css')); ?>" rel="stylesheet">




    <style>
        td.details-control {
            background: url('https://datatables.net/examples/resources/details_open.png') no-repeat center center;
            cursor: pointer;
        }
        tr.shown td.details-control {
            background: url('https://datatables.net/examples/resources/details_close.png') no-repeat center center;
        }
    </style>

</head>
<body>
    <div id="wrapper">
        <?php echo $__env->make('template/navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('template/topnavbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('main'); ?>
        
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\recruitment\resources\views/template/index.blade.php ENDPATH**/ ?>
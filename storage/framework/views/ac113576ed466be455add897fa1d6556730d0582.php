<div class="modal inmodal fade" id="Modaltambah" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Tambah Pengajuan Lembur</h4>
            </div>
            <form method="POST" action="<?php echo e(url('/pegawai/lembur/store')); ?>" class="form-horizontal" enctype="multipart/form-data">
            <div class="modal-body">
                <?php echo csrf_field(); ?>
                <?php echo $__env->make('pegawai.lembur.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\recruitment\resources\views/pegawai/lembur/modal_add.blade.php ENDPATH**/ ?>
<div class="modal inmodal fade" id="Modaldelete" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Delete Pelatihan dan Training</h4>
            </div>
            <form method="POST" action="<?php echo e(url('/pegawai/training/delete')); ?>" class="form-horizontal" enctype="multipart/form-data">
            <div class="modal-body">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <h4 class="text-center">Apakah Anda yakin untuk menghapus data?</h4>
                <input type="hidden" name="hnik" id="hnik" value="" />
                <input type="hidden" name="hsdate" id="hsdate" value="" />
                <input type="hidden" name="hedate" id="hedate" value="" />
                <input type="hidden" name="hkode_pelatihan" id="hkode_pelatihan" value="" />
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Delete</button>
            </div>
            </form>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\recruitment\resources\views/pegawai/training/modal_delete.blade.php ENDPATH**/ ?>
<div class="modal inmodal fade" id="Modaledit" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Edit Pelatihan dan Training</h4>
            </div>
            <form method="POST" action="<?php echo e(url('/pegawai/training/update')); ?>" class="form-horizontal" enctype="multipart/form-data">
            <div class="modal-body">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="hnik" id="hnik" value="" />
                <input type="hidden" name="hsdate" id="hsdate" value="" />
                <input type="hidden" name="hedate" id="hedate" value="" />
                <input type="hidden" name="hkode_pelatihan" id="hkode_pelatihan" value="" />
                <div class="form-group"><label class="col-sm-3 control-label">NIK</label>
                  <div class="col-sm-9">
                     <select class="form-control chosen-select-width pilih" name="nik" id="nik" disabled>
                            <?php $__currentLoopData = $md_karyawan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($data->NIK); ?>"><?php echo e($data->NIK); ?> - <?php echo e($data->nama_lengkap); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                  </div>
                </div>
                <div class="form-group row"><label class="col-sm-3 control-label">Tanggal Mulai Pelatihan</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <input type="text" class="form-control date input-sm" name="sdate" id="sdate" value="<?php echo e(\Carbon\Carbon::now()->toDateString()); ?>" disabled>
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-calendar"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="form-group row"><label class="col-sm-3 control-label">Tanggal Akhir Pelatihan</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <input type="text" class="form-control date input-sm" name="edate" id="edate" value="<?php echo e(\Carbon\Carbon::now()->toDateString()); ?>" disabled>
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-calendar"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="form-group"><label class="col-sm-3 control-label">Kode Pelatihan</label>
                  <div class="col-sm-9">
                     <select class="form-control chosen-select-width pilih" name="kode_pelatihan" id="kode_pelatihan" disabled>
                            <?php $__currentLoopData = $st_pelatihan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($data->kode); ?>"><?php echo e($data->kode); ?> - <?php echo e($data->deskripsi); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                  </div>
                </div>
                <div class="form-group"><label class="col-sm-3 control-label">Penyelenggara Pelatihan</label>
                    <div class="col-sm-9"><input type="text" class="form-control" name="vendor_pelatihan" id="vendor_pelatihan"></div>
                </div>
                <div class="form-group"><label class="col-sm-3 control-label">Target Hasil Pelatihan</label>
                    <div class="col-sm-9"><input type="text" class="form-control" name="target_pelatihan" id="target_pelatihan"></div>
                </div>
                <div class="form-group"><label class="col-sm-3 control-label">Realisasi Hasil Pelatihan</label>
                    <div class="col-sm-9"><input type="text" class="form-control" name="realisasi_hasil" id="realisasi_hasil"></div>
                </div>
                <div class="form-group"><label class="col-sm-3 control-label">Nilai Pelatihan</label>
                    <div class="col-sm-9"><input type="number" step="any" class="form-control" name="nilai_pelatihan" id="nilai_pelatihan"></div>
                </div>
                <div class="form-group"><label class="col-sm-3 control-label">Biaya Pelatihan (Rp)</label>
                    <div class="col-sm-9"><input type="number" step="any" class="form-control" name="biaya_pelatihan" id="biaya_pelatihan"></div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\recruitment\resources\views/pegawai/training/modal_edit.blade.php ENDPATH**/ ?>
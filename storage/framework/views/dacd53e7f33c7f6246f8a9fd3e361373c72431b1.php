<div class="modal inmodal fade" id="Modaldetail" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Detail Pengajuan Cuti</h4>
            </div>
            <form method="POST" action="" class="form-horizontal" enctype="multipart/form-data">
            <div class="modal-body">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="id" id="id" value=""/>
                <div class="form-group"><label class="col-sm-3 control-label">Karyawan Id</label>
                  <div class="col-sm-9">
                     <select class="form-control chosen-select-width pilih" name="karyawan_id" id="karyawan_id" readonly>
                            <option value="null" selected disabled>--Karyawan Id--</option>
                             <?php $__currentLoopData = $md_karyawan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($data->users_id); ?>">  <?php echo e($data->NIK); ?> - <?php echo e($data->nama_lengkap); ?></option>
                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                  </div>
                </div>
                <div class="form-group row"><label class="col-sm-3 control-label">Waktu Awal</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <input type="text" class="form-control date input-sm" name="waktu_awal" id="waktu_awal" value="<?php echo e(\Carbon\Carbon::now()->toDateString()); ?>" readonly>
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-calendar"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="form-group row"><label class="col-sm-3 control-label">Waktu Akhir</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <input type="text" class="form-control date input-sm" name="waktu_akhir" id="waktu_akhir" value="<?php echo e(\Carbon\Carbon::now()->toDateString()); ?>" readonly>
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-calendar"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="form-group"><label class="col-sm-3 control-label">Waktu Lembur id</label>
                  <div class="col-sm-9">
                     <select class="form-control chosen-select-width pilih" name="waktu_lembur" id="waktu_lembur" readonly>
                            <option value="null" selected disabled>--Waktu lembur Id--</option>
                             <?php $__currentLoopData = $st_waktu_lembur; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($data->kode); ?>">  <?php echo e($data->kode); ?> - <?php echo e($data->deskripsi); ?></option>
                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                  </div>
                </div>
                <div class="form-group row"><label class="col-sm-3 control-label">Keterangan</label>
                    <div class="col-sm-9"><input type="text" class="form-control" name="keterangan" id="keterangan" readonly></div>
                </div>
                <div class="form-group row"><label class="col-sm-3 control-label">Status</label>
                    <div class="col-sm-9">
                        <select class="form-control chosen-select-width" name="status" id="status" readonly>
                            <option value="null" selected disabled>--status--</option>
                            <option value="0">Belum Lembur</option>
                            <option value="1">Sudah Lembur</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row"><label class="col-sm-3 control-label">Notes</label>
                    <div class="col-sm-9"><textarea class="form-control" rows="3" name="notes" id="notes" readonly></textarea></div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
            </div>
            </form>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\recruitment\resources\views/pegawai/lembur/modal_detail.blade.php ENDPATH**/ ?>
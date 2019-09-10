<?php $__env->startSection('main'); ?>
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Setup Sch Class</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="<?php echo e(url('/dashboard')); ?>">Home</a>
                </li>
                <li class="active">
                    <strong>Setup Sch Class</strong>
                </li>
            </ol>
            
        </div>
    </div>


    <div class="wrapper wrapper-content animated fadeInRight">


        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Sch Class</h5>

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
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal5">Tambah Sch Class</button>
                        </div>
                        <div class="modal inmodal fade" id="myModal5" tabindex="-1" role="dialog"  aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title">Tambah Sch Class</h4>
                                    </div>
                                    <div class="modal-body">
                                      <form method="POST" action="<?php echo e(url('/hrd/setup/schclass/store')); ?>" class="form-horizontal" enctype="multipart/form-data">
                                            <?php echo csrf_field(); ?>
                                            <?php echo $__env->make('hrd.setup.schclass.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
                              <th class="text-center">Kode</th>
                              <th class="text-center">Deskripsi</th>
                              <th class="text-center">Start Time</th>
                              <th class="text-center">End Time</th>
                              <th class="text-center">Mnt Lembur Wajib</th>
                              <th class="text-center">Mnt Lembur SPL</th>
                              <th class="text-center">id Shift Malam</th>
                              <th class="text-center">id lbr wajib</th>
                              <th class="text-center">Tol Jam</th>
                              <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                              <?php
    								$i=1;
    							?>
                              <?php $__currentLoopData = $schclass; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                              <tr>
                                  <td class="text-center"><?php echo e($i); ?></td>
                                  <td><center><?php echo e($u->kode); ?></center></td>
                                  <td><center><?php echo e($u->deskripsi); ?></center></td>
                                  <td><center><?php echo e($u->stime); ?></center></td>
                                  <td><center><?php echo e($u->etime); ?></center></td>
                                  <td><center><?php echo e($u->mnt_lembur_wajib); ?></center></td>
                                  <td><center><?php echo e($u->mnt_lembur_spl); ?></center></td>
                                  <td><center><?php echo e($u->id_shift_malam); ?></center></td>
                                  <td><center><?php echo e($u->id_lbr_wajib); ?></center></td>
                                  <td><center><?php echo e($u->tol_jam); ?></center></td>
                                  <td class="text-center">
                                    <button class="btn btn-default btn-circle"
                                          data-kode="<?php echo e($u->kode); ?>"
                                          data-deskripsi="<?php echo e($u->deskripsi); ?>"
                                          data-stime="<?php echo e($u->stime); ?>"
                                          data-etime="<?php echo e($u->etime); ?>"
                                          data-mntlemburwajib="<?php echo e($u->mnt_lembur_wajib); ?>"
                                          data-mntlemburspl="<?php echo e($u->mnt_lembur_spl); ?>"
                                          data-idshiftmalam="<?php echo e($u->id_shift_malam); ?>"
                                          data-idlbrwajib="<?php echo e($u->id_lbr_wajib); ?>"
                                          data-toljam="<?php echo e($u->tol_jam); ?>"
                                          data-toggle="modal" data-target="#show"><i class="fa fa-eye"></i>
                                    </button>
                                    <button class="btn btn-default btn-circle"
                                          data-kode="<?php echo e($u->kode); ?>"
                                          data-deskripsi="<?php echo e($u->deskripsi); ?>"
                                          data-stime="<?php echo e($u->stime); ?>"
                                          data-etime="<?php echo e($u->etime); ?>"
                                          data-mntlemburwajib="<?php echo e($u->mnt_lembur_wajib); ?>"
                                          data-mntlemburspl="<?php echo e($u->mnt_lembur_spl); ?>"
                                          data-idshiftmalam="<?php echo e($u->id_shift_malam); ?>"
                                          data-idlbrwajib="<?php echo e($u->id_lbr_wajib); ?>"
                                          data-toljam="<?php echo e($u->tol_jam); ?>"
                                          data-toggle="modal" data-target="#edit"><i class="fa fa-pencil-square-o"></i>
                                    </button>
                                    <button class="btn btn-default btn-circle"
                                          data-kode="<?php echo e($u->kode); ?>"
                                          data-deskripsi="<?php echo e($u->deskripsi); ?>"
                                          data-stime="<?php echo e($u->stime); ?>"
                                          data-etime="<?php echo e($u->etime); ?>"
                                          data-mntlemburwajib="<?php echo e($u->mnt_lembur_wajib); ?>"
                                          data-mntlemburspl="<?php echo e($u->mnt_lembur_spl); ?>"
                                          data-idshiftmalam="<?php echo e($u->id_shift_malam); ?>"
                                          data-idlbrwajib="<?php echo e($u->id_lbr_wajib); ?>"
                                          data-toljam="<?php echo e($u->tol_jam); ?>"
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
              <form method="POST" action="<?php echo e(url('/hrd/setup/schclass/delete/{id}')); ?>" class="form-horizontal" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <h4 class="text-center">Apakah Anda yakin untuk menghapus data?</h4>
                 <input type="hidden" name="hkode" id="hkode" value="" />
                  <div class="form-group"><label class="col-sm-4 control-label">Kode</label>
                      <div class="col-sm-8"><input type="text" maxlength="2" class="form-control" name="kode" id="kode" disabled></div>
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
                    <h4 class="modal-title">Show SCH Class</h4>
                </div>
                <div class="modal-body">
                <form method="POST" action="" class="form-horizontal" enctype="multipart/form-data">
                  <input type="hidden" name="hkode" id="hkode" value="" />
                  <div class="form-group"><label class="col-sm-4 control-label">Kode</label>
                      <div class="col-sm-8"><input type="text" maxlength="2" class="form-control" name="kode" id="kode" disabled></div>
                  </div>
                  <div class="form-group"><label class="col-sm-4 control-label">Deskripsi</label>
                      <div class="col-sm-8"><input type="text" maxlength="100" class="form-control" name="deskripsi" id="deskripsi" disabled></div>
                  </div>
                  <div class="form-group"><label class="col-sm-4 control-label">Start Time (format HH:MM:SS)</label>
                        <div class="col-md-2">
                          <select class="form-control chosen-select-width" name="starth" id="starth" disabled>
                              <option value="" selected disabled>hh</option>
                                <?php for($sh=0; $sh<=24; $sh++): ?>
                                  <?php if($sh <= 9): ?>
                                    <?php echo e($sh = "0".$sh); ?>

                                  <?php endif; ?>
                                <option value="<?php echo e($sh); ?>"><?php echo e($sh); ?></option>
                                <?php endfor; ?>
                          </select>
                      </div>
                      <div class="col-md-1">
                          <label>:</label>
                      </div>
                      <div class="col-md-2">
                          <select class="form-control chosen-select-width" name="startm" id="startm" disabled>
                              <option value="" selected disabled>mm</option>
                                <?php for($sm=0; $sm<=60; $sm++): ?>
                                  <?php if($sm <= 9): ?>
                                    <?php echo e($sm = "0".$sm); ?>

                                  <?php endif; ?>
                                <option value="<?php echo e($sm); ?>"><?php echo e($sm); ?></option>
                                <?php endfor; ?>
                          </select>
                      </div>
                      <div class="col-md-1">
                          <label>:</label>
                      </div>
                          <div class="col-md-2">
                          <select class="form-control chosen-select-width" name="starts" id="starts" disabled>
                              <option value="" selected disabled>ss</option>
                                <?php for($ss=0; $ss<=60; $ss++): ?>
                                  <?php if($ss <= 9): ?>
                                    <?php echo e($ss = "0".$ss); ?>

                                  <?php endif; ?>
                                <option value="<?php echo e($ss); ?>"><?php echo e($ss); ?></option>
                                <?php endfor; ?>
                          </select>
                      </div>  
                  </div>
                  <div class="form-group"><label class="col-sm-4 control-label">End Time (format HH:MM:SS)</label>
                            <div class="col-md-2">
                          <select class="form-control chosen-select-width" name="endh" id="endh" disabled>
                              <option value="" selected disabled>hh</option>
                                <?php for($sh=0; $sh<=24; $sh++): ?>
                                  <?php if($sh <= 9): ?>
                                    <?php echo e($sh = "0".$sh); ?>

                                  <?php endif; ?>
                                <option value="<?php echo e($sh); ?>"><?php echo e($sh); ?></option>
                                <?php endfor; ?>
                          </select>
                      </div>
                      <div class="col-md-1">
                          <label>:</label>
                      </div>
                      <div class="col-md-2">
                          <select class="form-control chosen-select-width" name="endm" id="endm" disabled>
                              <option value="" selected disabled>mm</option>
                                <?php for($sm=0; $sm<=60; $sm++): ?>
                                  <?php if($sm <= 9): ?>
                                    <?php echo e($sm = "0".$sm); ?>

                                  <?php endif; ?>
                                <option value="<?php echo e($sm); ?>"><?php echo e($sm); ?></option>
                                <?php endfor; ?>
                          </select>
                      </div>
                      <div class="col-md-1">
                          <label>:</label>
                      </div>
                          <div class="col-md-2">
                          <select class="form-control chosen-select-width" name="ends" id="ends" disabled>
                              <option value="" selected disabled>ss</option>
                                <?php for($ss=0; $ss<=60; $ss++): ?>
                                  <?php if($ss <= 9): ?>
                                    <?php echo e($ss = "0".$ss); ?>

                                  <?php endif; ?>
                                <option value="<?php echo e($ss); ?>"><?php echo e($ss); ?></option>
                                <?php endfor; ?>
                          </select>
                      </div>  
                  </div>
                  <div class="form-group"><label class="col-sm-4 control-label">Minat Lembur Wajib</label>
                    <div class="col-sm-8">
                       <select class="form-control chosen-select-width" name="mnt_lembur_wajib" id="mnt_lembur_wajib" disabled>
                              <option value="null" selected disabled>--minat lembur wajib--</option>
                              <option value="0">0</option>
                              <option value="15">15</option>
                              <option value="30">30</option>
                              <option value="45">45</option>
                              <option value="60">60</option>
                        </select>
                    </div>
                  </div>
                  <div class="form-group"><label class="col-sm-4 control-label">Minat Lembur SPL</label>
                    <div class="col-sm-8">
                       <select class="form-control chosen-select-width" name="mnt_lembur_spl" id="mnt_lembur_spl" disabled>
                              <option value="null" selected disabled>--minat lembur spl--</option>
                              <option value="0">0</option>
                              <option value="15">15</option>
                              <option value="30">30</option>
                              <option value="45">45</option>
                              <option value="60">60</option>
                        </select>
                    </div>
                  </div>
                  <div class="form-group"><label class="col-sm-4 control-label">ID Shift Malam</label>
                    <div class="col-sm-8">
                       <select class="form-control chosen-select-width" name="id_shift_malam" id="id_shift_malam" disabled>
                              <option value="null" selected disabled>--id shift malam--</option>
                              <option value="1">1 - YA</option>
                              <option value="0">0 - Tidak</option>
                        </select>
                    </div>
                  </div>
                  <div class="form-group"><label class="col-sm-4 control-label">ID Lembur Wajib</label>
                    <div class="col-sm-8">
                       <select class="form-control chosen-select-width" name="id_lbr_wajib" id="id_lbr_wajib" disabled>
                              <option value="null" selected disabled>--id lembur wajib--</option>
                              <option value="1">1 - YA</option>
                              <option value="0">0 - Tidak</option>
                        </select>
                    </div>
                  </div>
                  <div class="form-group"><label class="col-sm-4 control-label">Total Jam</label>
                    <div class="col-sm-8">
                       <select class="form-control chosen-select-width" name="tol_jam" id="tol_jam" disabled>
                              <option value="null" selected disabled>--tol jam--</option>
                              <?php for($i=0; $i<=6; $i++): ?>
                              <option value="<?php echo e($i); ?>"><?php echo e($i); ?></option>
                              <?php endfor; ?>
                        </select>
                    </div>
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
                    <h4 class="modal-title">Edit Sch class</h4>
                </div>
                <div class="modal-body">
                <form method="POST" action="<?php echo e(url('/hrd/setup/schclass/update/{id}')); ?>" class="form-horizontal" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="hkode" id="hkode" value="" />
                        <div class="form-group"><label class="col-sm-4 control-label">Kode</label>
                            <div class="col-sm-8"><input type="text" maxlength="2" class="form-control" name="kode" id="kode" disabled></div>
                        </div>
                        <div class="form-group"><label class="col-sm-4 control-label">Deskripsi</label>
                            <div class="col-sm-8"><input type="text" maxlength="100" class="form-control" name="deskripsi" id="deskripsi"></div>
                        </div>
                        <div class="form-group"><label class="col-sm-4 control-label">Start Time (format HH:MM:SS)</label>
                              <div class="col-md-2">
                                <select class="form-control chosen-select-width" name="starth" id="starth">
                                    <option value="" selected disabled>hh</option>
                                      <?php for($sh=0; $sh<=24; $sh++): ?>
                                        <?php if($sh <= 9): ?>
                                          <?php echo e($sh = "0".$sh); ?>

                                        <?php endif; ?>
                                      <option value="<?php echo e($sh); ?>"><?php echo e($sh); ?></option>
                                      <?php endfor; ?>
                                </select>
                            </div>
                            <div class="col-md-1">
                                <label>:</label>
                            </div>
                            <div class="col-md-2">
                                <select class="form-control chosen-select-width" name="startm" id="startm">
                                    <option value="" selected disabled>mm</option>
                                      <?php for($sm=0; $sm<=60; $sm++): ?>
                                        <?php if($sm <= 9): ?>
                                          <?php echo e($sm = "0".$sm); ?>

                                        <?php endif; ?>
                                      <option value="<?php echo e($sm); ?>"><?php echo e($sm); ?></option>
                                      <?php endfor; ?>
                                </select>
                            </div>
                            <div class="col-md-1">
                                <label>:</label>
                            </div>
                                <div class="col-md-2">
                                <select class="form-control chosen-select-width" name="starts" id="starts">
                                    <option value="" selected disabled>ss</option>
                                      <?php for($ss=0; $ss<=60; $ss++): ?>
                                        <?php if($ss <= 9): ?>
                                          <?php echo e($ss = "0".$ss); ?>

                                        <?php endif; ?>
                                      <option value="<?php echo e($ss); ?>"><?php echo e($ss); ?></option>
                                      <?php endfor; ?>
                                </select>
                            </div>  
                        </div>
                        <div class="form-group"><label class="col-sm-4 control-label">End Time (format HH:MM:SS)</label>
                                  <div class="col-md-2">
                                <select class="form-control chosen-select-width" name="endh" id="endh">
                                    <option value="" selected disabled>hh</option>
                                      <?php for($sh=0; $sh<=24; $sh++): ?>
                                        <?php if($sh <= 9): ?>
                                          <?php echo e($sh = "0".$sh); ?>

                                        <?php endif; ?>
                                      <option value="<?php echo e($sh); ?>"><?php echo e($sh); ?></option>
                                      <?php endfor; ?>
                                </select>
                            </div>
                            <div class="col-md-1">
                                <label>:</label>
                            </div>
                            <div class="col-md-2">
                                <select class="form-control chosen-select-width" name="endm" id="endm">
                                    <option value="" selected disabled>mm</option>
                                      <?php for($sm=0; $sm<=60; $sm++): ?>
                                        <?php if($sm <= 9): ?>
                                          <?php echo e($sm = "0".$sm); ?>

                                        <?php endif; ?>
                                      <option value="<?php echo e($sm); ?>"><?php echo e($sm); ?></option>
                                      <?php endfor; ?>
                                </select>
                            </div>
                            <div class="col-md-1">
                                <label>:</label>
                            </div>
                                <div class="col-md-2">
                                <select class="form-control chosen-select-width" name="ends" id="ends">
                                    <option value="" selected disabled>ss</option>
                                      <?php for($ss=0; $ss<=60; $ss++): ?>
                                        <?php if($ss <= 9): ?>
                                          <?php echo e($ss = "0".$ss); ?>

                                        <?php endif; ?>
                                      <option value="<?php echo e($ss); ?>"><?php echo e($ss); ?></option>
                                      <?php endfor; ?>
                                </select>
                            </div>  
                        </div>
                        <div class="form-group"><label class="col-sm-4 control-label">Minat Lembur Wajib</label>
                          <div class="col-sm-8">
                             <select class="form-control chosen-select-width" name="mnt_lembur_wajib" id="mnt_lembur_wajib">
                                    <option value="null" selected disabled>--minat lembur wajib--</option>
                                    <option value="0">0</option>
                                    <option value="15">15</option>
                                    <option value="30">30</option>
                                    <option value="45">45</option>
                                    <option value="60">60</option>
                              </select>
                          </div>
                        </div>
                        <div class="form-group"><label class="col-sm-4 control-label">Minat Lembur SPL</label>
                          <div class="col-sm-8">
                             <select class="form-control chosen-select-width" name="mnt_lembur_spl" id="mnt_lembur_spl">
                                    <option value="null" selected disabled>--minat lembur spl--</option>
                                    <option value="0">0</option>
                                    <option value="15">15</option>
                                    <option value="30">30</option>
                                    <option value="45">45</option>
                                    <option value="60">60</option>
                              </select>
                          </div>
                        </div>
                        <div class="form-group"><label class="col-sm-4 control-label">ID Shift Malam</label>
                          <div class="col-sm-8">
                             <select class="form-control chosen-select-width" name="id_shift_malam" id="id_shift_malam">
                                    <option value="null" selected disabled>--id shift malam--</option>
                                    <option value="1">1 - YA</option>
                                    <option value="0">0 - Tidak</option>
                              </select>
                          </div>
                        </div>
                        <div class="form-group"><label class="col-sm-4 control-label">ID Lembur Wajib</label>
                          <div class="col-sm-8">
                             <select class="form-control chosen-select-width" name="id_lbr_wajib" id="id_lbr_wajib">
                                    <option value="null" selected disabled>--id lembur wajib--</option>
                                    <option value="1">1 - YA</option>
                                    <option value="0">0 - Tidak</option>
                              </select>
                          </div>
                        </div>
                        <div class="form-group"><label class="col-sm-4 control-label">Total Jam</label>
                          <div class="col-sm-8">
                             <select class="form-control chosen-select-width" name="tol_jam" id="tol_jam">
                                    <option value="null" selected disabled>--tol jam--</option>
                                    <?php for($i=0; $i<=6; $i++): ?>
                                    <option value="<?php echo e($i); ?>"><?php echo e($i); ?></option>
                                    <?php endfor; ?>
                              </select>
                          </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update Data</button>
                </div>
                </form>
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

    $('#show').on('show.bs.modal', function (event) {
                        var button = $(event.relatedTarget) // Button that triggered the modal

                        var kode = button.data('kode')
                        var deskripsi = button.data('deskripsi')
                        var stime = button.data('stime')
                        var etime = button.data('etime')
                        var mntlemburwajib = button.data('mntlemburwajib')
                        var mntlemburspl = button.data('mntlemburspl')
                        var idshiftmalam = button.data('idshiftmalam')
                        var idlbrwajib = button.data('idlbrwajib')
                        var toljam = button.data('toljam')

                        var arr1 = stime.split(':');
                        var arr2 = etime.split(':');
                        var modal = $(this)
                        modal.find('.modal-body #kode').val(kode);
                        modal.find('.modal-body #hkode').val(kode);
                        modal.find('.modal-body #deskripsi').val(deskripsi);
                        modal.find('.modal-body #starth').val(arr1[0]);
                        modal.find('.modal-body #startm').val(arr1[1]);
                        modal.find('.modal-body #starts').val(arr1[2]);
                        modal.find('.modal-body #endh').val(arr2[0]);
                        modal.find('.modal-body #endm').val(arr2[1]);
                        modal.find('.modal-body #ends').val(arr2[2]);
                        modal.find('.modal-body #mnt_lembur_wajib').val(mntlemburwajib);
                        modal.find('.modal-body #mnt_lembur_spl').val(mntlemburspl);
                        modal.find('.modal-body #id_shift_malam').val(idshiftmalam);
                        modal.find('.modal-body #id_lbr_wajib').val(idlbrwajib);
                        modal.find('.modal-body #tol_jam').val(toljam);
                    })
    $('#edit').on('show.bs.modal', function (event) {
                        var button = $(event.relatedTarget) // Button that triggered the modal

                        var kode = button.data('kode')
                        var deskripsi = button.data('deskripsi')
                        var stime = button.data('stime')
                        var etime = button.data('etime')
                        var mntlemburwajib = button.data('mntlemburwajib')
                        var mntlemburspl = button.data('mntlemburspl')
                        var idshiftmalam = button.data('idshiftmalam')
                        var idlbrwajib = button.data('idlbrwajib')
                        var toljam = button.data('toljam')

                        var arr1 = stime.split(':');
                        var arr2 = etime.split(':');
                        var modal = $(this)
                        modal.find('.modal-body #kode').val(kode);
                        modal.find('.modal-body #hkode').val(kode);
                        modal.find('.modal-body #deskripsi').val(deskripsi);
                        modal.find('.modal-body #starth').val(arr1[0]);
                        modal.find('.modal-body #startm').val(arr1[1]);
                        modal.find('.modal-body #starts').val(arr1[2]);
                        modal.find('.modal-body #endh').val(arr2[0]);
                        modal.find('.modal-body #endm').val(arr2[1]);
                        modal.find('.modal-body #ends').val(arr2[2]);
                        modal.find('.modal-body #mnt_lembur_wajib').val(mntlemburwajib);
                        modal.find('.modal-body #mnt_lembur_spl').val(mntlemburspl);
                        modal.find('.modal-body #id_shift_malam').val(idshiftmalam);
                        modal.find('.modal-body #id_lbr_wajib').val(idlbrwajib);
                        modal.find('.modal-body #tol_jam').val(toljam);
                    })
    $('#delete').on('show.bs.modal', function (event) {
                        var button = $(event.relatedTarget) // Button that triggered the modal

                        var kode = button.data('kode')
                        var deskripsi = button.data('deskripsi')
                        var stime = button.data('stime')
                        var etime = button.data('etime')
                        var mntlemburwajib = button.data('mntlemburwajib')
                        var mntlemburspl = button.data('mntlemburspl')
                        var idshiftmalam = button.data('idshiftmalam')
                        var idlbrwajib = button.data('idlbrwajib')
                        var toljam = button.data('toljam')

                        var arr1 = stime.split(':');
                        var arr2 = etime.split(':');
                        var modal = $(this)
                        modal.find('.modal-body #kode').val(kode);
                        modal.find('.modal-body #hkode').val(kode);
                        modal.find('.modal-body #deskripsi').val(deskripsi);
                        modal.find('.modal-body #starth').val(arr1[0]);
                        modal.find('.modal-body #startm').val(arr1[1]);
                        modal.find('.modal-body #starts').val(arr1[2]);
                        modal.find('.modal-body #endh').val(arr2[0]);
                        modal.find('.modal-body #endm').val(arr2[1]);
                        modal.find('.modal-body #ends').val(arr2[2]);
                        modal.find('.modal-body #mnt_lembur_wajib').val(mntlemburwajib);
                        modal.find('.modal-body #mnt_lembur_spl').val(mntlemburspl);
                        modal.find('.modal-body #id_shift_malam').val(idshiftmalam);
                        modal.find('.modal-body #id_lbr_wajib').val(idlbrwajib);
                        modal.find('.modal-body #tol_jam').val(toljam);
                    })


</script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\recruitment\resources\views/hrd/setup/schclass/index.blade.php ENDPATH**/ ?>
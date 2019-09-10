<?php $__env->startSection('main'); ?>
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Setup Alasan Absen</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="<?php echo e(url('/dashboard')); ?>">Home</a>
                </li>
                <li class="active">
                    <strong>Setup Alasan Absen</strong>
                </li>
            </ol>
            
        </div>
    </div>


    <div class="wrapper wrapper-content animated fadeInRight">


        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Alasan Absen</h5>

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
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal5">Tambah Alasan Absen</button>
                        </div>
                        <div class="modal inmodal fade" id="myModal5" tabindex="-1" role="dialog"  aria-hidden="true">
                              <div class="modal-dialog modal-lg" style="width:900px">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title">Tambah Alasan Absen</h4>
                                    </div>
                                    <div class="modal-body">
                                      <form method="POST" action="<?php echo e(url('/hrd/setup/alasanabsen/store')); ?>" class="form-horizontal" enctype="multipart/form-data">
                                            <?php echo csrf_field(); ?>
                                            <?php echo $__env->make('hrd.setup.alasanabsen.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
                              <th class="text-center" width="10%">Deskripsi</th>
                              <th class="text-center">Lama Cuti</th>
                              <th class="text-center">Pot Absen</th>
                              <th class="text-center">Pot Bonus</th>
                              <th class="text-center">Kehadiran</th>
                              <th class="text-center">Potongan Premi</th>
                              <th class="text-center">ID Cuti Tahunan</th>
                              <th class="text-center">ID Cuti</th>
                              <th class="text-center">ID Sakit</th>
                              <th class="text-center">ID Ijin</th>
                              <th class="text-center">ID Alpha</th>
                              <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                              <?php
                								$i=1;
                							?>
                              <?php $__currentLoopData = $st_alasan_absen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                              <tr>
                                  <td class="text-center"><?php echo e($i); ?></td>
                                  <td><center><?php echo e($u->kode); ?></td>
                                  <td><center><?php echo e($u->deskripsi); ?></center></td>
                                  <td><center><?php echo e($u->lama_cuti); ?></center></td>
                                  <td><center><?php echo e($u->pot_absen); ?></center></td>
                                  <td><center><?php echo e($u->pot_bonus); ?></center></td>
                                  <td><center><?php echo e($u->id_present); ?></center></td>
                                  <td><center><?php echo e($u->prosen_pot); ?> %</center></td>
                                  <td><center><?php echo e($u->id_cutithn); ?></center></td>
                                  <td><center><?php echo e($u->id_cuti); ?></center></td>
                                  <td><center><?php echo e($u->id_sakit); ?></center></td>
                                  <td><center><?php echo e($u->id_ijin); ?></center></td>
                                  <td><center><?php echo e($u->id_alpha); ?></center></td>
                                  <td class="text-center">
                                    <button class="btn btn-default btn-circle"
                                          data-kode="<?php echo e($u->kode); ?>"
                                          data-deskripsi="<?php echo e($u->deskripsi); ?>"
                                          data-lamacuti="<?php echo e($u->lama_cuti); ?>"
                                          data-potabsen="<?php echo e($u->pot_absen); ?>"
                                          data-potbonus="<?php echo e($u->pot_bonus); ?>"
                                          data-idpresent="<?php echo e($u->id_present); ?>"
                                          data-prosenpot="<?php echo e($u->prosen_pot); ?>"
                                          data-idcutithn="<?php echo e($u->id_cutithn); ?>"
                                          data-idcuti="<?php echo e($u->id_cuti); ?>"
                                          data-idsakit="<?php echo e($u->id_sakit); ?>"
                                          data-idijin="<?php echo e($u->id_ijin); ?>"
                                          data-idalpha="<?php echo e($u->id_alpha); ?>"
                                          data-toggle="modal" data-target="#show"><i class="fa fa-eye"></i>
                                    </button>
                                    <button class="btn btn-default btn-circle"
                                          data-kode="<?php echo e($u->kode); ?>"
                                          data-deskripsi="<?php echo e($u->deskripsi); ?>"
                                          data-lamacuti="<?php echo e($u->lama_cuti); ?>"
                                          data-potabsen="<?php echo e($u->pot_absen); ?>"
                                          data-potbonus="<?php echo e($u->pot_bonus); ?>"
                                          data-idpresent="<?php echo e($u->id_present); ?>"
                                          data-prosenpot="<?php echo e($u->prosen_pot); ?>"
                                          data-idcutithn="<?php echo e($u->id_cutithn); ?>"
                                          data-idcuti="<?php echo e($u->id_cuti); ?>"
                                          data-idsakit="<?php echo e($u->id_sakit); ?>"
                                          data-idijin="<?php echo e($u->id_ijin); ?>"
                                          data-idalpha="<?php echo e($u->id_alpha); ?>"
                                          data-toggle="modal" data-target="#edit"><i class="fa fa-pencil-square-o"></i>
                                    </button>
                                    <button class="btn btn-default btn-circle"
                                          data-kode="<?php echo e($u->kode); ?>"
                                          data-deskripsi="<?php echo e($u->deskripsi); ?>"
                                          data-lamacuti="<?php echo e($u->lama_cuti); ?>"
                                          data-potabsen="<?php echo e($u->pot_absen); ?>"
                                          data-potbonus="<?php echo e($u->pot_bonus); ?>"
                                          data-idpresent="<?php echo e($u->id_present); ?>"
                                          data-prosenpot="<?php echo e($u->prosen_pot); ?>"
                                          data-idcutithn="<?php echo e($u->id_cutithn); ?>"
                                          data-idcuti="<?php echo e($u->id_cuti); ?>"
                                          data-idsakit="<?php echo e($u->id_sakit); ?>"
                                          data-idijin="<?php echo e($u->id_ijin); ?>"
                                          data-idalpha="<?php echo e($u->id_alpha); ?>"
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
              <form method="POST" action="<?php echo e(url('/hrd/setup/alasanabsen/delete/{id}')); ?>" class="form-horizontal" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <h4 class="text-center">Apakah Anda yakin untuk menghapus data?</h4>
                  <input type="hidden" name="hkode" id="hkode" value="" />
                  <div class="form-group"><label class="col-sm-2 control-label">Kode</label>
                      <div class="col-sm-4"><input type="text" maxlength="10" class="form-control" name="kode" id="kode" disabled></div>
                  </div>
                  <div class="form-group"><label class="col-sm-2 control-label">Deskripsi</label>
                       <div class="col-sm-4"><input type="text" maxlength="100" class="form-control" name="deskripsi" id="deskripsi" disabled></div>
                  </div>
                  <div class="form-group"><label class="col-md-2 control-label">Lama Cuti</label>
                    <div class="col-sm-4">
                       <select class="form-control chosen-select-width" name="lama_cuti" id="lama_cuti" disabled>
                              <option value="null" selected disabled>--lama cuti--</option>
                               <?php for($a = 0; $a <= 12; $a++): ?>
                                $a++;
                              <option value="<?php echo e($a); ?>"><?php echo e($a); ?></option>
                               <?php endfor; ?>
                        </select>
                    </div>
                  </div>
                  <div class="form-group"><label class="col-md-2 control-label">ID Cuti Thn</label>
                    <div class="col-sm-4">
                       <select class="form-control chosen-select-width" name="id_cuti_thn" id="id_cutithn" disabled>
                              <option value="null" selected disabled>--id cuti thn--</option>
                              <option value="1">1 - YA</option>
                              <option value="0">0 - Tidak</option>
                        </select>
                    </div>
                  </div>
                  <div class="form-group"><label class="col-md-2 control-label">Potongan Absen</label>
                    <div class="col-sm-4">
                       <select class="form-control chosen-select-width" name="pot_absen" id="pot_absen" disabled>
                              <option value="null" selected disabled>--potongan absen--</option>
                              <option value="1">1 - YA</option>
                              <option value="0">0 - TIDAK</option>
                        </select>
                    </div>
                  </div>
                  <div class="form-group"><label class="col-md-2 control-label">ID Cuti</label>
                    <div class="col-sm-4">
                       <select class="form-control chosen-select-width" name="id_cuti" id="id_cuti" disabled>
                              <option value="null" selected disabled>--id cuti--</option>
                              <option value="1">1 - YA</option>
                              <option value="0">0 - TIDAK</option>
                        </select>
                    </div>
                  </div>
                  <div class="form-group"><label class="col-md-2 control-label">Potongan Bonus</label>
                    <div class="col-sm-4">
                       <select class="form-control chosen-select-width" name="pot_bonus" id="pot_bonus" disabled>
                              <option value="null" selected disabled>--potongan absen--</option>
                              <option value="1">1 - YA</option>
                              <option value="0">0 - TIDAK</option>
                        </select>
                    </div>
                  </div>
                  <div class="form-group"><label class="col-md-2 control-label">ID Sakit</label>
                    <div class="col-sm-4">
                       <select class="form-control chosen-select-width" name="id_sakit" id="id_sakit" disabled>
                              <option value="null" selected disabled>--id sakit--</option>
                              <option value="1">1 - YA</option>
                              <option value="0">0 - TIDAK</option>
                        </select>
                    </div>
                  </div>
                  <div class="form-group"><label class="col-md-2 control-label">Kehadiran</label>
                    <div class="col-sm-4">
                       <select class="form-control chosen-select-width" name="id_present" id="id_present" disabled>
                              <option value="null" selected disabled>--kehadiran--</option>
                              <option value="1">1 - YA</option>
                              <option value="0">0 - TIDAK</option>
                        </select>
                    </div>
                  </div>
                  <div class="form-group"><label class="col-md-2 control-label">ID Ijin</label>
                    <div class="col-sm-4">
                       <select class="form-control chosen-select-width" name="id_ijin" id="id_iji" disabled>
                              <option value="null" selected disabled>--id ijin--</option>
                              <option value="1">1 - YA</option>
                              <option value="0">0 - TIDAK</option>
                        </select>
                    </div>
                  </div>
                  <div class="form-group"><label class="col-md-2 control-label">Potongan Premi %</label>
                    <div class="col-sm-4">
                       <select class="form-control chosen-select-width" name="prosen_pot" id="prosen_pot" disabled>
                              <option value="null" selected disabled>--kehadiran--</option>
                               <?php for($b = 0; $b <= 100; $b++): ?>
                                $b++;
                              <option value="<?php echo e($b); ?>"><?php echo e($b); ?> %</option>
                               <?php endfor; ?>
                        </select>
                    </div>
                  </div>
                  <div class="form-group"><label class="col-md-2 control-label">Id alpha</label>
                    <div class="col-sm-4">
                       <select class="form-control chosen-select-width" name="id_alpha" id="id_alpha" disabled>
                              <option value="null" selected disabled>--id alpha--</option>
                              <option value="1">1 - YA</option>
                              <option value="0">0 - TIDAK</option>
                        </select>
                    </div>
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
                    <h4 class="modal-title">Show Alasan Absen</h4>
                </div>
                <div class="modal-body">
                <form method="POST" action="" class="form-horizontal" enctype="multipart/form-data">
                  <input type="hidden" name="hkode" id="hkode" value="" />
                  <div class="form-group"><label class="col-sm-2 control-label">Kode</label>
                      <div class="col-sm-4"><input type="text" maxlength="10" class="form-control" name="kode" id="kode" disabled></div>
                  </div>
                  <div class="form-group"><label class="col-sm-2 control-label">Deskripsi</label>
                      <div class="col-sm-4"><input type="text" maxlength="100" class="form-control" name="deskripsi" id="deskripsi" disabled></div>
                  </div>
                  <div class="form-group"><label class="col-md-2 control-label">Lama Cuti</label>
                    <div class="col-sm-4">
                       <select class="form-control chosen-select-width" name="lama_cuti" id="lama_cuti" disabled>
                              <option value="null" selected disabled>--lama cuti--</option>
                               <?php for($a = 0; $a <= 12; $a++): ?>
                                $a++;
                              <option value="<?php echo e($a); ?>"><?php echo e($a); ?></option>
                               <?php endfor; ?>
                        </select>
                    </div>
                  </div>
                  <div class="form-group"><label class="col-md-2 control-label">ID Cuti Thn</label>
                    <div class="col-sm-4">
                       <select class="form-control chosen-select-width" name="id_cuti_thn" id="id_cutithn" disabled>
                              <option value="null" selected disabled>--id cuti thn--</option>
                              <option value="1">1 - YA</option>
                              <option value="0">0 - Tidak</option>
                        </select>
                    </div>
                  </div>
                  <div class="form-group"><label class="col-md-2 control-label">Potongan Absen</label>
                    <div class="col-sm-4">
                       <select class="form-control chosen-select-width" name="pot_absen" id="pot_absen" disabled>
                              <option value="null" selected disabled>--potongan absen--</option>
                              <option value="1">1 - YA</option>
                              <option value="0">0 - TIDAK</option>
                        </select>
                    </div>
                  </div>
                  <div class="form-group"><label class="col-md-2 control-label">ID Cuti</label>
                    <div class="col-sm-4">
                       <select class="form-control chosen-select-width" name="id_cuti" id="id_cuti" disabled>
                              <option value="null" selected disabled>--id cuti--</option>
                              <option value="1">1 - YA</option>
                              <option value="0">0 - TIDAK</option>
                        </select>
                    </div>
                  </div>
                  <div class="form-group"><label class="col-md-2 control-label">Potongan Bonus</label>
                    <div class="col-sm-4">
                       <select class="form-control chosen-select-width" name="pot_bonus" id="pot_bonus" disabled>
                              <option value="null" selected disabled>--potongan absen--</option>
                              <option value="1">1 - YA</option>
                              <option value="0">0 - TIDAK</option>
                        </select>
                    </div>
                  </div>
                  <div class="form-group"><label class="col-md-2 control-label">ID Sakit</label>
                    <div class="col-sm-4">
                       <select class="form-control chosen-select-width" name="id_sakit" id="id_sakit" disabled>
                              <option value="null" selected disabled>--id sakit--</option>
                              <option value="1">1 - YA</option>
                              <option value="0">0 - TIDAK</option>
                        </select>
                    </div>
                  </div>
                  <div class="form-group"><label class="col-md-2 control-label">Kehadiran</label>
                    <div class="col-sm-4">
                       <select class="form-control chosen-select-width" name="id_present" id="id_present" disabled>
                              <option value="null" selected disabled>--kehadiran--</option>
                              <option value="1">1 - YA</option>
                              <option value="0">0 - TIDAK</option>
                        </select>
                    </div>
                  </div>
                  <div class="form-group"><label class="col-md-2 control-label">ID Ijin</label>
                    <div class="col-sm-4">
                       <select class="form-control chosen-select-width" name="id_ijin" id="id_iji" disabled>
                              <option value="null" selected disabled>--id ijin--</option>
                              <option value="1">1 - YA</option>
                              <option value="0">0 - TIDAK</option>
                        </select>
                    </div>
                  </div>
                  <div class="form-group"><label class="col-md-2 control-label">Potongan Premi %</label>
                    <div class="col-sm-4">
                       <select class="form-control chosen-select-width" name="prosen_pot" id="prosen_pot" disabled>
                              <option value="null" selected disabled>--kehadiran--</option>
                               <?php for($b = 0; $b <= 100; $b++): ?>
                                $b++;
                              <option value="<?php echo e($b); ?>"><?php echo e($b); ?> %</option>
                               <?php endfor; ?>
                        </select>
                    </div>
                  </div>
                  <div class="form-group"><label class="col-md-2 control-label">Id alpha</label>
                    <div class="col-sm-4">
                       <select class="form-control chosen-select-width" name="id_alpha" id="id_alpha" disabled>
                              <option value="null" selected disabled>--id alpha--</option>
                              <option value="1">1 - YA</option>
                              <option value="0">0 - TIDAK</option>
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
                    <h4 class="modal-title">Edit Alasan Absen</h4>
                </div>
                <div class="modal-body">
                <form method="POST" action="<?php echo e(url('/hrd/setup/alasanabsen/update/{id}')); ?>" class="form-horizontal" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                          <input type="hidden" name="hkode" id="hkode" value="" />
                          <div class="form-group"><label class="col-sm-2 control-label">Kode</label>
                              <div class="col-sm-4"><input type="text" maxlength="10" class="form-control" name="kode" id="kode" disabled></div>
                          </div>
                          <div class="form-group"><label class="col-sm-2 control-label">Deskripsi</label>
                              <div class="col-sm-4"><input type="text" maxlength="100" class="form-control" name="deskripsi" id="deskripsi"></div>
                          </div>
                          <div class="form-group"><label class="col-md-2 control-label">Lama Cuti</label>
                            <div class="col-sm-4">
                               <select class="form-control chosen-select-width" name="lama_cuti" id="lama_cuti">
                                      <option value="null" selected disabled>--lama cuti--</option>
                                       <?php for($a = 0; $a <= 12; $a++): ?>
                                        $a++;
                                      <option value="<?php echo e($a); ?>"><?php echo e($a); ?></option>
                                       <?php endfor; ?>
                                </select>
                            </div>
                          </div>
                          <div class="form-group"><label class="col-md-2 control-label">ID Cuti Thn</label>
                            <div class="col-sm-4">
                               <select class="form-control chosen-select-width" name="id_cutithn" id="id_cutithn">
                                      <option value="null" selected disabled>--id cuti thn--</option>
                                      <option value="1">1 - YA</option>
                                      <option value="0">0 - Tidak</option>
                                </select>
                            </div>
                          </div>
                          <div class="form-group"><label class="col-md-2 control-label">Potongan Absen</label>
                            <div class="col-sm-4">
                               <select class="form-control chosen-select-width" name="pot_absen" id="pot_absen">
                                      <option value="null" selected disabled>--potongan absen--</option>
                                      <option value="1">1 - YA</option>
                                      <option value="0">0 - TIDAK</option>
                                </select>
                            </div>
                          </div>
                          <div class="form-group"><label class="col-md-2 control-label">ID Cuti</label>
                            <div class="col-sm-4">
                               <select class="form-control chosen-select-width" name="id_cuti" id="id_cuti">
                                      <option value="null" selected disabled>--id cuti--</option>
                                      <option value="1">1 - YA</option>
                                      <option value="0">0 - TIDAK</option>
                                </select>
                            </div>
                          </div>
                          <div class="form-group"><label class="col-md-2 control-label">Potongan Bonus</label>
                            <div class="col-sm-4">
                               <select class="form-control chosen-select-width" name="pot_bonus" id="pot_bonus">
                                      <option value="null" selected disabled>--potongan absen--</option>
                                      <option value="1">1 - YA</option>
                                      <option value="0">0 - TIDAK</option>
                                </select>
                            </div>
                          </div>
                          <div class="form-group"><label class="col-md-2 control-label">ID Sakit</label>
                            <div class="col-sm-4">
                               <select class="form-control chosen-select-width" name="id_sakit" id="id_sakit">
                                      <option value="null" selected disabled>--id sakit--</option>
                                      <option value="1">1 - YA</option>
                                      <option value="0">0 - TIDAK</option>
                                </select>
                            </div>
                          </div>
                          <div class="form-group"><label class="col-md-2 control-label">Kehadiran</label>
                            <div class="col-sm-4">
                               <select class="form-control chosen-select-width" name="id_present" id="id_present">
                                      <option value="null" selected disabled>--kehadiran--</option>
                                      <option value="1">1 - YA</option>
                                      <option value="0">0 - TIDAK</option>
                                </select>
                            </div>
                          </div>
                          <div class="form-group"><label class="col-md-2 control-label">ID Ijin</label>
                            <div class="col-sm-4">
                               <select class="form-control chosen-select-width" name="id_ijin" id="id_ijin">
                                      <option value="null" selected disabled>--id ijin--</option>
                                      <option value="1">1 - YA</option>
                                      <option value="0">0 - TIDAK</option>
                                </select>
                            </div>
                          </div>
                          <div class="form-group"><label class="col-md-2 control-label">Potongan Premi %</label>
                            <div class="col-sm-4">
                               <select class="form-control chosen-select-width" name="prosen_pot" id="prosen_pot">
                                      <option value="null" selected disabled>--kehadiran--</option>
                                       <?php for($b = 0; $b <= 100; $b++): ?>
                                        $b++;
                                      <option value="<?php echo e($b); ?>"><?php echo e($b); ?> %</option>
                                       <?php endfor; ?>
                                </select>
                            </div>
                          </div>
                          <div class="form-group"><label class="col-md-2 control-label">Id alpha</label>
                            <div class="col-sm-4">
                               <select class="form-control chosen-select-width" name="id_alpha" id="id_alpha">
                                      <option value="null" selected disabled>--id alpha--</option>
                                      <option value="1">1 - YA</option>
                                      <option value="0">0 - TIDAK</option>
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
                        var lamacuti = button.data('lamacuti')
                        var potabsen = button.data('potabsen')
                        var potbonus = button.data('potbonus')
                        var idpresent = button.data('idpresent')
                        var prosenpot = button.data('prosenpot')
                        var idcutithn = button.data('idcutithn')
                        var idcuti = button.data('idcuti')
                        var idsakit = button.data('idsakit')
                        var idijin = button.data('idijin')
                        var idalpha = button.data('idalpha')

                        var modal = $(this)
                        modal.find('.modal-body #kode').val(kode);
                        modal.find('.modal-body #hkode').val(kode);
                        modal.find('.modal-body #deskripsi').val(deskripsi);
                        modal.find('.modal-body #lama_cuti').val(lamacuti);
                        modal.find('.modal-body #pot_absen').val(potabsen);
                        modal.find('.modal-body #pot_bonus').val(potbonus);
                        modal.find('.modal-body #id_present').val(idpresent);
                        modal.find('.modal-body #prosen_pot').val(prosenpot);
                        modal.find('.modal-body #id_cutithn').val(idcutithn);
                        modal.find('.modal-body #id_cuti').val(idcuti);
                        modal.find('.modal-body #id_sakit').val(idsakit);
                        modal.find('.modal-body #id_ijin').val(idijin);
                        modal.find('.modal-body #id_alpha').val(idalpha);
                    })
    $('#edit').on('show.bs.modal', function (event) {
                        var button = $(event.relatedTarget) // Button that triggered the modal

                        var kode = button.data('kode')
                        var deskripsi = button.data('deskripsi')
                        var lamacuti = button.data('lamacuti')
                        var potabsen = button.data('potabsen')
                        var potbonus = button.data('potbonus')
                        var idpresent = button.data('idpresent')
                        var prosenpot = button.data('prosenpot')
                        var idcutithn = button.data('idcutithn')
                        var idcuti = button.data('idcuti')
                        var idsakit = button.data('idsakit')
                        var idijin = button.data('idijin')
                        var idalpha = button.data('idalpha')

                        var modal = $(this)
                        modal.find('.modal-body #kode').val(kode);
                        modal.find('.modal-body #hkode').val(kode);
                        modal.find('.modal-body #deskripsi').val(deskripsi);
                        modal.find('.modal-body #lama_cuti').val(lamacuti);
                        modal.find('.modal-body #pot_absen').val(potabsen);
                        modal.find('.modal-body #pot_bonus').val(potbonus);
                        modal.find('.modal-body #id_present').val(idpresent);
                        modal.find('.modal-body #prosen_pot').val(prosenpot);
                        modal.find('.modal-body #id_cutithn').val(idcutithn);
                        modal.find('.modal-body #id_cuti').val(idcuti);
                        modal.find('.modal-body #id_sakit').val(idsakit);
                        modal.find('.modal-body #id_ijin').val(idijin);
                        modal.find('.modal-body #id_alpha').val(idalpha);
                    })
    $('#delete').on('show.bs.modal', function (event) {
                        var button = $(event.relatedTarget) // Button that triggered the modal

                        var kode = button.data('kode')
                        var deskripsi = button.data('deskripsi')
                        var lamacuti = button.data('lamacuti')
                        var potabsen = button.data('potabsen')
                        var potbonus = button.data('potbonus')
                        var idpresent = button.data('idpresent')
                        var prosenpot = button.data('prosenpot')
                        var idcutithn = button.data('idcutithn')
                        var idcuti = button.data('idcuti')
                        var idsakit = button.data('idsakit')
                        var idijin = button.data('idijin')
                        var idalpha = button.data('idalpha')

                        var modal = $(this)
                        modal.find('.modal-body #kode').val(kode);
                        modal.find('.modal-body #hkode').val(kode);
                        modal.find('.modal-body #deskripsi').val(deskripsi);
                        modal.find('.modal-body #lama_cuti').val(lamacuti);
                        modal.find('.modal-body #pot_absen').val(potabsen);
                        modal.find('.modal-body #pot_bonus').val(potbonus);
                        modal.find('.modal-body #id_present').val(idpresent);
                        modal.find('.modal-body #prosen_pot').val(prosenpot);
                        modal.find('.modal-body #id_cutithn').val(idcutithn);
                        modal.find('.modal-body #id_cuti').val(idcuti);
                        modal.find('.modal-body #id_sakit').val(idsakit);
                        modal.find('.modal-body #id_ijin').val(idijin);
                        modal.find('.modal-body #id_alpha').val(idalpha);
                    })


</script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\recruitment\resources\views/hrd/setup/alasanabsen/index.blade.php ENDPATH**/ ?>
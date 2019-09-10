<?php $__env->startSection('main'); ?>
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Setup BPJS</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="<?php echo e(url('/dashboard')); ?>">Home</a>
                </li>
                <li class="active">
                    <strong>Setup BPJS</strong>
                </li>
            </ol>

        </div>
    </div>


    <div class="wrapper wrapper-content animated fadeInRight">


        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>BPJS</h5>

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
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal5">Tambah BPJS</button>
                        </div>
                        <div class="modal inmodal fade" id="myModal5" tabindex="-1" role="dialog"  aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title">Tambah Tunjangan Makan</h4>
                                    </div>
                                    <div class="modal-body">
                                      <form method="POST" action="<?php echo e(url('/hrd/setup/bpjs/store')); ?>" class="form-horizontal" enctype="multipart/form-data">
                                            <?php echo csrf_field(); ?>
                                            <?php echo $__env->make('hrd.setup.bpjs.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
                              <th class="text-center">Kode BPJS</th>
                              <th class="text-center">Deskripsi</th>
                              <th class="text-center">Prosen Potongan</th>
                              <th class="text-center">Prosen Pend PPH</th>
                              <th class="text-center">JHT</th>
                              <th class="text-center">JKK</th>
                              <th class="text-center">JKM</th>
                              <th class="text-center">JP</th>
                              <th class="text-center">BPJS Kes</th>
                              <th class="text-center">JHT PRSHN</th>
                              <th class="text-center">JKK PRSHN</th>
                              <th class="text-center">JKM PRSHN</th>
                              <th class="text-center">JP PRSHN</th>
                              <th class="text-center">BPJS Kes PRSHN</th>
                              <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                              <?php
    								$i=1;
    							?>
                              <?php $__currentLoopData = $st_pot_bpjs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                              <tr>
                                  <td class="text-center"><?php echo e($i); ?></td>
                                  <td><?php echo e($u->kode_bpjs); ?></td>
                                  <td><?php echo e($u->deskripsi); ?></td>
                                  <td><?php echo e($u->prosen_potongan); ?></td>
                                  <td><?php echo e($u->prosen_pend_pph); ?></td>
                                  <td><?php echo e($u->id_jht); ?></td>
                                  <td><?php echo e($u->id_jkk); ?></td>
                                  <td><?php echo e($u->id_jkm); ?></td>
                                  <td><?php echo e($u->id_jp); ?></td>
                                  <td><?php echo e($u->id_bpjs_kes); ?></td>
                                  <td><?php echo e($u->id_jht_prshn); ?></td>
                                  <td><?php echo e($u->id_jkk_prshn); ?></td>
                                  <td><?php echo e($u->id_jkm_prshn); ?></td>
                                  <td><?php echo e($u->id_jp_prshn); ?></td>
                                  <td><?php echo e($u->id_bpjs_kes_prshn); ?></td>

                                  <td class="text-center">
                                    <button class="btn btn-default btn-circle"
                                          data-kodebpjs="<?php echo e($u->kode_bpjs); ?>"
                                          data-deskripsi="<?php echo e($u->deskripsi); ?>"
                                          data-prosenpotongan="<?php echo e($u->prosen_potongan); ?>"
                                          data-prosenpendpph="<?php echo e($u->prosen_pend_pph); ?>"
                                          data-idjht="<?php echo e($u->id_jht); ?>"
                                          data-idjkk="<?php echo e($u->id_jkk); ?>"
                                          data-idjkm="<?php echo e($u->id_jkm); ?>"
                                          data-idjp="<?php echo e($u->id_jp); ?>"
                                          data-idbpjskes="<?php echo e($u->id_bpjs_kes); ?>"
                                          data-idjhtprshn="<?php echo e($u->id_jht_prshn); ?>"
                                          data-idjkkprshn="<?php echo e($u->id_jkk_prshn); ?>"
                                          data-idjkmprshn="<?php echo e($u->id_jkm_prshn); ?>"
                                          data-idjpprshn="<?php echo e($u->id_jp_prshn); ?>"
                                          data-idbpjskesprshn="<?php echo e($u->id_bpjs_kes_prshn); ?>"
                                          data-toggle="modal" data-target="#show"><i class="fa fa-eye"></i>
                                    </button>
                                    <button class="btn btn-default btn-circle"
                                          data-kodebpjs="<?php echo e($u->kode_bpjs); ?>"
                                          data-deskripsi="<?php echo e($u->deskripsi); ?>"
                                          data-prosenpotongan="<?php echo e($u->prosen_potongan); ?>"
                                          data-prosenpendpph="<?php echo e($u->prosen_pend_pph); ?>"
                                          data-idjht="<?php echo e($u->id_jht); ?>"
                                          data-idjkk="<?php echo e($u->id_jkk); ?>"
                                          data-idjkm="<?php echo e($u->id_jkm); ?>"
                                          data-idjp="<?php echo e($u->id_jp); ?>"
                                          data-idbpjskes="<?php echo e($u->id_bpjs_kes); ?>"
                                          data-idjhtprshn="<?php echo e($u->id_jht_prshn); ?>"
                                          data-idjkkprshn="<?php echo e($u->id_jkk_prshn); ?>"
                                          data-idjkmprshn="<?php echo e($u->id_jkm_prshn); ?>"
                                          data-idjpprshn="<?php echo e($u->id_jp_prshn); ?>"
                                          data-idbpjskesprshn="<?php echo e($u->id_bpjs_kes_prshn); ?>"
                                          data-toggle="modal" data-target="#edit"><i class="fa fa-pencil-square-o"></i>
                                    </button>
                                    <button class="btn btn-default btn-circle"
                                          data-kodebpjs="<?php echo e($u->kode_bpjs); ?>"
                                          data-deskripsi="<?php echo e($u->deskripsi); ?>"
                                          data-prosenpotongan="<?php echo e($u->prosen_potongan); ?>"
                                          data-prosenpendpph="<?php echo e($u->prosen_pend_pph); ?>"
                                          data-idjht="<?php echo e($u->id_jht); ?>"
                                          data-idjkk="<?php echo e($u->id_jkk); ?>"
                                          data-idjkm="<?php echo e($u->id_jkm); ?>"
                                          data-idjp="<?php echo e($u->id_jp); ?>"
                                          data-idbpjskes="<?php echo e($u->id_bpjs_kes); ?>"
                                          data-idjhtprshn="<?php echo e($u->id_jht_prshn); ?>"
                                          data-idjkkprshn="<?php echo e($u->id_jkk_prshn); ?>"
                                          data-idjkmprshn="<?php echo e($u->id_jkm_prshn); ?>"
                                          data-idjpprshn="<?php echo e($u->id_jp_prshn); ?>"
                                          data-idbpjskesprshn="<?php echo e($u->id_bpjs_kes_prshn); ?>"
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
              <form method="POST" action="<?php echo e(url('/hrd/setup/bpjs/delete/{id}')); ?>" class="form-horizontal" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <h4 class="text-center">Apakah Anda yakin untuk menghapus data?</h4>
                  <input type="hidden" name="hkode_bpjs" id="hkode_bpjs" value="" />
                  <div class="form-group"><label class="col-sm-4 control-label">Kode Bpjs</label>
                      <div class="col-sm-8"><input type="text" class="form-control" name="kode_bpjs" id="kode_bpjs" disabled></div>
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
                    <h4 class="modal-title">Show BPJS</h4>
                </div>
                <div class="modal-body">
                <form method="POST" action="" class="form-horizontal" enctype="multipart/form-data">
                  <input type="hidden" name="hkode_bpjs" id="hkode_bpjs" value="" />
                  <div class="form-group"><label class="col-sm-4 control-label">Kode Bpjs</label>
                      <div class="col-sm-8"><input type="text" class="form-control" name="kode_bpjs" id="kode_bpjs" disabled></div>
                  </div>
                  <div class="form-group"><label class="col-sm-4 control-label">Deskripsi</label>
                      <div class="col-sm-8"><input type="text" class="form-control" name="deskripsi" id="deskripsi" disabled></div>
                  </div>
                  <div class="form-group"><label class="col-sm-4 control-label">Prosen Potongan</label>
                      <div class="col-sm-8"><input type="number" class="form-control" name="prosen_potongan" id="prosen_potongan" disabled></div>
                  </div>
                  <div class="form-group"><label class="col-sm-4 control-label">Prosen Pend PPH</label>
                      <div class="col-sm-8"><input type="number" class="form-control" name="prosen_pend_pph" id="prosen_pend_pph" disabled></div>
                  </div>
                  <div class="form-group"><label class="col-sm-4 control-label">JHT</label>
                    <div class="col-sm-8">
                       <select class="form-control chosen-select-width" name="id_jht" id="id_jht" disabled>
                              <option value="1">YA</option>
                              <option value="0">TIDAK</option>
                        </select>
                    </div>
                  </div>
                  <div class="form-group"><label class="col-sm-4 control-label">JKK</label>
                    <div class="col-sm-8">
                       <select class="form-control chosen-select-width" name="id_jkk" id="id_jkk" disabled>
                              <option value="1">YA</option>
                              <option value="0">TIDAK</option>
                        </select>
                    </div>
                  </div>
                  <div class="form-group"><label class="col-sm-4 control-label">JKM</label>
                    <div class="col-sm-8">
                       <select class="form-control chosen-select-width" name="id_jkm" id="id_jkm" disabled>
                              <option value="1">YA</option>
                              <option value="0">TIDAK</option>
                        </select>
                    </div>
                  </div>
                  <div class="form-group"><label class="col-sm-4 control-label">JP</label>
                    <div class="col-sm-8">
                       <select class="form-control chosen-select-width" name="id_jp" id="id_jp" disabled>
                              <option value="1">YA</option>
                              <option value="0">TIDAK</option>
                        </select>
                    </div>
                  </div>
                  <div class="form-group"><label class="col-sm-4 control-label">BPJS Kes</label>
                    <div class="col-sm-8">
                       <select class="form-control chosen-select-width" name="id_bpjs_kes" id="id_jht" disabled>
                              <option value="1">YA</option>
                              <option value="0">TIDAK</option>
                        </select>
                    </div>
                  </div>
                  <div class="form-group"><label class="col-sm-4 control-label">JHT PRSHN</label>
                    <div class="col-sm-8">
                       <select class="form-control chosen-select-width" name="id_jht_prshn" id="id_jht_prshn" disabled>
                              <option value="1">YA</option>
                              <option value="0">TIDAK</option>
                        </select>
                    </div>
                  </div>
                  <div class="form-group"><label class="col-sm-4 control-label">JKK PRSHN</label>
                    <div class="col-sm-8">
                       <select class="form-control chosen-select-width" name="id_jkk_prshn" id="id_jkk_prshn" disabled>
                              <option value="1">YA</option>
                              <option value="0">TIDAK</option>
                        </select>
                    </div>
                  </div>
                  <div class="form-group"><label class="col-sm-4 control-label">JKM PRSHN</label>
                    <div class="col-sm-8">
                       <select class="form-control chosen-select-width" name="id_jkm_prshn" id="id_jkm_prshn" disabled>
                              <option value="1">YA</option>
                              <option value="0">TIDAK</option>
                        </select>
                    </div>
                  </div>
                  <div class="form-group"><label class="col-sm-4 control-label">JP PRSHN</label>
                    <div class="col-sm-8">
                       <select class="form-control chosen-select-width" name="id_jp_prshn" id="id_jp_prshn" disabled>
                              <option value="1">YA</option>
                              <option value="0">TIDAK</option>
                        </select>
                    </div>
                  </div>
                  <div class="form-group"><label class="col-sm-4 control-label">BPJS Kes PRSHN</label>
                    <div class="col-sm-8">
                       <select class="form-control chosen-select-width" name="id_bpjs_kes_prshn" id="id_bpjs_kes_prshn" disabled>
                              <option value="1">YA</option>
                              <option value="0">TIDAK</option>
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
                    <h4 class="modal-title">Edit BPJS</h4>
                </div>
                <div class="modal-body">
                <form method="POST" action="<?php echo e(url('/hrd/setup/bpjs/update/{id}')); ?>" class="form-horizontal" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="hkode_bpjs" id="hkode_bpjs" value="" />
                        <div class="form-group"><label class="col-sm-4 control-label">Kode Bpjs</label>
                            <div class="col-sm-8"><input type="text" class="form-control" name="kode_bpjs" id="kode_bpjs" disabled></div>
                        </div>
                        <div class="form-group"><label class="col-sm-4 control-label">Deskripsi</label>
                            <div class="col-sm-8"><input type="text" class="form-control" name="deskripsi" id="deskripsi"></div>
                        </div>
                        <div class="form-group"><label class="col-sm-4 control-label">Prosen Potongan</label>
                            <div class="col-sm-8"><input type="text" class="form-control" name="prosen_potongan" id="prosen_potongan"></div>
                        </div>
                        <div class="form-group"><label class="col-sm-4 control-label">Prosen Pend PPH</label>
                            <div class="col-sm-8"><input type="text" class="form-control" name="prosen_pend_pph" id="prosen_pend_pph"></div>
                        </div>
                        <div class="form-group"><label class="col-sm-4 control-label">JHT</label>
                          <div class="col-sm-8">
                             <select class="form-control chosen-select-width" name="id_jht" id="id_jht">
                                    <option value="1">YA</option>
                                    <option value="0">TIDAK</option>
                              </select>
                          </div>
                        </div>
                        <div class="form-group"><label class="col-sm-4 control-label">JKK</label>
                          <div class="col-sm-8">
                             <select class="form-control chosen-select-width" name="id_jkk" id="id_jkk">
                                    <option value="1">YA</option>
                                    <option value="0">TIDAK</option>
                              </select>
                          </div>
                        </div>
                        <div class="form-group"><label class="col-sm-4 control-label">JKM</label>
                          <div class="col-sm-8">
                             <select class="form-control chosen-select-width" name="id_jkm" id="id_jkm">
                                    <option value="1">YA</option>
                                    <option value="0">TIDAK</option>
                              </select>
                          </div>
                        </div>
                        <div class="form-group"><label class="col-sm-4 control-label">JP</label>
                          <div class="col-sm-8">
                             <select class="form-control chosen-select-width" name="id_jp" id="id_jp">
                                    <option value="1">YA</option>
                                    <option value="0">TIDAK</option>
                              </select>
                          </div>
                        </div>
                        <div class="form-group"><label class="col-sm-4 control-label">BPJS Kes</label>
                          <div class="col-sm-8">
                             <select class="form-control chosen-select-width" name="id_bpjs_kes" id="id_jht">
                                    <option value="1">YA</option>
                                    <option value="0">TIDAK</option>
                              </select>
                          </div>
                        </div>
                        <div class="form-group"><label class="col-sm-4 control-label">JHT PRSHN</label>
                          <div class="col-sm-8">
                             <select class="form-control chosen-select-width" name="id_jht_prshn" id="id_jht_prshn">
                                    <option value="1">YA</option>
                                    <option value="0">TIDAK</option>
                              </select>
                          </div>
                        </div>
                        <div class="form-group"><label class="col-sm-4 control-label">JKK PRSHN</label>
                          <div class="col-sm-8">
                             <select class="form-control chosen-select-width" name="id_jkk_prshn" id="id_jkk_prshn">
                                    <option value="1">YA</option>
                                    <option value="0">TIDAK</option>
                              </select>
                          </div>
                        </div>
                        <div class="form-group"><label class="col-sm-4 control-label">JKM PRSHN</label>
                          <div class="col-sm-8">
                             <select class="form-control chosen-select-width" name="id_jkm_prshn" id="id_jkm_prshn">
                                    <option value="1">YA</option>
                                    <option value="0">TIDAK</option>
                              </select>
                          </div>
                        </div>
                        <div class="form-group"><label class="col-sm-4 control-label">JP PRSHN</label>
                          <div class="col-sm-8">
                             <select class="form-control chosen-select-width" name="id_jp_prshn" id="id_jp_prshn">
                                    <option value="1">YA</option>
                                    <option value="0">TIDAK</option>
                              </select>
                          </div>
                        </div>
                        <div class="form-group"><label class="col-sm-4 control-label">BPJS Kes PRSHN</label>
                          <div class="col-sm-8">
                             <select class="form-control chosen-select-width" name="id_bpjs_kes_prshn" id="id_bpjs_kes_prshn">
                                    <option value="1">YA</option>
                                    <option value="0">TIDAK</option>
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

                        var kodebpjs = button.data('kodebpjs')
                        var deskripsi = button.data('deskripsi')
                        var prosenpotongan = button.data('prosenpotongan')
                        var prosenpendpph = button.data('prosenpendpph')
                        var idjht = button.data('idjht')
                        var idjkk = button.data('idjkk')
                        var idjkm = button.data('idjkm')
                        var idjp = button.data('idjp')
                        var idbpjskes = button.data('idbpjskes')
                        var idjhtprshn = button.data('idjhtprshn')
                        var idjkkprshn = button.data('idjkkprshn')
                        var idjkmprshn = button.data('idjkmprshn')
                        var idjpprshn = button.data('idjpprshn')
                        var idbpjskesprshn = button.data('idbpjskesprshn')

                        var modal = $(this)
                        modal.find('.modal-body #kode_bpjs').val(kodebpjs);
                        modal.find('.modal-body #hkode_bpjs').val(kodebpjs);
                        modal.find('.modal-body #deskripsi').val(deskripsi);
                        modal.find('.modal-body #prosen_potongan').val(prosenpotongan);
                        modal.find('.modal-body #prosen_pend_pph').val(prosenpendpph);
                        modal.find('.modal-body #id_jht').val(idjht);
                        modal.find('.modal-body #id_jkk').val(idjkk);
                        modal.find('.modal-body #id_jkm').val(idjkm);
                        modal.find('.modal-body #id_jp').val(idjp);
                        modal.find('.modal-body #id_bpjs_kes').val(idbpjskes);
                        modal.find('.modal-body #id_jht_prshn').val(idjhtprshn);
                        modal.find('.modal-body #id_jkk_prshn').val(idjkkprshn);
                        modal.find('.modal-body #id_jkm_prshn').val(idjkmprshn);
                        modal.find('.modal-body #id_jp_prshn').val(idjpprshn);
                        modal.find('.modal-body #id_bpjs_kes_prshn').val(idbpjskesprshn);
                    })
    $('#edit').on('show.bs.modal', function (event) {
                        var button = $(event.relatedTarget) // Button that triggered the modal

                        var kodebpjs = button.data('kodebpjs')
                        var deskripsi = button.data('deskripsi')
                        var prosenpotongan = button.data('prosenpotongan')
                        var prosenpendpph = button.data('prosenpendpph')
                        var idjht = button.data('idjht')
                        var idjkk = button.data('idjkk')
                        var idjkm = button.data('idjkm')
                        var idjp = button.data('idjp')
                        var idbpjskes = button.data('idbpjskes')
                        var idjhtprshn = button.data('idjhtprshn')
                        var idjkkprshn = button.data('idjkkprshn')
                        var idjkmprshn = button.data('idjkmprshn')
                        var idjpprshn = button.data('idjpprshn')
                        var idbpjskesprshn = button.data('idbpjskesprshn')

                        var modal = $(this)
                        modal.find('.modal-body #kode_bpjs').val(kodebpjs);
                        modal.find('.modal-body #hkode_bpjs').val(kodebpjs);
                        modal.find('.modal-body #deskripsi').val(deskripsi);
                        modal.find('.modal-body #prosen_potongan').val(prosenpotongan);
                        modal.find('.modal-body #prosen_pend_pph').val(prosenpendpph);
                        modal.find('.modal-body #id_jht').val(idjht);
                        modal.find('.modal-body #id_jkk').val(idjkk);
                        modal.find('.modal-body #id_jkm').val(idjkm);
                        modal.find('.modal-body #id_jp').val(idjp);
                        modal.find('.modal-body #id_bpjs_kes').val(idbpjskes);
                        modal.find('.modal-body #id_jht_prshn').val(idjhtprshn);
                        modal.find('.modal-body #id_jkk_prshn').val(idjkkprshn);
                        modal.find('.modal-body #id_jkm_prshn').val(idjkmprshn);
                        modal.find('.modal-body #id_jp_prshn').val(idjpprshn);
                        modal.find('.modal-body #id_bpjs_kes_prshn').val(idbpjskesprshn);
                    })
    $('#delete').on('show.bs.modal', function (event) {
                        var button = $(event.relatedTarget) // Button that triggered the modal

                        var kodebpjs = button.data('kodebpjs')
                        var deskripsi = button.data('deskripsi')
                        var prosenpotongan = button.data('prosenpotongan')
                        var prosenpendpph = button.data('prosenpendpph')
                        var idjht = button.data('idjht')
                        var idjkk = button.data('idjkk')
                        var idjkm = button.data('idjkm')
                        var idjp = button.data('idjp')
                        var idbpjskes = button.data('idbpjskes')
                        var idjhtprshn = button.data('idjhtprshn')
                        var idjkkprshn = button.data('idjkkprshn')
                        var idjkmprshn = button.data('idjkmprshn')
                        var idjpprshn = button.data('idjpprshn')
                        var idbpjskesprshn = button.data('idbpjskesprshn')

                        var modal = $(this)
                        modal.find('.modal-body #kode_bpjs').val(kodebpjs);
                        modal.find('.modal-body #hkode_bpjs').val(kodebpjs);
                        modal.find('.modal-body #deskripsi').val(deskripsi);
                        modal.find('.modal-body #prosen_potongan').val(prosenpotongan);
                        modal.find('.modal-body #prosen_pend_pph').val(prosenpendpph);
                        modal.find('.modal-body #id_jht').val(idjht);
                        modal.find('.modal-body #id_jkk').val(idjkk);
                        modal.find('.modal-body #id_jkm').val(idjkm);
                        modal.find('.modal-body #id_jp').val(idjp);
                        modal.find('.modal-body #id_bpjs_kes').val(idbpjskes);
                        modal.find('.modal-body #id_jht_prshn').val(idjhtprshn);
                        modal.find('.modal-body #id_jkk_prshn').val(idjkkprshn);
                        modal.find('.modal-body #id_jkm_prshn').val(idjkmprshn);
                        modal.find('.modal-body #id_jp_prshn').val(idjpprshn);
                        modal.find('.modal-body #id_bpjs_kes_prshn').val(idbpjskesprshn);
                    })


</script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\recruitment\resources\views/hrd/setup/bpjs/index.blade.php ENDPATH**/ ?>
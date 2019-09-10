<?php $__env->startSection('main'); ?>
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Slip Gaji</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="<?php echo e(url('/dashboard')); ?>">Home</a>
                </li>
                <li class="active">
                    <strong>Slip Gaji</strong>
                </li>
            </ol>

        </div>
    </div>


    <div class="wrapper wrapper-content animated fadeInRight">


      <div class="row">
          <div class="col-lg-12">
              <div class="wrapper wrapper-content animated fadeInRight">
                  <div class="ibox-content p-xl">
                          <div class="row">
                              <div class="col-sm-6">
                                  <h5>Dari:</h5>
                                  <address>
                                      <strong>PT. Selaras Mitra Integra</strong><br>
                                      Jalan Ketintang Madya no 80 Surabaya<br>
                                      hrd@selarasmitraintegra.com<br>
                                      031 - 828573<br>
                                  </address>
                              </div>

                              <div class="col-sm-6 text-right">
                                  <h4>No. Slip Gaji</h4>
                                  <h4 class="text-navy">INV-000567F7-00</h4>
                                  <span>Kepada:</span>
                                  <address>
                                      <strong>Andi Kurnia</strong><br>
                                      PT. Semangat Baru<br>
                                  </address>
                              </div>
                          </div>

                          <div class="row">
                          <div class="col-sm-6">
                          <div class="table-responsive m-t">
                              <table class="table invoice-table">
                                  <thead>
                                    <th>Penerimaan</th>
                                    <th></th>
                                  </thead>
                                  <thead>
                                  <tr>
                                      <th>Deskripsi</th>
                                      <th>Nilai</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                  <tr>
                                      <td>Gaji Pokok</td>
                                      <td>2.750.000</td>
                                  </tr>
                                  <tr>
                                      <td>Tunjangan Makan</td>
                                      <td>500.000</td>
                                  </tr>
                                  <tr>
                                      <td>Tunjangan Transport</td>
                                      <td>500.000</td>
                                  </tr>
                                  <tr>
                                      <td>Tunjangan Kinerja Pegawai</td>
                                      <td>750.000</td>
                                  </tr>
                                  </tbody>
                              </table>
                          </div><!-- /table-responsive -->

                          <table class="table invoice-total">
                              <tbody>
                              <tr>
                                  <td><strong>Total Penerimaan :</strong></td>
                                  <td>4.500.000</td>
                              </tr>

                              </tbody>
                          </table>
                          </div>
                          <!-- <div class="text-right">
                              <button class="btn btn-primary"><i class="fa fa-envelope"></i> Kirim Email</button>
                          </div> -->

                          <div class="col-sm-6 text-right">
                          <div class="table-responsive m-t">
                              <table class="table invoice-table">
                                  <thead>
                                    <th>Potongan</th>
                                    <th></th>
                                  </thead>
                                  <thead>
                                  <tr>
                                      <th>Deskripsi</th>
                                      <th>Nilai</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                  <tr>
                                      <td>Gaji Pokok</td>
                                      <td>2.750.000</td>
                                  </tr>
                                  <tr>
                                      <td>Tunjangan Makan</td>
                                      <td>500.000</td>
                                  </tr>
                                  <tr>
                                      <td>Tunjangan Transport</td>
                                      <td>500.000</td>
                                  </tr>
                                  <tr>
                                      <td>Tunjangan Kinerja Pegawai</td>
                                      <td>750.000</td>
                                  </tr>
                                  </tbody>
                              </table>
                          </div><!-- /table-responsive -->

                          <table class="table invoice-total">
                              <tbody>
                              <tr>
                                  <td><strong>Total Potongan :</strong></td>
                                  <td>4.500.000</td>
                              </tr>

                              <tr>
                                  <td><strong>Take Home Pay :</strong></td>
                                  <td>4.500.000</td>
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
</div>


<?php echo $__env->make('template.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- FooTable -->
<script src="<?php echo e(asset('inspinia/js/plugins/footable/footable.all.min.js')); ?>"></script>
<!-- Page-Level Scripts -->
<script>
    $(document).ready(function() {

        $('.footable').footable();
        $('.footable2').footable();

    });
    $(".select2_demo_1").select2();
            $(".select2_demo_2").select2();
            $(".select2_demo_3").select2({
                placeholder: "Select a state",
                allowClear: true
            });



</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\recruitment\resources\views/hrd/payroll/slip.blade.php ENDPATH**/ ?>
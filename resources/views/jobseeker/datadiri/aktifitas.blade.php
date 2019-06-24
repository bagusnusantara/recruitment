<div id="aktifitas"  class="tab-content my-resume">
        <div class="inner-box">
          <div class="item">
            <h3>Aktifitas Sosial</h3>
          </div>
          <div class="inner-box" style="overflow:auto; height:60vh;">
            <div class="item">
              <!--aktifitas-->
              <div class="form-group">
                    <h4><label for="olahraga">Olahraga</label></h4>
                    <input type="text" class="form-control" id="olahraga" placeholder="Masukan aktifitas olahraga">
                </div>
                <div class="form-group">
                    <h4><label for="Hobi">Hobi</label></h4>
                    <input type="text" class="form-control" id="NamaPanggilan" placeholder="Masukan hobi">
                </div>
              <h4>Olahraga</h4>
                <table class="table table-bordered table-responsive" style="border-radius:10px;">
                    <tr class="thead-smi th-center">
                        <th width="5%"><h4>Nomor</h4></th>
                        <th><h4>Organisasi</h4></th>
                        <th colspan="2"><h4>Periode</h4></th>
                        <th><h4>Tempat</h4></th>
                        <th><h4>Posisi</h4></th>
                        <th><h4>Ketarangan</h4></th>
                        <th width="10%"><h4>Option</h4></th>
                    </tr>
                    <tr>
                      <th scope="row" colspan="8" class="th-button">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".aktifitas-modal">
                          <i class="fa fa-plus"></i>Tambah</button>  
                      </th>
                    </tr>
                </table>
                <br>
                <!--modal aktifitas-->
                <form id="minatform">
                    <div class="modal fade aktifitas-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-head">
                              <h3 class="modal-title ml-4 mt-3">Data Minat</h3>
                          </div>
                          <div class="modal-body">
                            <div class="inner-box">
                                <div class="item">
                                    <div class="form-group">
                                        <h4><label for="organisasi">Organisasi</label></h4>
                                        <input type="text" class="form-control" id="organisasi" placeholder="Masukan Nama Organisasi">
                                    </div>
                                    <div class="form-group">
                                        <h4>Periode</h4>
                                        <label for="tahunmulai">Mulai</label>
                                        <input type="number" min="1900" max="2019" step="1" class="form-control" id="tahunmulai" placeholder="Masukan Tahun Mulai">
                                        <label for="tahunakhir">Akhir</label>
                                        <input type="number" min="1900" max="2019" step="1" class="form-control" id="tahunakhir" placeholder="Masukan Tahun Akhirs">
                                    </div>
                                    <div class="form-group">
                                        <h4><label for="tempat">Tempat</label></h4>
                                        <input type="text" class="form-control" id="tempat" placeholder="Masukan Tempat">
                                    </div>
                                    <div class="form-group">
                                        <h4><label for="posisi">posisi</label></h4>
                                        <input type="text" class="form-control" id="posisi" placeholder="Masukan tempat">
                                    </div>
                                    <div class="form-group">
                                        <h4><label for="keterangan">Keterangan</label></h4>
                                        <textarea class="form-control" rows="3"  id="keterangan"></textarea>
                                    </div>
                              </div>
                          </div>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-primary">Save</button>
                            </div>
        
                        </div>
                      </div>
                    </div>
                  </form>
              <!--modal minat end-->
              <!--minat end-->
                    </div>
                  </div>
    <div class="item">
      <div class="mr-0">
        <button type="button" class="btn btn-secondary btn-lg">Reset</button>
        <button type="button" class="btn btn-primary btn-lg">Simpan</button>
      </div>
    </div>
  </div>
</div>

<div id="minat"  class="tab-content my-resume">
        <div class="inner-box">
          <div class="item">
            <h3>Minat</h3>
          </div>
          <div class="inner-box" style="overflow:auto; height:80vh;">
            <div class="item">
              <!--minat-->
              <div class="form-group">
                    <h4><label for="olahraga">Olahraga</label></h4>
                    <input type="text" class="form-control" id="olahraga" placeholder="Masukan aktifitas olahraga">
                </div>
                <div class="form-group">
                    <h4><label for="Hobi">Hobi</label></h4>
                    <input type="text" class="form-control" id="NamaPanggilan" placeholder="Masukan hobi">
                </div>
              <h4>Minat dan Harapan</h4>
                <table class="card table table-bordered">
                    <tr class="thead-smi th-center">
                        <th rowspan="2" width="5%"><h4>Nomor</h4></th>
                        <th rowspan="2"><h4>Organisasi</h4></th>
                        <th rowspan="2" colspan="2"><h4>Periode</h4></th>
                        <th rowspan="2"><h4>Tempat</h4></th>
                        <th rowspan="2"><h4>Level Jabatan</h4></th>
                        <th rowspan="2" width="10%"><h4>Option</h4></th>
                    </tr>
                    
                    <tr>
                      <th scope="row" colspan="1" class="th-button">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".minat-modal">
                              <i class="fa fa-plus"></i>
                            Tambah</button>  
                      </th>
                    </tr>
                </table>
                <br>
                <!--modal minat-->
                <form>
                    <div class="modal fade minat-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-head">
                              <h3 class="modal-title ml-4 mt-3">Data Minat</h3>
                          </div>
                          <div class="modal-body">
                            <div class="inner-box" style="overflow:auto; height:80vh;">
                                <div class="item">
                                  <div class="form-group">
                                          <h4><label class="my-1 mr-2" for="negara">Negara</label></h4>
                                          <select class="custom-select my-1 mr-sm-2" id="negara">
                                            <option selected>Choose...</option>
                                            <option value="1">Indonesia</option>
                                            <option value="2">Malaysia</option>
                                          </select>
                                          <br>
                                          <h4><label class="my-1 mr-2" for="provinsi">Provinsi</label></h4>
                                          <select class="custom-select my-1 mr-sm-2" id="provinsi">
                                            <option selected>Choose...</option>
                                            <option value="1">Jawa Timur</option>
                                            <option value="2">Madura</option>
                                          </select>
                                          <br>
                                          <h4><label class="my-1 mr-2" for="kota">Kota/Kab</label></h4>
                                          <select class="custom-select my-1 mr-sm-2" id="kota">
                                            <option selected>Choose...</option>
                                            <option value="1">Surabaya</option>
                                            <option value="2">Ngawi</option>
                                          </select>
                                  </div>
                                  <div class="form-group">
                                    <h4><label for="gajibulan">Gaji Bulanan</label></h4>
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Rp.</div>
                                      </div>
                                      <input type="number" min="0" step="1" class="form-control" id="gajibulan" placeholder="Masukan minat gaji ">
                                      <div class="input-group-append">
                                        <div class="input-group-text">.00</div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                      <h4><label class="my-1 mr-2" for="bidangbisnis">Bidang Bisnis</label></h4>
                                      <select class="custom-select my-1 mr-sm-2" id="bidangbisnis">
                                        <option selected>Choose...</option>
                                        <option value="1">Manufaktur</option>
                                        <option value="2">Non Faktur</option>
                                      </select>
                                  </div>
                                  <div class="form-group">
                                      <h4><label class="my-1 mr-2" for="spesialisasi">Spesialisasi</label></h4>
                                      <select class="custom-select my-1 mr-sm-2" id="spesialisasi">
                                        <option selected>Choose...</option>
                                        <option value="1">Akuntansi</option>
                                        <option value="2">Manajemen</option>
                                      </select>
                                  </div>
                                  <div class="form-group">
                                      <h4><label class="my-1 mr-2" for="posisikerja">Posisi Kerja</label></h4>
                                      <select class="custom-select my-1 mr-sm-2" id="posisikerja">
                                        <option selected>Choose...</option>
                                        <option value="1">General Manajer</option>
                                        <option value="2">Supervisor</option>
                                      </select>
                                  </div>
                                  <div class="form-group">
                                      <h4><label class="my-1 mr-2" for="leveljabatan">Level Jabatan</label></h4>
                                      <select class="custom-select my-1 mr-sm-2" id="leveljabatan">
                                        <option selected>Choose...</option>
                                        <option value="1">Staff</option>
                                        <option value="2">Operator</option>
                                      </select>
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
                </div>
        </div>
        
        
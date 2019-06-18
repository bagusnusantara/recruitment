<div id="pendidikan"  class="tab-content my-resume">
        <div class="inner-box">
          <div class="item">
              <h3>Pendidikan</h3>
          </div>
          <div class="inner-box" style="overflow:auto; height:80vh;">
              <div class="item">
                <h4>1. Pendidikan Formal</h4>
                  <table class="card table table-bordered">
                      <tr class="thead-smi th-center">
                          <th rowspan="2" width="5%"><h4>#</h4></th>
                          <th rowspan="2" width="10%"><h4>Tingkatan</h4></th>
                          <th rowspan="1" colspan="2" width="10%"><h4>Tahun Sekolah</h4></th>
                          <th rowspan="2" width="30%"><h4>Nama Institusi</h4></th>
                          <th rowspan="2"><h4>Tempat</h4></th>
                          <th rowspan="2"><h4>Fakultas</h4></th>
                          <th rowspan="2"><h4>Jurusan</h4></th>
                          <th rowspan="2" width="7%"><h4>IPK</h4></th>
                          <th rowspan="2" width="10%"><h4>Keterangan</h4></th>
                          <th rowspan="2" width="10%"><h4>Option</h4></th>
                      </tr>
                      <tr class="thead-smi">
                          <th><h4>Mulai</h4></th>
                          <th><h4>Akhir</h4></th>
                      </tr>
                      <tr>
                        <th scope="row" colspan="11" class="th-button">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".pendidikanformal-modal">
                                <i class="fa fa-plus"></i>
                              Tambah</button>  
                        </th>
                      </tr>
                  </table>
                  
                  <!--modal pendidikan formal-->
                  <div class="modal fade pendidikanformal-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-head">
                            <h4 class="modal-title ml-4 mt-3">Data Pendidikan Formal</h4>
                        </div>
                        <div class="modal-body">
                          <div class="inner-box" style="overflow:auto; height:80vh;">
                              <div class="item">
                                <div class="form-group">
                                      <h4><label class="my-1 mr-2" for="negara">Tingkat Pendidikan</label></h4>
                                      <select class="custom-select my-1 mr-sm-2" id="negara">
                                        <option selected>Choose...</option>
                                        <option value="1">SLTA</option>
                                        <option value="2">Akademi</option>
                                        <option value="3">Strata 1</option>
                                        <option value="4">Pascasarjana</option>
                                      </select>
                                </div>
                              <div class="form-group">
                                  <h4>Tahun</h4>
                                  <label for="tahunmulai">Mulai</label>
                                  <input type="number" min="1900" max="2019" step="1" class="form-control" id="tahunmulai" placeholder="Masukan Tahun Mulai">
                                  <label for="tahunakhir">Akhir</label>
                                  <input type="number" min="1900" max="2019" step="1" class="form-control" id="tahunakhir" placeholder="Masukan Tahun Akhirs">
                              </div>
                              <div class="form-group">
                                    <h4><label for="institusi">Institusi</label></h4>
                                    <input type="text" class="form-control" id="alamat" placeholder="Masukan nama Institusi">
                               </div>
                               <div class="form-group">
                                    <h4><label for="tempat">Tempat</label></h4>
                                    <input type="text" class="form-control" id="tempat" placeholder="Masukan tempat institusi">
                               </div>
                               <div class="form-group">
                                    <h4><label for="fakultas">Fakultas</label></h4>
                                    <input type="text" class="form-control" id="fakultas" placeholder="Masukan nama fakultas">
                               </div>
                               <div class="form-group">
                                    <h4><label for="jurusan">Jurusan</label></h4>
                                    <input type="text" class="form-control" id="jurusan" placeholder="Masukan nama jurusan">
                               </div>
                               <div class="form-group">
                                    <h4><label for="IPK">IPK</label></h4>
                                    <input type="number" min="0" max="100" step="0.01" class="form-control" id="tahunakhir" placeholder="Masukan Nilai Akhir">
                                </div>
                                <div class="form-group">
                                        <h4><label for="keterangan">Keterangan</label></h4>
                                        <input type="text" class="form-control" id="keterangan" placeholder="Keterangan tambahan">
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
                  <!--modal pendidikan formal end-->
                  <br>
                  <h4>2. Pendidikan Informal</h4>
                  <table class="card table table-bordered">
                      <tr class="thead-smi th-center">
                          <th  width="5%"><h4>No</h4></th>
                          <th  ><h4>Jenis Pelatihan</h4></th>
                          <th  colspan="2" width="15%"><h4>Tempat</h4></th>
                          <th  width="15%"><h4>Periode</h4></th>
                          <th  width="10%"><h4>Keterangan</h4></th>
                          <th  width="5%"><h4>Option</h4></th>
                      </tr>
                      <tr>
                        <th scope="row" colspan="11" class="th-button">
                            <button type="button" class="btn btn-primary">
                                <i class="fa fa-plus"></i>
                              Tambah</button>  
                        </th>
                      </tr>
                  </table>
                  <h4>3. Kemampuan Bahasa Asing</h4>
                  <table class="card table table-bordered">
                      <tr class="thead-smi th-center">
                          <th  width="5%"><h4>No</h4></th>
                          <th  ><h4>Bahasa</h4></th>
                          <th  colspan="2" width="15%"><h4>Lisan</h4></th>
                          <th  width="15%"><h4>Tertulis</h4></th>
                          <th  width="5%"><h4>Option</h4></th>
                      </tr>
                      <tr>
                        <th scope="row" colspan="11" class="th-button">
                            <button type="button" class="btn btn-primary">
                                <i class="fa fa-plus"></i>
                              Tambah</button>  
                        </th>
                      </tr>
                  </table>
              </div>
          </div>
    </div>
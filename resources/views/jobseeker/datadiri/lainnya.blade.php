<div id="lainnya"  class="tab-content my-resume">
        <div class="inner-box">
          <div class="item">
            <h3>Lainnya</h3>
          </div>
          <div class="inner-box" style="overflow:auto; height:60vh;">
            <div class="item">
              <!--lainnya-->
              <h4>Riwayat Penyakit 2 Tahun Terakhir </h4>
                <table class="table table-bordered table-responsive" style="border-radius:10px;">
                    <tr class="thead-smi th-center">
                        <th width="5%"><h4>Nomor</h4></th>
                        <th><h4>Jenis Penyakit</h4></th>
                        <th colspan="2"><h4>Periode</h4></th>
                        <th><h4>Pengaruh</h4></th>
                        <th width="10%"><h4>Option</h4></th>
                    </tr>
                    <tr>
                      <th scope="row" colspan="7" class="th-button">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".lainnya-modal">
                          <i class="fa fa-plus"></i>Tambah</button>  
                      </th>
                    </tr>
                </table>
                <br>
                <div class="form-group">
                  <h4><label class="my-1 mr-2" for="survey">Mengetahui informasi PT Selaras Mitra Integra dari :</label></h4>
                  <select class="custom-select my-1 mr-sm-2" id="survey">
                    <option {{(!isset($dataUser->referensi_dari) || $dataUser->referensi_dari=='0')? "selected" : ""}} value="0">Pilih . . .</option>
                    <option {{( $dataUser->referensi_dari=='Radio' )? "selected" : ""}} value="1">Radio</option>
                    <option {{( $dataUser->referensi_dari=='Majalah,Koran' )? "selected" : ""}} value="2">Majalah,Koran</option>
                    <option {{( $dataUser->referensi_dari=='Google Search Engine' )? "selected" : ""}} value="3">Google Search Engine</option>
                    <option {{( $dataUser->referensi_dari=='Blog' )? "selected" : ""}} value="4">Blog</option>
                    <option {{( $dataUser->referensi_dari=='Media Sosial' )? "selected" : ""}} value="5">Media Sosial</option>
                    <option {{( $dataUser->referensi_dari=='Kerabat,Teman' )? "selected" : ""}} value="6">Kerabat,Teman</option>
                    
                  </select>
                </div>
                <!--modal lainnya-->
                <form id="minatform">
                    <div class="modal fade lainnya-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-head">
                              <h3 class="modal-title ml-4 mt-3">Data Minat</h3>
                          </div>
                          <div class="modal-body">
                            <div class="inner-box">
                                <div class="item">
                                    <div class="form-group">
                                        <h4><label for="organisasi">Jenis Penyakit</label></h4>
                                        <input type="text" class="form-control" id="organisasi" placeholder="Masukan jenis penyakit">
                                    </div>
                                    <div class="form-group">
                                        <h4>Lama</h4>
                                        <label for="tahunmulai">Mulai</label>
                                        <input type="date" class="form-control" id="tahunmulai" placeholder="Masukan tahun mulai">
                                        <label for="tahunakhir">Akhir</label>
                                        <input type="date" class="form-control" id="tahunakhir" placeholder="Masukan tahun akhirs">
                                    </div>
                                    <div class="form-group">
                                        <h4><label for="pengaruh">Pengaruh</label></h4>
                                        <input type="text" class="form-control" id="pengaruh" placeholder="Masukan Penyakit">
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
              <!--modal lainnya end-->
              <!--lainnya end-->
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

<div id="pekerjaan"  class="tab-content my-resume">
        <div class="inner-box">
          <div class="item">
            <h3>Riwayat Pekerjaan</h3>
          </div>
          <div class="inner-box" style="overflow:auto; height:50vh;">
            <div class="item">
              <!--pekerjaan-->
              <h4>Pengalaman Kerja</h4>
              <table class="table table-bordered table-responsive" style="border-radius:10px;">
                  <tr class="thead-smi th-center">
                      <th width="3%"><h4>Nomor</h4></th>
                      <th><h4>Bisinis Perusahaan</h4></th>
                      <th width="15%" colspan="2"><h4>Periode</h4></th>
                      <th width="10%"><h4>Posisi</h4></th>
                      <th ><h4>Jumlah Anggota</h4></th>
                      <th><h4>Gaji Terakhir(IDR)</h4></th>
                      <th width="15%"><h4>Alasan Pindah</h4></th>
                      <th><h4>Keterangan</h4></th>
                      <th width="5%"><h4>Option</h4></th>
                  </tr>
                  <tr>
                    <th scope="row" colspan="11" class="th-button">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".pengalamankerja-modal">
                            <i class="fa fa-plus"></i>Tambah</button>  
                    </th>
                  </tr>
              </table>
                <!--modal pekerjaan-->
                <form>
                    <div class="modal fade pengalamankerja-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-head">
                              <h3 class="modal-title ml-4 mt-3">Data Pengalaman Kerja</h3>
                          </div>
                          <div class="modal-body">
                            <div class="inner-box" style="overflow:auto; height:80vh;">
                                <div class="item">
                                  <div class="form-group">
                                      <h4><label class="my-1 mr-2" for="bisnisperusahaan">Bisnis Perusahaan</label></h4>
                                      <select class="custom-select my-1 mr-sm-2" id="bisnisperusahaan">
                                        <option selected value="0">Pilih . . .</option>
                                        @foreach ($st_data["BisnisPerusahaan"] as $item)
                                          <option value="{{$item->id}}">{{$item->name}}</option>    
                                        @endforeach
                                      </select>
                                  </div>
                                <div class="form-group">
                                      <h4><label for="tempatkerja">Lokasi Kerja</label></h4>
                                      <input type="number" class="form-control" id="tempatkerja" placeholder="Masukan jumlah anggota">
                                </div>
                                <div class="form-group">
                                      <h4>Periode</h4>
                                      <label for="tahunmulai">Mulai</label>
                                      <input type="date" class="form-control" id="tahunmulai" placeholder="Masukan Tahun Mulai">
                                      <label for="tahunakhir">Akhir</label>
                                      <input type="date" class="form-control" id="tahunakhir" placeholder="Masukan Tahun Akhirs">
                                </div>
                                <div class="form-group">
                                      <h4><label for="posisi">Posisi</label></h4>
                                      <input type="text" class="form-control" id="posisi" placeholder="Masukan Posisi">
                                 </div>
                                 <div class="form-group">
                                      <h4><label for="bawahan">Jumlah Anggota yang Dibawahi</label></h4>
                                      <input type="number" class="form-control" id="bawahan" placeholder="Masukan jumlah anggota yang dibawahi">
                                 </div>
                                 <div class="form-group">
                                      <h4><label for="gajiterakhir">Gaji Terakhir</label></h4>
                                      <div class="input-group">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">Rp.</div>
                                        </div>
                                        <input type="number" min="0" step="1" class="form-control" id="gajiterakhir" placeholder="Masukan Gaji Terakhir">
                                        <div class="input-group-append">
                                          <div class="input-group-text">.00</div>
                                        </div>
                                      </div>
                                 </div>
                                 <div class="form-group">
                                      <h4><label for="jurusan">Jurusan</label></h4>
                                      <input type="text" class="form-control" id="jurusan" placeholder="Masukan nama jurusan">
                                 </div>
                                 <div class="form-group">
                                    <h4><label for="AlasanPindah">Alasan Pindah</label></h4>
                                    <textarea class="form-control" rows="2"  id="AlasanPindah"></textarea>
                                </div>
                                <div class="form-group">
                                    <h4><label for="Keterangan">Keterangan</label></h4>
                                    <textarea class="form-control" rows="3"  id="Keterangan"></textarea>
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
              <!--modal pekerjaan end-->
              <!--pekerjaan end-->
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
        
        
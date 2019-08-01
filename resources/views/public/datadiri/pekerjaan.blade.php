<div id="pekerjaan"  class="tab-content my-resume">
        <div class="inner-box">
          <div class="item">
            <h3>Riwayat Pekerjaan</h3>
          </div>
          <div class="inner-box" style="overflow:auto; height:50vh;">
            <div class="item">
              <!--pekerjaan-->
              <h4>Pengalaman Kerja</h4>
              <table class="table table-bordered table-responsive black-font" style="border-radius:10px;">
                  <tr class="thead-smi th-center">
                      <th width="3%"><h4>Nomor</h4></th>
                      <th><h4>Bisinis Perusahaan</h4></th>
                      <th width="15%" colspan="2"><h4>Periode</h4></th>
                      <th width="10%"><h4>Jumlah Anggota</h4></th>
                      <th width="10%"><h4>Posisi</h4></th>
                      <th ><h4>Jumlah Anggota</h4></th>
                      <th><h4>Gaji Terakhir(IDR)</h4></th>
                      <th width="15%"><h4>Alasan Pindah</h4></th>
                      <th><h4>Keterangan</h4></th>
                      <th width="5%"><h4>Option</h4></th>
                  </tr>

                  @foreach ($dataUserSt['RiwayatKerja'] as $key=>$item)
                  <tr>
                    <th>{{$key}}</th>
                    <th>{{$item->st_bisnisperusahaan['name']}}</th>
                    <th>{{date("Y",strtotime($item->tanggal_mulai)) }}</th>
                    <th>{{date("Y",strtotime($item->tanggal_akhir))}}</th>
                    <th>{{$item->posisi}}</th>
                    <th>{{$item->bawahan}}</th>
                    <th>{{"Rp".$item->gaji_terakhir.".00"}}</th>
                    <th>{{$item->jurusan}}</th>
                    <th>{{$item->alasan_pindah}}</th>
                    <th>{{$item->keterangan}}</th>
                    <th>tes</th>
                  </tr>
                  @endforeach
                  <tr>
                    <th scope="row" colspan="11" class="th-button">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".pengalamankerja-modal">
                            <i class="fa fa-plus"></i>Tambah</button>  
                    </th>
                  </tr>
              </table>
                <!--modal pekerjaan-->
                <form>
                    <div id="RiwayatKerja" class="modal fade pengalamankerja-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-head">
                              <h3 class="modal-title ml-4 mt-3">Data Pengalaman Kerja</h3>
                          </div>
                          <div class="modal-body">
                            <div class="inner-box" >
                                <div class="item">
                                  <div class="form-group">
                                      <h4><label class="my-1 mr-2" for="BisnisPerusahaan">Bisnis Perusahaan</label></h4>
                                      <select class="custom-select my-1 mr-sm-2" id="BisnisPerusahaan">
                                        <option selected value="0">Pilih . . .</option>
                                        @foreach ($st_data["BisnisPerusahaan"] as $item)
                                          <option value="{{$item->id}}">{{$item->name}}</option>    
                                        @endforeach
                                      </select>
                                  </div>
                                <div class="form-group">
                                      <h4><label for="TempatKerja">Lokasi Kerja</label></h4>
                                      <input type="text" class="form-control" id="TempatKerja" placeholder="Masukan jumlah anggota">
                                </div>
                                <div class="form-group">
                                      <h4>Periode</h4>
                                      <label for="TahunMulai">Mulai</label>
                                      <input type="month" class="form-control" id="TahunMulai" placeholder="Masukan Tahun Mulai">
                                      <label for="TahunAkhir">Akhir</label>
                                      <input type="month" class="form-control" id="TahunAkhir" placeholder="Masukan Tahun Akhirs">
                                </div>
                                <div class="form-group">
                                      <h4><label for="Posisi">Posisi</label></h4>
                                      <input type="text" class="form-control" id="Posisi" placeholder="Masukan Posisi">
                                 </div>
                                 <div class="form-group">
                                      <h4><label for="Bawahan">Jumlah Anggota yang Dibawahi</label></h4>
                                      <input type="number" class="form-control" id="Bawahan" placeholder="Masukan jumlah anggota yang dibawahi">
                                 </div>
                                 <div class="form-group">
                                      <h4><label for="GajiTerakhir">Gaji Terakhir</label></h4>
                                      <div class="input-group">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">Rp.</div>
                                        </div>
                                        <input type="number" min="0" step="1" class="form-control" id="GajiTerakhir" placeholder="Masukan gaji terakhir">
                                        <div class="input-group-append">
                                          <div class="input-group-text">.00</div>
                                        </div>
                                      </div>
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
                              <button type="button" class="btn btn-primary btn-lg" id="submitRiwayatPekerjaan">
                                  <a>Simpan</a>
                                  <img id="loader" src='{{asset('img/loader.gif') }}' width='20px' height='20px' style="display:none;">
                              </button>
                            </div>
        
                        </div>
                      </div>
                    </div>
                  </form>
              <!--modal pekerjaan end-->
              <!--pekerjaan end-->
                    </div>
                  </div>
  </div>
</div>
        
        
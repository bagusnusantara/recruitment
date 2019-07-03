<div id="minat"  class="tab-content my-resume">
    <div class="inner-box">
      <div class="item">
        <h3>Minat</h3>
      </div>
      <div class="inner-box" style="overflow:auto; height:50vh;">
        <div class="item">
          <!--minat-->
          <h4>Minat dan Harapan</h4>
            <table class="table table-bordered table-responsive" style="border-radius:10px;">
                <tr class="thead-smi th-center">
                    <th rowspan="2" width="5%"><h4>Nomor</h4></th>
                    <th rowspan="1" colspan="3" width="10%"><h4>Preferensi Lokasi</h4></th>
                    <th rowspan="2" width="10%"><h4>Gaji Bulanan(IDR)</h4></th>
                    <th rowspan="2"><h4>Bidang Bisnis</h4></th>
                    <th rowspan="2"><h4>Spesialisasi</h4></th>
                    <th rowspan="2"><h4>Posisi Kerja</h4></th>
                    <th rowspan="2"><h4>Level Jabatan</h4></th>
                    <th rowspan="2" width="10%"><h4>Option</h4></th>
                </tr>
                <tr class="thead-smi">
                    <th><h4>Negara</h4></th>
                    <th><h4>Provinsi</h4></th>
                    <th><h4>Kota</h4></th>
                </tr>
                <tr>
                  <th scope="row" colspan="11" class="th-button">
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
                        <div class="inner-box" style="overflow:auto; overflow-y:scroll; height:80vh;">
                            <div class="item">
                              <div class="form-group">
                                      <h4><label class="my-1 mr-2" for="negara">Negara</label></h4>
                                      <select class="custom-select my-1 mr-sm-2" id="negara">
                                        <option selected value="0">Pilih . . .</option>
                                        @foreach ($st_data["Negara"] as $item)
                                          <option value="{{$item->id}}">{{$item->negara}}</option>    
                                        @endforeach
                                      </select>
                                      <br>
                                      <h4><label class="my-1 mr-2" for="provinsi">Provinsi</label></h4>
                                      <select class="custom-select my-1 mr-sm-2" id="provinsi" disabled>
                                        <option selected>Pilih...</option>
                                      </select>
                                      <br>
                                      <h4><label class="my-1 mr-2" for="kota">Kota/Kab</label></h4>
                                      <select class="custom-select my-1 mr-sm-2" id="kota" disabled>
                                        <option selected>Pilih...</option>
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
                                    <option value="0" selected>Pilih...</option>
                                    @foreach ($st_data["BisnisPerusahaan"] as $item)
                                      <option value="{{$item->id}}">{{$item->name}}</option>    
                                    @endforeach
                                  </select>
                              </div>
                              <div class="form-group">
                                  <h4><label class="my-1 mr-2" for="lingkungankerja">Lingkungan Kerja</label></h4>
                                  <select class="custom-select my-1 mr-sm-2" id="lingkungankerja">
                                    <option value ="0" selected>Pilih...</option>
                                    @foreach ($st_data["LingkunganKerja"] as $item)
                                      <option value="{{$item->id}}">{{$item->lingkungan}}</option>    
                                    @endforeach
                                  </select>
                              </div>
                              <div class="form-group">
                                  <h4><label class="my-1 mr-2" for="spesialisasi">Spesialisasi</label></h4>
                                  <select class="custom-select my-1 mr-sm-2" id="spesialisasi">
                                    <option value ="0" selected>Pilih...</option>
                                    @foreach ($st_data["SpesialisasiPekerjaan"] as $item)
                                      <option value="{{$item->id}}">{{$item->spesial}}</option>    
                                    @endforeach
                                  </select>
                              </div>
                              <div class="form-group">
                                  <h4><label class="my-1 mr-2" for="posisikerja">Posisi Kerja</label></h4>
                                  <select class="custom-select my-1 mr-sm-2" id="posisikerja">
                                    <option value="0" selected>Pilih...</option>
                                    @foreach ($st_data["PosisiKerja"] as $item)
                                      <option value="{{$item->id}}">{{$item->posisi}}</option>    
                                    @endforeach
                                  </select>
                              </div>
                              <div class="form-group">
                                  <h4><label class="my-1 mr-2" for="leveljabatan">Level Jabatan</label></h4>
                                  <select class="custom-select my-1 mr-sm-2" id="leveljabatan">
                                    <option value="0" selected>Pilih...</option>
                                    @foreach ($st_data["LevelJabatan"] as $item)
                                      <option value="{{$item->id}}">{{$item->jabatan}}</option>    
                                    @endforeach
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
    <div class="item">
      <div class="mr-0">
        <button type="button" class="btn btn-secondary btn-lg">Reset</button>
        <button type="button" class="btn btn-primary btn-lg">Simpan</button>
      </div>
    </div>
  </div>
</div>
    
    
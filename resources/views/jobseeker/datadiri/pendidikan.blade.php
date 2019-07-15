<div id="pendidikan"  class="tab-content my-resume">
  <div class="inner-box">
    <div class="item">
      <h3>Pendidikan</h3>
    </div>
    <div class="inner-box" >
      <div class="item">
        <!--pendidikan formal-->
        <h4>Pendidikan Formal</h4>
          <table class="table table-bordered table-responsive" style="border-radius:10px;">
              <tr class="thead-smi th-center">
                <th  width="5%"><h4>#</h4></th>
                <th  width="10%"><h4>Tingkatan</h4></th>
                <th  width="10%"><h4>Tahun Sekolah</h4></th>
                <th  width="30%"><h4>Nama Institusi</h4></th>
                <th><h4>Tempat</h4></th>
                <th><h4>Fakultas</h4></th>
                <th><h4>Jurusan</h4></th>
                <th width="7%"><h4>IPK</h4></th>
                <th width="10%"><h4>Keterangan</h4></th>
                <th width="10%"><h4>Option</h4></th>
            </tr>
            <tr>
              <th scope="row" colspan="11" class="th-button">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".pendidikanformal-modal">
                      <i class="fa fa-plus"></i>
                    Tambah</button>  
              </th>
            </tr>
        </table>
        <br>
        <!--modal pendidikan formal-->
        <form>
            <div id="pendidikanformal" class="modal fade pendidikanformal-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-head">
                      <h3 class="modal-title ml-4 mt-3">Data Pendidikan Formal</h3>
                  </div>
                  <div class="modal-body">
                    <div class="inner-box" >
                        <div class="item">
                          <div class="form-group">
                                <h4><label class="my-1 mr-2" for="TingkatPendidikan">Tingkat Pendidikan</label></h4>
                                <select class="custom-select my-1 mr-sm-2" id="TingkatPendidikan">
                                  <option selected value="0">Pilih . . .</option>
                                  @foreach ($st_data["TingkatPendidikan"] as $item)
                                    <option value="{{$item->id}}">{{$item->strata}}</option>    
                                  @endforeach
                                </select>
                          </div>
                        <div class="form-group">
                            <h4>Tahun</h4>
                            <label for="tahunmulai">Mulai</label>
                            <input type="month" class="form-control" id="tahunmulai" placeholder="YYYY">
                            <label for="tahunakhir">Akhir</label>
                            <input type="month" class="form-control" id="tahunakhir" placeholder="Masukan Tahun Akhirs">
                        </div>
                        <div class="form-group">
                              <h4><label for="institusi">Institusi</label></h4>
                              <input type="text" class="form-control" id="institusi" placeholder="Masukan nama Institusi">
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
                               <textarea class="form-control" id="keterangan"></textarea>
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
      <!--modal pendidikan formal end-->
      <!--pendidikan formal end-->
      <!--pendidikan informal -->
      <h4>Pendidikan Informal / Pelatihan Kursus</h4>
      <table class="table table-bordered table-responsive" style="border-radius:10px;">
          <tr class="thead-smi th-center">
              <th  width="5%"><h4>No</h4></th>
              <th ><h4>Jenis Pelatihan</h4></th>
              <th ><h4>Tempat</h4></th>
              <th  colspan="2"  ><h4>Periode</h4></th>
              <th  width="10%"><h4>Keterangan</h4></th>
              <th  width="5%"><h4>Option</h4></th>
          </tr>
          <tr>
            <th scope="row" colspan="11" class="th-button">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".pendidikaninformal-modal">
                    <i class="fa fa-plus"></i>
                  Tambah</button>  
            </th>
          </tr>
      </table>
              <!--modal pendidikan formal-->
              <form>
                  <div class="modal fade pendidikaninformal-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-head">
                            <h3 class="modal-title ml-4 mt-3">Data Pendidikan Informal / Pelatihan Kursus</h3>
                        </div>
                        <div class="modal-body">
                          <div class="inner-box">
                              <div class="item">
                              <div class="form-group">
                                  <h4><label for="tempat">Jenis Pelatihan</label></h4>
                                  <input type="text" class="form-control" id="jenispelatihan" placeholder="Masukan jenis pelatihan">
                              </div>
                              <div class="form-group">
                                  <h4>Periode</h4>
                                  <label for="tahunmulai">Mulai</label>
                                  <input type="month"  class="form-control" id="tahunmulai" placeholder="Masukan Tahun Mulai">
                                  <label for="tahunakhir">Akhir</label>
                                  <input type="month"  class="form-control" id="tahunakhir" placeholder="Masukan Tahun Akhirs">
                              </div>
                               <div class="form-group">
                                    <h4><label for="tempat">Tempat</label></h4>
                                    <input type="text" class="form-control" id="tempat" placeholder="Masukan tempat lembaga">
                               </div>
                               <div class="form-group">
                                    <h4><label for="keterangan">Keterangan</label></h4>
                                    <input type="text" class="form-control" rows="3" id="ketarangan" placeholder="Ketarangan">
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
            <!--modal pendidikan informal end-->
            <!--pendidikan informal end-->
            <!--kemampuan bahasa asing-->
            <h4>Kemampuan Bahasa Asing</h4>
            <table class="table table-bordered table-responsive" style="border-radius:10px;">
                <tr class="thead-smi th-center">
                    <th  width="5%"><h4>No</h4></th>
                    <th  ><h4>Bahasa</h4></th>
                    <th  colspan="2" width="15%"><h4>Lisan</h4></th>
                    <th  width="15%"><h4>Tertulis</h4></th>
                    <th  width="5%"><h4>Option</h4></th>
                </tr>
                <tr>
                  <th scope="row" colspan="11" class="th-button">
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".kemampuanbahasaasing-modal">
                          <i class="fa fa-plus"></i>
                        Tambah</button>  
                  </th>
                </tr>
            </table>
          <!--modal kemampuan bahasa asing-->
          <form>
              <div class="modal fade kemampuanbahasaasing-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-head">
                        <h3 class="modal-title ml-4 mt-3">Data Kemampuan Bahasa Asing</h3>
                    </div>
                    <div class="modal-body">
                      <div class="inner-box">
                          <div class="item">
                              <div class="form-group">
                                  <h4><label class="my-1 mr-2" for="bahasa">Bahasa</label></h4>
                                  <select class="custom-select my-1 mr-sm-2" id="bahasa">
                                    <option selected value="0">Pilih . . .</option>
                                    @foreach ($st_data["Bahasa"] as $item)
                                      <option value="{{$item->id}}">{{$item->deskripsi}}</option>    
                                    @endforeach
                                  </select>
                            </div>
                            <div class="form-group">
                                  <h4><label class="my-1 mr-2" for="kemampuanlisan">Kemampuan Lisan</label></h4>
                                  <select class="custom-select my-1 mr-sm-2" id="kemampuanlisan">
                                    <option selected value="0">Pilih . . .</option>
                                    @foreach ($st_data["Kemampuan"] as $item)
                                      <option value="{{$item->id}}">{{$item->tingkat}}</option>    
                                    @endforeach
                                  </select>
                            </div>
                            <div class="form-group">
                                <h4><label class="my-1 mr-2" for="kemampuantertulis">Kemampuan Tertulis</label></h4>
                                <select class="custom-select my-1 mr-sm-2" id="kemampuanlisan">
                                    <option selected value="0">Pilih . . . </option>
                                    @foreach ($st_data["Kemampuan"] as $item)
                                      <option value="{{$item->id}}">{{$item->tingkat}}</option>    
                                    @endforeach
                                </select>
                            </div>
                      </div>
                    </div>
                    </div>
                    <div class="modal-footer">
                      </div>

                  </div>
                </div>
              </div>
            </form>
        <!--modal kamampuan bahasa asing end-->
        <!--kemampuan bahasa asing end-->
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


<div id="aktivitas"  class="tab-content my-resume">
        <div class="inner-box">
          <div class="item">
            <h3>Aktivitas Sosial</h3>
          </div>
          <div class="inner-box" style="overflow:auto; height:60vh;">
            <div class="item">
              <!--aktivitas-->
              <div class="form-group">
                    <h4><label for="Olahraga">Olahraga</label></h4>
              <input type="text" class="form-control" id="Olahraga" placeholder="Masukan aktivitas olahraga" value="{{$dataUser->olahraga}}">
                </div>
                <div class="form-group">
                    <h4><label for="Hobi">Hobi</label></h4>
                    <input type="text" class="form-control" id="Hobi" placeholder="Masukan hobi" value="{{$dataUser->hobi}}"> 
                </div>
              <h4>Organisasi</h4>
                <table id="aktivitas-table" class="table table-bordered table-responsive" style="border-radius:10px;">
                    <tr class="thead-smi th-center">
                        <th width="5%"><h4>Nomor</h4></th>
                        <th><h4>Organisasi</h4></th>
                        <th colspan="2"><h4>Periode</h4></th>
                        <th><h4>Tempat</h4></th>
                        <th><h4>Posisi</h4></th>
                        <th><h4>Ketarangan</h4></th>
                        <th width="10%"><h4>Option</h4></th>
                    </tr>
                    @foreach ($dataUserSt['PengalamanOrganisasi'] as $key=>$item)
                    <tr>
                        <th width="5%"><h4>{{$key+1}}</h4></th>
                        <th><h4>{{$item->organisasi}}</h4></th>
                        <th><h4>{{$item->tanggal_mulai}}</h4></th>
                        <th><h4>{{$item->tanggal_akhir}}</h4></th>
                        <th><h4>{{$item->tempat}}</h4></th>
                        <th><h4>{{$item->posisi}}</h4></th>
                        <th><h4>{{$item->keterangan}}</h4></th>
                        <th width="10%"><h4>
                            <button class="mx-auto btn-outline-primary rounded"><i class="fa fa-edit fa-1x"></i></button>
                            <button data-target="#deletemodal" data-href="" data-toggle="modal" class="mx-auto btn-outline-danger rounded"><i class="fa fa-trash fa-1x"></i></button>    
                        </h4></th>
                    </tr>
                    @endforeach
                </table>
                <button type="button" class="pull-right btn btn-primary" data-toggle="modal" data-target=".aktivitas-modal">
                  <i class="fa fa-plus"></i>Tambah</button>  
                <br>
                <!--modal aktivitas-->
                <form id="minatform">
                    <div class="modal fade aktivitas-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-head">
                              <h3 class="modal-title ml-4 mt-3">Data Organisasi</h3>
                          </div>
                          <div class="modal-body">
                            <div class="inner-box">
                                <div class="item">
                                    <div class="form-group">
                                        <h4><label for="Organisasi">Organisasi</label></h4>
                                        <input type="text" class="form-control" id="Organisasi" placeholder="Masukan nama organisasi">
                                    </div>
                                    <div class="form-group">
                                        <h4>Periode</h4>
                                        <label for="tahunmulai">Mulai</label>
                                        <input type="text" class="form-control typeBulan" id="TahunMulai" placeholder="Masukan tahun mulai">
                                        <label for="tahunakhir">Akhir</label>
                                        <input type="text" class="form-control typeBulan" id="TahunAkhir" placeholder="Masukan tahun akhir">
                                    </div>
                                    <div class="form-group">
                                        <h4><label for="Tempat">Tempat</label></h4>
                                        <input type="text" class="form-control" id="Tempat" placeholder="Masukan tempat">
                                    </div>
                                    <div class="form-group">
                                        <h4><label for="Posisi">posisi</label></h4>
                                        <input type="text" class="form-control" id="Posisi" placeholder="Masukan posisi">
                                    </div>
                                    <div class="form-group">
                                        <h4><label for="Keterangan">Keterangan</label></h4>
                                        <textarea class="form-control" rows="3"  id="Keterangan"></textarea>
                                    </div>
                              </div>
                          </div>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                              <button type="button" class="btn btn-primary btn-lg" id="submitPengalamanOrganisasi">
                                  <a>Simpan</a>
                                  <img id="loader" src='{{asset('img/loader.gif') }}' width='20px' height='20px' style="display:none;">
                                </button>
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
        <!--button type="button" class="btn btn-secondary btn-lg" width='20px' height='20px'>Reset</button -->
        <button type="button" class="btn btn-primary btn-lg" id="submitIdentitas">
          <a>Simpan</a>
          <img id="loader" src='{{asset('img/loader.gif') }}' width='20px' height='20px' style="display:none;">
        </button>
      </div>
    </div>
  </div>
</div>

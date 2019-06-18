@extends('jobseeker.template.index_content')
@section('css')
<style>
  .thead-smi{
    background-color: aliceblue;
  }
  .th-center th{
    text-align: center;
    vertical-align: middle;
  }
  .th-button
  {
    text-align: right;
    vertical-align: middle;
    margin-left:3%;
  }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection
@section('content')

<!-- Job Browse Section Start -->
<div class="section">
  <div class="ml-auto mr-auto"style="width:80vw;">
    <div class="row">
      <div class="col-lg-3 col-md-4 col-xs-12">
        <div class="right-sideabr">
          <h4>Data Lamaran</h4>
          <ul id="tab" class="list-item">
              <li class="active"><a   class="list-group-item-action" href="#identitas">Identitas</a></li>
              <li><a   class="tab-active list-group-item-action" href="#pendidikan">Pendidikan</a></li>
              <li><a   class="list-group-item-action" href="#keluarga">Keluarga</a></li>
              <li><a   class="list-group-item-action" href="#pekerjaan">Pekerjaan</a></li>
              <li><a   class="list-group-item-action" href="#minat">Minat</a></li>
              <li><a   class="list-group-item-action" href="#aktifitas">Aktifitas</a></li>
              <li><a   class="list-group-item-action" href="#lainnya">Lainnya</a></li>
              <li><a   class="list-group-item-action" href="#lampiran">Lampiran</a></li>
            </ul>
        </div>
      </div>
          <div class="col-lg-9 col-md-8 col-xs-12 tabs-stage">
              <form>        
            <!--Identitas-->
            <div id="identitas"  class="tab-content my-resume">
              <div class="inner-box">
                <div class="item">
                    <h3>Identitas</h3>
                </div>
                <div class="inner-box" style="overflow:auto; height:80vh;">
                    <div class="item">
                    <div class="form-group">
                        <h4><label for="NamaLengkap">Nama Lengkap</label></h4>
                        <input type="text" class="form-control" id="NamaLengkap" placeholder="Masukan Nama Lengkap">
                    </div>
                    <div class="form-group">
                        <h4><label for="NamaPanggilan">Nama Panggilan</label></h4>
                        <input type="text" class="form-control" id="NamaPanggilan" placeholder="Masukan Nama Panggilan">
                    </div>
                    <div class="form-group">
                        <h4>Informasi Kelahiran</h4>
                        <label for="TempatLahir">Tempat Lahir</label>
                        <input type="text" class="form-control" id="TempatLahir" placeholder="Masukan Tempat Lahir">
                        <label for="TanggalLahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="TempatLahir" placeholder="Masukan Tempat Lahir">
                    </div>
                    <div class="form-group">
                        <h4><label for="jeniskelamin">Jenis Kelamin</label></h4>
                        <label class="radio-inline"><input name="jeniskelamin" type="radio">Laki-laki</label>
                        <label class="radio-inline"><input name="jeniskelamin" type="radio">Perempuan</label>
                    </div>
                    <div class="form-group">
                        <h4><label for="alamat">Alamat</label></h4>
                        <input type="text" class="form-control" id="alamat" placeholder="Masukan Alamat">
                    </div>
                    <div class="form-group">
                        <h4><label class="my-1 mr-2" for="negara">Negara</label></h4>
                        <select class="custom-select my-1 mr-sm-2" id="negara">
                          <option selected>Choose...</option>
                          <option value="1">Indo</option>
                          <option value="2">Malay</option>
                          <option value="3">Singa</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <h4><label class="my-1 mr-2" for="provinsi">Provinsi</label></h4>
                        <select class="custom-select my-1 mr-sm-2" id="provinsi">
                          <option selected>Choose...</option>
                          <option value="1">Jawa</option>
                          <option value="2">Madura</option>
                          <option value="3">Suma</option>
                        </select>
                   </div>
                   <div class="form-group">
                      <h4><label class="my-1 mr-2" for="kota">kota</label></h4>
                      <select class="custom-select my-1 mr-sm-2" id="kota">
                        <option selected>Choose...</option>
                        <option value="1">Surabya</option>
                        <option value="2">Sidoarjo</option>
                        <option value="3">Mojo</option>
                      </select>
                 </div>
                 <div class="form-group">
                    <h4><label for="KodePos">Kode Pos</label></h4>
                    <input type="number" class="form-control" id="KodePos" placeholder="Masukan Kode Pos">
                </div>
                <div class="form-group">
                    <h4><label for="Email">Email</label></h4>
                    <input type="email" class="form-control" id="KodePos" placeholder="masukan alamat email">
                </div>
                <div class="form-group">
                    <h4><label for="NoHP">No Handphone</label></h4>
                    <input type="tel" class="form-control" id="NoHP" placeholder="masukan nomer handphone">
                </div>
                <div class="form-group">
                    <h4><label class="my-1 mr-2" for="agama">Agama</label></h4>
                    <select class="custom-select my-1 mr-sm-2" id="agama">
                      <option selected>Choose...</option>
                      <option value="1">Islam</option>
                      <option value="2">Budha</option>
                      <option value="3">Hindu</option>
                      <option value="4">Kristen Katolik</option>
                      <option value="5">Kristen Protestan</option>
                    </select>
               </div>
               <div class="form-group">
                  <h4>Informasi ID Card</h4>
                  <label class="my-1 mr-2" for="IDCard">ID Card</label>
                  <select class="custom-select my-1 mr-sm-2" id="IDCard">
                    <option selected>Choose...</option>
                    <option value="1">KTP</option>
                    <option value="2">SIM</option>
                    <option value="3">Pelajar</option>
                  </select>
                  <label for="NoIDCard">NOMOR ID</label>
                  <input type="text" class="form-control" id="NoIDcard" placeholder="Masukan Nomer ID Card">
              </div>
              </div>
            </div> 
              </div>
            </div>
            <!--Identitas done-->
            <!--Pendidikan-->
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
                                  <th><h4>Start</h4></th>
                                  <th><h4>Ending</h4></th>
                              </tr>
                              <tr>
                                <th scope="row" colspan="11" class="th-button">
                                    <button type="button" class="btn btn-primary">
                                        <i class="fa fa-plus"></i>
                                      Tambah</button>  
                                </th>
                              </tr>
                          </table>
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
            <!--Pendidikan done-->
            <!--Keluarga -->
            <!--Keluarga done-->
            <!--Pekerjaan -->
            <!--Pekerjaan done-->
            <!--Minat-->
            <!--Minat done-->
            <!--Aktifitas-->
            <!--Aktifitas done-->
            <!--Lain-lain-->
            <!--Lain-lain done-->
            <!--Lampiran-->
            <!--Lampiran done-->
          </form>
        </div>
    </div>
  </div>      
</div>

<!-- Job Browse Section End -->
@endsection
@section('script')
<script>
    $('#tab li a').on('click', function (event) {
    event.preventDefault();
    
    $('.tab-active').removeClass('tab-active');
    $(this).parent().addClass('tab-active');
    $('.tabs-stage .tab-content').hide();
    $($(this).attr('href')).show();
    });
    $('#tab li a:first').trigger('click'); // Default
</script>     
@endsection
    

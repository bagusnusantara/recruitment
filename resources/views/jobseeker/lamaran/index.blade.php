@extends('jobseeker.template.index_content')

@section('content')

<!-- Job Browse Section Start -->
<div class="section">
  <div class="container">        
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
            <div id="identitas" class="inner-box my-resume tab-content" style="overflow:auto; height:80vh;">
                <div class="item">
                    <h2>Identitas</h2>
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
            <!--Identitas done-->
            <!--Pendidikan-->
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
    

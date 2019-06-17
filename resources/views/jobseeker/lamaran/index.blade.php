@extends('jobseeker.template.index_content')

@section('content')
<script src="//code.jquery.com/jquery-1.12.4.js"></script>
<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<!-- Job Browse Section Start -->
<div class="section">
  <div class="container">        
    <div class="row">
      <div class="col-lg-3 col-md-4 col-xs-12">
        <div class="right-sideabr">
          <h4>Data Lamaran</h4>
          <ul id="list-subject" class="list-item">
              <li><a data-toggle="tab"  class="list-group-item-action" href="#identitas">Identitas</a></li>
              <li><a data-toggle="tab"  class="list-group-item-action" href="#pendidikan">Pendidikan</a></li>
              <li><a data-toggle="tab"  class="list-group-item-action" href="#keluarga">Keluarga</a></li>
              <li><a data-toggle="tab"  class="list-group-item-action" href="#pekerjaan">Pekerjaan</a></li>
              <li><a data-toggle="tab"  class="list-group-item-action" href="#minat">Minat</a></li>
              <li><a data-toggle="tab"  class="list-group-item-action" href="#aktifitas">Aktifitas</a></li>
              <li><a data-toggle="tab"  class="list-group-item-action" href="#lainnya">Lainnya</a></li>
              <li><a data-toggle="tab"  class="list-group-item-action" href="#lampiran">Lampiran</a></li>
            </ul>
        </div>
      </div>
      <form>
      <div id="tabs" class="col-lg-9 col-md-8 col-xs-12 ">
        <div id="identitas"  class="inner-box my-resume" style="overflow:auto; height:80vh;">
                <div class="identitas item">
                  <h3>Identitas</h3>
                  <div class="form-group">
                      <h5><label for="NamaLengkap">Nama Lengkap</label></h5>
                      <input type="text" class="form-control" id="NamaLengkap" placeholder="Masukan Nama Lengkap">
                      <br>
                      <h5><label for="NamaPanggilan">Nama Panggilan</label></h5>
                      <input type="text" class="form-control" id="NamaPanggilan" placeholder="Masukan Nama Panggilan">
                      <br>
                      <h5><label for="TempatLahir">Tempat Lahir</label></h5>
                      <input type="text" class="form-control" id="TempatLahir" placeholder="Masukan Tempat Lahir">
                      <br>
                      <h5><label for="TanggalLahir">Tanggal Lahir</label></h5>
                      <input type="date" class="form-control" id="TempatLahir" placeholder="Masukan Tempat Lahir">
                      <br>
                      <h5><label for="jeniskelamin">Jenis Kelamin</label></h5>
                      <label class="radio-inline"><input name="jeniskelamin" type="radio">Laki-laki</label>
                      <label class="radio-inline"><input name="jeniskelamin" type="radio">Perempuan</label>
                      <br>
                      <br>
                      <h5><label for="alamat">Alamat</label></h5>
                      <input type="text" class="form-control" id="alamat" placeholder="Masukan Alamat">
                      <br>
                      <label class="my-1 mr-2" for="negara">Negara</label>
                      <select class="custom-select my-1 mr-sm-2" id="negara">
                        <option selected>Choose...</option>
                        <option value="1">Indo</option>
                        <option value="2">Malay</option>
                        <option value="3">Singa</option>
                      </select>
                      <label class="my-1 mr-2" for="provinsi">Provinsi</label>
                      <select class="custom-select my-1 mr-sm-2" id="provinsi">
                        <option selected>Choose...</option>
                        <option value="1">Jawa</option>
                        <option value="2">Madura</option>
                        <option value="3">Suma</option>
                      </select>
                    </div>
              </div>
      </div>
      <div id="pendidikan" class="inner-box my-resume" style="overflow:auto; height:80vh;">
          <div class="identitas item">
            <h3>Pendidikan</h3>
            <div class="form-group">
                <h5><label for="NamaLengkap">Nama Lengkap</label></h5>
                <input type="text" class="form-control" id="NamaLengkap" placeholder="Masukan Nama Lengkap">
                <br>
                <h5><label for="NamaPanggilan">Nama Panggilan</label></h5>
                <input type="text" class="form-control" id="NamaPanggilan" placeholder="Masukan Nama Panggilan">
                <br>
                <h5><label for="TempatLahir">Tempat Lahir</label></h5>
                <input type="text" class="form-control" id="TempatLahir" placeholder="Masukan Tempat Lahir">
                <br>
                <h5><label for="TanggalLahir">Tanggal Lahir</label></h5>
                <input type="date" class="form-control" id="TempatLahir" placeholder="Masukan Tempat Lahir">
                <br>
                <h5><label for="jeniskelamin">Jenis Kelamin</label></h5>
                <label class="radio-inline"><input name="jeniskelamin" type="radio">Laki-laki</label>
                <label class="radio-inline"><input name="jeniskelamin" type="radio">Perempuan</label>
                <br>
                <br>
                <h5><label for="alamat">Alamat</label></h5>
                <input type="text" class="form-control" id="alamat" placeholder="Masukan Alamat">
                <br>
                <label class="my-1 mr-2" for="negara">Negara</label>
                <select class="custom-select my-1 mr-sm-2" id="negara">
                  <option selected>Choose...</option>
                  <option value="1">Indo</option>
                  <option value="2">Malay</option>
                  <option value="3">Singa</option>
                </select>
                <label class="my-1 mr-2" for="provinsi">Provinsi</label>
                <select class="custom-select my-1 mr-sm-2" id="provinsi">
                  <option selected>Choose...</option>
                  <option value="1">Jawa</option>
                  <option value="2">Madura</option>
                  <option value="3">Suma</option>
                </select>
              </div>
        </div>
</div>
    </div>
  </div>      
</div>
</form>

<script>
    $( "#tabs" ).tabs();
</script>     
<!-- Job Browse Section End -->
@endsection

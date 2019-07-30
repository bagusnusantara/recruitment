<div id="identitas"  class="tab-content my-resume">
        <div class="inner-box">
          <!--identitas-->
          <div class="item">
              <h3>Identitas</h3>
          </div>
          <div class="inner-box" style="overflow:auto; height:80vh; overflow-y:scroll;">
              <div class="item">
              <div class="form-group">
                  <h4><label for="NIK">NIK</label></h4>
                    <input type="number" class="form-control is-invalid" id="NIK" placeholder="Masukan NIK">
                    <div class="invalid-feedback">
                      *Wajib Untuk diisi
                    </div>
              </div>
              <div class="form-group">
                  <h4><label for="NamaLengkap">Nama Lengkap</label></h4>
                    <input type="text" class="form-control is-invalid" id="NamaLengkap" placeholder="Masukan nama lengkap">
                    <div class="invalid-feedback">
                      *Wajib Untuk diisi
                    </div>
              </div>
              <div class="form-group">
                  <h4><label for="NamaPanggilan">Nama Panggilan</label></h4>
                    <input type="text" class="form-control is-invalid" id="NamaPanggilan" placeholder="Masukan nama panggilan">
                    <div class="invalid-feedback">
                      *Wajib Untuk diisi
                    </div>
              </div>
              <div class="form-group">
                  <h4>Informasi Kelahiran</h4>
                  <label for="TempatLahir">Tempat Lahir</label>
                  <input type="text" class="form-control" id="TempatLahir" placeholder="Masukan Tempat Lahir" value="">
                  <label for="TanggalLahir">Tanggal Lahir</label>
              <input type="date" class="form-control" id="TanggalLahir" value="">
              </div>
              <div class="form-group">
                  <h4><label class="my-1 mr-2" for="JenisKelamin">Jenis Kelamin</label></h4>
                  <select class="custom-select my-1 mr-sm-2" id="JenisKelamin">
                    <option value="0">Pilih . . .</option>
                    <option value="1">Laki-laki</option>
                    <option value="2">Perempuan</option>
                  </select>
              </div>
              <div class="form-group">
                  <h4><label for="Alamat">Alamat</label></h4>
                  <textarea class="form-control" rows="3"  id="Alamat"></textarea>
              </div>
              <div class="form-group">
                  <h4><label class="my-1 mr-2" for="Negara">Negara</label></h4>
                  <select class="custom-select my-1 mr-sm-2" id="Negara">
                    <option  value="0">Pilih . . .</option>
                    @foreach ($st_data["Negara"] as $item)
                    <option value="{{$item->id}}" >{{$item->negara}}</option>
                    @endforeach
                  </select>
              </div>
              <div class="form-group">
                  <h4><label class="my-1 mr-2" for="Provinsi" >Provinsi</label></h4>
                  <select class="custom-select my-1 mr-sm-2" id="Provinsi" >
                      <option  value="0">Pilih . . .</option>
                      @foreach ($st_data["Provinsi"] as $item)
                      <option value="{{$item->id}}" >{{$item->name}}</option>
                      @endforeach
                  </select>
             </div>
             <div class="form-group">
                <h4><label class="my-1 mr-2" for="Kota">Kota</label></h4>
                <select class="custom-select my-1 mr-sm-2" id="Kota" >
                    <option value="0">Pilih . . .</option>
                    @foreach ($st_data["Kabkota"] as $item)
                    <option value="{{$item->id}}" >{{$item->name}}</option>
                    @endforeach
                </select>
           </div>
            <div class="form-group">
                <h4><label class="my-1 mr-2" for="Kecamatan">Kecamatan</label></h4>
                <select class="custom-select my-1 mr-sm-2" id="Kecamatan">
                    <option value="0">Pilih . . .</option>
                    @foreach ($st_data["Kecamatan"] as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
           </div>
           <div class="form-group">
              <h4><label for="KodePos">Kode Pos</label></h4>
              <input type="number" class="form-control" id="KodePos" placeholder="Masukan Kode Pos" value="">
          </div>
          <div class="form-group">
             <h4><label for="IDUser">ID User</label></h4>
             <input type="hidden" class="form-control" name="users_id" placeholder="Masukan Kode Pos" value="{{\Auth::user()->id}}">
          </div>
          <div class="form-group">
              <h4><label for="Email">Email</label></h4>
              <input type="email" class="form-control" id="Email" placeholder="Masukan alamat email" value="">
          </div>
          <div class="form-group">
              <h4><label for="NoTelp">No Telephone</label></h4>
              <input type="tel" class="form-control" id="NoTelp" placeholder="Masukan nomer telephone" value="">
          </div>
          <div class="form-group">
              <h4><label for="NoHP">No Handphone</label></h4>
              <input type="tel" class="form-control" id="NoHP" placeholder="Masukan nomer handphone" value="">
          </div>
          <div class="form-group">
              <h4><label class="my-1 mr-2" for="Agama">Agama</label></h4>
              <select class="custom-select my-1 mr-sm-2" id="Agama">
                <option value="0">Pilih . . .</option>
                <option value="1">Islam</option>
                <option value="2">Kristen Protestan</option>
                <option value="3">Kristen Katolik</option>
                <option value="4">Hindu</option>
                <option value="5">Budha</option>
                <option value="6">Kong Hu Chu</option>
              </select>
         </div>
         <div class="form-group">
            <h4>Informasi ID Card</h4>
            <label class="my-1 mr-2" for="IDCard">ID Card</label>
            <select class="custom-select my-1 mr-sm-2" id="IDCard">
                <option value="0">Pilih . . .</option>
              @foreach ($st_data["Idcard"] as $item)
                    <option value="{{$item->id}}">{{$item->kartu}}</option>
              @endforeach
            </select>
            <label for="NoIDCard">NOMOR ID</label>
            <input type="text" class="form-control" id="NoIDCard" placeholder="Masukan Nomer ID Card" value="">
        </div>
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

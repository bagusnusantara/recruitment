<div id="identitas"  class="tab-content my-resume">
        <div class="inner-box">
          <!--identitas-->
          <div class="item">
              <h3>Identitas</h3>
          </div>
          <div class="inner-box" style="overflow:auto; height:80vh; overflow-y:scroll;">
              <div class="item"> 
              <form> 
              <div class="form-group">
                  <h4><label for="NamaLengkap">Nama Lengkap</label></h4>
                  <input type="text" class="form-control  is-invalid" id="NamaLengkap" placeholder="Masukan Nama Lengkap" value="{{$dataUser->nama_lengkap}}">
              </div>
              <div class="form-group">
                  <h4><label for="NamaPanggilan">Nama Panggilan</label></h4>
                  <input type="text" class="form-control" id="NamaPanggilan" placeholder="Masukan Nama Panggilan" value="{{$dataUser->nama_panggilan}}">
              </div>
              <div class="form-group">
                  <h4>Informasi Kelahiran</h4>
                  <label for="TempatLahir">Tempat Lahir</label>
                  <input type="text" class="form-control" id="TempatLahir" placeholder="Masukan Tempat Lahir" value="{{$dataUser->tempat_lahir}}">
                  <label for="TanggalLahir">Tanggal Lahir</label>
              <input type="date" class="form-control" id="TanggalLahir" value="{{date("Y-m-d",strtotime($dataUser->tanggal_lahir))}}">
              </div>
              <div class="form-group">
                  <h4><label class="my-1 mr-2" for="JenisKelamin">Jenis Kelamin</label></h4>
                  <select class="custom-select my-1 mr-sm-2" id="JenisKelamin">
                    <option {{(isset($dataUser->jenis_kelamin))? "selected" : ""}} value="0">Pilih . . .</option>
                    <option {{($dataUser->jenis_kelamin=='Laki-laki')? "selected" : ""}} value="1">Laki-laki</option> 
                    <option {{($dataUser->jenis_kelamin=='Perempuan')? "selected" : ""}} value="2">Perempuan</option> 
                  </select>
              </div>
              <div class="form-group">
                  <h4><label for="Alamat">Alamat</label></h4>
                  <textarea class="form-control" rows="3"  id="Alamat">
                    {{$dataUser->alamat}}
                  </textarea>
              </div>
              <div class="form-group">
                  <h4><label class="my-1 mr-2" for="Negara">Negara</label></h4>
                  <select class="custom-select my-1 mr-sm-2" id="Negara">
                    <option selected value="0">Pilih . . .</option>
                    @foreach ($st_data["Negara"] as $item)
                    <option value="{{$item->id}}">{{$item->negara}}</option>    
                    @endforeach
                  </select>
              </div>
              <div class="form-group">
                  <h4><label class="my-1 mr-2" for="Provinsi" >Provinsi</label></h4>
                  <select class="custom-select my-1 mr-sm-2" id="Provinsi" disabled>
                    <option selected value="0">Pilih . . .</option>
                  </select>
             </div>
             <div class="form-group">
                <h4><label class="my-1 mr-2" for="Kota">Kota</label></h4>
                <select class="custom-select my-1 mr-sm-2" id="Kota" disabled>
                  <option selected value="0">Pilih . . .</option>
                </select>
           </div>
            <div class="form-group">
                <h4><label class="my-1 mr-2" for="Kecamatan">Kecamatan</label></h4>
                <select class="custom-select my-1 mr-sm-2" id="Kecamatan" disabled>
                  <option selected value="0">Pilih . . .</option>
                </select>
           </div>
           <div class="form-group">
              <h4><label for="KodePos">Kode Pos</label></h4>
              <input type="number" class="form-control" id="KodePos" placeholder="Masukan Kode Pos" value="{{$dataUser->kode_pos}}">
          </div>
          <div class="form-group">
              <h4><label for="Email">Email</label></h4>
              <input type="email" class="form-control" id="Email" placeholder="Masukan alamat email">
          </div>
          <div class="form-group">
              <h4><label for="NoTelp">No Telephone</label></h4>
              <input type="tel" class="form-control" id="NoTelp" placeholder="Masukan nomer telephone" value="{{$dataUser->no_telp}}">
          </div>
          <div class="form-group">
              <h4><label for="NoHP">No Handphone</label></h4>
              <input type="tel" class="form-control" id="NoHP" placeholder="Masukan nomer handphone" value="{{$dataUser->no_hp}}">
          </div>
          <div class="form-group">
              <h4><label class="my-1 mr-2" for="Agama">Agama</label></h4>
              <select class="custom-select my-1 mr-sm-2" id="Agama">
                <option {{(isset($dataUser->agama))? "selected" : ""}} value="0">Pilih . . .</option>
                <option {{($dataUser->agama=='Islam')? "selected" : ""}} value="1">Islam</option>
                <option {{($dataUser->agama=='Kristen Protestan')? "selected" : ""}} value="2">Kristen Protestan</option>
                <option {{($dataUser->agama=='Kristen Katolik')? "selected" : ""}} value="3">Kristen Katolik</option>
                <option {{($dataUser->agama=='Hindu')? "selected" : ""}} value="4">Hindu</option>
                <option {{($dataUser->agama=='Budha')? "selected" : ""}} value="5">Budha</option>
                <option {{($dataUser->agama=='Kong Hu Chu')? "selected" : ""}} value="6">Kong Hu Chu</option>
              </select>
         </div>
         <div class="form-group">
            <h4>Informasi ID Card</h4>
            <label class="my-1 mr-2" for="IDCard">ID Card</label>
            <select class="custom-select my-1 mr-sm-2" id="IDCard">
              <option selected value="0">Pilih . . .</option>
              @foreach ($st_data["Idcard"] as $item)
                    <option value="{{$item->id}}">{{$item->kartu}}</option>    
              @endforeach
            </select>
            <label for="NoIDCard">NOMOR ID</label>
            <input type="text" class="form-control" id="NoIDCard" placeholder="Masukan Nomer ID Card">
        </div>
        </div>
      </div>
    </form>
    <div class="item">
      <div class="mr-0">
        <button type="button" class="btn btn-secondary btn-lg">Reset</button>
        <button type="button" class="btn btn-primary btn-lg" id="submitIdentitas">Simpan</button>
      </div>
    </div>
  </div>
</div>
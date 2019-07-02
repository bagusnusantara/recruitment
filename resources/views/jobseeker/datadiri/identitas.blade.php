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
                  <input type="text" class="form-control  is-invalid" id="NamaLengkap" placeholder="Masukan Nama Lengkap" >
                  <div class="invalid-feedback" style="display:none;">
                      Please provide a valid zip.
                  </div>
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
                  <input type="date" class="form-control" id="TanggalLahir">
              </div>
              <div class="form-group">
                  <h4><label class="my-1 mr-2" for="JenisKelamin">Jenis Kelamin</label></h4>
                  <select class="custom-select my-1 mr-sm-2" id="JenisKelamin">
                    <option selected value="0">Pilih . . .</option>
                    @foreach ($st_data["JenisKelamin"] as $item)
                    <option value="{{$item->id}}">{{$item->kelamin}}</option>    
                    @endforeach
                  </select>
              </div>
              <div class="form-group">
                  <h4><label for="Alamat">Alamat</label></h4>
                  <textarea class="form-control" rows="3"  id="Alamat"></textarea>
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
                <h4><label class="my-1 mr-2" for="Kota">Kecamatan</label></h4>
                <select class="custom-select my-1 mr-sm-2" id="Kota" disabled>
                  <option selected value="0">Pilih . . .</option>
                </select>
           </div>
           <div class="form-group">
              <h4><label for="KodePos">Kode Pos</label></h4>
              <input type="number" class="form-control" id="KodePos" placeholder="Masukan Kode Pos">
          </div>
          <div class="form-group">
              <h4><label for="Email">Email</label></h4>
              <input type="email" class="form-control" id="Email" placeholder="Masukan alamat email">
          </div>
          <div class="form-group">
              <h4><label for="NoHP">No Handphone</label></h4>
              <input type="tel" class="form-control" id="NoHP" placeholder="Masukan nomer handphone">
          </div>
          <div class="form-group">
              <h4><label class="my-1 mr-2" for="Agama">Agama</label></h4>
              <select class="custom-select my-1 mr-sm-2" id="Agama">
                <option selected value="0">Pilih . . .</option>
                @foreach ($st_data["Agama"] as $item)
                    <option value="{{$item->id}}">{{$item->agama}}</option>    
                @endforeach
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
<div id="identitas"  class="tab-content my-resume">
        <div class="inner-box">
          <!--identitas-->
          <div class="item">
              <h3>Identitas</h3>
          </div>
          <div class="inner-box" style="overflow:auto; height:80vh;">
              <div class="item">  
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
                  <h4><label class="my-1 mr-2" for="Kelamin">Jenis Kelamin</label></h4>
                  <select class="custom-select my-1 mr-sm-2" id="Kelamin">
                    <option selected value="0">Pilih . . .</option>
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
                    <option selected value="0">Pilih . . .</option>
                    <option value="1">Indo</option>
                    <option value="2">Malay</option>
                    <option value="3">Singa</option>
                  </select>
              </div>
              <div class="form-group">
                  <h4><label class="my-1 mr-2" for="Provinsi">Provinsi</label></h4>
                  <select class="custom-select my-1 mr-sm-2" id="Provinsi">
                    <option selected value="0">Pilih . . .</option>
                    <option value="1">Jawa</option>
                    <option value="2">Madura</option>
                    <option value="3">Suma</option>
                  </select>
             </div>
             <div class="form-group">
                <h4><label class="my-1 mr-2" for="Kota">kota</label></h4>
                <select class="custom-select my-1 mr-sm-2" id="Kota">
                  <option selected value="0">Pilih . . .</option>
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
              <input type="email" class="form-control" id="Email" placeholder="masukan alamat email">
          </div>
          <div class="form-group">
              <h4><label for="NoHP">No Handphone</label></h4>
              <input type="tel" class="form-control" id="NoHP" placeholder="masukan nomer handphone">
          </div>
          <div class="form-group">
              <h4><label class="my-1 mr-2" for="Agama">Agama</label></h4>
              <select class="custom-select my-1 mr-sm-2" id="Agama">
                <option selected value="0">Pilih . . .</option>
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
              <option selected value="0">Pilih . . .</option>
              <option value="1">KTP</option>
              <option value="2">SIM</option>
              <option value="3">Pelajar</option>
            </select>
            <label for="NoIDCard">NOMOR ID</label>
            <input type="text" class="form-control" id="NoIDCard" placeholder="Masukan Nomer ID Card">
        </div>
        </div>
      </div> 
    <div class="item">
      <div class="mr-0">
        <button type="button" class="btn btn-secondary btn-lg">Reset</button>
        <button type="button" class="btn btn-primary btn-lg" id="submitIdentitas">Simpan</button>
      </div>
    </div>
  </div>
</div>
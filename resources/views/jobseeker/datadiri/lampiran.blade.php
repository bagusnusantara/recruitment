<div id="lampiran"  class="tab-content my-resume">
    <div class="inner-box">
        <div class="item">
            <h3>Lampiran</h3>
        </div>
        <div class="inner-box" style="overflow:auto; height:60vh;">
            <div class="item">
                <!--keluarga-->
                
                <form id="formlampiran" enctype="multipart/form-data">
                    <div class="form-group">
                        <h4>Foto Pelamar</h4>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" name="fotopelamar" class="custom-file-input" id="fotopelamar">
                            <label class="custom-file-label" for="fotopelamar">Choose file</label>
                          </div>
                        </div>
                      </div>
                      <div class="card" id="cardfotopelamar">
                        <div class="card-body">
                          <label>...</label>
                          <button class="btn-m btn-primary">Preview</button>
                          <button class="btn-m btn-danger"><i class="fa fa-trash"></i></button>
                        </div>
                      </div>

                      <br>
                      <div class="form-group">
                          <h4>Scan Ijazah</h4>
                          <div class="input-group">
                            <div class="custom-file">
                              <input type="file" name="scanijazah" class="custom-file-input" id="scanijazah">
                              <label class="custom-file-label" for="scanijazah" >Choose file</label>
                            </div>
                          </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <h4>Scan Transkrip Nilai</h4>
                            <div class="input-group">
                                <div class="custom-file">
                                  <input type="file" name="scantranskrip" class="custom-file-input" id="scantranskrip">
                                  <label class="custom-file-label" for="scantranskrip">Choose file</label>
                                </div>
                              </div>
                          </div>
                          <br>
                          <div class="form-group">
                              <h4>Scan Referensi Kerja</h4>
                              <div class="input-group">
                                  <div class="custom-file">
                                    <input type="file" name="scanreferensi" class="custom-file-input" id="scanreferensi">
                                    <label class="custom-file-label" for="scanreferensi">Choose file</label>
                                  </div>
                                </div>
                            </div>
                    </form>
                <!--keluarga end-->
            </div>
        </div>
          <div class="item">
            <div class="mr-0">
              <button type="button" id="submitLampiran" class="btn btn-primary btn-lg">
                  <a>Simpan</a>
                  <img id="loader" src='{{asset('img/loader.gif') }}' width='20px' height='20px' style="display:none;">
              </button>
            </div>
          </div>
    </div>
</div>
        
        
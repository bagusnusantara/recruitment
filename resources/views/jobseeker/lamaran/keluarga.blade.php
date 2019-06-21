<div id="keluarga"  class="tab-content my-resume">
    <div class="inner-box">
      <div class="item">
        <h3>Status Perkawinan</h3>
      </div>
      <div class="inner-box" style="overflow:auto; height:50vh;">
        <div class="item">
          <!--keluarga-->
            <div class="form-group">
            <form id="statusperkawinan">
              <h4><label class="my-1 mr-2" for="status">Mengetahui Informasi :</label></h4>
              <select class="custom-select my-1 mr-sm-2" id="status">
                <option selected value="0">Choose..</option>
                <option value="1">Lajang</option>
                <option value="2">Tunangan</option>
                <option value="3">Menikah</option>
                <option value="4">Bercerai</option>    
              </select>
            </div>
            <div class="form-group">
                <h4><label class="my-1 mr-2" for="statustahun">Mengetahui Informasi :</label></h4>
                <input type="date" class="form-control" id="statustahun" placeholder="Sejak Tahun" >
            </div>
        </form>
          <!--keluarga end-->
                </div>
              </div>
    <div class="item">
    <div class="mr-0">
        <button type="button" class="btn btn-secondary btn-lg">Reset</button>
        <button type="button" class="btn btn-primary btn-lg">Simpan</button>
    </div>
    </div>
  </div>
    <script>
        $("#statusperkawinan #status").change(function(){
            if(this.value==1 || this.value==0){
                $("#statustahun").prop("readonly", true);
                $("#statustahun").val('');
            }else{
                $("#statustahun").prop("readonly", false);
            }
        });
    </script>
</div>
    
    
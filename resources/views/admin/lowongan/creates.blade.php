@extends('template.index')

@section('main')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Create Lowongan Pekerjaan</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{url('/dashboard')}}">Home</a>
                </li>
                <li class="">
                    <strong>Lowongan Pekerjaan</strong>
                </li>
                <li class="active">
                    <strong>Create</strong>
                </li>
            </ol>

        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight">

      <div class="row">
          <div class="col-lg-12">
              <div class="ibox float-e-margins">
                  <div class="ibox-title">
                      <h5>Insert Lowongan Pekerjaan</h5>
                      <div class="ibox-tools">
                          <a class="collapse-link">
                              <i class="fa fa-chevron-up"></i>
                          </a>
                          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                              <i class="fa fa-wrench"></i>
                          </a>
                          <ul class="dropdown-menu dropdown-user">
                              <li><a href="#">Config option 1</a>
                              </li>
                              <li><a href="#">Config option 2</a>
                              </li>
                          </ul>
                          <a class="close-link">
                              <i class="fa fa-times"></i>
                          </a>
                      </div>
                  </div>
                  <div class="ibox-content">
                    <form method="POST" id="postForm" action="{{url('/admin/lowonganpekerjaan/store')}}" class="form-horizontal" enctype="multipart/form-data" onsubmit="return postForm()">
                        @csrf
                            <div class="form-group"><label class="col-sm-2 control-label">Job Tittle</label>
                                <div class="col-sm-10"><input type="text" class="form-control" name="job_tittle"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">Client</label>

                                <div class="col-sm-10">
                                  <select class="form-control m-b" name="md_client_id">
                                    @foreach($md_client as $client)
                                    <option value="{{$client->id}}">{{$client->nama_client}}</option>
                                    @endforeach
                                  </select>
                                </div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">Kategori Pekerjaan</label>
                                <div class="col-sm-10">
                                    <select class="form-control m-b" name="st_kategori_pekerjaan">
                                      @foreach($st_kategori_pekerjaan as $kategori)
                                      <option value="{{$kategori->id}}">{{$kategori->deskripsi}}</option>
                                      @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">Spesialisasi Pekerjaan</label>
                                <div class="col-sm-10">
                                    <select class="form-control m-b" name="st_spesialisasi_pekerjaan">
                                      @foreach($st_spesialisasi_pekerjaan as $spesialisasi)
                                      <option value="{{$spesialisasi->id}}">{{$spesialisasi->deskripsi}}</option>
                                      @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <h4><label class="my-1 mr-2" for="Negara">Negara</label></h4>
                                <select class="custom-select my-1 mr-sm-2" id="Negara">
                                  <option {{(!isset($dataUser->negara) || $dataUser->negara == "0" )? "selected" : ""}} value="0">Pilih . . .</option>
                                  @foreach ($st_data["Negara"] as $item)
                                  <option value="{{$item->id}}" {{($dataUser->negara == $item->id)? "selected" : ""}}>{{$item->negara}}</option>
                                  @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <h4><label class="my-1 mr-2" for="Provinsi" >Provinsi</label></h4>
                                <select class="custom-select my-1 mr-sm-2" id="Provinsi" {{(!isset($dataUser->negara) || $dataUser->negara == "0" )? "disabled" : ""}}>
                                    <option {{(!isset($dataUser->provinsi) || $dataUser->provinsi == "0" )? "selected" : ""}} value="0">Pilih . . .</option>
                                    @foreach ($st_data["Provinsi"] as $item)
                                    <option value="{{$item->id}}" {{($dataUser->provinsi == $item->id)? "selected" : ""}}>{{$item->name}}</option>
                                    @endforeach
                                </select>
                           </div>
                           <div class="form-group">
                              <h4><label class="my-1 mr-2" for="Kota">Kota</label></h4>
                              <select class="custom-select my-1 mr-sm-2" id="Kota" {{(!isset($dataUser->provinsi) || $dataUser->provinsi == "0" )? "disabled" : ""}}>
                                  <option {{(!isset($dataUser->kabkota) || $dataUser->kabkota == "0" )? "selected" : ""}} value="0">Pilih . . .</option>
                                  @foreach ($st_data["Kabkota"] as $item)
                                  <option value="{{$item->id}}" {{($dataUser->kabkota == $item->id)? "selected" : ""}}>{{$item->name}}</option>
                                  @endforeach
                              </select>
                         </div>
                          <div class="form-group">
                              <h4><label class="my-1 mr-2" for="Kecamatan">Kecamatan</label></h4>
                              <select class="custom-select my-1 mr-sm-2" id="Kecamatan" {{(!isset($dataUser->kabkota) || $dataUser->kecamatan == "0" )? "disabled" : ""}}>
                                  <option {{!(isset($dataUser->kecamatan) || $dataUser->kecamatan == "0" )? "selected" : ""}} value="0">Pilih . . .</option>
                                  @foreach ($st_data["Kecamatan"] as $item)
                                  <option value="{{$item->id}}" {{($dataUser->kecamatan == $item->id)? "selected" : ""}}>{{$item->name}}</option>
                                  @endforeach
                              </select>
                         </div>
                            <div class="form-group"><label class="col-sm-2 control-label">Provinsi</label>
                                <div class="col-sm-10">
                                    <select class="form-control m-b" name="st_alamat_provinsi">
                                      @foreach($st_alamat_provinsi as $provinsi)
                                      <option value="{{$provinsi->id_provinsi}}">{{$provinsi->deskripsi}}</option>
                                      @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">Kabupaten/Kota</label>
                                <div class="col-sm-10">
                                    <select class="form-control m-b" name="st_alamat_kabkota">
                                      @foreach($st_alamat_kabkota as $kabkota)
                                      <option value="{{$kabkota->id}}">{{$kabkota->deskripsi}}</option>
                                      @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group" id="data_1">
                                <label class="col-sm-2 control-label">Start Date</label>
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="" name"start_date">
                                </div>
                            </div>
                            <div class="form-group" id="data_1">
                                <label class="col-sm-2 control-label">End Date</label>
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="" name"end  _date">
                                </div>
                            </div>

                            <div class="form-group"><label class="col-sm-2 control-label">Persyaratan</label>
                                    <fieldset>
                                        <p class="container">
                                          <textarea class="input-block-level" id="summernote" name="persyaratan" rows="8">
                                          </textarea>
                                        </p>
                                     </fieldset>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">Deskripsi Pekerjaan</label>
                                    <fieldset>
                                        <p class="container">
                                          <textarea class="input-block-level" id="summernote2" name="deskripsi_pekerjaan" rows="8">
                                          </textarea>
                                        </p>
                                     </fieldset>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">Komposisi Tes</label>
                                    <div class="col-sm-10">
                                        <div><label> <input type="checkbox" value="">Psikotes</label></div>
                                    </div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">Komposisi Tes</label>

                                    <div class="col-sm-10">
                                        <div class="i-checks"><label> <input type="checkbox" value="" name="st_psikotes"> <i></i> Psikotes</label></div>
                                    </div>
                                </div>

                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-white" type="submit">Cancel</button>
                                    <button class="btn btn-primary" type="submit">Save changes</button>
                                </div>
                            </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>


    </div>


</div>
</div>



</div>
</div>


@include('template.footer')
<!-- SUMMERNOTE -->
   <script src="{{asset('inspinia/js/plugins/summernote/summernote.min.js') }}"></script>

   <script>
      //  $(document).ready(function(){
      //
      //      $('.summernote').summernote({
      //        height: 200,
      //      });
      //
      // });
      $(document).ready(function() {
      	$('#summernote').summernote({
      		height: "200px",
          width : "800px"
      	});
      });
      $(document).ready(function() {
      	$('#summernote2').summernote({
      		height: "200px",
          width : "800px"
      	});
      });
      var postForm = function() {
	    var persyaratan = $('textarea[name="persyaratan"]').html($('#summernote').code());
      var deskripsi_pekerjaan = $('textarea[name="deskripsi_pekerjaan"]').html($('#summernote2').code());
      }
      $('#data_1 .input-group.date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });

   </script>
   <!-- iCheck -->
    <script src="{{ asset('inspinia/js/plugins/iCheck/icheck.min.js') }}"></script>
        <script>
            $(document).ready(function () {
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                });
            });
        </script>


@endsection

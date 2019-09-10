@extends('template.index')

@section('main')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Setup UMK</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{url('/dashboard')}}">Home</a>
                </li>
                <li class="active">
                    <strong>Setup UMK</strong>
                </li>
            </ol>

        </div>
    </div>


    <div class="wrapper wrapper-content animated fadeInRight">


        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Edit Tunjangan Jabatan</h5>
                    </div>
                    <div class="ibox-content">
                      <div class="box-body">
                      @foreach($st_tunj_jabatan as $datas)
                      <form role="form" method="POST" action=" {{url('/hrd/setup/tunjanganjabatan/update/{id}')}}" class="form">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" id="id" value="" />
                          <input type="hidden" name="uukode_jabatan" id="uukode_jabatan" value="{{$datas->kode_jabatan}}" />
                          <input type="hidden" name="uukode_site" id="uukode_site" value="{{$datas->kode_site}}" />
                          <div class="form-group row">
                            <div class="form-group"><label class="col-sm-4 control-label">Kode Jabatan</label>
                              <div class="col-sm-8">
                                 <select class="form-control chosen-select-width" name="kode_jabatan" id="kode_jabatan" disabled>
                                        <option value="{{$datas->kode_jabatan}}" selected disabled>{{$datas->Deskripsi}}</option>
                                         @foreach($st_jabatan as $data)
                                        <option value="{{ $data->kode }}">  {{ $data->kode }} - {{ $data->Deskripsi }}</option>
                                         @endforeach
                                  </select>
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="form-group"><label class="col-sm-4 control-label">Nama Lokasi kerja</label>
                              <div class="col-sm-8">
                                 <select class="form-control chosen-select-width" name="kode_site" id="kode_site" disabled>
                                        <option value="{{$datas->kode_site}}" selected disabled>{{$datas->nama_client}}</option>
                                         @foreach($md_client as $data)
                                        <option value="{{ $data->id }}">  {{ $data->nama_client }}</option>
                                         @endforeach
                                  </select>
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="form-group"><label class="col-sm-4 control-label">Tunjangan Jabatan</label>
                                <div class="col-sm-8"><input type="number" value="{{$datas->tunj_jabatan}}" step="any" class="form-control" name="tunjangan_jabatan" id="tunjangan_jabatan"></div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="form-group"><label class="col-sm-4 control-label">Tanggal Berlaku</label>
                                <div class="col-sm-8"><input type="text" value="{{$datas->tgl_berlaku}}" class="form-control date input-sm" name="tanggal_berlaku" id="tanggal_berlaku"></div>
                            </div>
                          </div>
 
                          </div>
                          <div class="box-footer">
                            <button type="submit" class="btn btn-primary">update</button>
                          </div>
                          
                        </form>
                        @endforeach
                      
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


@include('template.footer')

<!-- Page-Level Scripts -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
<script>
    $(document).ready(function(){

      //-------------
      $('.date').datepicker({
          autoclose: true,
          todayHighlight: true,
          format: 'yyyy-mm-dd'
      });

      $('.chosen-select-width').chosen();


    });

</script>


@endsection

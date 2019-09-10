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
                        <h5>Edit UMK</h5>
                    </div>
                    <div class="ibox-content">
                      <div class="box-body">
                      @foreach($umk as $datas)
                      <form role="form" method="POST" action=" {{url('/hrd/setup/umk/update/{id}')}}" class="form">
                        {{ csrf_field() }} 
                          <input type="hidden" name="id_umk" id="id_umk" value="{{$datas->id}}" />
                            <div class="form-group row">
                              <div class="form-group"><label class="col-sm-4 control-label">Tanggal Mulai Berlaku</label>
                                  <div class="col-sm-8"><input type="text" class="form-control date input-sm" name="tanggal_umk" id="tanggal_umk" value="{{ $datas->tanggal }}"></div>
                              </div>
                            </div>
                            <div class="form-group row">
                              <div class="form-group"><label class="col-sm-4 control-label">Nama Client</label>
                                <div class="col-sm-8">
                                   <select class="form-control chosen-select-width" name="md_client_id_umk" id="md_client_id_umk">
                                          <option value="{{$datas->md_client_id}}" selected>{{$datas->nama_client}}</option>
                                           @foreach($st_md_client as $data)
                                          <option value="{{ $data->id }}">{{ $data->nama_client }}</option>
                                           @endforeach
                                    </select>
                                </div>
                              </div>
                            </div>
                            <div class="form-group row">
                              <div class="form-group"><label class="col-sm-4 control-label">UMK</label>
                                  <div class="col-sm-8"><input type="number" value="{{$datas->umk}}" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control" name="umk_umk" id="umk_umk"></div>
                              </div>
                            </div>
                            <div class="form-group row">
                              <div class="form-group"><label class="col-sm-4 control-label">UMK BPJS Sehat</label>
                                  <div class="col-sm-8"><input type="number" value="{{$datas->umk_bpjs_sehat}}" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control" name="umk_bpjs_sehat" id="umk_bpjs_sehat"></div>
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

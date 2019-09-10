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
                        <h5>Edit Periode Cutoff gaji</h5>
                    </div>
                    <div class="ibox-content">
                      <div class="box-body">
                      @foreach($st_cutoff_gaji as $datas)
                      <form role="form" method="POST" action=" {{url('/hrd/setup/periodecutoffgaji/update/')}}" class="form">
                        {{ csrf_field() }}
                          <input type="hidden" name="id" id="id" value="" />
                          <input type="hidden" name="uubulan" id="uubulan" value="{{$datas->bln}}" />
                          <input type="hidden" name="uutahun" id="uutahun" value="{{$datas->thn}}" />
                          <div class="form-group row">
                            <div class="form-group"><label class="col-sm-4 control-label">Bulan</label>
                              <div class="col-sm-8">
                              <select class="form-control chosen-select-width" name="bulan" id="bulan" disabled>
                                        <option value="{{$datas->bln}}" disabled>{{$datas->bln}}</option>
                                         @for ($i = 1; $i <= 12; $i++)
                                           @php $nol; @endphp
                                           @if ($i >= 1 && $i <=9)
                                              <?php $nol = "0"; ?>
                                              @else
                                                <?php $nol = ""; ?>
                                           @endif
                                        <option value="{{ $nol.$i }}"> {{ $nol.$i }}</option>
                                         @endfor
                              </select>
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="form-group"><label class="col-sm-4 control-label">Tahun</label>
                              <div class="col-sm-8">
                              <select class="form-control chosen-select-width" name="tahun" id="tahun" disabled>
                                        <option value="{{$datas->thn}}" disabled>{{$datas->thn}}</option>
                                         @for ($i = 1999; $i <= 2050; $i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                         @endfor
                              </select>
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="form-group"><label class="col-sm-4 control-label">Start Date</label>
                              <div class="col-sm-8">
                                 <input type="text" id="sdate" name="sdate" value="{{$datas->sd_prd}}" class="form-control date">
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="form-group"><label class="col-sm-4 control-label">End Date</label>
                              <div class="col-sm-8">
                                 <input type="text" id="edate" name="edate" value="{{$datas->ed_prd}}" class="form-control date">
                              </div>
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



    });

</script>


@endsection

@extends('template.index')

@section('main')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Setup Periode Cut Off Gaji</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{url('/dashboard')}}">Home</a>
                </li>
                <li class="active">
                    <strong>Setup Periode Cut Off Gaji</strong>
                </li>
            </ol>

        </div>
    </div>


    <div class="wrapper wrapper-content animated fadeInRight">


        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Setup Periode Cut Off Gaji</h5>

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
                        <div class="text-right">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal5">Tambah Periode Cut Off Gaji</button>
                        </div>
                        <div class="modal inmodal fade" id="myModal5" tabindex="-1" role="dialog"  aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title">Tambah Periode Cut Off gaji</h4>
                                    </div>
                                    <div class="modal-body">
                                      <form method="POST" action="{{url('/hrd/setup/periodecutoffgaji/store')}}" class="form-horizontal" enctype="multipart/form-data">
                                            @csrf
                                            @include('hrd.setup.periodecutoffgaji.form')
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <table class="table table-striped table-bordered table-hover dataTables-client" style="width: 100%">
                            <thead>
                            <tr>
                              <th class="text-center">No</th>
                              <th class="text-center">Bulan</th>
                              <th class="text-center">Tahun</th>
                              <th class="text-center">Start Date</th>
                              <th class="text-center">End Date</th>
                              <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                              @php
                								$i=1;
                							@endphp
                              @foreach($st_cutoff_gaji as $u)

                              <tr>
                                  <td class="text-center">{{$i}}</td>
                                  <td>{{$u->bln}}</td>
                                  <td><center>{{$u->thn}}</center></td>
                                  <td><center>{{$u->sd_prd}}</center></td>
                                  <td><center>{{$u->ed_prd}}</center></td>
                                  <td class="text-center">
                                    <button class="btn btn-default btn-circle"
                                          data-bulan="{{$u->bln}}"
                                          data-tahun="{{$u->thn}}"
                                          data-sdprd="{{$u->sd_prd}}"
                                          data-edprd="{{$u->ed_prd}}"
                                          data-toggle="modal" data-target="#show"><i class="fa fa-eye"></i>
                                    </button>
                                    <button class="btn btn-default btn-circle"
                                          data-bulan="{{$u->bln}}"
                                          data-tahun="{{$u->thn}}"
                                          data-sdprd="{{$u->sd_prd}}"
                                          data-edprd="{{$u->ed_prd}}"
                                          data-toggle="modal" data-target="#edit"><i class="fa fa-pencil-square-o"></i>
                                    </button>
                                    <button class="btn btn-default btn-circle"
                                          data-bulan="{{$u->bln}}"
                                          data-tahun="{{$u->thn}}"
                                          data-sdprd="{{$u->sd_prd}}"
                                          data-edprd="{{$u->ed_prd}}"
                                          data-toggle="modal" data-target="#delete"><i class="fa fa-trash"></i>
                                    </button>
                                  </td>

                                  
                              @php
                								$i++;
                							@endphp
                              @endforeach
                                </tr>
                          </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
{{-- Delete Data --}}
<div class="modal inmodal fade" id="delete" tabindex="-1" role="dialog"  aria-hidden="true">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title">Delete Confirmation</h4>
              </div>
              <div class="modal-body">
              <form method="POST" action="{{ url('/hrd/setup/periodecutoffgaji/delete/{id}') }}" class="form-horizontal" enctype="multipart/form-data">
                @csrf
                @method('DELETE')
                <h4 class="text-center">Apakah Anda yakin untuk menghapus data?</h4>
                <input type="hidden" name="ustart_date" id="ustart_date" value="" />
                <input type="hidden" name="uend_date" id="uend_date" value="" />
                <input type="hidden" name="uubulan" id="uubulan" value="" />
                <input type="hidden" name="uutahun" id="uutahun" value="" />
                <div class="form-group"><label class="col-sm-4 control-label">Bulan</label>
                  <div class="col-sm-8">
                  <select class="form-control chosen-select-width" name="ubulan" id="ubulan" disabled>
                            <option value="null" disabled>--Bulan--</option>
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
                <div class="form-group"><label class="col-sm-4 control-label">Tahun</label>
                  <div class="col-sm-8">
                  <select class="form-control chosen-select-width" name="utahun" id="utahun" disabled>
                            <option value="null" disabled>--Tahun--</option>
                             @for ($i = 1999; $i <= 2050; $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                             @endfor
                  </select>
                  </div>
                </div>
                <div class="form-group"><label class="col-sm-4 control-label">Start Date - End Date</label>
                  <div class="col-sm-8">
                     <input type="text" id="dconfig-demo" class="form-control" disabled>
                  </div>
                </div>
             </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-white" data-dismiss="modal">Tidak</button>
                  <button type="submit" class="btn btn-primary">Ya</button>
              </div>
              </form>
      </div>
  </div>
</div>
{{-- Show Data --}}
<div class="modal inmodal fade" id="show" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title">Show Periode cut off gaji</h4>
                </div>
                <div class="modal-body">
                <form method="POST" action="" class="form-horizontal" enctype="multipart/form-data">
                <input type="hidden" name="id" id="id" value="" />
                <input type="hidden" name="start_date" id="start_date" value="" />
                <input type="hidden" name="end_date" id="end_date" value="" />
                <div class="form-group"><label class="col-sm-4 control-label">Bulan</label>
                  <div class="col-sm-8">
                  <select class="form-control chosen-select-width" name="bulan" id="bulan" disabled>
                            <option value="null" disabled>--Bulan--</option>
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
                <div class="form-group"><label class="col-sm-4 control-label">Tahun</label>
                  <div class="col-sm-8">
                  <select class="form-control chosen-select-width" name="tahun" id="tahun" disabled>
                            <option value="null" disabled>--Tahun--</option>
                             @for ($i = 1999; $i <= 2050; $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                             @endfor
                  </select>
                  </div>
                </div>
                <div class="form-group"><label class="col-sm-4 control-label">Start Date - End Date</label>
                  <div class="col-sm-8">
                     <input type="text" id="config-demo" class="form-control" disabled>
                  </div>
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                </div>
                </form>
        </div>
    </div>
</div>
</div>
{{-- Update data --}}
<div class="modal inmodal fade" id="edit" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title">Edit Periode cut off gaji</h4>
                </div>
                <div class="modal-body">
                <form method="POST" action="{{ url('/hrd/setup/periodecutoffgaji/update') }}" class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                 <input type="hidden" name="id" id="id" value="" />
                <input type="hidden" name="upstart_date" id="upstart_date" value="" />
                <input type="hidden" name="upend_date" id="upend_date" value="" />
                <input type="hidden" name="uubulan" id="uubulan" value="" />
                <input type="hidden" name="uutahun" id="uutahun" value="" />
                <div class="form-group"><label class="col-sm-4 control-label">Bulan</label>
                  <div class="col-sm-8">
                  <select class="form-control chosen-select-width" name="ubulan" id="ubulan" disabled>
                            <option value="null" disabled>--Bulan--</option>
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
                <div class="form-group"><label class="col-sm-4 control-label">Tahun</label>
                  <div class="col-sm-8">
                  <select class="form-control chosen-select-width" name="utahun" id="utahun" disabled>
                            <option value="null" disabled>--Tahun--</option>
                             @for ($i = 1999; $i <= 2050; $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                             @endfor
                  </select>
                  </div>
                </div>
                <div class="form-group"><label class="col-sm-4 control-label">Start Date - End Date</label>
                  <div class="col-sm-8">
                     <input type="text" id="upconfig-demo" class="form-control">
                  </div>
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update Data</button>
                </div>
                </form>
        </div>
    </div>
</div>




</div>
</div>


@include('template.footer')

<!-- Page-Level Scripts -->

<script>
    $(document).ready(function(){

        $('#config-demo').daterangepicker({
            "startDate": new Date(),
            "endDate": new Date(),
        }, function(start, end, label) {
          console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
          $("#start_date").attr("value", start.format('YYYY-MM-DD'));      
          $("#end_date").attr("value", end.format('YYYY-MM-DD'));
        });

        $('#upconfig-demo').daterangepicker({
            "startDate": new Date(),
            "endDate": new Date(),
        }, function(start, end, label) {
          console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
          $("#upstart_date").attr("value", start.format('YYYY-MM-DD'));      
          $("#upend_date").attr("value", end.format('YYYY-MM-DD'));
        });


        $('.dataTables-client').DataTable({
            pageLength: 25,
            responsive: true,
            dom: '<"html5buttons"B>lTfgitp',
            buttons: [
                { extend: 'copy'},
                {extend: 'csv'},
                {extend: 'excel', title: 'ExampleFile'},
                {extend: 'pdf', title: 'ExampleFile'},

                {extend: 'print',
                 customize: function (win){
                        $(win.document.body).addClass('white-bg');
                        $(win.document.body).css('font-size', '10px');

                        $(win.document.body).find('table')
                                .addClass('compact')
                                .css('font-size', 'inherit');
                }
                }
            ]

        });

    });

    $('#show').on('show.bs.modal', function (event) {
                        var button = $(event.relatedTarget) // Button that triggered the modal

                        var bulan = button.data('bulan')
                        var tahun = button.data('tahun')
                        var sdprd = button.data('sdprd')
                        var edprd = button.data('edprd')
                        var range = sdprd + " - "+ edprd;

                        var xbulan;
                        if (bulan >=1 && bulan <=9){
                            xbulan="0";
                        }else{
                            xbulan="";
                        }

                        var modal = $(this)
                        modal.find('.modal-body #bulan').val(xbulan+""+bulan);
                        modal.find('.modal-body #tahun').val(tahun);
                        modal.find('.modal-body #start_date').val(sdprd);
                        modal.find('.modal-body #end_date').val(edprd);
                        modal.find('.modal-body #config-demo').val(range);

                    })
    $('#edit').on('show.bs.modal', function (event) {
                        var button = $(event.relatedTarget) // Button that triggered the modal

                        var bulan = button.data('bulan')
                        var tahun = button.data('tahun')
                        var sdprd = button.data('sdprd')
                        var edprd = button.data('edprd')
                        var range = sdprd + " - "+ edprd;

                        var xbulan;
                        if (bulan >=1 && bulan <=9){
                            xbulan="0";
                        }else{
                            xbulan="";
                        }

                        var modal = $(this)
                        modal.find('.modal-body #ubulan').val(xbulan+""+bulan);
                        modal.find('.modal-body #utahun').val(tahun);
                        modal.find('.modal-body #uubulan').val(xbulan+""+bulan);
                        modal.find('.modal-body #uutahun').val(tahun);
                        modal.find('.modal-body #ustart_date').val(sdprd);
                        modal.find('.modal-body #uend_date').val(edprd);
                        modal.find('.modal-body #upconfig-demo').val(range);
                    })
    $('#delete').on('show.bs.modal', function (event) {
                        var button = $(event.relatedTarget) // Button that triggered the modal

                        var bulan = button.data('bulan')
                        var tahun = button.data('tahun')
                        var sdprd = button.data('sdprd')
                        var edprd = button.data('edprd')
                        var range = sdprd + " - "+ edprd;

                        var xbulan;
                        if (bulan >=1 && bulan <=9){
                            xbulan="0";
                        }else{
                            xbulan="";
                        }

                        var modal = $(this)
                        modal.find('.modal-body #bulan').val(xbulan+""+bulan);
                        modal.find('.modal-body #tahun').val(tahun);                     
                        modal.find('.modal-body #uubulan').val(xbulan+""+bulan);
                        modal.find('.modal-body #uutahun').val(tahun);
                        modal.find('.modal-body #start_date').val(sdprd);
                        modal.find('.modal-body #end_date').val(edprd);
                        modal.find('.modal-body #dconfig-demo').val(range);
                                    })


</script>


@endsection

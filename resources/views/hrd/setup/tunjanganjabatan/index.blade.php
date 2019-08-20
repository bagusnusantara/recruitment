@extends('template.index')

@section('main')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Setup Tunjangan Jabatan</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{url('/dashboard')}}">Home</a>
                </li>
                <li class="active">
                    <strong>Setup Tunjangan Jabatan</strong>
                </li>
            </ol>

        </div>
    </div>


    <div class="wrapper wrapper-content animated fadeInRight">


        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>UMK</h5>

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
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal5">Tambah Tunjangan Jabatan</button>
                        </div>
                        <div class="modal inmodal fade" id="myModal5" tabindex="-1" role="dialog"  aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title">Tunjangan Jabatan</h4>
                                    </div>
                                    <div class="modal-body">
                                      <form method="POST" action="{{url('/hrd/setup/tunjanganjabatan/store')}}" class="form-horizontal" enctype="multipart/form-data">
                                            @csrf
                                            @include('hrd.setup.tunjanganjabatan.form')
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
                              <th class="text-center">Jabatan</th>
                              <th class="text-center">Kode Site</th>
                              <th class="text-center">Tunjangan Jabatan</th>
                              <th class="text-center">Tanggal Mulai Berlaku</th>
                              <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                              @php
                				$i=1;
                				@endphp
                              @foreach($st_tunj_jabatan as $u)

                              <tr>
                                  <td class="text-center">{{$i}}</td>
                                  <td class="text-center">{{$u->kode_jabatan}}</td>
                                  <td class="text-center">{{$u->kode_site}}</td>
                                  <td><center>{{$u->tunj_jabatan}}</center></td>
                                  <td><center>{{$u->tgl_berlaku}}</center></td>
                                  <td class="text-center">
                                    <button class="btn btn-default btn-circle"
                                          data-kodejabatan="{{$u->kode_jabatan}}"
                                          data-kodesite="{{$u->kode_site}}"
                                          data-tunjanganjabatan="{{$u->tunj_jabatan}}"
                                          data-tanggalberlaku="{{$u->tgl_berlaku}}"
                                          data-toggle="modal" data-target="#show"><i class="fa fa-eye"></i>
                                    </button>
                                    <button class="btn btn-default btn-circle"
                                          data-kodejabatan="{{$u->kode_jabatan}}"
                                          data-kodesite="{{$u->kode_site}}"
                                          data-tunjanganjabatan="{{$u->tunj_jabatan}}"
                                          data-tanggalberlaku="{{$u->tgl_berlaku}}"
                                          data-toggle="modal" data-target="#edit"><i class="fa fa-pencil-square-o"></i>
                                    </button>
                                    <button class="btn btn-default btn-circle"                                         
                                          data-id ="{{$u->kode_jabatan}}"
                                          data-kodejabatan="{{$u->kode_jabatan}}"
                                          data-kodesite="{{$u->kode_site}}"
                                          data-tunjanganjabatan="{{$u->tunj_jabatan}}"
                                          data-tanggalberlaku="{{$u->tgl_berlaku}}"
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

{{-- Show Data --}}
<div class="modal inmodal fade" id="show" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title">Show Tunjangan Jabatan</h4>
                </div>
                <div class="modal-body">
                <form method="POST" action="" class="form-horizontal" enctype="multipart/form-data">
                <input type="hidden" name="id" id="id" value="" />
                <input type="hidden" name="ukode_jabatan" id="ukode_jabatan" value="" />
                <input type="hidden" name="ukode_site" id="ukode_site" value="" />
                <div class="form-group"><label class="col-sm-4 control-label">Kode Jabatan</label>
                    <div class="col-sm-8"><input type="text" class="form-control" name="kode_jabatan" id="kode_jabatan" disabled></div>
                </div>
                <div class="form-group"><label class="col-sm-4 control-label">Kode Site</label>
                    <div class="col-sm-8"><input type="text" class="form-control" name="kode_site" id="kode_site" disabled></div>
                </div>
                <div class="form-group"><label class="col-sm-4 control-label">Tunjangan Jabatan</label>
                    <div class="col-sm-8"><input type="number" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control" name="tunjangan_jabatan" id="tunjangan_jabatan" disabled></div>
                </div>
                <div class="form-group"><label class="col-sm-4 control-label">Tanggal Berlaku</label>
                    <div class="col-sm-8"><input type="text" class="form-control" name="tanggal_berlaku" id="tanggal_berlaku" readonly disabled></div>
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
                    <h4 class="modal-title">Edit Tunjangan Jabatan</h4>
                </div>
                <div class="modal-body">
                <form method="POST" action="{{ url('/hrd/setup/tunjanganjabatan/update/{id}') }}" class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                <input type="hidden" name="uukode_jabatan" id="uukode_jabatan" value="" />
                <input type="hidden" name="uukode_site" id="uukode_site" value="" />
                        @include('hrd.setup.tunjanganjabatan.form')
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
{{-- Delete Data --}}
<div class="modal inmodal fade" id="delete" tabindex="-1" role="dialog"  aria-hidden="true">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title">Delete Confirmation</h4>
              </div>
              <div class="modal-body">
              <form method="POST" action="{{ url('/hrd/setup/tunjanganjabatan/delete/{id}') }}" class="form-horizontal" enctype="multipart/form-data">
                @csrf
                @method('DELETE')
                <h4 class="text-center">Apakah Anda yakin untuk menghapus data?</h4>
                <input type="hidden" name="uukode_jabatan" id="uukode_jabatan" value="" />
                <input type="hidden" name="uukode_site" id="uukode_site" value="" />
                <div class="form-group"><label class="col-sm-4 control-label">Kode Jabatan</label>
                    <div class="col-sm-8"><input type="text" class="form-control" name="kode_jabatan" id="kode_jabatan" disabled></div>
                </div>
                <div class="form-group"><label class="col-sm-4 control-label">Kode Site</label>
                    <div class="col-sm-8"><input type="text" class="form-control" name="kode_site" id="kode_site" disabled></div>
                </div>
                <div class="form-group"><label class="col-sm-4 control-label">Tunjangan Jabatan</label>
                    <div class="col-sm-8"><input type="number" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control" name="tunjangan_jabatan" id="tunjangan_jabatan" disabled></div>
                </div>
                <div class="form-group"><label class="col-sm-4 control-label">Tanggal Berlaku</label>
                    <div class="col-sm-8"><input type="text" class="form-control date" name="tanggal_berlaku" id="tanggal_berlaku" readonly disabled></div>
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
{{-- end Delete Data --}}



@include('template.footer')

<!-- Page-Level Scripts -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script>
    $(document).ready(function(){

      //------x set datepicker
      $('.date').datepicker({
          autoclose: true,
          todayHighlight: true,
          format: 'yyyy-mm-dd'
      });
      //----------------------

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

                        var kodejabatan = button.data('kodejabatan')
                        var kodesite = button.data('kodesite')
                        var tunjanganjabatan = button.data('tunjanganjabatan')
                        var tanggalberlaku = button.data('tanggalberlaku')

                        var modal = $(this)
                        modal.find('.modal-body #kode_jabatan').val(kodejabatan);
                        modal.find('.modal-body #kode_site').val(kodesite);
                        modal.find('.modal-body #tunjangan_jabatan').val(tunjanganjabatan);
                        modal.find('.modal-body #tanggal_berlaku').val(tanggalberlaku);
                    })
    $('#edit').on('show.bs.modal', function (event) {
                        var button = $(event.relatedTarget) // Button that triggered the modal

                        var kodejabatan = button.data('kodejabatan')
                        var kodesite = button.data('kodesite')
                        var tunjanganjabatan = button.data('tunjanganjabatan')
                        var tanggalberlaku = button.data('tanggalberlaku')

                        var modal = $(this)
                        modal.find('.modal-body #kode_jabatan').val(kodejabatan);
                        modal.find('.modal-body #kode_site').val(kodesite);
                        modal.find('.modal-body #uukode_jabatan').val(kodejabatan);
                        modal.find('.modal-body #uukode_site').val(kodesite);
                        modal.find('.modal-body #tunjangan_jabatan').val(tunjanganjabatan);
                        modal.find('.modal-body #tanggal_berlaku').val(tanggalberlaku);
                    })
    $('#delete').on('show.bs.modal', function (event) {
                        var button = $(event.relatedTarget) // Button that triggered the modal

                        var id = button.data('kodejabatan')
                        var kodejabatan = button.data('kodejabatan')
                        var kodesite = button.data('kodesite')
                        var tunjanganjabatan = button.data('tunjanganjabatan')
                        var tanggalberlaku = button.data('tanggalberlaku')

                        var modal = $(this)
                        modal.find('.modal-body #kode_jabatan').val(kodejabatan);
                        modal.find('.modal-body #kode_site').val(kodesite);
                        modal.find('.modal-body #uukode_jabatan').val(kodejabatan);
                        modal.find('.modal-body #uukode_site').val(kodesite);
                        modal.find('.modal-body #tunjangan_jabatan').val(tunjanganjabatan);
                        modal.find('.modal-body #tanggal_berlaku').val(tanggalberlaku);
                    })


</script>


@endsection

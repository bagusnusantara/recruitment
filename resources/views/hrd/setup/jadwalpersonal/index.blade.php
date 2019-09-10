@extends('template.index')

@section('main')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Setup Jadwal Personal</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{url('/dashboard')}}">Home</a>
                </li>
                <li class="active">
                    <strong>Setup Jadwal Personal</strong>
                </li>
            </ol>
            
        </div>
    </div>


    <div class="wrapper wrapper-content animated fadeInRight">


        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Jadwal Personal</h5>

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
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal5">Tambah Jadwal personal</button>
                        </div>
                        <div class="modal inmodal fade" id="myModal5" tabindex="-1" role="dialog"  aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title">Tambah Jadwal Personal</h4>
                                    </div>
                                    <div class="modal-body">
                                      <form method="POST" action="{{url('/hrd/setup/jadwalpersonal/store')}}" class="form-horizontal" enctype="multipart/form-data">
                                            @csrf
                                            @include('hrd.setup.jadwalpersonal.form')
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
                              <th class="text-center">NIK</th>
                              <th class="text-center">Nama Lengkap</th>
                              <th class="text-center">ID Jadwal</th>
                              <th class="text-center">Deskripsi Jadwal</th>
                              <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                              @php
    								$i=1;
    							@endphp
                              @foreach($st_jadwalpersonal as $u)

                              <tr>
                                  <td class="text-center">{{$i}}</td>
                                  <td><center>{{$u->nik}}</center></td>
                                  <td><center>{{$u->nama_lengkap}}</center></td>
                                  <td><center>{{$u->schid}}</center></td>
                                  <td><center>{{$u->des_schclass}}</center></td>
                                  <td class="text-center">
                                    <button class="btn btn-default btn-circle"
                                          data-nik="{{$u->nik}}"
                                          data-schid="{{$u->schid}}"
                                          data-toggle="modal" data-target="#show"><i class="fa fa-eye"></i>
                                    </button>
                                    <button class="btn btn-default btn-circle"
                                          data-nik="{{$u->nik}}"
                                          data-schid="{{$u->schid}}"
                                          data-toggle="modal" data-target="#edit"><i class="fa fa-pencil-square-o"></i>
                                    </button>
                                    <button class="btn btn-default btn-circle"
                                          data-nik="{{$u->nik}}"
                                          data-schid="{{$u->schid}}"
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
              <form method="POST" action="{{ url('/hrd/setup/jadwalpersonal/delete/{id}') }}" class="form-horizontal" enctype="multipart/form-data">
                @csrf
                @method('DELETE')
                <h4 class="text-center">Apakah Anda yakin untuk menghapus data?</h4>
                <input type="hidden" name="hnik" id="hnik" value="" />
                <input type="hidden" name="hschid" id="hschid" value="" />
                <div class="form-group"><label class="col-sm-4 control-label">NIK</label>
                  <div class="col-sm-8">
                     <select class="form-control chosen-select-width" name="nik" id="nik" disabled>
                            <option value="null" selected disabled>--NIK--</option>
                             @foreach($md_karyawan as $data)
                            <option value="{{ $data->NIK }}">  {{ $data->NIK }} - {{ $data->nama_lengkap }}</option>
                             @endforeach
                      </select>
                  </div>
                </div>
                <div class="form-group"><label class="col-sm-4 control-label">Kode Jadwal</label>
                  <div class="col-sm-8">
                     <select class="form-control chosen-select-width" name="schid" id="schid" disabled>
                            <option value="null" selected disabled>--kode jadwal--</option>
                             @foreach($schclass as $data)
                            <option value="{{ $data->kode }}">  {{ $data->kode }} - {{ $data->deskripsi }}</option>
                             @endforeach
                      </select>
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
                    <h4 class="modal-title">Show Tunjangan Makan</h4>
                </div>
                <div class="modal-body">
                <form method="POST" action="" class="form-horizontal" enctype="multipart/form-data">
                  <input type="hidden" name="hnik" id="hnik" value="" />
                  <input type="hidden" name="hschid" id="hschid" value="" />
                  <div class="form-group"><label class="col-sm-4 control-label">NIK</label>
                    <div class="col-sm-8">
                       <select class="form-control chosen-select-width" name="nik" id="nik" disabled>
                              <option value="null" selected disabled>--NIK--</option>
                               @foreach($md_karyawan as $data)
                              <option value="{{ $data->NIK }}">  {{ $data->NIK }} - {{ $data->nama_lengkap }}</option>
                               @endforeach
                        </select>
                    </div>
                  </div>
                  <div class="form-group"><label class="col-sm-4 control-label">Kode Jadwal</label>
                    <div class="col-sm-8">
                       <select class="form-control chosen-select-width" name="schid" id="schid" disabled>
                              <option value="null" selected disabled>--kode jadwal--</option>
                               @foreach($schclass as $data)
                              <option value="{{ $data->kode }}">  {{ $data->kode }} - {{ $data->deskripsi }}</option>
                               @endforeach
                        </select>
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
                    <h4 class="modal-title">Edit Jadwal Personal</h4>
                </div>
                <div class="modal-body">
                <form method="POST" action="{{ url('/hrd/setup/jadwalpersonal/update/{id}') }}" class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="hnik" id="hnik" value="" />
                        <input type="hidden" name="hschid" id="hschid" value="" />
                        <div class="form-group"><label class="col-sm-4 control-label">NIK</label>
                          <div class="col-sm-8">
                             <select class="form-control chosen-select-width" name="nik" id="nik" disabled>
                                    <option value="null" selected disabled>--NIK--</option>
                                     @foreach($md_karyawan as $data)
                                    <option value="{{ $data->NIK }}">  {{ $data->NIK }} - {{ $data->nama_lengkap }}</option>
                                     @endforeach
                              </select>
                          </div>
                        </div>
                        <div class="form-group"><label class="col-sm-4 control-label">Kode Jadwal</label>
                          <div class="col-sm-8">
                             <select class="form-control chosen-select-width" name="schid" id="schid" disabled>
                                    <option value="null" selected disabled>--kode jadwal--</option>
                                     @foreach($schclass as $data)
                                    <option value="{{ $data->kode }}">  {{ $data->kode }} - {{ $data->deskripsi }}</option>
                                     @endforeach
                              </select>
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

                        var nik = button.data('nik')
                        var schid = button.data('schid')

                        var modal = $(this)
                        modal.find('.modal-body #nik').val(nik);
                        modal.find('.modal-body #schid').val(schid);
                        modal.find('.modal-body #hnik').val(nik);
                        modal.find('.modal-body #hschid').val(schid);
                    })
    $('#edit').on('show.bs.modal', function (event) {
                        var button = $(event.relatedTarget) // Button that triggered the modal

                        var nik = button.data('nik')
                        var schid = button.data('schid')

                        var modal = $(this)
                        modal.find('.modal-body #nik').val(nik);
                        modal.find('.modal-body #schid').val(schid);
                        modal.find('.modal-body #hnik').val(nik);
                        modal.find('.modal-body #hschid').val(schid);
                    })
    $('#delete').on('show.bs.modal', function (event) {
                        var button = $(event.relatedTarget) // Button that triggered the modal

                        var nik = button.data('nik')
                        var schid = button.data('schid')

                        var modal = $(this)
                        modal.find('.modal-body #nik').val(nik);
                        modal.find('.modal-body #schid').val(schid);
                        modal.find('.modal-body #hnik').val(nik);
                        modal.find('.modal-body #hschid').val(schid);
                    })


</script>


@endsection

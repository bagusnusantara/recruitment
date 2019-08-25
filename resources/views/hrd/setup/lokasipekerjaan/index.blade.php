@extends('template.index')

@section('main')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Setup Lokasi Pekerjaan</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{url('/dashboard')}}">Home</a>
                </li>
                <li class="active">
                    <strong>Setup Lokasi Pekerjaan</strong>
                </li>
            </ol>
            
        </div>
    </div>


    <div class="wrapper wrapper-content animated fadeInRight">


        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Lokasi Pekerjaan</h5>

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
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal5">Tambah Lokasi Pekerjaan</button>
                        </div>
                        <div class="modal inmodal fade" id="myModal5" tabindex="-1" role="dialog"  aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title">Tambah Lokasi Pekerjaan</h4>
                                    </div>
                                    <div class="modal-body">
                                      <form method="POST" action="{{url('/hrd/setup/lokasipekerjaan/store')}}" class="form-horizontal" enctype="multipart/form-data">
                                            @csrf
                                            @include('hrd.setup.lokasipekerjaan.form')
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
                              <th class="text-center">ID</th>
                              <th class="text-center">Lokasi Pekerjaan</th>                          
                              <th class="text-center">Alamat</th>
                              <th class="text-center">No HP</th>
                              <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                              @php
    								$i=1;
    							@endphp
                              @foreach($md_client as $u)

                              <tr>
                                  <td class="text-center">{{$i}}</td>
                                  <td><center>{{$u->id}}</center></td>
                                  <td><center>{{$u->nama_client}}</center></td>
                                  <td><center>{{$u->alamat}}</center></td>
                                  <td><center>{{$u->no_hp}}</center></td>
                                  <td class="text-center">
                                    <button class="btn btn-default btn-circle"
                                          data-id="{{$u->id}}"
                                          data-namaclient="{{$u->nama_client}}"
                                          data-alamat="{{$u->alamat}}"
                                          data-nohp="{{$u->no_hp}}"
                                          data-toggle="modal" data-target="#show"><i class="fa fa-eye"></i>
                                    </button>
                                    <button class="btn btn-default btn-circle"
                                          data-id="{{$u->id}}"
                                          data-namaclient="{{$u->nama_client}}"
                                          data-alamat="{{$u->alamat}}"
                                          data-nohp="{{$u->no_hp}}"
                                          data-toggle="modal" data-target="#edit"><i class="fa fa-pencil-square-o"></i>
                                    </button>
                                    <button class="btn btn-default btn-circle"
                                          data-id="{{$u->id}}"
                                          data-namaclient="{{$u->nama_client}}"
                                          data-alamat="{{$u->alamat}}"
                                          data-nohp="{{$u->no_hp}}"
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
              <form method="POST" action="{{ url('/hrd/setup/lokasipekerjaan/delete/{id}') }}" class="form-horizontal" enctype="multipart/form-data">
                @csrf
                @method('DELETE')
                <h4 class="text-center">Apakah Anda yakin untuk menghapus data?</h4>
                  <input type="hidden" name="hid" id="hid" value="" />
                  <div class="form-group"><label class="col-sm-4 control-label">Nama Client</label>
                      <div class="col-sm-8"><input type="text" maxlength="100" class="form-control" name="nama_client" id="nama_client" disabled></div>
                  </div>
                  <div class="form-group"><label class="col-sm-4 control-label">Alamat</label>
                      <div class="col-sm-8"><input type="text" maxlength="50" class="form-control" name="alamat" id="alamat" disabled></div>
                  </div>
                  <div class="form-group"><label class="col-sm-4 control-label">No HP</label>
                      <div class="col-sm-8"><input type="text" maxlength="14" class="form-control" name="no_hp" id="no_hp" disabled></div>
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
                    <h4 class="modal-title">Show Lokasi Pekerjaan</h4>
                </div>
                <div class="modal-body">
                <form method="POST" action="" class="form-horizontal" enctype="multipart/form-data">
                  <input type="hidden" name="hid" id="hid" value="" />
                  <div class="form-group"><label class="col-sm-4 control-label">Nama Client</label>
                      <div class="col-sm-8"><input type="text" maxlength="100" class="form-control" name="nama_client" id="nama_client" disabled></div>
                  </div>
                  <div class="form-group"><label class="col-sm-4 control-label">Alamat</label>
                      <div class="col-sm-8"><input type="text" maxlength="50" class="form-control" name="alamat" id="alamat" disabled></div>
                  </div>
                  <div class="form-group"><label class="col-sm-4 control-label">No HP</label>
                      <div class="col-sm-8"><input type="text" maxlength="14" class="form-control" name="no_hp" id="no_hp" disabled></div>
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
                    <h4 class="modal-title">Edit Lokasi Pekerjaan</h4>
                </div>
                <div class="modal-body">
                <form method="POST" action="{{ url('/hrd/setup/lokasipekerjaan/update/{id}') }}" class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="hid" id="hid" value="" />
                        <div class="form-group"><label class="col-sm-4 control-label">Nama Client</label>
                            <div class="col-sm-8"><input type="text" maxlength="100" class="form-control" name="nama_client" id="nama_client"></div>
                        </div>
                        <div class="form-group"><label class="col-sm-4 control-label">Alamat</label>
                            <div class="col-sm-8"><input type="text" maxlength="50" class="form-control" name="alamat" id="alamat"></div>
                        </div>
                        <div class="form-group"><label class="col-sm-4 control-label">No HP</label>
                            <div class="col-sm-8"><input type="text" maxlength="14" class="form-control" name="no_hp" id="no_hp"></div>
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

                        var id = button.data('id')
                        var namaclient = button.data('namaclient')
                        var alamat = button.data('alamat')
                        var nohp = button.data('nohp')

                        var modal = $(this)
                        modal.find('.modal-body #hid').val(id);
                        modal.find('.modal-body #nama_client').val(namaclient);
                        modal.find('.modal-body #alamat').val(alamat);
                        modal.find('.modal-body #no_hp').val(nohp);
                    })
    $('#edit').on('show.bs.modal', function (event) {
                        var button = $(event.relatedTarget) // Button that triggered the modal

                        var id = button.data('id')
                        var namaclient = button.data('namaclient')
                        var alamat = button.data('alamat')
                        var nohp = button.data('nohp')

                        var modal = $(this)
                        modal.find('.modal-body #hid').val(id);
                        modal.find('.modal-body #nama_client').val(namaclient);
                        modal.find('.modal-body #alamat').val(alamat);
                        modal.find('.modal-body #no_hp').val(nohp);
                    })
    $('#delete').on('show.bs.modal', function (event) {
                        var button = $(event.relatedTarget) // Button that triggered the modal

                        var id = button.data('id')
                        var namaclient = button.data('namaclient')
                        var alamat = button.data('alamat')
                        var nohp = button.data('nohp')

                        var modal = $(this)
                        modal.find('.modal-body #hid').val(id);
                        modal.find('.modal-body #nama_client').val(namaclient);
                        modal.find('.modal-body #alamat').val(alamat);
                        modal.find('.modal-body #no_hp').val(nohp);
                    })


</script>


@endsection

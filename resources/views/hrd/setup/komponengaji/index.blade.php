@extends('template.index')

@section('main')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Setup</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{url('/dashboard')}}">Home</a>
                </li>
                <li class="active">
                    <strong>Komponen Gaji</strong>
                </li>
            </ol>

        </div>
    </div>


    <div class="wrapper wrapper-content animated fadeInRight">


        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>List Komponen Gaji</h5>

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
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal5">Tambah Komponen Gaji</button>
                        </div>
                        <div class="modal inmodal fade" id="myModal5" tabindex="-1" role="dialog"  aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title">Tambah Komponen Gaji</h4>
                                    </div>
                                    <div class="modal-body">
                                      <form method="POST" action="{{url('/hrd/setup/komponengaji/store')}}" class="form-horizontal" enctype="multipart/form-data">
                                            @csrf
                                            @include('hrd.setup.komponengaji.form')
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
                              <th class="text-center">Kode</th>
                              <th class="text-center">Deskripsi</th>
                              <th class="text-center">Label Slip Gaji</th>
                              <th class="text-center">Kelompok Pendapatan</th>
                              <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                              @php
                								$i=1;
                							@endphp
                              @foreach($komponen_gaji as $komponen)

                              <tr>
                                  <td class="text-center">{{$i}}</td>
                                  <td class="text-center">{{$komponen->kode_komponen_gaji}}</td>
                                  <td>{{$komponen->desc_komponen_gaji}}</td>
                                  <td><center>{{$komponen->label_slip_gaji}}</center></td>
                                  <td>
                                    <center>
                                      @if ( $komponen->id_pendapatan === 1)
                                      <button type="button" class="btn btn-primary btn-xs">Pendapatan</button>
                                      @else
                                      <button type="button" class="btn btn-danger btn-xs">Potongan</button>
                                      @endif
                                    </center>
                                  </td>
                                  <td class="text-center">
                                    <button class="btn btn-default btn-circle"
                                          data-mykode="{{$komponen->kode_komponen_gaji}}"
                                          data-mydesc="{{$komponen->desc_komponen_gaji}}"
                                          data-mylabel="{{$komponen->label_slip_gaji}}"
                                          data-myid_pendapatan="{{$komponen->id_pendapatan}}"
                                          data-toggle="modal" data-target="#show"><i class="fa fa-eye"></i>
                                    </button>
                                    <button class="btn btn-default btn-circle"
                                          data-mykode="{{$komponen->kode_komponen_gaji}}"
                                          data-mydesc="{{$komponen->desc_komponen_gaji}}"
                                          data-mylabel="{{$komponen->label_slip_gaji}}"
                                          data-myid_pendapatan="{{$komponen->id_pendapatan}}"
                                          data-toggle="modal" data-target="#edit"><i class="fa fa-pencil-square-o"></i>
                                    </button>
                                    <button class="btn btn-default btn-circle"
                                          data-mykode="{{$komponen->kode_komponen_gaji}}"
                                          data-mydesc="{{$komponen->desc_komponen_gaji}}"
                                          data-mylabel="{{$komponen->label_slip_gaji}}"
                                          data-myid_pendapatan="{{$komponen->id_pendapatan}}"
                                          data-toggle="modal" data-target="#delete"><i class="fa fa-trash"></i>
                                    </button>
                                  </td>

                                  {{-- Delete data --}}
                                  <div class="modal inmodal fade" id="delete" tabindex="-1" role="dialog"  aria-hidden="true">
                                          <div class="modal-dialog modal-lg">
                                              <div class="modal-content">
                                                  <div class="modal-header">
                                                      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                      <h4 class="modal-title">Delete Confirmation</h4>
                                                  </div>
                                                  <div class="modal-body">
                                                  <form method="POST" action="{{ route('post-delete',$komponen->kode_komponen_gaji) }}" class="form-horizontal" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('DELETE')
                                                    <h4 class="text-center">Apakah Anda yakin untuk menghapus data?</h4>
                                                        <input type="text" class="form-control" name="kode_komponen_gaji" id="kode_komponen_gaji" disabled>
                                                  </div>
                                                  <div class="modal-footer">
                                                      <button type="button" class="btn btn-white" data-dismiss="modal">Tidak</button>
                                                      <button type="submit" class="btn btn-primary">Ya</button>
                                                  </div>
                                                  </form>
                                          </div>
                                      </div>
                                  </div>

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
                    <h4 class="modal-title">Show Komponen Gaji</h4>
                </div>
                <div class="modal-body">
                <form method="POST" action="" class="form-horizontal" enctype="multipart/form-data">
                  <div class="form-group"><label class="col-sm-2 control-label">Kode</label>
                      <div class="col-sm-10"><input type="text" class="form-control" name="kode_komponen_gaji" id="kode_komponen_gaji" disabled></div>
                  </div>
                  <div class="form-group"><label class="col-sm-2 control-label">Deskripsi</label>
                      <div class="col-sm-10"><input type="text" class="form-control" name="desc_komponen_gaji" id="desc_komponen_gaji" disabled></div>
                  </div>
                  <div class="form-group"><label class="col-sm-2 control-label">Label Slip Gaji</label>
                      <div class="col-sm-10"><input type="text" class="form-control" name="label_slip_gaji" id="label_slip_gaji" disabled></div>
                  </div>
                  <div class="form-group"><label class="col-sm-2 control-label">Kelompok Pendapatan</label>
                      <div class="col-sm-10">
                        <select class="form-control m-b" name="id_pendapatan" id="id_pendapatan" disabled>
                          <option value="">--- Pilih Kategori Kelompok Pendapatan ---</option>
                          <option value="0">Potongan</option>
                          <option value="1">Pendapatan</option>
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
{{-- Update data --}}
<div class="modal inmodal fade" id="edit" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title">Edit Komponen Gaji</h4>
                </div>
                <div class="modal-body">
                <form method="POST" action="{{ url('/hrd/setup/komponengaji/update/{id}') }}" class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                            @include('hrd.setup.komponengaji.form')
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

                        var kode = button.data('mykode')
                        var desc = button.data('mydesc')
                        var label = button.data('mylabel')
                        var id_pendapatan = button.data('myid_pendapatan')

                        var modal = $(this)
                        modal.find('.modal-body #kode_komponen_gaji').val(kode);
                        modal.find('.modal-body #desc_komponen_gaji').val(desc);
                        modal.find('.modal-body #label_slip_gaji').val(label);
                        modal.find('.modal-body #id_pendapatan').val(id_pendapatan);
                    })
    $('#edit').on('show.bs.modal', function (event) {
                        var button = $(event.relatedTarget) // Button that triggered the modal

                        var kode = button.data('mykode')
                        var desc = button.data('mydesc')
                        var label = button.data('mylabel')
                        var id_pendapatan = button.data('myid_pendapatan')

                        var modal = $(this)
                        modal.find('.modal-body #kode_komponen_gaji').val(kode);
                        modal.find('.modal-body #desc_komponen_gaji').val(desc);
                        modal.find('.modal-body #label_slip_gaji').val(label);
                        modal.find('.modal-body #id_pendapatan').val(id_pendapatan);
                    })
    $('#delete').on('show.bs.modal', function (event) {
                        var button = $(event.relatedTarget) // Button that triggered the modal

                        var kode = button.data('mykode')
                        var desc = button.data('mydesc')
                        var label = button.data('mylabel')
                        var id_pendapatan = button.data('myid_pendapatan')

                        var modal = $(this)
                        modal.find('.modal-body #kode_komponen_gaji').val(kode);
                        modal.find('.modal-body #desc_komponen_gaji').val(desc);
                        modal.find('.modal-body #label_slip_gaji').val(label);
                        modal.find('.modal-body #id_pendapatan').val(id_pendapatan);
                                    })


</script>


@endsection

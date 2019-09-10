@extends('template.index')

@section('main')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Setup Tunjangan KJK perjabatan site</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{url('/dashboard')}}">Home</a>
                </li>
                <li class="active">
                    <strong>Setup Tunjangan KJK perjabatan site</strong>
                </li>
            </ol>

        </div>
    </div>


    <div class="wrapper wrapper-content animated fadeInRight">


        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Tunjangan KJK Perjabatan Site</h5>

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
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal5">Tambah KJK Perjabatan site</button>
                        </div>
                        <div class="modal inmodal fade" id="myModal5" tabindex="-1" role="dialog"  aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title">Tambah Tunjangan KJK Perjabatan site</h4>
                                    </div>
                                    <div class="modal-body">
                                      <form method="POST" action="{{url('/hrd/setup/kjkperjabatansite/store')}}" class="form-horizontal" enctype="multipart/form-data">
                                            @csrf
                                            @include('hrd.setup.kjkperjabatansite.form')
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
                              <th class="text-center">Nama Lokasi Kerja</th>
                              <th class="text-center">KJK Paket</th>
                              <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                              @php
                								$i=1;
                							@endphp
                              @foreach($st_kjk_jab as $u)

                              <tr>
                                  <td class="text-center">{{$i}}</td>
                                  <td>{{$u->deskripsi}}</td>
                                  <td><center>{{$u->nama_client}}</center></td>
                                  <td><center>{{$u->id_kjk_paket}}</center></td>
                                  <td class="text-center">
                                    <button class="btn btn-default btn-circle"
                                          data-kodejab="{{$u->kode_jab}}"
                                          data-kodelokasi="{{$u->kode_lokasi}}"
                                          data-idkjkpaket="{{$u->id_kjk_paket}}"
                                          data-toggle="modal" data-target="#show"><i class="fa fa-eye"></i>
                                    </button>
                                    <button class="btn btn-default btn-circle"
                                          data-kodejab="{{$u->kode_jab}}"
                                          data-kodelokasi="{{$u->kode_lokasi}}"
                                          data-idkjkpaket="{{$u->id_kjk_paket}}"
                                          data-toggle="modal" data-target="#edit"><i class="fa fa-pencil-square-o"></i>
                                    </button>
                                    <button class="btn btn-default btn-circle"
                                          data-kodejab="{{$u->kode_jab}}"
                                          data-kodelokasi="{{$u->kode_lokasi}}"
                                          data-idkjkpaket="{{$u->id_kjk_paket}}"
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
              <form method="POST" action="{{ url('/hrd/setup/kjkperjabatansite/delete/{id}') }}" class="form-horizontal" enctype="multipart/form-data">
                @csrf
                @method('DELETE')
                <h4 class="text-center">Apakah Anda yakin untuk menghapus data?</h4>
                <input type="hidden" name="hkode_jab" id="hkode_jab" value="" />
                <div class="form-group"><label class="col-sm-4 control-label">Nama Jabatan</label>
                  <div class="col-sm-8">
                     <select class="form-control chosen-select-width" name="kode_jab" id="kode_jab" disabled>
                            <option value="null" selected disabled>--Nama Jabatan--</option>
                             @foreach($st_jabatan as $data)
                            <option value="{{ $data->kode }}"> {{ $data->kode }} - {{ $data->Deskripsi }}</option>
                             @endforeach
                      </select>
                  </div>
                </div>
                <div class="form-group"><label class="col-sm-4 control-label">Nama Lokasi Kerja</label>
                  <div class="col-sm-8">
                     <select class="form-control chosen-select-width" name="kode_lokasi" id="kode_lokasi" disabled>
                            <option value="null" selected disabled>--Nama Lokasi Kerja--</option>
                             @foreach($md_client as $data)
                            <option value="{{ $data->id }}"> {{ $data->id }} - {{ $data->nama_client }}</option>
                             @endforeach
                      </select>
                  </div>
                </div>
                <div class="form-group"><label class="col-sm-4 control-label">KJK Paket</label>
                  <div class="col-sm-8">
                     <select class="form-control chosen-select-width" name="id_kjk_paket" id="id_kjk_paket" disabled>
                            <option value="null" selected disabled>--kjk paket--</option>
                            <option value="1">YA</option>
                            <option value="0">TIDAK</option>
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
                    <h4 class="modal-title">Show Tunjangan KJK perjabatan site</h4>
                </div>
                <div class="modal-body">
                <form method="POST" action="" class="form-horizontal" enctype="multipart/form-data">
                <input type="hidden" name="hkode_jab" id="hkode_jab" value="" />
                <div class="form-group"><label class="col-sm-4 control-label">Nama Jabatan</label>
                  <div class="col-sm-8">
                     <select class="form-control chosen-select-width" name="kode_jab" id="kode_jab" disabled>
                            <option value="null" selected disabled>--Nama Jabatan--</option>
                             @foreach($st_jabatan as $data)
                            <option value="{{ $data->kode }}"> {{ $data->kode }} - {{ $data->Deskripsi }}</option>
                             @endforeach
                      </select>
                  </div>
                </div>
                <div class="form-group"><label class="col-sm-4 control-label">Nama Lokasi Kerja</label>
                  <div class="col-sm-8">
                     <select class="form-control chosen-select-width" name="kode_lokasi" id="kode_lokasi" disabled>
                            <option value="null" selected disabled>--Nama Lokasi Kerja--</option>
                             @foreach($md_client as $data)
                            <option value="{{ $data->id }}"> {{ $data->id }} - {{ $data->nama_client }}</option>
                             @endforeach
                      </select>
                  </div>
                </div>
                <div class="form-group"><label class="col-sm-4 control-label">KJK Paket</label>
                  <div class="col-sm-8">
                     <select class="form-control chosen-select-width" name="id_kjk_paket" id="id_kjk_paket" disabled>
                            <option value="null" selected disabled>--kjk paket--</option>
                            <option value="1">YA</option>
                            <option value="0">TIDAK</option>
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
                    <h4 class="modal-title">Edit Tunjangan KJK Perjabatan site </h4>
                </div>
                <div class="modal-body">
                <form method="POST" action="{{ url('/hrd/setup/kjkperjabatansite/update/{id}') }}" class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="hkode_jab" id="hkode_jab" value="" />
                        <div class="form-group"><label class="col-sm-4 control-label">Nama Jabatan</label>
                          <div class="col-sm-8">
                             <select class="form-control chosen-select-width" name="kode_jab" id="kode_jab" disabled>
                                    <option value="null" selected disabled>--Nama Jabatan--</option>
                                     @foreach($st_jabatan as $data)
                                    <option value="{{ $data->kode }}"> {{ $data->kode }} - {{ $data->Deskripsi }}</option>
                                     @endforeach
                              </select>
                          </div>
                        </div>
                        <div class="form-group"><label class="col-sm-4 control-label">Nama Lokasi Kerja</label>
                          <div class="col-sm-8">
                             <select class="form-control chosen-select-width" name="kode_lokasi" id="kode_lokasi">
                                    <option value="null" selected disabled>--Nama Lokasi Kerja--</option>
                                     @foreach($md_client as $data)
                                    <option value="{{ $data->id }}"> {{ $data->id }} - {{ $data->nama_client }}</option>
                                     @endforeach
                              </select>
                          </div>
                        </div>
                        <div class="form-group"><label class="col-sm-4 control-label">KJK Paket</label>
                          <div class="col-sm-8">
                             <select class="form-control chosen-select-width" name="id_kjk_paket" id="id_kjk_paket">
                                    <option value="null" selected disabled>--kjk paket--</option>
                                    <option value="1">YA</option>
                                    <option value="0">TIDAK</option>
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

                        var kodejab = button.data('kodejab')
                        var kodelokasi = button.data('kodelokasi')
                        var idkjkpaket = button.data('idkjkpaket')

                        var modal = $(this)
                        modal.find('.modal-body #kode_jab').val(kodejab);
                        modal.find('.modal-body #hkode_jab').val(kodejab);
                        modal.find('.modal-body #kode_lokasi').val(kodelokasi);
                        modal.find('.modal-body #id_kjk_paket').val(idkjkpaket);
                    })
    $('#edit').on('show.bs.modal', function (event) {
                        var button = $(event.relatedTarget) // Button that triggered the modal

                        var kodejab = button.data('kodejab')
                        var kodelokasi = button.data('kodelokasi')
                        var idkjkpaket = button.data('idkjkpaket')

                        var modal = $(this)
                        modal.find('.modal-body #kode_jab').val(kodejab);
                        modal.find('.modal-body #hkode_jab').val(kodejab);
                        modal.find('.modal-body #kode_lokasi').val(kodelokasi);
                        modal.find('.modal-body #id_kjk_paket').val(idkjkpaket);
                    })
    $('#delete').on('show.bs.modal', function (event) {
                        var button = $(event.relatedTarget) // Button that triggered the modal

                        var kodejab = button.data('kodejab')
                        var kodelokasi = button.data('kodelokasi')
                        var idkjkpaket = button.data('idkjkpaket')

                        var modal = $(this)
                        modal.find('.modal-body #kode_jab').val(kodejab);
                        modal.find('.modal-body #hkode_jab').val(kodejab);
                        modal.find('.modal-body #kode_lokasi').val(kodelokasi);
                        modal.find('.modal-body #id_kjk_paket').val(idkjkpaket);
                    })


</script>


@endsection

@extends('template.index')

@section('main')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Setup Masa Kerja Tahunan site</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{url('/dashboard')}}">Home</a>
                </li>
                <li class="active">
                    <strong>Setup Masa Kerja Tahunan Site</strong>
                </li>
            </ol>

        </div>
    </div>


    <div class="wrapper wrapper-content animated fadeInRight">


        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Masa Kerja Tahunan Site</h5>

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
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal5">Tambah Masa kerja Tahunan site</button>
                        </div>
                        <div class="modal inmodal fade" id="myModal5" tabindex="-1" role="dialog"  aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title">Tambah Masa Kerja Tahunan site</h4>
                                    </div>
                                    <div class="modal-body">
                                      <form method="POST" action="{{url('/hrd/setup/masakerjatahunansite/store')}}" class="form-horizontal" enctype="multipart/form-data">
                                            @csrf
                                            @include('hrd.setup.masakerjatahunansite.form')
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
                              <th class="text-center">TanggalBerlaku</th>
                              <th class="text-center">Nama Lokasi Kerja</th>
                              <th class="text-center">NIK</th>
                              <th class="text-center">Nama Lengkap</th>
                              <th class="text-center">nilai</th>
                              <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                              @php
                			   $i=1;
                			  @endphp
                              @foreach($st_tunj_masa_kerja_thn as $u)

                              <tr>
                                  <td class="text-center">{{$i}}</td>
                                  <td class="text-center">{{$u->tgl_berlaku}}</td>
                                  <td><center>{{$u->nama_client}}<center></td>
                                  <td><center>{{$u->NIK}}</center></td>
                                  <td><center>{{$u->nama_lengkap}}</center></td>
                                  <td><center>{{$u->nilai}}</center></td>
                                  <td class="text-center">
                                    <button class="btn btn-default btn-circle"
                                          data-tglberlaku="{{$u->tgl_berlaku}}"
                                          data-kodelokasi="{{$u->kode_lokasi}}"
                                          data-nik="{{$u->NIK}}"
                                          data-nilai="{{$u->nilai}}"
                                          data-toggle="modal" data-target="#show"><i class="fa fa-eye"></i>
                                    </button>
                                    <button class="btn btn-default btn-circle"
                                          data-tglberlaku="{{$u->tgl_berlaku}}"
                                          data-kodelokasi="{{$u->kode_lokasi}}"
                                          data-nik="{{$u->NIK}}"
                                          data-nilai="{{$u->nilai}}"
                                          data-toggle="modal" data-target="#edit"><i class="fa fa-pencil-square-o"></i>
                                    </button>
                                    <button class="btn btn-default btn-circle"
                                          data-tglberlaku="{{$u->tgl_berlaku}}"
                                          data-kodelokasi="{{$u->kode_lokasi}}"
                                          data-nik="{{$u->NIK}}"
                                          data-nilai="{{$u->nilai}}"
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
              <form method="POST" action="{{ url('/hrd/setup/masakerjatahunansite/delete/{id}') }}" class="form-horizontal" enctype="multipart/form-data">
                @csrf
                @method('DELETE')
                <h4 class="text-center">Apakah Anda yakin untuk menghapus data?</h4>
                  <input type="hidden" name="htgl_berlaku" id="htgl_berlaku" value="" />
                  <input type="hidden" name="hkode_lokasi" id="hkode_lokasi" value="" />
                  <input type="hidden" name="hnik" id="hnik" value="" />
                  <div class="form-group"><label class="col-sm-4 control-label">Tanggal Berlaku</label>
                      <div class="col-sm-8"><input type="text" class="form-control date input-sm" name="tgl_berlaku" id="tgl_berlaku" value="{{ \Carbon\Carbon::now()->toDateString() }}" disabled></div>
                  </div>
                  <div class="form-group"><label class="col-sm-4 control-label">Nama Lokasi Kerja</label>
                    <div class="col-sm-8">
                       <select class="form-control chosen-select-width" name="kode_lokasi" id="kode_lokasi" disabled>
                              <option value="null" selected disabled>--Nama Lokasi Kerja--</option>
                               @foreach($md_client as $data)
                              <option value="{{ $data->id }}">{{ $data->id }} - {{ $data->nama_client }}</option>
                               @endforeach
                        </select>
                    </div>
                  </div>
                  <div class="form-group"><label class="col-sm-4 control-label">NIK Karyawan</label>
                    <div class="col-sm-8">
                       <select class="form-control chosen-select-width" name="nik" id="nik" disabled>
                              <option value="null" selected disabled>--NIK Karyawan--</option>
                               @foreach($md_karyawan as $data)
                              <option value="{{ $data->NIK }}">{{ $data->NIK }} - {{ $data->nama_lengkap }}</option>
                               @endforeach
                        </select>
                    </div>
                  </div>
                  <div class="form-group"><label class="col-sm-4 control-label">Nilai</label>
                      <div class="col-sm-8"><input type="number" step="any" class="form-control" name="nilai" id="nilai" disabled></div>
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
                    <h4 class="modal-title">Show UMK</h4>
                </div>
                <div class="modal-body">
                <form method="POST" action="" class="form-horizontal" enctype="multipart/form-data">
                  <input type="hidden" name="htgl_berlaku" id="htgl_berlaku" value="" />
                  <input type="hidden" name="hkode_lokasi" id="hkode_lokasi" value="" />
                  <input type="hidden" name="hnik" id="hnik" value="" />
                  <div class="form-group"><label class="col-sm-4 control-label">Tanggal Berlaku</label>
                      <div class="col-sm-8"><input type="text" class="form-control date input-sm" name="tgl_berlaku" id="tgl_berlaku" value="{{ \Carbon\Carbon::now()->toDateString() }}" disabled></div>
                  </div>
                  <div class="form-group"><label class="col-sm-4 control-label">Nama Lokasi Kerja</label>
                    <div class="col-sm-8">
                       <select class="form-control chosen-select-width" name="kode_lokasi" id="kode_lokasi" disabled>
                              <option value="null" selected disabled>--Nama Lokasi Kerja--</option>
                               @foreach($md_client as $data)
                              <option value="{{ $data->id }}">{{ $data->id }} - {{ $data->nama_client }}</option>
                               @endforeach
                        </select>
                    </div>
                  </div>
                  <div class="form-group"><label class="col-sm-4 control-label">NIK Karyawan</label>
                    <div class="col-sm-8">
                       <select class="form-control chosen-select-width" name="nik" id="nik" disabled>
                              <option value="null" selected disabled>--NIK Karyawan--</option>
                               @foreach($md_karyawan as $data)
                              <option value="{{ $data->NIK }}">{{ $data->NIK }} - {{ $data->nama_lengkap }}</option>
                               @endforeach
                        </select>
                    </div>
                  </div>
                  <div class="form-group"><label class="col-sm-4 control-label">Nilai</label>
                      <div class="col-sm-8"><input type="number" step="any" class="form-control" name="nilai" id="nilai" disabled></div>
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
                  <h4 class="modal-title">Edit Masa kerja Tahunan site</h4>
              </div>
              <div class="modal-body">
                <form method="POST" action="{{url('/hrd/setup/masakerjatahunansite/update/{id}')}}" class="form-horizontal" enctype="multipart/form-data">
                      @csrf
                <input type="hidden" name="htgl_berlaku" id="htgl_berlaku" value="" />
                <input type="hidden" name="hkode_lokasi" id="hkode_lokasi" value="" />
                <input type="hidden" name="hnik" id="hnik" value="" />
                <div class="form-group"><label class="col-sm-4 control-label">Tanggal Berlaku</label>
                    <div class="col-sm-8"><input type="text" class="form-control date input-sm" name="tgl_berlaku" id="tgl_berlaku" value="{{ \Carbon\Carbon::now()->toDateString() }}" disabled></div>
                </div>
                <div class="form-group"><label class="col-sm-4 control-label">Nama Lokasi Kerja</label>
                  <div class="col-sm-8">
                     <select class="form-control chosen-select-width" name="kode_lokasi" id="kode_lokasi" disabled>
                            <option value="null" selected disabled>--Nama Lokasi Kerja--</option>
                             @foreach($md_client as $data)
                            <option value="{{ $data->id }}">{{ $data->id }} - {{ $data->nama_client }}</option>
                             @endforeach
                      </select>
                  </div>
                </div>
                <div class="form-group"><label class="col-sm-4 control-label">NIK Karyawan</label>
                  <div class="col-sm-8">
                     <select class="form-control chosen-select-width" name="nik" id="nik" disabled>
                            <option value="null" selected disabled>--NIK Karyawan--</option>
                             @foreach($md_karyawan as $data)
                            <option value="{{ $data->NIK }}">{{ $data->NIK }} - {{ $data->nama_lengkap }}</option>
                             @endforeach
                      </select>
                  </div>
                </div>
                <div class="form-group"><label class="col-sm-4 control-label">Nilai</label>
                    <div class="col-sm-8"><input type="number" step="any" class="form-control" name="nilai" id="nilai"></div>
                </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
              </form>
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

      //-x set datepicker
      // var date_input=$('input[name="tanggal_umk"]'); //our date input has the name "date"
      //   var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      //   var options={
      //     format: 'yyyy-mm-dd',
      //     container: container,
      //     todayHighlight: true,
      //     autoclose: true,
      //   };
      //   date_input.datepicker(options);
      //-------------
      $('.date').datepicker({
          autoclose: true,
          todayHighlight: true,
          format: 'yyyy-mm-dd'
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

                        var tglberlaku = button.data('tglberlaku')
                        var kodelokasi = button.data('kodelokasi')
                        var nik = button.data('nik')
                        var nilai = button.data('nilai')

                        var modal = $(this)
                        modal.find('.modal-body #tgl_berlaku').val(tglberlaku);
                        modal.find('.modal-body #htgl_berlaku').val(tglberlaku);
                        modal.find('.modal-body #kode_lokasi').val(kodelokasi);
                        modal.find('.modal-body #hkode_lokasi').val(kodelokasi);
                        modal.find('.modal-body #nik').val(nik);
                        modal.find('.modal-body #hnik').val(nik);
                        modal.find('.modal-body #nilai').val(nilai);
                    })
    $('#edit').on('show.bs.modal', function (event) {
                        var button = $(event.relatedTarget) // Button that triggered the modal

                        var tglberlaku = button.data('tglberlaku')
                        var kodelokasi = button.data('kodelokasi')
                        var nik = button.data('nik')
                        var nilai = button.data('nilai')

                        var modal = $(this)
                        modal.find('.modal-body #tgl_berlaku').val(tglberlaku);
                        modal.find('.modal-body #htgl_berlaku').val(tglberlaku);
                        modal.find('.modal-body #kode_lokasi').val(kodelokasi);
                        modal.find('.modal-body #hkode_lokasi').val(kodelokasi);
                        modal.find('.modal-body #nik').val(nik);
                        modal.find('.modal-body #hnik').val(nik);
                        modal.find('.modal-body #nilai').val(nilai);
                    })
    $('#delete').on('show.bs.modal', function (event) {
                        var button = $(event.relatedTarget) // Button that triggered the modal

                        var tglberlaku = button.data('tglberlaku')
                        var kodelokasi = button.data('kodelokasi')
                        var nik = button.data('nik')
                        var nilai = button.data('nilai')

                        var modal = $(this)
                        modal.find('.modal-body #tgl_berlaku').val(tglberlaku);
                        modal.find('.modal-body #htgl_berlaku').val(tglberlaku);
                        modal.find('.modal-body #kode_lokasi').val(kodelokasi);
                        modal.find('.modal-body #hkode_lokasi').val(kodelokasi);
                        modal.find('.modal-body #nik').val(nik);
                        modal.find('.modal-body #hnik').val(nik);
                        modal.find('.modal-body #nilai').val(nilai);
                      })



</script>


@endsection

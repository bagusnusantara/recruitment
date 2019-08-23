@extends('template.index')

@section('main')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Setup Tunjangan OTN</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{url('/dashboard')}}">Home</a>
                </li>
                <li class="active">
                    <strong>Setup Tunjangan OTN</strong>
                </li>
            </ol>

        </div>
    </div>


    <div class="wrapper wrapper-content animated fadeInRight">


        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Tunjangan OTN</h5>

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
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal5">Tambah Tunjangan OTN</button>
                        </div>
                        <div class="modal inmodal fade" id="myModal5" tabindex="-1" role="dialog"  aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title">Tambah Tunjangan OTN</h4>
                                    </div>
                                    <div class="modal-body">
                                      <form method="POST" action="{{url('/hrd/setup/tunjanganotn/store')}}" class="form-horizontal" enctype="multipart/form-data">
                                            @csrf
                                            @include('hrd.setup.tunjanganotn.form')
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
                              <th class="text-center">Tanggal</th>
                              <th class="text-center">Kode Lokasi</th>
                              <th class="text-center">Nama Lokasi kerja</th>
                              <th class="text-center">Tunj OTN</th>
                              <th class="text-center">Tunj OTN Paket</th>
                              <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                              @php
                      			   $i=1;
                      			  @endphp
                              @foreach($st_tunj_otn as $u)

                              <tr>
                                  <td class="text-center">{{$i}}</td>
                                  <td class="text-center">{{$u->tanggal}}</td>
                                  <td><center>{{$u->kode_lokasi}}<center></td>
                                  <td><center>{{$u->nama_client}}<center></td>
                                  <td><center>{{$u->otn}}</center></td>
                                  <td><center>{{$u->otn_paket}}</center></td>
                                  <td class="text-center">
                                    <button class="btn btn-default btn-circle"
                                          data-tanggal="{{$u->tanggal}}"
                                          data-kodelokasi="{{$u->kode_lokasi}}"
                                          data-otn="{{$u->otn}}"
                                          data-otnpaket="{{$u->otn_paket}}"
                                          data-toggle="modal" data-target="#show"><i class="fa fa-eye"></i>
                                    </button>
                                    <button class="btn btn-default btn-circle"
                                          data-tanggal="{{$u->tanggal}}"
                                          data-kodelokasi="{{$u->kode_lokasi}}"
                                          data-otn="{{$u->otn}}"
                                          data-otnpaket="{{$u->otn_paket}}"
                                          data-toggle="modal" data-target="#edit"><i class="fa fa-pencil-square-o"></i>
                                    </button>
                                    <button class="btn btn-default btn-circle"
                                          data-tanggal="{{$u->tanggal}}"
                                          data-kodelokasi="{{$u->kode_lokasi}}"
                                          data-otn="{{$u->otn}}"
                                          data-otnpaket="{{$u->otn_paket}}"
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
              <form method="POST" action="{{ url('/hrd/setup/tunjanganotn/delete/{id}') }}" class="form-horizontal" enctype="multipart/form-data">
                @csrf
                @method('DELETE')
                <h4 class="text-center">Apakah Anda yakin untuk menghapus data?</h4>
                  <input type="hidden" name="htanggal" id="htanggal" value="" />
                  <input type="hidden" name="hkode_lokasi" id="hkode_lokasi" value="" />
                  <input type="hidden" name="hotn" id="hotn" value="" />
                  <input type="hidden" name="hotn_paket" id="hotn_paket" value="" />
                  <div class="form-group"><label class="col-sm-4 control-label">Tanggal</label>
                      <div class="col-sm-8"><input type="text" class="form-control date input-sm" readonly name="tanggal" id="tanggal" value="{{ \Carbon\Carbon::now()->toDateString() }}"></div>
                  </div>
                  <div class="form-group"><label class="col-sm-4 control-label">Lokasi Kerja</label>
                    <div class="col-sm-8">
                       <select class="form-control chosen-select-width" name="kode_lokasi" id="kode_lokasi" disabled>
                              <option value="null" selected disabled>--Lokasi kerja--</option>
                               @foreach($md_client as $data)
                              <option value="{{ $data->id }}">  {{ $data->id }} - {{ $data->nama_client }}</option>
                               @endforeach
                        </select>
                    </div>
                  </div>
                  <div class="form-group"><label class="col-sm-4 control-label">OTN</label>
                      <div class="col-sm-8"><input type="text" class="form-control" name="otn" id="otn" readonly></div>
                  </div>
                  <div class="form-group"><label class="col-sm-4 control-label">OTN PAKET</label>
                      <div class="col-sm-8"><input type="number" step="any" class="form-control" name="otn_paket" id="otn_paket" readonly></div>
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
                    <h4 class="modal-title">Show Tunjangan OTN</h4>
                </div>
                <div class="modal-body">
                <form method="POST" action="" class="form-horizontal" enctype="multipart/form-data">
                  <input type="hidden" name="htanggal" id="htanggal" value="" />
                  <input type="hidden" name="hkode_lokasi" id="hkode_lokasi" value="" />
                  <input type="hidden" name="hotn" id="hotn" value="" />
                  <input type="hidden" name="hotn_paket" id="hotn_paket" value="" />
                  <div class="form-group"><label class="col-sm-4 control-label">Tanggal</label>
                      <div class="col-sm-8"><input type="text" class="form-control date input-sm" name="tanggal" id="tanggal" value="{{ \Carbon\Carbon::now()->toDateString() }}" readonly></div>
                  </div>
                  <div class="form-group"><label class="col-sm-4 control-label">Lokasi Kerja</label>
                    <div class="col-sm-8">
                       <select class="form-control chosen-select-width" name="kode_lokasi" id="kode_lokasi" disabled>
                              <option value="null" selected disabled>--Lokasi kerja--</option>
                               @foreach($md_client as $data)
                              <option value="{{ $data->id }}">  {{ $data->id }} - {{ $data->nama_client }}</option>
                               @endforeach
                        </select>
                    </div>
                  </div>
                  <div class="form-group"><label class="col-sm-4 control-label">OTN</label>
                      <div class="col-sm-8"><input type="number" step="any" class="form-control" name="otn" id="otn" readonly></div>
                  </div>
                  <div class="form-group"><label class="col-sm-4 control-label">OTN PAKET</label>
                      <div class="col-sm-8"><input type="number" step="any" class="form-control" name="otn_paket" id="otn_paket" readonly></div>
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
                  <h4 class="modal-title">Edit Tunjangan OTN</h4>
              </div>
              <div class="modal-body">
                <form method="POST" action="{{url('/hrd/setup/tunjanganotn/update/{id}')}}" class="form-horizontal" enctype="multipart/form-data">
                      @csrf
                      <input type="hidden" name="htanggal" id="htanggal" value="" />
                      <input type="hidden" name="hkode_lokasi" id="hkode_lokasi" value="" />
                      <input type="hidden" name="hotn" id="hotn" value="" />
                      <input type="hidden" name="hotn_paket" id="hotn_paket" value="" />
                      <div class="form-group"><label class="col-sm-4 control-label">Tanggal</label>
                          <div class="col-sm-8"><input type="text" class="form-control date input-sm" name="tanggal" id="tanggal" value="{{ \Carbon\Carbon::now()->toDateString() }}"></div>
                      </div>
                      <div class="form-group"><label class="col-sm-4 control-label">Lokasi Kerja</label>
                        <div class="col-sm-8">
                           <select class="form-control chosen-select-width" name="kode_lokasi" id="kode_lokasi">
                                  <option value="null" selected disabled>--Lokasi kerja--</option>
                                   @foreach($md_client as $data)
                                  <option value="{{ $data->id }}">  {{ $data->id }} - {{ $data->nama_client }}</option>
                                   @endforeach
                            </select>
                        </div>
                      </div>
                      <div class="form-group"><label class="col-sm-4 control-label">OTN</label>
                          <div class="col-sm-8"><input type="number" step="any" class="form-control" name="otn" id="otn"></div>
                      </div>
                      <div class="form-group"><label class="col-sm-4 control-label">OTN PAKET</label>
                          <div class="col-sm-8"><input type="number" step="any" class="form-control" name="otn_paket" id="otn_paket"></div>
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

                        var tanggal = button.data('tanggal')
                        var kodelokasi = button.data('kodelokasi')
                        var otn = button.data('otn')
                        var otnpaket = button.data('otnpaket')

                        var modal = $(this)
                        modal.find('.modal-body #tanggal').val(tanggal);
                        modal.find('.modal-body #htanggal').val(tanggal);
                        modal.find('.modal-body #kode_lokasi').val(kodelokasi);
                        modal.find('.modal-body #hkode_lokasi').val(kodelokasi);
                        modal.find('.modal-body #otn').val(otn);
                        modal.find('.modal-body #hotn').val(otn);
                        modal.find('.modal-body #otn_paket').val(otnpaket);
                        modal.find('.modal-body #hotn_paket').val(otnpaket);
                    })
    $('#edit').on('show.bs.modal', function (event) {
                        var button = $(event.relatedTarget) // Button that triggered the modal

                        var tanggal = button.data('tanggal')
                        var kodelokasi = button.data('kodelokasi')
                        var otn = button.data('otn')
                        var otnpaket = button.data('otnpaket')

                        var modal = $(this)
                        modal.find('.modal-body #tanggal').val(tanggal);
                        modal.find('.modal-body #htanggal').val(tanggal);
                        modal.find('.modal-body #kode_lokasi').val(kodelokasi);
                        modal.find('.modal-body #hkode_lokasi').val(kodelokasi);
                        modal.find('.modal-body #otn').val(otn);
                        modal.find('.modal-body #hotn').val(otn);
                        modal.find('.modal-body #otn_paket').val(otnpaket);
                        modal.find('.modal-body #hotn_paket').val(otnpaket);
                    })
    $('#delete').on('show.bs.modal', function (event) {
                        var button = $(event.relatedTarget) // Button that triggered the modal

                        var tanggal = button.data('tanggal')
                        var kodelokasi = button.data('kodelokasi')
                        var otn = button.data('otn')
                        var otnpaket = button.data('otnpaket')

                        var modal = $(this)
                        modal.find('.modal-body #tanggal').val(tanggal);
                        modal.find('.modal-body #htanggal').val(tanggal);
                        modal.find('.modal-body #kode_lokasi').val(kodelokasi);
                        modal.find('.modal-body #hkode_lokasi').val(kodelokasi);
                        modal.find('.modal-body #otn').val(otn);
                        modal.find('.modal-body #hotn').val(otn);
                        modal.find('.modal-body #otn_paket').val(otnpaket);
                        modal.find('.modal-body #hotn_paket').val(otnpaket);
                    })



</script>


@endsection

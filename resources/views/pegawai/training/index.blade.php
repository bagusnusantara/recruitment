@extends('template.index')

@section('main')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Pelatihan dan Training</h2>
        <ol class="breadcrumb">
            <li>
                <a href="{{ url('home')}}">Dashboard</a>
            </li>
            <li>Pengajuan Cuti</li>
            <li class="active">Pelatihan dan Training</li>
        </ol>
    </div>
</div>

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Pelatihan dan Training</h5>
                <div class="text-right">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modaltambah"><i class="fa fa-plus"></i>&nbsp Tambah Pelatihan dan Training</button>
                </div>
            </div>
            <div class="ibox-content">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-client" style="width: 100%">
                        <thead>
                            <tr>
                              <th class="text-center">No</th>
                              <th class="text-center">NIK</th>
                              <th class="text-center">Nama Karyawan</th>
                              <th class="text-center">Tanggal Mulai Pelatihan</th>
                              <th class="text-center">Tanggal Selesai Pelatihan</th>
                              <th class="text-center">Nama Pelatihan</th>
                              <th class="text-center">Penyelenggara Pelatihan</th>
                              <th class="text-center">Target Hasil Pelatihan</th>
                              <th class="text-center">Realisasi Hasil Pelatihan</th>
                              <th class="text-center">Nilai Pelatihan</th>
                              <th class="text-center">Biaya Pelatihan</th>
                              <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                              <td class="text-center">1</td>
                              <td class="text-center">214214124</td>
                              <td class="text-center">FULAN</td>
                              <td class="text-center">2019-01-02</td>
                              <td class="text-center">2019-09-09</td>
                              <td class="text-center">Pelatihan Akutansi</td>
                              <td class="text-center">STAN</td>
                              <td class="text-center">Audit</td>
                              <td class="text-center">Audit</td>
                              <td class="text-center">76</td>
                              <td class="text-center">30000</td>
                              <td class="text-center">
                                    <button class="btn btn-default btn-circle"
                                        data-id="test okokok"
                                        data-toggle="modal" data-target="#Modaledit"><i class="fa fa-edit" title="edit"></i>
                                    </button>
                                    <button type="button" class="btn btn-default btn-circle" onclick="if(confirm('Are you sure? You want to delete this kode?')){
                                        event.preventDefault();
                                        document.getElementById('delete-form-').submit();
                                        }else {  event.preventDefault();}"><i class="fa fa-trash" title="hapus"></i>
                                    </button>
                                    <form id="delete-form-" action="" style="display: none;" method="POST">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                              </td>
                            </tr>
                      </tbody>
                    </table>
                </div>          
            </div>
        </div>
    </div>
</div>
@include('pegawai.training.modal_add')
@include('pegawai.training.modal_edit')

@include('template.footer')

<!-- Page-Level Scripts -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<script>$(function() {
    $('input[name="tanggal1"]').daterangepicker({
        singleDatePicker: true,
        locale: {
          format: 'YYYY-MM-DD'
        }
      });
    });
</script>
<script>$(function() {
    $('input[name="tanggal2"]').daterangepicker({
        singleDatePicker: true,
        locale: {
          format: 'YYYY-MM-DD'
        }
      });
    });
</script>
<script type="text/javascript">
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

    $('#Modaledit').on('show.bs.modal', function (event) {
                    var button = $(event.relatedTarget) // Button that triggered the modal

                    var id = button.data('id')

                    var modal = $(this)
                    modal.find('.modal-body #nama').val(id);
                    //document.getElementById('nama').value='new value';
                    //$('#nama').html('tesss');
                })

</script>

@endsection

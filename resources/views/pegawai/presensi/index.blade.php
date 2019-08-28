@extends('template.index')

@section('main')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Presensi</h2>
        <ol class="breadcrumb">
            <li>
                <a href="{{ url('home')}}">Dashboard</a>
            </li>
            <li>Pegawai</li>
            <li class="active">Presensi</li>
        </ol>
    </div>
</div>

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Presensi</h5>
                <div class="text-right">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modaltambah"><i class="fa fa-plus"></i>&nbsp Tambah Presensi</button>
                </div>
            </div>
            <div class="ibox-content">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-client" style="width: 100%">
                        <thead>
                            <tr>
                              <th class="text-center">No</th>
                              <th class="text-center">Nama</th>
                              <th class="text-center">Tanggal</th>
                              <th class="text-center">Jam</th>
                              <th class="text-center">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                              <td class="text-center">1</td>
                              <td class="text-center">Ahmad Hadirin</td>
                              <td class="text-center">2019-01-01</td>
                              <td class="text-center">08:00</td>
                              <td class="text-center">
                                <span class="label label-warning">Hadir</span>
                              </td>
                            </tr>
                      </tbody>
                    </table>
                </div>          
            </div>
        </div>
    </div>
</div>
@include('pegawai.presensi.modal_add')
@include('pegawai.presensi.modal_edit')

@include('template.footer')

<!-- Page-Level Scripts -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<script>
    $(document).ready(function(){
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

</script>

@endsection

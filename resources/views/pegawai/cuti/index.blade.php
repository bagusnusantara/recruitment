@extends('template.index')

@section('main')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Pengajuan Cuti</h2>
        <ol class="breadcrumb">
            <li>
                <a href="{{ url('home')}}">Dashboard</a>
            </li>
            <li>Pengajuan Cuti</li>
            <li class="active">Presensi</li>
        </ol>
    </div>
</div>

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Pengajuan Cuti</h5>
                <div class="text-right">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modaltambah"><i class="fa fa-plus"></i>&nbsp Tambah Pengajuan Cuti</button>
                </div>
            </div>
            <div class="ibox-content">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-client" style="width: 100%">
                        <thead>
                            <tr>
                              <th class="text-center">No</th>
                              <th class="text-center">Nama</th>
                              <th class="text-center">Tanggal Mulai</th>
                              <th class="text-center">Tanggal Akhir</th>
                              <th class="text-center">Keterangan</th>
                              <th class="text-center">Status</th>
                              <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                              <td class="text-center">1</td>
                              <td class="text-center">Ahmad Hadirin</td>
                              <td class="text-center">2019-01-01</td>
                              <td class="text-center">2019-01-02</td>
                              <td class="text-center">Cuti Sakit</td>
                              <td class="text-center">
                                <span class="label label-warning">Hadir</span>
                              </td>
                              <td class="text-center">
                                    <button class="btn btn-default btn-circle"
                                        data-id="test"
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
@include('pegawai.cuti.modal_add')
@include('pegawai.cuti.modal_edit')

@include('template.footer')

<!-- Page-Level Scripts -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<script>
    $('.date').datepicker({
      autoclose: true,
      todayHighlight: true,
      format: 'yyyy-mm-dd'
    });

</script>
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

    $('#Modaledit').on('show.bs.modal', function (event) {
                    var button = $(event.relatedTarget) // Button that triggered the modal

                    var id = button.data('id')

                    var modal = $(this)
                    //modal.find('.modal-body #nama').val(id);
                    $('#nama').html('tesss');
                })

</script>

@endsection

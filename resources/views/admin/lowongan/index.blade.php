@extends('template.index')

@section('main')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Lowongan Pekerjaan</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{url('/admin/dashboard')}}">Home</a>
                </li>
                <li class="active">
                    <strong>Lowongan Pekerjaan</strong>
                </li>
            </ol>

        </div>
    </div>


    <div class="wrapper wrapper-content animated fadeInRight">


        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>List Lowongan Pekerjaan</h5>

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
                            <a class="btn btn-primary" href="{{url('admin/lowongan/create')}}">Tambah Lowongan Pekerjaan</a>
                        </div>
                        @csrf

                        <table class="table table-striped table-bordered table-hover dataTables-client" style="width: 100%">
                            <thead>
                            <tr>
                              <th><center>No</center></th>
                              <th><center>Job Tittle</center></th>
                              <th><center>Klien</center></th>
                              <th><center>Masa Berlaku</center></th>
                              <th><center>Action</center></th>
                            </tr>
                            </thead>
                            <tbody>
                              @php
                								$i=1;
                							@endphp
                              @foreach($lowongan_pekerjaan as $lowongan)

                              <tr>
                                  <td><center>{{$i}}</center></td>
                                  <td><center>{{$lowongan->job_tittle}}</center></td>
                                  <td>{{$lowongan->nama_client}}</td>
                                  <td><center>{{date('d-m-Y', strtotime($lowongan->start_date))}} sampai {{date('d-m-Y', strtotime($lowongan->end_date))}}</center></td>
                                  <td><center>
                                    <a type="button" class="btn btn-default btn-circle" href="lowongan/show/{{$lowongan->id}}" type="button"><i class="fa fa-eye"></i></a>
                                    <button class="btn btn-default btn-circle" type="button"><i class="fa fa-pen-square"></i>
                                    </center>
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

</script>

@endsection

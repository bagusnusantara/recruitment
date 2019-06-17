@extends('template.index')

@section('main')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Dashboard</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{url('/dashboard')}}">Home</a>
                </li>
                <li class="active">
                    <strong>Dashboard</strong>
                </li>
            </ol>

        </div>
    </div>


    <div class="wrapper wrapper-content animated fadeInRight">


        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>List Klien</h5>

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
                            <a class="btn btn-primary" href="{{url('admin/lowongan/create')}}">Tambah Komponen Gaji</a>
                        </div>
                        @csrf

                        <table class="table table-striped table-bordered table-hover dataTables-client" style="width: 100%">
                            <thead>
                            <tr>
                              <th>No</th>
                              <th>Kode</th>
                              <th data-hide="phone,tablet">Deskripsi</th>
                              <th data-hide="phone,tablet">Label Slip Gaji</th>
                              <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                              @php
                								$i=1;
                							@endphp
                              @foreach($komponen_gaji as $komponen)

                              <tr>
                                  <td>{{$i}}</td>
                                  <td>{{$komponen->kode_komponen_gaji}}</td>
                                  <td>{{$komponen->desc_komponen_gaji}}</td>
                                  <td class="center">{{$komponen->label_slip_gaji}}</td>
                                  <td>
                                    <button class="btn btn-default btn-circle" type="button"><i class="fa fa-eye"></i>
                                    <button class="btn btn-default btn-circle" type="button"><i class="fa fa-pencil-square-o"></i>
                                    <button class="btn btn-default btn-circle" type="button"><i class="fa fa-trash"></i>
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

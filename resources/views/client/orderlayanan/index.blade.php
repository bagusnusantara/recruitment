@extends('template.index')

@section('main')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Order Layanan</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{url('client/dashboard')}}">Home</a>
                </li>
                <li class="active">
                    <strong>Order Layanan</strong>
                </li>
            </ol>

        </div>
    </div>


    <div class="wrapper wrapper-content animated fadeInRight">


        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>List Order Layanan</h5>

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
                            <a class="btn btn-primary" href="{{url('client/orderlayanan/create')}}">Tambah Order Layanan</a>
                        </div>
                        <input type="text" class="form-control input-sm m-b-xs" id="filter"
                               placeholder="Pencarian">

                        <table class="footable table table-stripped" data-page-size="8" data-filter=#filter>
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Jenis Layanan</th>
                                <th data-hide="phone,tablet">Deskripsi</th>
                                <th data-hide="phone,tablet">Lokasi Penempatan</th>
                                <th data-hide="phone,tablet">Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="gradeX">
                                <td>1</td>
                                <td>Test+Recruitment</td>
                                <td>Lowongan Security</td>
                                <td class="center">Jalan Ketintang 192 Surabaya</td>
                                <td class="center"><button type="button" class="btn btn-danger btn-xs">CLosed</button></td>
                                <td><button class="btn btn-default btn-circle" type="button"><i class="fa fa-pencil-square-o"></i></td>
                            </tr>
                            <tr class="gradeX">
                                <td>2</td>
                                <td>Test Only</td>
                                <td>Lowongan Office Boy</td>
                                <td class="center">Jalan Pemuda 12 Surabaya</td>
                                <td class="center"><button type="button" class="btn btn-primary btn-xs">Aktif</button></td>
                                <td><button class="btn btn-default btn-circle" type="button"><i class="fa fa-pencil-square-o"></i></td>
                            </tr>
                            <tr class="gradeX">
                                <td>3</td>
                                <td>Test+Recruitment</td>
                                <td>Lowongan Marketing</td>
                                <td class="center">Jalan Sitinggil 12 Sidoarjo</td>
                                <td class="center"><button type="button" class="btn btn-primary btn-xs">Aktif</button></td>
                                <td><button class="btn btn-default btn-circle" type="button"><i class="fa fa-pencil-square-o"></i></td>
                            </tr>
                            <tr class="gradeX">
                                <td>4</td>
                                <td>Test Only</td>
                                <td>Lowongan Finance Manager</td>
                                <td class="center">Jalan Pelayaran 23 Gresik</td>
                                <td class="center"><button type="button" class="btn btn-danger btn-xs">CLosed</button></td>
                                <td><button class="btn btn-default btn-circle" type="button"><i class="fa fa-pencil-square-o"></i></td>
                            </tr>

                                <td colspan="5">
                                    <ul class="pagination pull-right"></ul>
                                </td>
                            </tr>
                            </tfoot>
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
<!-- FooTable -->
<script src="{{asset('inspinia/js/plugins/footable/footable.all.min.js')}}"></script>
<!-- Page-Level Scripts -->
<script>
    $(document).ready(function() {

        $('.footable').footable();
        $('.footable2').footable();

    });

</script>
@endsection

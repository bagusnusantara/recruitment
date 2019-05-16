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
                            <a class="btn btn-primary" href="{{url('admin/lowongan/create')}}">Tambah Client</a>
                        </div>
                        <input type="text" class="form-control input-sm m-b-xs" id="filter"
                               placeholder="Pencarian">

                        <table class="footable table table-stripped" data-page-size="8" data-filter=#filter>
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Klien</th>
                                <th data-hide="phone,tablet">Alamat</th>
                                <th data-hide="phone,tablet">Nomor Telepon</th>
                                <th data-hide="phone,tablet">Kelompok Usaha</th>
                                <th data-hide="phone,tablet">Jenis Usaha</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="gradeX">
                                <td>1</td>
                                <td>PT.Kita Sejahtera</td>
                                <td>Jalan HR Muhammad 121 Surabaya</td>
                                <td class="center">(031) 6451212</td>
                                <td class="center">Usaha Menengah</td>
                                <td class="center">Retail Alat Berat</td>
                                <td><button class="btn btn-default btn-circle" type="button"><i class="fa fa-pencil-square-o"></i></td>
                            </tr>
                            <tr class="gradeX">
                                <td>2</td>
                                <td>PT.Semoga Bahagia</td>
                                <td>Jalan Slamet Riyadi 192 Sidoarjo</td>
                                <td class="center">0812313131</td>
                                <td class="center">Usaha Mikro</td>
                                <td class="center">Pertanian</td>
                                <td><button class="btn btn-default btn-circle" type="button"><i class="fa fa-pencil-square-o"></i></td>
                            </tr>
                            <tr class="gradeX">
                                <td>3</td>
                                <td>CV. Gemilang Raya</td>
                                <td>Jalan Sugeng Haryadi 192 Sidoarjor</td>
                                <td class="center">(031) 8912121</td>
                                <td class="center">Usaha Makro</td>
                                <td class="center">Software Consultant</td>
                                <td><button class="btn btn-default btn-circle" type="button"><i class="fa fa-pencil-square-o"></i></td>
                            </tr>
                            <tr class="gradeX">
                                <td>4</td>
                                <td>PT.Sahabat Selamanya</td>
                                <td>Jalan Nginden-Semolo 122 Surabaya</td>
                                <td class="center">08121231</td>
                                <td class="center">Usaha Menengah</td>
                                <td class="center">Industri Makanan</td>
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

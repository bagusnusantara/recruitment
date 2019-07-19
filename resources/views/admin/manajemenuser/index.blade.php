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
                        <h5>List User</h5>

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
                        <input type="text" class="form-control input-sm m-b-xs" id="filter"
                               placeholder="Pencarian">

                        <table class="footable table table-stripped" data-page-size="8" data-filter=#filter>
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>NIK</th>
                                <th data-hide="phone,tablet">Nama</th>
                                <th data-hide="phone,tablet">Alamat</th>
                                <th data-hide="phone,tablet">Jenis Kelamin</th>
                                <th data-hide="phone,tablet">Keahlian</th>
                                <th data-hide="phone,tablet">Pendidikan Terakhir</th>
                                <th data-hide="phone,tablet">Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($user as $u)
                            @endforeach
                            <tr class="gradeX">
                                <td>1</td>
                                <td>9812131414</td>
                                <td>{{$u->name}}</td>
                                <td class="center">Jalan Ketintang 192 Surabaya</td>
                                <td class="center">Laki-laki</td>
                                <td class="center">Marketing</td>
                                <td class="center">S1 Manajemen Bisnis</td>
                                <td class="center">Bekerja di PT. Semangat Baru</td>
                                <td><button class="btn btn-default btn-circle" type="button"><i class="fa fa-pencil-square-o"></i></td>
                            </tr>
                            <tr class="gradeX">
                                <td>2</td>
                                <td>991213112</td>
                                <td>Puji Sumaryani</td>
                                <td class="center">Jalan Pemuda 12 Surabaya</td>
                                <td class="center">Perempuan</td>
                                <td class="center">Accounting</td>
                                <td class="center">D3 Akuntansi</td>
                                <td class="center"><button type="button" class="btn btn-primary btn-xs">Free</button></td>
                                <td><button class="btn btn-default btn-circle" type="button"><i class="fa fa-pencil-square-o"></i></td>
                            </tr>
                            <tr class="gradeX">
                                <td>3</td>
                                <td>9812135413</td>
                                <td>Isyana Mega</td>
                                <td class="center">Jalan Sitinggil 12 Sidoarjo</td>
                                <td class="center">Perempuan</td>
                                <td class="center">Menjahit</td>
                                <td class="center">SMK</td>
                                <td class="center"><button type="button" class="btn btn-primary btn-xs">Free</button></td>
                                <td><button class="btn btn-default btn-circle" type="button"><i class="fa fa-pencil-square-o"></i></td>
                            </tr>
                            <tr class="gradeX">
                                <td>4</td>
                                <td>98121398712</td>
                                <td>Dwi Sasongko</td>
                                <td class="center">Jalan Pelayaran 23 Gresik</td>
                                <td class="center">Laki-laki</td>
                                <td class="center">Programming</td>
                                <td class="center">S1 Teknik Informatika</td>
                                <td class="center">Bekerja di PT. Kita Jaya</td>
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

@extends('template.index')

@section('main')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Mutasi Pegawai</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{url('/dashboard')}}">Home</a>
                </li>
                <li class="active">
                    <strong>Mutasi Pegawai</strong>
                </li>
            </ol>

        </div>
    </div>


    <div class="wrapper wrapper-content animated fadeInRight">


        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Histori Mutasi Pegawai</h5>

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
                            <a class="btn btn-primary" href="{{url('hrd/sdm/mutasi/create')}}">Tambah Mutasi Pegawai</a>
                        </div>
                        <div>
                            Pilihan Kolom :
                            <a class="toggle-vis" data-column="0">No</a> -
                            <a class="toggle-vis" data-column="1">Nama</a> -
                            <a class="toggle-vis" data-column="2">Usia</a> -
                            <a class="toggle-vis" data-column="3">Jenis Kelamin</a> -
                            <a class="toggle-vis" data-column="4">Alamat</a> -
                            <a class="toggle-vis" data-column="5">Pendidikan Terakhir</a>
                        </div>
                        <table id="example" class="display" style="width:100%">
                            <thead>
                            <tr>
                                <th><center>No</center></th>
                                <th><center>Nomor Surat</center></th>
                                <th><center>Jenis Kontrak</center></th>
                                <th><center>NIK</center></th>
                                <th><center>Nama Lengkap</center></th>
                                <th><center>Site Baru</center></th>
                                <th><center>Jabatan</center></th>
                                <th><center>Tgl Mulai Kontrak</center></th>
                                <th><center>Tgl Akhir Kontrak</center></th>
                                <th><center>Action</center></th>
                            </tr>
                            </thead>

                            <tbody>
                            @php
                                $i=1;
                            @endphp
                            @foreach($hist_lokasi as $s)

                                <tr>
                                    <td><center>{{$i++}}</center></td>
                                    <td><center>{{$s->no_spt}}</center></td>
                                    <td><center>{{$s->jenis_kontrak}}</center></td>
                                    <td><center>{{$s->nik}}</center></td>
                                    <td><center>{{$s->nama_lengkap}}</center></td>
                                    <td><center>{{$s->nama_client}}</center></td>
                                    <td><center>{{$s->Deskripsi}}</center></td>
                                    <td><center>{{$s->tgl_mulai_kontrak}}</center></td>
                                    <td><center>{{$s->tgl_akhir_kontrak}}</center></td>
                                    <td><center>
                                            <a href="/admin/cetak_pkwt" class="btn btn-primary" target="_blank">CETAK PKWT</a>
                                        </center></td>
                                </tr>
                            @endforeach
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
    <!-- FooTable -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function() {
            var table = $('#example').DataTable( {
                "scrollY": "200px",
                "paging": false
            } );

            $('a.toggle-vis').on( 'click', function (e) {
                e.preventDefault();

                // Get the column API object
                var column = table.column( $(this).attr('data-column') );

                // Toggle the visibility
                column.visible( ! column.visible() );
            } );
        } );
    </script>
@endsection

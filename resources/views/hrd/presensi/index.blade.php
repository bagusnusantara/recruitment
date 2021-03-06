@extends('template.index')

@section('main')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Presensi</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{url('/dashboard')}}">Home</a>
                </li>
                <li class="active">
                    <strong>Daftar Presensi Karyawan</strong>
                </li>
            </ol>

        </div>
    </div>


    <div class="wrapper wrapper-content animated fadeInRight">


        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Daftar Presensi Karyawan</h5>

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
                        <div class="form-group" id="form-kelas">
                            <label class="font-normal" for="id_kelas">Lokasi Penempatan</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-home"></i></span>
                                <select data-placeholder="Pilih Kelas" name="id_kelas" id="id_kelas" class="form-control chosen-select select-kelas">
                                    <option value=""></option>
                                    @foreach($client as $c)
                                    <option value="$c->id">{{$c->nama_client}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <br>
                            <label class="font-normal" for="id_kelas">Periode</label>
                            <div class="row">
                                <div class="col-md-4">
                                    <select class="select2_demo_1 form-control">
                                        <option value="1">Januari</option>
                                        <option value="2">Februari</option>
                                        <option value="3">Maret</option>
                                        <option value="4">April</option>
                                        <option value="5">Mei</option>
                                        <option value="5">Juni</option>
                                        <option value="5">Juli</option>
                                        <option value="5">Agustus</option>
                                        <option value="5">September</option>
                                        <option value="5">Oktober</option>
                                        <option value="5">November</option>
                                        <option value="5">Desember</option>
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <select class="select2_demo_3 form-control">
                                        <option></option>
                                        <option value="Bahamas">2017</option>
                                        <option value="Bahrain">2018</option>
                                        <option value="Bangladesh">2019</option>
                                        <option value="Barbados">2020</option>
                                        <option value="Belarus">2021</option>
                                        <option value="Belgium">2022</option>
                                        <option value="Belize">2023</option>
                                        <option value="Benin">2024</option>
                                    </select>

                                </div>
                                <br>

                        </div>
                        <br>
                        <input type="text" class="form-control input-sm m-b-xs" id="filter"
                               placeholder="Pencarian">

                        <table class="footable table table-stripped" data-page-size="8" data-filter=#filter>
                            <thead>
                            <tr>
                                <th>No</th>
								<th>Avatar</th>
								<th>Nama</th>
                                <th>Jam Kehadiran</th>
                                <th data-hide="phone,tablet">Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
							@foreach($presensi as $p)
                            <tr class="gradeX">

                                <td>{{$p->karyawan_id}}</td>
								<td><img class="rounded-circle circle-border m-b-md" src="/storage/avatars/{{ $p->avatar }}" style="width: 50px; height: 50px"/></td>
								<td>{{$p->name}}</td>
                                <td>{{$p->scan_date}}</td>
                                <td class="center">PT. Selaras Mitra Integra</td>
                                <td>
                                  <a class="btn btn-default btn" type="button" href="http://www.google.com/maps/place/{{$p->lat}},{{$p->lng}}"><i class="fa fa-envelope"></i><small> Buka Alamat</small></a>
                                </td>
                            </tr>
							@endforeach

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
    $(".select2_demo_1").select2();
            $(".select2_demo_2").select2();
            $(".select2_demo_3").select2({
                placeholder: "Select a state",
                allowClear: true
            });



</script>
@endsection

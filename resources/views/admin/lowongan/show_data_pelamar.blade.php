@extends('template.index')

@section('main')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Data Pelamar</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{url('/dashboard')}}">Home</a>
                </li>
                <li class="active">
                    <strong>Data Pelamar</strong>
                </li>
            </ol>

        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInUp">
        <div class="ibox">
            <div class="ibox-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="m-b-md">
                            @foreach($pelamar as $p)
                            <h2>Data {{$p->nama_lengkap}}</h2>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5">
                        <dl class="dl-horizontal">
                            @foreach($pelamar as $p)
                            <div class="m-b-sm"><center>
                                    <img alt="image" class="img-circle" src="/storage/avatars/{{ $p->lampiran_foto }}" style="width: 75px; height: 75px">
                            </center>
                            </div>
                            <dt>Nama Lengkap :</dt> <dd>{{$p->nama_lengkap}}</dd>
                            <dt>Nama Panggilan :</dt> <dd>{{$p->nama_panggilan}}</dd>
                            <dt>TTL :</dt> <dd><a href="#" class="text-navy"> {{$p->tempat_lahir}}, {{$p->tanggal_lahir}}</a> </dd>
                            <dt>Jenis Kelamin :</dt> <dd>{{$p->jenis_kelamin}} </dd>
                            @endforeach
                        </dl>
                    </div>
                    <div class="col-lg-7" id="cluster_info">
                        <dl class="dl-horizontal" >
                            @foreach($pelamar as $p)
                            <dt>Agama :</dt> <dd>{{$p->agama}}</dd>
                            <dt>Alamat KTP :</dt> <dd> 	{{$p->alamat_ktp}} </dd>
                            <dt>Alamat Domisili:</dt> <dd> 	{{$p->alamat_domisili}} </dd>
                            <dt>Email :</dt> <dd> 	{{$p->email}} </dd>
                            <dt>Nomor Telepon :</dt> <dd> 	{{$p->notelp}} </dd>
                            <dt>Nomor HP :</dt> <dd> 	{{$p->nohp}} </dd>
                            <dt>Nomor KTP :</dt> <dd> 	{{$p->nomor_idcard}} </dd>
                            <dt>Status :</dt> <dd> 	{{$p->status_keluarga}} </dd>
                                <br><dd><a type="button" class="btn btn-primary " href="{{url()->current()}}/pdf" type="button"><i class="fa fa-print"> Download PDF</i></a></dd>
                            @endforeach
                        </dl>
                    </div>
                </div>

                <div class="row m-t-sm">
                    <div class="col-lg-12">
                    <div class="panel blank-panel">
                    <div class="panel-heading">
                        <div class="panel-options">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab-1" data-toggle="tab">Riwayat Pendidikan</a></li>
                                <li class=""><a href="#tab-2" data-toggle="tab">Riwayat Pekerjaan</a></li>
                                <!-- <li class=""><a href="#tab-3" data-toggle="tab">Riwayat Pekerjaan</a></li> -->
                                <li class=""><a href="#tab-4" data-toggle="tab">Minat</a></li>
                                <li class=""><a href="#tab-5" data-toggle="tab">Pendidikan Bahasa</a></li>
                                <li class=""><a href="#tab-6" data-toggle="tab">Pendidikan Non Formal</a></li>
                                <li class=""><a href="#tab-7" data-toggle="tab">Pengalaman Organisasi</a></li>
                                <li class=""><a href="#tab-8" data-toggle="tab">Riwayat Penyakit</a></li>
                                <li class=""><a href="#tab-9" data-toggle="tab">Lampiran</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="panel-body">

                    <div class="tab-content">
                      <div class="tab-pane active" id="tab-1">

                        <table class="table table-bordered">
                                  <thead>
                                  <tr>
                                      <th><center>No</center></th>
                                      <th>Jenjang Pendidikan</th>
                                      <th><center>Institusi</center></th>
                                      <th><center>Tanggal Mulai</center></th>
                                      <th><center>Tanggal Berakhir</center></th>
                                      <th>Jurusan</th>
                                      <th>IPK / Nilai Akhir</th>
                                      <th>Keterangan</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                    @foreach($pendidikan as $p)
                                  <tr>
                                      <td><center>-</center></td>
                                      <td><center>{{$p->strata}}</center></td>
                                      <td>{{$p->institusi}}</center></td>
                                      <td><center>{{date('d-m-Y', strtotime($p->tanggal_mulai))}}</center></td>
                                      <td><center>{{date('d-m-Y', strtotime($p->tanggal_akhir))}}</center></td>
                                      <td>{{$p->jurusan}}</td>
                                      <td><center>{{$p->IPK}}</center></td>
                                      <td>{{$p->keterangan}}</td>
                                  </tr>
                                    @endforeach
                                  </tbody>
                              </table>
                      </div>
                    <div class="tab-pane" id="tab-2">
                      <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th><center>No</center></th>
                                    <th><center>Nama Perusahaan</center></th>
                                    <th><center>Lokasi Kerja</center></th>
                                    <th><center>Tanggal Mulai</center></th>
                                    <th><center>Tanggal Akhir</center></th>
                                    <th><center>Posisi Pekerjaan</center></th>
                                    <th><center>Jumlah Bawahan</center></th>
                                    <th><center>Gaji Terakhir</center></th>
                                    <th><center>Alasan Pindah</center></th>
                                    <th>Keterangan</th>
                                </tr>
                                </thead>
                                <tbody>
                                  @foreach($pekerjaan as $p)
                                <tr>
                                    <td><center>-</center></td>
                                    <td><center>{{$p->nama_perusahaan}}</center></td>
                                    <td>{{$p->lokasi_kerja}}</center></td>
                                    <td><center>{{date('d-m-Y', strtotime($p->tanggal_mulai))}}</center></td>
                                    <td><center>{{date('d-m-Y', strtotime($p->tanggal_akhir))}}</center></td>
                                    <td><center>{{$p->posisi}}</center></td>
                                    <td><center>{{$p->bawahan}}<center></td>
                                    <td><center>{{$p->gaji_terakhir}}</center></td>
                                    <td>{{$p->alasan_pindah}}</td>
                                    <td>{{$p->keterangan}}</td>
                                </tr>
                                  @endforeach
                                </tbody>
                            </table>

                    </div>
                    <div class="tab-pane" id="tab-4">
                      <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th><center>No</center></th>
                                    <th><center>Gaji Bulanan</center></th>
                                    <th><center>Bidang Bisnis</center></th>
                                    <th><center>Lingkungan Kerja</center></th>
                                    <th><center>Spesialisasi</center></th>
                                    <th><center>Posisi Kerja</center></th>
                                    <th><center>Level Jabatan</center></th>
                                </tr>
                                </thead>
                                <tbody>
                                  @foreach($minat as $p)
                                <tr>
                                    <td><center>-</center></td>
                                    <td><center>{{$p->gaji_bulanan}}</center></td>
                                    <td><center>{{$p->name_bidangbisnis}}</center></td>
                                    <td><center>{{$p->lingkungan}}</center></td>
                                    <td><center>{{$p->spesial}}</center></td>
                                    <td><center>{{$p->posisi}}</center></td>
                                    <td><center>{{$p->jabatan}}</center></td>
                                </tr>
                                  @endforeach
                                </tbody>
                            </table>
                    </div>
                    <div class="tab-pane" id="tab-5">
                      <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th><center>No</center></th>
                                    <th><center>Bahasa</center></th>
                                    <th><center>Kemampuan Lisan</center></th>
                                    <th><center>Kemampuan Tulis</center></th>
                                </tr>
                                </thead>
                                <tbody>
                                  @foreach($pendidikan_bahasa as $p)
                                <tr>
                                    <td><center>-</center></td>
                                    <td><center>{{$p->deskripsi_bahasa}}</center></td>
                                    <td><center>{{$p->tingkat_lisan}}</center></td>
                                    <td><center>{{$p->tingkat_tulis}}</center></td>
                                </tr>
                                  @endforeach
                                </tbody>
                            </table>
                    </div>
                    <div class="tab-pane" id="tab-6">
                      <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th><center>No</center></th>
                                    <th><center>Jenis Pelatihan</center></th>
                                    <th><center>Tanggal Mulai</center></th>
                                    <th><center>Tanggal Akhir</center></th>
                                    <th><center>Tempat</center></th>
                                    <th><center>Keterangan</center></th>
                                </tr>
                                </thead>
                                <tbody>
                                  @foreach($pendidikan_nonformal as $p)
                                <tr>
                                    <td><center>-</center></td>
                                    <td><center>{{$p->jenis_pelatihan}}</center></td>
                                    <td><center>{{$p->tanggal_mulai}}</center></td>
                                    <td><center>{{$p->tanggal_akhir}}</center></td>
                                    <td><center>{{$p->tempat}}</center></td>
                                    <td><center>{{$p->keterangan}}</center></td>
                                </tr>
                                  @endforeach
                                </tbody>
                            </table>
                    </div>
                    <div class="tab-pane" id="tab-7">
                      <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th><center>No</center></th>
                                    <th><center>organisasi</center></th>
                                    <th><center>Tanggal Mulai</center></th>
                                    <th><center>Tanggal Akhir</center></th>
                                    <th><center>Tempat</center></th>
                                    <th><center>Posisi</center></th>
                                    <th><center>Keterangan</center></th>
                                </tr>
                                </thead>
                                <tbody>
                                  @foreach($pengalaman_organisasi as $p)
                                <tr>
                                    <td><center>-</center></td>
                                    <td><center>{{$p->organisasi}}</center></td>
                                    <td><center>{{$p->tanggal_mulai}}</center></td>
                                    <td><center>{{$p->tanggal_akhir}}</center></td>
                                    <td><center>{{$p->tempat}}</center></td>
                                    <td><center>{{$p->posisi}}</center></td>
                                    <td><center>{{$p->keterangan}}</center></td>
                                </tr>
                                  @endforeach
                                </tbody>
                            </table>
                    </div>
                    <div class="tab-pane" id="tab-8">
                      <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th><center>No</center></th>
                                    <th><center>Nama Penyakit</center></th>
                                    <th><center>Tanggal Mulai</center></th>
                                    <th><center>Tanggal Akhir</center></th>
                                    <th><center>Pengaruh</center></th>
                                </tr>
                                </thead>
                                <tbody>
                                  @foreach($riwayat_penyakit as $p)
                                <tr>
                                    <td><center>-</center></td>
                                    <td><center>{{$p->nama_penyakit}}</center></td>
                                    <td><center>{{$p->tanggal_mulai}}</center></td>
                                    <td><center>{{$p->tanggal_akhir}}</center></td>
                                    <td><center>{{$p->pengaruh}}</center></td>
                                </tr>
                                  @endforeach
                                </tbody>
                            </table>
                    </div>
                    <div class="tab-pane" id="tab-8">
                      <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th><center>No</center></th>
                                    <th><center>Nama Penyakit</center></th>
                                    <th><center>Tanggal Mulai</center></th>
                                    <th><center>Tanggal Akhir</center></th>
                                    <th><center>Pengaruh</center></th>
                                </tr>
                                </thead>
                                <tbody>
                                  @foreach($riwayat_penyakit as $p)
                                <tr>
                                    <td><center>-</center></td>
                                    <td><center>{{$p->nama_penyakit}}</center></td>
                                    <td><center>{{$p->tanggal_mulai}}</center></td>
                                    <td><center>{{$p->tanggal_akhir}}</center></td>
                                    <td><center>{{$p->pengaruh}}</center></td>
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


</div>
</div>



</div>
</div>


@include('template.footer')
<!-- Page-Level Scripts -->
<script>
    $(document).ready(function(){
        $("#wizard").steps();
        $("#form").steps({
            bodyTag: "fieldset",
            onStepChanging: function (event, currentIndex, newIndex)
            {
                // Always allow going backward even if the current step contains invalid fields!
                if (currentIndex > newIndex)
                {
                    return true;
                }

                // Forbid suppressing "Warning" step if the user is to young
                if (newIndex === 3 && Number($("#age").val()) < 18)
                {
                    return false;
                }

                var form = $(this);

                // Clean up if user went backward before
                if (currentIndex < newIndex)
                {
                    // To remove error styles
                    $(".body:eq(" + newIndex + ") label.error", form).remove();
                    $(".body:eq(" + newIndex + ") .error", form).removeClass("error");
                }

                // Disable validation on fields that are disabled or hidden.
                form.validate().settings.ignore = ":disabled,:hidden";

                // Start validation; Prevent going forward if false
                return form.valid();
            },
            onStepChanged: function (event, currentIndex, priorIndex)
            {
                // Suppress (skip) "Warning" step if the user is old enough.
                if (currentIndex === 2 && Number($("#age").val()) >= 18)
                {
                    $(this).steps("next");
                }

                // Suppress (skip) "Warning" step if the user is old enough and wants to the previous step.
                if (currentIndex === 2 && priorIndex === 3)
                {
                    $(this).steps("previous");
                }
            },
            onFinishing: function (event, currentIndex)
            {
                var form = $(this);

                // Disable validation on fields that are disabled.
                // At this point it's recommended to do an overall check (mean ignoring only disabled fields)
                form.validate().settings.ignore = ":disabled";

                // Start validation; Prevent form submission if false
                return form.valid();
            },
            onFinished: function (event, currentIndex)
            {
                var form = $(this);

                // Submit form input
                form.submit();
            }
        }).validate({
                    errorPlacement: function (error, element)
                    {
                        element.before(error);
                    },
                    rules: {
                        confirm: {
                            equalTo: "#password"
                        }
                    }
                });
   });
</script>



@endsection

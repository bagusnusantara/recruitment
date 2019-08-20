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
                                <li class=""><a href="#tab-2" data-toggle="tab">Keluarga</a></li>
                                <li class=""><a href="#tab-3" data-toggle="tab">Riwayat Pekerjaan</a></li>
                                <li class=""><a href="#tab-4" data-toggle="tab">Minat</a></li>
                                <li class=""><a href="#tab-5" data-toggle="tab">Aktivitas</a></li>
                                <li class=""><a href="#tab-6" data-toggle="tab">Lainnya</a></li>
                                <li class=""><a href="#tab-7" data-toggle="tab">Lampiran</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="panel-body">

                    <div class="tab-content">
                    <div class="tab-pane active" id="tab-1">
                      <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Jenjang Pendidikan</th>
                                    <th>Institusi</th>
                                    <th>Tanggal Mulai</th>
                                    <th>Tanggal Berakhir</th>
                                    <th>Jurusan</th>
                                    <th>IPK</th>
                                    <th>Keterangan</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td></td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                </tbody>
                            </table>

                    </div>
                    <div class="tab-pane" id="tab-2">

                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Status</th>
                                <th>Title</th>
                                <th>Start Time</th>
                                <th>End Time</th>
                                <th>Comments</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <span class="label label-primary"><i class="fa fa-check"></i> Completed</span>
                                </td>
                                <td>
                                   Create project in webapp
                                </td>
                                <td>
                                   12.07.2014 10:10:1
                                </td>
                                <td>
                                    14.07.2014 10:16:36
                                </td>
                                <td>
                                <p class="small">
                                    Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable.
                                </p>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <span class="label label-primary"><i class="fa fa-check"></i> Accepted</span>
                                </td>
                                <td>
                                    Various versions
                                </td>
                                <td>
                                    12.07.2014 10:10:1
                                </td>
                                <td>
                                    14.07.2014 10:16:36
                                </td>
                                <td>
                                    <p class="small">
                                        Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                    </p>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <span class="label label-primary"><i class="fa fa-check"></i> Sent</span>
                                </td>
                                <td>
                                    There are many variations
                                </td>
                                <td>
                                    12.07.2014 10:10:1
                                </td>
                                <td>
                                    14.07.2014 10:16:36
                                </td>
                                <td>
                                    <p class="small">
                                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which
                                    </p>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <span class="label label-primary"><i class="fa fa-check"></i> Reported</span>
                                </td>
                                <td>
                                    Latin words
                                </td>
                                <td>
                                    12.07.2014 10:10:1
                                </td>
                                <td>
                                    14.07.2014 10:16:36
                                </td>
                                <td>
                                    <p class="small">
                                        Latin words, combined with a handful of model sentence structures
                                    </p>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <span class="label label-primary"><i class="fa fa-check"></i> Accepted</span>
                                </td>
                                <td>
                                    The generated Lorem
                                </td>
                                <td>
                                    12.07.2014 10:10:1
                                </td>
                                <td>
                                    14.07.2014 10:16:36
                                </td>
                                <td>
                                    <p class="small">
                                        The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
                                    </p>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <span class="label label-primary"><i class="fa fa-check"></i> Sent</span>
                                </td>
                                <td>
                                    The first line
                                </td>
                                <td>
                                    12.07.2014 10:10:1
                                </td>
                                <td>
                                    14.07.2014 10:16:36
                                </td>
                                <td>
                                    <p class="small">
                                        The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                                    </p>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <span class="label label-primary"><i class="fa fa-check"></i> Reported</span>
                                </td>
                                <td>
                                    The standard chunk
                                </td>
                                <td>
                                    12.07.2014 10:10:1
                                </td>
                                <td>
                                    14.07.2014 10:16:36
                                </td>
                                <td>
                                    <p class="small">
                                        The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.
                                    </p>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <span class="label label-primary"><i class="fa fa-check"></i> Completed</span>
                                </td>
                                <td>
                                    Lorem Ipsum is that
                                </td>
                                <td>
                                    12.07.2014 10:10:1
                                </td>
                                <td>
                                    14.07.2014 10:16:36
                                </td>
                                <td>
                                    <p class="small">
                                        Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable.
                                    </p>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <span class="label label-primary"><i class="fa fa-check"></i> Sent</span>
                                </td>
                                <td>
                                    Contrary to popular
                                </td>
                                <td>
                                    12.07.2014 10:10:1
                                </td>
                                <td>
                                    14.07.2014 10:16:36
                                </td>
                                <td>
                                    <p class="small">
                                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical
                                    </p>
                                </td>

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

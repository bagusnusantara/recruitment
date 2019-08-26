@extends('template.index')

@section('main')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Penerimaan Karyawan</h2>
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
                <div class="ibox">
                    <div class="ibox-title">
                        <h5>Penerimaan Karyawan</h5>
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
                        <h2>
                            Seleksi Penerimaan Karyawan
                        </h2>

                        <div class="row">
                        <form id="form" action="#" class="wizard-big">
                            @foreach($lowongan as $l)
                            @if($l->st_nilai_administrasi == 1)
                            <h1 class='col'>Administrasi</h1>
                            <fieldset>
                                <h2>Seleksi Administrasi</h2>
                                <table class="table table-bordered" >
                                    <thead>
                                    <tr>
                                        <th><center>No</center></th>
                                        <th><center>NIK</center></th>
                                        <th><center>Nama Pendaftar</center></th>
                                        <th><center>Tanggal Melamar</center></th>
                                        <th><center>Status Seleksi Administrasi</center></th>
                                        <th><center>Action</center></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php
                                        $i=1;
                                    @endphp
                                    @foreach($nilai as $p)

                                        <tr>
                                            <td><center>{{$i}}</center></td>
                                            <td><center>{{$p->nik}}</center></td>
                                            <td><center>{{$p->nama_lengkap}}</center></td>
                                            <td><center>{{$p->entry_date}}</center></td>
                                            <td><center>
                                                    @if ( $p->nilai_administrasi === 1)
                                                        <button type="button" class="btn btn-primary btn-xs">Lolos</button>
                                                    @elseif ($p->nilai_administrasi === 0)
                                                        <button type="button" class="btn btn-danger btn-xs">Tidak Lolos</button>
                                                    @endif</center>
                                            </td>
                                            <td>
                                                <center>
                                                    <button class="btn btn-default btn-circle"
                                                            data-mykode="{{$p->id}}"
                                                            data-mynik="{{$p->nik}}"
                                                            data-mynama_lengkap="{{$p->nama_lengkap}}"
                                                            data-mynilai_administrasi="{{$p->nilai_administrasi}}"
                                                            data-toggle="modal" data-target="#edit"><i class="fa fa-pen-square"></i>
                                                    </button>
                                                </center>
                                            </td>

                                            @php
                                                $i++;
                                            @endphp
                                            @endforeach
                                        </tr>
                                    </tbody>
                                </table>
                            </fieldset>
                            @endif
                            @if($l->st_nilai_interview_walk == 1)
                            <h1 class="col">Walk in Interview</h1>
                            <fieldset>
                                <h2>Seleksi Walk in Interview</h2>
                                <table class="table table-bordered" >
                                    <thead>
                                    <tr>
                                        <th><center>No</center></th>
                                        <th><center>NIK</center></th>
                                        <th><center>Nama Pendaftar</center></th>
                                        <th><center>Tanggal Melamar</center></th>
                                        <th><center>Status Seleksi Administrasi</center></th>
                                        <th><center>Status Walk in Interview</center></th>
                                        <th><center>Action</center></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php
                                        $i=1;
                                    @endphp
                                    @foreach($nilai as $p)

                                        <tr>
                                            <td><center>{{$i}}</center></td>
                                            <td><center>{{$p->nik}}</center></td>
                                            <td><center>{{$p->nama_lengkap}}</center></td>
                                            <td><center>{{$p->entry_date}}</center></td>
                                            <td><center>
                                                    @if ( $p->nilai_administrasi === 1)
                                                        <button type="button" class="btn btn-primary btn-xs">Lolos</button>
                                                    @elseif ($p->nilai_administrasi === 0)
                                                        <button type="button" class="btn btn-danger btn-xs">Tidak Lolos</button>
                                                    @endif
                                                </center>
                                            </td>
                                            <td><center>
                                                    @if ( $p->nilai_walk_in === 1)
                                                        <button type="button" class="btn btn-primary btn-xs">Lolos</button>
                                                    @elseif ($p->nilai_walk_in === 0)
                                                        <button type="button" class="btn btn-danger btn-xs">Tidak Lolos</button>
                                                    @endif
                                                </center>
                                            </td>
                                            <td>
                                                <center>
                                                    <button class="btn btn-default btn-circle"
                                                            data-mykode="{{$p->id}}"
                                                            data-mynik="{{$p->nik}}"
                                                            data-mynama_lengkap="{{$p->nama_lengkap}}"
                                                            data-mynilai_administrasi="{{$p->nilai_administrasi}}"
                                                            data-mynilai_walk_in="{{$p->nilai_walk_in}}"
                                                            data-toggle="modal" data-target="#edit"><i class="fa fa-pen-square"></i>
                                                    </button>
                                                </center>
                                            </td>

                                            @php
                                                $i++;
                                            @endphp
                                            @endforeach
                                        </tr>
                                    </tbody>
                                </table>
                            </fieldset>
                            @endif
                            @if($l->st_nilai_psikotes == 1)
                            <h1 class='col'>TKD</h1>
                            <fieldset>
                              <div class="row">
                                  <div class="col-lg-2">
                                      <div class="form-group">
                                          <center>1</center>
                                          <input id="name" name="name" type="text" class="form-control">
                                      </div>
                                      <div class="form-group">
                                          <center>2</center>
                                          <input id="surname" name="surname" type="text" class="form-control">
                                      </div>
                                  </div>
                                  <div class="col-lg-2">
                                      <div class="form-group">
                                          <center>3</center>
                                          <input id="email" name="email" type="text" class="form-control">
                                      </div>
                                      <div class="form-group">
                                          <center>4</center>
                                          <input id="address" name="address" type="text" class="form-control">
                                      </div>
                                  </div>
                                  <div class="col-lg-2">
                                      <div class="form-group">
                                          <center>5</center>
                                          <input id="email" name="email" type="text" class="form-control">
                                      </div>
                                      <div class="form-group">
                                          <center>6</center>
                                          <input id="address" name="address" type="text" class="form-control">
                                      </div>
                                  </div>
                                  <div class="col-lg-2">
                                      <div class="form-group">
                                          <center>7</center>
                                          <input id="email" name="email" type="text" class="form-control">
                                      </div>
                                      <div class="form-group">
                                          <center>8</center>
                                          <input id="address" name="address" type="text" class="form-control">
                                      </div>
                                  </div>
                                  <div class="col-lg-2">
                                      <div class="form-group">
                                          <center>9</center>
                                          <input id="email" name="email" type="text" class="form-control">
                                      </div>
                                      <div class="form-group">
                                          <center>10</center>
                                          <input id="address" name="address" type="text" class="form-control">
                                      </div>
                                  </div>

                              </div>
                            </fieldset>
                            @endif
                            @if($l->st_nilai_psikotes == 1)
                            <h1 class='col'>Psikotes</h1>
                            <fieldset>
                                <h2>Hasil Seleksi Psikotes</h2>
                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <center>SE</center>
                                            <input id="name" name="name" type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <center>WA</center>
                                            <input id="surname" name="surname" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <center>AN</center>
                                            <input id="email" name="email" type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <center>GE</center>
                                            <input id="address" name="address" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <center>RA</center>
                                            <input id="email" name="email" type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <center>ZR</center>
                                            <input id="address" name="address" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <center>FA</center>
                                            <input id="email" name="email" type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <center>WU</center>
                                            <input id="address" name="address" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <center>ME</center>
                                            <input id="email" name="email" type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <center>IQ</center>
                                            <input id="address" name="address" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            @endif
                            @if($l->st_nilai_interview_regular==1)
                            @endif
                            @if($l->st_nilai_interview_user==1)
                            @endif
                          @endforeach
                        </form>
                        </div>
                    </div>
                </div>
                </div>

            </div>
        </div>

    {{-- Update data --}}
    <div class="modal inmodal fade" id="edit" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title">Penilaian Seleksi Administrasi</h4>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{url('/admin/lowongan/penilaian/update/{id}')}}" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    @include('admin.lowongan.show_penilaian_administrasi_form')
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                </form>
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
    <script>
        $('#edit').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal

            var kode = button.data('mykode')
            var nik = button.data('mynik')
            var nama_lengkap = button.data('mynama_lengkap')
            var nilai_administrasi = button.data('mynilai_administrasi')
            var nilai_walk_in = button.data('mynilai_walk_in')


            var modal = $(this)
            modal.find('.modal-body #id').val(kode);
            modal.find('.modal-body #nik').val(nik);
            modal.find('.modal-body #nama_lengkap').val(nama_lengkap);
            modal.find('.modal-body #nilai_administrasi').val(nilai_administrasi);
            modal.find('.modal-body #nilai_walk_in').val(nilai_walk_in);
        })
    </script>



@endsection

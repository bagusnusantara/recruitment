@extends('template.index')

@section('main')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Mutasi Pegawai</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{url('/dashboard')}}">Home</a>
                </li>
                <li class="">
                    <strong>Mutasi Pegawai</strong>
                </li>
                <li class="active">
                    <strong>Create</strong>
                </li>
            </ol>

        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight">

        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Tambah Mutasi Pegawai</h5>
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
                        <form method="POST" id="postForm" action="{{url('/hrd/sdm/mutasi/store')}}" class="form-horizontal" enctype="multipart/form-data" onsubmit="return postForm()">
                            @csrf
                            <div class="form-group"><label class="col-sm-2 control-label">Nomor Surat</label>
                                <div class="col-sm-10"><input type="text" class="form-control" name="no_spt"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">Nama Pegawai</label>
                                <div class="col-sm-10">
                                    <select class="select2_demo_3 form-control" name="md_jobseeker_id">
                                        <option value="0">Pilih ... </option>
                                        @foreach($md_jobseeker as $j)
                                            <option value="{{$j->users_id}}">{{$j->NIK}} - {{$j->nama_lengkap}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">Jenis Kontrak</label>
                                <div class="col-sm-10">
                                    <select class="select2_demo_3 form-control" name="jenis_kontrak">
                                        <option value="0">Pilih ... </option>
                                        <option value="PKWT">PKWT</option>
                                        <option value="Pegawai Tetap">Pegawai Tetap</option>
                                        <option value="Pegawai Jeda">Pegawai Jeda</option>
                                        <option value="Harian Lepas">Harian Lepas</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">Site Baru</label>
                                <div class="col-sm-10">
                                    <select class="select2_demo_3 form-control" name="md_client_id">
                                        <option value="0">Pilih ... </option>
                                        @foreach($md_client as $client)
                                            <option value="{{$client->id}}">{{$client->nama_client}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">Jabatan</label>
                                <div class="col-sm-10">
                                    <select class="select2_demo_3 form-control" name="jabatan_baru">
                                        <option value="0">Pilih ... </option>
                                        @foreach($st_jabatan as $jabatan)
                                            <option value="{{$jabatan->kode}}">{{$jabatan->Deskripsi}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group"><label class="col-sm-2 control-label" for="Kota">Kota</label>
                                <div class="col-sm-10">
                                    <select class="select2_demo_3 form-control" name="st_kabkota_id">
                                        <option value="0">Pilih . . .</option>
                                        @foreach($st_kabkota as $k)
                                            <option value="{{$k->id}}">{{$k->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group" id="data_1">
                                <label class="col-sm-2 control-label">Tanggal Mulai Kontrak</label>
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" name="tgl_mulai_kontrak" class="form-control" value="">
                                </div>
                            </div>
                            <div class="form-group" id="data_1">
                                <label class="col-sm-2 control-label">Tanggal Akhir Kontrak</label>
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" name="tgl_akhir_kontrak" class="form-control" value="">
                                </div>
                            </div>

                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-white" type="submit">Cancel</button>
                                    <button class="btn btn-primary" type="submit">Save changes</button>
                                </div>
                            </div>
                        </form>
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
    <!-- SUMMERNOTE -->
    <script src="{{asset('inspinia/js/plugins/summernote/summernote.min.js') }}"></script>

    <script>
        //  $(document).ready(function(){
        //
        //      $('.summernote').summernote({
        //        height: 200,
        //      });
        //
        // });
        $(document).ready(function() {
            $('#summernote').summernote({
                height: "200px",
                width : "800px"
            });
        });
        $(document).ready(function() {
            $('#summernote2').summernote({
                height: "200px",
                width : "800px"
            });
        });
        var postForm = function() {
            var persyaratan = $('textarea[name="persyaratan"]').html($('#summernote').code());
            var deskripsi_pekerjaan = $('textarea[name="deskripsi_pekerjaan"]').html($('#summernote2').code());
        }
        $('#data_1 .input-group.date').datepicker({
            todayBtn: "linked",
            keyboardNavigation: false,
            forceParse: false,
            calendarWeeks: true,
            autoclose: true
        });

    </script>
    <!-- iCheck -->
    <script src="{{ asset('inspinia/js/plugins/iCheck/icheck.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>
    <!-- Select2 -->
    <script src="{{ asset('inspinia/js/plugins/select2/select2.full.min.js') }}"></script>
    <script>
        $(".select2_demo_1").select2();
        $(".select2_demo_2").select2();
        $(".select2_demo_3").select2({
            placeholder: "Select a state",
            allowClear: true
        });
    </script>
@endsection



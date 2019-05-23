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
                        <h5>Input <small>Lowongan Pekerjaan</small></h5>
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
                        <form method="POST" action="{{url('/admin/lowonganpekerjaan/store')}}" class="form-horizontal" enctype="multipart/form-data">
                            @csrf
                            <div class="col-lg-6 control-label">
                                <div class="form-group"><label class="col-sm-2 control-label">Job Tittle</label>
                                    <div class="col-sm-10"><input type="text" class="form-control" name="job_tittle"></div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Client</label>

                                    <div class="col-sm-10">
                                      <select class="form-control m-b" name="md_client_id">
                                        @foreach($md_client as $client)
                                        <option value="{{$client->id}}">{{$client->nama_client}}</option>
                                        @endforeach
                                      </select>
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Kategori Pekerjaan</label>
                                    <div class="col-sm-10">
                                        <select class="form-control m-b" name="st_kategori_pekerjaan">
                                          @foreach($st_kategori_pekerjaan as $kategori)
                                          <option value="{{$kategori->id}}">{{$kategori->deskripsi}}</option>
                                          @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Spesialisasi Pekerjaan</label>
                                    <div class="col-sm-10">
                                        <select class="form-control m-b" name="st_spesialisasi_pekerjaan">
                                          @foreach($st_spesialisasi_pekerjaan as $spesialisasi)
                                          <option value="{{$spesialisasi->id}}">{{$spesialisasi->deskripsi}}</option>
                                          @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Persyaratan</label>
                                    <div class="col-sm-10"><textarea type="textarea" rows="15" cols="50" class="form-control" name="persyaratan"></textarea>
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Deskripsi Pekerjaan</label>
                                    <div class="col-sm-10"><textarea type="textarea" rows="15" cols="50" class="form-control" name="deskripsi_pekerjaan"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 control-label">
                                <div class="form-group"><label class="col-sm-2 control-label">Lokasi</label>

                                    <div class="col-sm-10"><input type="text" class="form-control"></div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Gaji</label>
                                    <div class="col-sm-10"><input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Masa Berlaku</label>
                                    <div class="col-sm-10"><input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Foto</label>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-10" data-provides="fileinput">
                                                                <span class="btn btn-default btn-file"><span class="fileinput-new"></span>
                                                                <input type="file" name="file_kk"/></span>
                                        <span class="fileinput-filename"></span>
                                        <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">×</a>
                                    </div>
                                </div>


                            </div>

                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-white" type="submit">Cancel</button>
                                    <button class="btn btn-primary" type="submit">Simpan</button>
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

@endsection

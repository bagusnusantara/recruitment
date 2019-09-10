{{-- Update data 1--}}
<div class="modal inmodal fade" id="edit1" tabindex="-1" role="dialog"  aria-hidden="true">
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
{{-- Update data 2--}}
<div class="modal inmodal fade" id="edit2" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Penilaian Seleksi Walk in Interview</h4>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{url('/admin/lowongan/penilaian/update/{id}')}}" class="form-horizontal" enctype="multipart/form-data">
                @csrf
                @include('admin.lowongan.show_penilaian_walk_in_form')
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>
{{-- Update data 3--}}
<div class="modal inmodal fade" id="edit3" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">TKD</h4>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{url('/admin/lowongan/penilaian/update/{id}')}}" class="form-horizontal" enctype="multipart/form-data">
                @csrf
                @include('admin.lowongan.show_penilaian_tkd')
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>
{{-- Update data 4--}}
<div class="modal inmodal fade" id="edit4" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Psikotes</h4>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{url('/admin/lowongan/penilaian/update/{id}')}}" class="form-horizontal" enctype="multipart/form-data">
                @csrf
                @include('admin.lowongan.show_penilaian_psikotes')
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>
{{-- Update data 5--}}
<div class="modal inmodal fade" id="edit5" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Interview Psikolog</h4>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{url('/admin/lowongan/penilaian/update/{id}')}}" class="form-horizontal" enctype="multipart/form-data">
                @csrf
                @include('admin.lowongan.show_penilaian_walk_in_form')
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>
{{-- Update data 6--}}
<div class="modal inmodal fade" id="edit6" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Interview User</h4>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{url('/admin/lowongan/penilaian/update/{id}')}}" class="form-horizontal" enctype="multipart/form-data">
                @csrf
                @include('admin.lowongan.show_penilaian_walk_in_form')
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>
{{-- Update data 7--}}
<div class="modal inmodal fade" id="edit7" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Hiring</h4>
            </div>
            <div class="modal-body">
                <form method="POST" id="postForm" action="{{url('/hrd/sdm/mutasi/store')}}" class="form-horizontal" enctype="multipart/form-data" onsubmit="return postForm()">
                    @csrf
                    <div class="form-group"><label class="col-sm-2 control-label">Nomor Surat</label>
                        <div class="col-sm-10"><input type="text" class="form-control" name="no_spt"></div>
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

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>


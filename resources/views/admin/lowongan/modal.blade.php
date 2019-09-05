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


<div class="modal inmodal" id="Modaltambah" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content animated fadeIn">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Tambah Presensi</h4>
            </div>
            <div class="modal-body">
                <form method="POST" action="" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    @include('pegawai.presensi.form')
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" type="button">Simpan</button>
            </div>
        </div>
    </div>
</div>
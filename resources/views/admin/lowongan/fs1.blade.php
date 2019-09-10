<h2>Seleksi Administrasi</h2>
<table border="0" cellspacing="5" cellpadding="5">
    <tbody>
    <tr>
        <td>IPK Minimal : </td>
        <td><input type="text" id="min" name="min"></td>
    </tr>
    </tbody>
</table>
<table class="table table-striped table-bordered table-hover dataTables-1" >

    <thead>
    <tr>
        <th><center>No</center></th>
        <th><center>NIK</center></th>
        <th><center>Nama Pendaftar</center></th>
        <th><center>Tanggal Melamar</center></th>
        <th><center>Usia</center></th>
        <th><center>Pendidikan Terakhir</center></th>
        <th><center>IPK</center></th>
        <th><center>Status Seleksi Administrasi</center></th>
        <th><center>Action</center></th>
    </tr>
    </thead>
    <tbody>
    @php
        $i=1;
    @endphp
    @foreach($nilai as $p)

        <tr style="background-color:#e6f2ff">
            <td><center>{{$i}}</center></td>
            <td><center>{{$p->NIK}}</center></td>
            <td><center>{{$p->nama_lengkap}}</center></td>
            <td><center>{{$p->entry_date}}</center></td>
            <td><center>{{$p->tanggal_lahir}}</center></td>
            <td>{{$p->pendidikan_terakhir}}</td>
            <td>{{$p->nilai}}</td>
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
                            data-mynik="{{$p->NIK}}"
                            data-mynama_lengkap="{{$p->nama_lengkap}}"
                            data-mynilai_administrasi="{{$p->nilai_administrasi}}"
                            data-toggle="modal" data-target="#edit1"><i class="fa fa-pen-square"></i>
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

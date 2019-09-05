<h2>Hiring</h2>
<table  class="table table-striped table-bordered table-hover dataTables-2" >
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
            <td><center>{{$p->NIK}}</center></td>
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
                            data-mynik="{{$p->NIK}}"
                            data-mynama_lengkap="{{$p->nama_lengkap}}"
                            data-mynilai_administrasi="{{$p->nilai_administrasi}}"
                            data-mynilai_walk_in="{{$p->nilai_walk_in}}"
                            data-toggle="modal" data-target="#edit7"><i class="fa fa-pen-square"></i>
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

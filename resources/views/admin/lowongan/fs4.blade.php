<h2>Psikotes</h2>
<table  class="table table-striped table-bordered table-hover dataTables-3" >
    <thead>
    <tr>
        <th><center>No</center></th>
        <th><center>NIK</center></th>
        <th><center>Nama Pendaftar</center></th>
        <th><center>Tanggal Melamar</center></th>
        <th><center>Status Seleksi Administrasi</center></th>
        <th><center>Status Walk in Interview</center></th>
        <th><center>SE</center></th>
        <th><center>WA</center></th>
        <th><center>AN</center></th>
        <th><center>GE</center></th>
        <th><center>RA</center></th>
        <th><center>ZR</center></th>
        <th><center>FA</center></th>
        <th><center>WU</center></th>
        <th><center>ME</center></th>
        <th><center>IQ</center></th>
        <th><center>TINTUM</center></th>
        <th><center>ARMY ALFA</center></th>
        <th><center>TPP 5</center></th>
        <th><center>TPP 8</center></th>
        <th><center>TPP 6</center></th>
        <th><center>TPP 7</center></th>
        <th><center>TIKI F1</center></th>
        <th><center>TIKI F2</center></th>
        <th><center>TIKI F3</center></th>
        <th><center>CFIT 3A</center></th>
        <th><center>KRAEPLIN</center></th>
        <th><center>PAULI</center></th>
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
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>

            <td>
                <center>
                    <button class="btn btn-default btn-circle"
                            data-mykode="{{$p->id}}"
                            data-mynik="{{$p->NIK}}"
                            data-mynama_lengkap="{{$p->nama_lengkap}}"
                            data-mynilai_administrasi="{{$p->nilai_administrasi}}"
                            data-mynilai_walk_in="{{$p->nilai_walk_in}}"
                            data-toggle="modal" data-target="#edit4"><i class="fa fa-pen-square"></i>
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

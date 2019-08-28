<!DOCTYPE html>
<html>
<style>
    body {
        background-color: rgba(52, 73, 94,1.0);
        margin: 0;
        font-family: 'Open Sans';
        padding: 10px 0;
        font-size: 5pt;
        color: #000;
        position: relative;
    }

    #download {
        position: fixed;
        top: 40px;
        right: 20px;
        border-radius: 0px;
        color: #fff;
        font-weight: 700;
        padding: 10px 20px;
        border: none;
        font-size: 15px;
        background-color: rgba(22, 160, 133,1.0);
        text-align: center;
        vertical-align: middle;
        cursor: pointer;
        opacity: 0.8;
        z-index: 999;
    }

    #download:hover {
        opacity: 1;
        -webkit-transition: opacity .2s;
        -moz-transition: opacity .2s;
        transition: opacity .2s;
    }

    section {
        margin-bottom: 10px;
    }

    .text-left {
        text-align: left !important;
    }

    .text-center {
        text-align: center !important;
    }

    .text-right {
        text-align: right !important;
    }

    .pull-left {
        float: left;
    }

    .pull-right {
        float: right;
    }

    .email {
        text-transform: none !important;
    }

    .container {
        width: 21cm;
        /*height: 30.9cm;*/
        margin: 30px auto;
        padding: 40px 30px 30px;
        background-color: #FFF;
    }

    p {
        margin: 0;
    }

    .english-field {
        font-style: italic;
    }

    /*HEADER*/
    .header {
        position: relative;
    }

    .header-top {
        text-align: left;
        font-size: 16pt;
        font-weight: bold;
        line-height: 1.2;
        padding-bottom: 10px;
        border-bottom: 3px solid #BBB;
    }

    #header-top-main {
        margin-left: 130px;
        padding: 20px;
        background-color: #ddd;
    }

    .header-top .english-field {
        font-size: 14px;
    }

    #logo {
        position: absolute;
        top: 10px;
        left: 0;
    }

    #logo img {
        max-width: 120px;
        max-height: 120px;
    }

    #foto {
        position: absolute;
        top: 0;
        right: 1px;
        border-left: 15px solid #fff;
        background-color: #fff;
    }

    #foto img {
        max-width: 120px;
        max-height: 150px;
        border: 5px solid #fff;
        -webkit-box-shadow: 0px 0px 0px 1px rgba(44,62,80,0.25);
        -moz-box-shadow: 0px 0px 0px 1px rgba(44,62,80,0.25);
        box-shadow: 0px 0px 0px 1px rgba(44,62,80,0.25);
    }

    /*NOTE*/
    #note {
        margin-top: 10px;
        font-size: 11px;
    }

    #note p {
        margin-left: 10px;
    }

    /*BODY*/
    .body {
        margin-top: 10px;
        min-height: 60px;
        line-height: 1;
    }

    .section-header {
        font-weight: bold;
        background-color: #ddd;
        border-bottom: 1px solid #ccc;
        padding: 8px 10px;
        margin-top: 30px;
    }

    .section-body .section-row {
        clear: both;
        margin-top: 5px;
        min-height: 35px;
        border-bottom: 1px solid #ccc;
    }

    .section-body .section-row-sub {
        clear: both;
        margin-top: 5px;
        min-height: 35px;
    }

    .section-body .section-row:first-child {
        margin-top: 10px;
    }

    .section-number {
        float: left;
        width: 20px;
    }

    .section-body {
        margin-left: 10px;
    }

    .section-foto {
        position: relative;
    }

    .section-body .main-field {
        clear: both;
    }

    .section-body .english-field {
        font-size: 8pt;
    }

    .section-body label {
        float: left;
        width: 160px;
    }

    .sub-row label {
        float: left;
        width: 130px;
        margin-left: 30px;
    }

    .section-body .content {
        margin-left: 170px;
        text-transform: uppercase;
        line-height: 2em;
    }

    #minat .content {
        line-height: 1em;
    }

    #minat .section-row {
        min-height: 25px;
    }

    #sosial .section-row .main-field-number {
        float: left;
        width: 25px;
    }

    #sosial .section-row .main-field-content {
        float: left;
        width: 100px !important;
    }

    #sosial .section-row .sub-field {
        margin-left: 25px;
    }

    #informasi .section-row {
        margin-top: 20px;
        min-height: 25px;
    }

    #informasi .section-row .main-field-number {
        float: left;
        width: 25px;
    }

    #informasi .section-row label {
        float: left;
        width: 330px !important;
    }

    #informasi .section-row .main-field-content {
        float: left;
        width: 300px !important;
    }

    #informasi .section-row .content {
        margin-left: 330px;
        text-transform: uppercase;
        line-height: 1em;
    }

    .wide-row {
        border-bottom: none !important;
    }

    .wide-row label {
        width: 100%;
        margin-bottom: 10px;
    }

    .wide-row .content {
        margin-left: 15px;
    }

    .wide-row .content table {
        font-size: 8pt;
        width: 100%;
        /*width: 725px !important;*/
        display: table;
        border-spacing: 0;
        line-height: 1.3;
        table-layout: fixed;
    }

    .wide-row .content thead {
        display: table-header-group;
        vertical-align: middle;
    }

    .wide-row .content table th {
        text-transform: none;
        padding: 5px 10px;
        background-color: #ddd;
        border-right: 1px solid #bbb;
        border-top: 1px solid #bbb;
    }

    .wide-row .content table th:first-child {
        border-left: 1px solid #bbb;
    }

    .wide-row .content table .colspan {
        border-bottom: none;
    }

    .wide-row .content table .colspan-row {
        border-left: none !important;
    }

    .wide-row .content tr {
        display: table-row;
        vertical-align: inherit;
        margin: 0;
    }

    .wide-row .content table td {
        text-transform: none;
        padding: 3px 5px;
        vertical-align: top;
        border: 1px solid #bbb;
        border-left: none;
        border-bottom: none;
        word-wrap: break-word;
    }

    .wide-row .content table td:first-child {
        border-left: 1px solid #bbb;
    }

    .wide-row .content table tr:last-child td {
        border-bottom: 1px solid #bbb;
    }

    .wide-row .main-field-number {
        float: left;
        width: 15px;
    }

    .wide-row .main-field-content {
        float: left;
        width: 720px;
    }

    /*FOOTER*/
    #footer {
        margin-top: 40px;
    }

    @media print {
        .container {
            margin: 0;
            padding: 0;
            width: 21cm;
            height: 29.7cm;
        }

        .dif-page {
            margin-top: 2cm;
        }

        #download {
            display: none;
        }

        body {
            background-color: #FFF;
            margin: 0;
            padding: 0;
        }
    }

    .long-content {
        word-wrap: break-word;
    }
</style>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Curriculum Vitae</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:300italic,300" />
</head>
{{--<body>--}}
{{--<center>--}}
{{--    <img src="http://selarasmitraintegra.com/smicms/img/smi-logo.png" style="width:100px;height:50px;">--}}
{{--    <h5><b>PT Selaras Mitra Integra</b></h5>--}}
{{--    <p>Jl Ketintang Madya 80 Surabaya Telp 031 8285737</p>--}}
{{--    <hr>--}}
{{--    <h5><b>DAFTAR RIWAYAT HIDUP</b></h5>--}}
{{--    <h6><i><b>Curiculum Vitae</b></i></h6>--}}
{{--</center>--}}
<body class="page-top" class="index">
<div class="container">
    <div class="header">
        <div class="header-top">
            <div id="logo">
                    <img src="http://selarasmitraintegra.com/smicms/img/smi-logo.png" style="width:100px;height:50px;">
            </div>
            <div id="header-top-main">
                RIWAYAT HIDUP<br>
                <span class="english-field">CURRICULUM VITAE</span>
            </div>
        </div>
    </div>
<div class="body">
<section id="identitas">
    @foreach($pelamar as $p)

    <div class="section-header">
        <div class="section-number">I.</div>
        <div class-"section-heading">IDENTITAS / <span class="english-field">IDENTITY</span></div>
    </div>
    <div class="section-body section-foto">
        <div id="foto">
        </div>
        <div class="section-row side-foto">
            <label>
                <div class="main-field">Nama Lengkap</div>
                <span class="english-field">Full Name</span>
            </label>
            <div class="content">{{$p->nama_lengkap}}</div>
        </div>
        <div class="section-row side-foto">
            <label>
                <div class="main-field">Nama Panggilan</div>
                <span class="english-field">Nick Name</span>
            </label>
            <div class="content">{{$p->nama_panggilan}}</div>
        </div>
        <div class="section-row">
            <label>
                <div class="main-field">Tempat & Tanggal Lahir</div>
                <span class="english-field">Place & Date of Birth</span>
            </label>
            <div class="content">{{$p->tempat_lahir}},{{$p->tanggal_lahir}}</div>
        </div>
        <div class="section-row side-foto">
            <label>
                <div class="main-field">Jenis Kelamin</div>
                <span class="english-field">Sex</span>
            </label>
            <div class="content">{{$p->jenis_kelamin}}</div>
        </div>
        <div class="section-row">
            <label>
                <div class="main-field">Alamat</div>
                <span class="english-field">Address</span>
            </label>
            <div class="content">{{$p->alamat_ktp}}</div>
        </div>
        <div class="section-row sub-row">
            <label>
                <div class="main-field">Negara</div>
                <span class="english-field">State</span>
            </label>
            <div class="content">Indonesia</div>
        </div>
        <div class="section-row sub-row">
            <label>
                <div class="main-field">Provinsi</div>
                <span class="english-field">Province</span>
            </label>
            <div class="content"></div>
        </div>
        <div class="section-row sub-row">
            <label>
                <div class="main-field">Kota</div>
                <span class="english-field">City</span>
            </label>
            <div class="content"></div>
        </div>
        <div class="section-row">
            <label>
                <div class="main-field">Kode Pos</div>
                <span class="english-field">Zip code</span>
            </label>
            <div class="content"></div>
        </div>
        <div class="section-row">
            <label>
                <div class="main-field">Telepon</div>
                <span class="english-field">Phone</span>
            </label>
            <div class="content">{{$p->notelp}}</div>
        </div>
        <div class="section-row">
            <label>
                <div class="main-field">Handphone</div>
                <span class="english-field">Handphone</span>
            </label>
            <div class="content">nohp</div>
        </div>
        <div class="section-row">
            <label>
                <div class="main-field">Email</div>
                <span class="english-field">Email</span>
            </label>
            <div class="content email">{{$p->email}}</div>
        </div>
        <div class="section-row">
            <label>
                <div class="main-field">Agama</div>
                <span class="english-field">Religion</span>
            </label>
            <div class="content">{{$p->agama}}</div>
        </div>
        <div class="section-row">
            <label>
                <div class="main-field">Nomor Identitas</div>
                <span class="english-field">Identity Number</span>
            </label>
            <div class="content">{{$p->nomor_idcard}}</div>
        </div>
    </div>
    @endforeach
</section>
<section id="pendidikan">
    <div class="section-body">
        <div class="section-row wide-row">
            <label>
                <div class="main-field-number">2.</div>
                <div class="main-field-content">
                    <div class="main-field">Pendidikan Informal (Kursus/Pelatihan)</div>
                    <span class="english-field">Informal Education (Course/Training)</span>
                </div>
            </label>
            <div class="content sub-2">
                <table>
                    <thead>
                    <tr>
                        <th width="5%">No.</th>
                        <th width="25%">Jenis Kursus/Pelatihan</th>
                        <th width="20%">Tempat</th>
                        <th width="25%" colspan="2">Periode</th>
                        <th width="25%">Keterangan</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-center">1</td>
                        <td>NIN</td>
                        <td class="text-center">NKNK</td>
                        <td class="text-center">14-06-2019</td>
                        <td class="text-center">06-06-2019</td>
                        <td>INI</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<section id="bahasa">
    <div class="section-body">
        <div class="section-row wide-row">
            <label>
                <div class="main-field-number">3.</div>
                <div class="main-field-content">
                    <div class="main-field">Bahasa Asing</div>
                    <span class="english-field">Foreign Language</span>
                </div>
            </label>
            <div class="content sub-2">
                <table>
                    <thead>
                    <tr>
                        <th width="5%" rowspan="2">No.</th>
                        <th width="25%" rowspan="2">Bahasa</th>
                        <th width="20%" colspan="3">Lisan</th>
                        <th width="20%" colspan="3">Tertulis</th>
                    </tr>
                    <tr>
                        <th class="colspan-row">Kurang</th>
                        <th>Cukup</th>
                        <th>Baik</th>
                        <th>Kurang</th>
                        <th>Cukup</th>
                        <th>Baik</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-center">1</td>
                        <td>DEDE</td>
                        <td class='text-center'></td><td class='text-center'><i class='fa fa-check'></i></td><td class='text-center'></td><td class='text-center'><i class='fa fa-check'></i></td><td class='text-center'></td><td class='text-center'></td>                                                </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<section id="keluarga">


    <div class="section-header">
        <div class="section-number">III.</div>
        <div class-"section-heading">STATUS KELUARGA / <span class="english-field">FAMILY STATUS</span></div>
    </div>
    <div class="section-body">
        <div class="section-row">
            <label>
                <div class="main-field">Status Perkawinan</div>
                <span class="english-field">Marital Status</span>
            </label>
            <div class="content">
            </div>
        </div>
    </div>
</section>

<section id="pekerjaan">


    <div class="section-header">
        <div class="section-number">IV.</div>
        <div class-"section-heading">RIWAYAT PEKERJAAN / <span class="english-field">OCCUPATIONAL BACKGROUND</span></div>
    </div>
    <div class="section-body">
        <div class="section-row wide-row">
            <label>
                <div class="main-field-number">1.</div>
                <div class="main-field-content">
                    <div class="main-field">Pengalaman Kerja</div>
                    <span class="english-field">Work Experience</span>
                </div>
            </label>
            <div class="content sub-2">
                <table>
                    <thead>
                    <tr>
                        <th width="8%">No.</th>
                        <th width="18%">Perusahaan</th>
                        <th width="18%">Bisnis Perusahaan</th>
                        <th width="20%" colspan="2">Periode</th>
                        <th width="15%">Posisi</th>
                        <th width="15%">Jumlah Bawahan</th>
                        <th width="20%">Gaji Terakhir</th>
                        <th width="25%">Alasan Pindah</th>
                        <th width="25%">Keterangan</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-center">1</td>
                        <td>DED</td>
                        <td>Non profit organization</td>
                        <td class="text-center">14-06-2019</td>
                        <td class="text-center">06-06-2019</td>
                        <td>DED</td>
                        <td class="text-center">431</td>
                        <td>
                            <span class="pull-left">Rp</span>
                            <span class="pull-right">1.213,00</span>
                        </td>
                        <td>32332</td>
                        <td>323232</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<section id="minat">


    <div class="section-header">
        <div class="section-number">V.</div>
        <div class-"section-heading">MINAT DAN HARAPAN / <span class="english-field">INTEREST AND EXPECTATION</span></div>
    </div>

    <div class="section-body">
        <div class="section-row wide-row">
            <div class="content sub-2">
                <table>
                    <thead>
                    <tr>
                        <th width="5%" rowspan="2">No.</th>
                        <th width="20%" colspan="3">Preferensi Lokasi</th>
                        <th width="15%" rowspan="2">Gaji Bulanan</th>
                        <th width="15%" rowspan="2">Bidang Bisnis</th>
                        <th width="15%" rowspan="2">Spesialisasi</th>
                        <th width="15%" rowspan="2">Posisi Kerja</th>
                        <th width="15%" rowspan="2">Level Jabatan</th>
                    </tr>
                    <tr>
                        <th class="colspan-row">Negara</th>
                        <th>Provinsi</th>
                        <th>Kota</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-center">1</td>
                        <td class="text-center">Indonesia</td>
                        <td class="text-center">Papua</td>
                        <td class="text-center">Botawa</td>
                        <td>
                            <span class="pull-left">Rp</span>
                            <span class="pull-right">12,00</span>
                        </td>
                        <td class="text-center">Non profit organization</td>
                        <td class="text-center">Kesehatan</td>
                        <td class="text-center">Supervisor / Koordinator</td>
                        <td class="text-center">Operator</td>
                    </tr>
                    <tr>
                        <td class="text-center">2</td>
                        <td class="text-center">Indonesia</td>
                        <td class="text-center">Maluku</td>
                        <td class="text-center">Langgur</td>
                        <td>
                            <span class="pull-left">Rp</span>
                            <span class="pull-right">23.211,00</span>
                        </td>
                        <td class="text-center">Non profit organization</td>
                        <td class="text-center">Akutansi / Keuangan</td>
                        <td class="text-center">Supervisor / Koordinator</td>
                        <td class="text-center">Operator</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<section id="sosial">



    <div class="section-header">
        <div class="section-number">VI.</div>
        <div class-"section-heading">AKTIVITAS SOSIAL / <span class="english-field">SOCIAL ACTIVITIES</span></div>
    </div>
    <div class="section-body">
        <div class="section-row">
            <label>
                <div class="main-field-number">1.</div>
                <div class="main-field-content">
                    <div class="main-field">Olahraga</div>
                    <span class="english-field">Sports</span>
                </div>
            </label>
            <div class="content long-content">
                FEF                            </div>
        </div>
        <div class="section-row">
            <label>
                <div class="main-field-content sub-field">
                    <div class="main-field">Hobi</div>
                    <span class="english-field">Hobbies</span>
                </div>
            </label>
            <div class="content long-content">
                FEFE                            </div>
        </div>
    </div>
</section>

<section id="organisasi">
    <div class="section-body">
        <div class="section-row wide-row">
            <label>
                <div class="main-field-number">2.</div>
                <div class="main-field-content">
                    <div class="main-field">Organisasi</div>
                    <span class="english-field">Organization</span>
                </div>
            </label>
            <div class="content sub-2">
                <table>
                    <thead>
                    <tr>
                        <th width="5%">No.</th>
                        <th width="25%">Organisasi</th>
                        <th width="25%" colspan="2">Periode</th>
                        <th width="20%">Tempat</th>
                        <th width="20%">Posisi</th>
                        <th width="25%">Keterangan</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-center">1</td>
                        <td>FF</td>
                        <td class="text-center">14-06-2019</td>
                        <td class="text-center">00-00-0000</td>
                        <td class="text-center">FEF</td>
                        <td class="text-center">FEF</td>
                        <td></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<section id="sakit">


    <div class="section-header">
        <div class="section-number">VII.</div>
        <div class-"section-heading">LAIN-LAIN</div>
    </div>
    <div class="section-body">
        <div class="section-row wide-row">
            <label>
                <div class="main-field-number">1.</div>
                <div class="main-field-content">
                    <div class="main-field">Pernahkah Anda dirawat di rumah sakit dalam 2 tahun terakhir?</div>
                    <span class="english-field">Have you ever been hospitalized in the last 2 years?</span>
                </div>
            </label>
            <div class="content sub-2">
                <table>
                    <thead>
                    <tr>
                        <th width="5%">No.</th>
                        <th width="25%">Jenis Penyakit</th>
                        <th width="25%" colspan="2">Periode</th>
                        <th width="25%">Pengaruh</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td colspan="5">No data available in table</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<section id="informasi">


    <div class="section-body">
        <div class="section-row">
            <label>
                <div class="main-field-number">2.</div>
                <div class="main-field-content">
                    <div class="main-field">Tahu informasi PT Selaras Mitra Integra dari: </div>
                </div>
            </label>
            <div class="content">
            </div>
        </div>
    </div>
</section>
    </div>
</div>
</body>
</html>

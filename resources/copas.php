<div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="font-normal" for="nisn">Nomor NISN</label>
                <input type="number" onKeyPress="if(this.value.length==10) return false;" class="form-control" name="nisn" required>
            </div>
            <div class="form-group">
                <label class="font-normal" for="nama_lengkap">Nama Lengkap</label>
                <input id="nama_lengkap" type="text" class="form-control" name="nama_lengkap" required>
            </div>
            <div class="form-group">
                <label class="font-normal" for="kode_jenis_kelamin">Jenis Kelamin</label>
                <div class="input-group" style="width: 100%;">
                    <select name="kode_jenis_kelamin" id="kode_jenis_kelamin" class="form-control select2-jns-kelamin" required>
                        <option></option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="font-normal">NIK</label>
                <input type="number" onKeyPress="if(this.value.length==16) return false;" a class="form-control"  name="no_nik"required>
            </div>
            <div class="form-group">
                <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <span class="btn btn-default btn-file"><span class="fileinput-new">Select file</span>
                                            <span class="fileinput-exists">Change</span><input type="file" name="file_kk"/></span>
                    <span class="fileinput-filename"></span>
                    <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">×</a>
                </div>
            </div>
            <div class="form-group">
                <label class="font-normal">Tempat Lahir</label>
                <input type="text" class="form-control"  name="tempat_lahir"required>
            </div>
            <div class="form-group" id="tgl-lahir">
                <label class="font-normal">Tanggal Lahir</label>
                <div class="input-group date">
                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" name="tgl_lahir"required>
                </div>
            </div>
            <div class="form-group">
                <label class="font-normal">Agama</label>
                <div class="input-group" style="width: 100%;">
                    <select data-placeholder="--Pilih Agama--" name="kode_agama" id="agama" class="form-control chosen-select select-chosen"required>
                        <option value="">--Pilih Agama--</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katholik">Katholik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                        <option value="Konghucu">Konghucu</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="font-normal">Kewarganegaraan</label>
                <div class="input-group" style="width: 100%;">
                    <select data-placeholder="--Pilih Kewarganegaraan--" name="kode_warganegara" id="kode_warganegara" class="form-control chosen-select select-chosen"required>
                        <option value="">Pilih Salah satu</option>
                                                    <option value="Warga Negara Indonesia">Warga Negara Indonesia</option>
                                                    <option value="Warga Negara Asing">Warga Negara Asing</option>
                                            </select>
                </div>
            </div>
            <div class="form-group">
                <label class="font-normal">Alamat</label>
                <div class="input-group" style="width: 100%;">
                    <input type="text" class="form-control" placeholder="Klik buka peta" id="_alamat" name="alamat"required>
                </div>
                <br>
                <div class="input-group" style="width: 100%;">
                    <label class="font-normal">Lintang</label>
                    <input type="text" class="form-control" placeholder="Klik buka peta"id="_lintang" name="lintang"required>
                </div>
                <br>
                <div class="input-group" style="width: 100%;">
                    <label class="font-normal">Bujur</label>
                    <input type="text" class="form-control" placeholder="Klik buka peta" id="_bujur" name="bujur"required>
                </div>
                <br>
                <div class="input-group">
                    <a class="btn btn-info block full-width m-b" data-toggle="modal" data-target="#alamat-map">Buka Peta</a>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label class="font-normal">Status Tempat Tinggal</label>
                <div class="input-group" style="width: 100%;">
                    <select data-placeholder="--Pilih Agama--" name="kode_tempat_tinggal" id="kode_tempat_tinggal" class="form-control chosen-select select-chosen"required>
                        <option value="">Pilih salah satu</option>
                                                    <option value="Bersama orang tua">Bersama orang tua</option>
                                                    <option value="Wali">Wali</option>
                                                    <option value="Kos">Kos</option>
                                                    <option value="Asrama">Asrama</option>
                                                    <option value="Panti Asuhan">Panti Asuhan</option>
                                                    <option value="Lainnya">Lainnya</option>
                                            </select>
                </div>
            </div>
            <div class="form-group">
                <label class="font-normal">Status Mode Transportasi</label>
                <div class="input-group" style="width: 100%;">
                    <select data-placeholder="--Pilih Transportasi--" name="kode_mode_transportasi" id="kode_mode_transportasi" class="form-control chosen-select select-chosen"required>
                        <option value="">Pilih Salah satu</option>
                                                    <option value="Jalan Kaki">Jalan Kaki</option>
                                                    <option value="Kendaraan Pribadi">Kendaraan Pribadi</option>
                                                    <option value="Kendaraan Umum/Angkot/Pete-Pete">Kendaraan Umum/Angkot/Pete-Pete</option>
                                                    <option value="Jemputan Sekolah">Jemputan Sekolah</option>
                                                    <option value="Kereta Api">Kereta Api</option>
                                                    <option value="Ojek">Ojek</option>
                                                    <option value="Andong/Bendi/Sado/Dokar/Delman/Becak">Andong/Bendi/Sado/Dokar/Delman/Becak</option>
                                                    <option value="Perahu penyebrangan/Rakit/Getek">Perahu penyebrangan/Rakit/Getek</option>
                                                    <option value="lainnya">lainnya</option>
                                            </select>
                </div>
            </div>
            <div class="form-group">
                <label class="font-normal">Nomor KKS</label>
                <input type="text" class="form-control" onKeyPress="if(this.value.length==14) return false;"  name="no_kks"required>
            </div>
            <div class="form-group">
                <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="">
                                                <span class="btn btn-default btn-file"><span class="fileinput-new">Select file</span>
                                                <span class="fileinput-exists">Change</span><input type="file" name="file_kks"/></span>
                        <span class="fileinput-filename"></span>
                        <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">×</a>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="font-normal">Anak Ke</label>
                <input type="number" class="form-control" onKeyPress="if(this.value.length==2)" name="anak_ke"required>
            </div>
            <div class="form-group">
                <label class="font-normal">NO. KPS</label>
                <input type="text" class="form-control" maxlength="8" name="no_kps_pkh"required>
            </div>
            <div class="form-group">
                <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="">
                                                <span class="btn btn-default btn-file"><span class="fileinput-new">Select file</span>
                                                <span class="fileinput-exists">Change</span><input type="file" name="file_kps"/></span>
                        <span class="fileinput-filename"></span>
                        <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">×</a>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="font-normal">No. KIP</label>
                <input type="text" class="form-control" maxlength="8"  name="no_kip"required>
            </div>
            <div class="form-group">
                <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="">
                                                <span class="btn btn-default btn-file"><span class="fileinput-new">Select file</span>
                                                <span class="fileinput-exists">Change</span><input type="file" name="file_kip"/></span>
                        <span class="fileinput-filename"></span>
                        <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">×</a>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="font-normal">Tinggi Badan</label>
                <input type="number" class="form-control" onKeyPress="if(this.value.length==3) return false;"  name="tinggi_badan"required>
            </div>
            <div class="form-group">
                <label class="font-normal">Berat Badan</label>
                <input type="number" class="form-control" onKeyPress="if(this.value.length==3) return false;" name="berat_badan"required>
            </div>
            <div class="form-group">
                <label class="font-normal">Jumlah Saudara</label>
                <input type="number" class="form-control"onKeyPress="if(this.value.length==2) return false;"  name="jumlah_saudara"required>
            </div>
            <div class="form-group">
                <label class="font-normal">Jarak Sekolah - Rumah</label>
                <input type="number" class="form-control" onKeyPress="if(this.value.length==5) return false;" name="jarak"required>
            </div>
            <div class="form-group">
                <label class="font-normal">Nomor registrasi Akta Kelahiran</label>
                <input type="text" class="form-control" maxlength="18"   name="no_akta"required>
            </div>
            <div class="form-group">
                <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="">
                                                <span class="btn btn-default btn-file"><span class="fileinput-new">Select file</span>
                                                <span class="fileinput-exists">Change</span><input type="file" name="file_akta"/></span>
                        <span class="fileinput-filename"></span>
                        <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">×</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</fieldset>

                            <h1>Data Orang Tua / Wali</h1>

                            <fieldset>
    <div class="col-lg-6">
        <h1><b>Data Ayah</b></h1>
        <div class="form-group">
            <label class="font-normal">Nama Ayah</label>
            <input type="text" class="form-control"  name="nama_ayah"required>
        </div>
        <div class="form-group" id="tgl-lahir">
            <label class="font-normal">Tanggal Lahir Ayah</label>
            <div class="input-group date">
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" name="tgl_lahir"required>
            </div>
        </div>
        <div class="form-group">
            <label class="font-normal">Pendidikan Ayah</label>
            <input type="text" class="form-control" name="pendidikan_ayah"required>
        </div>
        <div class="form-group">
            <label class="font-normal">Pekerjaan Ayah</label>
            <input type="text" class="form-control"  name="pekerjaan_ayah"required>
        </div>
        <div class="form-group">
            <label class="font-normal">Penghasilan Ayah</label>
            <div class="input-group" style="width: 100%;">
                <select data-placeholder="--Pilih Agama--" name="penghasilan_ayah" id="penghasilan_ayah" class="form-control chosen-select select-chosen"required>
                    <option value="">Pilih Salah satu</option>
                                            <option value="Kurang dari Rp. 1.000.000">Kurang dari Rp. 1.000.000</option>
                                            <option value="Rp. 1.000.000 - Rp. 2.000.000">Rp. 1.000.000 - Rp. 2.000.000</option>
                                            <option value="Lebih dari RP. 2.000.000">Lebih dari RP. 2.000.000</option>
                                            <option value="Kurang dari Rp. 500.000">Kurang dari Rp. 500.000</option>
                                            <option value="Rp. 500.000 - Rp. 999.999">Rp. 500.000 - Rp. 999.999</option>
                                            <option value="Rp. 1.000.000 - Rp. 1.999.999">Rp. 1.000.000 - Rp. 1.999.999</option>
                                            <option value="Rp. 2.000.000 - Rp. 4.999.999">Rp. 2.000.000 - Rp. 4.999.999</option>
                                            <option value="Rp. 5.000.000 - Rp. 20.000.000">Rp. 5.000.000 - Rp. 20.000.000</option>
                                            <option value="Lebih dari Rp. 20.000.000">Lebih dari Rp. 20.000.000</option>
                                            <option value="Tidak Berpengalaman">Tidak Berpengalaman</option>
                                            <option value="Lainnya">Lainnya</option>
                                    </select>
            </div>
        </div>
        <div class="form-group">
            <label class="font-normal" for="propinsi_ayah">Propinsi Ayah</label>
            <div class="input-group" style="width: 100%;">
                <select data-placeholder="--Pilih Propinsi--" name="propinsi_ayah" id="propinsi_ayah" class="form-control select2-custom" style="width: 100%">
                    <option value="">--Pilih Propinsi--</option>
                                            <option value="11">ACEH</option>
                                            <option value="12">SUMATERA UTARA</option>
                                            <option value="13">SUMATERA BARAT</option>
                                            <option value="14">RIAU</option>
                                            <option value="15">JAMBI</option>
                                            <option value="16">SUMATERA SELATAN</option>
                                            <option value="17">BENGKULU</option>
                                            <option value="18">LAMPUNG</option>
                                            <option value="19">KEPULAUAN BANGKA BELITUNG</option>
                                            <option value="21">KEPULAUAN RIAU</option>
                                            <option value="31">DKI JAKARTA</option>
                                            <option value="32">JAWA BARAT</option>
                                            <option value="33">JAWA TENGAH</option>
                                            <option value="34">DI YOGYAKARTA</option>
                                            <option value="35">JAWA TIMUR</option>
                                            <option value="36">BANTEN</option>
                                            <option value="51">BALI</option>
                                            <option value="52">NUSA TENGGARA BARAT</option>
                                            <option value="53">NUSA TENGGARA TIMUR</option>
                                            <option value="61">KALIMANTAN BARAT</option>
                                            <option value="62">KALIMANTAN TENGAH</option>
                                            <option value="63">KALIMANTAN SELATAN</option>
                                            <option value="64">KALIMANTAN TIMUR</option>
                                            <option value="65">KALIMANTAN UTARA</option>
                                            <option value="71">SULAWESI UTARA</option>
                                            <option value="72">SULAWESI TENGAH</option>
                                            <option value="73">SULAWESI SELATAN</option>
                                            <option value="74">SULAWESI TENGGARA</option>
                                            <option value="75">GORONTALO</option>
                                            <option value="76">SULAWESI BARAT</option>
                                            <option value="81">MALUKU</option>
                                            <option value="82">MALUKU UTARA</option>
                                            <option value="91">PAPUA BARAT</option>
                                            <option value="94">PAPUA</option>
                                    </select>
            </div>
        </div>
        <div class="form-group">
            <label class="font-normal" for="kabkota_ayah">Kabupaten/Kota Ayah</label>
            <div class="input-group" style="width: 100%;">
                <select data-placeholder="--Pilih Kab/Kota--" name="kabkota_ayah" id="kabkota_ayah" class="form-control select2-custom" style="width: 100%">
                    <option value="">--Pilih Kab/Kota--</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="font-normal" for="kecamatan_ayah">Kecamatan Ayah</label>
            <div class="input-group" style="width: 100%;">
                <select data-placeholder="--Pilih Kecamatan--" name="kecamatan_ayah" id="kecamatan_ayah" class="form-control select2-custom" style="width: 100%">
                    <option value="">--Pilih Kecamatan--</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="font-normal" for="kelurahan_ayah">Kelurahaan/Desa Ayah</label>
            <div class="input-group" style="width: 100%;">
                <select data-placeholder="--Pilih Kelurahan/Desa--" name="kelurahan_ayah" id="kelurahan_ayah" class="form-control select2-custom" style="width: 100%">
                    <option value="">--Pilih Kelurahan/Desa--</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="font-normal">Alamat Ayah</label>
            <div class="input-group" style="width: 100%;">
                <input type="text" class="form-control" placeholder="Klik buka peta" id="_alamat_ayah" name="alamat_ayah"required>
            </div>
            <br>
            <div class="input-group" style="width: 100%;">
                <label class="font-normal">Lintang</label>
                <input type="text" class="form-control" placeholder="Klik buka peta" id="_lintang_ayah" name="lintang_ayah"required>
            </div>
            <br>
            <div class="input-group" style="width: 100%;">
                <label class="font-normal">Bujur</label>
                <input type="text" class="form-control" placeholder="Klik buka peta" id="_bujur_ayah" name="bujur_ayah"required>
            </div>
            <br>
            <div class="input-group">
                <a class="btn btn-info block full-width m-b" data-toggle="modal" data-target="#alamat-map-ayah">Buka Peta</a>
            </div>
        </div>
        <div class="form-group">
            <label class="font-normal">Kode Pos Ayah</label>
            <input type="text" class="form-control" name="kode_pos_ayah">
        </div>
        <div class="form-group">
            <label class="font-normal">Nomor Handphone Ayah</label>
            <input type="text" class="form-control"  name="no_hp_ayah"required>
        </div>
        <br>
        <h1><b>Data Wali</b></h1>
        <div class="form-group">
            <label class="font-normal">Nama Wali</label>
            <input type="text" class="form-control"  name="nama_wali">
        </div>
        <div class="form-group" id="tgl-lahir">
            <label class="font-normal">Tanggal Lahir Wali</label>
            <div class="input-group date">
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" name="tgl_lahir">
            </div>
        </div>
        <div class="form-group">
            <label class="font-normal">Pendidikan wali</label>
            <input type="text" class="form-control" name="pendidikan_wali">
        </div>
        <div class="form-group">
            <label class="font-normal">Pekerjaan wali</label>
            <input type="text" class="form-control"  name="pekerjaan_wali">
        </div>
        <div class="form-group">
            <label class="font-normal">Penghasilan Wali</label>
            <div class="input-group" style="width: 100%;">
                <select data-placeholder="--Pilih Agama--" name="penghasilan_wali" id="penghasilan_wali" class="form-control chosen-select select-chosen"required>
                    <option value="">Pilih Salah satu</option>
                                            <option value="Kurang dari Rp. 1.000.000">Kurang dari Rp. 1.000.000</option>
                                            <option value="Rp. 1.000.000 - Rp. 2.000.000">Rp. 1.000.000 - Rp. 2.000.000</option>
                                            <option value="Lebih dari RP. 2.000.000">Lebih dari RP. 2.000.000</option>
                                            <option value="Kurang dari Rp. 500.000">Kurang dari Rp. 500.000</option>
                                            <option value="Rp. 500.000 - Rp. 999.999">Rp. 500.000 - Rp. 999.999</option>
                                            <option value="Rp. 1.000.000 - Rp. 1.999.999">Rp. 1.000.000 - Rp. 1.999.999</option>
                                            <option value="Rp. 2.000.000 - Rp. 4.999.999">Rp. 2.000.000 - Rp. 4.999.999</option>
                                            <option value="Rp. 5.000.000 - Rp. 20.000.000">Rp. 5.000.000 - Rp. 20.000.000</option>
                                            <option value="Lebih dari Rp. 20.000.000">Lebih dari Rp. 20.000.000</option>
                                            <option value="Tidak Berpengalaman">Tidak Berpengalaman</option>
                                            <option value="Lainnya">Lainnya</option>
                                    </select>
            </div>
        </div>
        <div class="form-group">
            <label class="font-normal" for="propinsi_wali">Propinsi Wali</label>
            <div class="input-group" style="width: 100%;">
                <select data-placeholder="--Pilih Propinsi--" name="propinsi_wali" id="propinsi_wali" class="form-control select2-custom" style="width: 100%">
                    <option value="">--Pilih Propinsi--</option>
                                            <option value="11">ACEH</option>
                                            <option value="12">SUMATERA UTARA</option>
                                            <option value="13">SUMATERA BARAT</option>
                                            <option value="14">RIAU</option>
                                            <option value="15">JAMBI</option>
                                            <option value="16">SUMATERA SELATAN</option>
                                            <option value="17">BENGKULU</option>
                                            <option value="18">LAMPUNG</option>
                                            <option value="19">KEPULAUAN BANGKA BELITUNG</option>
                                            <option value="21">KEPULAUAN RIAU</option>
                                            <option value="31">DKI JAKARTA</option>
                                            <option value="32">JAWA BARAT</option>
                                            <option value="33">JAWA TENGAH</option>
                                            <option value="34">DI YOGYAKARTA</option>
                                            <option value="35">JAWA TIMUR</option>
                                            <option value="36">BANTEN</option>
                                            <option value="51">BALI</option>
                                            <option value="52">NUSA TENGGARA BARAT</option>
                                            <option value="53">NUSA TENGGARA TIMUR</option>
                                            <option value="61">KALIMANTAN BARAT</option>
                                            <option value="62">KALIMANTAN TENGAH</option>
                                            <option value="63">KALIMANTAN SELATAN</option>
                                            <option value="64">KALIMANTAN TIMUR</option>
                                            <option value="65">KALIMANTAN UTARA</option>
                                            <option value="71">SULAWESI UTARA</option>
                                            <option value="72">SULAWESI TENGAH</option>
                                            <option value="73">SULAWESI SELATAN</option>
                                            <option value="74">SULAWESI TENGGARA</option>
                                            <option value="75">GORONTALO</option>
                                            <option value="76">SULAWESI BARAT</option>
                                            <option value="81">MALUKU</option>
                                            <option value="82">MALUKU UTARA</option>
                                            <option value="91">PAPUA BARAT</option>
                                            <option value="94">PAPUA</option>
                                    </select>
            </div>
        </div>
        <div class="form-group">
            <label class="font-normal" for="kabkota_wali">Kabupaten/Kota Wali</label>
            <div class="input-group" style="width: 100%;">
                <select data-placeholder="--Pilih Kab/Kota--" name="kabkota_wali" id="kabkota_wali" class="form-control select2-custom" style="width: 100%">
                    <option value="">--Pilih Kab/Kota--</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="font-normal" for="kecamatan_wali">Kecamatan Wali</label>
            <div class="input-group" style="width: 100%;">
                <select data-placeholder="--Pilih Kecamatan--" name="kecamatan_wali" id="kecamatan_wali" class="form-control select2-custom" style="width: 100%">
                    <option value="">--Pilih Kecamatan--</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="font-normal" for="kelurahan_wali">Kelurahaan/Desa Wali</label>
            <div class="input-group" style="width: 100%;">
                <select data-placeholder="--Pilih Kelurahan/Desa--" name="kelurahan_wali" id="kelurahan_wali" class="form-control select2-custom" style="width: 100%">
                    <option value="">--Pilih Kelurahan/Desa--</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="font-normal">Alamat Wali</label>
            <div class="input-group" style="width: 100%;">
                <input type="text" class="form-control" placeholder="Klik buka peta" id="_alamat_wali" name="alamat_wali"required>
            </div>
            <br>
            <div class="input-group" style="width: 100%;">
                <label class="font-normal">Lintang</label>
                <input type="text" class="form-control" placeholder="Klik buka peta" id="_lintang_wali" name="lintang_wali"required>
            </div>
            <br>
            <div class="input-group" style="width: 100%;">
                <label class="font-normal">Bujur</label>
                <input type="text" class="form-control" placeholder="Klik buka peta" id="_bujur_wali" name="bujur_wali"required>
            </div>
            <br>
            <div class="input-group">
                <a class="btn btn-info block full-width m-b" data-toggle="modal" data-target="#alamat-map-wali">Buka Peta</a>
            </div>
        </div>
        <div class="form-group">
            <label class="font-normal">Kode Pos Wali</label>
            <input type="text" class="form-control" name="kode_pos_wali">
        </div>
        <div class="form-group">
            <label class="font-normal">Nomor HP Wali</label>
            <input type="text" class="form-control" name="nomor_hp_wali">
        </div>
    </div>

    <div class="col-lg-6">
        <h1><b>Data Ibu</b></h1>
        <label class="font-normal">Nama Ibu</label>
        <div class="form-group">
            <input type="text" class="form-control"  name="nama_ibu"required>
        </div>
        <div class="form-group" id="tgl-lahir">
            <label class="font-normal">Tanggal Lahir Ibu</label>
            <div class="input-group date">
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" name="tgl_lahir"required>
            </div>
        </div>
        <div class="form-group">
            <label class="font-normal">Pendidikan ibu</label>
            <input type="text" class="form-control" name="pendidikan_ibu"required>
        </div>
        <div class="form-group">
            <label class="font-normal">Pekerjaan ibu</label>
            <input type="text" class="form-control"  name="pekerjaan_ibu"required>
        </div>
        <div class="form-group">
            <label class="font-normal">Penghasilan Ibu</label>
            <div class="input-group" style="width: 100%;">
                <select data-placeholder="--Pilih Agama--" name="penghasilan_ibu" id="penghasilan_ibu" class="form-control chosen-select select-chosen"required>
                    <option value="">Pilih Salah satu</option>
                                            <option value="Kurang dari Rp. 1.000.000">Kurang dari Rp. 1.000.000</option>
                                            <option value="Rp. 1.000.000 - Rp. 2.000.000">Rp. 1.000.000 - Rp. 2.000.000</option>
                                            <option value="Lebih dari RP. 2.000.000">Lebih dari RP. 2.000.000</option>
                                            <option value="Kurang dari Rp. 500.000">Kurang dari Rp. 500.000</option>
                                            <option value="Rp. 500.000 - Rp. 999.999">Rp. 500.000 - Rp. 999.999</option>
                                            <option value="Rp. 1.000.000 - Rp. 1.999.999">Rp. 1.000.000 - Rp. 1.999.999</option>
                                            <option value="Rp. 2.000.000 - Rp. 4.999.999">Rp. 2.000.000 - Rp. 4.999.999</option>
                                            <option value="Rp. 5.000.000 - Rp. 20.000.000">Rp. 5.000.000 - Rp. 20.000.000</option>
                                            <option value="Lebih dari Rp. 20.000.000">Lebih dari Rp. 20.000.000</option>
                                            <option value="Tidak Berpengalaman">Tidak Berpengalaman</option>
                                            <option value="Lainnya">Lainnya</option>
                                    </select>
            </div>
        </div>
        <div class="form-group">
            <label class="font-normal" for="propinsi_ibu">Propinsi Ibu</label>
            <div class="input-group" style="width: 100%;">
                <select data-placeholder="--Pilih Propinsi--" name="propinsi_ibu" id="propinsi_ibu" class="form-control select2-custom" style="width: 100%">
                    <option value="">--Pilih Propinsi--</option>
                                            <option value="11">ACEH</option>
                                            <option value="12">SUMATERA UTARA</option>
                                            <option value="13">SUMATERA BARAT</option>
                                            <option value="14">RIAU</option>
                                            <option value="15">JAMBI</option>
                                            <option value="16">SUMATERA SELATAN</option>
                                            <option value="17">BENGKULU</option>
                                            <option value="18">LAMPUNG</option>
                                            <option value="19">KEPULAUAN BANGKA BELITUNG</option>
                                            <option value="21">KEPULAUAN RIAU</option>
                                            <option value="31">DKI JAKARTA</option>
                                            <option value="32">JAWA BARAT</option>
                                            <option value="33">JAWA TENGAH</option>
                                            <option value="34">DI YOGYAKARTA</option>
                                            <option value="35">JAWA TIMUR</option>
                                            <option value="36">BANTEN</option>
                                            <option value="51">BALI</option>
                                            <option value="52">NUSA TENGGARA BARAT</option>
                                            <option value="53">NUSA TENGGARA TIMUR</option>
                                            <option value="61">KALIMANTAN BARAT</option>
                                            <option value="62">KALIMANTAN TENGAH</option>
                                            <option value="63">KALIMANTAN SELATAN</option>
                                            <option value="64">KALIMANTAN TIMUR</option>
                                            <option value="65">KALIMANTAN UTARA</option>
                                            <option value="71">SULAWESI UTARA</option>
                                            <option value="72">SULAWESI TENGAH</option>
                                            <option value="73">SULAWESI SELATAN</option>
                                            <option value="74">SULAWESI TENGGARA</option>
                                            <option value="75">GORONTALO</option>
                                            <option value="76">SULAWESI BARAT</option>
                                            <option value="81">MALUKU</option>
                                            <option value="82">MALUKU UTARA</option>
                                            <option value="91">PAPUA BARAT</option>
                                            <option value="94">PAPUA</option>
                                    </select>
            </div>
        </div>
        <div class="form-group">
            <label class="font-normal" for="kabkota_ibu">Kabupaten/Kota Ibu</label>
            <div class="input-group" style="width: 100%;">
                <select data-placeholder="--Pilih Kab/Kota--" name="kabkota_ibu" id="kabkota_ibu" class="form-control select2-custom" style="width: 100%">
                    <option value="">--Pilih Kab/Kota--</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="font-normal" for="kecamatan_ibu">Kecamatan Ibu</label>
            <div class="input-group" style="width: 100%;">
                <select data-placeholder="--Pilih Kecamatan--" name="kecamatan_ibu" id="kecamatan_ibu" class="form-control select2-custom" style="width: 100%">
                    <option value="">--Pilih Kecamatan--</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="font-normal" for="kelurahan_ibu">Kelurahaan/Desa Ibu</label>
            <div class="input-group" style="width: 100%;">
                <select data-placeholder="--Pilih Kelurahan/Desa--" name="kelurahan_ibu" id="kelurahan_ibu" class="form-control select2-custom" style="width: 100%">
                    <option value="">--Pilih Kelurahan/Desa--</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="font-normal">Alamat Ayah</label>
            <div class="input-group" style="width: 100%;">
                <input type="text" class="form-control" placeholder="Klik buka peta" id="_alamat_ibu" name="alamat_ibu"required>
            </div>
            <br>
            <div class="input-group" style="width: 100%;">
                <label class="font-normal">Lintang</label>
                <input type="text" class="form-control" placeholder="Klik buka peta" id="_lintang_ibu" name="lintang_ibu"required>
            </div>
            <br>
            <div class="input-group" style="width: 100%;">
                <label class="font-normal">Bujur</label>
                <input type="text" class="form-control" placeholder="Klik buka peta" id="_bujur_ibu" name="bujur_ibu"required>
            </div>
            <br>
            <div class="input-group">
                <a class="btn btn-info block full-width m-b" data-toggle="modal" data-target="#alamat-map-ibu">Buka Peta</a>
            </div>
        </div>
        <div class="form-group">
            <label class="font-normal">Kode Pos Ibu</label>
            <input type="text" class="form-control" name="kode_pos_ibu">
        </div>
        <div class="form-group">
            <label class="font-normal">Nomor HP Ibu</label>
            <input type="text" class="form-control" name="no_hp_ibu"required>
        </div>
    </div>
</fieldset>

                            <h1>Data Asal Sekolah</h1>
                            <fieldset>
                                <h1><b>Data Asal Sekolah</b></h1>
                                <div class="form-group">
                                    <label class="font-normal">Nama Sekolah Asal</label>
                                    <input type="text" class="form-control"  name="sekolah_asal"required>
                                </div>
                                <div class="form-group">
                                    <label class="font-normal">Alamat Sekolah Asal</label>
                                    <input type="text" class="form-control"  name="alamat_sekolah_asal"required>
                                </div>
                                <div class="form-group">
                                    <label class="font-normal">Kode Sekolah Asal</label>
                                    <input type="number" onKeyPress="if(this.value.length==5) return false;" class="form-control"  name="kode_sekolah_asal"required>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        #map {
            height: 400px;
            width: 100%;
        }

        #infowindow-content .title {
            font-weight: bold;
        }

        #infowindow-content {
            display: none;
        }

        #map #infowindow-content {
            display: inline;
        }

        .input-index {
            z-index: 10000 !important;
            padding-bottom: 12px;
            margin-right: 12px;
        }

        .pac-container {
            z-index: 10000 !important;
            padding-bottom: 12px;
            margin-right: 12px;
        }

        .pac-controls label {
            font-family: Roboto;
            font-size: 13px;
            font-weight: 300;
        }

        #pac-input {
            background-color: #fff;
            font-family: Roboto;
            font-size: 15px;
            font-weight: 300;
            padding: 0 11px 0 13px;
            text-overflow: ellipsis;
            width: 100%;
        }

        #pac-input:focus {
            border-color: #4d90fe;
        }
    </style>

    <div class="modal inmodal fade" id="alamat-map" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title">Pilih Alamat</h4>
                </div>
                <form id="map-form" method="POST" action="" class="form-horizontal" enctype="multipart/form-data">
                    <div class="modal-body">
                        <input type="hidden" name="_method" value="PATCH">                        <input type="hidden" name="_token" value="2Fkp145qZYAGzG7bqkt2yQPGfp59ayxzxGBTScVv">                        <div class="form-group"><label class="col-sm-2 control-label" style="text-align: left">Cari Lokasi</label>
                            <div class="col-sm-10"><input type="text" class="form-control input-index" name="pac-input" id="pac-input"></div>
                        </div>

                        <div id="map"></div>
                        <div id="infowindow-content">
                            <img src="" width="16" height="16" id="place-icon">
                            <span id="place-name"  class="title"></span><br>
                            <span id="place-address"></span>
                        </div>

                        <div class="form-group" style="margin-top: 15px"><label class="col-sm-2 control-label" style="text-align: left">Lintang</label>
                            <div class="col-sm-10"><input type="text" class="form-control" name="latitude" id="latitude" readonly></div>
                        </div>

                        <div class="form-group"><label class="col-sm-2 control-label" style="text-align: left">Bujur</label>
                            <div class="col-sm-10"><input type="text" class="form-control" name="longitude" id="longitude" readonly></div>
                        </div>

                        <div class="form-group"><label class="col-sm-2 control-label" style="text-align: left">Alamat</label>
                            <div class="col-sm-10"><input type="text" class="form-control" name="alamat" id="alamat" readonly></div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" data-dismiss="modal">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

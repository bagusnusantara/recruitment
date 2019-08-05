$(document).ready(function(){
//document onload start
$('#delete_supreme').click(function(e){
    e.preventDefault();
    let sendProsses = $(this);
    if($(this).data('run'))return;
    sendProsses.data('run',true);

    let href = $(this).data("href");
    let tr_delete = $(this).parents("tr");

    $.ajaxSetup({
        headers:{
        'X-CSRF-TOKEN':$('meta[name="_token"]').attr('content')
        } });
    $.ajax({
        url:"/jobseeker/datadiri/submitpendidikanformal/",
        method:"post",
        data :{
            id                             : "",
        },
        success:function(result){
            console.log(result.success);
            if(result.success){
            $("#deletemodal").modal("hide");
            }else{
                $("#delete-caution").parent("div").show();
            }
        },
        fail:function(){
            $("#delete-caution").parent("div").show();
        },
        beforeSend: function(){

            $("#delete_supreme a").text('Hapus...');
            $("#delete_supreme #loader").show();
        },
        complete:function(data){
            
            sendProsses.data('run',false);
            $("#delete_supreme a").text('Hapus');
            $("#delete_supreme #loader").hide();
        }
    });
});

$('#deletemodal').on("hidden.bs.modal",function(e){
    e.preventDefault();
    $("#delete-caution").parent("div").hide();
});

identitasValidate();

$("#submitPendidikanFormal").click(function(e){
    e.preventDefault();
    let sendProsses = $(this);
    if($(this).data('run'))return;
    sendProsses.data('run',true);

    $.ajaxSetup({
        headers:{
        'X-CSRF-TOKEN':$('meta[name="_token"]').attr('content')
        } });
    $.ajax({
        url:"/jobseeker/datadiri/submitpendidikanformal/",
        method:"post",
        data :{
            id                             : "",
            tingkat_pendidikan             :$("#pendidikanformal #TingkatPendidikan").val(),
            tahun_mulai                    :$("#pendidikanformal #tahunmulai").val(),
            tahun_akhir                    :$("#pendidikanformal #tahunakhir").val(),
            institusi                      :$("#pendidikanformal #institusi").val(),
            tempat                         :$("#pendidikanformal #tempat").val(),
            jurusan                        :$("#pendidikanformal #jurusan").val(),
            IPK                            :$("#pendidikanformal #IPK").val(),
            keterangan                     :$("#pendidikanformal #keterangan").val(),
        },
        success:function(result){
            console.log(result.success);
            if(result.success){
                $('#pendidikan-formal-table').append(
                    `<tr>
                    <th><h4>${$('#pendidikan-formal-table tr').length}</h4></th>
                    <th><h4>${$("#pendidikanformal #TingkatPendidikan option:selected").text()}</h4></th>
                    <th><h4>${$("#pendidikanformal #tahunmulai").val()} - ${$("#pendidikanformal #tahunakhir").val()}</h4></th>
                    <th><h4>${$("#pendidikanformal #institusi").val()}</h4></th>
                    <th><h4>${$("#pendidikanformal #tempat").val()}</h4></th>
                    <th><h4>${$("#pendidikanformal #jurusan").val()}</h4></th>
                    <th><h4>${$("#pendidikanformal #IPK").val()}</h4></th>
                    <th><h4>${$("#pendidikanformal #keterangan").val()}</h4></th>
                    <th><h4>
                        <button class="btn-outline-primary rounded"><i class="fa fa-edit fa-1x"></i></button>
                        <button data-target="#deletemodal"  data-href="" class="btn-outline-danger rounded"><i class="fa fa-trash fa-1x"></i></button>
                      </h4>
                    </th>
                </tr>`
                )
            }
        },
        beforeSend: function(){

            $("#submitPendidikanFormal a").text('Unggah Data');
            $("#submitPendidikanFormal #loader").show();
        },
        complete:function(data){
            
            sendProsses.data('run',false);
            $("#submitPendidikanFormal a").text('Simpan');
            $("#submitPendidikanFormal #loader").hide();
        }
    });
});

$("#submitPendidikanInformal").click(function(e){
    e.preventDefault();
    let sendProsses = $(this);
    if($(this).data('run'))return;
    sendProsses.data('run',true);

    $.ajaxSetup({
        headers:{
        'X-CSRF-TOKEN':$('meta[name="_token"]').attr('content')
        } });
    $.ajax({
        url:"/jobseeker/datadiri/submitpendidikaninformal/",
        method:"post",
        data :{
            id                             : "",
            jenispelatihan                 :$("#pendidikaninformal #jenispelatihan").val(),
            tahun_mulai                    :$("#pendidikaninformal #tahunmulai").val(),
            tahun_akhir                    :$("#pendidikaninformal #tahunakhir").val(),
            tempat                         :$("#pendidikaninformal #tempat").val(),
            keterangan                     :$("#pendidikaninformal #keterangan").val(),
        },
        success:function(result){
            console.log(result.success);
            if(result.success){
                $('#pendidikan-informal-table').append(
                    `<tr>
                    <th><h4>${$('#pendidikan-informal-table tr').length}</h4></th>
                    <th><h4>${$("#pendidikaninformal #jenispelatihan").val()}</h4></th>
                    <th><h4>${$("#pendidikaninformal #tahunmulai").val()} - ${$("#pendidikaninformal #tahunakhir").val()}</h4></th>
                    <th><h4>${$("#pendidikaninformal #tempat").val()}</h4></th>
                    <th><h4>${$("#pendidikaninformal #keterangan").val()}</h4></th>
                    <th><h4>
                    <button class="btn-outline-primary rounded"><i class="fa fa-edit fa-1x"></i></button>
                    <button data-target="#deletemodal"  data-href="" class="btn-outline-danger rounded"><i class="fa fa-trash fa-1x"></i></button>  
                    </h4></th>
                    </tr>`
                );
            }
        },
        beforeSend: function(){
            // Show image container
            $("#submitPendidikanInformal a").text('Unggah Data');
            $("#submitPendidikanInformal #loader").show()
        },
        complete:function(data){
            sendProsses.data('run',false);
            $("#submitPendidikanInformal a").text('Simpan'); 
            $("#submitPendidikanInformal #loader").hide();
        }
    });
});

$("#submitPendidikanBahasa").click(function(e){
    e.preventDefault();
    let sendProsses = $(this);
    if($(this).data('run'))return;
    sendProsses.data('run',true);
    $.ajaxSetup({
        headers:{
        'X-CSRF-TOKEN':$('meta[name="_token"]').attr('content')
        } });
    $.ajax({
        url:"/jobseeker/datadiri/submitpendidikanbahasa/",
        method:"post",
        data :{
            id                            : "",
            bahasa                        :$("#pendidikanbahasa #bahasa").val(),
            kemampuan_lisan               :$("#pendidikanbahasa #kemampuanlisan").val(),
            kemampuan_tertulis            :$("#pendidikanbahasa #kemampuantertulis").val(),
        },
        success:function(result){
            console.log(result.success);
            if(result.success){
                $('#pendidikan-bahasa-table').append(`
                <tr>
                <th><h4>${$('#pendidikan-bahasa-table tr').length}</h4></th>
                    <th><h4>${$('#pendidikanbahasa #bahasa option:selected').text()}</h4></th>
                    <th><h4>${$('#pendidikanbahasa #kemampuanlisan option:selected').text()}</h4></th>
                    <th><h4>${$('#pendidikanbahasa #kemampuantertulis option:selected').text()} Baik</h4></th>
                    <th><h4>
                        <button class="mx-auto btn-outline-primary rounded"><i class="fa fa-edit fa-1x"></i></button>
                        <button data-target="#deletemodal"  data-href="" class="mx-auto btn-outline-danger rounded"><i class="fa fa-trash fa-1x"></i></button>  
                </h4></th>
                </tr>
                `);
            }
        },
        beforeSend: function(){
            // Show image container
            sendProsses.data('run',false);
            $("#submitPendidikanBahasa a").each(function(){
                $(this).text('Unggah Data');
            });
            $("#submitPendidikanBahasa #loader").each(function(){
                $(this).show();
            });
        },
        complete:function(data){
            // Hide image container
            $("#submitPendidikanBahasa a").each(function(){
                $(this).text('Simpan');
            });
            $("#submitPendidikanBahasa #loader").each(function(){
                $(this).hide();
            });
        }
    });
});
$("button#submitIdentitas").each(function(){
        
        $(this).click(function(e){
            
            e.preventDefault();
            let sendProsses = $(this);
            if($(this).data('run'))return;
            sendProsses.data('run',true);

            $.ajaxSetup({
                headers:{
                'X-CSRF-TOKEN':$('meta[name="_token"]').attr('content')
                } });
            $.ajax({
                url:"/jobseeker/datadiri/submitdatadiri",
                method:"post",
                data :{
                    NIK              : $("#NIK").val(),
                    nama_lengkap     : $("#NamaLengkap").val(),
                    nama_panggilan   : $("#NamaPanggilan").val(),
                    tempat_lahir     : $("#TempatLahir").val(),
                    tanggal_lahir    : $("#TanggalLahir").val(),
                    jenis_kelamin    : $("#JenisKelamin").val(),
                    alamat           : $("#Alamat").val(),
                    agama            : $("#Agama").val(),
                    negara           : $("#Negara").val(),
                    provinsi         : $("#Provinsi").val(),
                    kabkota          : $("#Kota").val(),
                    kecamatan        : $("#Kecamatan").val(),
                    kode_pos         : $("#KodePos").val(),
                    email            : $("#Email").val(),
                    notelp           : $("#NoTelp").val(),
                    nohp             : $("#NoHP").val(),
                    kategori_idcard  : $("#IDCard").val(),
                    nomor_idcard     : $("#NoIDCard").val(),
                    nomor_idcard     : $("#NoIDCard").val(),
                    status_keluarga  : $("#StatusKeluarga").val(),
                    tanggal_keluarga : $("#TanggalKeluarga").val(),
                    olahraga         : $("#Olahraga").val(),
                    hobi             : $("#Hobi").val(),
                    referensi_dari   : $("#SurveyReferensi").val(),
                },
                success:function(result){                    
                    console.log(result.success);
                },
                beforeSend: function(){
                    // Show image container
                    $("#submitIdentitas a").each(function(){
                        $(this).text('Unggah Data');
                    });
                    $("#submitIdentitas #loader").each(function(){
                        $(this).show();
                    });
                },
                complete:function(data){
                    // Hide image container
                    sendProsses.data('run',false);
                    $("#submitIdentitas a").each(function(){
                        $(this).text('Simpan');
                    });
                    $("#submitIdentitas #loader").each(function(){
                        $(this).hide();
                    });
                }
            });
     });
});
$("#submitRiwayatPenyakit").click(function(e){
            e.preventDefault();
            let sendProsses = $(this);
            if($(this).data('run'))return;
            sendProsses.data('run',true);

            $.ajaxSetup({
                headers:{
                'X-CSRF-TOKEN':$('meta[name="_token"]').attr('content')
                } });
            $.ajax({
                url:"/jobseeker/datadiri/submitriwayatpenyakit",
                method:"post",
                data :{
                    id                : "",
                    nama_penyakit     : $("#lainnya #NamaPenyakit").val(),
                    tanggal_mulai     : $("#lainnya #TahunMulai").val(),
                    tanggal_akhir     : $("#lainnya #TahunAkhir").val(),
                    pengaruh          : $("#lainnya #Pengaruh").val(),
                },
                success:function(result){
                    console.log(result.success);
                    if(result.success)
                    {
                        $('#riwayatpenyakit-table').append(
                            `
                            <tr>
                            <th width="5%"><h4>${$('#riwayatpenyakit-table tr').length}</h4></th>
                            <th><h4>${$("#lainnya #NamaPenyakit").val()}</h4></th>
                            <th><h4>${$("#lainnya #TahunMulai").val()}</h4></th>
                            <th><h4>${$("#lainnya #TahunAkhir").val()}</h4></th>
                            <th><h4>${$("#lainnya #Pengaruh").val()}</h4></th>
                            <th width="10%"><h4>
                                <button class="mx-auto btn-outline-primary rounded"><i class="fa fa-edit fa-1x"></i></button>
                                <button data-target="#deletemodal"  data-href="" class="mx-auto btn-outline-danger rounded"><i class="fa fa-trash fa-1x"></i></button>  
                            </h4></th>
                            <tr>`
                        );
                    }

                },
                beforeSend: function(){
                    // Show image container
                    $("#submitRiwayatPenyakit a").each(function(){
                        $(this).text('Unggah Data');
                    });
                    $("#submitRiwayatPenyakit #loader").each(function(){
                        $(this).show();
                    });
                },
                complete:function(data){
                    // Hide image container
                    sendProsses.data('run',false);
                    $("#submitRiwayatPenyakit a").each(function(){
                        $(this).text('Simpan');
                    });
                    $("#submitRiwayatPenyakit #loader").each(function(){
                        $(this).hide();
                    });
                }
            });
        });
        
$("#submitPengalamanOrganisasi").click(function(e){
    e.preventDefault();
    let sendProsses = $(this);
    if($(this).data('run'))return;
    sendProsses.data('run',true);
    
    $.ajaxSetup({
        headers:{
        'X-CSRF-TOKEN':$('meta[name="_token"]').attr('content')
        } });
    $.ajax({
        url:"/jobseeker/datadiri/submitpengalamanorganisasi",
        method:"post",
        data :{
            id              : "",
            organisasi      : $("#aktivitas #Organisasi").val(),
            tanggal_mulai   : $("#aktivitas #TahunMulai").val(),
            tanggal_akhir   : $("#aktivitas #TahunAkhir").val(),
            tempat          : $("#aktivitas #Tempat").val(),
            posisi          : $("#aktivitas #Posisi").val(),
            keterangan      : $("#aktivitas #Keterangan").val(),
        },
        success:function(result){
            console.log(result.success);
            if(result.success)
            {
             $("#aktivitas-table").append(
                `<tr>
                <th><h4>${$('#aktivitas-table tr').length}</h4></th>
                <th><h4>${$("#aktivitas #Organisasi").val()}</h4></th>
                <th><h4>${$("#aktivitas #TahunMulai").val()}</h4></th>
                <th><h4>${$("#aktivitas #TahunAkhir").val()}</h4></th>
                <th><h4>${$("#aktivitas #Tempat").val()}</h4></th>
                <th><h4>${$("#aktivitas #Posisi").val()}</h4></th>
                <th><h4>${$("#aktivitas #Keterangan").val()}</h4></th>
                <th width="10%"><h4>
                    <button class="mx-auto btn-outline-primary rounded"><i class="fa fa-edit fa-1x"></i></button>
                    <button data-target="#deletemodal"  data-href="" class="mx-auto btn-outline-danger rounded"><i class="fa fa-trash fa-1x"></i></button>    
                </h4></th>
            </tr>`
             );
            }
        },
        beforeSend: function(){
            // Show image container
            $("#submitPengalamanOrganisasi a").text('Unggah Data');
            $("#submitPengalamanOrganisasi #loader").show();
        },
        complete:function(data){
            // Hide image container
            sendProsses.data('run',false);
            $("#submitPengalamanOrganisasi a").text('Simpan');
            $("#submitPengalamanOrganisasi #loader").hide();
        }
    });
});

$("#submitMinat").click(function(e){
    e.preventDefault();
    let sendProsses = $(this);
    if($(this).data('run'))return;
    sendProsses.data('run',true);
    $.ajaxSetup({
        headers:{
        'X-CSRF-TOKEN':$('meta[name="_token"]').attr('content')
        } });
    $.ajax({
        url:"/jobseeker/datadiri/submitminat",
        method:"post",
        data :{
            id               : $("#minat #Negara").val(),
            negara           : $("#minat #Negara").val(),
            provinsi         : $("#minat #Provinsi").val(),
            kabkota          : $("#minat #Kota").val(),
            gaji_bulanan     : $("#minat #GajiBulan").val(),
            bidang_bisnis   : $("#minat #BidangBisnis").val(),
            lingkungan_kerja : $('#minat #LingkunganKerja').val(),
            spesialisasi      : $('#minat #Spesialisasi').val(),
            posisi_kerja     : $('#minat #PosisiKerja').val(),
            level_jabatan    : $('#minat #LevelJabatan').val(),
        },
        success:function(result){
            console.log(result.success);
            if(result.success){
                $('#minat-table').append(`
                <tr>
                  <th>${$("#minat-table tr").length}</th>
                  <th><small><strong>${$("#minat #Kota option:selected").text()},  ${$("#minat #Provinsi option:selected").text()}</strong></small></th>
                  <th>${$("#minat #_GajiBulan").val()}</th>
                  <th>${$("#minat #BidangBisnis option:selected").text()}</th>
                  <th>${$("#minat #LingkunganKerja option:selected").text()}</th>
                  <th>${$('#minat #Spesialisasi option:selected').text()}</th>
                  <th>${$('#minat #PosisiKerja option:selected').text()}</th>
                  <th>${$('#minat #LevelJabatan option:selected').text()}</th>
                  <th>
                      <button class="mx-auto btn-outline-primary rounded"><i class="fa fa-edit fa-1x"></i></button>
                      <button data-target="#deletemodal"  data-href="" class="mx-auto btn-outline-danger rounded"><i class="fa fa-trash fa-1x"></i></button>  
                  </th>
                 </tr>    
                `);
            }
        },
        beforeSend: function(){
            // Show image container
            $("#submitMinat a").text('Unggah Data');
            $("#submitMinat #loader").show();
        },
        complete:function(data){
            // Hide image container
            sendProsses.data('run',false);
            $("#submitMinat a").text('Simpan');
            $("#submitMinat #loader").hide();
        }
    });
});

$("#submitRiwayatPekerjaan").click(function(e){
    e.preventDefault();
    let sendProsses = $(this);
    if($(this).data('run'))return;
    sendProsses.data('run',true);
    $.ajaxSetup({
        headers:{
        'X-CSRF-TOKEN':$('meta[name="_token"]').attr('content')
        } });
    $.ajax({
        url:"/jobseeker/datadiri/submitpengalamankerja",
        method:"post",
        data :{
            id               : "",
            bisnisperusahaan : $("#pekerjaan #BisnisPerusahaan").val(),
            lokasikerja      : $("#pekerjaan #TempatKerja").val(),
            tanggal_mulai    : $("#pekerjaan #TahunMulai").val(),
            tanggal_akhir    : $("#pekerjaan #TahunAkhir").val(),
            posisi           : $("#pekerjaan #Posisi").val(),
            bawahan          : $('#pekerjaan #Bawahan').val(),
            gaji_terakhir    : $('#pekerjaan #GajiTerakhir').val(),
            jurusan          : $('#pekerjaan #Jurusan').val(),
            alasan_pindah    : $('#pekerjaan #AlasanPindah').val(),
            ketarangan       : $('#pekerjaan #Keterangan').val(),
        },
        success:function(result){
            console.log(result.success);
            if(result.success){
                $('#riwayatpekerjaan-table').append(`<tr>
                <th>${$('#riwayatpekerjaan-table tr').length}</th>
                <th>${$("#pekerjaan #BisnisPerusahaan option:selected").text()}</th>
                <th>${$("#pekerjaan #TahunMulai").val()} - ${$("#pekerjaan #TahunAkhir").val()}</th>
                <th>${$("#pekerjaan #Posisi").val()}</th>
                <th>${$('#pekerjaan #Bawahan').val()}</th>
                <th>Rp. ${$('#pekerjaan #_GajiTerakhir').val()}</th>
                <th>${$('#pekerjaan #AlasanPindah').val()}</th>
                <th>${$('#pekerjaan #Keterangan').val()}</th>
                <th>
                    <button class="mx-auto btn-outline-primary rounded"><i class="fa fa-edit fa-1x"></i></button>
                    <button data-target="#deletemodal"  data-href="" class="mx-auto btn-outline-danger rounded"><i class="fa fa-trash fa-1x"></i></button>  
                </th>
              </tr>`);
            }
        },
        beforeSend: function(){
            // Show image container
            $("#submitRiwayatPekerjaan a").text('Unggah Data');
            $("#submitRiwayatPekerjaan #loader").show();
        },
        complete:function(data){
            // Hide image container
            sendProsses.data('run',false);
            $("#submitRiwayatPekerjaan a").text('Simpan');
            $("#submitRiwayatPekerjaan #loader").hide();
        }
    });
});

$('#RiwayatKerjaModal  #_GajiTerakhir').keyup(function(){
    let val = $(this).val();
    let valInt = parseInt(val.replace(/[^0-9]+/g,""));
    $('#RiwayatKerjaModal  #_GajiTerakhir').val(formatRp(val));
    $('#RiwayatKerjaModal  #GajiTerakhir').val(valInt);
});

$('#MinatKerjaModal  #_GajiBulan').keyup(function(){

    let val = $(this).val();
    let valInt = parseInt(val.replace(/[^0-9]+/g,""));
    $('#MinatKerjaModal  #_GajiBulan').val(formatRp(val));
    $('#MinatKerjaModal  #GajiBulan').val(valInt);
});

$('input.typeTahun').datepicker(inputDateYear);
$('input.typeBulan').datepicker(inputDateMonth);

//end document ready
});

function getst(id,param,selectedTarget){
    console.log('start');
    let now = $.now();
    $.ajaxSetup({
        headers:{
        'X-CSRF-TOKEN':$('meta[name="_token"]').attr('content')
        } });
    $.ajax({
        url:"/jobseeker/support/getst/",
        method:"post",
        data :{
            st_category : id,
            st_id       :param
        },
        success:function(result){
            console.log($.now()-now);
            for(var item in result.data){
              let option = result.data[item];
              selectedTarget.prop("disabled",false);
              selectedTarget.append($('<option>',{
                  value : option.id,
                  text  : option.name
                }));
          }},
          fail:function(result){
            console.log(result);
          }
        
    });
};

//Callback Alamat
$("#identitas #Negara").click(function(){
    $("#identitas #Provinsi").find('option').remove().end();
    $("#identitas #Provinsi").append($('<option>',{
        value : "0",
        text  : "Pilih . . ."
    }));
    if(this.value==0){
        $("#identitas #Provinsi").prop("disabled",true);
        $("#identitas #Kota").prop("disabled",true);
        $("#identitas #Kecamatan").prop("disabled",true);
    }
   else
        getst("Negara",$("#identitas #Negara > option:selected").val(),$("#identitas #Provinsi"));
});

$("#identitas #Provinsi").click(function(){
    
    $("#identitas #Kota").find('option').remove().end();
    $("#identitas #Kota").append($('<option>',{
        value : "0",
        text  : "Pilih . . ."
    }));

    if(this.value==0){
        $("#identitas #Kota").prop("disabled",true);
        $("#identitas #Kecamatan").prop("disabled",true);
    }
    else
         getst("Provinsi",$("#identitas #Provinsi > option:selected").val(),$("#identitas #Kota"));
 });

 $("#identitas #Kota").click(function(){
    $("#identitas #Kecamatan").find('option').remove().end();
    $("#identitas #Kecamatan").append($('<option>',{
        value : "0",
        text  : "Pilih . . ."
    }));

    if(this.value==0)
        $("#identitas #Kecamatan").prop("disabled",true);
    else
        getst("Kota",$("#identitas #Kota > option:selected").val(),$("#identitas #Kecamatan"));
 });

 // minat
 $("#minat #Negara").click(function(){
    $("#minat #Provinsi").find('option').remove().end();
    $("#minat #Provinsi").append($('<option>',{
        value : "0",
        text  : "Pilih . . ."
    }));
    if(this.value==0){
        $("#minat #Provinsi").prop("disabled",true);
        $("#minat #Kota").prop("disabled",true);
        $("#minat #Kecamatan").prop("disabled",true);
    }
   else
        getst("Negara",$("#minat #Negara > option:selected").val(),$("#minat #Provinsi"));
});

$("#minat #Provinsi").click(function(){
    if($("#minat #Negara").val()>0 && $("#minat #Provinsi option").length <= 1){
        $("#minat #Negara").trigger("click");
        console.log('run');
        return ;
    }

    $("#minat #Kota").find('option').remove().end();
    $("#minat #Kota").append($('<option>',{
        value : "0",
        text  : "Pilih . . ."
    }));

    if(this.value==0){
        $("#minat #Kota").prop("disabled",true);
        $("#minat #Kecamatan").prop("disabled",true);
    }
    else
         getst("Provinsi",$("#minat #Provinsi > option:selected").val(),$("#minat #Kota"));
 });

 $("#minat #Kota").click(function(){
    $("#minat #Kecamatan").find('option').remove().end();
    $("#minat #Kecamatan").append($('<option>',{
        value : "0",
        text  : "Pilih . . ."
    }));
    if(this.value==0)
        $("#minat #Kecamatan").prop("disabled",true);
    else
        getst("Kota",$("#minat #Kota > option:selected").val(),$("#minat #Kecamatan"));
 });

 function setInvalid(param){
     $(param).addClass( "is-invalid" );
 }

 function remInvalid(param){
    $(param).removeClass( "is-invalid" );
}

function addvalidnotif(parent,textNotif){
    let htmlstring = "<div class=\"valid-feedback\">"+textNotif+"</div>";
    $(parent).html(htmlstring);
}

function addinvalidnotif(parent,textNotif){
    let htmlstring = "<div class=\"invalid-feedback\">"+textNotif+"</div>";
    $(parent).html(htmlstring);
}

function remnotif(parent){
    $(parent+".valid-feedback").remove();
    $(parent+".invalid-feedback").remove();
}

$('.modal').on('shown.bs.modal', function () {
    $('html,body').animate({ scrollTop: 0 }, '500');
})

function formatRp(angka){
    let number_string = angka.replace(/[^,\d]/g, '').toString(),
    split   		= number_string.split(','),
    sisa     		= split[0].length % 3,
    rupiah     		= split[0].substr(0, sisa),
    ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);

    if(ribuan){
        separator = sisa ? '.' : '';
        rupiah += separator + ribuan.join('.');
    }

    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
    return rupiah;
}
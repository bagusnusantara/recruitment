$(document).ready(function(){
//document onload
identitasValidate();
$("button#submitIdentitas").each(function(){
        $(this).click(function(e){
            e.preventDefault();
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
    $.ajaxSetup({
        headers:{
        'X-CSRF-TOKEN':$('meta[name="_token"]').attr('content')
        } });
    $.ajax({
        url:"/jobseeker/datadiri/submitpengalamanorganisasi",
        method:"post",
        data :{
            id              : "",
            organisasi      : $("#aktifitas #Organisasi").val(),
            tanggal_mulai   : $("#aktifitas #TahunMulai").val(),
            tanggal_akhir   : $("#aktifitas #TahunAkhir").val(),
            tempat          : $("#aktifitas #Tempat").val(),
            posisi          : $("#aktifitas #Posisi").val(),
            keterangan      : $("#aktifitas #Keterangan").val(),
        },
        success:function(result){
            console.log(result.success);
        },
        beforeSend: function(){
            // Show image container
            $("#submitPengalamanOrganisasi a").each(function(){
                $(this).text('Unggah Data');
            });
            $("#submitPengalamanOrganisasi #loader").each(function(){
                $(this).show();
            });
        },
        complete:function(data){
            // Hide image container
            $("#submitPengalamanOrganisasi a").each(function(){
                $(this).text('Simpan');
            });
            $("#submitPengalamanOrganisasi #loader").each(function(){
                $(this).hide();
            });
        }
    });
});

$("#submitMinat").click(function(e){
    e.preventDefault();
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
        },
        beforeSend: function(){
            // Show image container
            $("#submitMinat a").each(function(){
                $(this).text('Unggah Data');
            });
            $("#submitMinat #loader").each(function(){
                $(this).show();
            });
        },
        complete:function(data){
            // Hide image container
            $("#submitMinat a").each(function(){
                $(this).text('Simpan');
            });
            $("#submitMinat #loader").each(function(){
                $(this).hide();
            });
        }
    });
});

$("#submitRiwayatPekerjaan").click(function(e){
    e.preventDefault();
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
        },
        beforeSend: function(){
            // Show image container
            $("#submitRiwayatPekerjaan a").each(function(){
                $(this).text('Unggah Data');
            });
            $("#submitRiwayatPekerjaan #loader").each(function(){
                $(this).show();
            });
        },
        complete:function(data){
            // Hide image container
            $("#submitRiwayatPekerjaan a").each(function(){
                $(this).text('Simpan');
            });
            $("#submitRiwayatPekerjaan #loader").each(function(){
                $(this).hide();
            });
        }
    });
});
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
        url:"/support/getst/",
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
          }
            
        }
    });
};


//Callback Alamat
$("#identitas #Negara").change(function(){
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

$("#identitas #Provinsi").change(function(){
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

 $("#identitas #Kota").change(function(){
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
 $("#minat #Negara").change(function(){
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

$("#minat #Provinsi").change(function(){
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

 $("#minat #Kota").change(function(){
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



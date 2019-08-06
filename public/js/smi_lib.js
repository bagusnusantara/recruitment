$(document).ready(function(){
//document onload start
//----------------on show modal
$(".pendidikanformal-modal").on('shown.bs.modal', function (e) {
    let tabledata = $(e.relatedTarget).parents('tr').find('th');
    $(this).data("tr",tabledata);

    $("#pendidikanformal #TingkatPendidikan").val($(e.relatedTarget).data("id")|| "");
    $("#pendidikanformal #TingkatPendidikan").val(tabledata.eq(0).data('value')|| 0);
    $("#pendidikanformal #tahunmulai").val(tabledata.eq(1).data('tanggalmulai')|| "");
    $("#pendidikanformal #tahunakhir").val(tabledata.eq(1).data('tanggalakhir')|| "");
    $("#pendidikanformal #institusi").val(tabledata.eq(2).text()|| "");
    $("#pendidikanformal #tempat").val(tabledata.eq(3).text()|| "");
    $("#pendidikanformal #jurusan").val(tabledata.eq(4).text()|| "");
    $("#pendidikanformal #IPK").val(tabledata.eq(5).text()|| "");
    $("#pendidikanformal #keterangan").val(tabledata.eq(6).text()|| "");
});

$(".pendidikaninformal-modal").on('shown.bs.modal', function (e) {
    let tabledata = $(e.relatedTarget).parents('tr').find('th');
    $(this).data("tr",tabledata);
    
    $("#pendidikaninformal #id").val($(e.relatedTarget).data("id")|| "");
    $("#pendidikaninformal #jenispelatihan").val(tabledata.eq(0).data('value')||"");
    $("#pendidikaninformal #tahunmulai").val(tabledata.eq(1).data('tanggalmulai')|| "");
    $("#pendidikaninformal #tahunakhir").val(tabledata.eq(1).data('tanggalakhir')|| "");
    $("#pendidikaninformal #tempat").val(tabledata.eq(2).text()|| "");
    $("#pendidikanformal #keterangan").val(tabledata.eq(3).text()|| "");
});

$(".pendidikanbahasa-modal").on('shown.bs.modal', function (e) {
    let tabledata = $(e.relatedTarget).parents('tr').find('th');
    $(this).data("tr",tabledata);
    
    $("#pendidikanbahasa #id").val($(e.relatedTarget).data("id")|| "");
    $("#pendidikanbahasa #bahasa").val(tabledata.eq(0).data('value')||"");
    $("#pendidikanbahasa #kemampuanlisan").val(tabledata.eq(1).data('value')||"");
    $("#pendidikanbahasa #kemampuantertutlis").val(tabledata.eq(2).data('value')||"");
});
$(".aktivitas-modal").on('shown.bs.modal', function (e) {
    let tabledata = $(e.relatedTarget).parents('tr').find('th');
    $(this).data("tr",tabledata);
    
    $("#aktivitas #id").val($(e.relatedTarget).data("id") || "");
    $("#aktivitas #Organisasi").val(tabledata.eq(0).text() || "");
    $("#aktivitas #TahunMulai").val(tabledata.eq(1).data('tanggalmulai') || "");
    $("#aktivitas #TahunAkhir").val(tabledata.eq(1).data('tanggalakhir') || "");
    $("#aktivitas #Tempat").val(tabledata.eq(2).text() || "");
    $("#aktivitas #Posisi").val(tabledata.eq(3).text() || "");
    $("#aktivitas #Keterangan").val(tabledata.eq(4).text() || "");
});
$(".minat-modal").on('shown.bs.modal', function (e) {
    let tabledata = $(e.relatedTarget).parents('tr').find('th');
    $(this).data("tr",tabledata);


});
$(".riwayatpenyakit-modal").on('shown.bs.modal', function (e) {
    let tabledata = $(e.relatedTarget).parents('tr').find('th');
    $(this).data("tr",tabledata);
    
    $("#lainnya #id").val($(e.relatedTarget).data("id")|| "");
    $("#lainnya #NamaPenyakit").val(tabledata.eq(0).text()||"");
    $("#lainnya #TahunMulai").val(tabledata.eq(1).data('tanggalmulai')||"");
    $("#lainnya #TahunAkhir").val(tabledata.eq(1).data('tanggalakhir')||"");
    $("#lainnya #Pengaruh").val(tabledata.eq(2).text()||"");
});

$('.pengalamankerja-modal').on('shown.bs.modal', function (e) {
    let tabledata = $(e.relatedTarget).parents('tr').find('th');
    $(this).data("tr",tabledata);
});

$('#deletemodal').on('shown.bs.modal', function (e) {
    $(this).data("id",$(e.relatedTarget).data("id"));
    $(this).data("href",$(e.relatedTarget).data("href"));
    $(this).data("tr",$(e.relatedTarget).parents('tr'));
});
//----------------on hide modal
$(".pendidikanformal-modal").on('hide.bs.modal', function (e) {
    $(this).removeData("id");
});
$(".pendidikaninformal-modal").on('hide.bs.modal', function (e) {
    $(this).removeData("id");
});
$(".pendidikanbahasa-modal").on('hide.bs.modal', function (e) {
    $(this).removeData("id");
});
$(".aktivitas-modal").on('hide.bs.modal', function (e) {
    $(this).removeData("id");
});
$(".minat-modal").on('hide.bs.modal', function (e) {
    $(this).removeData("id");
});
$(".riwayatpenyakit-modal").on('hide.bs.modal', function (e) {
    $(this).removeData("id");
});
$('.pengalamankerja-modal').on('hide.bs.modal', function (e) {
    $(this).removeData("id");
});



$('#delete_supreme').click(function(e){
    e.preventDefault();
    let sendProsses = $(this);
    if($(this).data('run'))return;
    sendProsses.data('run',true);

    let href = $("#deletemodal").data("href");
    let dataId = $("#deletemodal").data("id");
    let tr_delete = $("#deletemodal").data('tr');
    console.log(href,dataId,tr_delete);

    $.ajaxSetup({
        headers:{
        'X-CSRF-TOKEN':$('meta[name="_token"]').attr('content')
        } });
    $.ajax({
        url:href,
        method:"delete",
        data :{
            id: dataId,
        },
        success:function(result){
            console.log(result.success);
            if(result.success){
                tr_delete.remove();
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

    let tabledata = $('.pendidikanformal-modal').data('tr');

    $.ajaxSetup({
        headers:{
        'X-CSRF-TOKEN':$('meta[name="_token"]').attr('content')
        } });
    $.ajax({
        url:"/jobseeker/datadiri/submitpendidikanformal/",
        method:"post",
        data :{
            id                             :$("#pendidikanformal #id").val(),
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

            if(result.success){
                if($("#pendidikanformal #id").val()){

                    tabledata.eq(0).text($("#pendidikanformal #TingkatPendidikan option:selected").text());
                    tabledata.eq(0).data("value",$("#pendidikanformal #TingkatPendidikan").val());
                    tabledata.eq(1).text($("#pendidikanformal #tahunmulai").val()+" - "+$("#pendidikanformal #tahunakhir").val());
                    tabledata.eq(1).data("tanggalmulai",$("#pendidikanformal #tahunmulai").val());
                    tabledata.eq(1).data("tanggalakhir",$("#pendidikanformal #tahunakhir").val());
                    tabledata.eq(2).text($("#pendidikanformal #institusi").val());
                    tabledata.eq(3).text($("#pendidikanformal #tempat").val());
                    tabledata.eq(4).text($("#pendidikanformal #jurusan").val());
                    tabledata.eq(5).text($("#pendidikanformal #IPK").val());
                    tabledata.eq(6).text($("#pendidikanformal #keterangan").val());

                }else{

                    $("#pendidikanformal #id").val(result.id);
                    $('#pendidikan-formal-table tbody').append(
                        `<tr>
                        <th data-value="${result.id}"><h4>${$("#pendidikanformal #TingkatPendidikan option:selected").text()}</h4></th>
                        <th data-tanggalmulai="${$("#pendidikanformal #tahunmulai").val()}" data-tanggalakhir="${$("#pendidikanformal #tahunakhir").val()}"><h4>${$("#pendidikanformal #tahunmulai").val()} - ${$("#pendidikanformal #tahunakhir").val()}</h4></th>
                        <th><h4>${$("#pendidikanformal #institusi").val()}</h4></th>
                        <th><h4>${$("#pendidikanformal #tempat").val()}</h4></th>
                        <th><h4>${$("#pendidikanformal #jurusan").val()}</h4></th>
                        <th><h4>${$("#pendidikanformal #IPK").val()}</h4></th>
                        <th><h4>${$("#pendidikanformal #keterangan").val()}</h4></th>
                        <th><h4>
                        <button data-toggle="modal"  data-target=".pendidikanformal-modal"  data-id="${result.id}" class="btn-outline-primary rounded"><i class="fa fa-edit fa-1x"></i></button>
                        <button data-toggle="modal"  data-target="#deletemodal"  data-id="${result.id}" data-href="datadiri/deletependidikanformal/"  class="btn-outline-danger rounded"><i class="fa fa-trash fa-1x"></i></button>
                          </h4>
                        </th>
                    </tr>`);
                    $('.pendidikanformal-modal').data('tr',$('#pendidikan-formal-table tr').last().find('th'));

                }
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

    let tabledata = $('.pendidikaninformal-modal').data('tr');
    
    $.ajaxSetup({
        headers:{
        'X-CSRF-TOKEN':$('meta[name="_token"]').attr('content')
        } });
    $.ajax({
        url:"/jobseeker/datadiri/submitpendidikaninformal/",
        method:"post",
        data :{
            id                             :$("#pendidikaninformal #id").val(),
            jenis_pelatihan                :$("#pendidikaninformal #jenispelatihan").val(),
            tanggal_mulai                  :$("#pendidikaninformal #tahunmulai").val(),
            tanggal_akhir                  :$("#pendidikaninformal #tahunakhir").val(),
            tempat                         :$("#pendidikaninformal #tempat").val(),
            keterangan                     :$("#pendidikaninformal #keterangan").val(),
        },
        success:function(result){
            if(result.success){
                if($("#pendidikaninformal #id").val()){

                    tabledata.eq(0).text($("#pendidikaninformal #jenispelatihan").val());
                    tabledata.eq(1).text($("#pendidikaninformal #tahunmulai").val()+" - "+$("#pendidikaninformal #tahunakhir").val());
                    tabledata.eq(1).data('tanggalmulai',$("#pendidikaninformal #tahunmulai").val());
                    tabledata.eq(1).data('tanggalakhir',$("#pendidikaninformal #tahunakhir").val());
                    tabledata.eq(2).text($("#pendidikaninformal #tempat").val());
                    tabledata.eq(3).text($("#pendidikaninformal #keterangan").val());

                }else{
                    $("#pendidikaninformal #id").val(result.id);
                    $('#pendidikan-informal-table tbody').append(
                        `<tr>
                        <th><h4>${$("#pendidikaninformal #jenispelatihan").val()}</h4></th>
                        <th><h4>${$("#pendidikaninformal #tahunmulai").val()} - ${$("#pendidikaninformal #tahunakhir").val()}</h4></th>
                        <th><h4>${$("#pendidikaninformal #tempat").val()}</h4></th>
                        <th><h4>${$("#pendidikaninformal #keterangan").val()}</h4></th>
                        <th><h4>
                        <button data-id="${result.id}" id="submitPendidikanInformal" class="btn-outline-primary rounded"><i class="fa fa-edit fa-1x"></i></button>
                        <button data-target="#deletemodal" data-id="${result.id}" data-href="datadiri/deletependidikaninformal/" class="btn-outline-danger rounded"><i class="fa fa-trash fa-1x"></i></button>  
                        </h4></th>
                        </tr>`
                    );
                    $('.pendidikanformal-modal').data('tr',$('#pendidikan-informal-table tr').last().find('th'));
                }
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
    let tabledata = $('.pendidikanbahasa-modal').data('tr');
    $.ajaxSetup({
        headers:{
        'X-CSRF-TOKEN':$('meta[name="_token"]').attr('content')
        } });
    $.ajax({
        url:"/jobseeker/datadiri/submitpendidikanbahasa/",
        method:"post",
        data :{
            id                            :$("#pendidikanbahasa #id").val(),
            bahasa                        :$("#pendidikanbahasa #bahasa").val(),
            kemampuan_lisan               :$("#pendidikanbahasa #kemampuanlisan").val(),
            kemampuan_tertulis            :$("#pendidikanbahasa #kemampuantertulis").val(),
        },
        success:function(result){
            
            if(result.success){
                if($("#pendidikanbahasa #id").val()){
                    console.log(result.success,$("#pendidikanbahasa #id").val());
                    tabledata.eq(0).text($('#pendidikanbahasa #bahasa option:selected').text());
                    tabledata.eq(0).data('value',$('#pendidikanbahasa #bahasa').val());
                    tabledata.eq(1).text($('#pendidikanbahasa #kemampuanlisan option:selected').text());
                    tabledata.eq(1).data('value',$('#pendidikanbahasa #kemampuanlisan').val());
                    tabledata.eq(2).text($('#pendidikanbahasa #kemampuantertulis option:selected').text());
                    tabledata.eq(2).data('value',$('#pendidikanbahasa #kemampuantertulis').val());
                }else{
                    $('#pendidikanbahasa #id').val(result.id);
                    $('#pendidikan-bahasa-table tbody').append(`
                    <tr>
                        <th><h4>${$('#pendidikanbahasa #bahasa option:selected').text()}</h4></th>
                        <th><h4>${$('#pendidikanbahasa #kemampuanlisan option:selected').text()}</h4></th>
                        <th><h4>${$('#pendidikanbahasa #kemampuantertulis option:selected').text()} Baik</h4></th>
                        <th><h4>
                            <button class="mx-auto btn-outline-primary rounded"><i class="fa fa-edit fa-1x"></i></button>
                            <button data-target="#deletemodal"  data-href="" class="mx-auto btn-outline-danger rounded"><i class="fa fa-trash fa-1x"></i></button>  
                    </h4></th>
                    </tr>
                    `);
                    $('.pendidibahasa-modal').data('tr',$('#pendidikan-bahasa-table tr').last().find('th'));
                }
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

            let tabledata = $('.riwayatpenyakit-modal').data('tr');

            $.ajaxSetup({
                headers:{
                'X-CSRF-TOKEN':$('meta[name="_token"]').attr('content')
                } });
            $.ajax({
                url:"/jobseeker/datadiri/submitriwayatpenyakit",
                method:"post",
                data :{
                    id                : $("#lainnya #id").val(),
                    nama_penyakit     : $("#lainnya #NamaPenyakit").val(),
                    tanggal_mulai     : $("#lainnya #TahunMulai").val(),
                    tanggal_akhir     : $("#lainnya #TahunAkhir").val(),
                    pengaruh          : $("#lainnya #Pengaruh").val(),
                },
                success:function(result){
                    console.log(result.success);
                    if(result.success)
                    {
                        if($("#lainnya #id").val()){
                            tabledata.eq(0).text($("#lainnya #NamaPenyakit").val());
                            tabledata.eq(1).text($("#lainnya #TahunMulai").val()+" - "+$("#lainnya #TahunAkhir").val());
                            tabledata.eq(1).data("tanggalmulai",$("#lainnya #TahunMulai").val());
                            tabledata.eq(1).data("tanggalakhir",$("#lainnya #TahunAkhir").val());
                            tabledata.eq(2).text($("#lainnya #Pengaruh").val());
                        }
                        else{
                            $('#lainnya #id').val(result.id);
                            $('#riwayatpenyakit-table tbody').append(
                                `
                                <tr>
                                <th><h4>${$("#lainnya #NamaPenyakit").val()}</h4></th>
                                <th><h4>${$("#lainnya #TahunMulai").val()} - ${$("#lainnya #TahunAkhir").val()}</h4></th>
                                <th><h4>${$("#lainnya #Pengaruh").val()}</h4></th>
                                <th width="10%"><h4>
                                <button data-toggle="modal" data-target=".riwayatpenyakit-modal" data-id="${result.id}" class="mx-auto btn-outline-primary rounded"><i class="fa fa-edit fa-1x"></i></button>
                                <button data-toggle="modal" data-target="#deletemodal"  data-id="${result.id}" data-href="datadiri/deleteriwayatpenyakit/"  class="btn-outline-danger rounded"><i class="fa fa-trash fa-1x"></i></button>
                                </h4></th>
                                </tr>`
                            );
                            $('.riwayatpenyakit-modal').data('tr',$('#riwayatpenyakit-table tr').last().find('th'));
                        }
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

    let tabledata = $('.aktivitas-modal').data('tr');
    
    $.ajaxSetup({
        headers:{
        'X-CSRF-TOKEN':$('meta[name="_token"]').attr('content')
        } });
    $.ajax({
        url:"/jobseeker/datadiri/submitpengalamanorganisasi",
        method:"post",
        data :{
            id              : $("#aktivitas #id").val(),
            organisasi      : $("#aktivitas #Organisasi").val(),
            tanggal_mulai   : $("#aktivitas #TahunMulai").val(),
            tanggal_akhir   : $("#aktivitas #TahunAkhir").val(),
            tempat          : $("#aktivitas #Tempat").val(),
            posisi          : $("#aktivitas #Posisi").val(),
            keterangan      : $("#aktivitas #Keterangan").val(),
        },
        success:function(result){
            console.log(result.success);
            if(result.success){

             if($('#aktivitas #id').val()){
                tabledata.eq(0).text($("#aktivitas #Organisasi").val());
                tabledata.eq(1).text($("#aktivitas #TahunMulai").val()+" - "+$("#aktivitas #TahunAkhir").val());
                tabledata.eq(1).data("tanggalmulai",$("#aktivitas #TahunMulai").val());
                tabledata.eq(1).data("tanggalakhir",$("#aktivitas #TahunAkhir").val());
                tabledata.eq(2).text($("#aktivitas #Tempat").val());
                tabledata.eq(3).text($("#aktivitas #Posisi").val());
                tabledata.eq(4).text($("#aktivitas #Keterangan").val());
             }else{
                $('#aktivitas #id').val(result.id);
                $("#aktivitas-table tbody").append(
                    `<tr>
                    <th><h4>${$("#aktivitas #Organisasi").val()}</h4></th>
                    <th><h4>${$("#aktivitas #TahunMulai").val()} - ${$("#aktivitas #TahunAkhir").val()}</h4></th>
                    <th><h4>${$("#aktivitas #Tempat").val()}</h4></th>
                    <th><h4>${$("#aktivitas #Posisi").val()}</h4></th>
                    <th><h4>${$("#aktivitas #Keterangan").val()}</h4></th>
                    <th width="10%"><h4>
                        <button data-toggle="modal"  data-target=".aktivitas-modal" data-id="${result.id}" class="mx-auto btn-outline-primary rounded"><i class="fa fa-edit fa-1x"></i></button>
                        <button data-toggle="modal"  data-target="#deletemodal"  data-id="${result.id}" data-href="datadiri/deletepengalamanorganisasi/"  class="btn-outline-danger rounded"><i class="fa fa-trash fa-1x"></i></button>
                    </h4></th>
                </tr>`
                 );
                $('.aktivitas-modal').data('tr',$('#aktivitas-table tr').last().find('th'));
             }
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
                $('#minat-table tbody').append(`
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
                $('#riwayatpekerjaan-table tbody').append(`<tr>
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
//identitas
$(document).ready(function(){
    var urlpath = window.location.pathname;
    var currenttab = urlpath.split("#");
    console.log(urlpath);
    console.log(currenttab);
    $("#submitIdentitas").click(function(e){
        e.preventDefault();
        $.ajaxSetup({
            headers:{
            'X-CSRF-TOKEN':$('meta[name="_token"]').attr('content')
            } });
        $.ajax({
            url:"/jobseeker/datadiri/submitdatadiri",
            method:"post",
            data :{
                NIK            : $("#NIK").val(),
                nama_lengkap   : $("#NamaLengkap").val(),
                nama_panggilan : $("#NamaPanggilan").val(),
                tempat_lahir   : $("#TempatLahir").val(),
                tanggal_lahir  : $("#TanggalLahir").val(),
                jenis_kelamin  : $("#JenisKelamin").val(),
                alamat         : $("#Alamat").val(),
                agama          : $("#Agama").val(),
                negara         : $("#Negara").val(),
                provinsi       : $("#Provinsi").val(),
                kabkota        : $("#Kota").val(),
                kecamatan      : $("#Kecamatan").val(),
                kode_pos       : $("#KodePos").val(),
                email          : $("#Email").val(),
                notelp         : $("#NoTelp").val(),
                nohp           : $("#NoHP").val(),
                kategori_idcard: $("#IDCard").val(),
                nomor_idcard   : $("#NoIDCard").val(),
            },
            success:function(result){
                console.log("success");
                console.log(result.success);
                $(".alert").show();
                $('.alert').html(result.success);
            },
            beforeSend: function(){
                // Show image container
                $("#submitIdentitas a").text('Unggah Data');
                $("#submitIdentitas #loader").show();
            },
            complete:function(data){
                // Hide image container
                $("#submitIdentitas a").text('Simpan');
                $("#submitIdentitas #loader").hide();
            }
        });
    });

});

function getst(id,param,selectedTarget){
    
    $.ajaxSetup({
        headers:{
        'X-CSRF-TOKEN':$('meta[name="_token"]').attr('content')
        } });
    $.ajax({
        url:"/jobseeker/datadiri/getst",
        method:"post",
        data :{
            st_category : id,
            st_id       :param
        },
        success:function(result){
          for(var item in result.data){
              let option = result.data[item];
              selectedTarget.prop("disabled",false);
              selectedTarget.append($('<option>',{
                  value : option.id,
                  text  : option.name
                }));
              //selectedTarget.find('option').remove().end();
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
    if(this.value==0)
        $("#identitas #Provinsi").prop("disabled",true);
   else
        getst("Negara",$("#identitas #Negara > option:selected").val(),$("#identitas #Provinsi"));
});

$("#identitas #Provinsi").change(function(){
    $("#identitas #Kota").find('option').remove().end();
    $("#identitas #Kota").append($('<option>',{
        value : "0",
        text  : "Pilih . . ."
    }));

    if(this.value==0)
        $("#identitas #Kota").prop("disabled",true);
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
    if(this.value==0)
        $("#minat #Provinsi").prop("disabled",true);
   else
        getst("Negara",$("#minat #Negara > option:selected").val(),$("#minat #Provinsi"));
});

$("#minat #Provinsi").change(function(){
    $("#minat #Kota").find('option').remove().end();
    $("#minat #Kota").append($('<option>',{
        value : "0",
        text  : "Pilih . . ."
    }));

    if(this.value==0)
        $("#identitas #Kota").prop("disabled",true);
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
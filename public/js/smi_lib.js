//identitas
$(document).ready(function(){
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
                namalengkap   : $("#NamaLengkap").val(),
                namapanggilan : $("#NamaPanggilan").val(),
                tempatlahir   : $("#TempatLahir").val(),
                tanggallahir  : $("#TanggalLahir").val(),
                jeniskelamin  : $("#JenisKelamin").val(),
                alamat        : $("#Alamat").val(),
                negara        : $("#Negara").val(),
                provinsi      : $("#Provinsi").val(),
                kota          : $("#Kota").val(),
                kodepos       : $("#KodePos").val(),
                email         : $("#Email").val(),
                nohp          : $("#NoHP").val(),
                agama         : $("#Agama").val(),
                idcard        : $("#IDCard").val(),
                nomeridcard   : $("#NoIDCard").val(),
            },
            success:function(result){
                console.log("success");
                console.log(result.success);
                $(".alert").show();
                $('.alert').html(result.success);
            }
        });
    });

});

function getst(id,param,selectedTarget){
    console.log(id);
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
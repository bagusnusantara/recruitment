//identitas
$(document).ready(function(){
    $("#submitIdentitas").click(function(e){
        e.preventDefault();
        console.log($("#NamaLengkap").val());
        console.log($("#NamaLengkap").val());
        console.log($("#NamaPanggilan").val());
        console.log($("#TempatLahir").val());
        console.log($("#TanggalLahir").val());
        console.log($("#JenisKelamin").val());
        console.log($("#Alamat").val());
        console.log($("#Negara").val());
        console.log($("#Provinsi").val());
        console.log($("#Kota").val());
        console.log($("#KodePos").val());
        console.log($("#Email").val());
        console.log($("#NoHP").val());
        console.log($("#Agama").val());
        console.log($("#IDCard").val());
        console.log($("#NoIDCard").val());

        $.ajaxSetup({
            headers:{
            //'X-CSRF-TOKEN':$('meta[name="_token"]').attr('content')
            }
        });
        $.ajax({
            url:"/jobseeker/datadiri/submitidentitas",
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
                console.log(result.success);
                $(".alert").show();
                $('.alert').html(result.success);
            }
        });

    });
});

function validate(){

}
function identitasValidate(){
    $('.form-identitas').validate({
        rules:{
            NIK:{
                required:true,
                minlength:16,
                maxlength:16
            },
            NamaLengkap:{
                required:true,
            },
            NamaPanggilan:{
                required:true
            },
            TempatLahir:{
                required:true,
            },
            TanggalLahir:{
                required:true
            },
            JenisKelamin:{
                required:true
            },
            Alamat:{
                required:true,
            },
            Negara:{
                required:true,
            },
            Provinsi:{
                required:true,
            },
            Kota:{
                required:true,
            },
            Kecamatan:{
                required:true,
            },
            KodePos:{
                required:true,
            },
            Email:{
                required:true,
            },
            NoTelp:{
                required:true,
            },
            NoHP:{
                required:true,
            },
            Agama:{
                required:true,
            },
            IDCard:{
                required:true,
            },
            NoIDCard:{
                required:true,
            },
        },
        messages:{
            NIK:"*Wajib untuk diisi",
            NamaLengkap:"*Wajib untuk diisi",
            NamaPanggilan:"*Wajib untuk diisi",
            TempatLahir:"*Wajib untuk diisi",
            TanggalLahir:"*Wajib untuk diisi",
            JenisKelamin:"*Wajib untuk diisi",
            Alamat:"*Wajib untuk diisi",
            Negara:"*Wajib untuk diisi",
            Provinsi:"*Wajib untuk diisi",
            Kota:"*Wajib untuk diisi",
            Kecamatan:"*Wajib untuk diisi",
            KodePos:"*Wajib untuk diisi",
            Email:"*Wajib untuk diisi",
            NoTelp:"*Wajib untuk diisi",
            NoHP:"*Wajib untuk diisi",
            Agama:"*Wajib untuk diisi",
            IDCard:"*Wajib untuk diisi",
            NoIDCard:"*Wajib untuk diisi",
        }
    });

    console.log('udah dipanggil');
}
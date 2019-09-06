<!-- Page-Level Scripts -->
<script>
    $(document).ready(function(){
        $("#wizard").steps();
        $("#form").steps({
            bodyTag: "fieldset",
            onStepChanging: function (event, currentIndex, newIndex)
            {
                // Always allow going backward even if the current step contains invalid fields!
                if (currentIndex > newIndex)
                {
                    return true;
                }

                // Forbid suppressing "Warning" step if the user is to young
                if (newIndex === 3 && Number($("#age").val()) < 18)
                {
                    return false;
                }

                var form = $(this);

                // Clean up if user went backward before
                if (currentIndex < newIndex)
                {
                    // To remove error styles
                    $(".body:eq(" + newIndex + ") label.error", form).remove();
                    $(".body:eq(" + newIndex + ") .error", form).removeClass("error");
                }

                // Disable validation on fields that are disabled or hidden.
                form.validate().settings.ignore = ":disabled,:hidden";

                // Start validation; Prevent going forward if false
                return form.valid();
            },
            onStepChanged: function (event, currentIndex, priorIndex)
            {
                // Suppress (skip) "Warning" step if the user is old enough.
                if (currentIndex === 2 && Number($("#age").val()) >= 18)
                {
                    $(this).steps("next");
                }

                // Suppress (skip) "Warning" step if the user is old enough and wants to the previous step.
                if (currentIndex === 2 && priorIndex === 3)
                {
                    $(this).steps("previous");
                }
            },
            onFinishing: function (event, currentIndex)
            {
                var form = $(this);

                // Disable validation on fields that are disabled.
                // At this point it's recommended to do an overall check (mean ignoring only disabled fields)
                form.validate().settings.ignore = ":disabled";

                // Start validation; Prevent form submission if false
                return form.valid();
            },
            onFinished: function (event, currentIndex)
            {
                var form = $(this);

                // Submit form input
                form.submit();
            }
        }).validate({
            errorPlacement: function (error, element)
            {
                element.before(error);
            },
            rules: {
                confirm: {
                    equalTo: "#password"
                }
            }
        });
    });
</script>
<script>
    $('#edit1').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal

        var kode = button.data('mykode')
        var nik = button.data('mynik')
        var nama_lengkap = button.data('mynama_lengkap')
        var nilai_administrasi = button.data('mynilai_administrasi')
        var nilai_walk_in = button.data('mynilai_walk_in')


        var modal = $(this)
        modal.find('.modal-body #id').val(kode);
        modal.find('.modal-body #nik').val(nik);
        modal.find('.modal-body #nama_lengkap').val(nama_lengkap);
        modal.find('.modal-body #nilai_administrasi').val(nilai_administrasi);
        modal.find('.modal-body #nilai_walk_in').val(nilai_walk_in);
    })
    $('#edit2').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal

        var kode = button.data('mykode')
        var nik = button.data('mynik')
        var nama_lengkap = button.data('mynama_lengkap')
        var nilai_administrasi = button.data('mynilai_administrasi')
        var nilai_walk_in = button.data('mynilai_walk_in')


        var modal = $(this)
        modal.find('.modal-body #id').val(kode);
        modal.find('.modal-body #nik').val(nik);
        modal.find('.modal-body #nama_lengkap').val(nama_lengkap);
        modal.find('.modal-body #nilai_administrasi').val(nilai_administrasi);
        modal.find('.modal-body #nilai_walk_in').val(nilai_walk_in);
    })
    $('#edit3').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal

        var kode = button.data('mykode')
        var nik = button.data('mynik')
        var nama_lengkap = button.data('mynama_lengkap')
        var nilai_administrasi = button.data('mynilai_administrasi')
        var nilai_walk_in = button.data('mynilai_walk_in')


        var modal = $(this)
        modal.find('.modal-body #id').val(kode);
        modal.find('.modal-body #nik').val(nik);
        modal.find('.modal-body #nama_lengkap').val(nama_lengkap);
        modal.find('.modal-body #nilai_administrasi').val(nilai_administrasi);
        modal.find('.modal-body #nilai_walk_in').val(nilai_walk_in);
    })
</script>

<script>
    /* Custom filtering function which will search data in column four between two values */
    $.fn.dataTable.ext.search.push(
        function( settings, data, dataIndex ) {
            var min = parseInt( $('#min').val(), 10 );
            var max = parseInt( $('#max').val(), 10 );
            var age = parseFloat( data[6] ) || 0; // use data for the age column

            if ( ( isNaN( min ) && isNaN( max ) ) ||
                ( isNaN( min ) && age <= max ) ||
                ( min <= age   && isNaN( max ) ) ||
                ( min <= age   && age <= max ) )
            {
                return true;
            }
            return false;
        }
    );
    $(document).ready(function(){

        $('.dataTables-1').DataTable({
            scrollY:        "300px",
            scrollX:        true,
            scrollCollapse: true,
            paging:         false,
            dom: '<"html5buttons"B>lTfgitp',
            buttons: [
                { extend: 'copy'},
                {extend: 'csv'},
                {extend: 'excel', title: 'Hasil Seleksi Administrasi'},
                {extend: 'pdf', title: 'Hasil Seleksi Administrasi'},

                {extend: 'print',
                    customize: function (win){
                        $(win.document.body).addClass('white-bg');
                        $(win.document.body).css('font-size', '10px');

                        $(win.document.body).find('table')
                            .addClass('compact')
                            .css('font-size', 'inherit');
                    }
                }
            ],


        });

    });

    $(document).ready(function(){

        $('.dataTables-2').DataTable({
            scrollY:        "300px",
            scrollX:        "300px",
            scrollCollapse: true,
            paging:         false,
            dom: '<"html5buttons"B>lTfgitp',
            buttons: [
                { extend: 'copy'},
                {extend: 'csv'},
                {extend: 'excel', title: 'Hasil Seleksi Walk in Interview'},
                {extend: 'pdf', title: 'Hasil Seleksi Walk in Interview'},

                {extend: 'print',
                    customize: function (win){
                        $(win.document.body).addClass('white-bg');
                        $(win.document.body).css('font-size', '10px');

                        $(win.document.body).find('table')
                            .addClass('compact')
                            .css('font-size', 'inherit');
                    }
                }
            ],
            fixedColumns:   {
                leftColumns: 2
            }


        });


    });

    $(document).ready(function(){

        $('.dataTables-3').DataTable({
            scrollY:        "300px",
            scrollX:        "300px",
            scrollCollapse: true,
            paging:         false,
            dom: '<"html5buttons"B>lTfgitp',
            buttons: [
                { extend: 'copy'},
                {extend: 'csv'},
                {extend: 'excel', title: 'Hasil Seleksi Walk in Interview'},
                {extend: 'pdf', title: 'Hasil Seleksi Walk in Interview'},

                {extend: 'print',
                    customize: function (win){
                        $(win.document.body).addClass('white-bg');
                        $(win.document.body).css('font-size', '10px');

                        $(win.document.body).find('table')
                            .addClass('compact')
                            .css('font-size', 'inherit');
                    }
                }
            ],
            fixedColumns:   {
                leftColumns: 2
            }


        });


    });



</script>

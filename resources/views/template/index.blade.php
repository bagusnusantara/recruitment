<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SMI | Human Resources Information System</title>

    <link href="{{ asset('inspinia/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('fa/css/all.css') }}" rel="stylesheet">

    <link href="{{ asset('inspinia/css/plugins/dataTables/datatables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('inspinia/css/plugins/dropzone/basic.css') }}" rel="stylesheet">
    <link href="{{ asset('inspinia/css/plugins/dropzone/dropzone.css') }}" rel="stylesheet">
    <link href="{{ asset('inspinia/css/plugins/jasny/jasny-bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('inspinia/css/plugins/codemirror/codemirror.css') }}" rel="stylesheet">
    <link href="{{ asset('inspinia/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('inspinia/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('inspinia/css/plugins/datapicker/datepicker3.css') }}" rel="stylesheet">
    <link href="{{ asset('inspinia/css/plugins/chosen/bootstrap-chosen.css') }}" rel="stylesheet">

    <link href="{{ asset('inspinia/css/plugins/toastr/toastr.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
    <link href="{{ asset('inspinia/css/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet">

    <style>
        td.details-control {
            background: url('https://datatables.net/examples/resources/details_open.png') no-repeat center center;
            cursor: pointer;
        }
        tr.shown td.details-control {
            background: url('https://datatables.net/examples/resources/details_close.png') no-repeat center center;
        }
    </style>

</head>
<body>
    <div id="wrapper">
        @include('template/navbar')
        @include('template/topnavbar')
        @yield('main')
        {{-- @include('sweet::alert') --}}
    </div>
</body>
</html>

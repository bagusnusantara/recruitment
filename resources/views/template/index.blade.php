<!DOCTYPE html>
<html>
<head>
    @include('template/head')
</head>

<body>
    <div id="wrapper">
        @include('template/navbar')
        @include('template/topnavbar')
        @yield('main')
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        @include('sweet::alert')
    </div>
</body>
</html>

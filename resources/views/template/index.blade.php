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

    </div>
</body>
</html>

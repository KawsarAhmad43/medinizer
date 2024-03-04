<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Medinizer</title>
    @include('backend.components.css')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @include('backend.components.preloader')
        @include('backend.include.navbar')
        @include('backend.include.sidebar')
        @yield('content')
        @include('backend.include.footer')
    </div>
    @include('backend.components.js')
</body>

</html>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">

    <!-- Page Title -->
    <title>Pariwisata</title>

    @include('layouts.css')

</head>

<body>

    @include('layouts.preloader')

    @include('layouts.navbar')

    @include('layouts.header')

    <!-- content -->
    @yield('content')

    @include('layouts.footer')

    @include('layouts.js')

</body>

</html>

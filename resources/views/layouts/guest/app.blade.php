<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">

    <!-- Page Title -->
    <title>Pariwisata</title>

    @include('layouts.guest.css')

</head>

<body>

    @include('layouts.guest.preloader')

    @include('layouts.guest.navbar')

    @include('layouts.guest.header')

    <!-- content -->
    @yield('content')

    @include('layouts.guest.footer')

    @include('layouts.guest.js')
</body>

</html>
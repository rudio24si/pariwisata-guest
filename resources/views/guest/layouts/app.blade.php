<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">

    <!-- Page Title -->
    <title>Pariwisata</title>

    @include('guest.layouts.css')

</head>

<body>

    @include('guest.layouts.preloader')

    @include('guest.layouts.navbar')

    @include('guest.layouts.header')

    <!-- content -->
    @yield('content')

    @include('guest.layouts.footer')

    @include('guest.layouts.js')

</body>

</html>
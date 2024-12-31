<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('components.meta_header')
    @yield('css')
</head>

<body class="{{ $themeColor ?? '' }}">
    <!-- Main Contenet -->
    @yield('content')

    <!-- start loader -->
    @include('components.footer')
    @yield('script')

</body>

</html>

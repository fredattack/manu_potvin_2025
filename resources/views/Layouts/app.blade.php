<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-E7RV97D6SG"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-E7RV97D6SG');
    </script>
    <script src="https://www.google.com/recaptcha/api.js?render={{ config('app.recaptcha.site_key') }}"></script>

    @include('components.meta_header')
    @yield('css')


</head>

<body class="{{ $themeColor ?? '' }}">
    <!-- Main Contenet -->
    @yield('content')

    <!-- start loader -->
    @include('components.footer-scripts')
    @yield('script')

</body>

</html>

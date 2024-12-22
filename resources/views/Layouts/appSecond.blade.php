<!DOCTYPE html>
<html lang="en">

<head>
    @include('Frontend.Includes.header')
    @yield('css')
</head>

<!-- Main Contenet -->
@yield('content')

<!-- start loader -->
@include('Frontend.Includes.footer')
@yield('script')
</body>

</html>

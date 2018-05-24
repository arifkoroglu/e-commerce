<!DOCTYPE html>
<html lang="en">

<head>

    @include('partials.theme.head')
    @yield('styles')

</head>

<body id="commerce">
@include('partials.theme.header')
@yield('content')
@include('partials.theme.footer')
@include('partials.theme.scripts')
@yield('scripts')

</body>

</html>
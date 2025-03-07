<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @stack('styles')
    <title>@yield('title')</title>
</head>

<body>
    @include('header')
    @yield('content')
    @include('footer')

    @stack('scripts')
</body>

</html>

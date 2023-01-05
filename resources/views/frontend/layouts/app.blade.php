<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.includes.meta')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')|Landing Page</title>

    <!--Favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    @stack('before-style')

    {{-- style --}}
    @include('frontend.includes.style')
    @stack('after-style')

</head>

<body>

    @include('frontend.includes.header')
    @yield('content')
    @include('frontend.includes.footer')

    @stack('before-script')

    @include('frontend.includes.script')
    @stack('after-script')
</body>

</html>

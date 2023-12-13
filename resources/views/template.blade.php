<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Demo')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/header.css') }}">
</head>

<body>
    @php
    $uid = request()->cookie('uid');
    @endphp

    @include('header')

    @yield('content')

    @include('footer')

    @if(!$uid)
    @include('popup.login.login')
    @endif

    <script src="{{ asset('js/asset/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/asset/lazysizes.min.js') }}"></script>
    <script src="{{ asset('js/menubar.js') }}"></script>


</body>

</html>
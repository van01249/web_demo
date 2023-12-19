 @php
    $uid = request()->cookie('uid');
    @endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Demo')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/header.css') }}">
    <script src="{{ asset('js/asset/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/asset/lazysizes.min.js') }}"></script>
    @if (isset($validate) && $validate || !$uid)
        <script src="{{ asset('js/asset/jquery.validate.min.js') }}"></script>
    @endif
</head>

<body>
    @include('header')

    @yield('content')

    @include('footer')

    @if(!$uid)
    <link rel="stylesheet" href="{{asset('css/login/popup_login.css')}}"> 
    @include('popup.login.login')
    @include('popup.register.register')
    @endif

    <script src="{{ asset('js/menubar.js') }}"></script>
</body>

</html>
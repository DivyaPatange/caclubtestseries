<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CA | Dashboard</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('auth.links')
    @yield('customcss')
</head>
<body>
@include('auth.userHeader')
@yield('content')
@include('auth.footer')
<a href="#" class="btn btn-lg back-to-top" style="background-image: linear-gradient(to left bottom, #c62164, #b7226b, #a72570, #962973, #842c74);  ">
    <i class="fa fa-angle-double-up" style="color:white;"></i>
</a>
@include('auth.script')
@yield('customjs')
</body>
</html>
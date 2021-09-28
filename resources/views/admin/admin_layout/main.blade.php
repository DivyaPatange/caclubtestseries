<!DOCTYPE html>
<html lang="en">

<head>
    <title>CA | @yield('title')</title>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('admin.admin_layout.link') 
    @yield('customcss')

    <style type="text/css">
        ul ul a {
            font-size: 0.9em !important;
            padding-left: 30px !important;
            background: #bb4549;
        }

        #sidebar .sidebar-header {
            background:#043249;
        }

        #sidebar {
            min-width: 205px;
            max-width: 250px;
            background:#bb4549;
            color: #fff;
            transition: all 0.3s;
        }

    </style>
</head>

<body>
    <div class="se-pre-con"></div>
    <div class="wrapper">    
        @include('admin.admin_layout.sidebar')
        <!-- Page Content Holder -->
        <div id="content">
            @include('admin.admin_layout.topbar')
            @yield('content')
           
        </div>
    </div>
    @include('admin.admin_layout.script') 
    @yield('customjs')
</body>

</html>
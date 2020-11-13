<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laravel Practice</title>
    <link rel="shortcut icon" href="http://shaiful.me/wp-content/uploads/2017/04/logo.jpg">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">



    <!-- Bootstrap CSS CDN -->
    <link href="{{ asset('assets_mytheme/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Scrollbar Custom CSS -->
    <link href="{{ asset('assets_mytheme/css/jquery.mCustomScrollbar.css') }}" rel="stylesheet" type="text/css">
    <!-- icons CSS -->
    <link href="{{ asset('assets_mytheme/css/icons.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Our Custom CSS -->
    <link href="{{ asset('assets_mytheme/css/style.css') }}" rel="stylesheet" type="text/css">

    

</head>
<body>
    
<!-- jQuery -->
<script type="text/javascript" src="{{ asset('assets_mytheme/js/jquery-3.4.1.min.js') }}"></script>
<!-- Popper.JS for scrollbar-->
<script type="text/javascript" src="{{ asset('assets_mytheme/js/popper.min.js') }}"></script>
<!-- jQuery Custom Scroller CDN -->
<script type="text/javascript" src="{{ asset('assets_mytheme/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<!-- Bootstrap JS -->
<script type="text/javascript" src="{{ asset('assets_mytheme/js/bootstrap.min.js') }}"></script>
<livewire:header />
<livewire:sidebar-left />
<livewire:sidebar-right />


<div id="system_content">
    {{ $slot }}
    
</div>

<!-- Theme JS -->
<script type="text/javascript" src="{{ asset('assets_mytheme/js/theme.js') }}"></script>

</body>

</html>

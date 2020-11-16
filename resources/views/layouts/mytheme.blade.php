<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laravel Practice</title>
    <link rel="shortcut icon" href="{{ asset('assets/mytheme/images/logo.jpg') }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">



    <!-- Bootstrap CSS CDN -->
    <link href="{{ asset('assets/mytheme/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Scrollbar Custom CSS -->
    <link href="{{ asset('assets/mytheme/css/jquery.mCustomScrollbar.css') }}" rel="stylesheet" type="text/css">
    <!-- icons CSS -->
    <link href="{{ asset('assets/mytheme/css/icons.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Our Custom CSS -->
    <link href="{{ asset('assets/mytheme/css/style.css') }}" rel="stylesheet" type="text/css">

    

</head>
<body>
    
<!-- jQuery -->
<script type="text/javascript" src="{{ asset('assets/mytheme/js/jquery-3.4.1.min.js') }}"></script>
<!-- Popper.JS for scrollbar-->
<script type="text/javascript" src="{{ asset('assets/mytheme/js/popper.min.js') }}"></script>
<!-- jQuery Custom Scroller CDN -->
<script type="text/javascript" src="{{ asset('assets/mytheme/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<!-- Bootstrap JS -->
<script type="text/javascript" src="{{ asset('assets/mytheme/js/bootstrap.min.js') }}"></script>
<livewire:header />
<livewire:sidebar-left />
<livewire:sidebar-right />


<div id="system_content">
    @if (session()->has('alert_message'))
    <div class="alert alert-{{ session()->has('alert_type')?session('alert_type'):'success'}} alert-dismissible fade show" role="alert">
        {{ session('alert_message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    
    @endif
    {{ $slot }}
    
</div>

<!-- Theme JS -->
<script type="text/javascript" src="{{ asset('assets/mytheme/js/theme.js') }}"></script>
@livewireScripts
@yield('jsInline')
</body>

</html>

<html>
    <head>
        <!-- Basic Page Needs -->
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <title>@yield('title')</title>
    
        <meta name="author" content="themesflat.com">
    
        <!-- Mobile Specific Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
        <!-- Bootstrap  -->
        <link rel="stylesheet" type="text/css" href="{{asset('storage/assets/stylesheets/bootstrap.css')}}">
    
        <!-- Theme Style -->
        <link rel="stylesheet" type="text/css" href="{{asset('storage/assets/stylesheets/style.css')}}">
    
        <!-- Responsive -->
        <link rel="stylesheet" type="text/css" href="{{asset('storage/assets/stylesheets/responsive.css')}}">
    
        <!-- Colors -->
        <link rel="stylesheet" type="text/css" href="{{asset('storage/assets/stylesheets/colors/color1.css')}}" id="colors">
    
        <!-- Animation Style -->
        <link rel="stylesheet" type="text/css" href="{{asset('storage/assets/stylesheets/animate.css')}}">
    
        <!-- Favicon and touch icons  -->
        <link href="{{asset('storage/assets/icon/apple-touch-icon-48-precomposed.png')}}" rel="apple-touch-icon-precomposed" sizes="48x48">
        <link href="{{asset('storage/assets/icon/apple-touch-icon-32-precomposed.png')}}" rel="apple-touch-icon-precomposed">
        <link href="{{asset('storage/assets/icon/favicon.png')}}" rel="shortcut icon">
    
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="header-sticky page-loading">
        <div class="loading-overlay">
        </div>
    
        @yield('boxed')

        @include('project.layouts.footer-js')
    </body>
</html>
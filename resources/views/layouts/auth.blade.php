<!DOCTYPE html>
<html lang="en" dir="ltr" class="light">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <x-shared.ico />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
        <!-- Theme style -->
        <link href="https://unpkg.com/aos@2.3.0/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('dashcode') }}/css/app.css">
        <!-- START : Theme Config js-->
        <script src="{{ asset('dashcode') }}/js/settings.js" sync></script>
        <!-- END : Theme Config js-->
        
    </head>

    <body class="font-inter skin-default">
        @yield('main')
        <!-- jQuery -->
        <script src="{{ asset('dashcode') }}/js/jquery-3.6.0.min.js"></script>
        <!-- DashCode App -->
        <script src="{{ asset('dashcode') }}/js/app.js"></script>
    </body>

</html>

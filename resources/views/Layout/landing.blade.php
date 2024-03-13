<!DOCTYPE html>
<html lang="zxx" dir="ltr" class="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>
        @yield('title', 'Admin - AOC Blog Admin Panel')
    </title>
    <link rel="icon" type="image/png" href="{{ asset('assets/images/logo/favicon.svg') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" href="{{ asset('assets/css/rt-plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <!-- End : Theme CSS-->
    <script src="{{ asset('assets/js/settings.js') }}" sync></script>
    <style>
        html {
            scroll-behavior: smooth;
            z-index: 1;

        }

        .light .hero,
        .black .hero {
            background-image: url({{ asset('assets/images/all-img/page-bg.png') }});
            background-size: cover;
            background-position: center center;
            height: 100%;
            display: flex;
            margin-bottom: 45px;
        }

        .dark .hero {
            background-image: url({{ asset('assets/images/all-img/page-bg.png') }});
            background-size: cover;
            background-position: center center;
            height: 100%;
            display: flex;
            margin-bottom: 45px;
        }

        .background {
            background: repeating-linear-gradient(to right, rgb(0, 0, 0), rgba(0, 0, 0, 0.753), rgba(255, 255, 255, 0));
            background-size: cover;
            background-position: center center;
            height: 600px;
            width: 75%;
            display: flex;
            justify-content: left;
            align-items: center;

        }

        .hero-content {
            text-align: left;
            color: #adadad;
            max-width: 450px;
            margin: 0 40px;
        }

        .hero-content h1 {
            font-size: 48px;
            margin-bottom: 35px;
            color: #fff;
        }

        .hero-content h1 span {
            color: rgb(133, 207, 241);
        }

        .hero-content p {
            font-size: 18px;
            margin-bottom: 15px;
        }

        .cta {
            display: inline-block;
            background-color: #103d91;
            color: #fff;
            padding: 10px 20px;
            margin-top: 20px;
            border-radius: 20px;
            text-decoration: none;
            font-weight: bold;
        }

        .cta:hover {
            background-color: #3067ce;
            color: #fff;
        }

        @media screen and (max-width: 768px) {
            .hero {
                background-size: cover;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .background {
                background: repeating-linear-gradient(to top, rgb(0, 0, 0), rgba(0, 0, 0, 0.644), rgba(255, 255, 255, 0));
                background-size: cover;
                background-position: center center;
                height: 600px;
                width: 100%;
                display: flex;
                justify-content: bottom;
                align-items: bottom;
            }
        }
    </style>
</head>

<body class=" font-inter">
    <main class="app-wrapper horizontalMenu">
        @yield('content')
    </main>
    <!-- scripts -->
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/rt-plugins.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>

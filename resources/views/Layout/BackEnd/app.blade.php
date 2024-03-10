<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js"></script>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <style>
        .ck-editor__editable[role="textbox"] {
            min-height: 300px;
        }
    </style>
</head>

<body class="sb-nav-fixed">

    @include('Layout.BackEnd.Components.topbar')
    <div id="layoutSidenav">
        @include('Layout.BackEnd.Components.sidebar')
        <div id="layoutSidenav_content">
            @yield('content')
            @include('Layout.BackEnd.Components.footer')
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>

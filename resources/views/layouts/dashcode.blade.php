<!DOCTYPE html>
<html lang="en" dir="ltr" class="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | {{ __('Admin Area') }}</title>
    <x-shared.ico />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Theme style -->
    <link href="https://unpkg.com/aos@2.3.0/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('dashcode') }}/css/sidebar-menu.css">
    <link rel="stylesheet" href="{{ asset('dashcode') }}/css/SimpleBar.css">
    <link rel="stylesheet" href="{{ asset('dashcode') }}/css/app.css">
    <!-- START : Theme Config js-->
    <script src="{{ asset('dashcode') }}/js/settings.js" sync></script>
    <!-- END : Theme Config js-->
    @stack('css')
</head>

<body class=" font-inter dashcode-app" id="body_class">
    <main class="app-wrapper">
        <!-- BEGIN: Sidebar -->
        <!-- BEGIN: Sidebar -->
        <x-dashcode.side-bar />
        <!-- End: Sidebar -->
        <!-- End: Sidebar -->

        <!-- BEGIN: Content -->
        <!-- BEGIN: Content -->
        <div class="flex flex-col justify-between min-h-screen">
            <div>
                @yield('right-sidebar')
                <x-dashcode.top-bar />

                <div class="content-wrapper transition-all duration-150 ltr:ml-[248px] rtl:mr-[248px]" id="content_wrapper">
                    <div class="page-content">
                        <div class="transition-all duration-150 container-fluid" id="page_layout">
                            <div id="content_layout">

                                <div class="mb-5">
                                    @yield('breadcrump')
                                </div>

                                <div class="space-y-5">
                                    @yield('title_main')
                                    @yield('main')
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- BEGIN: Footer For Desktop and tab -->
            <footer class="md:block hidden" id="footer">
                <div
                    class="site-footer px-6 bg-white dark:bg-slate-800 text-slate-500 dark:text-slate-300 py-4 ltr:ml-[248px] rtl:mr-[248px]">
                    <div class="grid md:grid-cols-2 grid-cols-1 md:gap-5">
                        <div class="text-center ltr:md:text-start rtl:md:text-right text-sm">
                            Copyright ©
                            <span id="thisYear"></span>
                            DashCode, All rights Reserved
                        </div>
                        <div class="ltr:md:text-right rtl:md:text-end text-center text-sm">
                            Hand-crafted &amp; Made by
                            <a href="https://codeshaper.net" target="_blank" class="text-primary-500 font-semibold">
                                Codeshaper
                            </a>
                        </div>
                    </div>
                </div>
            </footer>

            <!-- END: Footer For Desktop and tab -->
            <div
                class="bg-white bg-no-repeat custom-dropshadow footer-bg dark:bg-slate-700 flex justify-around items-center backdrop-filter backdrop-blur-[40px] fixed left-0 bottom-0 w-full z-[9999] bothrefm-0 py-[12px] px-4 md:hidden">
                <a href="{{ route('backend.dashboard.index') }}">
                    <div>
                        <span
                            class="relative cursor-pointer rounded-full text-[20px] flex flex-col items-center justify-center mb-1 dark:text-white text-slate-900 ">
                            <iconify-icon icon="mdi:speedometer"></iconify-icon>
                        </span>
                        <span class="block text-[11px] text-slate-600 dark:text-slate-300">
                            Dashboard
                        </span>
                    </div>
                </a>
                <a href="profile.html"
                    class="relative bg-white bg-no-repeat backdrop-filter backdrop-blur-[40px] rounded-full footer-bg dark:bg-slate-700 h-[65px] w-[65px] z-[-1] -mt-[40px] flex justify-center items-center">
                    <div class="h-[50px] w-[50px] rounded-full relative left-[0px] hrefp-[0px] custom-dropshadow">
                        <img src="{{ asset('dashcode') }}/images/users/user-1.jpg" alt=""
                            class="w-full h-full rounded-full border-2 border-slate-100">
                    </div>
                </a>
                <a href="#">
                    <div>
                        <span
                            class=" relative cursor-pointer rounded-full text-[20px] flex flex-col items-center justify-center mb-1 dark:text-white text-slate-900">
                            <iconify-icon icon="mdi:user"></iconify-icon>
                        </span>
                        <span class=" block text-[11px] text-slate-600 dark:text-slate-300">
                            Profil
                        </span>
                    </div>
                </a>
            </div>
        </div>
        <!-- End: Content -->
        <!-- End: Content -->
    </main>
    <!-- jQuery -->
    <script src="{{ asset('dashcode') }}/js/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('dashcode') }}/js/popper.js"></script>
    {{-- <script src="{{ asset('dashcode') }}/js/tw-elements-1.0.0-alpha13.min.js"></script> --}}
    <script src="{{ asset('dashcode') }}/js/SimpleBar.js"></script>
    <script src="{{ asset('dashcode') }}/js/iconify.js"></script>
    <!-- DashCode App -->
    @stack('js')
    <script src="{{ asset('dashcode') }}/js/rt-plugins.js"></script>
    <script src="{{ asset('dashcode') }}/js/sidebar-menu.js"></script>
    <script src="{{ asset('dashcode') }}/js/app.js"></script>
</body>

</html>

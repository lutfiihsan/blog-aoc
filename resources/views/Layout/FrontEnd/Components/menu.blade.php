<div class="sidebar-wrapper group md:hidden block">
    <!-- <div id="bodyOverlay"class="w-screen h-screen fixed top-0 bg-slate-900 bg-opacity-50 backdrop-blur-sm z-10 hidden"></div> -->
    <div class="logo-segment">
        <a class="flex items-center" href="/">
            <img src="assets/images/logo/favicon.svg" alt="logo">
            <span class="ltr:ml-3 rtl:mr-3 text-xl font-Inter font-bold text-slate-900 dark:text-white">KodeMaya</span>
        </a>
        <!-- Sidebar Type Button -->
        <div id="sidebar_type" class="cursor-pointer text-slate-900 dark:text-white text-lg" style="display: none;">
            <span class="sidebarDotIcon extend-icon cursor-pointer text-slate-900 dark:text-white text-2xl">
                <div
                    class="h-4 w-4 border-[1.5px] border-slate-900 dark:border-slate-700 rounded-full transition-all duration-150 ring-2 ring-inset ring-offset-4 ring-black-900 dark:ring-slate-400 bg-slate-900 dark:bg-slate-400 dark:ring-offset-slate-700">
                </div>
            </span>
            <span class="sidebarDotIcon collapsed-icon cursor-pointer text-slate-900 dark:text-white text-2xl">
                <div
                    class="h-4 w-4 border-[1.5px] border-slate-900 dark:border-slate-700 rounded-full transition-all duration-150">
                </div>
            </span>
        </div>
        <button class="sidebarCloseIcon text-2xl" style="">
            <iconify-icon class="text-slate-900 dark:text-slate-200" icon="clarity:window-close-line">
            </iconify-icon>
        </button>
    </div>
    <div id="nav_shadow"
        class="nav_shadow h-[60px] absolute top-[80px] nav-shadow z-[1] w-full transition-all duration-200 pointer-events-none opacity-0">
    </div>
    <div class="sidebar-menus bg-white dark:bg-slate-800 py-2 px-4 h-[calc(100%-80px)] overflow-y-auto z-50"
        id="sidebar_menus">
        <ul class="sidebar-menu">
            <li class="sidebar-menu-title">MENU</li>
            <li class="">
                <a href="#!" class="navItem">
                    <span class="flex items-center">
                        <iconify-icon class="nav-icon" icon="heroicons-outline:home"> </iconify-icon>
                        <span>Home</span>
                    </span>
                </a>
            </li>
            <li class="">
                <a href="#" class="navItem">
                    <span class="flex items-center">
                        <iconify-icon class=" nav-icon" icon="heroicons-outline:home"></iconify-icon>
                        <span>Dashboard</span>
                    </span>
                    <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="index.html">Analytics Dashboard</a>
                    </li>
                    <li>
                        <a href="ecommerce-dashboard.html">Ecommerce Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="project-dashboard.html">Project Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="crm-dashboard.html">CRM Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="banking-dashboard.html">Banking Dashboard
                        </a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="#!" class="navItem">
                    <span class="flex items-center">
                        <iconify-icon class="nav-icon" icon="material-symbols:price-change-outline">
                        </iconify-icon>
                        <span>Harga</span>
                    </span>
                </a>
            </li>
        </ul>
    </div>
</div>

<div class="app-header z-[999] bg-white dark:bg-slate-800 shadow-sm dark:shadow-slate-700 margin-0">
    <div class="flex justify-between items-center h-full">
        <div class="flex items-center md:space-x-4 space-x-2 xl:space-x-0 rtl:space-x-reverse vertical-box">
            <a href="/" class="mobile-logo xl:hidden inline-block">
                <img src="assets/images/logo/favicon.svg" alt="logo">
            </a>

        </div>
        <!-- end vertcial -->
        <div class="items-center space-x-4 rtl:space-x-reverse horizental-box">
            <a href="">
                <span class="xl:inline-block hidden">
                    <img src="/assets/images/logo/logo.svg" alt="logo">
                </span>
                <span class="xl:hidden inline-block">
                    <img src="/assets/images/logo/favicon.svg" alt="logo">
                </span>
            </a>

        </div>
        <!-- end horizental -->
        <div class="main-menu">
            <ul>
                <li class="menu-item-has-children">
                    <a href="" class="Navbar">
                        <div class="flex flex-1 items-center space-x-[6px] rtl:space-x-reverse">
                            <span class="icon-box">
                                <iconify-icon icon="heroicons-outline:home"> </iconify-icon>
                            </span>
                            <div class="text-box">Home</div>
                        </div>
                    </a>
                </li>
                <li class="menu-item-has-children ">
                    <a href="javascript:void()">
                        <div class="flex flex-1 items-center space-x-[6px] rtl:space-x-reverse">
                            <span class="icon-box">
                                <iconify-icon icon="mdi:feature-highlight"> </iconify-icon>
                            </span>
                            <div class="text-box">Fitur</div>
                        </div>
                        <div class="flex-none text-sm ltr:ml-3 rtl:mr-3 leading-[1] relative top-1">
                            <iconify-icon icon="heroicons-outline:chevron-down"> </iconify-icon>
                        </div>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="#!">
                                <div class="flex space-x-2 items-start rtl:space-x-reverse">
                                    <iconify-icon icon="ic:baseline-connect-without-contact"
                                        class="leading-[1] text-base"> </iconify-icon>
                                    <span class="leading-[1]">
                                        Bikin Aplikasi
                                    </span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#!">
                                <div class="flex space-x-2 items-start rtl:space-x-reverse">
                                    <iconify-icon icon="heroicons-outline:chat" class="leading-[1] text-base">
                                    </iconify-icon>
                                    <span class="leading-[1]">
                                        Mentor
                                    </span>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- Megamenu -->
                </li>
                <li class="menu-item-has-children ">
                    <a href="#!">
                        <div class="flex flex-1 items-center space-x-[6px] rtl:space-x-reverse">
                            <span class="icon-box">
                                <iconify-icon icon="material-symbols:price-change-outline">
                                </iconify-icon>
                            </span>
                            <div class="text-box">Harga</div>
                        </div>
                    </a>
                </li>
                <li class="menu-item-has-children ">
                    <a href="/faq1">
                        <div class="flex flex-1 items-center space-x-[6px] rtl:space-x-reverse">
                            <span class="icon-box">
                                <iconify-icon icon="material-symbols:contact-support-outline">
                                </iconify-icon>
                            </span>
                            <div class="text-box">FAQ</div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <!-- end top menu -->
        <div class="nav-tools flex items-center lg:space-x-5 space-x-3 rtl:space-x-reverse leading-0">

            <!-- BEGIN: Toggle Theme -->
            <div>
                <button id="themeMood"
                    class="h-[28px] w-[28px] lg:h-[32px] lg:w-[32px] lg:bg-gray-200 bg-slate-50 dark:bg-slate-900 lg:dark:bg-slate-900 dark:text-white text-slate-100 cursor-pointer rounded-full text-[20px] flex flex-col items-center justify-center">
                    <span class="flex items-center">
                        <iconify-icon class="text-slate-800 dark:text-white text-xl dark:block hidden" id="moonIcon"
                            icon="line-md:sunny-outline-to-moon-alt-loop-transition">
                        </iconify-icon>
                        <iconify-icon class="text-slate-800 dark:text-white text-xl dark:hidden block" id="sunIcon"
                            icon="line-md:moon-filled-to-sunny-filled-loop-transition">
                        </iconify-icon>
                    </span>
                </button>
            </div>
            <div>
                <a href="{{ url('register') }}">
                    <button class="btn inline-flex btn-sm justify-center btn-primary ">
                        <span class="flex items-center">
                            <iconify-icon class="text-sm dark:text-white ltr:mr-2 rtl:ml-2"
                                icon="mdi:register-outline"></iconify-icon>
                            <span>Daftar</span>
                        </span>
                    </button>
                </a>
                <a href="/login">
                    <button class="btn inline-flex btn-sm justify-center btn-outline-primary">
                        <span class="flex items-center">
                            <iconify-icon class="text-sm dark:text-white ltr:mr-2 rtl:ml-2"
                                icon="heroicons-outline:login"></iconify-icon>
                            <span class="dark:text-white">Masuk</span>
                        </span>
                    </button>
                </a>
            </div>
            <!-- END: TOggle Theme -->
            <!-- END: Header -->
            <button class="smallDeviceMenuController xl:hidden block leading-0">
                <iconify-icon class="cursor-pointer text-slate-900 dark:text-white text-2xl"
                    icon="heroicons-outline:menu-alt-3"></iconify-icon>
            </button>
            <!-- end mobile menu -->
            <!-- end nav tools -->
        </div>
    </div>
</div>

<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" class="light" data-header-styles="light"
    data-menu-styles="dark">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="Description" content="Laravel Tailwind CSS Responsive Admin Web Dashboard Template">
    <meta name="keywords"
        content="admin panel in laravel, tailwind, tailwind template admin, laravel admin panel, tailwind css dashboard, admin dashboard template, admin template, tailwind laravel, template dashboard, admin panel tailwind, tailwind css admin template, laravel tailwind template, laravel tailwind, tailwind admin dashboard">

    <!-- TITLE -->
    <title> YNEX - Laravel Tailwind CSS Admin & Dashboard Template </title>

    <!-- FAVICON -->
    <link rel="icon" href="{{ asset('assets/images/brand-logos/favicon.ico') }}" type="image/x-icon">

    <!-- ICONS CSS -->
    <link href="{{ asset('assets/iconfonts/icons.css') }}" rel="stylesheet">

    <!-- APP SCSS -->
    <link rel="preload" as="style" href="{{ asset('assets/app-6b44ca98.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/app-6b44ca98.css') }}" />

    <!-- SIMPLEBAR CSS -->
    <link rel="stylesheet" href="{{ asset('assets/libs/simplebar/simplebar.min.css') }}">

    <!-- COLOR PICKER CSS -->
    <link rel="stylesheet" href="{{ asset('assets/libs/@simonwep/pickr/themes/nano.min.css') }}">

    <!-- MAIN JS -->
    <script src="{{ asset('assets/main.js') }}"></script>


    <!-- Tabulator Css -->
    <link rel="stylesheet" href="{{ asset('assets/libs/tabulator-tables/css/tabulator.min.css') }}">

    <!-- Choices Css -->
    <link rel="stylesheet" href="{{ asset('assets/libs/choices.js/public/assets/styles/choices.min.css') }}">



</head>

<body>

    <!-- SWITCHER -->

    <div id="hs-overlay-switcher" class="hs-overlay hidden ti-offcanvas ti-offcanvas-right" tabindex="-1">
        <div class="ti-offcanvas-header z-10 relative">
            <h5 class="ti-offcanvas-title">
                Switcher
            </h5>
            <button type="button"
                class="ti-btn flex-shrink-0 p-0  transition-none text-defaulttextcolor dark:text-defaulttextcolor/70 hover:text-gray-700 focus:ring-gray-400 focus:ring-offset-white  dark:hover:text-white/80 dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
                data-hs-overlay="#hs-overlay-switcher">
                <span class="sr-only">Close modal</span>
                <i class="ri-close-circle-line leading-none text-lg"></i>
            </button>
        </div>
        <div class="ti-offcanvas-body !p-0 !border-b dark:border-white/10 z-10 relative !h-auto">
            <div class="flex rtl:space-x-reverse" aria-label="Tabs" role="tablist">
                <button type="button"
                    class="hs-tab-active:bg-success/20 w-full !py-2 !px-4 hs-tab-active:border-b-transparent text-defaultsize border-0 hs-tab-active:text-success dark:hs-tab-active:bg-success/20 dark:hs-tab-active:border-b-white/10 dark:hs-tab-active:text-success -mb-px bg-white font-semibold text-center  text-defaulttextcolor dark:text-defaulttextcolor/70 rounded-none hover:text-gray-700 dark:bg-bodybg dark:border-white/10  active"
                    id="switcher-item-1" data-hs-tab="#switcher-1" aria-controls="switcher-1" role="tab">
                    Theme Style
                </button>
                <button type="button"
                    class="hs-tab-active:bg-success/20 w-full !py-2 !px-4 hs-tab-active:border-b-transparent text-defaultsize border-0 hs-tab-active:text-success dark:hs-tab-active:bg-success/20 dark:hs-tab-active:border-b-white/10 dark:hs-tab-active:text-success -mb-px  bg-white font-semibold text-center  text-defaulttextcolor dark:text-defaulttextcolor/70 rounded-none hover:text-gray-700 dark:bg-bodybg dark:border-white/10  dark:hover:text-gray-300"
                    id="switcher-item-2" data-hs-tab="#switcher-2" aria-controls="switcher-2" role="tab">
                    Theme Colors
                </button>
            </div>
        </div>
        <div class="ti-offcanvas-body" id="switcher-body">
            <div id="switcher-1" role="tabpanel" aria-labelledby="switcher-item-1" class="">
                <div class="">
                    <p class="switcher-style-head">Theme Color Mode:</p>
                    <div class="grid grid-cols-3 switcher-style">
                        <div class="flex items-center">
                            <input type="radio" name="theme-style" class="ti-form-radio" id="switcher-light-theme"
                                checked>
                            <label for="switcher-light-theme"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Light</label>
                        </div>
                        <div class="flex items-center">
                            <input type="radio" name="theme-style" class="ti-form-radio" id="switcher-dark-theme">
                            <label for="switcher-dark-theme"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Dark</label>
                        </div>
                    </div>
                </div>
                <div>
                    <p class="switcher-style-head">Directions:</p>
                    <div class="grid grid-cols-3  switcher-style">
                        <div class="flex items-center">
                            <input type="radio" name="direction" class="ti-form-radio" id="switcher-ltr" checked>
                            <label for="switcher-ltr"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">LTR</label>
                        </div>
                        <div class="flex items-center">
                            <input type="radio" name="direction" class="ti-form-radio" id="switcher-rtl">
                            <label for="switcher-rtl"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">RTL</label>
                        </div>
                    </div>
                </div>
                <div>
                    <p class="switcher-style-head">Navigation Styles:</p>
                    <div class="grid grid-cols-3  switcher-style">
                        <div class="flex items-center">
                            <input type="radio" name="navigation-style" class="ti-form-radio"
                                id="switcher-vertical" checked>
                            <label for="switcher-vertical"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Vertical</label>
                        </div>
                        <div class="flex items-center">
                            <input type="radio" name="navigation-style" class="ti-form-radio"
                                id="switcher-horizontal">
                            <label for="switcher-horizontal"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Horizontal</label>
                        </div>
                    </div>
                </div>
                <div>
                    <p class="switcher-style-head">Navigation Menu Style:</p>
                    <div class="grid grid-cols-2 gap-2 switcher-style">
                        <div class="flex">
                            <input type="radio" name="navigation-data-menu-styles" class="ti-form-radio"
                                id="switcher-menu-click" checked>
                            <label for="switcher-menu-click"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Menu
                                Click</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="navigation-data-menu-styles" class="ti-form-radio"
                                id="switcher-menu-hover">
                            <label for="switcher-menu-hover"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Menu
                                Hover</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="navigation-data-menu-styles" class="ti-form-radio"
                                id="switcher-icon-click">
                            <label for="switcher-icon-click"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Icon
                                Click</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="navigation-data-menu-styles" class="ti-form-radio"
                                id="switcher-icon-hover">
                            <label for="switcher-icon-hover"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Icon
                                Hover</label>
                        </div>
                    </div>
                    <div class="px-4 text-secondary text-xs"><b class="me-2">Note:</b>Works same for both Vertical
                        and
                        Horizontal
                    </div>
                </div>
                <div class=" sidemenu-layout-styles">
                    <p class="switcher-style-head">Sidemenu Layout Syles:</p>
                    <div class="grid grid-cols-2 gap-2 switcher-style">
                        <div class="flex">
                            <input type="radio" name="sidemenu-layout-styles" class="ti-form-radio"
                                id="switcher-default-menu" checked>
                            <label for="switcher-default-menu"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold ">Default
                                Menu</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="sidemenu-layout-styles" class="ti-form-radio"
                                id="switcher-closed-menu">
                            <label for="switcher-closed-menu"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold ">
                                Closed
                                Menu</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="sidemenu-layout-styles" class="ti-form-radio"
                                id="switcher-icontext-menu">
                            <label for="switcher-icontext-menu"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold ">Icon
                                Text</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="sidemenu-layout-styles" class="ti-form-radio"
                                id="switcher-icon-overlay">
                            <label for="switcher-icon-overlay"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold ">Icon
                                Overlay</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="sidemenu-layout-styles" class="ti-form-radio"
                                id="switcher-detached">
                            <label for="switcher-detached"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold ">Detached</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="sidemenu-layout-styles" class="ti-form-radio"
                                id="switcher-double-menu">
                            <label for="switcher-double-menu"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Double
                                Menu</label>
                        </div>
                    </div>
                    <div class="px-4 text-secondary text-xs"><b class="me-2">Note:</b>Navigation menu styles won't
                        work
                        here.</div>
                </div>
                <div>
                    <p class="switcher-style-head">Page Styles:</p>
                    <div class="grid grid-cols-3  switcher-style">
                        <div class="flex">
                            <input type="radio" name="data-page-styles" class="ti-form-radio"
                                id="switcher-regular" checked>
                            <label for="switcher-regular"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Regular</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="data-page-styles" class="ti-form-radio"
                                id="switcher-classic">
                            <label for="switcher-classic"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Classic</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="data-page-styles" class="ti-form-radio"
                                id="switcher-modern">
                            <label for="switcher-modern"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">
                                Modern</label>
                        </div>
                    </div>
                </div>
                <div>
                    <p class="switcher-style-head">Layout Width Styles:</p>
                    <div class="grid grid-cols-3 switcher-style">
                        <div class="flex">
                            <input type="radio" name="layout-width" class="ti-form-radio" id="switcher-full-width"
                                checked>
                            <label for="switcher-full-width"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">FullWidth</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="layout-width" class="ti-form-radio" id="switcher-boxed">
                            <label for="switcher-boxed"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Boxed</label>
                        </div>
                    </div>
                </div>
                <div>
                    <p class="switcher-style-head">Menu Positions:</p>
                    <div class="grid grid-cols-3  switcher-style">
                        <div class="flex">
                            <input type="radio" name="data-menu-positions" class="ti-form-radio"
                                id="switcher-menu-fixed" checked>
                            <label for="switcher-menu-fixed"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Fixed</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="data-menu-positions" class="ti-form-radio"
                                id="switcher-menu-scroll">
                            <label for="switcher-menu-scroll"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Scrollable
                            </label>
                        </div>
                    </div>
                </div>
                <div>
                    <p class="switcher-style-head">Header Positions:</p>
                    <div class="grid grid-cols-3 switcher-style">
                        <div class="flex">
                            <input type="radio" name="data-header-positions" class="ti-form-radio"
                                id="switcher-header-fixed" checked>
                            <label for="switcher-header-fixed"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">
                                Fixed</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="data-header-positions" class="ti-form-radio"
                                id="switcher-header-scroll">
                            <label for="switcher-header-scroll"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Scrollable
                            </label>
                        </div>
                    </div>
                </div>
                <div class="">
                    <p class="switcher-style-head">Loader:</p>
                    <div class="grid grid-cols-3 switcher-style">
                        <div class="flex">
                            <input type="radio" name="page-loader" class="ti-form-radio"
                                id="switcher-loader-enable" checked>
                            <label for="switcher-loader-enable"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">
                                Enable</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="page-loader" class="ti-form-radio"
                                id="switcher-loader-disable">
                            <label for="switcher-loader-disable"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Disable
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div id="switcher-2" class="hidden" role="tabpanel" aria-labelledby="switcher-item-2">
                <div class="theme-colors">
                    <p class="switcher-style-head">Menu Colors:</p>
                    <div class="flex switcher-style space-x-3 rtl:space-x-reverse">
                        <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                            <input class="hs-tooltip-toggle ti-form-radio color-input color-white" type="radio"
                                name="menu-colors" id="switcher-menu-light" checked>
                            <span
                                class="hs-tooltip-content ti-main-tooltip-content !py-1 !px-2 !bg-black text-xs font-medium !text-white shadow-sm dark:!bg-black"
                                role="tooltip">
                                Light Menu
                            </span>
                        </div>
                        <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                            <input class="hs-tooltip-toggle ti-form-radio color-input color-dark" type="radio"
                                name="menu-colors" id="switcher-menu-dark" checked>
                            <span
                                class="hs-tooltip-content ti-main-tooltip-content !py-1 !px-2 !bg-black text-xs font-medium !text-white shadow-sm dark:!bg-black"
                                role="tooltip">
                                Dark Menu
                            </span>
                        </div>
                        <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                            <input class="hs-tooltip-toggle ti-form-radio color-input color-primary" type="radio"
                                name="menu-colors" id="switcher-menu-primary">
                            <span
                                class="hs-tooltip-content ti-main-tooltip-content !py-1 !px-2 !bg-black text-xs font-medium !text-white shadow-sm dark:!bg-black"
                                role="tooltip">
                                Color Menu
                            </span>
                        </div>
                        <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                            <input class="hs-tooltip-toggle ti-form-radio color-input color-gradient" type="radio"
                                name="menu-colors" id="switcher-menu-gradient">
                            <span
                                class="hs-tooltip-content ti-main-tooltip-content !py-1 !px-2 !bg-black text-xs font-medium !text-white shadow-sm dark:!bg-black"
                                role="tooltip">
                                Gradient Menu
                            </span>
                        </div>
                        <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                            <input class="hs-tooltip-toggle ti-form-radio color-input color-transparent"
                                type="radio" name="menu-colors" id="switcher-menu-transparent">
                            <span
                                class="hs-tooltip-content ti-main-tooltip-content !py-1 !px-2 !bg-black text-xs font-medium !text-white shadow-sm dark:!bg-black"
                                role="tooltip">
                                Transparent Menu
                            </span>
                        </div>
                    </div>
                    <div class="px-4 text-[#8c9097] dark:text-white/50 text-[.6875rem]"><b class="me-2">Note:</b>If
                        you want to change color Menu
                        dynamically
                        change from below Theme Primary color picker.</div>
                </div>
                <div class="theme-colors">
                    <p class="switcher-style-head">Header Colors:</p>
                    <div class="flex switcher-style space-x-3 rtl:space-x-reverse">
                        <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                            <input class="hs-tooltip-toggle ti-form-radio color-input color-white !border"
                                type="radio" name="header-colors" id="switcher-header-light" checked>
                            <span
                                class="hs-tooltip-content ti-main-tooltip-content !py-1 !px-2 !bg-black text-xs font-medium !text-white shadow-sm dark:!bg-black"
                                role="tooltip">
                                Light Header
                            </span>
                        </div>
                        <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                            <input class="hs-tooltip-toggle ti-form-radio color-input color-dark" type="radio"
                                name="header-colors" id="switcher-header-dark">
                            <span
                                class="hs-tooltip-content ti-main-tooltip-content !py-1 !px-2 !bg-black text-xs font-medium !text-white shadow-sm dark:!bg-black"
                                role="tooltip">
                                Dark Header
                            </span>
                        </div>
                        <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                            <input class="hs-tooltip-toggle ti-form-radio color-input color-primary" type="radio"
                                name="header-colors" id="switcher-header-primary">
                            <span
                                class="hs-tooltip-content ti-main-tooltip-content !py-1 !px-2 !bg-black text-xs font-medium !text-white shadow-sm dark:!bg-black"
                                role="tooltip">
                                Color Header
                            </span>
                        </div>
                        <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                            <input class="hs-tooltip-toggle ti-form-radio color-input color-gradient" type="radio"
                                name="header-colors" id="switcher-header-gradient">
                            <span
                                class="hs-tooltip-content ti-main-tooltip-content !py-1 !px-2 !bg-black text-xs font-medium !text-white shadow-sm dark:!bg-black"
                                role="tooltip">
                                Gradient Header
                            </span>
                        </div>
                        <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                            <input class="hs-tooltip-toggle ti-form-radio color-input color-transparent"
                                type="radio" name="header-colors" id="switcher-header-transparent">
                            <span
                                class="hs-tooltip-content ti-main-tooltip-content !py-1 !px-2 !bg-black text-xs font-medium !text-white shadow-sm dark:!bg-black"
                                role="tooltip">
                                Transparent Header
                            </span>
                        </div>
                    </div>
                    <div class="px-4 text-[#8c9097] dark:text-white/50 text-[.6875rem]"><b class="me-2">Note:</b>If
                        you want to change color
                        Header dynamically
                        change from below Theme Primary color picker.</div>
                </div>
                <div class="theme-colors">
                    <p class="switcher-style-head">Theme Primary:</p>
                    <div class="flex switcher-style space-x-3 rtl:space-x-reverse">
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-primary-1" type="radio"
                                name="theme-primary" id="switcher-primary" checked>
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-primary-2" type="radio"
                                name="theme-primary" id="switcher-primary1">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-primary-3" type="radio"
                                name="theme-primary" id="switcher-primary2">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-primary-4" type="radio"
                                name="theme-primary" id="switcher-primary3">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-primary-5" type="radio"
                                name="theme-primary" id="switcher-primary4">
                        </div>
                        <div class="ti-form-radio switch-select ps-0 mt-1 color-primary-light">
                            <div class="theme-container-primary"></div>
                            <div class="pickr-container-primary"></div>
                        </div>
                    </div>
                </div>
                <div class="theme-colors">
                    <p class="switcher-style-head">Theme Background:</p>
                    <div class="flex switcher-style space-x-3 rtl:space-x-reverse">
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-bg-1" type="radio"
                                name="theme-background" id="switcher-background" checked>
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-bg-2" type="radio"
                                name="theme-background" id="switcher-background1">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-bg-3" type="radio"
                                name="theme-background" id="switcher-background2">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-bg-4" type="radio"
                                name="theme-background" id="switcher-background3">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-bg-5" type="radio"
                                name="theme-background" id="switcher-background4">
                        </div>
                        <div class="ti-form-radio switch-select ps-0 mt-1 color-bg-transparent">
                            <div class="theme-container-background hidden"></div>
                            <div class="pickr-container-background"></div>
                        </div>
                    </div>
                </div>
                <div class="menu-image theme-colors">
                    <p class="switcher-style-head">Menu With Background Image:</p>
                    <div class="flex switcher-style space-x-3 rtl:space-x-reverse flex-wrap gap-3">
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio bgimage-input bg-img1" type="radio" name="theme-images"
                                id="switcher-bg-img">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio bgimage-input bg-img2" type="radio" name="theme-images"
                                id="switcher-bg-img1">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio bgimage-input bg-img3" type="radio" name="theme-images"
                                id="switcher-bg-img2">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio bgimage-input bg-img4" type="radio" name="theme-images"
                                id="switcher-bg-img3">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio bgimage-input bg-img5" type="radio" name="theme-images"
                                id="switcher-bg-img4">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ti-offcanvas-footer sm:flex justify-between">
            <a href="https://themeforest.net/item/ynex-laravel-tailwind-admin-dashboard-template/49617469"
                target="_blank" class="w-full ti-btn ti-btn-primary-full m-1">Buy Now</a>
            <a href="https://themeforest.net/user/spruko/portfolio" target="_blank"
                class="w-full ti-btn ti-btn-secondary-full m-1">Our Portfolio</a>
            <a href="javascript:void(0);" id="reset-all" class="w-full ti-btn ti-btn-danger-full m-1">Reset</a>
        </div>
    </div>
    <!-- END SWITCHER -->

    <!-- LOADER -->
    <div id="loader">
        <img src="build/assets/images/media/loader.svg" alt="">
    </div>
    <!-- END LOADER -->

    <!-- PAGE -->
    <div class="page">

        <!-- HEADER -->

        <header class="app-header">
            <nav class="main-header !h-[3.75rem]" aria-label="Global">
                <div class="main-header-container ps-[0.725rem] pe-[1rem]">
                    <div class="header-content-left">
                        <!-- Start::header-element -->
                        <div class="header-element">
                            <div class="horizontal-logo">
                                <a href="index.html" class="header-logo">
                                    <img src="{{ asset('assets/images/brand-logos/desktop-logo.png') }}"
                                        alt="logo" class="desktop-logo" />
                                    <img src="{{ asset('assets/images/brand-logos/toggle-logo.png') }}" alt="logo"
                                        class="toggle-logo" />
                                    <img src="{{ asset('assets/images/brand-logos/desktop-dark.png') }}"
                                        alt="logo" class="desktop-dark" />
                                    <img src="{{ asset('assets/images/brand-logos/toggle-dark.png') }}" alt="logo"
                                        class="toggle-dark" />
                                    <img src="{{ asset('assets/images/brand-logos/desktop-white.png') }}"
                                        alt="logo" class="desktop-white" />
                                    <img src="{{ asset('assets/images/brand-logos/toggle-white.png') }}"
                                        alt="logo" class="toggle-white" />
                                </a>
                            </div>
                        </div>
                        <!-- End::header-element -->
                        <!-- Start::header-element -->
                        <div class="header-element md:px-[0.325rem] !items-center">
                            <!-- Start::header-link -->
                            <a aria-label="Hide Sidebar"
                                class="sidemenu-toggle animated-arrow hor-toggle horizontal-navtoggle inline-flex items-center"
                                href="javascript:void(0);"><span></span></a>
                            <!-- End::header-link -->
                        </div>
                        <!-- End::header-element -->
                    </div>

                    <div class="header-content-right">
                        <div class="header-element py-[1rem] md:px-[0.65rem] px-2 header-search">
                            <button aria-label="button" type="button" data-hs-overlay="#search-modal"
                                class="inline-flex flex-shrink-0 justify-center items-center gap-2 rounded-full font-medium focus:ring-offset-0 focus:ring-offset-white transition-all text-xs">
                                <i class="bx bx-search-alt-2 header-link-icon"></i>
                            </button>
                        </div>

                        <!-- start header country -->

                        <!-- end header country -->

                        <!-- light and dark theme -->
                        <div
                            class="header-element header-theme-mode hidden !items-center sm:block !py-[1rem] md:!px-[0.65rem] px-2">
                            <a aria-label="anchor"
                                class="hs-dark-mode-active:hidden flex hs-dark-mode group flex-shrink-0 justify-center items-center gap-2 rounded-full font-medium transition-all text-xs"
                                href="javascript:void(0);" data-hs-theme-click-value="dark">
                                <i class="bx bx-moon header-link-icon"></i>
                            </a>
                            <a aria-label="anchor"
                                class="hs-dark-mode-active:flex hidden hs-dark-mode group flex-shrink-0 justify-center items-center gap-2 rounded-full font-medium text-defaulttextcolor transition-all text-xs"
                                href="javascript:void(0);" data-hs-theme-click-value="light">
                                <i class="bx bx-sun header-link-icon"></i>
                            </a>
                        </div>
                        <!-- End light and dark theme -->

                        <!-- Header Cart item -->


                        <!--End Header cart item  -->

                        <!--Header Notifictaion -->
                        <div
                            class="header-element py-[1rem] md:px-[0.65rem] px-2 notifications-dropdown header-notification hs-dropdown ti-dropdown !hidden md:!block [--placement:bottom-left]">
                            <button id="dropdown-notification" type="button"
                                class="hs-dropdown-toggle relative ti-dropdown-toggle !p-0 !border-0 flex-shrink-0 !rounded-full !shadow-none align-middle text-xs">
                                <i class="bx bx-bell header-link-icon text-[1.125rem]"></i>
                                <span class="flex absolute h-5 w-5 -top-[0.25rem] end-0 -me-[0.6rem]">
                                    <span
                                        class="animate-slow-ping absolute inline-flex -top-[2px] -start-[2px] h-full w-full rounded-full bg-secondary/40 opacity-75"></span>
                                    <span
                                        class="relative inline-flex justify-center items-center rounded-full h-[14.7px] w-[14px] bg-secondary text-[0.625rem] text-white"
                                        id="notification-icon-badge">5</span>
                                </span>
                            </button>
                            <div class="main-header-dropdown !-mt-3 !p-0 hs-dropdown-menu ti-dropdown-menu bg-white !w-[22rem] border-0 border-defaultborder hidden !m-0"
                                aria-labelledby="dropdown-notification">
                                <div
                                    class="ti-dropdown-header !m-0 !p-4 !bg-transparent flex justify-between items-center">
                                    <p class="mb-0 text-[1.0625rem] text-defaulttextcolor font-semibold">
                                        Notifications
                                    </p>
                                    <span
                                        class="text-[0.75em] py-[0.25rem/2] px-[0.45rem] font-[600] rounded-sm bg-secondary/10 text-secondary"
                                        id="notifiation-data">5 Unread</span>
                                </div>
                                <div class="dropdown-divider"></div>
                                <ul class="list-none !m-0 !p-0 end-0" id="header-notification-scroll">
                                    <li class="ti-dropdown-item dropdown-item">
                                        <div class="flex items-start">
                                            <div class="pe-2">
                                                <span
                                                    class="inline-flex text-primary justify-center items-center !w-[2.5rem] !h-[2.5rem] !leading-[2.5rem] !text-[0.8rem] !bg-primary/10 !rounded-[50%]"><i
                                                        class="ti ti-gift text-[1.125rem]"></i></span>
                                            </div>
                                            <div class="grow flex items-center justify-between">
                                                <div>
                                                    <p
                                                        class="mb-0 text-defaulttextcolor text-[0.8125rem] font-semibold">
                                                        <a href="notifications.html">Your Order Has Been Shipped</a>
                                                    </p>
                                                    <span
                                                        class="text-[#8c9097] font-normal text-[0.75rem] header-notification-text">Order
                                                        No: 123456 Has Shipped To Your Delivery
                                                        Address</span>
                                                </div>
                                                <div>
                                                    <a aria-label="anchor" href="javascript:void(0);"
                                                        class="min-w-fit text-[#8c9097] me-1 dropdown-item-close1"><i
                                                            class="ti ti-x text-[1rem]"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="ti-dropdown-item dropdown-item !flex-none">
                                        <div class="flex items-start">
                                            <div class="pe-2">
                                                <span
                                                    class="inline-flex text-secondary justify-center items-center !w-[2.5rem] !h-[2.5rem] !leading-[2.5rem] !text-[0.8rem] bg-secondary/10 rounded-[50%]"><i
                                                        class="ti ti-discount-2 text-[1.125rem]"></i></span>
                                            </div>
                                            <div class="grow flex items-center justify-between">
                                                <div>
                                                    <p
                                                        class="mb-0 text-defaulttextcolor text-[0.8125rem] font-semibold">
                                                        <a href="notifications.html">Discount Available</a>
                                                    </p>
                                                    <span
                                                        class="text-[#8c9097] font-normal text-[0.75rem] header-notification-text">Discount
                                                        Available On Selected Products</span>
                                                </div>
                                                <div>
                                                    <a aria-label="anchor" href="javascript:void(0);"
                                                        class="min-w-fit text-[#8c9097] me-1 dropdown-item-close1"><i
                                                            class="ti ti-x text-[1rem]"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="ti-dropdown-item dropdown-item">
                                        <div class="flex items-start">
                                            <div class="pe-2">
                                                <span
                                                    class="inline-flex text-pink justify-center items-center !w-[2.5rem] !h-[2.5rem] !leading-[2.5rem] !text-[0.8rem] bg-pink/10 rounded-[50%]"><i
                                                        class="ti ti-user-check text-[1.125rem]"></i></span>
                                            </div>
                                            <div class="grow flex items-center justify-between">
                                                <div>
                                                    <p
                                                        class="mb-0 text-defaulttextcolor text-[0.8125rem] font-semibold">
                                                        <a href="notifications.html">Account Has Been Verified</a>
                                                    </p>
                                                    <span
                                                        class="text-[#8c9097] font-normal text-[0.75rem] header-notification-text">Your
                                                        Account Has Been Verified Sucessfully</span>
                                                </div>
                                                <div>
                                                    <a aria-label="anchor" href="javascript:void(0);"
                                                        class="min-w-fit text-[#8c9097] me-1 dropdown-item-close1"><i
                                                            class="ti ti-x text-[1rem]"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="ti-dropdown-item dropdown-item">
                                        <div class="flex items-start">
                                            <div class="pe-2">
                                                <span
                                                    class="inline-flex text-warning justify-center items-center !w-[2.5rem] !h-[2.5rem] !leading-[2.5rem] !text-[0.8rem] bg-warning/10 rounded-[50%]"><i
                                                        class="ti ti-circle-check text-[1.125rem]"></i></span>
                                            </div>
                                            <div class="grow flex items-center justify-between">
                                                <div>
                                                    <p
                                                        class="mb-0 text-defaulttextcolor text-[0.8125rem] font-semibold">
                                                        <a href="notifications.html">Order Placed
                                                            <span class="text-warning">ID: #1116773</span></a>
                                                    </p>
                                                    <span
                                                        class="text-[#8c9097] font-normal text-[0.75rem] header-notification-text">Order
                                                        Placed Successfully</span>
                                                </div>
                                                <div>
                                                    <a aria-label="anchor" href="javascript:void(0);"
                                                        class="min-w-fit text-[#8c9097] me-1 dropdown-item-close1"><i
                                                            class="ti ti-x text-[1rem]"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="ti-dropdown-item dropdown-item">
                                        <div class="flex items-start">
                                            <div class="pe-2">
                                                <span
                                                    class="inline-flex text-success justify-center items-center !w-[2.5rem] !h-[2.5rem] !leading-[2.5rem] !text-[0.8rem] bg-success/10 rounded-[50%]"><i
                                                        class="ti ti-clock text-[1.125rem]"></i></span>
                                            </div>
                                            <div class="grow flex items-center justify-between">
                                                <div>
                                                    <p
                                                        class="mb-0 text-defaulttextcolor text-[0.8125rem] font-semibold">
                                                        <a href="notifications.html">Order Delayed
                                                            <span class="text-success">ID: 7731116</span></a>
                                                    </p>
                                                    <span
                                                        class="text-[#8c9097] font-normal text-[0.75rem] header-notification-text">Order
                                                        Delayed Unfortunately</span>
                                                </div>
                                                <div>
                                                    <a aria-label="anchor" href="javascript:void(0);"
                                                        class="min-w-fit text-[#8c9097] me-1 dropdown-item-close1"><i
                                                            class="ti ti-x text-[1rem]"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>

                                <div class="p-4 empty-header-item1 border-t mt-2">
                                    <div class="grid">
                                        <a href="notifications.html"
                                            class="ti-btn ti-btn-primary-full !m-0 w-full p-2">View All</a>
                                    </div>
                                </div>
                                <div class="p-[3rem] empty-item1 hidden">
                                    <div class="text-center">
                                        <span
                                            class="!h-[4rem] !w-[4rem] avatar !leading-[4rem] !rounded-full !bg-secondary/10 !text-secondary">
                                            <i class="ri-notification-off-line text-[2rem]"></i>
                                        </span>
                                        <h6 class="font-semibold mt-3 text-defaulttextcolor text-[1rem]">
                                            No New Notifications
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Header Notifictaion -->

                        <!-- Related Apps -->

                        <!--End Related Apps -->

                        <!-- Fullscreen -->

                        <!-- End Full screen -->

                        <!-- Header Profile -->
                        <div
                            class="header-element md:!px-[0.65rem] px-2 hs-dropdown !items-center ti-dropdown [--placement:bottom-left]">
                            <button id="dropdown-profile" type="button"
                                class="hs-dropdown-toggle ti-dropdown-toggle !gap-2 !p-0 flex-shrink-0 sm:me-2 me-0 !rounded-full !shadow-none text-xs align-middle !border-0 !shadow-transparent">
                                <img class="inline-block rounded-full" src="{{ asset('assets/images/faces/9.jpg') }}"
                                    width="32" height="32" alt="Image Description" />
                            </button>

                            <div class="md:block hidden dropdown-profile">
                                <p class="font-semibold mb-0 leading-none text-[#536485] text-[0.813rem]">
                                    James
                                </p>

                            </div>
                            <div class="hs-dropdown-menu ti-dropdown-menu !-mt-3 border-0 w-[11rem] !p-0 border-defaultborder hidden main-header-dropdown pt-0 overflow-hidden header-profile-dropdown dropdown-menu-end"
                                aria-labelledby="dropdown-profile">
                                <ul class="text-defaulttextcolor font-medium">
                                    <li>
                                        {{-- <x-responsive-nav-link :href="" class="w-full ti-dropdown-item !text-[0.8125rem] !gap-x-0 !p-[0.65rem] !inline-flex">
                           <i
                                  class="ti ti-user-circle text-[1.125rem] me-2 opacity-[0.7]"
                                ></i
                                >Profile
                        </x-responsive-nav-link> --}}
                                    </li>
                                    <li>
                                        <form method="POST" action="#">
                                            @csrf

                                            {{-- <x-responsive-nav-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();" class="w-full ti-dropdown-item !text-[0.8125rem] !p-[0.65rem] !gap-x-0 !inline-flex">
                                <i
                                  class="ti ti-logout text-[1.125rem] me-2 opacity-[0.7]"
                                ></i
                                >Log Out
                            </x-responsive-nav-link> --}}
                                        </form>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <!-- End Header Profile -->

                        <!-- Switcher Icon -->
                        <div class="header-element md:px-[0.48rem]">
                            <button aria-label="button" type="button"
                                class="hs-dropdown-toggle switcher-icon inline-flex flex-shrink-0 justify-center items-center gap-2 rounded-full font-medium align-middle transition-all text-xs"
                                data-hs-overlay="#hs-overlay-switcher">
                                <i class="bx bx-cog header-link-icon animate-spin-slow"></i>
                            </button>
                        </div>
                        <!-- Switcher Icon -->

                        <!-- End::header-element -->
                    </div>
                </div>
            </nav>

        </header>
        <!-- END HEADER -->
        <!-- SIDEBAR -->

        <aside class="app-sidebar" id="sidebar">
            <!-- Start::main-sidebar-header -->
            <div class="main-sidebar-header">
                <a href="/" class="header-logo">
                    <img src="{{ asset('assets/images/brand-logos/toggle-dark.png') }}" alt="logo"
                        class="desktop-logo" />
                    <img src="{{ asset('assets/images/brand-logos/toggle-dark.png') }}" alt="logo"
                        class="toggle-logo" />
                    <img src="{{ asset('assets/images/brand-logos/toggle-dark.png') }}" alt="logo"
                        class="desktop-dark" />
                    <img src="{{ asset('assets/images/brand-logos/toggle-dark.png') }}" alt="logo"
                        class="toggle-dark" />
                    <img src="{{ asset('assets/images/brand-logos/toggle-dark.png') }}" alt="logo"
                        class="desktop-white" />
                    <img src="{{ asset('assets/images/brand-logos/toggle-white.png') }}" alt="logo"
                        class="toggle-white" />
                </a>
            </div>
            <!-- End::main-sidebar-header -->

            <!-- Start::main-sidebar -->
            <div class="main-sidebar" id="sidebar-scroll">
                <!-- Start::nav -->
                <nav class="main-menu-container nav nav-pills flex-column sub-open">
                    <div class="slide-left" id="slide-left">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24"
                            viewBox="0 0 24 24">
                            <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                        </svg>
                    </div>
                    <ul class="main-menu">
                        <!-- Start::slide__category -->
                        <li class="slide__category">
                            <span class="category-name"></span>
                        </li>
                        <!-- End::slide__category -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="{{ url('/') }}" class="side-menu__item">
                                <i class="bx bx-home side-menu__icon"></i>
                                <span class="side-menu__label">Dashboard

                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="{{ url('/') }}">Dashboard</a>
                                </li>

                            </ul>
                        </li>
                        <!-- End::slide -->
                        <!-- Start::slide__category -->
                        <li class="slide__category">
                            <span class="category-name"></span>
                        </li>
                        <!-- End::slide__category -->

                        <!-- Start::slide -->

                        <!-- End::slide -->

                        <!-- Start::slide -->

                        <!-- End::slide -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="bx bx-bar-chart-square side-menu__icon"></i>
                                <span class="side-menu__label">Users</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0);">Users</a>
                                </li>
                                <li class="slide">
                                    <a href="{{ url('/users') }}" class="side-menu__item">Users List</a>
                                </li>

                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide -->

                        <li class="slide__category">
                            <span class="category-name">Albums</span>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="bx bx-fingerprint side-menu__icon"></i>
                                <span class="side-menu__label">Albums</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0);">Albums</a>
                                </li>
                                <li class="slide">
                                    <a href="{{ url('/albums') }}" class="side-menu__item">Album List</a>
                                </li>


                            </ul>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="bx bx-fingerprint side-menu__icon"></i>
                                <span class="side-menu__label">Albums</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0);">Albums</a>
                                </li>
                                <li class="slide">
                                    <a href="{{ url('/albums') }}" class="side-menu__item">Album List</a>
                                </li>


                            </ul>
                        </li>
                        <!-- End::slide -->


                    </ul>
                    <div class="slide-right" id="slide-right">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24"
                            viewBox="0 0 24 24">
                            <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                        </svg>
                    </div>
                </nav>
                <!-- End::nav -->
            </div>
            <!-- End::main-sidebar -->
        </aside>
        <!-- END SIDEBAR -->

        <!-- MAIN-CONTENT -->
        <div class="content">
            <div class="main-content">
                <div class="block justify-between page-header md:flex">
                    <div>
                        <h3
                            class="!text-defaulttextcolor dark:!text-defaulttextcolor/70 dark:text-white dark:hover:text-white text-[1.125rem] font-semibold">
                            Data Tables</h3>
                    </div>
                    <ol class="flex items-center whitespace-nowrap min-w-0">
                        <li class="text-[0.813rem] ps-[0.5rem]">
                            <a class="flex items-center text-primary hover:text-primary dark:text-primary truncate"
                                href="javascript:void(0);">
                                Tables
                                <i
                                    class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] dark:text-white/50 px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                            </a>
                        </li>
                        <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary dark:text-[#8c9097] dark:text-white/50 "
                            aria-current="page">
                            Data Tables
                        </li>
                    </ol>
                </div>
                <!-- Page Header Close -->

                <!-- Start::row-1 -->
                <!-- End::row-1 -->

                <!-- Start::row-2 -->
                
                <!-- End::row-3 -->

                <!-- Start::row-4 -->
                <div class="grid grid-cols-12 gap-6">
                    <div class="col-span-12">
                        <div class="box">
                            <div class="box-header">
                                <h5 class="box-title">Download DataTable</h5>
                            </div>
                            <div class="box-body space-y-3">
                                <div class="download-data">
                                    <button type="button" class="ti-btn ti-btn-primary" id="download-csv">Download CSV</button>
                                    <button type="button" class="ti-btn ti-btn-primary" id="download-json">Download JSON</button>
                                    <button type="button" class="ti-btn ti-btn-primary" id="download-xlsx">Download XLSX</button>
                                    <button type="button" class="ti-btn ti-btn-primary" id="download-pdf">Download PDF</button>
                                    <button type="button" class="ti-btn ti-btn-primary" id="download-html">Download HTML</button>
                                </div>
                                <div class="overflow-hidden table-bordered">
                                    <table id="download-table" class="ti-custom-table ti-striped-table ti-custom-table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Title</th>
                                                <th scope="col">User ID</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($responseData as $album)
                                            <tr class="border border-x-0 border-defaultborder album-row">
                                                <td>{{ $album['id'] }}</td>
                                                <td>
                                                    {{ $album['title'] }}
                                                </td>
                                                <td>{{ $album['userId'] }}</td>
                                                
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                


            </div>
        </div>

        <!-- END MAIN-CONTENT -->

        <!-- SEARCH-MODAL -->

        <div id="search-modal" class="hs-overlay ti-modal hidden mt-[1.75rem]">
            <div class="ti-modal-box">
                <div
                    class="ti-modal-content !border !border-defaultborder dark:!border-defaultborder/10 !rounded-[0.5rem]">
                    <div class="ti-modal-body">

                        <div class="input-group border-[2px] border-primary rounded-[0.25rem] w-full flex">
                            <a aria-label="anchor" href="javascript:void(0);"
                                class="input-group-text flex items-center bg-light border-e-[#dee2e6] !py-[0.375rem] !px-[0.75rem] !rounded-none !text-[0.875rem]"
                                id="Search-Grid"><i class="fe fe-search header-link-icon text-[0.875rem]"></i></a>

                            <input type="search"
                                class="form-control border-0 px-2 !text-[0.8rem] w-full focus:ring-transparent"
                                placeholder="Search" aria-label="Username">

                            <a aria-label="anchor" href="javascript:void(0);"
                                class="flex items-center input-group-text bg-light !py-[0.375rem] !px-[0.75rem]"
                                id="voice-search"><i class="fe fe-mic header-link-icon"></i></a>
                            <div class="hs-dropdown ti-dropdown">
                                <a aria-label="anchor" href="javascript:void(0);"
                                    class="flex items-center hs-dropdown-toggle ti-dropdown-toggle btn btn-light btn-icon !bg-light !py-[0.375rem] !rounded-none !px-[0.75rem] text-[0.95rem] h-[2.413rem] w-[2.313rem]">
                                    <i class="fe fe-more-vertical"></i>
                                </a>

                                <ul class="absolute hs-dropdown-menu ti-dropdown-menu !-mt-2 !p-0 hidden">
                                    <li><a class="ti-dropdown-item flex text-defaulttextcolor dark:text-defaulttextcolor/70 !py-[0.5rem] !px-[0.9375rem] !text-[0.8125rem] font-medium"
                                            href="javascript:void(0);">Action</a></li>
                                    <li><a class="ti-dropdown-item flex text-defaulttextcolor dark:text-defaulttextcolor/70 !py-[0.5rem] !px-[0.9375rem] !text-[0.8125rem] font-medium"
                                            href="javascript:void(0);">Another action</a></li>
                                    <li><a class="ti-dropdown-item flex text-defaulttextcolor dark:text-defaulttextcolor/70 !py-[0.5rem] !px-[0.9375rem] !text-[0.8125rem] font-medium"
                                            href="javascript:void(0);">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="ti-dropdown-item flex text-defaulttextcolor dark:text-defaulttextcolor/70 !py-[0.5rem] !px-[0.9375rem] !text-[0.8125rem] font-medium"
                                            href="javascript:void(0);">Separated link</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="mt-5">
                            <p
                                class="font-normal  text-[#8c9097] dark:text-white/50 text-[0.813rem] dark:text-gray-200 mb-2">
                                Are You Looking For...</p>

                            <span
                                class="search-tags text-[0.75rem] !py-[0rem] !px-[0.55rem] dark:border-defaultborder/10"><i
                                    class="fe fe-user me-2"></i>People<a href="javascript:void(0)"
                                    class="tag-addon header-remove-btn"><span class="sr-only">Remove badge</span><i
                                        class="fe fe-x"></i></a></span>
                            <span
                                class="search-tags text-[0.75rem] !py-[0rem] !px-[0.55rem] dark:border-defaultborder/10"><i
                                    class="fe fe-file-text me-2"></i>Pages<a href="javascript:void(0)"
                                    class="tag-addon header-remove-btn"><span class="sr-only">Remove badge</span><i
                                        class="fe fe-x"></i></a></span>
                            <span
                                class="search-tags text-[0.75rem] !py-[0rem] !px-[0.55rem] dark:border-defaultborder/10"><i
                                    class="fe fe-align-left me-2"></i>Articles<a href="javascript:void(0)"
                                    class="tag-addon header-remove-btn"><span class="sr-only">Remove badge</span><i
                                        class="fe fe-x"></i></a></span>
                            <span
                                class="search-tags text-[0.75rem] !py-[0rem] !px-[0.55rem] dark:border-defaultborder/10"><i
                                    class="fe fe-server me-2"></i>Tags<a href="javascript:void(0)"
                                    class="tag-addon header-remove-btn"><span class="sr-only">Remove badge</span><i
                                        class="fe fe-x"></i></a></span>

                        </div>


                        <div class="my-[1.5rem]">
                            <p class="font-normal  text-[#8c9097] dark:text-white/50 text-[0.813rem] mb-2">Recent
                                Search :</p>

                            <div id="dismiss-notifications-alert" role="alert"
                                class="!p-2 border dark:border-defaultborder/10 rounded-[0.3125rem] flex items-center text-defaulttextcolor dark:text-defaulttextcolor/70 !mb-2 !text-[0.8125rem] alert">
                                <a href="notifications.html"><span>Notifications</span></a>
                                <a aria-label="anchor" class="ms-auto leading-none" href="javascript:void(0);"
                                    data-hs-remove-element="#dismiss-notifications-alert"><i
                                        class="fe fe-x !text-[0.8125rem] text-[#8c9097] dark:text-white/50"></i></a>
                            </div>

                            <div id="dismiss-alerts-alert" role="alert"
                                class="!p-2 border dark:border-defaultborder/10 rounded-[0.3125rem] flex items-center text-defaulttextcolor dark:text-defaulttextcolor/70 !mb-2 !text-[0.8125rem] alert">
                                <a href="alerts.html"><span>Alerts</span></a>
                                <a aria-label="anchor" class="ms-auto leading-none" href="javascript:void(0);"
                                    data-hs-remove-element="#dismiss-alerts-alert"><i
                                        class="fe fe-x !text-[0.8125rem] text-[#8c9097] dark:text-white/50"></i></a>
                            </div>

                            <div id="dismiss-mail-alert" role="alert"
                                class="!p-2 border dark:border-defaultborder/10 rounded-[0.3125rem] flex items-center text-defaulttextcolor dark:text-defaulttextcolor/70 !mb-0 !text-[0.8125rem] alert">
                                <a href="mail.html"><span>Mail</span></a>
                                <a aria-label="anchor" class="ms-auto lh-1" href="javascript:void(0);"
                                    data-hs-remove-element="#dismiss-mail-alert"><i
                                        class="fe fe-x !text-[0.8125rem] text-[#8c9097] dark:text-white/50"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="ti-modal-footer !py-[1rem] !px-[1.25rem]">
                        <div class="inline-flex rounded-md  shadow-sm">
                            <button type="button"
                                class="ti-btn-group !px-[0.75rem] !py-[0.45rem]  rounded-s-[0.25rem] !rounded-e-none ti-btn-primary !text-[0.75rem] dark:border-white/10">
                                Search
                            </button>
                            <button type="button"
                                class="ti-btn-group  ti-btn-primary-full rounded-e-[0.25rem] dark:border-white/10 !text-[0.75rem] !rounded-s-none !px-[0.75rem] !py-[0.45rem]">
                                Clear Recents
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SEARCH-MODAL -->

        <!-- FOOTER -->

        <footer
            class="footer mt-auto xl:ps-[15rem] font-normal font-inter bg-white text-defaultsize leading-normal text-[0.813] shadow-[0_0_0.4rem_rgba(0,0,0,0.1)] dark:bg-bodybg py-4 text-center">
            <div class="container">
                <span class="text-gray dark:text-defaulttextcolor/50"> Copyright © <span id="year"></span> <a
                        href="javascript:void(0);"
                        class="text-defaulttextcolor font-semibold dark:text-defaulttextcolor">Ynex</a>.
                    Designed with <span class="bi bi-heart-fill text-danger"></span> by <a href="javascript:void(0);">
                        <span class="font-semibold text-primary underline">Spruko</span>
                    </a> All
                    rights
                    reserved
                </span>
            </div>
        </footer>
        <!-- END FOOTER -->

    </div>
    <!-- END PAGE-->

    <!-- SCRIPTS -->

    <!-- SCROLL-TO-TOP -->
    <div class="scrollToTop">
        <span class="arrow"><i class="ri-arrow-up-s-fill text-xl"></i></span>
    </div>
    <div id="responsive-overlay"></div>

    <!-- PRELINE JS -->

    <script src="{{ asset('assets/libs/preline/preline.js') }}"></script>

    <!-- POPPER JS -->
    <script src="{{ asset('assets/libs/@popperjs/core/umd/popper.min.js') }}"></script>

    <!-- COLOR PICKER JS -->
    <script src="{{ asset('assets/libs/@simonwep/pickr/pickr.es5.min.js') }}"></script>

    <!-- SWITCH JS -->
    <link rel="modulepreload" href="{{ asset('assets/switch-8d0a5268.js') }}" />
    <script type="module" src="{{ asset('assets/switch-8d0a5268.js') }}"></script>

    <!-- SIMPLEBAR JS -->
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/tabulator-tables/js/tabulator.min.js') }}"></script>
    <!-- Choices JS -->
    <script src="{{ asset('assets/libs/choices.js/public/assets/scripts/choices.min.js') }}"></script>

    <!-- Flat Picker JS -->
    

    

    <script src="{{ asset('assets/libs/xlsx/xlsx.full.min.js') }}"></script>
    <script src="{{ asset('assets/libs/jspdf/jspdf.umd.min.js') }}"></script>
    <script src="{{ asset('assets/libs/jspdf-autotable/jspdf.plugin.autotable.min.js') }}"></script>
    {{-- <link rel="modulepreload" href="{{ asset('assets/datatable-d0054720.js') }}" /><script type="module" src="{{ asset('assets/datatable-d0054720.js') }}"></script>  
     --}}
    <script src="{{ asset('assets/sticky.js') }}"></script>



    <!-- STICKY JS -->
    

    <!-- APP JS -->
    <link rel="modulepreload" href="{{ asset('assets/app-cff42aa7.js') }}" />
    <script type="module" src="{{ asset('assets/app-cff42aa7.js') }}"></script>

    <!-- CUSTOM-SWITCHER JS -->
    <link rel="modulepreload" href="{{ asset('assets/custom-switcher-508a7845.js') }}" />
    <script type="module" src="{{ asset('assets/custom-switcher-508a7845.js') }}"></script>

    <!-- END SCRIPTS -->
   
</body>
<script>
    // Assuming responseData contains the imported album data
var responseData = {!! json_encode($responseData) !!};

// Initialize Tabulator table
var downloadTable = new Tabulator("#download-table", {
    width: 100,
    minWidth: 40,
    layout: "fitColumns",
    pagination: "local",
    paginationSize: 10,
    paginationSizeSelector: [5, 10, 15, 20, 25],
    paginationCounter: "rows",
    movableColumns: true,
    reactiveData: true,
    data: responseData, // Use responseData variable as the data source
    columns: [
        { title: "User ID", field: "userId", sorter: "number" },
        { title: "ID", field: "id", sorter: "number" },
        { title: "Title", field: "title", sorter: "string" }
    ]
});

document.addEventListener("DOMContentLoaded", function () {
    // Add event listeners for download buttons
    document.getElementById("download-csv").addEventListener("click", function () {
        downloadTable.download("csv", "data.csv");
    });

    document.getElementById("download-json").addEventListener("click", function () {
        downloadTable.download("json", "data.json");
    });

    document.getElementById("download-xlsx").addEventListener("click", function () {
        downloadTable.download("xlsx", "data.xlsx", { sheetName: "Albums" });
    });

    document.getElementById("download-pdf").addEventListener("click", function () {
        downloadTable.download("pdf", "data.pdf", { orientation: "landscape", title: "Album Data" });
    });

    document.getElementById("download-html").addEventListener("click", function () {
        downloadTable.download("html", "data.html", { style: true });
    });
});

// Add cellClick event listener
downloadTable.addEventListener("cellClick", function(e, cell) {
    // Handle cell click event here
    // For example, you can get the row data and navigate to a profile page
    var rowData = cell.getRow().getData();
    // Navigate to profile page using the row data
    window.location.href = "/profile/" + rowData.userId; // Assuming userId exists in rowData
});

</script>


</html>

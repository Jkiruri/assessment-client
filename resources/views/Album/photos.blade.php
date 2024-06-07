<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" class="light" data-header-styles="light"
    data-menu-styles="dark">

<head>
    <!-- META DATA -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="Author" content="JCRM" />
    <meta name="Description" content="Laravel Tailwind CSS Responsive Admin CRM" />
    <meta name="keywords"
        content="admin panel in laravel, tailwind, tailwind template admin, laravel admin panel, tailwind css dashboard, admin dashboard template, admin template, tailwind laravel, template dashboard, admin panel tailwind, tailwind css admin template, laravel tailwind template, laravel tailwind, tailwind admin dashboard" />

    <!-- TITLE -->
    <title>SIL ASSESSMENT</title>

    <!-- FAVICON -->
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
                                    <img src="{{ asset('assets/images/brand-logos/desktop-logo.png') }}" alt="logo"
                                        class="desktop-logo" />
                                    <img src="{{ asset('assets/images/brand-logos/toggle-logo.png') }}" alt="logo"
                                        class="toggle-logo" />
                                    <img src="{{ asset('assets/images/brand-logos/desktop-dark.png') }}" alt="logo"
                                        class="desktop-dark" />
                                    <img src="{{ asset('assets/images/brand-logos/toggle-dark.png') }}" alt="logo"
                                        class="toggle-dark" />
                                    <img src="{{ asset('assets/images/brand-logos/desktop-white.png') }}" alt="logo"
                                        class="desktop-white" />
                                    <img src="{{ asset('assets/images/brand-logos/toggle-white.png') }}" alt="logo"
                                        class="toggle-white" />
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
                        </h3>
                    </div>
                    <ol class="flex items-center whitespace-nowrap min-w-0">
                        <li class="text-[0.813rem] ps-[0.5rem]">
                            <a class="flex items-center text-primary hover:text-primary dark:text-primary truncate"
                                href="{{ url('/') }}">
                                Home
                                <i
                                    class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] dark:text-white/50 px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                            </a>
                        </li>
                        <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary dark:text-[#8c9097] dark:text-white/50 "
                            aria-current="page">
                            Albums
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
                                <h5 class="box-title">Photos</h5>
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
                                    <table id="photos-table" class="ti-custom-table ti-striped-table ti-custom-table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Title</th>
                                                <th scope="col">URL</th>
                                                <th scope="col">Thumbnail</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($photos as $photo)
                                            <tr class="border border-x-0 border-defaultborder album-row">
                                                <td>{{ $photo['id'] }}</td>
                                                <td>{{ $photo['title'] }}</td>
                                                <td><a href="{{ $photo['url'] }}" target="_blank">{{ $photo['url'] }}</a></td>
                                                <td><img src="{{ $photo['thumbnailUrl'] }}" alt="Thumbnail" style="max-width: 100px;"></td>
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


        <!-- END SEARCH-MODAL -->

        <!-- FOOTER -->

        <footer class="footer mt-auto xl:ps-[15rem] font-normal font-inter bg-white text-defaultsize leading-normal text-[0.813] shadow-[0_0_0.4rem_rgba(0,0,0,0.1)] dark:bg-bodybg py-4 text-center">
            <div class="container">
                <span class="text-gray dark:text-defaulttextcolor/50"> Copyright © <span id="year"></span> <a
                        href="javascript:void(0);" class="text-defaulttextcolor font-semibold dark:text-defaulttextcolor"></a>James Kiruri
                    All
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


</html>

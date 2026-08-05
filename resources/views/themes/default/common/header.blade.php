<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <title>{{$setting->site_name}}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_description')">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="@yield('title')">
    <meta property="og:description" content="@yield('meta_description')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">

    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('theme-assets/assets/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('theme-assets/assets/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('theme-assets/assets/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{ asset('theme-assets/assets/favicon/site.webmanifest')}}">

    <!--  CSS  -->
    <link rel="stylesheet" href="{{ asset('theme-assets/css/app.css')}}">
    <script src="https://cdn.tailwindcss.com"></script>
    <!--   JS -->
    <script src="{{ asset('theme-assets/js/app.js')}}" defer></script>
    <script src="{{ asset('theme-assets/js/plugin.js')}}" defer></script>
    <link rel="preload" as="image" href="{{ asset('theme-assets/assets/hero/1.webp')}}">
    <link rel="preload" as="image" href="{{ asset('theme-assets/assets/hero/2.webp')}}">


    {{-- GLOBAL ORGANIZATION SCHEMA --}}
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "TravelAgency",
        "name": "Trekking Cms",
        "url": "{{ url('/') }}",
        "logo": "{{ asset('theme-assets/assets/logo.jpg') }}",
        "image": "{{ asset('theme-assets/assets/logo.jpg') }}",
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "Kathmandu",
            "addressCountry": "NP"
        }
    }
    </script>

    {{-- Page Specific Schema --}}
    @yield('schema')

</head>

<body>
    @include('themes.default.common.response')
    <!-- Desktop Navbar -->
    <nav id="desktop-navbar"
        class="fixed top-0 left-0 w-full z-50 transition-all duration-500 ease-out
  bg-transparent text-white border-b border-transparent
  hover:bg-white hover:text-gray-900 ">
        <div class="container flex items-center justify-between ">
            <!-- Logo -->
            <a href="{{url('/')}}" class="flex items-center py-6 ">
                <img src="{{ asset('theme-assets/assets/logo-white.png') }}"
                    id="navbar-logo"
                    class="h-10"
                    data-white-logo="{{ asset('theme-assets/assets/logo-white.png') }}"
                    data-dark-logo="{{ asset('theme-assets/assets/logo.png') }}"
                    alt="logo"
                />
            </a>
            <!-- Desktop Menu -->
            <div class="hidden lg:flex items-center space-x-4 md:space-x-6 font-medium">
                <ul class="flex items-center space-x-4">
                    <!-- Mega Menu Trekking -->
                    <li>
                        <button data-dropdown-toggle="trekkings-menu" data-dropdown-delay="1"
                            data-dropdown-trigger="hover" data-dropdown-placement="bottom"
                            data-dropdown-offset-distance="0" data-dropdown-offset-skidding="0"
                            class="flex items-center gap-1 hover:text-brand-400  py-8 px-2 rounded-xl"> Trekking <svg
                                class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m19 9-7 7-7-7" />
                            </svg>
                        </button>
                        <!-- Mega Menu Dropdown -->
                        <div id="trekkings-menu"
                            class="hidden w-full bg-gray-50 border border-gray-100 rounded-b-3xl shadow-sm text-gray-900 max-h-[80vh] overflow-y-auto">
                            <div class="mx-auto">
                                <section class="py-4 px-8">
                                    <div class="activity swiper relative">
                                        <div class="swiper-wrapper">


                                            <!--  -->
                                            <!-- Slide 1 -->
                                            <div class="swiper-slide">
                                                <div class="space-y-3">
                                                    <a class="item group transition-all duration-500 hover:-translate-y-2"
                                                        href="trip-list.php">
                                                        <figure
                                                            class="relative overflow-hidden rounded-2xl h-[265px] image-anime">
                                                            <img data-src="{{ asset('theme-assets/assets/trip/1.webp')}}" src="{{ asset('theme-assets/assets/default.jpg')}}"
                                                                loading="lazy" alt="Everest Region"
                                                                class="lazy-img object-cover w-full h-full absolute inset-0 transition-transform duration-700 group-hover:scale-110" />
                                                            <span
                                                                class="absolute top-3 right-3 bg-white text-brand-500 text-xs font-semibold px-3 py-1 rounded-full shadow-md z-10">
                                                                12 Trips
                                                            </span>
                                                            <figcaption
                                                                class="absolute bottom-0 left-0 w-full p-4 figcaption-absolute">
                                                                <h3
                                                                    class="text-white text-base md:text-lg font-semibold">
                                                                    Everest Region</h3>
                                                            </figcaption>
                                                        </figure>
                                                    </a>
                                                    <ul class="grid grid-cols-1 gap-3 text-sm text-gray-600 px-4">
                                                        <li><a href="trip-list.php"
                                                                class="hover:text-brand-400 line-clamp-1">Everest Base
                                                                Camp Trek - 14 Days</a></li>
                                                        <li><a href="trip-list.php"
                                                                class="hover:text-brand-400 line-clamp-1">Everest Base
                                                                Camp with Island Peak Climbing - 19 Days</a></li>
                                                        <li><a href="trip-list.php"
                                                                class="hover:text-brand-400 line-clamp-1">Everest Base
                                                                Camp with Gokyo Lake (Cho-La Pass Trek) - 16 Days</a>
                                                        </li>
                                                        <li><a href="trip-list.php"
                                                                class="hover:text-brand-400 line-clamp-1">Gokyo Lake
                                                                with Renjo La Pass Trek - 13 Days</a></li>
                                                        <li><a href="trip-list.php"
                                                                class="hover:text-brand-400 line-clamp-1">Everest 3 High
                                                                Passes Trek - 20 Days</a></li>
                                                        <li><a href="trip-list.php"
                                                                class="hover:text-brand-400 line-clamp-1">Everest Base
                                                                Camp with Lobuche Peak Climbing - 19 Days</a></li>
                                                        <li><a href="trip-list.php"
                                                                class="hover:text-brand-400 line-clamp-1">Everest Base
                                                                Camp Luxury Trek - 15 Days</a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <!--  -->

                                            <!--  -->
                                            <!-- Slide 2 -->
                                            <div class="swiper-slide">
                                                <div class="space-y-3">
                                                    <a class="item group transition-all duration-500 hover:-translate-y-2"
                                                        href="trip-list.php">
                                                        <figure
                                                            class="relative overflow-hidden rounded-2xl h-[265px] image-anime">
                                                            <img data-src="assets/trip/2.webp"
                                                                src="assets/default.jpg" loading="lazy"
                                                                alt="Manaslu Region"
                                                                class="lazy-img object-cover w-full h-full absolute inset-0 transition-transform duration-700 group-hover:scale-110" />
                                                            <span
                                                                class="absolute top-3 right-3 bg-white text-brand-500 text-xs font-semibold px-3 py-1 rounded-full shadow-md z-10">
                                                                8 Trips
                                                            </span>
                                                            <figcaption
                                                                class="absolute bottom-0 left-0 w-full p-4 figcaption-absolute">
                                                                <h3
                                                                    class="text-white text-base md:text-lg font-semibold">
                                                                    Manaslu Region</h3>
                                                            </figcaption>
                                                        </figure>
                                                    </a>
                                                    <ul class="grid grid-cols-1 gap-3 text-sm text-gray-600 px-4">
                                                        <li><a href="trip-list.php"
                                                                class="hover:text-brand-400 line-clamp-1">Manaslu
                                                                Circuit Trek - 14 Days</a></li>
                                                        <li><a href="trip-list.php"
                                                                class="hover:text-brand-400 line-clamp-1">Manaslu Tibet
                                                                View Trek - 17 Days</a></li>
                                                        <li><a href="trip-list.php"
                                                                class="hover:text-brand-400 line-clamp-1">Tsum Valley
                                                                Manaslu Trek With Thorong La Pass</a></li>
                                                        <li><a href="trip-list.php"
                                                                class="hover:text-brand-400 line-clamp-1">Tsum Valley
                                                                Trek - 14 Days</a></li>
                                                        <li><a href="trip-list.php"
                                                                class="hover:text-brand-400 line-clamp-1">Rupina La
                                                                Manaslu Trek - 22 Days</a></li>
                                                        <li><a href="trip-list.php"
                                                                class="hover:text-brand-400 line-clamp-1">Short Manaslu
                                                                Trek - 10 Days</a></li>
                                                        <li><a href="trip-list.php"
                                                                class="hover:text-brand-400 line-clamp-1">Tsum Valley
                                                                with Manaslu Circuit Trek - 20 Days</a></li>
                                                        <li><a href="trip-list.php"
                                                                class="hover:text-brand-400 line-clamp-1">Manaslu
                                                                Circuit Budget Trek - 12 Day</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!--  -->


                                            <!--  -->
                                            <!-- Slide 3 -->
                                            <div class="swiper-slide">
                                                <div class="space-y-3">
                                                    <a class="item group transition-all duration-500 hover:-translate-y-2"
                                                        href="trip-list.php">
                                                        <figure
                                                            class="relative overflow-hidden rounded-2xl h-[265px] image-anime">
                                                            <img data-src="assets/trip/3.webp"
                                                                src="assets/default.jpg" loading="lazy"
                                                                alt="Annapurna Region"
                                                                class="lazy-img object-cover w-full h-full absolute inset-0 transition-transform duration-700 group-hover:scale-110" />
                                                            <span
                                                                class="absolute top-3 right-3 bg-white text-brand-500 text-xs font-semibold px-3 py-1 rounded-full shadow-md z-10">
                                                                18 Trips
                                                            </span>
                                                            <figcaption
                                                                class="absolute bottom-0 left-0 w-full p-4 figcaption-absolute">
                                                                <h3
                                                                    class="text-white text-base md:text-lg font-semibold">
                                                                    Annapurna Region</h3>
                                                            </figcaption>
                                                        </figure>
                                                    </a>
                                                    <ul class="grid grid-cols-1 gap-3 text-sm text-gray-600 px-4">
                                                        <li><a href="trip-list.php"
                                                                class="hover:text-brand-400 line-clamp-1">Annapurna
                                                                Base
                                                                Camp with Poon Hill Trek – 14 days</a></li>
                                                        <li><a href="trip-list.php"
                                                                class="hover:text-brand-400 line-clamp-1">Annapurna
                                                                Balcony Trek - 9 Days</a></li>
                                                        <li><a href="trip-list.php"
                                                                class="hover:text-brand-400 line-clamp-1">Jomsom
                                                                Muktinath Trek – 9 days</a></li>
                                                        <li><a href="trip-list.php"
                                                                class="hover:text-brand-400 line-clamp-1">Annapurna
                                                                Circuit Trek – 20 Days</a></li>
                                                        <li><a href="trip-list.php"
                                                                class="hover:text-brand-400 line-clamp-1">Mardi Himal
                                                                Trek - 8 Days</a></li>
                                                        <li><a href="trip-list.php"
                                                                class="hover:text-brand-400 line-clamp-1">Ghorepani
                                                                Poonhill Trek - 7 Days</a></li>
                                                        <li><a href="trip-list.php"
                                                                class="hover:text-brand-400 line-clamp-1">Annapurna
                                                                Circuit with Tilicho Lake – 16 Days</a></li>
                                                        <li><a href="trip-list.php"
                                                                class="hover:text-brand-400 line-clamp-1">Short
                                                                Annapurna Circuit Trek – 12 Days</a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <!--  -->

                                            <!--  -->
                                            <!-- Slide 4 -->
                                            <div class="swiper-slide">
                                                <div class="space-y-3">
                                                    <a class="item group transition-all duration-500 hover:-translate-y-2"
                                                        href="trip-list.php">
                                                        <figure
                                                            class="relative overflow-hidden rounded-2xl h-[265px] image-anime">
                                                            <img data-src="assets/trip/4.webp"
                                                                src="assets/default.jpg" loading="lazy"
                                                                alt="Langtang Region"
                                                                class="lazy-img object-cover w-full h-full absolute inset-0 transition-transform duration-700 group-hover:scale-110" />
                                                            <span
                                                                class="absolute top-3 right-3 bg-white text-brand-500 text-xs font-semibold px-3 py-1 rounded-full shadow-md z-10">
                                                                7 Trips
                                                            </span>
                                                            <figcaption
                                                                class="absolute bottom-0 left-0 w-full p-4 figcaption-absolute">
                                                                <h3
                                                                    class="text-white text-base md:text-lg font-semibold">
                                                                    Langtang Region</h3>
                                                            </figcaption>
                                                        </figure>
                                                    </a>
                                                    <ul class="grid grid-cols-1 gap-3 text-sm text-gray-600 px-4">
                                                        <li><a href="trip-list.php"
                                                                class="hover:text-brand-400 line-clamp-1">Langtang
                                                                Gosaikunda Pass Trek - 15 Days</a></li>
                                                        <li><a href="trip-list.php"
                                                                class="hover:text-brand-400 line-clamp-1">Langtang
                                                                Valley Trek - 11 Days</a></li>
                                                        <li><a href="trip-list.php"
                                                                class="hover:text-brand-400 line-clamp-1">Helambu Trek
                                                                -
                                                                8 Days</a></li>
                                                        <li><a href="trip-list.php"
                                                                class="hover:text-brand-400 line-clamp-1">Tamang
                                                                Heritage Trail Trek - 9 Days</a></li>
                                                        <li><a href="trip-list.php"
                                                                class="hover:text-brand-400 line-clamp-1">Langtang
                                                                Valley with Ganja La Pass Trek</a></li>
                                                        <li><a href="trip-list.php"
                                                                class="hover:text-brand-400 line-clamp-1">Short
                                                                Langtang
                                                                Valley Trek - 7 Days</a></li>
                                                        <li><a href="trip-list.php"
                                                                class="hover:text-brand-400 line-clamp-1">Gosaikunda
                                                                Lake Trek - 5 Day</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!--  -->

                                            <!--  -->
                                            <!-- Slide 5 -->
                                            <div class="swiper-slide">
                                                <div class="space-y-3">
                                                    <a class="item group transition-all duration-500 hover:-translate-y-2"
                                                        href="trip-list.php">
                                                        <figure
                                                            class="relative overflow-hidden rounded-2xl h-[265px] image-anime">
                                                            <img data-src="assets/trip/5.webp"
                                                                src="assets/default.jpg" loading="lazy"
                                                                alt="Others Regions"
                                                                class="lazy-img object-cover w-full h-full absolute inset-0 transition-transform duration-700 group-hover:scale-110" />
                                                            <span
                                                                class="absolute top-3 right-3 bg-white text-brand-500 text-xs font-semibold px-3 py-1 rounded-full shadow-md z-10">
                                                                11 Trips
                                                            </span>
                                                            <figcaption
                                                                class="absolute bottom-0 left-0 w-full p-4 figcaption-absolute">
                                                                <h3
                                                                    class="text-white text-base md:text-lg font-semibold">
                                                                    Others Regions</h3>
                                                            </figcaption>
                                                        </figure>
                                                    </a>
                                                    <ul class="grid grid-cols-1 gap-3 text-sm text-gray-600 px-4">
                                                        <li><a href="trip-list.php"
                                                                class="hover:text-brand-400 line-clamp-1">Nepal
                                                                Photography Luxury Tour – 8 days</a></li>
                                                        <li><a href="trip-list.php"
                                                                class="hover:text-brand-400 line-clamp-1">Kanchenjunga
                                                                Base Camp Trek -22 Days</a></li>
                                                        <li><a href="trip-list.php"
                                                                class="hover:text-brand-400 line-clamp-1">Makalu Base
                                                                Camp Trekking- 16 Days</a></li>
                                                        <li><a href="trip-list.php"
                                                                class="hover:text-brand-400 line-clamp-1">Dhaulagiri
                                                                Circuit Trek- 17 Days</a></li>
                                                        <li><a href="trip-list.php"
                                                                class="hover:text-brand-400 line-clamp-1">Dolpo Kagmara
                                                                Pass Trek - 25 Days</a></li>
                                                        <li><a href="trip-list.php"
                                                                class="hover:text-brand-400 line-clamp-1">Dolpo
                                                                Phoksundo Trek - 17 Days</a></li>
                                                        <li><a href="trip-list.php"
                                                                class="hover:text-brand-400 line-clamp-1">Honey Hunting
                                                                Tour in Ludi (5 Days)</a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <!--  -->

                                            <!--  -->
                                            <!-- Slide 5 -->
                                            <div class="swiper-slide">
                                                <div class="space-y-3">
                                                    <a class="item group transition-all duration-500 hover:-translate-y-2"
                                                        href="trip-list.php">
                                                        <figure
                                                            class="relative overflow-hidden rounded-2xl h-[265px] image-anime">
                                                            <img data-src="assets/trip/5.webp"
                                                                src="assets/default.jpg" loading="lazy"
                                                                alt="Others Regions"
                                                                class="lazy-img object-cover w-full h-full absolute inset-0 transition-transform duration-700 group-hover:scale-110" />
                                                            <span
                                                                class="absolute top-3 right-3 bg-white text-brand-500 text-xs font-semibold px-3 py-1 rounded-full shadow-md z-10">
                                                                11 Trips
                                                            </span>
                                                            <figcaption
                                                                class="absolute bottom-0 left-0 w-full p-4 figcaption-absolute">
                                                                <h3
                                                                    class="text-white text-base md:text-lg font-semibold">
                                                                    Others Regions</h3>
                                                            </figcaption>
                                                        </figure>
                                                    </a>
                                                    <ul class="grid grid-cols-1 gap-3 text-sm text-gray-600 px-4">
                                                        <li><a href="trip-list.php"
                                                                class="hover:text-brand-400 line-clamp-1">Nepal
                                                                Photography Luxury Tour – 8 days</a></li>
                                                        <li><a href="trip-list.php"
                                                                class="hover:text-brand-400 line-clamp-1">Kanchenjunga
                                                                Base Camp Trek -22 Days</a></li>
                                                        <li><a href="trip-list.php"
                                                                class="hover:text-brand-400 line-clamp-1">Makalu Base
                                                                Camp Trekking- 16 Days</a></li>
                                                        <li><a href="trip-list.php"
                                                                class="hover:text-brand-400 line-clamp-1">Dhaulagiri
                                                                Circuit Trek- 17 Days</a></li>
                                                        <li><a href="trip-list.php"
                                                                class="hover:text-brand-400 line-clamp-1">Dolpo Kagmara
                                                                Pass Trek - 25 Days</a></li>
                                                        <li><a href="trip-list.php"
                                                                class="hover:text-brand-400 line-clamp-1">Dolpo
                                                                Phoksundo Trek - 17 Days</a></li>
                                                        <li><a href="trip-list.php"
                                                                class="hover:text-brand-400 line-clamp-1">Honey Hunting
                                                                Tour in Ludi (5 Days)</a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <!--  -->

                                            <!--  -->
                                            <!-- Slide 7 -->
                                            <div class="swiper-slide">
                                                <div class="space-y-3">
                                                    <a class="item group transition-all duration-500 hover:-translate-y-2"
                                                        href="trip-list.php">
                                                        <figure
                                                            class="relative overflow-hidden rounded-2xl h-[265px] image-anime">
                                                            <img data-src="assets/trip/7.webp"
                                                                src="assets/default.jpg" loading="lazy"
                                                                alt="Ganesh Himal Region"
                                                                class="lazy-img object-cover w-full h-full absolute inset-0 transition-transform duration-700 group-hover:scale-110" />
                                                            <span
                                                                class="absolute top-3 right-3 bg-white text-brand-500 text-xs font-semibold px-3 py-1 rounded-full shadow-md z-10">
                                                                1 Trip
                                                            </span>
                                                            <figcaption
                                                                class="absolute bottom-0 left-0 w-full p-4 figcaption-absolute">
                                                                <h3
                                                                    class="text-white text-base md:text-lg font-semibold">
                                                                    Ganesh Himal Region</h3>
                                                            </figcaption>
                                                        </figure>
                                                    </a>
                                                    <ul class="grid grid-cols-1 gap-3 text-sm text-gray-600 px-4">
                                                        <li><a href="trip-list.php"
                                                                class="hover:text-brand-400 line-clamp-1">Ganesh Himal
                                                                Singla Pass and Home Stay Local Trekking - 14 Days</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!--  -->



                                        </div>
                                        <!-- Button Container -->
                                        <div
                                            class="flex items-center justify-center gap-2 py-4 pb-0 z-30 w-full pointer-events-none mt-4  border-t border-gray-200 pt-4">
                                            <button
                                                class="prevBtn shadow-md w-10 h-10 flex items-center justify-center rounded-full bg-brand-500 text-white hover:bg-brand-400 hover:text-white pointer-events-auto shadow-lg">
                                                <i class="fa fa-chevron-left text-sm"></i>
                                            </button>
                                            <button
                                                class="nextBtn shadow-md w-10 h-10 flex items-center justify-center rounded-full bg-brand-500 text-white hover:bg-brand-400 hover:text-white pointer-events-auto shadow-lg">
                                                <i class="fa fa-chevron-right text-sm"></i>
                                            </button>
                                        </div>

                                    </div>
                                </section>
                            </div>
                    </li>
                    <!-- Mega Menu Activities -->
                    <li>
                        <button data-dropdown-toggle="activities-menu" data-dropdown-delay="1"
                            data-dropdown-trigger="hover" data-dropdown-placement="bottom"
                            data-dropdown-offset-distance="0" data-dropdown-offset-skidding="0"
                            class="flex items-center gap-1 hover:text-brand-400  py-8 px-2 rounded-xl"> Activities <svg
                                class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m19 9-7 7-7-7" />
                            </svg>
                        </button>
                        <!-- Mega Menu Dropdown -->
                        <div id="activities-menu"
                            class="hidden w-full bg-gray-50 border border-gray-100 rounded-b-3xl shadow-sm text-gray-900 max-h-[80vh] overflow-y-auto">
                            <section class="py-4 px-8">

                                <div class="activity swiper relative">
                                    <div class="swiper-wrapper">
                                        <!-- Slide 1 -->
                                        <div class="swiper-slide">
                                            <a class="item group transition-all duration-500 hover:-translate-y-2"
                                                href="trip-details.php">
                                                <figure
                                                    class="relative overflow-hidden rounded-2xl h-[265px] image-anime">
                                                    <img data-src="assets/trip/1.webp" src="assets/default.jpg"
                                                        loading="lazy" alt="Everest Base Camp Trek"
                                                        class="lazy-img object-cover w-full h-full absolute inset-0 transition-transform duration-700 group-hover:scale-110" />
                                                    <!-- Badge -->
                                                    <span
                                                        class="absolute top-3 right-3 bg-white text-brand-500 text-xs font-semibold px-3 py-1 rounded-full shadow-md z-10">5
                                                        Trips</span>
                                                    <!-- Caption -->
                                                    <figcaption
                                                        class="absolute bottom-0 left-0 w-full p-4 figcaption-absolute">
                                                        <h3 class="text-white text-base md:text-lg font-semibold">
                                                            Luxury
                                                            Tours in Nepal</h3>
                                                    </figcaption>
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- Slide 2 -->
                                        <div class="swiper-slide">
                                            <a class="item group transition-all duration-500 hover:-translate-y-2"
                                                href="trip-details.php">
                                                <figure
                                                    class="relative overflow-hidden rounded-2xl h-[265px]  image-anime">
                                                    <div class="block ">
                                                        <img data-src="assets/trip/2.webp" src="assets/default.jpg"
                                                            loading="lazy" alt="Everest Base Camp Trek"
                                                            class="lazy-img object-cover w-full h-full absolute inset-0 transition-transform duration-700 group-hover:scale-110">
                                                    </div>
                                                    <!-- Top Badge Counter -->
                                                    <span
                                                        class="absolute top-3 right-3 bg-white  text-brand-500 text-xs font-semibold px-3 py-1 rounded-full shadow-md z-10">5
                                                        Trips</span>
                                                    <!-- Absolute Title -->
                                                    <figcaption
                                                        class="absolute bottom-0 left-0 w-full p-4 figcaption-absolute">
                                                        <h3 class="text-white text-base md:text-lg font-semibold">
                                                            Day
                                                            Trips in Nepal</h3>
                                                    </figcaption>
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- Slide 3 -->
                                        <div class="swiper-slide">
                                            <a class="item group transition-all duration-500 hover:-translate-y-2"
                                                href="trip-details.php">
                                                <figure
                                                    class="relative overflow-hidden rounded-2xl h-[265px]  image-anime">
                                                    <div class="block ">
                                                        <img data-src="assets/trip/3.webp" src="assets/default.jpg"
                                                            loading="lazy" alt="Everest Base Camp Trek"
                                                            class="lazy-img object-cover w-full h-full absolute inset-0 transition-transform duration-700 group-hover:scale-110">
                                                    </div>
                                                    <!-- Top Badge Counter -->
                                                    <span
                                                        class="absolute top-3 right-3 bg-white  text-brand-500 text-xs font-semibold px-3 py-1 rounded-full shadow-md z-10">5
                                                        Trips</span>
                                                    <!-- Absolute Title -->
                                                    <figcaption
                                                        class="absolute bottom-0 left-0 w-full p-4 figcaption-absolute">
                                                        <h3 class="text-white text-base md:text-lg font-semibold">
                                                            Cycling and Mountain Biking</h3>
                                                    </figcaption>
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- Slide 4 -->
                                        <div class="swiper-slide">
                                            <a class="item group transition-all duration-500 hover:-translate-y-2"
                                                href="trip-details.php">
                                                <figure
                                                    class="relative overflow-hidden rounded-2xl h-[265px]  image-anime">
                                                    <div class="block ">
                                                        <img data-src="assets/trip/9.webp" src="assets/default.jpg"
                                                            loading="lazy" alt="Annapurna Circuit Trek"
                                                            class="lazy-img object-cover w-full h-full absolute inset-0 transition-transform duration-700 group-hover:scale-110">
                                                    </div>
                                                    <span
                                                        class="absolute top-3 right-3 bg-white text-brand-500 text-xs font-semibold px-3 py-1 rounded-full shadow-md z-10">7
                                                        Trips</span>
                                                    <figcaption
                                                        class="absolute bottom-0 left-0 w-full p-4 figcaption-absolute">
                                                        <h3 class="text-white text-base md:text-lg font-semibold">
                                                            Annapurna Luxury Trek</h3>
                                                    </figcaption>
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- Slide 5 -->
                                        <div class="swiper-slide">
                                            <a class="item group transition-all duration-500 hover:-translate-y-2"
                                                href="trip-details.php">
                                                <figure
                                                    class="relative overflow-hidden rounded-2xl h-[265px]  image-anime">
                                                    <div class="block ">
                                                        <img data-src="assets/trip/10.webp" src="assets/default.jpg"
                                                            loading="lazy" alt="Everest Helicopter Tour"
                                                            class="lazy-img object-cover w-full h-full absolute inset-0 transition-transform duration-700 group-hover:scale-110">
                                                    </div>
                                                    <span
                                                        class="absolute top-3 right-3 bg-white text-brand-500 text-xs font-semibold px-3 py-1 rounded-full shadow-md z-10">3
                                                        Trips</span>
                                                    <figcaption
                                                        class="absolute bottom-0 left-0 w-full p-4 figcaption-absolute">
                                                        <h3 class="text-white text-base md:text-lg font-semibold">
                                                            Everest Helicopter Tour</h3>
                                                    </figcaption>
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- Slide 6 -->
                                        <div class="swiper-slide">
                                            <a class="item group transition-all duration-500 hover:-translate-y-2"
                                                href="trip-details.php">
                                                <figure
                                                    class="relative overflow-hidden rounded-2xl h-[265px]  image-anime">
                                                    <div class="block ">
                                                        <img data-src="assets/trip/11.webp" src="assets/default.jpg"
                                                            loading="lazy" alt="Pokhara Luxury Retreat"
                                                            class="lazy-img object-cover w-full h-full absolute inset-0 transition-transform duration-700 group-hover:scale-110">
                                                    </div>
                                                    <span
                                                        class="absolute top-3 right-3 bg-white text-brand-500 text-xs font-semibold px-3 py-1 rounded-full shadow-md z-10">4
                                                        Trips</span>
                                                    <figcaption
                                                        class="absolute bottom-0 left-0 w-full p-4 figcaption-absolute">
                                                        <h3 class="text-white text-base md:text-lg font-semibold">
                                                            Pokhara Luxury Retreat</h3>
                                                    </figcaption>
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- Slide 7 -->
                                        <div class="swiper-slide">
                                            <a class="item group transition-all duration-500 hover:-translate-y-2"
                                                href="trip-details.php">
                                                <figure
                                                    class="relative overflow-hidden rounded-2xl h-[265px]  image-anime">
                                                    <div class="block ">
                                                        <img data-src="assets/trip/12.webp" src="assets/default.jpg"
                                                            loading="lazy" alt="Chitwan Jungle Safari"
                                                            class="lazy-img object-cover w-full h-full absolute inset-0 transition-transform duration-700 group-hover:scale-110">
                                                    </div>
                                                    <span
                                                        class="absolute top-3 right-3 bg-white text-brand-500 text-xs font-semibold px-3 py-1 rounded-full shadow-md z-10">6
                                                        Trips</span>
                                                    <figcaption
                                                        class="absolute bottom-0 left-0 w-full p-4 figcaption-absolute">
                                                        <h3 class="text-white text-base md:text-lg font-semibold">
                                                            Chitwan Jungle Safari</h3>
                                                    </figcaption>
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- Slide 8 -->
                                        <div class="swiper-slide">
                                            <a class="item group transition-all duration-500 hover:-translate-y-2"
                                                href="trip-details.php">
                                                <figure
                                                    class="relative overflow-hidden rounded-2xl h-[265px]  image-anime">
                                                    <div class="block ">
                                                        <img data-src="assets/trip/13.webp" src="assets/default.jpg"
                                                            loading="lazy" alt="Luxury Yoga Retreat Nepal"
                                                            class="lazy-img object-cover w-full h-full absolute inset-0 transition-transform duration-700 group-hover:scale-110">
                                                    </div>
                                                    <span
                                                        class="absolute top-3 right-3 bg-white text-brand-500 text-xs font-semibold px-3 py-1 rounded-full shadow-md z-10">2
                                                        Trips</span>
                                                    <figcaption
                                                        class="absolute bottom-0 left-0 w-full p-4 figcaption-absolute">
                                                        <h3 class="text-white text-base md:text-lg font-semibold">
                                                            Luxury
                                                            Yoga Retreat</h3>
                                                    </figcaption>
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- Slide 9 -->
                                        <div class="swiper-slide">
                                            <a class="item group transition-all duration-500 hover:-translate-y-2"
                                                href="trip-details.php">
                                                <figure
                                                    class="relative overflow-hidden rounded-2xl h-[265px]  image-anime">
                                                    <div class="block ">
                                                        <img data-src="assets/trip/14.webp" src="assets/default.jpg"
                                                            loading="lazy" alt="Luxury Rafting Adventure"
                                                            class="lazy-img object-cover w-full h-full absolute inset-0 transition-transform duration-700 group-hover:scale-110">
                                                    </div>
                                                    <span
                                                        class="absolute top-3 right-3 bg-white text-brand-500 text-xs font-semibold px-3 py-1 rounded-full shadow-md z-10">5
                                                        Trips</span>
                                                    <figcaption
                                                        class="absolute bottom-0 left-0 w-full p-4 figcaption-absolute">
                                                        <h3 class="text-white text-base md:text-lg font-semibold">
                                                            Luxury
                                                            Rafting Adventure</h3>
                                                    </figcaption>
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- Slide 10 -->
                                        <div class="swiper-slide">
                                            <a class="item group transition-all duration-500 hover:-translate-y-2"
                                                href="trip-details.php">
                                                <figure
                                                    class="relative overflow-hidden rounded-2xl h-[265px]  image-anime">
                                                    <div class="block ">
                                                        <img data-src="assets/trip/15.webp" src="assets/default.jpg"
                                                            loading="lazy" alt="Luxury Cultural Tours"
                                                            class="lazy-img object-cover w-full h-full absolute inset-0 transition-transform duration-700 group-hover:scale-110">
                                                    </div>
                                                    <span
                                                        class="absolute top-3 right-3 bg-white text-brand-500 text-xs font-semibold px-3 py-1 rounded-full shadow-md z-10">8
                                                        Trips</span>
                                                    <figcaption
                                                        class="absolute bottom-0 left-0 w-full p-4 figcaption-absolute">
                                                        <h3 class="text-white text-base md:text-lg font-semibold">
                                                            Luxury
                                                            Cultural Tours</h3>
                                                    </figcaption>
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- Slide 11 -->
                                        <div class="swiper-slide">
                                            <a class="item group transition-all duration-500 hover:-translate-y-2"
                                                href="trip-details.php">
                                                <figure
                                                    class="relative overflow-hidden rounded-2xl h-[265px]  image-anime">
                                                    <div class="block ">
                                                        <img data-src="assets/trip/16.webp" src="assets/default.jpg"
                                                            loading="lazy" alt="Himalayan Scenic Flight"
                                                            class="lazy-img object-cover w-full h-full absolute inset-0 transition-transform duration-700 group-hover:scale-110">
                                                    </div>
                                                    <span
                                                        class="absolute top-3 right-3 bg-white text-brand-500 text-xs font-semibold px-3 py-1 rounded-full shadow-md z-10">3
                                                        Trips</span>
                                                    <figcaption
                                                        class="absolute bottom-0 left-0 w-full p-4 figcaption-absolute">
                                                        <h3 class="text-white text-base md:text-lg font-semibold">
                                                            Himalayan Scenic Flight</h3>
                                                    </figcaption>
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- Slide 12 -->
                                        <div class="swiper-slide">
                                            <a class="item group transition-all duration-500 hover:-translate-y-2"
                                                href="trip-details.php">
                                                <figure
                                                    class="relative overflow-hidden rounded-2xl h-[265px]  image-anime">
                                                    <div class="block ">
                                                        <img data-src="assets/trip/17.webp" src="assets/default.jpg"
                                                            loading="lazy" alt="Luxury Mountain Lodge Stay"
                                                            class="lazy-img object-cover w-full h-full absolute inset-0 transition-transform duration-700 group-hover:scale-110">
                                                    </div>
                                                    <span
                                                        class="absolute top-3 right-3 bg-white text-brand-500 text-xs font-semibold px-3 py-1 rounded-full shadow-md z-10">6
                                                        Trips</span>
                                                    <figcaption
                                                        class="absolute bottom-0 left-0 w-full p-4 figcaption-absolute">
                                                        <h3 class="text-white text-base md:text-lg font-semibold">
                                                            Luxury
                                                            Mountain Lodge Stay</h3>
                                                    </figcaption>
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Button Container -->
                                    <div
                                        class="flex items-center justify-center gap-2 py-4 pb-0 z-30 w-full pointer-events-none mt-4  border-t border-gray-200 pt-4">
                                        <button
                                            class="prevBtn shadow-md w-10 h-10 flex items-center justify-center rounded-full bg-brand-500 text-white hover:bg-brand-400 hover:text-white pointer-events-auto shadow-lg">
                                            <i class="fa fa-chevron-left text-sm"></i>
                                        </button>
                                        <button
                                            class="nextBtn shadow-md w-10 h-10 flex items-center justify-center rounded-full bg-brand-500 text-white hover:bg-brand-400 hover:text-white pointer-events-auto shadow-lg">
                                            <i class="fa fa-chevron-right text-sm"></i>
                                        </button>
                                    </div>
                                </div>

                            </section>
                        </div>
                    </li>
                    <li class="relative group">
                        <button data-dropdown-toggle="TravelAdvice" data-dropdown-delay="1"
                            data-dropdown-trigger="hover" data-dropdown-placement="bottom"
                            data-dropdown-offset-distance="0" data-dropdown-offset-skidding="0"
                            class="flex items-center hover:text-brand-400 py-8 px-2 rounded-xl ">Travel Advice <svg
                                class="w-4 h-4 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 9-7 7-7-7" />
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="TravelAdvice"
                            class="z-50 hidden bg-gray-50 border border-gray-100 rounded-b-3xl shadow-sm  min-w-48 text-gray-900">
                            <ul class="p-2  text-sm text-gray-600" aria-labelledby="multiLevelDropdownButton">
                                <li>
                                    <a href="travel-insurance.php"
                                        class="inline-flex items-center w-full p-2  hover:text-brand-400 rounded-lg">
                                        Travel Insurance</a>
                                </li>
                                <li>
                                    <a href="nepal-visa-information.php"
                                        class="inline-flex items-center w-full p-2  hover:text-brand-400 rounded-lg">
                                        Nepal Visa Information</a>
                                </li>
                                <li>
                                    <a href="best-trekking-season.php"
                                        class="inline-flex items-center w-full p-2  hover:text-brand-400 rounded-lg">Best
                                        Trekking Season</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="relative group">
                        <button data-dropdown-toggle="AboutUs" data-dropdown-delay="1" data-dropdown-trigger="hover"
                            data-dropdown-placement="bottom" data-dropdown-offset-distance="0"
                            data-dropdown-offset-skidding="20"
                            class="flex items-center hover:text-brand-400  py-8 px-2 rounded-xl "> Company <svg
                                class="w-4 h-4 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 9-7 7-7-7" />
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="AboutUs"
                            class="z-50 hidden bg-gray-50 border border-gray-100 rounded-b-3xl shadow-sm  min-w-64 text-gray-900">
                            <ul class=" p-2  text-sm text-gray-600" aria-labelledby="multiLevelDropdownButton">
                                <li>
                                    <a href="about-us.php"
                                        class="inline-flex items-center w-full p-2  hover:text-brand-400 rounded-lg">
                                        About Us</a>
                                </li>
                                <li>
                                    <a href="team.php"
                                        class="inline-flex items-center w-full p-2  hover:text-brand-400 rounded-lg">
                                        Our Team</a>
                                </li>
                                <li>
                                    <a href="legal-documents.php"
                                        class="inline-flex items-center w-full p-2  hover:text-brand-400 rounded-lg">
                                        Legal Documents</a>
                                </li>
                                <li>
                                    <a href="reviews.php"
                                        class="inline-flex items-center w-full p-2  hover:text-brand-400 rounded-lg">
                                        Read Reviews</a>
                                </li>
                                <li>
                                    <a href="blog.php"
                                        class="inline-flex items-center w-full p-2  hover:text-brand-400 rounded-lg">
                                        Blog</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="contact-us.php" class="hover:text-brand-400 ">Contact Us</a>
                    </li>
                </ul>
            </div>
            <!-- end of Desktop Menu -->
            <div class="flex items-center gap-2">
                <!-- Search Button -->
                <button id="search-btn" type="button" data-modal-target="searchModal"
                    data-modal-toggle="searchModal"
                    class="w-10 h-10 rounded-full text-brand-600   bg-white    hover:bg-white/20  transition-all duration-300 ">
                    <i class="fa fa-search"></i>
                </button>
                <!-- CTA -->
                <a href="plan-your-trip.php"
                    class="hidden sm:inline-flex bg-brand-500 hover:bg-brand-400 text-white font-medium rounded-full text-sm px-5 py-3  shadow-sm">Plan
                    Your Trip</a>
                <!-- Mobile Hamburger -->
                <button
                    class="lg:hidden inline-flex items-center justify-center w-10 h-10 rounded-lg hover:text-white hover:bg-brand-500 aria-selected:bg-brand-500 aria-selected:text-white aria-selected:ring-1 aria-selected:ring-brand-500"
                    type="button" data-drawer-target="drawer-disable-body-scrolling"
                    data-drawer-show="drawer-disable-body-scrolling" data-drawer-body-scrolling="false"
                    aria-controls="drawer-disable-body-scrolling" data-drawer-placement="right">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </nav>
    <!-- Mobile Drawer -->
    <div id="drawer-disable-body-scrolling"
        class="fixed top-0 right-0 z-50 h-screen p-4 overflow-y-auto -transform translate-x-full bg-white w-full sm:w-full border-l border-gray-200"
        tabindex="-1" aria-labelledby="drawer-disable-body-scrolling-label">
        <!-- Drawer Header -->
        <div class="flex  h-[73px] items-center justify-between pb-4 border-b border-gray-200">
            <a href="{{url('/')}}" class="flex items-center">
                <img src="{{ asset('theme-assets/assets/logo.png')}}" alt="Logos" class="h-10" id="mobile-logo" />
            </a>
            <button type="button" data-drawer-hide="drawer-disable-body-scrolling"
                aria-controls="drawer-disable-body-scrolling"
                class="bg-transparent hover:bg-gray-100 rounded-lg w-9 h-9 flex items-center justify-center ">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
                <span class="sr-only">Close menu</span>
            </button>
        </div>
        <!-- Drawer Body -->
        <div class="py-5">
            <ul class="space-y-2 font-medium text-base">
                <!-- Home -->
                <li>
                    <a href="{{url('/')}}"
                        class="flex items-center px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400 ">Home</a>
                </li>
                <!-- Trekking -->
                <li>
                    <button type="button"
                        class="flex items-center justify-between w-full px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400"
                        aria-controls="m-trekkings" data-collapse-toggle="m-trekkings">
                        <span>Trekking</span>
                        <!-- Chevron icon -->
                        <i class="fa-solid fa-chevron-down transition-transform duration-300"></i>
                    </button>
                    <ul id="m-trekkings" class="hidden pl-6 space-y-1 text-sm transition-all duration-50">

                        <!-- Everest Region -->
                        <li>
                            <button type="button"
                                class="flex items-center justify-between w-full px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400"
                                aria-controls="everest-region" data-collapse-toggle="everest-region">
                                <span>Everest Region</span>
                                <i class="fa-solid fa-chevron-down transition-transform duration-300"></i>
                            </button>
                            <ul id="everest-region" class="hidden pl-6 space-y-1 text-sm transition-all duration-500">
                                <li><a href="trip-details.php"
                                        class="block px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400">Everest
                                        Base Camp Trek - 14 Days</a></li>
                                <li><a href="trip-details.php"
                                        class="block px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400">Everest
                                        Base Camp with Island Peak Climbing - 19 Days</a></li>
                                <li><a href="trip-details.php"
                                        class="block px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400">Everest
                                        Base Camp with Gokyo Lake (Cho-La Pass Trek) - 16 Days</a></li>
                                <li><a href="trip-details.php"
                                        class="block px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400">Gokyo
                                        Lake with Renjo La Pass Trek - 13 Days</a></li>
                                <li><a href="trip-details.php"
                                        class="block px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400">Everest
                                        3 High Passes Trek - 20 Days</a></li>
                                <li><a href="trip-details.php"
                                        class="block px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400">Everest
                                        Base Camp with Lobuche Peak Climbing - 19 Days</a></li>
                                <li><a href="trip-details.php"
                                        class="block px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400">Everest
                                        Base Camp Luxury Trek - 15 Days</a></li>
                                <li><a href="trip-details.php"
                                        class="block px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400">Jiri
                                        to EBC Trek- 24 Days</a></li>
                                <li><a href="trip-details.php"
                                        class="block px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400">Amphu
                                        Lapcha Pass Trek - 17 Days</a></li>
                                <li><a href="trip-details.php"
                                        class="block px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400">Pikey
                                        Peak Trek- 8 Days</a></li>
                                <li><a href="trip-details.php"
                                        class="block px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400">Everest
                                        View Trek - 7 Days</a></li>
                                <li><a href="trip-details.php"
                                        class="block px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400">Everest
                                        Base Camp Trek By Road - 16 Days</a></li>
                            </ul>
                        </li>

                        <!-- Manaslu Region -->
                        <li>
                            <button type="button"
                                class="flex items-center justify-between w-full px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400"
                                aria-controls="manaslu-region" data-collapse-toggle="manaslu-region">
                                <span>Manaslu Region</span>
                                <i class="fa-solid fa-chevron-down transition-transform duration-300"></i>
                            </button>
                            <ul id="manaslu-region" class="hidden pl-6 space-y-1 text-sm transition-all duration-500">
                                <li><a href="trip-details.php"
                                        class="block px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400">Manaslu
                                        Circuit Trek - 14 Days</a></li>
                                <li><a href="trip-details.php"
                                        class="block px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400">Manaslu
                                        Tibet View Trek - 17 Days</a></li>
                                <li><a href="trip-details.php"
                                        class="block px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400">Tsum
                                        Valley Manaslu Trek With Thorong La Pass</a></li>
                                <li><a href="trip-details.php"
                                        class="block px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400">Tsum
                                        Valley Trek - 14 Days</a></li>
                                <li><a href="trip-details.php"
                                        class="block px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400">Rupina
                                        La Manaslu Trek - 22 Days</a></li>
                                <li><a href="trip-details.php"
                                        class="block px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400">Short
                                        Manaslu Trek - 10 Days</a></li>
                                <li><a href="trip-details.php"
                                        class="block px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400">Tsum
                                        Valley with Manaslu Circuit Trek - 20 Days</a></li>
                                <li><a href="trip-details.php"
                                        class="block px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400">Manaslu
                                        Circuit Budget Trek - 12 Day</a></li>
                            </ul>
                        </li>

                        <!-- Annapurna Region -->
                        <li>
                            <button type="button"
                                class="flex items-center justify-between w-full px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400"
                                aria-controls="annapurna-region" data-collapse-toggle="annapurna-region">
                                <span>Annapurna Region</span>
                                <i class="fa-solid fa-chevron-down transition-transform duration-300"></i>
                            </button>
                            <ul id="annapurna-region"
                                class="hidden pl-6 space-y-1 text-sm transition-all duration-500">
                                <li><a href="trip-details.php"
                                        class="block px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400">Annapurna
                                        Base Camp with Poon Hill Trek – 14 Days</a></li>
                                <li><a href="trip-details.php"
                                        class="block px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400">Annapurna
                                        Balcony Trek - 9 Days</a></li>
                                <li><a href="trip-details.php"
                                        class="block px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400">Jomsom
                                        Muktinath Trek – 9 Days</a></li>
                                <li><a href="trip-details.php"
                                        class="block px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400">Annapurna
                                        Circuit Trek – 20 Days</a></li>
                                <li><a href="trip-details.php"
                                        class="block px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400">Mardi
                                        Himal Trek - 8 Days</a></li>
                                <li><a href="trip-details.php"
                                        class="block px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400">Ghorepani
                                        Poonhill Trek - 7 Days</a></li>
                                <li><a href="trip-details.php"
                                        class="block px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400">Annapurna
                                        Circuit with Tilicho Lake – 16 Days</a></li>
                                <li><a href="trip-details.php"
                                        class="block px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400">Short
                                        Annapurna Circuit Trek – 12 Days</a></li>
                                <li><a href="trip-details.php"
                                        class="block px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400">Dhampus
                                        Sarangkot Trek- 1 night, 2 days</a></li>
                                <li><a href="trip-details.php"
                                        class="block px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400">Mohare
                                        Danda, Poonhill with Khayer Lake Trek - 15 Days</a></li>
                                <li><a href="trip-details.php"
                                        class="block px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400">Nar
                                        Phu Valley Trek - 12 Days</a></li>
                                <li><a href="trip-details.php"
                                        class="block px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400">Sikles
                                        Trek - 8 Days</a></li>
                                <li><a href="trip-details.php"
                                        class="block px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400">Annapurna
                                        Circuit Trek Thorong Peak Climbing - 18 Days</a></li>
                                <li><a href="trip-details.php"
                                        class="block px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400">Annapurna
                                        Base Camp Short Trek - 7 Days</a></li>
                                <li><a href="trip-details.php"
                                        class="block px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400">Poonhill
                                        Trek - 4 Days</a></li>
                                <li><a href="trip-details.php"
                                        class="block px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400">Khopra
                                        Danda Trek - 6 Days</a></li>
                                <li><a href="trip-details.php"
                                        class="block px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400">North
                                        Annapurna Base Camp Trek - 7 Days</a></li>
                                <li><a href="trip-details.php"
                                        class="block px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400">Mardi
                                        Himal Trek - 5 Days</a></li>
                            </ul>
                        </li>

                        <!-- Langtang Region -->
                        <li>
                            <button type="button"
                                class="flex items-center justify-between w-full px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400"
                                aria-controls="langtang-region" data-collapse-toggle="langtang-region">
                                <span>Langtang Region</span>
                                <i class="fa-solid fa-chevron-down transition-transform duration-300"></i>
                            </button>
                            <ul id="langtang-region"
                                class="hidden pl-6 space-y-1 text-sm transition-all duration-500">
                                <li><a href="trip-details.php"
                                        class="block px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400">Langtang
                                        Gosaikunda Pass Trek - 15 Days</a></li>
                                <li><a href="trip-details.php"
                                        class="block px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400">Langtang
                                        Valley Trek - 11 Days</a></li>
                                <li><a href="trip-details.php"
                                        class="block px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400">Helambu
                                        Trek - 8 Days</a></li>
                                <li><a href="trip-details.php"
                                        class="block px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400">Tamang
                                        Heritage Trail Trek - 9 Days</a></li>
                                <li><a href="trip-details.php"
                                        class="block px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400">Langtang
                                        Valley with Ganja La Pass Trek</a></li>
                                <li><a href="trip-details.php"
                                        class="block px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400">Short
                                        Langtang Valley Trek - 7 Days</a></li>
                                <li><a href="trip-details.php"
                                        class="block px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400">Gosaikunda
                                        Lake Trek - 5 Day</a></li>
                            </ul>
                        </li>

                        <!-- Mustang Region -->
                        <li>
                            <button type="button"
                                class="flex items-center justify-between w-full px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400"
                                aria-controls="mustang-region" data-collapse-toggle="mustang-region">
                                <span>Mustang Region</span>
                                <i class="fa-solid fa-chevron-down transition-transform duration-300"></i>
                            </button>
                            <ul id="mustang-region" class="hidden pl-6 space-y-1 text-sm transition-all duration-500">
                                <li><a href="trip-details.php"
                                        class="block px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400">Upper
                                        Mustang Trekking -14 Days</a></li>
                            </ul>
                        </li>

                        <!-- Ganesh Himal Region -->
                        <li>
                            <button type="button"
                                class="flex items-center justify-between w-full px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400"
                                aria-controls="ganesh-himal-region" data-collapse-toggle="ganesh-himal-region">
                                <span>Ganesh Himal Region</span>
                                <i class="fa-solid fa-chevron-down transition-transform duration-300"></i>
                            </button>
                            <ul id="ganesh-himal-region"
                                class="hidden pl-6 space-y-1 text-sm transition-all duration-500">
                                <li><a href="trip-details.php"
                                        class="block px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400">Ganesh
                                        Himal Singla Pass and Home Stay Local Trekking - 14 Days</a></li>
                            </ul>
                        </li>

                        <!-- Others Regions -->
                        <li>
                            <button type="button"
                                class="flex items-center justify-between w-full px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400"
                                aria-controls="others-region" data-collapse-toggle="others-region">
                                <span>Others Regions</span>
                                <i class="fa-solid fa-chevron-down transition-transform duration-300"></i>
                            </button>
                            <ul id="others-region" class="hidden pl-6 space-y-1 text-sm transition-all duration-500">
                                <li><a href="trip-details.php"
                                        class="block px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400">Nepal
                                        Photography Luxury Tour – 8 Days</a></li>
                                <li><a href="trip-details.php"
                                        class="block px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400">Kanchenjunga
                                        Base Camp Trek -22 Days</a></li>
                                <li><a href="trip-details.php"
                                        class="block px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400">Makalu
                                        Base Camp Trekking- 16 Days</a></li>
                                <li><a href="trip-details.php"
                                        class="block px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400">Dhaulagiri
                                        Circuit Trek- 21 Days</a></li>
                                <li><a href="trip-details.php"
                                        class="block px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400">Kanchenjunga
                                        Circuit Trek- 30 Days</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- activities -->
                <li>
                    <button type="button"
                        class="flex items-center justify-between w-full px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400 "
                        aria-controls="m-activities" data-collapse-toggle="m-activities">
                        <span>Activities</span>
                        <!-- Chevron icon -->
                        <i class="fa-solid fa-chevron-down transition-transform duration-300"></i>
                    </button>
                    <ul id="m-activities" class="hidden pl-6 space-y-1 text-sm transition-all duration-500">
                        <li>
                            <a href="trip-list.php"
                                class="block px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400">
                                Luxury Tours in Nepal
                            </a>
                        </li>
                        <li>
                            <a href="trip-list.php"
                                class="block px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400">
                                Day Trips in Nepal
                            </a>
                        </li>
                        <li>
                            <a href="trip-list.php"
                                class="block px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400">
                                Cycling and Mountain Biking
                            </a>
                        </li>
                        <li>
                            <a href="trip-list.php"
                                class="block px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400">
                                Annapurna Luxury Trek
                            </a>
                        </li>
                        <li>
                            <a href="trip-list.php"
                                class="block px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400">
                                Everest Helicopter Tour
                            </a>
                        </li>
                        <li>
                            <a href="trip-list.php"
                                class="block px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400">
                                Pokhara Luxury Retreat
                            </a>
                        </li>
                        <li>
                            <a href="trip-list.php"
                                class="block px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400">
                                Chitwan Jungle Safari
                            </a>
                        </li>
                        <li>
                            <a href="trip-list.php"
                                class="block px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400">
                                Luxury Yoga Retreat
                            </a>
                        </li>
                        <li>
                            <a href="trip-list.php"
                                class="block px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400">
                                Luxury Rafting Adventure
                            </a>
                        </li>
                        <li>
                            <a href="trip-list.php"
                                class="block px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400">
                                Luxury Cultural Tours
                            </a>
                        </li>
                        <li>
                            <a href="trip-list.php"
                                class="block px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400">
                                Himalayan Scenic Flight
                            </a>
                        </li>
                        <li>
                            <a href="trip-list.php"
                                class="block px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400">
                                Luxury Mountain Lodge Stay
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Travel Advice -->
                <li>
                    <button type="button"
                        class="flex items-center justify-between w-full px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400 "
                        aria-controls="m-Advice" data-collapse-toggle="m-Advice">
                        <span>Travel Advice</span>
                        <!-- Chevron icon -->
                        <i class="fa-solid fa-chevron-down transition-transform duration-300"></i>
                    </button>
                    <ul id="m-Advice" class="hidden pl-6 space-y-1 text-sm transition-all duration-500">
                        <li>
                            <a href="travel-insurance.php"
                                class="inline-flex items-center w-full p-2  hover:text-brand-400 rounded-lg">
                                Travel Insurance</a>
                        </li>
                        <li>
                            <a href="nepal-visa-information.php"
                                class="inline-flex items-center w-full p-2  hover:text-brand-400 rounded-lg">
                                Nepal Visa Information</a>
                        </li>
                        <li>
                            <a href="best-trekking-season.php"
                                class="inline-flex items-center w-full p-2  hover:text-brand-400 rounded-lg">Best
                                Trekking Season</a>
                        </li>
                </li>
            </ul>
            </li>
            <!-- About Us -->
            <li>
                <button type="button"
                    class="flex items-center justify-between w-full px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400 "
                    aria-controls="m-AboutUs" data-collapse-toggle="m-AboutUs">
                    <span>Company</span>
                    <!-- Chevron icon -->
                    <i class="fa-solid fa-chevron-down transition-transform duration-300"></i>
                </button>
                <ul id="m-AboutUs" class="hidden pl-6 space-y-1 text-sm transition-all duration-500">
                    <li>
                        <a href="about-us.php"
                            class="block px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400 ">About Us</a>
                    </li>
                    <li>
                        <a href="team.php"
                            class="block px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400 ">Our Team</a>
                    </li>
                    <li>
                        <a href="legal-documents.php"
                            class="block px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400 ">Legal
                            Documents</a>
                    </li>
                    <li>
                        <a href="reviews.php"
                            class="block px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400 ">Read
                            Reviews</a>
                    </li>
                    <li>
                        <a href="blog.php"
                            class="block px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400 ">Blog</a>
                    </li>
                </ul>
            </li>
            <!-- Contact -->
            <li>
                <a href="contact-us.php"
                    class="block px-4 py-2 rounded-lg hover:bg-gray-100 hover:text-brand-400 ">Contact Us</a>
            </li>
            </ul>
            <!-- CTA -->
            <div class="mt-6">
                <a href="plan-your-trip.php"
                    class="block w-full text-center bg-brand-400 hover:bg-brand-500 text-white font-medium rounded-full px-5 py-3  shadow-sm">
                    Plan Your Trip </a>
            </div>
        </div>
    </div>
    <!-- Search Modal -->
    <div id="searchModal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed bg-black/70 backdrop-blur-sm top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-2xl shadow-lg">
                <button type="button" data-modal-hide="searchModal"
                    class="absolute -top-12 right-0
      text-white bg-white/10 hover:bg-white/20
      backdrop-blur-md border border-white/20
      rounded-full w-10 h-10 flex items-center
      justify-center transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    <!-- Search Input -->
                    <form action="trip-list.php" method="GET">
                        <div class="relative">
                            <input type="text" name="q" placeholder="Search..."
                                class="w-full pr-28 pl-5 py-4 text-base border border-gray-200
      rounded-full focus:ring-1 focus:ring-brand-400
      focus:border-brand-400 outline-none"
                                required />
                            <button type="submit"
                                class="absolute right-2 top-2 bottom-2
      bg-brand-400 hover:bg-brand-500 text-white
      px-5 rounded-full text-sm transition">
                                Search </button>
                        </div>
                    </form>
                    <!-- Popular Searches -->
                    <div>
                        <p class="text-sm font-medium text-gray-500 mb-3">Popular Searches</p>
                        <div class="flex flex-wrap gap-2">
                            <a href="trip-list.php"
                                class="px-4 py-2 bg-gray-100 hover:bg-brand-100
              text-sm rounded-full transition">
                                Everest Expedition </a>
                            <a href="trip-list.php"
                                class="px-4 py-2 bg-gray-100 hover:bg-brand-100
              text-sm rounded-full transition">
                                Annapurna Trek </a>
                            <a href="trip-list.php"
                                class="px-4 py-2 bg-gray-100 hover:bg-brand-100
              text-sm rounded-full transition">
                                Mera Peak </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

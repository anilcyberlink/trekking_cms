@extends('themes.default.common.master')
@section('title', $setting->site_name)
@section('meta_keyword', $setting->meta_key)
@section('meta_description', $setting->meta_description)
@section('content')

    <!-- hero section -->
    <section class="relative h-[550px] lg:h-screen w-full overflow-hidden">

        <div class="hero h-full w-full relative">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide relative h-full w-full">
                    <!-- Background Image -->
                    <img data-src="{{ asset('theme-assets/assets/hero/1.webp') }}" decoding="async" fetchpriority="high"
                        src="{{ asset('theme-assets/assets/default.jpg') }}" loading="lazy"
                        class="lazy-img absolute inset-0 w-full h-full object-cover object-center" alt="Manaslu Base Camp">
                    <!-- Gradient Overlay -->
                    <div class="absolute inset-0 bg-black/50"></div>
                    <!-- Content inside container -->
                    <div class="absolute bottom-10 left-0 w-full px-4 sm:px-8 lg:px-44 py-8 sm:py-10 z-30">
                        <div
                            class="container mx-auto flex flex-col md:flex-row items-start md:items-center justify-between gap-6 text-left">
                            <div class="space-y-6">
                                <!-- Title & Description -->
                                <div class="flex-1 text-white max-w-xl">
                                    <h1
                                        class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight leading-tight drop-shadow-lg">
                                        Manaslu Base Camp </h1>
                                    <p class="mt-3 text-lg sm:text-xl font-normal text-white/90 drop-shadow-md"> Explore the
                                        majestic Manaslu region with breathtaking Himalayan views. </p>
                                </div>
                                <!-- CTA Button -->
                                <div class="flex-1 flex mt-4 md:mt-0 md:justify-start">
                                    <a href="trip-details.php"
                                        class="px-6 py-3 rounded-full text-white font-medium backdrop-blur-sm bg-white/10 border border-white/20 hover:bg-white/20 hover:backdrop-blur-md transition-all duration-300 shadow-xl">
                                        Explore Manaslu </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="swiper-slide relative h-full w-full">
                    <img data-src="{{ asset('theme-assets/assets/hero/2.webp') }}" decoding="async" fetchpriority="high"
                        src="{{ asset('theme-assets/assets/default.jpg') }}" loading="lazy"
                        class="lazy-img absolute inset-0 w-full h-full object-cover object-center" alt="Everest Base Camp">
                    <div class="absolute inset-0 bg-black/40"></div>
                    <div class="absolute bottom-10 left-0 w-full px-4 sm:px-8 lg:px-44 py-8 sm:py-10 z-30">
                        <div
                            class="container mx-auto flex flex-col md:flex-row items-start md:items-center justify-between gap-6 text-left">
                            <div class="space-y-6">
                                <!-- Title & Description -->
                                <div class="flex-1 text-white max-w-xl">
                                    <h1
                                        class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight leading-tight drop-shadow-lg">
                                        Everest Base Camp (EBC) </h1>
                                    <p class="mt-3 text-lg sm:text-xl font-normal text-white/90 drop-shadow-md"> Embark on
                                        the ultimate Himalayan adventure to the legendary Everest Base Camp. </p>
                                </div>
                                <!-- CTA Button -->
                                <div class="flex-1 flex mt-4 md:mt-0 md:justify-start">
                                    <a href="trip-details.php"
                                        class="px-6 py-3 rounded-full text-white font-medium backdrop-blur-sm bg-white/10 border border-white/20 hover:bg-white/20 hover:backdrop-blur-md transition-all duration-300 shadow-xl">
                                        Explore Everest </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Navigation buttons -->
            <div class="container relative">
                <div class="absolute bottom-10 right-0 px-3  flex items-center space-x-4 z-20">
                    <button id="custom-prev"
                        class="w-12 h-12 rounded-full text-white font-medium backdrop-blur-sm bg-white/10 border border-white/20 hover:bg-white/20 hover:backdrop-blur-md transition-all duration-300 shadow-xl">
                        <i class="fa fa-chevron-left text-sm"></i>
                    </button>
                    <button id="custom-next"
                        class="w-12 h-12 rounded-full text-white font-medium backdrop-blur-sm bg-white/10 border border-white/20 hover:bg-white/20 hover:backdrop-blur-md transition-all duration-300 shadow-xl">
                        <i class="fa fa-chevron-right text-sm"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Best Seller Trips -->
    <section class="py-20  relative">
        <div class="container">
            <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-6 mb-10">
                <!-- Left Content -->
                <div class="lg:w-2/3">
                    <h2 class="text-3xl md:text-4xl font-extrabold"> Best Selling <span
                            class="text-brand-500 italic">Packages</span>
                    </h2>
                    <p class="mt-2 md:mt-4 text-lg text-gray-600 max-w-3xl leading-relaxed"> Discover the beauty of Nepal
                        with
                        Treklaya — your trusted partner for exceptional treks and tours. From breathtaking Everest views to
                        rich cultural experiences, we deliver premium service and responsible travel. Start planning your
                        dream journey today. </p>
                </div>
                <!-- Right Actions -->
                <div class="flex items-center gap-6">
                    <!-- View All Button -->
                    <a href="trip-list.php"
                        class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-brand-500/30
              bg-brand-500/10 text-brand-600 text-sm font-medium
              hover:bg-brand-500 hover:text-white transition-all duration-300">
                        View All <span
                            class="flex items-center justify-center w-7 h-7 rounded-full bg-brand-500 text-white">
                            <i class="fa fa-arrow-right text-xs"></i>
                        </span>
                    </a>
                    <!-- Navigation Arrows -->
                    <div class="flex items-center bg-brand-500/10 border border-brand-500/20 rounded-full p-1">
                        <button
                            class="prevBtn w-9 h-9  flex items-center justify-center rounded-full bg-brand-500 text-white hover:bg-brand-600 hover:text-white transition-all duration-300">
                            <i class="fa fa-chevron-left text-sm"></i>
                        </button>
                        <div class="w-px h-5 bg-brand-500/30 mx-1"></div>
                        <button
                            class="nextBtn w-9 h-9  flex items-center justify-center rounded-full bg-brand-500 text-white hover:bg-brand-600 hover:text-white transition-all duration-300">
                            <i class="fa fa-chevron-right text-sm"></i>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Grid of Cards -->
            <!-- Swiper Container -->
            <div class="GridSlider swiper  ">
                <div class="swiper-wrapper  ">
                    <!-- Slide 1 -->
                    <div class="swiper-slide">
                        <a class="item group transition-all duration-500 hover:-translate-y-2" href="trip-details.php">
                            <figure class="relative overflow-hidden rounded-2xl h-[280px] image-anime">
                                <div class="block ">
                                    <img data-src="assets/trip/1.webp" src="assets/default.jpg" loading="lazy"
                                        alt="Everest Base Camp Trek"
                                        class="object-cover w-full h-full absolute inset-0 transition-transform duration-700 group-hover:scale-110">
                                </div>

                                <span
                                    class="absolute top-3 left-3 bg-brand-500 text-white text-xs font-semibold px-3 py-1 rounded-full shadow-md z-10">Best
                                    Seller</span>
                                <div
                                    class="absolute right-3 bottom-3 bg-white/95 backdrop-blur-lg px-4 py-2 rounded-xl shadow-lg z-10 text-right">
                                    <span
                                        class="md:font-normal font-bold text-gray-600 text-xxs md:text-md line-through">$1349</span>
                                    <span
                                        class="block md:font-bold font-extrabold  text-brand-500 text-sm  md:text-[1.125rem]">$1099</span>
                                </div>
                            </figure>
                            <figcaption class="pt-4 space-y-2">
                                <div class="flex items-center text-xs text-gray-700 font-medium">
                                    <i class="fa fa-star text-yellow-400 mr-1"></i>4.9 <span
                                        class="ml-1 text-gray-600">(1,547 reviews)</span>
                                </div>
                                <h3 class="text-base md:text-xl font-semibold group-hover:text-brand-500 transition">Everest
                                    Base Camp Trek</h3>
                                <div class="flex gap-4 text-xs text-gray-600">
                                    <span>
                                        <i class="fa fa-clock "></i> 14 Days </span>
                                </div>
                            </figcaption>
                        </a>
                    </div>
                    <!-- Slide 2 -->
                    <div class="swiper-slide">
                        <a class="item group transition-all duration-500 hover:-translate-y-2" href="trip-details.php">
                            <figure class="relative overflow-hidden rounded-2xl h-[280px] image-anime">
                                <div class="block ">
                                    <img data-src="assets/trip/2.webp" src="assets/default.jpg" loading="lazy"
                                        alt="Annapurna Base Camp Trek"
                                        class="lazy-img object-cover w-full h-full absolute inset-0 transition-transform duration-700 group-hover:scale-110">
                                </div>

                                <span
                                    class="absolute top-3 left-3 bg-brand-500 text-white text-xs font-semibold px-3 py-1 rounded-full shadow-md z-10">Popular</span>
                                <div
                                    class="absolute right-3 bottom-3 bg-white/95 backdrop-blur-lg px-4 py-2 rounded-xl shadow-lg z-10 text-right">
                                    <span
                                        class="md:font-normal font-bold text-gray-600 text-xxs md:text-md line-through">$1349</span>
                                    <span
                                        class="block md:font-bold font-extrabold  text-brand-500 text-sm  md:text-[1.125rem]">$1099</span>
                                </div>
                            </figure>
                            <figcaption class="pt-4 space-y-2">
                                <div class="flex items-center text-xs text-gray-500">
                                    <i class="fa fa-star text-yellow-400 mr-1"></i>4.8 <span
                                        class="ml-1 text-gray-400">(980
                                        reviews)</span>
                                </div>
                                <h3 class="text-base md:text-xl font-semibold group-hover:text-brand-500 transition">
                                    Annapurna Base Camp Trek</h3>
                                <div class="flex gap-4 text-xs text-gray-500">
                                    <span>
                                        <i class="fa fa-clock "></i> 12 Days </span>
                                </div>
                            </figcaption>
                        </a>
                    </div>
                    <!-- Slide 3 -->
                    <div class="swiper-slide">
                        <a class="item group transition-all duration-500 hover:-translate-y-2" href="trip-details.php">
                            <figure class="relative overflow-hidden rounded-2xl h-[280px] image-anime">
                                <div class="block ">
                                    <img data-src="assets/trip/3.webp" src="assets/default.jpg" loading="lazy"
                                        alt="Manaslu Circuit Trek"
                                        class="object-cover w-full h-full absolute inset-0 transition-transform duration-700 group-hover:scale-110">
                                </div>

                                <span
                                    class="absolute top-3 left-3 bg-brand-500 text-white text-xs font-semibold px-3 py-1 rounded-full shadow-md z-10">Adventure</span>
                                <div
                                    class="absolute right-3 bottom-3 bg-white/95 backdrop-blur-lg px-4 py-2 rounded-xl shadow-lg z-10 text-right">
                                    <span
                                        class="md:font-normal font-bold text-gray-600 text-xxs md:text-md line-through">$1349</span>
                                    <span
                                        class="block md:font-bold font-extrabold  text-brand-500 text-sm  md:text-[1.125rem]">$1099</span>
                                </div>
                            </figure>
                            <figcaption class="pt-4 space-y-2">
                                <div class="flex items-center text-xs text-gray-500">
                                    <i class="fa fa-star text-yellow-400 mr-1"></i>4.7 <span
                                        class="ml-1 text-gray-400">(620
                                        reviews)</span>
                                </div>
                                <h3 class="text-base md:text-xl font-semibold group-hover:text-brand-500 transition">
                                    Manaslu
                                    Circuit Trek</h3>
                                <div class="flex gap-4 text-xs text-gray-500">
                                    <span>
                                        <i class="fa fa-clock "></i> 16 Days </span>
                                </div>
                            </figcaption>
                        </a>
                    </div>
                    <!-- Slide 4 -->
                    <div class="swiper-slide">
                        <a class="item group transition-all duration-500 hover:-translate-y-2" href="trip-details.php">
                            <figure class="relative overflow-hidden rounded-2xl h-[280px] image-anime">
                                <div class="block ">
                                    <img data-src="assets/trip/1.webp" src="assets/default.jpg" loading="lazy"
                                        alt="Langtang Valley Trek"
                                        class="object-cover w-full h-full absolute inset-0 transition-transform duration-700 group-hover:scale-110">
                                </div>

                                <span
                                    class="absolute top-3 left-3 bg-brand-500 text-white text-xs font-semibold px-3 py-1 rounded-full shadow-md z-10">Top
                                    Rated</span>
                                <div
                                    class="absolute right-3 bottom-3 bg-white/95 backdrop-blur-lg px-4 py-2 rounded-xl shadow-lg z-10 text-right">
                                    <span
                                        class="md:font-normal font-bold text-gray-600 text-xxs md:text-md line-through">$1349</span>
                                    <span
                                        class="block md:font-bold font-extrabold  text-brand-500 text-sm  md:text-[1.125rem]">$1099</span>
                                </div>
                            </figure>
                            <figcaption class="pt-4 space-y-2">
                                <div class="flex items-center text-xs text-gray-500">
                                    <i class="fa fa-star text-yellow-400 mr-1"></i>4.6 <span
                                        class="ml-1 text-gray-400">(450
                                        reviews)</span>
                                </div>
                                <h3 class="text-base md:text-xl font-semibold group-hover:text-brand-500 transition">
                                    Langtang Valley Trek</h3>
                                <div class="flex gap-4 text-xs text-gray-500">
                                    <span>
                                        <i class="fa fa-clock "></i> 10 Days </span>
                                </div>
                            </figcaption>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Section: About us -->
    <section class="relative bg-bottom bg-no-repeat bg-cover  py-20 overflow-hidden"
        style="background-image: url('assets/about-banner.jpg');">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-white/90 z-10"></div>
        <div class="container mx-auto z-30 relative">
            <div class="grid lg:grid-cols-2 gap-12 ">
                <!-- LEFT SIDE (Images + Card) -->
                <div class="relative">
                    <!-- Top Large Image -->
                    <div class="rounded-3xl overflow-hidden shadow-lg h-[265px] md:h-[500px] image-anime">
                        <img data-src="https://images.unsplash.com/photo-1751566911145-a1b71fb77bbf?fm=webp&q=80&w=1200"
                            src="assets/default.jpg" loading="lazy" class="lazy-img w-full h-full object-cover"
                            alt="">
                    </div>
                    <!-- Floating Stats Card -->
                    <a href="review.php" class="absolute bottom-8 right-6 bg-white rounded-3xl shadow-xl p-6 w-56">
                        <div class="flex -space-x-3 mb-4">
                            <img class="w-10 h-10 rounded-full border-2 border-white"
                                data-src="https://randomuser.me/api/portraits/men/32.jpg" src="assets/default.jpg"
                                loading="lazy" alt="">
                            <img class="w-10 h-10 rounded-full border-2 border-white"
                                data-src="https://randomuser.me/api/portraits/women/44.jpg" src="assets/default.jpg"
                                loading="lazy" alt="">
                            <img class="w-10 h-10 rounded-full border-2 border-white"
                                data-src="https://randomuser.me/api/portraits/men/86.jpg" src="assets/default.jpg"
                                loading="lazy" alt="">
                            <div
                                class="w-10 h-10 flex items-center justify-center bg-green-500 text-white text-lg font-bold rounded-full border-2 border-white">
                                <i class=" fa fa-plus"></i>
                            </div>
                        </div>
                        <h3 class="text-2xl font-bold">1200+</h3>
                        <p class="text-gray-500 text-sm">Happy Customers</p>
                    </a>
                    <!-- Bottom Image -->
                    <!-- <div class="absolute -bottom-16 left-20 w-[80%] rounded-3xl overflow-hidden shadow-2xl border-8 border-white"><img src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee"
                   class="w-full h-[300px] object-cover" alt=""></div> -->
                </div>
                <!-- RIGHT SIDE CONTENT -->
                <div>
                    <h2 class="text-3xl md:text-4xl font-extrabold"> Your Trusted Partner for <span
                            class="text-brand-500 italic"> Himalayan Treks & Tours </span>
                    </h2>
                    <div class="text-lg text-gray-600 mb-8 space-y-4 mt-2 md:mt-4">
                        <p> Treklaya is a passionate trekking and adventure company dedicated to creating unforgettable
                            Himalayan experiences. Based in Nepal, we specialize in crafting authentic, safe, and
                            life-changing journeys through some of the world’s most breathtaking landscapes. </p>
                        <p>From iconic routes like the Everest region and Annapurna trails to hidden off-the-beaten-path
                            adventures, Treklaya is committed to delivering personalized trekking experiences that combine
                            adventure, culture, and natural beauty.</p>
                    </div>
                    <!-- Features -->
                    <div class="grid sm:grid-cols-2 gap-4 mb-10">
                        <div class="flex items-start gap-3">
                            <div
                                class="w-6 h-6 flex items-center justify-center rounded-full bg-green-500 text-white text-sm">
                                ✓</div>
                            <p class="text-gray-700">Experienced Local Guides </p>
                        </div>
                        <div class="flex items-start gap-3">
                            <div
                                class="w-6 h-6 flex items-center justify-center rounded-full bg-green-500 text-white text-sm">
                                ✓</div>
                            <p class="text-gray-700">Safety First Approach</p>
                        </div>
                        <div class="flex items-start gap-3">
                            <div
                                class="w-6 h-6 flex items-center justify-center rounded-full bg-green-500 text-white text-sm">
                                ✓</div>
                            <p class="text-gray-700">Personalized Service </p>
                        </div>
                        <div class="flex items-start gap-3">
                            <div
                                class="w-6 h-6 flex items-center justify-center rounded-full bg-green-500 text-white text-sm">
                                ✓</div>
                            <p class="text-gray-700">Sustainable Tourism </p>
                        </div>
                    </div>
                    <!-- CTA -->
                    <a href="about-us.php"
                        class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-brand-500/30
              bg-brand-500/10 text-brand-600 text-sm font-medium
              hover:bg-brand-500 hover:text-white transition-all duration-300">
                        Read More <span
                            class="flex items-center justify-center w-7 h-7 rounded-full bg-brand-500 text-white">
                            <i class="fa fa-arrow-right text-xs"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <!-- Featured Trips 2026 -->
        <div class="container z-30 relative mt-20 px-0 md:px-6">
            <div class="backdrop-blur-md bg-white/50 border rounded-3xl p-8">
                <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-6 mb-10">
                    <!-- Left Content -->
                    <div class="lg:w-2/3">
                        <h2 class="text-3xl md:text-4xl font-extrabold"> Featured Trips <span
                                class="text-brand-500 italic">2026</span>
                        </h2>
                        <p class="mt-2 text-gray-600 text-lg  max-w-3xl leading-relaxed">Popular tours and trip packages
                            with special
                            deals </p>
                    </div>
                    <!-- Right Actions -->
                    <div class="flex items-center gap-6">
                        <!-- View All Button -->
                        <a href="trip-list.php"
                            class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-brand-500/30
              bg-brand-500/10 text-brand-600 text-sm font-medium
              hover:bg-brand-500 hover:text-white transition-all duration-300">
                            View All <span
                                class="flex items-center justify-center w-7 h-7 rounded-full bg-brand-500 text-white">
                                <i class="fa fa-arrow-right text-xs"></i>
                            </span>
                        </a>
                        <!-- Navigation Arrows -->
                        <div class="flex items-center bg-brand-500/10 border border-brand-500/20 rounded-full p-1">
                            <button
                                class="prevBtn w-9 h-9  flex items-center justify-center rounded-full bg-brand-500  hover:bg-brand-600 text-white
                     hover:bg-brand-600 hover:text-white transition-all duration-300">
                                <i class="fa fa-chevron-left text-sm"></i>
                            </button>
                            <div class="w-px h-5 bg-brand-500/30 mx-1"></div>
                            <button
                                class="nextBtn w-9 h-9  flex items-center justify-center rounded-full bg-brand-500  hover:bg-brand-600 text-white
                        hover:bg-brand-600 hover:text-white transition-all duration-300">
                                <i class="fa fa-chevron-right text-sm"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Grid of Cards -->
                <!-- Swiper Container -->
                <div class="GridSlider swiper  ">
                    <div class="swiper-wrapper  ">
                        <!-- Slide 1 -->
                        <div class="swiper-slide">
                            <a class="item group transition-all duration-500 hover:-translate-y-2"
                                href="trip-details.php">
                                <figure class="relative overflow-hidden rounded-2xl h-[280px] image-anime">
                                    <div class="block ">
                                        <img data-src="assets/trip/1.webp" src="assets/default.jpg" loading="lazy"
                                            alt="Everest Base Camp Trek"
                                            class="lazy-img object-cover w-full h-full absolute inset-0 transition-transform duration-700 group-hover:scale-110">
                                    </div>

                                    <span
                                        class="absolute top-3 left-3 bg-brand-500 text-white text-xs font-semibold px-3 py-1 rounded-full shadow-md z-10">Best
                                        Seller</span>
                                    <div
                                        class="absolute right-3 bottom-3 bg-white/95 backdrop-blur-lg px-4 py-2 rounded-xl shadow-lg z-10 text-right">
                                        <span
                                            class="md:font-normal font-bold text-gray-600 text-xxs md:text-md line-through">$1349</span>
                                        <span
                                            class="block md:font-bold font-extrabold  text-brand-500 text-sm  md:text-[1.125rem]">$1099</span>
                                    </div>
                                </figure>
                                <figcaption class="pt-4 space-y-2">
                                    <div class="flex items-center text-xs text-gray-700 font-medium">
                                        <i class="fa fa-star text-yellow-400 mr-1"></i>4.9 <span
                                            class="ml-1 text-gray-600">(1,547 reviews)</span>
                                    </div>
                                    <h3 class="text-base md:text-xl font-semibold group-hover:text-brand-500 transition">
                                        Everest Base Camp Trek</h3>
                                    <div class="flex gap-4 text-xs text-gray-600">
                                        <span>
                                            <i class="fa fa-clock "></i> 14 Days </span>
                                    </div>
                                </figcaption>
                            </a>
                        </div>
                        <!-- Slide 2 -->
                        <div class="swiper-slide">
                            <a class="item group transition-all duration-500 hover:-translate-y-2"
                                href="trip-details.php">
                                <figure class="relative overflow-hidden rounded-2xl h-[280px] image-anime">
                                    <div class="block ">
                                        <img data-src="assets/trip/2.webp" src="assets/default.jpg" loading="lazy"
                                            alt="Annapurna Base Camp Trek"
                                            class="lazy-img object-cover w-full h-full absolute inset-0 transition-transform duration-700 group-hover:scale-110">
                                    </div>

                                    <span
                                        class="absolute top-3 left-3 bg-brand-500 text-white text-xs font-semibold px-3 py-1 rounded-full shadow-md z-10">Popular</span>
                                    <div
                                        class="absolute right-3 bottom-3 bg-white/95 backdrop-blur-lg px-4 py-2 rounded-xl shadow-lg z-10 text-right">
                                        <span
                                            class="md:font-normal font-bold text-gray-600 text-xxs md:text-md line-through">$1349</span>
                                        <span
                                            class="block md:font-bold font-extrabold  text-brand-500 text-sm  md:text-[1.125rem]">$1099</span>
                                    </div>
                                </figure>
                                <figcaption class="pt-4 space-y-2">
                                    <div class="flex items-center text-xs text-gray-500">
                                        <i class="fa fa-star text-yellow-400 mr-1"></i>4.8 <span
                                            class="ml-1 text-gray-400">(980 reviews)</span>
                                    </div>
                                    <h2 class="text-base md:text-xl font-semibold group-hover:text-brand-500 transition">
                                        Annapurna Base Camp Trek</h2>
                                    <div class="flex gap-4 text-xs text-gray-500">
                                        <span>
                                            <i class="fa fa-clock "></i> 12 Days </span>
                                    </div>
                                </figcaption>
                            </a>
                        </div>
                        <!-- Slide 3 -->
                        <div class="swiper-slide">
                            <a class="item group transition-all duration-500 hover:-translate-y-2"
                                href="trip-details.php">
                                <figure class="relative overflow-hidden rounded-2xl h-[280px] image-anime">
                                    <div class="block ">
                                        <img data-src="assets/trip/3.webp" src="assets/default.jpg" loading="lazy"
                                            alt="Manaslu Circuit Trek"
                                            class="lazy-img object-cover w-full h-full absolute inset-0 transition-transform duration-700 group-hover:scale-110">
                                    </div>

                                    <span
                                        class="absolute top-3 left-3 bg-brand-500 text-white text-xs font-semibold px-3 py-1 rounded-full shadow-md z-10">Adventure</span>
                                    <div
                                        class="absolute right-3 bottom-3 bg-white/95 backdrop-blur-lg px-4 py-2 rounded-xl shadow-lg z-10 text-right">
                                        <span
                                            class="md:font-normal font-bold text-gray-600 text-xxs md:text-md line-through">$1349</span>
                                        <span
                                            class="block md:font-bold font-extrabold  text-brand-500 text-sm  md:text-[1.125rem]">$1099</span>
                                    </div>
                                </figure>
                                <figcaption class="pt-4 space-y-2">
                                    <div class="flex items-center text-xs text-gray-500">
                                        <i class="fa fa-star text-yellow-400 mr-1"></i>4.7 <span
                                            class="ml-1 text-gray-400">(620 reviews)</span>
                                    </div>
                                    <h3 class="text-base md:text-xl font-semibold group-hover:text-brand-500 transition">
                                        Manaslu Circuit Trek</h3>
                                    <div class="flex gap-4 text-xs text-gray-500">
                                        <span>
                                            <i class="fa fa-clock "></i> 16 Days </span>
                                    </div>
                                </figcaption>
                            </a>
                        </div>
                        <!-- Slide 4 -->
                        <div class="swiper-slide">
                            <a class="item group transition-all duration-500 hover:-translate-y-2"
                                href="trip-details.php">
                                <figure class="relative overflow-hidden rounded-2xl h-[280px] image-anime">
                                    <div class="block ">
                                        <img data-src="assets/trip/1.webp" src="assets/default.jpg" loading="lazy"
                                            alt="Langtang Valley Trek"
                                            class="lazy-img object-cover w-full h-full absolute inset-0 transition-transform duration-700 group-hover:scale-110">
                                    </div>

                                    <span
                                        class="absolute top-3 left-3 bg-brand-500 text-white text-xs font-semibold px-3 py-1 rounded-full shadow-md z-10">Top
                                        Rated</span>
                                    <div
                                        class="absolute right-3 bottom-3 bg-white/95 backdrop-blur-lg px-4 py-2 rounded-xl shadow-lg z-10 text-right">
                                        <span
                                            class="md:font-normal font-bold text-gray-600 text-xxs md:text-md line-through">$1349</span>
                                        <span
                                            class="block md:font-bold font-extrabold  text-brand-500 text-sm  md:text-[1.125rem]">$1099</span>
                                    </div>
                                </figure>
                                <figcaption class="pt-4 space-y-2">
                                    <div class="flex items-center text-xs text-gray-500">
                                        <i class="fa fa-star text-yellow-400 mr-1"></i>4.6 <span
                                            class="ml-1 text-gray-400">(450 reviews)</span>
                                    </div>
                                    <h3 class="text-base md:text-xl font-semibold group-hover:text-brand-500 transition">
                                        Langtang Valley Trek</h3>
                                    <div class="flex gap-4 text-xs text-gray-500">
                                        <span>
                                            <i class="fa fa-clock "></i> 10 Days </span>
                                    </div>
                                </figcaption>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- Activities We Offer Section -->
    <section class="relative z-30 py-20 bg-gray-100 overflow-hidden">

        <div class="container">
            <div class="text-center mb-10">
                <h2 class="text-3xl md:text-4xl font-extrabold text-gray-800">Activities We <span
                        class="text-brand-500 italic">Offer</span>
                </h2>
                <p class="mt-4 text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">Explore a diverse range of
                    adventures tailored to every enthusiast, from challenging treks to immersive cultural experiences.</p>
            </div>
        </div>
        <!-- Grid of Cards -->
        <!-- Swiper Container -->
        <div class="activity swiper relative px-5 mx-auto">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <a class="item group transition-all duration-500 hover:-translate-y-2" href="trip-details.php">
                        <figure class="relative overflow-hidden rounded-2xl h-[265px]  md:h-[420px] image-anime">
                            <img data-src="assets/trip/1.webp" src="assets/default.jpg" loading="lazy"
                                alt="Everest Base Camp Trek"
                                class="lazy-img object-cover w-full h-full absolute inset-0 transition-transform duration-700 group-hover:scale-110" />
                            <!-- Badge -->
                            <span
                                class="absolute top-3 right-3 bg-white text-brand-500 text-xs font-semibold px-3 py-1 rounded-full shadow-md z-10">5
                                Trips</span>
                            <!-- Caption -->
                            <figcaption class="absolute bottom-0 left-0 w-full p-4 figcaption-absolute">
                                <h3 class="text-white text-base md:text-lg font-semibold">Luxury Tours in Nepal</h3>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <a class="item group transition-all duration-500 hover:-translate-y-2" href="trip-details.php">
                        <figure class="relative overflow-hidden rounded-2xl h-[265px] md:h-[420px] image-anime">
                            <div class="block ">
                                <img data-src="assets/trip/2.webp" src="assets/default.jpg" loading="lazy"
                                    alt="Everest Base Camp Trek"
                                    class="lazy-img object-cover w-full h-full absolute inset-0 transition-transform duration-700 group-hover:scale-110">
                            </div>
                            <!-- Top Badge Counter -->
                            <span
                                class="absolute top-3 right-3 bg-white  text-brand-500 text-xs font-semibold px-3 py-1 rounded-full shadow-md z-10">5
                                Trips</span>
                            <!-- Absolute Title -->
                            <figcaption class="absolute bottom-0 left-0 w-full p-4 figcaption-absolute">
                                <h3 class="text-white text-base md:text-lg font-semibold"> Day Trips in Nepal</h3>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <!-- Slide 3 -->
                <div class="swiper-slide">
                    <a class="item group transition-all duration-500 hover:-translate-y-2" href="trip-details.php">
                        <figure class="relative overflow-hidden rounded-2xl h-[265px] md:h-[420px] image-anime">
                            <div class="block ">
                                <img data-src="assets/trip/3.webp" src="assets/default.jpg" loading="lazy"
                                    alt="Everest Base Camp Trek"
                                    class="lazy-img object-cover w-full h-full absolute inset-0 transition-transform duration-700 group-hover:scale-110">
                            </div>
                            <!-- Top Badge Counter -->
                            <span
                                class="absolute top-3 right-3 bg-white  text-brand-500 text-xs font-semibold px-3 py-1 rounded-full shadow-md z-10">5
                                Trips</span>
                            <!-- Absolute Title -->
                            <figcaption class="absolute bottom-0 left-0 w-full p-4 figcaption-absolute">
                                <h3 class="text-white text-base md:text-lg font-semibold"> Cycling and Mountain Biking</h3>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <!-- Slide 4 -->
                <div class="swiper-slide">
                    <a class="item group transition-all duration-500 hover:-translate-y-2" href="trip-details.php">
                        <figure class="relative overflow-hidden rounded-2xl h-[265px] md:h-[420px] image-anime">
                            <div class="block ">
                                <img data-src="assets/trip/9.webp" src="assets/default.jpg" loading="lazy"
                                    alt="Annapurna Circuit Trek"
                                    class="lazy-img object-cover w-full h-full absolute inset-0 transition-transform duration-700 group-hover:scale-110">
                            </div>
                            <span
                                class="absolute top-3 right-3 bg-white text-brand-500 text-xs font-semibold px-3 py-1 rounded-full shadow-md z-10">7
                                Trips</span>
                            <figcaption class="absolute bottom-0 left-0 w-full p-4 figcaption-absolute">
                                <h3 class="text-white text-base md:text-lg font-semibold">Annapurna Luxury Trek</h3>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <!-- Slide 5 -->
                <div class="swiper-slide">
                    <a class="item group transition-all duration-500 hover:-translate-y-2" href="trip-details.php">
                        <figure class="relative overflow-hidden rounded-2xl h-[265px] md:h-[420px] image-anime">
                            <div class="block ">
                                <img data-src="assets/trip/10.webp" src="assets/default.jpg" loading="lazy"
                                    alt="Everest Helicopter Tour"
                                    class="lazy-img object-cover w-full h-full absolute inset-0 transition-transform duration-700 group-hover:scale-110">
                            </div>
                            <span
                                class="absolute top-3 right-3 bg-white text-brand-500 text-xs font-semibold px-3 py-1 rounded-full shadow-md z-10">3
                                Trips</span>
                            <figcaption class="absolute bottom-0 left-0 w-full p-4 figcaption-absolute">
                                <h3 class="text-white text-base md:text-lg font-semibold">Everest Helicopter Tour</h3>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <!-- Slide 6 -->
                <div class="swiper-slide">
                    <a class="item group transition-all duration-500 hover:-translate-y-2" href="trip-details.php">
                        <figure class="relative overflow-hidden rounded-2xl h-[265px] md:h-[420px] image-anime">
                            <div class="block ">
                                <img data-src="assets/trip/11.webp" src="assets/default.jpg" loading="lazy"
                                    alt="Pokhara Luxury Retreat"
                                    class="lazy-img object-cover w-full h-full absolute inset-0 transition-transform duration-700 group-hover:scale-110">
                            </div>
                            <span
                                class="absolute top-3 right-3 bg-white text-brand-500 text-xs font-semibold px-3 py-1 rounded-full shadow-md z-10">4
                                Trips</span>
                            <figcaption class="absolute bottom-0 left-0 w-full p-4 figcaption-absolute">
                                <h3 class="text-white text-base md:text-lg font-semibold">Pokhara Luxury Retreat</h3>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <!-- Slide 7 -->
                <div class="swiper-slide">
                    <a class="item group transition-all duration-500 hover:-translate-y-2" href="trip-details.php">
                        <figure class="relative overflow-hidden rounded-2xl h-[265px] md:h-[420px] image-anime">
                            <div class="block ">
                                <img data-src="assets/trip/12.webp" src="assets/default.jpg" loading="lazy"
                                    alt="Chitwan Jungle Safari"
                                    class="lazy-img object-cover w-full h-full absolute inset-0 transition-transform duration-700 group-hover:scale-110">
                            </div>
                            <span
                                class="absolute top-3 right-3 bg-white text-brand-500 text-xs font-semibold px-3 py-1 rounded-full shadow-md z-10">6
                                Trips</span>
                            <figcaption class="absolute bottom-0 left-0 w-full p-4 figcaption-absolute">
                                <h3 class="text-white text-base md:text-lg font-semibold">Chitwan Jungle Safari</h3>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <!-- Slide 8 -->
                <div class="swiper-slide">
                    <a class="item group transition-all duration-500 hover:-translate-y-2" href="trip-details.php">
                        <figure class="relative overflow-hidden rounded-2xl h-[265px] md:h-[420px] image-anime">
                            <div class="block ">
                                <img data-src="assets/trip/13.webp" src="assets/default.jpg" loading="lazy"
                                    alt="Luxury Yoga Retreat Nepal"
                                    class="lazy-img object-cover w-full h-full absolute inset-0 transition-transform duration-700 group-hover:scale-110">
                            </div>
                            <span
                                class="absolute top-3 right-3 bg-white text-brand-500 text-xs font-semibold px-3 py-1 rounded-full shadow-md z-10">2
                                Trips</span>
                            <figcaption class="absolute bottom-0 left-0 w-full p-4 figcaption-absolute">
                                <h3 class="text-white text-base md:text-lg font-semibold">Luxury Yoga Retreat</h3>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <!-- Slide 9 -->
                <div class="swiper-slide">
                    <a class="item group transition-all duration-500 hover:-translate-y-2" href="trip-details.php">
                        <figure class="relative overflow-hidden rounded-2xl h-[265px] md:h-[420px] image-anime">
                            <div class="block ">
                                <img data-src="assets/trip/14.webp" src="assets/default.jpg" loading="lazy"
                                    alt="Luxury Rafting Adventure"
                                    class="lazy-img object-cover w-full h-full absolute inset-0 transition-transform duration-700 group-hover:scale-110">
                            </div>
                            <span
                                class="absolute top-3 right-3 bg-white text-brand-500 text-xs font-semibold px-3 py-1 rounded-full shadow-md z-10">5
                                Trips</span>
                            <figcaption class="absolute bottom-0 left-0 w-full p-4 figcaption-absolute">
                                <h3 class="text-white text-base md:text-lg font-semibold">Luxury Rafting Adventure</h3>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <!-- Slide 10 -->
                <div class="swiper-slide">
                    <a class="item group transition-all duration-500 hover:-translate-y-2" href="trip-details.php">
                        <figure class="relative overflow-hidden rounded-2xl h-[265px] md:h-[420px] image-anime">
                            <div class="block ">
                                <img data-src="assets/trip/15.webp" src="assets/default.jpg" loading="lazy"
                                    alt="Luxury Cultural Tours"
                                    class="lazy-img object-cover w-full h-full absolute inset-0 transition-transform duration-700 group-hover:scale-110">
                            </div>
                            <span
                                class="absolute top-3 right-3 bg-white text-brand-500 text-xs font-semibold px-3 py-1 rounded-full shadow-md z-10">8
                                Trips</span>
                            <figcaption class="absolute bottom-0 left-0 w-full p-4 figcaption-absolute">
                                <h3 class="text-white text-base md:text-lg font-semibold">Luxury Cultural Tours</h3>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <!-- Slide 11 -->
                <div class="swiper-slide">
                    <a class="item group transition-all duration-500 hover:-translate-y-2" href="trip-details.php">
                        <figure class="relative overflow-hidden rounded-2xl h-[265px] md:h-[420px] image-anime">
                            <div class="block ">
                                <img data-src="assets/trip/16.webp" src="assets/default.jpg" loading="lazy"
                                    alt="Himalayan Scenic Flight"
                                    class="lazy-img object-cover w-full h-full absolute inset-0 transition-transform duration-700 group-hover:scale-110">
                            </div>
                            <span
                                class="absolute top-3 right-3 bg-white text-brand-500 text-xs font-semibold px-3 py-1 rounded-full shadow-md z-10">3
                                Trips</span>
                            <figcaption class="absolute bottom-0 left-0 w-full p-4 figcaption-absolute">
                                <h3 class="text-white text-base md:text-lg font-semibold">Himalayan Scenic Flight</h3>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <!-- Slide 12 -->
                <div class="swiper-slide">
                    <a class="item group transition-all duration-500 hover:-translate-y-2" href="trip-details.php">
                        <figure class="relative overflow-hidden rounded-2xl h-[265px] md:h-[420px] image-anime">
                            <div class="block ">
                                <img data-src="assets/trip/17.webp" src="assets/default.jpg" loading="lazy"
                                    alt="Luxury Mountain Lodge Stay"
                                    class="lazy-img object-cover w-full h-full absolute inset-0 transition-transform duration-700 group-hover:scale-110">
                            </div>
                            <span
                                class="absolute top-3 right-3 bg-white text-brand-500 text-xs font-semibold px-3 py-1 rounded-full shadow-md z-10">6
                                Trips</span>
                            <figcaption class="absolute bottom-0 left-0 w-full p-4 figcaption-absolute">
                                <h3 class="text-white text-base md:text-lg font-semibold">Luxury Mountain Lodge Stay</h3>
                            </figcaption>
                        </figure>
                    </a>
                </div>
            </div>
            <!-- Button Container -->
            <div class="absolute inset-0 flex items-center justify-between px-8 z-30 w-full pointer-events-none">
                <button
                    class="prevBtn shadow-md w-12 h-12 flex items-center justify-center rounded-full bg-white text-gray-500 hover:bg-brand-500 hover:text-white pointer-events-auto shadow-lg">
                    <i class="fa fa-chevron-left text-sm"></i>
                </button>
                <button
                    class="nextBtn shadow-md w-12 h-12 flex items-center justify-center rounded-full bg-white text-gray-500 hover:bg-brand-500 hover:text-white pointer-events-auto shadow-lg">
                    <i class="fa fa-chevron-right text-sm"></i>
                </button>
            </div>
        </div>


        <!-- curve -->
        <div class="absolute bottom-0 left-0 w-full z-10">
            <svg version="1.1" x="0px" y="0px" viewBox="0 0 1439 35.6" preserveAspectRatio="xMinYMax"
                style="display:block;line-height:0;width:103%;z-index:3;top:auto;bottom:0;left:0;margin-bottom:-1px;margin-top:-1px;margin-left:-0.5%;height:auto"
                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve">
                <defs>
                    <linearGradient id="StoryCards-bottom-gradbg">
                        <stop offset="0%" stop-color="#ffffff"></stop>
                        <stop offset="100%" stop-color="#ffffff"></stop>
                    </linearGradient>
                    <mask id="StoryCards-bottom-mask">
                        <path d="M0,36S300.6,0,717,0V36Z" fill="#ffffff"></path>
                        <path d="M1440,36S1136.55,0,716,0V36Z" fill="#ffffff"></path>
                    </mask>
                </defs>
                <rect mask="url(#StoryCards-bottom-mask)" fill="url(#StoryCards-bottom-gradbg)" width="1440"
                    height="35.6">
                </rect>
            </svg>
        </div>
        <!-- end curve -->
    </section>
    <!-- Section: Short yet Trips -->
    <section class="pt-8 py-20 relative">
        <div class="container">
            <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-6 mb-10">
                <!-- Left Content -->
                <div class="lg:w-2/3">
                    <h2 class="text-3xl md:text-4xl font-extrabold"> Short yet <span
                            class="text-brand-500 italic">Rewarding
                            Packages</span>
                    </h2>
                    <p class="mt-2 md:mt-4  text-gray-600 text-lg max-w-2xl leading-relaxed">Our Short and Rewarding
                        Himalayan
                        Trekking Packages are waiting for you at Hiking Bees</p>
                </div>
                <!-- Right Actions -->
                <div class="flex items-center gap-6">
                    <!-- View All Button -->
                    <a href="trip-list.php"
                        class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-brand-500/30
              bg-brand-500/10 text-brand-600 text-sm font-medium
              hover:bg-brand-500 hover:text-white transition-all duration-300">
                        View All <span
                            class="flex items-center justify-center w-7 h-7 rounded-full bg-brand-500 text-white">
                            <i class="fa fa-arrow-right text-xs"></i>
                        </span>
                    </a>
                    <!-- Navigation Arrows -->
                    <div class="flex items-center bg-brand-500/10 border border-brand-500/20 rounded-full p-1">
                        <button
                            class="prevBtn w-9 h-9  flex items-center justify-center rounded-full bg-brand-500  text-white
                                hover:bg-brand-600 hover:text-white transition-all duration-300">
                            <i class="fa fa-chevron-left text-sm"></i>
                        </button>
                        <div class="w-px h-5 bg-brand-500/30 mx-1"></div>
                        <button
                            class="nextBtn w-9 h-9  flex items-center justify-center rounded-full bg-brand-500  text-white
                            hover:bg-brand-600 hover:text-white transition-all duration-300">
                            <i class="fa fa-chevron-right text-sm"></i>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Grid of Cards -->
            <!-- Swiper Container -->
            <div class="GridSlider swiper  ">
                <div class="swiper-wrapper  ">
                    <!-- Slide 1 -->
                    <div class="swiper-slide">
                        <a class="item group transition-all duration-500 hover:-translate-y-2" href="trip-details.php">
                            <figure class="relative overflow-hidden rounded-2xl h-[280px] image-anime">
                                <div class="block ">
                                    <img data-src="assets/trip/1.webp" src="assets/default.jpg" loading="lazy"
                                        alt="Everest Base Camp Trek"
                                        class="lazy-img object-cover w-full h-full absolute inset-0 transition-transform duration-700 group-hover:scale-110">
                                </div>

                                <span
                                    class="absolute top-3 left-3 bg-brand-500 text-white text-xs font-semibold px-3 py-1 rounded-full shadow-md z-10">Best
                                    Seller</span>
                                <div
                                    class="absolute right-3 bottom-3 bg-white/95 backdrop-blur-lg px-4 py-2 rounded-xl shadow-lg z-10 text-right">
                                    <span
                                        class="md:font-normal font-bold text-gray-600 text-xxs md:text-md line-through">$1349</span>
                                    <span
                                        class="block md:font-bold font-extrabold  text-brand-500 text-sm  md:text-[1.125rem]">$1099</span>
                                </div>
                            </figure>
                            <figcaption class="pt-4 space-y-2">
                                <div class="flex items-center text-xs text-gray-700 font-medium">
                                    <i class="fa fa-star text-yellow-400 mr-1"></i>4.9 <span
                                        class="ml-1 text-gray-600">(1,547 reviews)</span>
                                </div>
                                <h3 class="text-base md:text-xl font-semibold group-hover:text-brand-500 transition">
                                    Everest
                                    Base Camp Trek</h3>
                                <div class="flex gap-4 text-xs text-gray-600">
                                    <span>
                                        <i class="fa fa-clock "></i> 14 Days </span>
                                </div>
                            </figcaption>
                        </a>
                    </div>
                    <!-- Slide 2 -->
                    <div class="swiper-slide">
                        <a class="item group transition-all duration-500 hover:-translate-y-2" href="trip-details.php">
                            <figure class="relative overflow-hidden rounded-2xl h-[280px] image-anime">
                                <div class="block ">
                                    <img data-src="assets/trip/2.webp" src="assets/default.jpg" loading="lazy"
                                        alt="Annapurna Base Camp Trek"
                                        class="lazy-img object-cover w-full h-full absolute inset-0 transition-transform duration-700 group-hover:scale-110">
                                </div>

                                <span
                                    class="absolute top-3 left-3 bg-brand-500 text-white text-xs font-semibold px-3 py-1 rounded-full shadow-md z-10">Popular</span>
                                <div
                                    class="absolute right-3 bottom-3 bg-white/95 backdrop-blur-lg px-4 py-2 rounded-xl shadow-lg z-10 text-right">
                                    <span
                                        class="md:font-normal font-bold text-gray-600 text-xxs md:text-md line-through">$1349</span>
                                    <span
                                        class="block md:font-bold font-extrabold  text-brand-500 text-sm  md:text-[1.125rem]">$1099</span>
                                </div>
                            </figure>
                            <figcaption class="pt-4 space-y-2">
                                <div class="flex items-center text-xs text-gray-500">
                                    <i class="fa fa-star text-yellow-400 mr-1"></i>4.8 <span
                                        class="ml-1 text-gray-400">(980
                                        reviews)</span>
                                </div>
                                <h3 class="text-base md:text-xl font-semibold group-hover:text-brand-500 transition">
                                    Annapurna Base Camp Trek</h3>
                                <div class="flex gap-4 text-xs text-gray-500">
                                    <span>
                                        <i class="fa fa-clock "></i> 12 Days </span>
                                </div>
                            </figcaption>
                        </a>
                    </div>
                    <!-- Slide 3 -->
                    <div class="swiper-slide">
                        <a class="item group transition-all duration-500 hover:-translate-y-2" href="trip-details.php">
                            <figure class="relative overflow-hidden rounded-2xl h-[280px] image-anime">
                                <div class="block ">
                                    <img data-src="assets/trip/3.webp" src="assets/default.jpg" loading="lazy"
                                        alt="Manaslu Circuit Trek"
                                        class="lazy-img object-cover w-full h-full absolute inset-0 transition-transform duration-700 group-hover:scale-110">
                                </div>

                                <span
                                    class="absolute top-3 left-3 bg-brand-500 text-white text-xs font-semibold px-3 py-1 rounded-full shadow-md z-10">Adventure</span>
                                <div
                                    class="absolute right-3 bottom-3 bg-white/95 backdrop-blur-lg px-4 py-2 rounded-xl shadow-lg z-10 text-right">
                                    <span
                                        class="md:font-normal font-bold text-gray-600 text-xxs md:text-md line-through">$1349</span>
                                    <span
                                        class="block md:font-bold font-extrabold  text-brand-500 text-sm  md:text-[1.125rem]">$1099</span>
                                </div>
                            </figure>
                            <figcaption class="pt-4 space-y-2">
                                <div class="flex items-center text-xs text-gray-500">
                                    <i class="fa fa-star text-yellow-400 mr-1"></i>4.7 <span
                                        class="ml-1 text-gray-400">(620
                                        reviews)</span>
                                </div>
                                <h3 class="text-base md:text-xl font-semibold group-hover:text-brand-500 transition">
                                    Manaslu
                                    Circuit Trek</h3>
                                <div class="flex gap-4 text-xs text-gray-500">
                                    <span>
                                        <i class="fa fa-clock "></i> 16 Days </span>
                                </div>
                            </figcaption>
                        </a>
                    </div>
                    <!-- Slide 4 -->
                    <div class="swiper-slide">
                        <a class="item group transition-all duration-500 hover:-translate-y-2" href="trip-details.php">
                            <figure class="relative overflow-hidden rounded-2xl h-[280px] image-anime">
                                <div class="block ">
                                    <img data-src="assets/trip/1.webp" src="assets/default.jpg" loading="lazy"
                                        alt="Langtang Valley Trek"
                                        class="lazy-img object-cover w-full h-full absolute inset-0 transition-transform duration-700 group-hover:scale-110">
                                </div>

                                <span
                                    class="absolute top-3 left-3 bg-brand-500 text-white text-xs font-semibold px-3 py-1 rounded-full shadow-md z-10">Top
                                    Rated</span>
                                <div
                                    class="absolute right-3 bottom-3 bg-white/95 backdrop-blur-lg px-4 py-2 rounded-xl shadow-lg z-10 text-right">
                                    <span
                                        class="md:font-normal font-bold text-gray-600 text-xxs md:text-md line-through">$1349</span>
                                    <span
                                        class="block md:font-bold font-extrabold  text-brand-500 text-sm  md:text-[1.125rem]">$1099</span>
                                </div>
                            </figure>
                            <figcaption class="pt-4 space-y-2">
                                <div class="flex items-center text-xs text-gray-500">
                                    <i class="fa fa-star text-yellow-400 mr-1"></i>4.6 <span
                                        class="ml-1 text-gray-400">(450
                                        reviews)</span>
                                </div>
                                <h3 class="text-base md:text-xl font-semibold group-hover:text-brand-500 transition">
                                    Langtang Valley Trek</h3>
                                <div class="flex gap-4 text-xs text-gray-500">
                                    <span>
                                        <i class="fa fa-clock "></i> 10 Days </span>
                                </div>
                            </figcaption>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Traveler Reviews Section -->
    <section class="py-20  relative bg-brand-50">
        <div class="container">
            <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-6 mb-10">
                <!-- Left Content -->
                <div class="lg:w-2/3">
                    <h2 class="text-3xl md:text-4xl font-extrabold">Traveler <span class="text-brand-500 italic"> Reviews
                        </span>
                    </h2>
                    <p class="mt-2 md:mt-4  text-gray-600 text-lg max-w-2xl leading-relaxed">These honest reviews are
                        shared by
                        travelers who have journeyed with Treklaya. The experiences highlighted here are collected from
                        trusted travel platforms such as TripAdvisor and Google.</p>
                </div>
                <!-- Right Actions -->
                <div class="flex items-center gap-6">
                    <!-- View All Button -->
                    <a href="reviews.php"
                        class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-brand-500/30
              bg-brand-500/10 text-brand-600 text-sm font-medium
              hover:bg-brand-500 hover:text-white transition-all duration-300">
                        View all reviews <span
                            class="flex items-center justify-center w-7 h-7 rounded-full bg-brand-500 text-white">
                            <i class="fa fa-arrow-right text-xs"></i>
                        </span>
                    </a>
                    <!-- Navigation Arrows -->
                    <div class="flex items-center bg-brand-500/10 border border-brand-500/20 rounded-full p-1">
                        <button
                            class="prevBtn w-9 h-9  flex items-center justify-center rounded-full bg-brand-500  hover:bg-brand-600  text-white
                     hover:bg-brand-500 hover:text-white transition-all duration-300">
                            <i class="fa fa-chevron-left text-sm"></i>
                        </button>
                        <div class="w-px h-5 bg-brand-500/30 mx-1"></div>
                        <button
                            class="nextBtn w-9 h-9  flex items-center justify-center rounded-full bg-brand-500 hover:bg-brand-600 text-white
                     hover:bg-brand-600 hover:text-white transition-all duration-300">
                            <i class="fa fa-chevron-right text-sm"></i>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Grid of Cards -->
            <!-- Swiper Container -->
            <div class="ReviewSlider swiper  ">
                <div class="swiper-wrapper  ">
                    <!-- Slide 1 -->
                    <div class="swiper-slide h-auto flex">
                        <!-- Review Card -->
                        <div
                            class="group bg-white rounded-2xl border border-gray-100 shadow-sm transition duration-300 p-6 flex flex-col relative h-full">
                            <div class="absolute top-3 right-5 text-8xl text-gray-100 font-serif select-none">”</div>
                            <div class="flex items-center gap-4 mb-4 relative z-10">
                                <div
                                    class="w-14 h-14 rounded-full bg-brand-50 border border-brand-100 flex items-center justify-center font-bold text-lg text-brand-500">
                                    E</div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">Emily Carter</h4>
                                    <span class="text-sm text-gray-500">London, UK</span>
                                </div>
                            </div>
                            <div class="flex items-center gap-2 mb-3 text-sm">
                                <span class="text-yellow-400">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </span>
                                <span class="text-gray-500">Verified Review</span>
                            </div>
                            <h3
                                class="text-base md:text-lg font-semibold text-gray-900 mb-1 group-hover:text-brand-500 transition">
                                Amazing Everest Base Camp Experience </h3>
                            <span class="text-xs text-gray-400 uppercase tracking-wide mb-3"> October 12, 2024 </span>
                            <p class="reviewText text-gray-600 leading-relaxed line-clamp-4">Treklaya made our
                                Everest Base Camp trek an unforgettable adventure from start to finish. The entire journey
                                was well organized, and the guides were incredibly professional and supportive throughout
                                the trek. Every day brought new breathtaking views of the Himalayas, beautiful Sherpa
                                villages, and peaceful monasteries along the trail. The team ensured our safety and comfort
                                at all times, especially during the higher altitude sections. Their knowledge about the
                                mountains and local culture made the experience even more meaningful. Reaching Everest Base
                                Camp was truly a dream come true, and Treklaya played a huge role in making it such a
                                memorable journey.</p>
                            <button class="toggleBtn text-brand-500 text-sm font-medium mt-2 w-fit hover:underline"> Read
                                More </button>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="swiper-slide h-auto flex">
                        <!-- Review Card -->
                        <div
                            class="group bg-white rounded-2xl border border-gray-100 shadow-sm transition duration-300 p-6 flex flex-col relative h-full">
                            <div class="absolute top-3 right-5 text-8xl text-gray-100 font-serif select-none">”</div>
                            <div class="flex items-center gap-4 mb-4">
                                <div
                                    class="w-14 h-14 rounded-full bg-brand-50 border border-brand-100 flex items-center justify-center font-bold text-lg text-brand-500">
                                    D</div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">Daniel Moore</h4>
                                    <span class="text-sm text-gray-500">Sydney, Australia</span>
                                </div>
                            </div>
                            <div class="flex items-center gap-2 mb-3 text-sm">
                                <span class="text-yellow-400">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </span>
                                <span class="text-gray-500">Verified Review</span>
                            </div>
                            <h3
                                class="text-base md:text-lg font-semibold text-gray-900 mb-1 group-hover:text-brand-500 transition">
                                Professional Guides and Great Service </h3>
                            <span class="text-xs text-gray-400 uppercase tracking-wide mb-3"> September 08, 2024 </span>
                            <p class="reviewText text-gray-600 leading-relaxed line-clamp-4"> Our trekking
                                experience with Treklaya in the Annapurna region was absolutely amazing. From the moment we
                                started planning the trip, the communication with their team was clear and helpful. During
                                the trek, our guide was knowledgeable, friendly, and always motivated us to keep going. The
                                landscapes changed beautifully each day, from lush green forests to dramatic mountain
                                scenery. Treklaya handled all the logistics smoothly, including permits, accommodation, and
                                meals along the trail. The entire trip felt safe, comfortable, and well organized, which
                                allowed us to truly enjoy the beauty of Nepal’s mountains.</p>
                            <button class="toggleBtn text-brand-500 text-sm font-medium mt-2 w-fit hover:underline"> Read
                                More </button>
                        </div>
                    </div>
                    <!-- Slide 3 -->
                    <div class="swiper-slide h-auto flex">
                        <!-- Review Card -->
                        <div
                            class="group bg-white rounded-2xl border border-gray-100 shadow-sm transition duration-300 p-6 flex flex-col relative h-full my-1">
                            <div class="absolute top-3 right-5 text-8xl text-gray-100 font-serif select-none">”</div>
                            <div class="flex items-center gap-4 mb-4">
                                <div
                                    class="w-14 h-14 rounded-full bg-brand-50 border border-brand-100 flex items-center justify-center font-bold text-lg text-brand-500">
                                    S</div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">Sophia Martinez</h4>
                                    <span class="text-sm text-gray-500">Madrid, Spain</span>
                                </div>
                            </div>
                            <div class="flex items-center gap-2 mb-3 text-sm">
                                <span class="text-yellow-400">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </span>
                                <span class="text-gray-500">Verified Review</span>
                            </div>
                            <h3
                                class="text-base md:text-lg font-semibold text-gray-900 mb-1 group-hover:text-brand-500 transition">
                                Best Trekking Company in Nepal </h3>
                            <span class="text-xs text-gray-400 uppercase tracking-wide mb-3"> November 15, 2024 </span>
                            <p class="reviewText text-gray-600 leading-relaxed line-clamp-4"> Treklaya is without a
                                doubt one of the best trekking companies in Nepal. Their professionalism and attention to
                                detail made our trekking experience smooth and enjoyable. The guides were passionate about
                                the mountains and always shared interesting information about the culture, people, and
                                history of the region. Every day of the trek offered spectacular views and unique cultural
                                experiences. The team always made sure we were comfortable and well prepared for the next
                                part of the journey. If you are planning a trek in Nepal, Treklaya is a company you can
                                fully trust.</p>
                            <button class="toggleBtn text-brand-500 text-sm font-medium mt-2 w-fit hover:underline"> Read
                                More </button>
                        </div>
                    </div>
                    <!-- Slide 4 -->
                    <div class="swiper-slide h-auto flex">
                        <!-- Review Card -->
                        <div
                            class="group bg-white rounded-2xl border border-gray-100 shadow-sm transition duration-300 p-6 flex flex-col relative h-full">
                            <div class="absolute top-3 right-5 text-8xl text-gray-100 font-serif select-none">”</div>
                            <div class="flex items-center gap-4 mb-4">
                                <div
                                    class="w-14 h-14 rounded-full bg-brand-50 border border-brand-100 flex items-center justify-center font-bold text-lg text-brand-500">
                                    M</div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">Michael Brown</h4>
                                    <span class="text-sm text-gray-500">Toronto, Canada</span>
                                </div>
                            </div>
                            <div class="flex items-center gap-2 mb-3 text-sm">
                                <span class="text-yellow-400">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </span>
                                <span class="text-gray-500">Verified Review</span>
                            </div>
                            <h3
                                class="text-base md:text-lg font-semibold text-gray-900 mb-1 group-hover:text-brand-500 transition">
                                Beautiful Annapurna Views </h3>
                            <span class="text-xs text-gray-400 uppercase tracking-wide mb-3"> April 21, 2024 </span>
                            <p class="reviewText text-gray-600 leading-relaxed line-clamp-4"> The Annapurna region
                                is stunning and Treklaya made the trek enjoyable and comfortable. The team was friendly and
                                always ready to help. I would highly recommend them to anyone visiting Nepal. </p>
                            <button class="toggleBtn text-brand-500 text-sm font-medium mt-2 w-fit hover:underline"> Read
                                More </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- From Our Blog Section -->
    <section class="py-20 relative">
        <div class="container mx-auto px-4">
            <!-- Section Header -->
            <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-6 mb-14">
                <div class="lg:w-2/3">
                    <h2 class="text-3xl md:text-4xl font-extrabold"> Latest from <span class="text-brand-500 italic">Our
                            Blog</span>
                    </h2>
                    <p class="mt-4 text-gray-600 text-lg max-w-2xl leading-relaxed"> Discover inspiring stories, trekking
                        guides,
                        and travel tips from Nepal. Stay updated with the latest adventures, cultural insights, and hidden
                        destinations across the Himalayas. </p>
                </div>
                <div>
                    <a href="blog.php"
                        class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full
        border border-brand-500/30 bg-brand-500/10 text-brand-600
        text-sm font-semibold hover:bg-brand-500 hover:text-white
        transition-all duration-300">
                        View All <span
                            class="flex items-center justify-center w-7 h-7 rounded-full bg-brand-500 text-white">
                            <i class="fa fa-arrow-right text-xs"></i>
                        </span>
                    </a>
                </div>
            </div>
            <!-- Blog Layout -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
                <!-- Large Featured Card (Left) -->
                <a href="blog-details.php?slug=annapurna-circuit"
                    class="lg:col-span-7 relative group cursor-pointer overflow-hidden rounded-2xl shadow-lg image-anime">
                    <img data-src="assets/trip/8.webp" src="assets/default.jpg" loading="lazy"
                        alt="Himalayan Sunrise Trek"
                        class="lazy-img w-full h-[265px] md:h-[500px] lg:h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-black/30 group-hover:bg-black/60 transition-colors duration-500"></div>
                    <!-- Bottom Overlay -->
                    <div class="absolute inset-0  flex flex-col justify-end p-8 text-white">
                        <h3 class="text-base md:text-xl font-semibold group-hover:text-brand-500 transition">Exploring the
                            Himalayan Sunrise Trek</h3>
                        <p class="text-sm font-medium mt-2 opacity-90"> Mar 12, 2026</p>
                    </div>
                </a>
                <!-- Smaller Cards (Right) -->
                <div class="lg:col-span-5 flex flex-col justify-between gap-8">
                    <!-- Post 1 -->
                    <a href="blog-details.php" class="flex flex-row gap-6 group cursor-pointer">
                        <div class="shrink-0 overflow-hidden rounded-2xl w-48 h-32 shadow-md image-anime">
                            <img data-src="assets/trip/7.webp" src="assets/default.jpg" loading="lazy"
                                alt="Mystic Valley Hike"
                                class="lazy-img w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                        </div>
                        <div class="flex flex-col justify-center">
                            <h4 class="text-base md:text-xl font-semibold group-hover:text-brand-500 transition">5 Hidden
                                Trails in the Mystic Valley</h4>
                            <p class="text-sm text-gray-500 mb-t font-medium"> Mar 5, 2026</p>
                        </div>
                    </a>
                    <!-- Post 2 -->
                    <a href="blog-details.php" class="flex flex-row gap-6 group cursor-pointer">
                        <div class="shrink-0 overflow-hidden rounded-2xl w-48 h-32 shadow-md image-anime">
                            <img data-src="assets/trip/6.webp" src="assets/default.jpg" loading="lazy"
                                alt="Mountain Peaks Adventure"
                                class="lazy-img w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                        </div>
                        <div class="flex flex-col justify-center">
                            <h4 class="text-base md:text-xl font-semibold group-hover:text-brand-500 transition">Top 7
                                Mountain Peaks to Conquer This Year</h4>
                            <p class="text-sm text-gray-500 mt-2 font-medium"> Feb 28, 2026</p>
                        </div>
                    </a>
                    <!-- Post 3 -->
                    <a href="blog-details.php" class="flex flex-row gap-6 group cursor-pointer">
                        <div class="shrink-0 overflow-hidden rounded-2xl w-48 h-32 shadow-md image-anime">
                            <img data-src="assets/trip/5.webp" src="assets/default.jpg" loading="lazy"
                                alt="Snowy Trekking Adventure"
                                class="lazy-img w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                        </div>
                        <div class="flex flex-col justify-center">
                            <h4 class="text-base md:text-xl font-semibold group-hover:text-brand-500 transition">Ultimate
                                Gear Guide for Snowy Treks</h4>
                            <p class="text-sm text-gray-500 mt-2 font-medium"> Feb 25, 2026</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

@stop

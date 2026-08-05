tailwind.config = {

    corePlugins: {
        preflight: false
    },
    theme: {
        extend: {
            colors: {
                brand: {
                    50: "#fff6f1",
                    100: "#ffe8dc",
                    200: "#ffd0b8",
                    300: "#ffb38c",
                    400: "#ff945f",
                    500: "#f77f3c", // base
                    600: "#d2631c",
                    700: "#924312",
                    800: "#6e320d",
                    900: "#4d2208",
                    950: "#2a1204",
                },

                dark: {
                    50: '#FF9999', // lightest
                    100: '#FF6666',
                    200: '#FF3333',
                    300: '#CC0000',
                    400: '#990000',
                    500: '#660000', // base medium
                    600: '#330000',
                    700: '#080000',
                    800: '#050000',
                    900: '#010000', // darkest (original)
                },

            },

            fontFamily: {
                sans: ['Inter', 'sans-serif'],
                heading: ['Outfit', 'sans-serif'],
            },

            keyframes: {
                'slide-down': {
                    '0%': {
                        transform: 'translateY(-100%)'
                    },
                    '100%': {
                        transform: 'translateY(0)'
                    },
                },
            },

            animation: {
                'slide-down': 'slide-down 0.35s ease-out',
            },
        }
    }
}


document.addEventListener("DOMContentLoaded", () => {

    // =========================
    // Navbar: scroll + hover
    // =========================
    const navbar = document.getElementById("desktop-navbar");
    const logo = document.getElementById("navbar-logo");
    if (navbar && navbar.classList.contains("bg-transparent")) {
        const scrollThreshold = 50;
        let isHovered = false;

        const updateNavbar = () => {
            const scrolled = window.scrollY > scrollThreshold || isHovered;
            navbar.classList.toggle("bg-white", scrolled);
            navbar.classList.toggle("text-gray-900", scrolled);
            navbar.classList.toggle("border-gray-100", scrolled);
            navbar.classList.toggle("shadow-sm", scrolled);
            navbar.classList.toggle("bg-transparent", !scrolled);
            navbar.classList.toggle("text-white", !scrolled);
            navbar.classList.toggle("border-transparent", !scrolled);

            //   if (logo) logo.src = scrolled ? "{{assets/logo.png}}" : "assets/logo-white.png";
            if (logo) {
                logo.src = scrolled
                    ? logo.dataset.darkLogo
                    : logo.dataset.whiteLogo;
            }
        };

        window.addEventListener("scroll", updateNavbar);
        navbar.addEventListener("mouseenter", () => { isHovered = true; updateNavbar(); });
        navbar.addEventListener("mouseleave", () => { isHovered = false; updateNavbar(); });

        updateNavbar();
    }
    // =========================
    // Collapsible menu with chevron toggle
    // =========================
    const collapseButtons = document.querySelectorAll("[data-collapse-toggle]");

    collapseButtons.forEach(btn => {
        btn.addEventListener("click", () => {
            const targetId = btn.getAttribute("aria-controls");
            const target = document.getElementById(targetId);
            const icon = btn.querySelector("i");

            if (target) {
                // Toggle hidden class
                target.classList.toggle("hidden");

                // Toggle icon classes
                if (icon) {
                    icon.classList.toggle("fa-chevron-down");
                    icon.classList.toggle("fa-chevron-up");
                }
            }
        });
    });

    // =========================
    // Rating
    // =========================
    const ratingText = document.getElementById("rating-text");
    const ratings = ["", "Poor", "Fair", "Good", "Very Good", "Excellent"];
    document.querySelectorAll('input[name="rating"]').forEach(input => {
        input.addEventListener("change", () => {
            if (ratingText) ratingText.textContent = ratings[input.value];
        });
    });

    // =========================
    // Swiper Initialization Helper
    // =========================
    const initSwiper = (selector, config) => {
        document.querySelectorAll(selector).forEach(container => {
            const section = container.closest("section");
            if (!section) return;
            const nextBtn = section.querySelector(".nextBtn");
            const prevBtn = section.querySelector(".prevBtn");
            if (typeof Swiper !== "undefined") {
                new Swiper(container, {
                    ...config,
                    navigation: { nextEl: nextBtn || null, prevEl: prevBtn || null },
                });
            }
        });
    };

    // Hero Slider
    const heroEl = document.querySelector(".hero");
    if (heroEl && typeof Swiper !== "undefined") {
        const heroSwiper = new Swiper(heroEl, {
            loop: true,
            speed: 600,
            effect: "fade",
            fadeEffect: { crossFade: true },
            autoplay: { delay: 5000, disableOnInteraction: false },
        });
        document.getElementById("custom-next")?.addEventListener("click", () => heroSwiper.slideNext());
        document.getElementById("custom-prev")?.addEventListener("click", () => heroSwiper.slidePrev());
    }

    // Grid, Review, Activity Sliders
    initSwiper(".GridSlider", {
        slidesPerView: 2,
        spaceBetween: 16,
        loop: false,
        speed: 600,
        breakpoints: { 640: { slidesPerView: 2, spaceBetween: 24 }, 768: { slidesPerView: 2, spaceBetween: 24 }, 1024: { slidesPerView: 3, spaceBetween: 24 }, 1280: { slidesPerView: 3, spaceBetween: 24 } },
    });

    initSwiper(".ReviewSlider", {
        slidesPerView: 1,
        spaceBetween: 16,
        loop: false,
        speed: 600,
        breakpoints: { 640: { slidesPerView: 2, spaceBetween: 24 }, 768: { slidesPerView: 2, spaceBetween: 24 }, 1024: { slidesPerView: 2, spaceBetween: 24 }, 1280: { slidesPerView: 2, spaceBetween: 24 } },
    });

    initSwiper(".activity", {
        slidesPerView: 2,
        spaceBetween: 16,
        loop: false,
        speed: 600,
        breakpoints: { 640: { slidesPerView: 2, spaceBetween: 24 }, 768: { slidesPerView: 3, spaceBetween: 24 }, 1024: { slidesPerView: 4, spaceBetween: 24 }, 1280: { slidesPerView: 5, spaceBetween: 24 } },
    });



    // =========================
    // Read More / Read Less
    // =========================
    window.addEventListener("load", () => {
        document.querySelectorAll(".reviewText").forEach(text => {
            const btn = text.nextElementSibling;
            if (text.scrollHeight <= text.clientHeight) btn.style.display = "none";
        });
        document.querySelectorAll(".toggleBtn").forEach(btn => {
            btn.addEventListener("click", () => {
                const text = btn.previousElementSibling;
                text.classList.toggle("line-clamp-4");
                btn.textContent = text.classList.contains("line-clamp-4") ? "Read More" : "Read Less";
            });
        });
    });

    // =========================
    // Lazy Load Images
    // =========================
    const images = document.querySelectorAll("img[data-src]");
    if ("IntersectionObserver" in window) {
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src;
                    img.onload = () => img.classList.add("loaded");
                    observer.unobserve(img);
                }
            });
        });
        images.forEach(img => observer.observe(img));
    } else {
        // fallback for older browsers
        images.forEach(img => { img.src = img.dataset.src; });
    }

    // =========================
    // Fancybox
    // =========================
    if (window.Fancybox) Fancybox.bind("[data-fancybox]", {});

});

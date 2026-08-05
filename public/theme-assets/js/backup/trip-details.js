document.addEventListener("DOMContentLoaded", () => {

 

  // =========================
  // Trip Navigation (Sidebar + Mobile)
  // =========================
  const nav = document.getElementById("secondaryNav");
  const navLinks = nav ? nav.querySelectorAll("a") : [];
  const select = document.getElementById("tripSelect");

  const sections = Array.from(navLinks).map(link =>
    document.querySelector(link.getAttribute("href"))
  );

  navLinks.forEach(link => {
    link.addEventListener("click", e => {
      e.preventDefault();
      const target = document.querySelector(link.getAttribute("href"));
      if (target) window.scrollTo({ top: target.offsetTop - 80, behavior: "smooth" });
    });
  });

  select?.addEventListener("change", e => {
    const target = document.querySelector(e.target.value);
    if (target) window.scrollTo({ top: target.offsetTop, behavior: "smooth" });
  });

  const updateNavActive = () => {
    const scrollY = window.scrollY + 120;
    sections.forEach((section, i) => {
      if (section && section.offsetTop <= scrollY && section.offsetTop + section.offsetHeight > scrollY) {
        navLinks.forEach(l => l.classList.remove("active"));
        navLinks[i]?.classList.add("active");
        if (select) select.value = navLinks[i].getAttribute("href");
      }
    });
  };

  window.addEventListener("scroll", updateNavActive);
  updateNavActive();

  // =========================
  // Bottom Sticky
  // =========================
  const bottomSticky = document.getElementById("bottomSticky");
  const handleBottomSticky = () => {
    if (!bottomSticky) return;
    bottomSticky.classList.toggle("opacity-0", window.scrollY <= 800);
    bottomSticky.classList.toggle("translate-y-full", window.scrollY <= 800);
  };
  window.addEventListener("scroll", handleBottomSticky);
  handleBottomSticky();

  // =========================
  // Accordion Toggle All
  // =========================
  document.querySelectorAll(".accordion-wrapper").forEach(wrapper => {
    const toggleBtn = wrapper.querySelector(".toggle-accordion");
    const accordions = wrapper.querySelectorAll("[data-accordion-target]");
    let expanded = false;

    toggleBtn?.addEventListener("click", () => {
      accordions.forEach(button => {
        const target = wrapper.querySelector(button.getAttribute("data-accordion-target"));
        const icon = button.querySelector("[data-accordion-icon]");
        if (!expanded) {
          target.classList.remove("hidden");
          button.setAttribute("aria-expanded", "true");
          icon?.classList.add("rotate-180");
        } else {
          target.classList.add("hidden");
          button.setAttribute("aria-expanded", "false");
          icon?.classList.remove("rotate-180");
        }
      });
      expanded = !expanded;
      toggleBtn.textContent = expanded ? "Collapse All" : "Expand All";
    });
  });

  // =========================
  // Gallery Slider (Thumb + Main)
  // =========================
  if (typeof Swiper !== "undefined") {
    const thumbs = new Swiper(".thumb-slider", {
      direction: "vertical",
      spaceBetween: 10,
      slidesPerView: 4,
      watchSlidesProgress: true,
      mousewheel: true
    });

    const main = new Swiper(".main-slider", {
      spaceBetween: 10,
      navigation: {
        nextEl: document.querySelector(".nextBtn") || null,
        prevEl: document.querySelector(".prevBtn") || null
      },
      thumbs: { swiper: thumbs }
    });
  }

});
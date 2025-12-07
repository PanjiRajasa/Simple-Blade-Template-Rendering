// Untuk logic front-end dashboard views

// Wait for DOM to be fully loaded
document.addEventListener("DOMContentLoaded", function () {
  // Hide loading overlay after page loads
  setTimeout(function () {
    const loadingOverlay = document.querySelector(".loading-overlay");
    if (loadingOverlay) {
      loadingOverlay.classList.add("fade-out");
    }
  }, 1000);

  // Header Scroll Effect
  window.addEventListener("scroll", function () {
    const header = document.getElementById("header");
    if (window.scrollY > 100) {
      header.classList.add("scrolled");
    } else {
      header.classList.remove("scrolled");
    }
  });

  // Smooth Scrolling for Navigation Links
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
      e.preventDefault();
      const targetId = this.getAttribute("href");
      if (targetId === "#") return;

      const target = document.querySelector(targetId);
      if (target) {
        target.scrollIntoView({
          behavior: "smooth",
          block: "start",
        });
      }
    });
  });

  // Service Cards Hover Effects
  document.querySelectorAll(".service-card").forEach((card) => {
    card.addEventListener("mouseenter", function () {
      this.style.transform = "translateY(-10px) scale(1.02)";
      this.style.boxShadow = "0 25px 50px rgba(0,0,0,0.2)";
    });

    card.addEventListener("mouseleave", function () {
      this.style.transform = "translateY(0) scale(1)";
      this.style.boxShadow = "0 10px 25px rgba(0,0,0,0.1)";
    });
  });

  // Add Parallax Effect to Hero Section
  window.addEventListener("scroll", function () {
    const scrolled = window.pageYOffset;
    const hero = document.querySelector(".hero");
    if (hero) {
      const rate = scrolled * -0.5;
      hero.style.transform = `translateY(${rate}px)`;
    }
  });

  // Add Animation on Scroll for News Cards
  const newsCards = document.querySelectorAll(".news-card");
  const newsObserver = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry, index) => {
        if (entry.isIntersecting) {
          setTimeout(() => {
            entry.target.style.opacity = "1";
            entry.target.style.transform = "translateY(0)";
          }, index * 200);
          newsObserver.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.1 }
  );

  newsCards.forEach((card) => {
    card.style.opacity = "0";
    card.style.transform = "translateY(30px)";
    card.style.transition = "opacity 0.6s ease, transform 0.6s ease";
    newsObserver.observe(card);
  });

  // Mobile Menu Toggle
  const mobileMenuBtn = document.querySelector(".mobile-menu-btn");
  const navMenu = document.querySelector(".nav-menu");

  if (mobileMenuBtn && navMenu) {
    mobileMenuBtn.addEventListener("click", function () {
      navMenu.classList.toggle("active");
      this.innerHTML = navMenu.classList.contains("active")
        ? '<i class="fas fa-times"></i>'
        : '<i class="fas fa-bars"></i>';
    });
  }

  // Add smooth reveal animation for section headers
  const sectionHeaders = document.querySelectorAll(".section-header");
  const headerObserver = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.style.opacity = "1";
          entry.target.style.transform = "translateY(0)";
          headerObserver.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.2 }
  );

  sectionHeaders.forEach((header) => {
    header.style.opacity = "0";
    header.style.transform = "translateY(20px)";
    header.style.transition = "opacity 0.8s ease, transform 0.8s ease";
    headerObserver.observe(header);
  });

  // Add animation to service cards
  const serviceCards = document.querySelectorAll(".service-card");
  const serviceObserver = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry, index) => {
        if (entry.isIntersecting) {
          setTimeout(() => {
            entry.target.style.opacity = "1";
            entry.target.style.transform = "translateY(0)";
          }, index * 150);
          serviceObserver.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.1 }
  );

  serviceCards.forEach((card) => {
    card.style.opacity = "0";
    card.style.transform = "translateY(30px)";
    card.style.transition = "opacity 0.6s ease, transform 0.6s ease";
    serviceObserver.observe(card);
  });

  // SCRIPT UNTUK ACTIVE LINK

  // Ambil semua link navbar
  const navLinks = document.querySelectorAll(".nav-link");

  navLinks.forEach((link) => {
    link.addEventListener("click", () => {
      // Hapus class active dari semua link
      navLinks.forEach((l) => l.classList.remove("active"));

      // Tambahkan class active ke link yang diklik
      link.classList.add("active");
    });
  });
});

//Ga tau punya siapa
document.addEventListener("DOMContentLoaded", function () {
  const logoToggle = document.getElementById("logoToggle");
  const navMenu = document.getElementById("navMenu");
  logoToggle.addEventListener("click", function () {
    if (window.innerWidth <= 900) {
      navMenu.classList.toggle("nav-menu-open");
    }
  });
});

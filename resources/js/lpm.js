// javscript untuk page lpm

// JavaScript untuk menu mobile
document.addEventListener("DOMContentLoaded", function () {
    const mobileMenuBtn = document.getElementById("mobileMenuBtn");
    const navMenu = document.getElementById("navMenu");

    if (mobileMenuBtn) {
        mobileMenuBtn.addEventListener("click", function () {
            navMenu.classList.toggle("active");
        });
    }
});

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

// Untuk logic front-end pemerintahan views

// js/pemerintahan-desa.js
document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu dan dropdown functionality
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const navMenu = document.getElementById('navMenu');
    const dropdownToggles = document.querySelectorAll('.nav-menu > li > a');
    
    // Mobile menu toggle
    if (mobileMenuBtn) {
        mobileMenuBtn.addEventListener('click', function() {
            navMenu.classList.toggle('active');
            this.querySelector('i').classList.toggle('fa-bars');
            this.querySelector('i').classList.toggle('fa-times');
        });
    }

    // Logo click to home
    const logo = document.getElementById('logoToggle');
    if (logo) {
        logo.addEventListener('click', function() {
            window.location.href = '/';
        });
    }

    // Close dropdown ketika klik di luar
    document.addEventListener('click', function(event) {
        if (!event.target.closest('.nav-menu')) {
            document.querySelectorAll('.dropdown-menu.show').forEach(menu => {
                menu.classList.remove('show');
            });
        }
        
        // Close mobile menu ketika klik di luar
        if (!event.target.closest('.nav-container')) {
            navMenu.classList.remove('active');
            if (mobileMenuBtn) {
                mobileMenuBtn.querySelector('i').classList.add('fa-bars');
                mobileMenuBtn.querySelector('i').classList.remove('fa-times');
            }
        }
    });

    // Header scroll effect
    window.addEventListener('scroll', function() {
        const header = document.getElementById('header');
        if (window.scrollY > 100) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });

    // Slider functionality
    const slider = document.getElementById('slider');
    const slides = document.querySelectorAll('.slide');
    const prevBtn = document.getElementById('prev');
    const nextBtn = document.getElementById('next');
    let currentSlide = 0;

    function showSlide(index) {
        // Hide all slides
        slides.forEach(slide => {
            slide.classList.remove('active');
        });
        
        // Show current slide
        slides[index].classList.add('active');
        currentSlide = index;
    }

    // Next slide
    if (nextBtn) {
        nextBtn.addEventListener('click', function() {
            let nextIndex = currentSlide + 1;
            if (nextIndex >= slides.length) {
                nextIndex = 0;
            }
            showSlide(nextIndex);
        });
    }

    // Previous slide
    if (prevBtn) {
        prevBtn.addEventListener('click', function() {
            let prevIndex = currentSlide - 1;
            if (prevIndex < 0) {
                prevIndex = slides.length - 1;
            }
            showSlide(prevIndex);
        });
    }

    // Auto slide (optional)
    let slideInterval = setInterval(() => {
        let nextIndex = currentSlide + 1;
        if (nextIndex >= slides.length) {
            nextIndex = 0;
        }
        showSlide(nextIndex);
    }, 5000);

    // Pause auto slide on hover
    if (slider) {
        slider.addEventListener('mouseenter', function() {
            clearInterval(slideInterval);
        });

        slider.addEventListener('mouseleave', function() {
            slideInterval = setInterval(() => {
                let nextIndex = currentSlide + 1;
                if (nextIndex >= slides.length) {
                    nextIndex = 0;
                }
                showSlide(nextIndex);
            }, 5000);
        });
    }

    // Initialize first slide
    showSlide(0);
});
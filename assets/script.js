AOS.init({
    duration: 1000,
    once: true,
    offset: 100
});

// WhatsApp Function
function openWhatsApp() {
    const phone = '919892117648';
    const message = 'Hello DHRUV VENTURES, I am interested in your products. Please provide more information.';
    const url = `https://wa.me/${phone}?text=${encodeURIComponent(message)}`;
    window.open(url, '_blank');
}

// Smooth Scroll
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// Form Submission
document.getElementById('contactForm').addEventListener('submit', function (e) {
    e.preventDefault();
    alert('Thank you for your message! We will contact you soon.');
    this.reset();
});

// Active Navigation
window.addEventListener('scroll', function () {
    let current = '';
    const sections = document.querySelectorAll('section');

    sections.forEach(section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.clientHeight;
        if (pageYOffset >= (sectionTop - 200)) {
            current = section.getAttribute('id');
        }
    });

    document.querySelectorAll('.nav-link').forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href') === `#${current}`) {
            link.classList.add('active');
        }
    });
});

// Mobile Mega Menu Toggle
document.addEventListener('DOMContentLoaded', function () {
    const dropdownToggle = document.querySelector('.dropdown-toggle');
    const dropdown = document.querySelector('.nav-item.dropdown');

    if (window.innerWidth <= 991) {
        dropdownToggle.addEventListener('click', function (e) {
            e.preventDefault();
            dropdown.classList.toggle('show');
        });
    }

    // Close mega menu when clicking outside
    document.addEventListener('click', function (e) {
        if (!dropdown.contains(e.target)) {
            dropdown.classList.remove('show');
        }
    });
});

// Handle window resize
window.addEventListener('resize', function () {
    const dropdown = document.querySelector('.nav-item.dropdown');
    if (window.innerWidth > 991) {
        dropdown.classList.remove('show');
    }
});


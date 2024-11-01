
function toggleNavbar() {
    const mobileMenu = document.getElementById('mobile-menu');
    mobileMenu.classList.toggle('show');
}

document.getElementById('theme-toggle').onclick = function() {
    document.body.classList.toggle('dark-theme');

    // Toggle icons visibility
    const sunIcon = document.getElementById('sun-icon');
    const moonIcon = document.getElementById('moon-icon');

    if (document.body.classList.contains('dark-theme')) {
        sunIcon.style.display = 'none';
        moonIcon.style.display = 'inline';
    } else {
        sunIcon.style.display = 'inline';
        moonIcon.style.display = 'none';
    }
};

// bubbles


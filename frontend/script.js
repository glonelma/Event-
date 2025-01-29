// Responsiveness
document.getElementById('menu-toggle').addEventListener('click', function() {
    const navbar = document.getElementById('navbar');
    navbar.classList.toggle('active');
});

// Making pages active
document.addEventListener('DOMContentLoaded', function () {
    // Get current page URL
    const currentPage = window.location.pathname.split('/').pop();

    // Get all nav links
    const navLinks = document.querySelectorAll('.navbar a');

    // Loop through nav links and add 'active' class to the current page link
    navLinks.forEach(link => {
        if (link.getAttribute('href') === currentPage) {
            link.classList.add('active');
        }
    });
});




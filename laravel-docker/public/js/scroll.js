window.addEventListener('scroll', function() {
    var navbar = document.querySelector('.navbar');
    var heroSection = document.querySelector('.hero-section');
    
    // Ensure heroSection is defined and heroHeight is correctly measured
    if (heroSection) {
        var heroHeight = heroSection.getBoundingClientRect().height; // Accurate measurement of hero section height
        
        // Check scroll position with a slight buffer (10px) after hero section
        if (window.scrollY > heroHeight + 10) {
            navbar.classList.add('scrolled'); // Turn solid after hero section
        } else {
            navbar.classList.remove('scrolled'); // Keep transparent within hero section
        }
    }
});
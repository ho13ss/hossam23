// Add this JavaScript code to your scroll.js file
document.addEventListener('DOMContentLoaded', function() {
    const textElements = document.querySelectorAll('.text-reveal');

    function checkElementsInView() {
        textElements.forEach((element) => {
            const elementTop = element.getBoundingClientRect().top;
            if (elementTop < window.innerHeight * 0.8) {
                element.classList.add('visible');
            }
        });
    }

    // Initial check when the page loads
    checkElementsInView();

    // Check when scrolling
    window.addEventListener('scroll', checkElementsInView);
});

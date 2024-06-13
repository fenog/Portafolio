document.addEventListener("DOMContentLoaded", function () {
    const links = document.querySelectorAll('nav a');

    links.forEach(link => {
        link.addEventListener('click', smoothScroll);
    });

    function smoothScroll(e) {
        e.preventDefault();

        const targetId = this.getAttribute('href').substring(1);
        const targetElement = document.getElementById(targetId);

        window.scrollTo({
            top: targetElement.offsetTop - 50,
            behavior: 'smooth'
        });
    }

    const screenshots = document.querySelectorAll('.screenshots img');

    screenshots.forEach(img => {
        img.addEventListener('click', changeImage);
    });

    function changeImage() {
        const currentImage = document.querySelector('.hero img');
        currentImage.src = this.src;
    }
});

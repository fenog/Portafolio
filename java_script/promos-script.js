var swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    canteredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
        rotate: 15,
        strech: 0,
        depth: 300,
        modifier: 1,
        slideShadows: true,
    },
    loop:true,
});
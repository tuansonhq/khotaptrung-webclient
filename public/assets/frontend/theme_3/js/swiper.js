var product_list = new Swiper('.list-product', {
    autoplay: false,
    updateOnImagesReady: true,
    watchSlidesVisibility: false,
    lazyLoadingInPrevNext: false,
    lazyLoadingOnTransitionStart: false,
    loop: false,
    centeredSlides: false,
    slidesPerView: 4,
    speed: 800,
    spaceBetween: 20,

    touchMove: true,
    freeModeSticky:true,
    grabCursor: true,
    observer: true,
    observeParents: true,
    keyboard: {
        enabled: true,
    },
    breakpoints: {

        992: {
            slidesPerView: 3,
        },


        480: {
            slidesPerView: 2.4,

        }
    }
});

var swiper = new Swiper('.mySwiper', {


    navigation: {
        nextEl: '.slider .swiper-button-next',
        prevEl: '.slider .swiper-button-prev',
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    // autoplay: {
    //     delay: 5000,
    //     disableOnInteraction: false,
    //     autoplaySpeed: 5000,
    //
    // },
    autoplay: true,
    // preloadImages: false,
    updateOnImagesReady: true,
    // lazyLoading: false,
    watchSlidesVisibility: false,
    lazyLoadingInPrevNext: false,
    lazyLoadingOnTransitionStart: false,

    watchSlidesProgress: true,
    //
    lazy: true,
    lazy: {
        loadPrevNext: true,
    },
    loop: true,
    centeredSlides: true,
    slidesPerView: 'auto',
    speed: 800,
    // autoplay: false,
    // parallax: true,
    touchMove: true,
    freeModeSticky:true,
    grabCursor: true,
    slideToClickedSlide: true,

    observer: true,
    observeParents: true,
    breakpoints: {
        // 1460: {
        //     coverflowEffect: {
        //         rotate: 0   ,
        //         stretch: 476,
        //         depth: 300,
        //         modifier: 1, // 2,3
        //         slideShadows : false,
        //     },
        // },
        // 1220: {
        //     coverflowEffect: {
        //         rotate: 0   ,
        //         stretch: 180,
        //         depth: 300,
        //         modifier: 1, // 2,3
        //         slideShadows : false,
        //
        //     },
        // },
        // 1024: {
        //     coverflowEffect: {
        //         rotate: 0   ,
        //         stretch: 180,
        //         depth: 300,
        //         modifier: 1, // 2,3
        //         slideShadows : false,
        //
        //     },
        // },
        //
        //
        // 480: {
        //     effect: 'fade in',
        //     coverflowEffect:false,
        //     touchMove: true,
        //     speed: 500,
        //     navigation: true,
        //
        // }
    }
});



var swiper2 = new Swiper('.item_play_dif_slide_detail', {


    navigation: {
        nextEl: '.item_play_dif_slide .swiper-button-next',
        prevEl: '.item_play_dif_slide .swiper-button-prev',
    },
    // autoplay: {
    //     delay: 5000,
    //     disableOnInteraction: false,
    //     autoplaySpeed: 5000,
    //
    // },
    autoplay: true,
    // preloadImages: false,
    updateOnImagesReady: true,
    // lazyLoading: false,
    watchSlidesVisibility: false,
    lazyLoadingInPrevNext: false,
    lazyLoadingOnTransitionStart: false,

    // watchSlidesProgress: true,
    //
    lazy: true,
    lazy: {
        loadPrevNext: true,
    },
    loop: true,
    centeredSlides: false,
    slidesPerView: 4,
    speed: 800,
    spaceBetween: 12,


    // autoplay: false,
    // parallax: true,
    touchMove: true,
    freeModeSticky:true,
    grabCursor: true,
    slideToClickedSlide: true,

    observer: true,
    observeParents: true,
    breakpoints: {
        // 1460: {
        //     coverflowEffect: {
        //         rotate: 0   ,
        //         stretch: 476,
        //         depth: 300,
        //         modifier: 1, // 2,3
        //         slideShadows : false,
        //     },
        // },
        // 1220: {
        //     coverflowEffect: {
        //         rotate: 0   ,
        //         stretch: 180,
        //         depth: 300,
        //         modifier: 1, // 2,3
        //         slideShadows : false,
        //
        //     },
        // },
        992: {
            slidesPerView: 3,
        },


        480: {
            slidesPerView: 2,

        }
    }
});



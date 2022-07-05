
var intro_list = new Swiper('.list-intro', {
    autoplay: false,

    updateOnImagesReady: true,
    watchSlidesVisibility: false,
    lazyLoadingInPrevNext: false,
    lazyLoadingOnTransitionStart: false,
    loop: false,
    centeredSlides: false,
    slidesPerView: 4,
    speed: 800,
    spaceBetween: 56,
    freeMode: true,
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
            slidesPerView: 1.5,

        }
    }
});
var news_list = new Swiper('.list-article', {
    autoplay: false,

    updateOnImagesReady: true,
    watchSlidesVisibility: false,
    lazyLoadingInPrevNext: false,
    lazyLoadingOnTransitionStart: false,
    loop: false,
    centeredSlides: false,
    slidesPerView: 6,
    speed: 800,
    spaceBetween: 20,
    freeMode: true,
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
        768: {
            slidesPerView: 3,
        },

        480: {
            slidesPerView: 1.8,
            spaceBetween: 6,
        }
    }
});
var news_list_home = new Swiper('.list-news', {
    autoplay: false,

    updateOnImagesReady: true,
    watchSlidesVisibility: false,
    lazyLoadingInPrevNext: false,
    lazyLoadingOnTransitionStart: false,
    loop: false,
    centeredSlides: false,
    slidesPerView: 6,
    speed: 800,
    spaceBetween: 20,
    freeMode: true,
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
        768: {
            slidesPerView: 3,
        },

        480: {
            slidesPerView: 1.8,
            spaceBetween: 6,
        }
    }
});
var other_nick_list = new Swiper('.list-other-nick', {
    autoplay: false,
    updateOnImagesReady: true,
    watchSlidesVisibility: false,
    lazyLoadingInPrevNext: false,
    lazyLoadingOnTransitionStart: false,
    loop: false,
    centeredSlides: false,
    slidesPerView: 4,
    speed: 800,
    spaceBetween: 6,
    freeMode: true,
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
            slidesPerView: 1.8,
        },
        768: {
            slidesPerView: 2.4,
        },


        480: {
            slidesPerView: 1.8,

        }
    }
});

var minigame_list = new Swiper('.minigame-swiper', {
    autoplay: false,
    updateOnImagesReady: true,
    watchSlidesVisibility: false,
    lazyLoadingInPrevNext: false,
    lazyLoadingOnTransitionStart: false,
    loop: false,
    centeredSlides: false,
    slidesPerView: 1.8,
    speed: 800,
    spaceBetween: 8,
    freeMode: true,
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
            slidesPerView: 2.2,

        }
    }
});
var product_list = new Swiper('.list-product', {
    autoplay: false,
    updateOnImagesReady: true,
    watchSlidesVisibility: false,
    lazyLoadingInPrevNext: false,
    lazyLoadingOnTransitionStart: false,
    loop: false,
    centeredSlides: false,
    slidesPerView: 4,

    speed: 2000,
    spaceBetween: 20,
    freeMode: true,
    velocityRatio: 20,
    touchMove: true,
    freeModeSticky:true,
    grabCursor: true,
    
    keyboard: {
        enabled: true,
    },
    breakpoints: {
        1024: {
            slidesPerView: 3.2,
        },
        992: {
            slidesPerView: 3.6,
        },

        768: {
            slidesPerView: 2.4,
        },
        480: {
            slidesPerView: 1.8,
            spaceBetween: 6,
        }
    }
});

var related_service_list = new Swiper('.banner-home-slider', {
    slidesPerView: 1,
    autoplay: true,
    speed: 500,
    spaceBetween: 5,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true
    },
});

var related_service_list = new Swiper('.list-related-service', {
    autoplay: false,
    updateOnImagesReady: true,
    watchSlidesVisibility: false,
    lazyLoadingInPrevNext: false,
    lazyLoadingOnTransitionStart: false,
    loop: false,
    centeredSlides: false,
    slidesPerView: 5,

    speed: 2000,
    spaceBetween: 16,
    freeMode: true,
    velocityRatio: 20,
    touchMove: true,
    freeModeSticky:true,
    grabCursor: true,
    observer: true,
    observeParents: true,
    keyboard: {
        enabled: true,
    },
    breakpoints: {
        1024: {
            slidesPerView: 3.2,
        },
        992: {
            slidesPerView: 3.6,
        },

        768: {
            slidesPerView: 2.4,
        },
        480: {
            slidesPerView: 1.8,
            spaceBetween: 6,
        }
    }
});


var minigame = new Swiper('.list-minigame', {
    autoplay: false,
    navigation: {
        nextEl: '.minigame-button-swiper .swiper-button-next',
        prevEl: '.minigame-button-swiper .swiper-button-prev',
    },

    updateOnImagesReady: true,
    watchSlidesVisibility: false,
    lazyLoadingInPrevNext: false,
    lazyLoadingOnTransitionStart: false,
    loop: false,
    centeredSlides: false,
    speed: 800,
    allowTouchMove: false,
    spaceBetween: 10,
    touchMove: false,
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
            slidesPerView: 1.5,

        }
    }
});

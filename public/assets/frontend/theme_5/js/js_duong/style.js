/* js quantity */
$('input.input--amount').on('input',function () {
    if ($(this).val() > 20){
        $(this).val(20);
    }
})

$('.js-amount').on('click', function () {
    let input = $(this).parent().find('input.input--amount');
    let value = input.val();
    if ($(this).data('action') === 'add') {
        input.val(++value);
    }
    if ($(this).data('action') === 'minus' && value > 1) {
        input.val(--value);
    }
    if (input.val() > 20) {
        input.val(20)
    }
});

/*js swiper about us*/
var list_about = new Swiper('.list-intro', {
    autoplay: false,
    updateOnImagesReady: true,
    watchSlidesVisibility: false,
    lazyLoadingInPrevNext: false,
    lazyLoadingOnTransitionStart: false,
    loop: false,
    centeredSlides: false,
    slidesPerView: 4,
    speed: 800,
    spaceBetween: 16,
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


/*js swiper detail article*/
var list_relate = new Swiper('.article--slider__news', {
    autoplay: false,
    updateOnImagesReady: true,
    watchSlidesVisibility: false,
    lazyLoadingInPrevNext: false,
    lazyLoadingOnTransitionStart: false,
    loop: false,
    centeredSlides: false,
    slidesPerView: 5,
    speed: 800,
    spaceBetween: 16,
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

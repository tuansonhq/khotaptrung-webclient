// only allow numeric input
$('input[numberic]').on('keypress', function (e) {
    if (isNaN(this.value + String.fromCharCode(e.keyCode))) return false;
});

// Tăng giảm số lượng mua thẻ
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

    $('input[name=card-amount]').trigger('input');
});

// see more desc service
$('.js-toggle-content').click(function () {
    handleToggleContent();
});

$('.card--body .card--desc__content').on('dblclick',function () {
    handleToggleContent()
});
// ondblclick on mobile
if ($(window).width() < 1200) {
    var touchtime = 0;
    $(".card--body .card--desc__content").on("click", function() {
        if (touchtime == 0) {
            // set first click
            touchtime = new Date().getTime();
        } else {
            // compare first click to this click and see if they occurred within double click threshold
            if (((new Date().getTime()) - touchtime) < 800) {
                // double click occurred
                handleToggleContent();
                touchtime = 0;
            } else {
                // not a double click so set as a new first click
                touchtime = new Date().getTime();
            }
        }
    });
}
function handleToggleContent(){
    $('.js-toggle-content .view-less').toggle();
    $('.js-toggle-content .view-more').toggle();
    let card_desc = $('.card--desc__content');
    card_desc.toggleClass('content-video-in-add');
    if ($('.view-less').is(":visible")) {
        let initialHeight = card_desc.css('max-height', 'initial').height();
        card_desc.animate({maxHeight: initialHeight + 16},250)
    } else {
        card_desc.animate({maxHeight: 280},250)
    }
}

// Coppy text vào bộ nhớ
$('.js-copy-text').on('click', function () {
    let text_value = $(this).parent().find('.card__info').text().trim();
    navigator.clipboard.writeText(text_value);
});

// Next step
let step_1 = $('#screen--first');
let step_2 = $('.mobile--confirm__payment');
let step_3 = $('.mobile--success__payment');

if ($(window).width() < 1200) {
    $('.js_step').on('click', function (e) {
        // chặn tất cả những sự kiện ( modal ... )
        e.stopPropagation();
        e.preventDefault();
        handleToggleStep($(this).data('go_to'));
    });
    function handleToggleStep(step) {
        step_1.hide();
        step_2.hide();
        step_3.hide();
        switch (step) {
            case 'step1':
                step_1.show();
                break;
            case 'step2':
                step_2.show();
                break;
            case 'step3':
                step_3.show();
                break;
        }
    }
}

tippy('.js-copy-text', {
    // default
    trigger: 'click',
    content: "Đã coppy !",
    placement: 'right',
});


// option swiper card
let slider_count = 1;
if ($('.slider--card .swiper-wrapper').children().length > 1) {
    slider_count = 1.25;
}

// option swiper article banner
var swiper_article= new Swiper(".article--slider", {
    autoplay: {
        disableOnInteraction: false,
        delay:3000
    },
    speed:500,
    pagination: {
        el: ".swiper-pagination.--custom",
        clickable: true
    },
    loop:true,
});

// option swiper article article
var swiper_article_banner = new Swiper(".article--slider__news", {
    spaceBetween: 16,
    slidesPerView:4,
    allowTouchMove: false,
    breakpoints: {
        1190: {
            slidesPerView: 2.25,
            allowTouchMove: true,
        }
    },
});

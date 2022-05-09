$(document).ready(function () {

    var slug = $('.slug').val();

    $(function(){
        var slider = new Swiper ('.gallery-slider', {
            autoplay: {
                delay: 2000,

            },

            slidesPerView: 1,
            centeredSlides: true,
            loop: false,
            loopedSlides: 6, //スライドの枚数と同じ値を指定
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });

        var thumbs = new Swiper ('.gallery-thumbs', {
            slidesPerView: 5,
            spaceBetween: 2, //スライドの枚数と同じ値を指定
            centeredSlides: false,
            loop: false,
            slideToClickedSlide: true,
        });

        slider.controller.control = thumbs;
        thumbs.controller.control = slider;
    });

    getShowAccDetail(slug)


    function getShowAccDetail(slug) {

        var url = '/acc/'+ slug + '/showacc';
        request = $.ajax({
            type: 'GET',
            url: url,
            data: {
                // id:id
            },
            beforeSend: function (xhr) {

            },
            success: (data) => {
                if (data.status == 1){
                    $('#showdetailacc').html('');
                    $('#showdetailacc').html(data.data);

                    $('#showslideracc').html('');
                    $('#showslideracc').html(data.dataslider);
                }
                console.log(data)
            },
            error: function (data) {

            },
            complete: function (data) {

            }
        });
    }
})

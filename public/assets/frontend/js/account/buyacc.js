$(document).ready(function () {

    $(document).on('click', '.buyacc',function(e){
        e.preventDefault();
        var id = $(this).data("id");
        // console.log(slug + slug_category);
        getBuyAcc(id)
    });

    function getBuyAcc(id) {
        request = $.ajax({
            type: 'GET',
            url: '/buy-acc/' + id + '/databuy',
            data: {
                // id:id
            },
            beforeSend: function (xhr) {

            },
            success: (data) => {
                console.log("Thành công")

                $('#LoadModal').modal('toggle');
                $('.modal-content').html(data.data);
            },
            error: function (data) {

            },
            complete: function (data) {

            }
        });
    }

    $(function(){
        var slider = new Swiper ('.gallery-slider', {
            autoplay: {
                delay: 2000,

            },

            slidesPerView: 1,
            centeredSlides: true,
            loop: true,
            loopedSlides: 6, //スライドの枚数と同じ値を指定
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });

        var thumbs = new Swiper ('.gallery-thumbs', {
            slidesPerView: 5,
            spaceBetween: 2, //スライドの枚数と同じ値を指定
            centeredSlides: true,
            loop: true,
            slideToClickedSlide: true,
        });

        slider.controller.control = thumbs;
        thumbs.controller.control = slider;
    });
});

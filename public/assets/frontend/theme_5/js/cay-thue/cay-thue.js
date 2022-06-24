$(document).ready(function (e) {
    function handleToggleContent(){
        $('.js-toggle-content .view-less').toggle();
        $('.js-toggle-content .view-more').toggle();
        if ($('.view-less').is(":visible")) {

            $('.content-video-in').css('max-height', 'initial')
            $('.content-video-in').removeClass('content-video-in-add')

        } else {
            $('.content-video-in').addClass('content-video-in-add')
            $('.content-video-in::after').show()
            $('.content-video-in').css('max-height', '')
        }
    }

    $('.js-toggle-content').click(function () {
        handleToggleContent();
    });
})





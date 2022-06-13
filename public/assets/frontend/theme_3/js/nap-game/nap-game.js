$(document).ready(function (e) {

    $('.view-more').click(function(){
        $('.view-less').css("display","block");
        $('.view-more').css("display","none");
        $(".footer-row-ct .content-video-in").addClass( "showtext" );
    });

    $('.view-less').click(function(){
        $('.view-more').css("display","block");
        $('.view-less').css("display","none");
        $(".footer-row-ct .content-video-in").removeClass( "showtext");
    });

})


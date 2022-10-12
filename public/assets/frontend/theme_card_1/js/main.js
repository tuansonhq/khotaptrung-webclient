$(document).ready(function () {
    $(".shownewx").click(function () {
        $(".showmore").css("right", "-27px");
        $(".bg_gra").fadeIn("slow");
    });
    $(".close_nav").click(function () {
        $(".showmore").css("right", "-110vw");
        $(".bg_gra").fadeOut("slow");
    });
    $(".menu li.m1").hover(function () {
        $(this).find(".mini_menu").addClass("show");
    }, function () {
        $(this).find(".mini_menu").removeClass("show");
    });
});

$(window).scroll(function() {
    if ($(this).scrollTop()) {
        $('.c-layout-header-fixed').removeClass('fixtop');
        $('.c-layout-header-fixed').addClass('fixscroll');
        $("#btn-back-to-top").show();
    } else {
        $('.c-layout-header-fixed').removeClass('fixscroll');
        $('.c-layout-header-fixed').addClass('fixtop');
        $("#btn-back-to-top").hide();
    }
});
$("#btn-back-to-top").click(function(){
    document.body.scrollIntoView({behavior: 'smooth', block: 'start'});
});
$(function () {
    var url = window.location.href;
    $("#navbar-main li").removeClass("active");
    $("#navbar-main a").each(function () {
        if (url == (this.href)) {
            $(this).closest("a").addClass("active");
            $(this).closest("li").parents('li').addClass("active");
        }
    });
});
$(document).ready(function () {
    $('.load-modal').each(function (index, elem) {
        $(elem).unbind().click(function (e) {
            e.preventDefault();
            var curModal = $('#LoadModal');
            curModal.find('.modal-content').html("<div class=\"loader\" style=\"text-align: center\"><i class=\"fas fa-spinner fa-spin\" style='font-size: 30px'></i></div>");
            curModal.modal('show').find('.modal-content').load($(elem).attr('rel'));
        });
    });
});

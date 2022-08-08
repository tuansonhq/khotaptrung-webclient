$(document).ready(function () {
    // $(document).on('scroll',function(){
    //
    //     if ($(this).scrollTop() > 180) {
    //
    //         $('.box-menu').addClass("menu-fix");
    //         $('.box-menu-bar').fadeOut(200);
    //
    //     } else {
    //         $('.box-menu').removeClass("menu-fix");
    //         $('.box-menu-bar').fadeIn(200);
    //     }
    // });
    // $('.refresh-captcha').click(function () {
    //     $('.refresh-captcha img').toggleClass("down");
    // });
    var user = function() {
        $('.box-account-open').click(function(e) {
            // e.preventDefault(); // stops link from making page jump to the top
            let login_content = $('.box-account-logined');
            e.stopPropagation();
            login_content.click(function (e) {
                e.stopPropagation();
            });
            // Okee rồi nhé anh Nam ^^
            login_content.fadeToggle(200);


        });


        $('body').click( function() {
            $('.box-account-logined').fadeOut(200);
        });
        $('.close-login-popup').click( function() {
            $('.box-account-logined').fadeOut(200);
        });
        $('.nav-bar-info-search').click( function() {
            $('.user-logined-content').hide();
        });

    }
    $(document).ready(user);




    $(document).ready(function(){
        var previousScroll = 0;

        $(window).scroll(function(){
            var currentScroll = $(this).scrollTop();
            if (currentScroll > 80 && currentScroll < $(document).height() - $(window).height()){
                if (currentScroll >= previousScroll){
                    window.setTimeout(hideNav, 100);
                } else {
                    window.setTimeout(showNav, 100);
                }
                previousScroll = currentScroll;
            }else{
                window.setTimeout(hideNav, 100);
            }
        });
        function hideNav() {
            $('.box-menu').removeClass("menu-fix");
            $('.box-menu-bar').fadeIn(200);
            $('.rotation-leaderboard').css('top', '80px');
        }
        function showNav() {
            $('.box-menu').addClass("menu-fix");
            $('.box-menu-bar').fadeOut(200);
            $('.rotation-leaderboard').css('top', '140px');

        }

    });
});


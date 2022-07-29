$(document).ready(function () {
    $(document).on('scroll',function(){
        if ($(this).scrollTop() > 180) {
            $('.rotation-leaderboard').css('top', '140px');
        } else {
            $('.rotation-leaderboard').css('top', '64px');
        }
    });
});



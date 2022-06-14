//Toggle hamburger bar
// $('.item-search-mobile').click( function(){
//     $('.layout').addClass('search-active');
//     $('.input-search').focus();
// });

var openHamburgerBar = false;
$('.open-hamburger-sidebar').click(function (e) {
    if (!openHamburgerBar) {
        e.preventDefault();
        $('.menu-category-mobile').addClass('menu-category-mobile_show');
        $('.open-hamburger-sidebar').css('display', 'none');
        $('.close-hamburger-sidebar').css('display', 'flex');
        openHamburgerBar = true;
    }
});
$('.close-hamburger-sidebar').click(function (e) {
    if (openHamburgerBar) {
        e.preventDefault();
        $('.menu-category-mobile').removeClass('menu-category-mobile_show');
        $('.open-hamburger-sidebar').css('display', 'flex');
        $('.close-hamburger-sidebar').css('display', 'none');
        openHamburgerBar = false;
    }
});
var searchBar = false;
$('.item-search-mobile').click(function (e) {
    if (!searchBar) {
        e.preventDefault();
        $('.search-active').fadeToggle(100);
        $('.input-search').focus();
        openHamburgerBar = true;
    }
});

$('.icon-search-close').click(function (e) {
    if (openHamburgerBar) {
        e.preventDefault();
        $('.search-active').fadeOut(100);
        openHamburgerBar = false;
    }
});

var user = function() {
    $('.box-account-logined').click(function(e) {
        // e.preventDefault(); // stops link from making page jump to the top
        let login_content = $('.account-logined-content');
        login_content.click(function (e) {
            e.stopPropagation();
        });
        // Okee rồi nhé anh Nam ^^
        login_content.fadeToggle(200);
        $(".notification-menu").hide();
        $('#myPopover10d').hide();
    });


    $('body').click( function() {
        $('.account-logined-content').hide();
    });
    $('.notification img').click( function() {
        $('.user-logined-content').hide();
    });
    $('.nav-bar-info-search').click( function() {
        $('.user-logined-content').hide();
    });

}
$(document).ready(user);
$(document).ready(function (e) {
    $('.select-form').niceSelect();


    var countDownDateHome = new Date("June 14, 2022 18:00:00").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get todays date and time
        var now = new Date().getTime();

        // Find the distance between now an the count down date
        var distance = countDownDateHome - now;

        // Time calculations for days, hours, minutes and seconds
        var hours = Math.floor((distance / (1000 * 60 * 60)));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element
        $('#hourHome').text(hours);
        $('#minuteHome').text(minutes);
        $('#secondHome').text(seconds);


        // If the count down is finished, write some text
        if (distance < 0) {
            clearInterval(x);
            $('#hourHome').text('0');
            $('#minuteHome').text('0');
            $('#secondHome').text('0');
        }
    }, 1000);
});



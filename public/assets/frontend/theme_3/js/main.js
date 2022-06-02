//Toggle hamburger bar
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

function openLoginModal(){
    let width = $(window).width();
    setTimeout(function(){
        if ( width > 1200 ) {
            $('#loginModal').modal('show');
            setTimeout(() => {
                $('#loginModal #modal-login-container').removeClass('right-panel-active');
            }, 200);
        } else {
            $('.mobile-auth').toggleClass('mobile-auth-show');
            $('.menu-category-mobile').removeClass('menu-category-mobile_show');
        }
    }, 0);
}
function openRegisterModal(){
    setTimeout(function(){
        $('#loginModal').modal('show');
        setTimeout(() => {
            $('#loginModal #modal-login-container').addClass('right-panel-active');
        }, 200);
    }, 0);
}

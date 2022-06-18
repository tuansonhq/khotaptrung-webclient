$(document).ready(function (e) {

    var current_fs, next_fs, previous_fs; //fieldsets
    var left, opacity, scale; //fieldset properties which we will animate
    var animating; //flag to prevent quick multi-click glitches

    var product_list = new Swiper('.list-nap-game', {
        autoplay: false,
        // preloadImages: false,
        updateOnImagesReady: true,
        // lazyLoading: false,
        watchSlidesVisibility: false,
        lazyLoadingInPrevNext: false,
        lazyLoadingOnTransitionStart: false,

        loop: false,
        centeredSlides: false,
        slidesPerView: 8,
        speed: 800,
        spaceBetween: 8,
        touchMove: true,
        freeModeSticky:true,
        grabCursor: true,
        observer: true,
        observeParents: true,
        breakpoints: {
            992: {
                slidesPerView: 6,
            },
            768:{
                slidesPerView: 4,
            },
            480: {
                slidesPerView: 3.5,

            }
        }
    });

    // Click event of the showPassword button
    $('.show-btn-password').on('click', function(){

        // Get the password field
        var passwordField = $('#password');

        // Get the current type of the password field will be password or text
        var passwordFieldType = passwordField.attr('type');

        // Check to see if the type is a password field
        if(passwordFieldType == 'password')
        {
            // Change the password field to text
            passwordField.attr('type', 'text');

            var htmlpass = '';
            htmlpass += '<img class="lazy" src="/assets/theme_3/image/images_1/eye-show.svg" alt="">';
            $('.show-btn-password').html('');
            $('.show-btn-password').html(htmlpass);

            // Change the Text on the show password button to Hide
            $(this).val('Hide');
        } else {
            var htmlpass = '';
            htmlpass += '<img class="lazy" src="/assets/theme_3/image/images_1/eye-hide.svg" alt="">';
            $('.show-btn-password').html('');
            $('.show-btn-password').html(htmlpass);

            // If the password field type is not a password field then set it to password
            passwordField.attr('type', 'password');

            // Change the value of the show password button to Show
            $(this).val('Show');
        }
    });

    $('.show-btn-password-mobile').on('click', function(){

        // Get the password field
        var passwordField = $('#password-mobile');

        // Get the current type of the password field will be password or text
        var passwordFieldType = passwordField.attr('type');

        // Check to see if the type is a password field
        if(passwordFieldType == 'password')
        {
            // Change the password field to text
            passwordField.attr('type', 'text');

            var htmlpass = '';
            htmlpass += '<img class="lazy" src="/assets/theme_3/image/cay-thue/eyeshow.png" alt="">';
            $('.show-btn-password-mobile').html('');
            $('.show-btn-password-mobile').html(htmlpass);

            // Change the Text on the show password button to Hide
            $(this).val('Hide');
        } else {
            var htmlpass = '';
            htmlpass += '<img class="lazy" src="/assets/theme_3/image/cay-thue/eyehide.png" alt="">';
            $('.show-btn-password-mobile').html('');
            $('.show-btn-password-mobile').html(htmlpass);

            // If the password field type is not a password field then set it to password
            passwordField.attr('type', 'password');

            // Change the value of the show password button to Show
            $(this).val('Show');
        }
    });

    $('.openSuccess').on('click', function(){
        $('#successModal').modal('show');
    })

    // $('#successModal').modal('show');
    $('.wide').niceSelect();


    tippy('.checkbox-info-ct', {
        // default
        placement: 'top',
        arrow: true,
        animation: 'fade',
        theme: 'light',
        // content: $(this).data('name'),
    });

    tippy('.option-info-ct', {
        // default
        placement: 'top',
        arrow: true,
        animation: 'fade',
        theme: 'light',
        content: "Đã copy!",
    });

    //    Step

    $('body').on('click','.button-next-step-one',function(){
        if (animating) return false;
        animating = true;

        // current_fs = $('#mobile-caythue .input-next-step-one').parent();
        // next_fs = $('#mobile-caythue .input-next-step-one').parent().next();

        current_fs = $('#fieldset-one');
        next_fs = $('#fieldset-two');
        //show the next fieldset
        next_fs.show();
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function (now, mx) {
                left = (now * 50) + "%";
                opacity = 1 - now;
                next_fs.css({'left': left, 'opacity': opacity});
            },
            complete: function () {
                current_fs.hide();
                animating = false;
            },
            easing: 'easeInOutBack'
        });
    })

    $('body').on('click','.previous-step-one',function(){

        if(animating) return false;
        animating = true;

        current_fs = $('#fieldset-two');
        previous_fs = $('#fieldset-one');

        //show the previous fieldset
        previous_fs.show();
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now, mx) {
                //1. scale previous_fs from 80% to 100%
                scale = 0.8 + (1 - now) * 0.2;
                //2. take current_fs to the right(50%) - from 0%
                left = ((1-now) * 50)+"%";
                //3. increase opacity of previous_fs to 1 as it moves in
                opacity = 1 - now;
                current_fs.css({'left': left});
                previous_fs.css({'opacity': opacity});
            },
            // duration: 200,
            complete: function(){
                current_fs.hide();
                animating = false;
            },
            //this comes from the custom easing plugin
            easing: 'easeInOutBack'
        });
    });

    $('body').on('click','.button-next-step-two',function(){

        if(animating) return false;
        animating = true;

        current_fs = $('#fieldset-two');
        previous_fs = $('#fieldset-one');

        //show the previous fieldset
        previous_fs.show();
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now, mx) {
                //1. scale previous_fs from 80% to 100%
                scale = 0.8 + (1 - now) * 0.2;
                //2. take current_fs to the right(50%) - from 0%
                left = ((1-now) * 50)+"%";
                //3. increase opacity of previous_fs to 1 as it moves in
                opacity = 1 - now;
                current_fs.css({'left': left});
                previous_fs.css({'opacity': opacity});
            },
            // duration: 200,
            complete: function(){
                current_fs.hide();
                animating = false;
            },
            //this comes from the custom easing plugin
            easing: 'easeInOutBack'
        });

        $('#successModal').modal('show');
    });

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

    $('body').on('click','.close-modal-default',function(e){
        e.preventDefault();
        $('#successModal').modal('hide');
        $('#openOrder').modal('hide');
    })

    $('body').on('click','.btn-data',function(){
        let is_ok = 1;
        let html = '';

        let required = $('input[required]');
        if (required.length){
            required.each(function () {
                $(this).toggleClass('invalid',!$(this).val().trim());
                if (!$(this).val().trim()){
                    is_ok = 0;
                    let text = $(this).parent().prev().text().trim().toLowerCase();
                    html = `<div class="row marginauto order-errors"><div class="col-md-12 left-right default-span"><small>Bạn chưa nhập ${text}</small></div></div>`
                    $(this).parent().next().html(html)
                }else {
                    $(this).parent().next().text('')
                }
            });
        }
        if ($('.allgame[type=checkbox]').length){
            if (checkboxRequired('')){
                html = `<div class="row marginauto order-errors"><div class="col-md-12 left-right default-span"><small>Phải chọn ít nhất một gói dịch vụ</small></div></div>`;
                is_ok = 0;
                $('#error-mes-checkbox').html(html)
            }else {
                $('#error-mes-checkbox').html('')
            }
        }
        if (is_ok){
            $('#openOrder').modal('show');
        }
    });

    $('body').on('click','.openSuccess',function(e){
        $('#openOrder').modal('hide');
        $('#successModal').modal('show');
    })

})

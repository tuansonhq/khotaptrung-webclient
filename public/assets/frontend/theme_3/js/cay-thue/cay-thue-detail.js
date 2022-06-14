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
        content: "Đã copy!",
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

    $('body').on('click','.btn-data',function(e){
        e.preventDefault();
        var index = 0;
        var isSet = true;

        var rankstvalue = $('.data-select-rank-start .list .option.selected').data('value');
        var rankst = $('.data-select-rank-start .list .option.selected').text();

        if (rankst == null || rankst == undefined || rankst == 'Chọn rank hiện tại' || rankstvalue == null || rankstvalue == undefined || rankstvalue == ''){

            var htmlrankst = '';
            htmlrankst += '<div class="row marginauto order-errors"><div class="col-md-12 left-right default-span"><small>Bạn chưa chọn rank hiện tại.</small></div></div>';

            $('.rank-start-error').html('');
            $('.rank-start-error').html(htmlrankst);

            $('.data-select-rank-start .nice-select').css('border-color','#DA4343');

            isSet = false;
        }else {
            $('.rank-start-error').html('');
            $('.data-select-rank-start .nice-select').css('border-color','#DCDEE9');
        }

        var rankmmvalue = $('.data-select-rank-end .list .option.selected').data('value');
        var rankmm = $('.data-select-rank-end .list .option.selected').text();

        if (rankmm == null || rankmm == undefined || rankmm == 'Chọn rank hiện tại' || rankmmvalue == null || rankmmvalue == undefined || rankmmvalue == ''){

            var htmlrankmm = '';
            htmlrankmm += '<div class="row marginauto order-errors"><div class="col-md-12 left-right default-span"><small>Bạn chưa chọn rank mong muốn.</small></div></div>';

            $('.rank-end-error').html('');
            $('.rank-end-error').html(htmlrankmm);

            $('.data-select-rank-end .nice-select').css('border-color','#DA4343');

            isSet = false;
        }else {
            $('.rank-end-error').html('');
            $('.data-select-rank-end .nice-select').css('border-color','#DCDEE9');
        }

        var servervalue = $('.data-select-server .list .option.selected').data('value');
        var server = $('.data-select-server .list .option.selected').text();

        if (server == null || server == undefined || server == 'Chọn server' || servervalue == null || servervalue == undefined || servervalue == ''){

            var htmlserver = '';
            htmlserver += '<div class="row marginauto order-errors"><div class="col-md-12 left-right default-span"><small>Bạn chưa chọn server.</small></div></div>';

            $('.server-error').html('');
            $('.server-error').html(htmlserver);

            $('.data-select-server .nice-select').css('border-color','#DA4343');

            isSet = false;
        }else {
            $('.server-error').html('');
            $('.data-select-server .nice-select').css('border-color','#DCDEE9');
        }

        var herovalue = $('.data-select-hero .list .option.selected').data('value');
        var hero = $('.data-select-hero .list .option.selected').text();

        if (hero == null || hero == undefined || hero == 'Ví dụ: Yasuyo' || herovalue == null || herovalue == undefined || herovalue == ''){

            var htmlserver = '';
            htmlserver += '<div class="row marginauto order-errors"><div class="col-md-12 left-right default-span"><small>Bạn chưa chọn tướng.</small></div></div>';

            $('.hero-error').html('');
            $('.hero-error').html(htmlserver);

            $('.data-select-hero .nice-select').css('border-color','#DA4343');

            isSet = false;
        }else {
            $('.hero-error').html('');
            $('.data-select-hero .nice-select').css('border-color','#DCDEE9');
        }

        var username = $('.username').val();

        if (username == null || username == undefined || username == ''){
            var htmltk = '';
            htmltk += '<div class="row marginauto order-errors"><div class="col-md-12 left-right default-span"><small>Bạn chưa nhập tài khoản game.</small></div></div>';

            $('.tk-error').html('');
            $('.tk-error').html(htmltk);

            $('.username').css('border-color','#DA4343');
            isSet =  false;
        }else {
            $('.tk-error').html('');
            $('.username').css('border-color','#DCDEE9');
        }

        var password = $('.password').val();

        if (password == null || password == undefined || password == ''){
            var htmlpw = '';
            htmlpw += '<div class="row marginauto order-errors"><div class="col-md-12 left-right default-span"><small>Bạn chưa nhập mật khẩu game.</small></div></div>';

            $('.pw-error').html('');
            $('.pw-error').html(htmlpw);

            $('.password').css('border-color','#DA4343');

            isSet =  false;
        }else {
            $('.password').css('border-color','#DCDEE9');
            $('.pw-error').html('');
        }

        if (isSet == false){
            return false;
        }

        $('#openOrder').modal('show');

    })


    $('body').on('click','.openSuccess',function(e){
        $('#openOrder').modal('hide');
        $('#successModal').modal('show');
    })

})

$(document).ready(function (e) {

    var slug = $('.slug').val();

    getShowAccDetail(slug);
    getRelatedAcc(slug);

    function getShowAccDetail(slug) {

        var url = '/acc/'+ slug + '/showacc';
        request = $.ajax({
            type: 'GET',
            url: url,
            data: {
                // id:id
            },
            beforeSend: function (xhr) {

            },
            success: (data) => {

                if (data.status == 1){

                    $('#showdetailacc').html('');
                    $('#showdetailacc').html(data.data);

                    //Loading blur when data is being loaded
                    $('.loading-data__buyacc').html('');

                    $('#pageBreadcrumb').html('');
                    $('#pageBreadcrumb').html(data.datamenu);
                    activateGalleryThumbs();
                    activateGallerySlider();

                }else if (data.status == 0){

                    var html = '';
                    html += '<div class="row pb-3 pt-3"><div class="col-md-12 text-center"><span style="color: red;font-size: 16px;">' + data.message + '</span></div></div>';

                    $('#showdetailacc').html('');
                    $('#showdetailacc').html(html);


                    var htmlform = '';
                    htmlform += '<label class="col-md-12 form-control-label text-danger" style="text-align: center;margin: 10px 0; ">Bạn phải đăng nhập mới có thể mua tài khoản tự động.</label>';

                    $('.form__data__buyacc').html('');
                    $('.form__data__buyacc').html(htmlform);

                }

            },
            error: function (data) {

            },
            complete: function (data) {

            }
        });
    };

    function getRelatedAcc(slug) {

        var url = '/related-acc';
        request = $.ajax({
            type: 'GET',
            url: url,
            data: {
                slug:slug
            },
            beforeSend: function (xhr) {

            },
            success: (data) => {

                if (data.status == 1){

                    $('#showslideracc').html('');
                    $('#showslideracc').html(data.dataslider);
                    activateRelatedSlider();
                }else if (data.status == 0){

                    var html = '';
                    html += '<div class="row pb-3 pt-3"><div class="col-md-12 text-center"><span style="color: red;font-size: 16px;">' + data.message + '</span></div></div>';

                    $('#showslideracc').html('');
                    $('#showslideracc').html(html);
                }

            },
            error: function (data) {

            },
            complete: function (data) {

            }
        });
    };

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

    $(document).on('submit', '.formDonhangAccount', function(e){
        e.preventDefault();
        var htmlloading = '';

        htmlloading += '<div class="loading"></div>';
        $('.openSuccess').html('');
        $('.openSuccess').html(htmlloading);

        var formSubmit = $(this);
        var url = formSubmit.attr('action');
        var btnSubmit = formSubmit.find(':submit');
        btnSubmit.prop('disabled', true);
        $('.loginBox__layma__button__displayabs').prop('disabled', true);

        $.ajax({
            type: "POST",
            url: url,
            data: formSubmit.serialize(), // serializes the form's elements.
            beforeSend: function (xhr) {

            },
            success: function (response) {

                if(response.status == 1){
                    $('.loadModal__acount').modal('hide');
                    swal({
                        title: "Mua tài khoản thành công",
                        text: "Thông tin chi tiết tài khoản vui lòng về lịch sử đơn hàng.",
                        type: "success",
                        confirmButtonText: "Về lịch sử đơn hàng",
                        showCancelButton: true,
                        cancelButtonText: "Đóng",
                    })
                        .then((result) => {
                            if (result.value) {
                                window.location = '/lich-su-mua-account';
                            } else if (result.dismiss === 'đóng') {

                            }
                        })
                }
                else if (response.status == 2){
                    $('.loadModal__acount').modal('hide');

                    swal(
                        'Thông báo!',
                        response.message,
                        'warning'
                    )
                    $('.loginBox__layma__button__displayabs').prop('disabled', false);
                }else {
                    $('.loadModal__acount').modal('hide');
                    swal(
                        'Lỗi!',
                        response.message,
                        'error'
                    )
                    $('.loginBox__layma__button__displayabs').prop('disabled', false);
                }
                $('.loading-data__muangay').html('');
            },
            error: function (response) {
                if(response.status === 422 || response.status === 429) {
                    let errors = response.responseJSON.errors;

                    jQuery.each(errors, function(index, itemData) {

                        formSubmit.find('.notify-error').text(itemData[0]);
                        return false; // breaks
                    });
                }else if(response.status === 0){
                    alert(response.message);
                    $('#text__errors').html('<span class="text-danger pb-2" style="font-size: 14px">'+response.message+'</span>');
                }
                else {
                    $('#text__errors').html('<span class="text-danger pb-2" style="font-size: 14px">'+'Kết nối với hệ thống thất bại.Xin vui lòng thử lại'+'</span>');
                }
            },
            complete: function (data) {
                btnSubmit.prop('disabled', false);
            }
        })


    });

    $('.js-toggle-content').click(function () {
        handleToggleContent();
    });

    function activateGallerySlider () {
        var slider = new Swiper ('.gallery-slider', {
            autoplay: {
                delay: 2000,
    
            },
    
            slidesPerView: 1,
            centeredSlides: true,
            loop: false,
            loopedSlides: 6,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    }

    function activateGalleryThumbs () {
        var thumbs = new Swiper ('.gallery-thumbs', {
            slidesPerView: 6.5,
            spaceBetween: 8,
            centeredSlides: false,
            loop: false,
            slideToClickedSlide: true,
            breakpoints: {
                992: {
                    slidesPerView: 4.5,
                },
                768:{
                    slidesPerView: 3.5,
                },
                480: {
                    slidesPerView: 3.2,
    
                }
            }
        });
    }

    function activateRelatedSlider(params) {
        var list_dong_gia = new Swiper('.list-dong-gia', {
            autoplay: false,
            // preloadImages: false,
            updateOnImagesReady: true,
            // lazyLoading: false,
            watchSlidesVisibility: false,
            lazyLoadingInPrevNext: false,
            lazyLoadingOnTransitionStart: false,
    
            loop: false,
            centeredSlides: false,
            slidesPerView: 4.5,
            speed: 800,
            spaceBetween: 0,
            touchMove: true,
            freeModeSticky:true,
            grabCursor: true,
            observer: true,
            observeParents: true,
            breakpoints: {
                992: {
                    slidesPerView: 3.2,
                },
                768:{
                    slidesPerView: 2.5,
                },
                480: {
                    slidesPerView: 1.8,
    
                }
            }
        });
    }



    $('.wide').niceSelect();

    tippy('#getShowpass', {
        // default
        trigger: 'click',
        content: "Đã lấy mật khẩu!",
        placement: 'right',
    });

    tippy('#getCopypass', {
        // default
        trigger: 'click',
        content: "Đã copy mật khẩu!",
        placement: 'right',
    });

    tippy('#getCopyemail', {
        // default
        trigger: 'click',
        content: "Đã copy email!",
        placement: 'right',
    });

    $('.getCopypass').on('click', function(){

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
            htmlpass += '<img class="lazy img-show-password" src="/assets/theme_3/image/cay-thue/eyeshow.png" alt="">';
            $('.getCopypass').html('');
            $('.getCopypass').html(htmlpass);

            // Change the Text on the show password button to Hide
            $(this).val('Hide');
        } else {
            var htmlpass = '';
            htmlpass += '<img class="lazy img-show-password" src="/assets/theme_3/image/cay-thue/eyehide.png" alt="">';
            $('.getCopypass').html('');
            $('.getCopypass').html(htmlpass);

            // If the password field type is not a password field then set it to password
            passwordField.attr('type', 'password');

            // Change the value of the show password button to Show
            $(this).val('Show');
        }
    });

    $('#getCopyemail').on('click', function(){
        var copyText = $('#email').val();

        navigator.clipboard.writeText(copyText);
    })

    $('.getCopypass').on('click', function(){
        var copyText = $('#password').val();

        navigator.clipboard.writeText(copyText);
    })

    //    Step

    var current_fs, next_fs, previous_fs; //fieldsets
    var left, opacity, scale; //fieldset properties which we will animate
    var animating; //flag to prevent quick multi-click glitches

    //xac nhan don hang
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

    });

    //Tra gop
    $('body').on('click','.button-next-step-one-tra-gop',function(){
        if (animating) return false;
        animating = true;

        current_fs = $('#fieldset-one');
        next_fs = $('#fieldset-three');
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

    $('body').on('click','.button-next-step-two-tra-gop',function(){

        if(animating) return false;
        animating = true;

        current_fs = $('#fieldset-three');
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

    $('body').on('click','.previous-step-one-tra-gop',function(){

        if(animating) return false;
        animating = true;

        current_fs = $('#fieldset-three');
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

    $('body').on('click','.up-scroll-mobile',function(){

        $('.tragop-order-body-row-ct').css('padding',12);
        $('#tra-gop-scroll-mobile').css('max-height',420);

        var html = '';

        html += '<div class="row marginauto down-scroll-mobile"><div class="col-auto left-right"><img class="lazy" src="/assets/theme_3/image/nick/up.png" alt=""></div></div>';

        $('.data-scroll-mobile').html('');
        $('.data-scroll-mobile').html(html);

    });

    $('body').on('click','.down-scroll-mobile',function(){

        $('.tragop-order-body-row-ct').css('padding',0);
        $('#tra-gop-scroll-mobile').css('max-height',0);

        var html = '';

        html += '<div class="row marginauto up-scroll-mobile"><div class="col-auto left-right"><img class="lazy" src="/assets/theme_3/image/nick/up.png" alt=""></div></div>';

        $('.data-scroll-mobile').html('');
        $('.data-scroll-mobile').html(html);

    });

    $('body').on('click','.btn-tra-gop',function(){
        $('#traGop').modal('show')
    })

    $('body').on('click','.openSuccess',function(){
        $('#successModal').modal('show')
    })


    $('body').on('click','.btn-mua-ngay',function(){
        $('#openOrder').modal('show')
    })

    $('body').on('click','.close-modal-default',function(){
        $('#openOrder').modal('hide')
        $('#successModal').modal('hide')
        $('#traGop').modal('hide')
    })

})

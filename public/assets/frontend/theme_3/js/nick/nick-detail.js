$(document).ready(function (e) {

    var slug = $('.slug').val();
    var slug_category = $('.slug_category').val();

    getShowAccDetail(slug);
    getRelatedAcc(slug_category);

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

                    $('#fieldset-two').append($('#fieldsetTwoPayment').html());
                    $('#fieldsetTwoPayment').remove();

                    //Loading blur when data is being loaded
                    $('.loading-data__buyacc').html('');

                    $('#pageBreadcrumb').html('');
                    $('#pageBreadcrumb').html(data.datamenu);
                    // activateGalleryThumbs();
                    // activateGallerySlider();

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
                $('#detailLoader').addClass('d-none');
                initSwiperGallery();
            }
        });
    };

    function getRelatedAcc(slug_category) {

        var url = '/related-acc';
        request = $.ajax({
            type: 'GET',
            url: url,
            data: {
                slug:slug_category
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
                let c_swiper_config_category = new Swiper('.class-config-account-viewed',{
                    navigation: {
                        nextEl: '.class-config-account-viewed .swiper-button-next',
                        prevEl: '.class-config-account-viewed .swiper-button-prev',
                    },
                    autoplay: false,
                    updateOnImagesReady: true,
                    watchSlidesVisibility: false,
                    lazyLoadingInPrevNext: false,
                    lazyLoadingOnTransitionStart: false,
                    slidesPerView: 4.5,
                    speed: 800,
                    slidesPerGroup: 3,
                    spaceBetween: 16,
                    touchMove: true,
                    grabCursor: true,
                    observer: true,
                    observeParents: true,
                    breakpoints: {
                        992: {
                            freeMode: true,
                            slidesPerView: 3.2,
                        },
                        768: {
                            freeMode: true,
                            slidesPerView: 2.3,
                        },
                        480: {
                            slidesPerView: 1.8,

                        }
                    },
                });
            }
        });
    };

    $(document).on('submit', '.formDonhangAccount', function(e){
        e.preventDefault();

        var formSubmit = $(this);
        var url = formSubmit.attr('action');
        var btnSubmit = formSubmit.find(':submit');
        var btnText = $(btnSubmit).text();
        $(btnSubmit).text('Đang xử lý...');
        btnSubmit.prop('disabled', true);

        let accountID = formSubmit.data('id');

        $.ajax({
            type: "POST",
            url: url,
            data: formSubmit.serialize(), // serializes the form's elements.
            beforeSend: function (xhr) {

            },
            success: function (response) {

                $('#openOrder').modal('hide');
                if(response.status == 1){
                    $('#successModal').modal('show');
                }
                else if (response.status == 2){
                    swal(
                        'Thông báo!',
                        response.message,
                        'warning'
                    )
                    $(btnSubmit).prop('disabled', false);
                    $(btnSubmit).text(btnText);
                }else {
                    swal(
                        'Lỗi!',
                        response.message,
                        'error'
                    )
                    $(btnSubmit).prop('disabled', false);
                    $(btnSubmit).text(btnText);
                }
            },
            error: function (response) {
                if(response.status === 422 || response.status === 429) {
                    let errors = response.responseJSON.errors;

                    jQuery.each(errors, function(index, itemData) {

                        formSubmit.find('.order-errors .purchaseError').empty();
                        formSubmit.find('.order-errors .purchaseError').html(`<small>${itemData[0]}</small>`);
                        return false; // breaks
                    });
                }else if(response.status === 0){
                    alert(response.message);
                }
                else {
                    alert('Kết nối với hệ thống thất bại.Xin vui lòng thử lại');
                }
            },
            complete: function (data) {
                btnSubmit.prop('disabled', false);
            }
        })


    });

    // function activateGallerySlider () {
    //     var slider = new Swiper ('.gallery-slider', {
    //         autoplay: {
    //             delay: 2000,
    //
    //         },
    //
    //         slidesPerView: 1,
    //         centeredSlides: true,
    //         loop: false,
    //         loopedSlides: 6,
    //         navigation: {
    //             nextEl: '.swiper-button-next',
    //             prevEl: '.swiper-button-prev',
    //         },
    //     });
    // }
    //
    //
    //
    // function activateGalleryThumbs () {
    //     var thumbs = new Swiper ('.gallery-thumbs', {
    //         slidesPerView: 5.5,
    //         spaceBetween: 8,
    //         centeredSlides: false,
    //         loop: false,
    //         slideToClickedSlide: true,
    //         breakpoints: {
    //             992: {
    //                 slidesPerView: 4.5,
    //             },
    //             768:{
    //                 slidesPerView: 3.5,
    //             },
    //             480: {
    //                 slidesPerView: 3.2,
    //
    //             }
    //         }
    //     });
    // }

    function initSwiperGallery() {

        if ($('.gallery-thumbs').length) {
            let galleryTop = new Swiper('.gallery-thumbs', {
                slidesPerView: 5.5,
                spaceBetween: 8,
                centeredSlides: true,
                loop: true,
                clickable: true,
                slideToClickedSlide: true,
                observer: true,
                observeParents: true,
                watchSlidesVisibility: true,
                watchSlidesProgress: true,
                touchRatio: 0.2,
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
            let galleryThumbs = new Swiper('.gallery-slider', {


                clickable: true,
                slideToClickedSlide: true,
                slidesPerView: "auto",
                centeredSlides: true,
                loop: true,
                loopedSlides: 6,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                observer: true,
                observeParents: true,
            });

            galleryTop.controller.control = galleryThumbs;
            galleryThumbs.controller.control = galleryTop;
        }

        if ($('.gallery-thumbs-mobile').length) {
            let galleryTop = new Swiper('.gallery-thumbs-mobile', {
                slidesPerView: 5.5,
                spaceBetween: 8,
                centeredSlides: true,
                loop: false,
                clickable: true,
                slideToClickedSlide: true,
                observer: true,
                observeParents: true,
                watchSlidesVisibility: true,
                watchSlidesProgress: true,
                touchRatio: 0.2,
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
            let galleryThumbs = new Swiper('.gallery-slider-mobile', {


                clickable: true,
                slideToClickedSlide: true,
                slidesPerView:1,
                centeredSlides: false,
                loop: true,
                // loopedSlides: 6,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                observer: true,
                observeParents: true,
            });

            galleryTop.controller.control = galleryThumbs;
            galleryThumbs.controller.control = galleryTop;
        }
    }

    function activateRelatedSlider(params) {
        var list_dong_gia = new Swiper('.list-dong-gia', {
            navigation: {
                nextEl: '.list-dong-gia .swiper-button-next',
                prevEl: '.list-dong-gia .swiper-button-prev',
            },
            autoplay: false,
            // preloadImages: false,
            updateOnImagesReady: true,
            // lazyLoading: false,
            watchSlidesVisibility: false,
            lazyLoadingInPrevNext: false,
            lazyLoadingOnTransitionStart: false,
            freeMode:true,
            loop: false,
            centeredSlides: false,
            slidesPerView: 4.5,
            speed: 800,
            slidesPerGroup: 3,
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

    //    Step

    var current_fs, next_fs, previous_fs; //fieldsets
    var left, opacity, scale; //fieldset properties which we will animate
    var animating; //flag to prevent quick multi-click glitches

    //xac nhan don hang
    $('body').on('click','.button-next-step-one',function(event){
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
    });

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

    // $('body').on('click','.btn-tra-gop',function(){
    //     $('#traGop').modal('show')
    // })


    $('body').on('click','.btn-mua-ngay',function(event){
        $('#openOrder').modal('show');
    });

    $('body').on('click','.close-modal-default',function(){
        $('#openOrder').modal('hide')
        $('#successModal').modal('hide')
        $('#traGop').modal('hide')
    });

    function convertToSlug(title) {
        var slug;
        //Đổi chữ hoa thành chữ thường
        slug = title.toLowerCase();
        //Đổi ký tự có dấu thành không dấu
        slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
        slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
        slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
        slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
        slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
        slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
        slug = slug.replace(/đ/gi, 'd');
        //Xóa các ký tự đặt biệt
        slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\<|\'|\"|\:|\;|_/gi, '');
        //Đổi khoảng trắng thành ký tự gạch ngang
        slug = slug.replace(/ /gi, "-");
        //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
        //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
        slug = slug.replace(/\-\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-/gi, '-');
        slug = slug.replace(/\-\-/gi, '-');
        //Xóa các ký tự gạch ngang ở đầu và cuối
        slug = '@' + slug + '@';
        slug = slug.replace(/\@\-|\-\@|\@/gi, '');
        // trả về kết quả
        return slug;
    }

    $('body').on('click','#show-modal-champ',function (e) {
        e.preventDefault();
        $('#modal-champ').modal('show').find('.modal-body').trigger('scroll');;
    })
    $('body').on('click','#show-modal-skin',function (e) {
        e.preventDefault();
        $('#modal-skin').modal('show').find('.modal-body').trigger('scroll');;
    })
    $('body').on('click','#show-modal-animal',function (e) {
        e.preventDefault();
        $('#modal-animal').modal('show').find('.modal-body').trigger('scroll');;
    })

    $('.form-search-modal').on('submit',function (e) {
        e.preventDefault();
        let keyword = $(this).find('input').val();
        keyword = convertToSlug(keyword);

        let $elements = $(this).closest('.modal').find('.row > .col-6');
        Array.from($elements).forEach(function (elm) {
            let text = $(elm).find('.card-name').text().trim();
            text = convertToSlug(text);
            let condition = text.indexOf(keyword) * 1 > -1;
            $(elm).toggle(condition);
        });
        let has_result = $($elements).filter(function() {
            return $(this).css('display') !== 'none';
        }).length;

        $(this).closest('.modal').find('.text-invalid').toggle(!has_result);
    });

    $('.modal-lmht .modal-body').on('scroll',function () {
        $('html body').trigger('scroll');
    });
})

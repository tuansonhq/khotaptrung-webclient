(function($){
    $.fn.extend({
        donetyping: function(callback,timeout){
            timeout = timeout || 1e3; // 1 second default timeout
            var timeoutReference,
                doneTyping = function(el){
                    if (!timeoutReference) return;
                    timeoutReference = null;
                    callback.call(el);
                };
            return this.each(function(i,el){
                var $el = $(el);
                // Chrome Fix (Use keyup over keypress to detect backspace)
                // thank you @palerdot
                $el.is(':input') && $el.on('keyup keypress paste',function(e){
                    // This catches the backspace button in chrome, but also prevents
                    // the event from triggering too preemptively. Without this line,
                    // using tab/shift+tab will make the focused element fire the callback.
                    if (e.type=='keyup' && e.keyCode!=8) return;

                    // Check if timeout has been set. If it has, "reset" the clock and
                    // start over again.
                    if (timeoutReference) clearTimeout(timeoutReference);
                    timeoutReference = setTimeout(function(){
                        // if we made it here, our timeout has elapsed. Fire the
                        // callback
                        doneTyping(el);
                    }, timeout);
                }).on('blur',function(){
                    // If we can, fire the event since we're leaving the field
                    doneTyping(el);
                });
            });
        }
    });
})(jQuery);



$(document).ready(function () {


    $(window).scroll(function() {
        if ($(window).scrollTop() > 150) {
            $('.m-scroll-top').addClass('show');
        } else {
            $('.m-scroll-top').removeClass('show');
        }
    });

    $('.m-scroll-top').on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({scrollTop:0}, '300');
    });

    $(".menu-control").click(function() {

        $('.list-menu-link').toggle('fast', function() {
            // $('#form-search input').focus();
        });
    });

    $('.slick-slider').slick({
        autoplay:true,
        autoplaySpeed:3000,
        dots: false,
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 5,
        prevArrow: '<i class="fas fa-chevron-left arrow prev"></i>',
        nextArrow: '<i class="fas fa-chevron-right arrow next"></i>',
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 5,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]

    });

    $('.slider-banner').slick({
        autoplay:true,
        autoplaySpeed:3000,
        dots: false,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: '<i class="fas fa-chevron-left arrow prev"></i>',
        nextArrow: '<i class="fas fa-chevron-right arrow next"></i>',
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]

    });




    $('#txtSearch').donetyping(function() {
        var find=$(this).val()

        if(find == null || find == "" || find == undefined){
            $('.entries').css('display','block');
            $('.entries-search').css('display','none');
            return false
        }
        else{
            $('.entries').css('display','none');
            $('.entries-search').css('display','block');
        }

        $.ajax({
            type: "GET",
            url: '/search',
            data: {
                find:find
            }, // serializes the form's elements.
            beforeSend: function (xhr) {
            },
            success: function (data) {
                $('.entries-search .fix-border').html("");
                $('.entries-search .fix-border').html(data);
            },
            error: function (data) {
                alert("Không kết nối được với máy chủ");
            },
            complete: function (data) {
            }
        });

        //$(this).val() // get the current value of the input field.
    }, 400);


    $('#txtSearchMobile').donetyping(function() {
        var find=$(this).val()

        if(find == null || find == "" || find == undefined){

            return false
        }
        $.ajax({
            type: "GET",
            url: '/search',
            data: {
                find:find,
                device:"mobile"
            }, // serializes the form's elements.
            beforeSend: function (xhr) {
            },
            success: function (data) {
                $('#result-search-mobile').html("");
                $('#result-search-mobile').html(data);
            },
            error: function (data) {
                alert("Không kết nối được với máy chủ");
            },
            complete: function (data) {
            }
        });

        //$(this).val() // get the current value of the input field.
    }, 400);





    $('#btn-search').click( function(){
        $('body').addClass('search-active');
        $('.input-search').focus();
    });

    $('.icon-close').click( function(){
        $('body').removeClass('search-active');
    });
    $('body').on('click','button.icon-delete',function(){
        $('.input-search').val('');
    })

});



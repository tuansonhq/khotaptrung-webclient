/*Lấy chiều dài để responsive*/
let width = $(document).width();
$(document).ready(function() {
    /*Tất cả các thẻ select sẽ được dùng plugin select nice*/
    $('select').niceSelect();

    /*Quantity*/
    let js_quantity = $('.js-quantity');
    if (js_quantity.length){
        let input = js_quantity.find('.js-quantity-input');
        js_quantity.on('click','.js-quantity-minus',function (event) {
            event.preventDefault();
            input.val(parseInt(input.val()) - 1);
            if(input.val() < 1 ){
                input.val(1);
            }
        });
        js_quantity.on('click','.js-quantity-add',function (event) {
            event.preventDefault();
            input.val(parseInt(input.val()) + 1);
            if(input.val() > 20 ){
                input.val(20);
            }
        });
        js_quantity.on('input','.js-quantity-input',function () {
            if (input.val() > 20){
                input.val(20);
            }
            if (input.val() < 1){
                input.val(1);
            }
            if (isNaN(input.val())) {
                input.val(1);
            }
        });
    }
    /*End quantity*/

    /*Input chỉ được nhập số*/
    $(document).on('keypress','input[numberic]', function (e) {
        if (isNaN(this.value + String.fromCharCode(e.keyCode))) return false;
    });
    /*Dùng date time cho input */
    let date_time_picker = $('.date-left,.date-right');
    if (date_time_picker.length){
        /*config date_time_picker*/
        date_time_picker.datetimepicker({
            format: 'DD-MM-YYYY LT',
            useCurrent: false,
            locale:'vi',
            maxDate: moment(),
            icons:
                { time: 'fas fa-clock',
                    date: 'fas fa-calendar',
                    up: 'fas fa-arrow-up',
                    down: 'fas fa-arrow-down',
                    previous: 'fas fa-arrow-circle-left',
                    next: 'fas fa-arrow-circle-right',
                    today: 'far fa-calendar-check-o',
                    clear: 'fas fa-trash',
                    close: 'far fa-times' },
        });
        /*auto close after choose*/
        date_time_picker.datetimepicker().on('dp.change', function(e){
            if( !e.oldDate || !e.date.isSame(e.oldDate, 'day')){
                $(this).data('DateTimePicker').hide();
            }
        });
    }
    /*option swiper card*/
    let slider_count = 1;
    if ($('.slider--card .swiper-wrapper').children().length > 1) {
        slider_count = 1.25;
    }
    var swiper_card = new Swiper(".slider--card", {
        slidesPerView: slider_count,
        spaceBetween: 16,
        freeMode: true,
        observer: true,
        observeParents: true,
    });

    /*Mua thẻ thành công*/
    tippy('.js-copy-text', {
        // default
        trigger: 'click',
        content: "Đã coppy !",
        placement: 'right',
    });

    $('.js-copy-text').on('click', function () {
        let text_value = $(this).parent().find('.card__info').text().trim();
        navigator.clipboard.writeText(text_value);
        $(this).parent().addClass('active')
    });

    /*Bottom sheet (Mobile)*/
    let bottom_sheet = $('.sheet-footer');
    if (bottom_sheet.length){
        bottom_sheet.prev().css('bottom',bottom_sheet.outerHeight());
    }

    /*Filter Account*/
    $('.js-reset-form').on('click',function (e) {
        e.preventDefault();
        $(this).closest('form').trigger('reset');
        if ($(this).closest('.bottom-sheet').length) {
            $('form select').niceSelect('update');
        }
    });
    $('.js-submit-form').on('click',function (e) {
        e.preventDefault();
        $(this).closest('form').trigger('submit');
    });
    /*Sort Account*/

    /*Desktop*/
    $(document).on('click','.selection',function (e) {
        e.preventDefault();
        let value_sort = $('.value-sort');
        value_sort.find('.selection').removeClass('active');
        $(this).addClass('active');
    });

    /*Mobile*/
    $(document).on('change','input[name=sort]',function () {
        $('label[for=bottom-sheet-sort]').trigger('click');
        $('label.tool-sort').text($(this).parent().text().trim());
    });
/*Modal chi tiết nick liên minh*/

    $('body').on('click','.submit--search',function(e){
        e.preventDefault();
        let keyword = convertToSlug($('#keyword--search').val());

        let index = 0;
        $('.item-nick-lmht').each(function (i,elm) {
            $('.body-modal__nick__text-error').css('display','none');
            let slug_item = $(elm).find('img').attr('alt');
            slug_item = convertToSlug(slug_item);
            $(this).toggle(slug_item.indexOf(keyword) > -1);
            if (slug_item.indexOf(keyword) > -1){
                index = index + 1
            }else {}

            if (index == 0){
                $('.body-modal__nick__text-error').css('display','block');
            }

        })
    })

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

    if (width < 992){
        /*Step Mobile*/
        $(document).on('click','.js-step',function () {
            let selector = $(this).data('target');
            let elm = $(selector);
            elm.css('transform','translateX(0)');
        })
        $(document).on('click','.close-step',function (e) {
            e.preventDefault();
            let elm = $(this).closest('.step');
            elm.css('transform','translateX(130%)')
        })

        /*Box-shadow*/
        $('.body-mobile').on('scroll',function () {
            $('.head-mobile').toggleClass('box-shadow',!!$(this).scrollTop())
        })
    }

    /*toggle password*/
    $(document).on('click','.toggle-password',function (e) {
        let start = width < 992 ? $(this).outerWidth() - 54 : $(this).outerWidth() - 32;
        let end = $(this).outerWidth() - 12;
        if (e.offsetX >= start && e.offsetX <= end) {
            $(this).toggleClass('is_show');
            let input = $(this).find('input');
            if (input.attr("type") === "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        }
    });
    $(document).on('click','.copy-input',function (e) {
        let start;
        let end;
        if ($(this).hasClass('toggle-password')){
            start = width < 992 ? $(this).outerWidth() - 75 : $(this).outerWidth() - 60;
            end =  $(this).outerWidth() - 40;
        } else {
             start = width < 992 ? $(this).outerWidth() - 54 : $(this).outerWidth() - 32;
             end =  $(this).outerWidth() - 12;
        }
        if (e.offsetX >= start && e.offsetX <= end) {
            let value = $(this).find('input').val();
            navigator.clipboard.writeText(value);
            tippy(e.target, {
                trigger: 'focus',
                content: "Đã copy !",
                placement: 'right',
                showOnCreate: true,
            });
        }
    });
    /*Seemore*/
    let content_desc = $('.content-desc');
    if (content_desc.length){
        let max_height_desc = content_desc.outerHeight();
        $(document).on('click','.see-more',function () {
            handleToggle($(this));
        });
        content_desc.dblclick(function () {
            handleToggle('.see-more');
        })
        /*set max-height for content*/
        content_desc.toggleClass('hide',true);
        /*handle toggle*/
        function handleToggle(selector) {
            $(selector).toggleClass('hide');
            content_desc.toggleClass('hide');
            if ($(selector).hasClass('hide')){
                $(selector).attr('data-content','Ẩn bớt nội dung');
                content_desc.css('max-height',max_height_desc);
            }else {
                $(selector).attr('data-content','Xem thêm nội dung');
                content_desc.css('max-height','');
            }
        }
        // dblclick on mobile
        if (width < 1200) {
            let touchtime = 0;
            content_desc.on("click", function() {
                if (!touchtime) {
                    // set first click
                    touchtime = new Date().getTime();
                } else {
                    // compare first click to this click and see if they occurred within double click threshold
                    if (((new Date().getTime()) - touchtime) < 500) {
                        // double click occurred
                        handleToggle('.see-more');
                        touchtime = 0;
                    } else {
                        // not a double click so set as a new first click
                        touchtime = new Date().getTime();
                    }
                }
            });
        }
    }

    /*Auto config rSlider JS*/
    let rSlider_input = $('.slider-input');
    if (rSlider_input.length) {
        Array.from(rSlider_input).forEach(function (elm) {
            /*Nếu mà nằm trong modal thì không khởi tạo được nên bỏ qua xử lí sau*/
            let inside_modal = $(elm).closest('.modal');
            if (inside_modal.length) {
                return;
            }
            setRSlider(elm);
        });
    }
    /*handle rSlider on show Modal*/
    $('.modal').on('show.bs.modal',function () {
      let rSlider_input = $(this).find('.slider-input');
      let has_slider = !!$(this).find('.rs-container').length;
      if (rSlider_input.length && !has_slider){
          setTimeout(function () {
              Array.from(rSlider_input).forEach(function (elm) {
                  setRSlider(elm);
              });
          },200);
      }
    });
    function setRSlider(elm) {
        let arr_values = $(elm).data('values').split(',');
        let arr_default = $(elm).data('default').split(',');
        let values = {
            min:parseInt(arr_values[0]),
            max:parseInt(arr_values[1]),
        };
        let step = parseInt(arr_values[2]);
        let target = '#' + $(elm).attr('id');
        let data_set = [parseInt(arr_default[0]),parseInt(arr_default[1])];
        new rSlider({
            target: target,
            values: values,
            step:step,
            range: true,
            tooltip: true,
            scale: false,
            labels: false,
            disabled:false,
            set:data_set,
        });
    }

    if (width > 992) {
        let sticky = $('.js_sticky');
        if (sticky.length) {
            $(document).on('scroll',function () {
                if ($(document).scrollTop() > 180) {
                    sticky.css('top',$(sticky).data('top'))
                }else {
                    sticky.css('top',0)
                }
            })
        }
    }
});

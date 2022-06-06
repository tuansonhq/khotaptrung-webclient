$(document).ready(function (e) {
    $('.view-more').click(function(){
        $('.view-less').css("display","block");
        $('.view-more').css("display","none");
        $(".footer-row-ct .content-video-in").addClass( "showtext" );
    });
    $('.view-less').click(function(){
        $('.view-more').css("display","block");
        $('.view-less').css("display","none");
        $(".footer-row-ct .content-video-in").removeClass( "showtext");
    });

    $('body').on('click','.nick-findter',function(){
        $('#openFinter').modal('show')
    })

    $('.wide').niceSelect();

    function loadData() {
        var id = $('.id').val();
        var isSet = false;
        var defaulthtml = '';
        $('.nick-findter-data').html('');
        $('.nick-findter-data').html(defaulthtml);

        if (id == null || id == undefined || id == ''){}else {
            if ($('.prepend-nick').hasClass('prepend-nick-id')){
                return false;
            }
            if (parseInt(id.length) > 50){
                return false;
            }
            var htmlid = '';
            htmlid += '<div class="col-auto prepend-nick prepend-nick-id" style="position: relative"><a href="javascript:void(0)">' + id + '</a><img class="lazy close-item-nick imgae-nick-id" src="/assets/frontend/theme_3/image/nick/close.png" alt=""></div>';
            $('.nick-findter-data').prepend(htmlid);
            isSet = true;
        }

        var pricevalue = $('.price-finter-nick .list .option.selected').data('value');
        var price = $('.price-finter-nick .list .option.selected').text();

        if (price == null || price == undefined || price == '' || pricevalue == null || pricevalue == undefined || pricevalue == 'Chọn giá tiền'){}else {
            if ($('.prepend-nick').hasClass('prepend-nick-price')){
                return false;
            }
            var htmlprice = '';
            htmlprice += '<div class="col-auto prepend-nick prepend-nick-price" style="position: relative"><a href="javascript:void(0)">' + price + '</a><img class="lazy close-item-nick imgae-nick-price" src="/assets/frontend/theme_3/image/nick/close.png" alt=""></div>';
            $('.nick-findter-data').prepend(htmlprice);
            isSet = true;
        }

        var statusvalue = $('.status-finter-nick .list .option.selected').data('value');
        var status = $('.status-finter-nick .list .option.selected').text();

        if (status == null || status == undefined || status == '' || statusvalue == null || statusvalue == undefined || statusvalue == 'Chọn trạng thái'){}else {
            if ($('.prepend-nick').hasClass('prepend-nick-status')){
                return false;
            }

            var htmlstatus = '';
            htmlstatus += '<div class="col-auto prepend-nick prepend-nick-status" style="position: relative"><a href="javascript:void(0)">' + status + '</a><img class="lazy close-item-nick imgae-nick-status" src="/assets/frontend/theme_3/image/nick/close.png" alt=""></div>';
            $('.nick-findter-data').prepend(htmlstatus);
            isSet = true;
        }

        var rankvalue = $('.rank-finter-nick .list .option.selected').data('value');
        var rank = $('.rank-finter-nick .list .option.selected').text();

        if (rank == null || rank == undefined || rank == '' || rankvalue == null || rankvalue == undefined || rankvalue == 'Chọn rank'){}else {
            if ($('.prepend-nick').hasClass('prepend-nick-rank')){
                return false;
            }
            var htmlrank = '';
            htmlrank += '<div class="col-auto prepend-nick prepend-nick-rank" style="position: relative"><a href="javascript:void(0)">' + rank + '</a><img class="lazy close-item-nick imgae-nick-rank" src="/assets/frontend/theme_3/image/nick/close.png" alt=""></div>';
            $('.nick-findter-data').prepend(htmlrank);
            isSet = true;
        }


        var data_switch = '';
        var text_switch = '';

        $('input[name="switch"]:checked').each(function () {
            if (this.checked) {
                if (data_switch != '') {
                    data_switch += '|';
                }

                text_switch = $(this).data('title');
                data_switch = $(this).val();
                if (text_switch == null || text_switch == undefined || text_switch == '' || data_switch == null || data_switch == undefined || data_switch == ''){}else {
                    if ($('.prepend-nick').hasClass('prepend-nick-switch-' + data_switch + '')){
                        return false;
                    }
                    var htmlswitch = '';
                    htmlswitch += '<div class="col-auto prepend-nick prepend-nick-switch" data-val="' + data_switch + '" style="position: relative"><a href="javascript:void(0)">' + text_switch + '</a><img class="lazy close-item-nick imgae-nick-switch" src="/assets/frontend/theme_3/image/nick/close.png" alt=""></div>';
                    $('.nick-findter-data').prepend(htmlswitch);
                    isSet = true;
                }

            }
        });

        if (isSet == false){
            // $('.nick-findter-row').css('margin-top',-24);
        }

    }

    $('body').on('click','.button-modal-nick',function(){
        loadData();
    })

    $('body').on('click','.prepend-nick-id',function(){
        $('.id').val('');

        loadData();
    })

    $('body').on('click','.prepend-nick-price',function(){
        $('.price').val('');
        $('.price').niceSelect('update');
        $('.price-finter-nick .current').html('Chọn giá tiền');
        $('.price-finter-nick .list li').first().addClass('selected');
        loadData();
    })

    $('body').on('click','.prepend-nick-status',function(){
        $('.status').val('');
        $('.status').niceSelect('update');
        $('.status-finter-nick .current').html('Chọn trạng thái');
        $('.status-finter-nick .list:first-child').addClass('selected');
        loadData();
    })

    $('body').on('click','.prepend-nick-rank',function(){
        $('.rank').val('');
        $('.rank').niceSelect('update');
        $('.rank-finter-nick .current').html('Chọn rank');
        $('.rank-finter-nick .list:first-child').addClass('selected');
        loadData();
    })

    $('body').on('click','.prepend-nick-switch',function(){
        var val = $(this).data('val');
        $('.switch-input-' + val + '').prop('checked', false);
        loadData();
    })

    $('body').on('click','.reset-find',function(){
        $('.id').val('');
        $('.rank').val('');
        $('.rank').niceSelect('update');
        $('.status').val('');
        $('.status').niceSelect('update');
        $('.price').val('');
        $('.price').niceSelect('update');
        $('.rank-finter-nick .current').html('Chọn rank');
        $('.rank-finter-nick .list:first-child').addClass('selected');
        $('.status-finter-nick .current').html('Chọn trạng thái');
        $('.status-finter-nick .list:first-child').addClass('selected');
        $('.price-finter-nick .current').html('Chọn giá tiền');
        $('.price-finter-nick .list li').first().addClass('selected');

        $('input[name="switch"]:checked').each(function () {
            if (this.checked) {
                $(this).prop('checked', false);
            }
        });
        loadData();
    })

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
})

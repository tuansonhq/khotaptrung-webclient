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
    $('#openFinter').modal('show');

    $('.wide').niceSelect();

    $('body').on('click','.button-modal-nick',function(){
        var id = $('.id').val();

        if (id == null || id == undefined || id == ''){}else {
            if ($('.prepend-nick').hasClass('prepend-nick-id')){
                return false;
            }
            if (parseInt(id.length) > 50){
                return false;
            }
            var htmlid = '';
            htmlid += '<div class="col-auto prepend-nick prepend-nick-id" style="position: relative"><a href="">' + id + '</a><img class="lazy close-item-nick imgae-nick-id" src="/assets/frontend/theme_3/image/nick/close.png" alt=""></div>';
            $('.nick-findter-data').prepend(htmlid);
            $('.nick-findter-row').css('margin-top',16);
        }

        var pricevalue = $('.price-finter-nick .list .option.selected').data('value');
        var price = $('.price-finter-nick .list .option.selected').text();

        if (price == null || price == undefined || price == '' || pricevalue == null || pricevalue == undefined || pricevalue == ''){}else {
            if ($('.prepend-nick').hasClass('prepend-nick-price')){
                return false;
            }
            var htmlprice = '';
            htmlprice += '<div class="col-auto prepend-nick prepend-nick-price" style="position: relative"><a href="">' + price + '</a><img class="lazy close-item-nick imgae-nick-price" src="/assets/frontend/theme_3/image/nick/close.png" alt=""></div>';
            $('.nick-findter-data').prepend(htmlprice);
            $('.nick-findter-row').css('margin-top',16);
        }

        var statusvalue = $('.status-finter-nick .list .option.selected').data('value');
        var status = $('.status-finter-nick .list .option.selected').text();

        if (status == null || status == undefined || status == '' || statusvalue == null || statusvalue == undefined || statusvalue == ''){}else {
            if ($('.prepend-nick').hasClass('prepend-nick-status')){
                return false;
            }
            var htmlstatus = '';
            htmlstatus += '<div class="col-auto prepend-nick prepend-nick-status" style="position: relative"><a href="">' + status + '</a><img class="lazy close-item-nick imgae-nick-status" src="/assets/frontend/theme_3/image/nick/close.png" alt=""></div>';
            $('.nick-findter-data').prepend(htmlstatus);
            $('.nick-findter-row').css('margin-top',16);
        }

        var rankvalue = $('.rank-finter-nick .list .option.selected').data('value');
        var rank = $('.status-finter-nick .list .option.selected').text();

        if (rank == null || rank == undefined || rank == '' || rankvalue == null || rankvalue == undefined || rankvalue == ''){}else {
            if ($('.prepend-nick').hasClass('prepend-nick-rank')){
                return false;
            }
            var htmlrank = '';
            htmlrank += '<div class="col-auto prepend-nick prepend-nick-rank" style="position: relative"><a href="">' + status + '</a><img class="lazy close-item-nick imgae-nick-rank" src="/assets/frontend/theme_3/image/nick/close.png" alt=""></div>';
            $('.nick-findter-data').prepend(htmlrank);
            $('.nick-findter-row').css('margin-top',16);
        }

        console.log(price)
    })

})

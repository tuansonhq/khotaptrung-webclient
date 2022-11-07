$('#txtSearch').donetyping(function() {


    let keyword = convertToSlug($(this).val());

    let index = 0;
    let value = 0;

    $('.entries_item_service').each(function (i,elm) {
        $(this).removeClass('dis-block-service');
    })

    $('.entries_item_service').each(function (i,elm) {

        let slug_item = $(elm).find('img').attr('alt');
        slug_item = convertToSlug(slug_item);
        $(this).toggle(slug_item.indexOf(keyword) > -1);
        if (slug_item.indexOf(keyword) > -1){
            ++index;
            $(this).addClass('dis-block-service');
        }else {}

        $('#btn-expand-serivce').remove();
        $('#btn-expand-serivce-search').remove();
    })

    $('.dis-block-service').each(function (i,elm) {
        if (i>=8){
            $(this).css('display','none');
        }
    })


    if (index <= 8){
        value = 1;
    }else if (index <= 16){
        value = 2;
    }else if (index <= 24){
        value = 3;
    }else if (index <= 32){
        value = 4;
    }else if (index <= 40){
        value = 5;
    }

    if (value > 1){

        let htmlservice = '<button id="btn-expand-serivce-search" class="expand-button" data-page-current="1" data-page-max="' + value + '">Xem thêm dịch vụ</button>';
        $('.fix-border-dich-vu').append(htmlservice);
    }

    if (index == 0){
        $('.data-service-search').css('display','block');
    }else {
        $('.data-service-search').css('display','none');
    }

    //$(this).val() // get the current value of the input field.
}, 400);

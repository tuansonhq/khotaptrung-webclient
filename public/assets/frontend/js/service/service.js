$(document).ready(function(){
    let page = $('#hidden_page_service').val();
    let append = $('#append-service').val();
    let is_over = false;
    let not_loaded = true;

    const media = "https://media-tt.nick.vn";

    loadDataService();

    $(window).scroll(function () {

        if ($(window).scrollTop() == $(document).height() - $(window).height() && !is_over && not_loaded) {

            page++;
            not_loaded = false;
            $('#hidden_page_service').val(page);
            $('#append-service').val(1);
            append = $('#append-service').val();

            var querry = $('.input-news').val();

            if (querry == '' || querry == undefined || querry == null){
                querry = $('.input-news-mobile').val();
            }

            loadDataService(page,querry,append)
        }
    });

    function loadDataService(page,querry, append = false) {

        request = $.ajax({
            type: 'GET',
            url: '/dich-vu/data',
            data: {
                page:page,
                querry:querry,
                append:append,
            },
            beforeSend: function (xhr) {

            },
            success: (data) => {

                let html = "";

                if (data.is_over){
                    is_over = true;
                } else {
                    if (data.append == 0){
                        data.data.forEach(function (data) {
                            html += '<div class="col-sm-6 col-lg-3">';
                            html += '<div class="item_buy_list_in">';
                            html += '<div class="item_buy_list_img">';
                            html += '<a href="/dich-vu/' + data.slug + '">';
                            html += '<img class="item_buy_list_img-main" src="'+media+data.image+'" alt="">';
                            html += '</a>';
                            html += '</div>';

                            html += '<div class="item_buy_list_info">';
                            html += '<div class="row">';
                            html += '<div class="col-12 item_buy_list_info_in">';
                            html += '<span style="font-weight: bold;color: #f7b03c;font-size: 16px;">';
                            html += 'DANH MỤC ';
                            html += data.title;
                            html += '</span>';
                            html += '</div>';

                            html += '<div class="col-12 item_buy_list_info_in">';
                            html += '<span>Hỗ trợ dịch vụ:</span> 5';
                            html += '</div>';

                            html += '<div class="col-12 item_buy_list_info_in">';
                            html += '<span>Giao dịch:</span> 19,878';
                            html += '</div>';

                            html += '</div>';
                            html += '</div>';

                            html += '<div class="item_buy_list_more">';
                            html += '<div class="row">';

                            html += '<a href="/dich-vu/' + data.slug + '" class="col-12">';
                            html += '<div class="item_buy_list_view">';
                            html += 'XEM TẤT CẢ';
                            html += '</div>';
                            html += '</a>';
                            html += '</div>';
                            html += '</div>';
                            html += '</div>';
                            html += '</div>';
                        });
                        $('#categoryservice_data').html('');
                        $('#categoryservice_data').html(html);
                    }else {
                        data.data.forEach(function (data) {
                            html += '<div class="col-sm-6 col-lg-3">';
                            html += '<div class="item_buy_list_in">';
                            html += '<div class="item_buy_list_img">';
                            html += '<a href="/dich-vu/' + data.slug + '">';
                            html += '<img class="item_buy_list_img-main" src="'+media+data.image+'" alt="">';
                            html += '</a>';
                            html += '</div>';

                            html += '<div class="item_buy_list_info">';
                            html += '<div class="row">';
                            html += '<div class="col-12 item_buy_list_info_in">';
                            html += '<span style="font-weight: bold;color: #f7b03c;font-size: 16px;">';
                            html += 'DANH MỤC ';
                            html += data.title;
                            html += '</span>';
                            html += '</div>';

                            html += '<div class="col-12 item_buy_list_info_in">';
                            html += '<span>Hỗ trợ dịch vụ:</span> 5';
                            html += '</div>';

                            html += '<div class="col-12 item_buy_list_info_in">';
                            html += '<span>Giao dịch:</span> 19,878';
                            html += '</div>';

                            html += '</div>';
                            html += '</div>';

                            html += '<div class="item_buy_list_more">';
                            html += '<div class="row">';

                            html += '<a href="/dich-vu/' + data.slug + '" class="col-12">';
                            html += '<div class="item_buy_list_view">';
                            html += 'XEM TẤT CẢ';
                            html += '</div>';
                            html += '</a>';
                            html += '</div>';
                            html += '</div>';
                            html += '</div>';
                            html += '</div>';
                        });
                        $('#categoryservice_data').append(html);
                    }
                    not_loaded = true;
                }

            },
            error: function (data) {

            },
            complete: function (data) {

            }
        });
    }

    $('.btn-category-service').click(function (e) {
        e.preventDefault();
        var querry = $('.input-news').val();
        if (querry == '' || querry == undefined || querry == null){
            return false;
        }

        $('#append-service').val(0);
        append = $('#append-service').val();
        is_over = false;
        $('#hidden_page_service').val(1);
        page = $('#hidden_page_service').val();

        loadDataService(page,querry,append);
    })

    $('.btn-category-service-mobile').click(function (e) {
        e.preventDefault();
        var querry = $('.input-news-mobile').val();
        if (querry == '' || querry == undefined || querry == null){
            return false;
        }

        $('#append-service').val(0);
        append = $('#append-service').val();
        is_over = false;
        $('#hidden_page_service').val(1);
        page = $('#hidden_page_service').val();

        loadDataService(page,querry,append);
    })

    $('.btn-tatca').click(function (e) {
        e.preventDefault();
        $('#append-service').val(0);
        append = $('#append-service').val();
        is_over = false;
        $('#hidden_page_service').val(1);
        page = $('#hidden_page_service').val();
        $('.input-news').val('');
        var querry = $('.input-news').val();
        loadDataService(page,querry,append);
    })

    $('.btn-tatca-mobile').click(function (e) {
        e.preventDefault();
        $('#append-service').val(0);
        append = $('#append-service').val();
        is_over = false;
        $('#hidden_page_service').val(1);
        page = $('#hidden_page_service').val();
        $('.input-news-mobile').val('');
        var querry = $('.input-news-mobile').val();
        loadDataService(page,querry,append);
    })
})

$(document).ready(function(){
    let page = $('#hidden_page').val();

    let is_over = false;
    let not_loaded = true;
    loadData();
    $(window).scroll(function () {
        if ($(window).scrollTop() == $(document).height() - $(window).height() && !is_over && not_loaded) {
            page++;
            not_loaded = false;
            $('.hidden_page').val(page);
            var querry = $('.input-news').val();
            let append = true;
            var slug = $('#slug-article').val();
            loadData(page,querry,append,slug)
        }
    })

    function loadData(page,querry, append = false,slug) {

        request = $.ajax({
            type: 'GET',
            url: '/tin-tuc/data',
            data: {
                page:page,
                append:append,
                querry:querry,
                slug:slug,
            },
            beforeSend: function (xhr) {
                $('#loading-item').removeClass('hide');
            },
            success: (data) => {
                console.log(data.append)
                if (data.is_over){
                    is_over = true;
                } else {
                    if (data.append == true){
                        let html = "";
                        data.data.forEach(function (data) {
                            html += '<div class="news_content_list_item">';
                                html += '<div class="news_content_list_image">';
                                    html += '<a href="/tin-tuc/' + data.slug + '">';
                                        html += '<img src="https://shopas.net/storage/images/L3JDAPVexq_1644229149.jpg" alt="">';
                                    html += '</a>';
                                html += '</div>';

                                html += '<div class="news_content_list_info">';
                                    html += '<div class="news_content_list_title">';
                                        html += '<a href="/tin-tuc/' + data.slug + '">'+ data.title +'</a>';
                                    html += '</div>';

                                    html += '<div class="news_content_list_date">';
                                        html += '<div>';
                                            html += '<i class="fas fa-calendar-alt"></i> ' + new Date(data.created_at).toLocaleDateString() +'';
                                        html += '</div>';
                                        html += '<div>';
                                            html += '<i class="fas fa-newspaper"></i><a href=""> ' + data.groups[0].title + ' </a>';
                                        html += '</div>';
                                    html += '</div>';

                                    html += '<div class="news_content_list_decription">';
                                        html += data.description;
                                    html += '</div>';
                                html += '</div>';
                            html += '</div>';
                        });
                        $('#article_data').append(html);

                    }else {
                        let html2 = "";
                        data.data.forEach(function (data) {
                            html2 += '<div class="news_content_list_item">';
                                html2 += '<div class="news_content_list_image">';
                                    html2 += '<a href="/tin-tuc/' + data.slug + '">';
                                        html2 += '<img src="https://shopas.net/storage/images/L3JDAPVexq_1644229149.jpg" alt="">';
                                    html2 += '</a>';
                                html2 += '</div>';

                                html2 += '<div class="news_content_list_info">';
                                    html2 += '<div class="news_content_list_title">';
                                        html2 += '<a href="/tin-tuc/' + data.slug + '">'+ data.title +'</a>';
                                    html2 += '</div>';

                                    html2 += '<div class="news_content_list_date">';
                                        html2 += '<div>';
                                            html2 += '<i class="fas fa-calendar-alt"></i> ' + new Date(data.created_at).toLocaleDateString() +'';
                                        html2 += '</div>';
                                        html2 += '<div>';
                                            html2 += '<i class="fas fa-newspaper"></i><a href=""> ' + data.groups[0].title + ' </a>';
                                        html2 += '</div>';
                                    html2 += '</div>';

                                html2 += '<div class="news_content_list_decription">';
                                html2 += data.description;
                                html2 += '</div>';

                            html2 += '</div>';
                            html2 += '</div>';
                        });

                        $('#article_data').html('');
                        $('#article_data').html(html2);
                    }

                    not_loaded = true;
                }

            },
            error: function (data) {

            },
            complete: function (data) {
                $('#loading-item').addClass('hide')
            }
        });
    }

    $('.btn-news').click(function (e) {
        var querry = $('.input-news').val();
        let append = false;
        $('#hidden_page').val(1);
        page = $('#hidden_page').val();

        if (querry == '' || querry == undefined || querry == null){
            return false;
        }
        is_over = false;
        var slug = $('#slug-article').val();

        loadData(page,querry,append,slug)
    })

    $('.btn-tatca').click(function (e) {
        let append = false;
        $('.input-news').val('');
        $('#hidden_page').val(1);
        page = $('#hidden_page').val();
        var querry = $('.input-news').val();
        is_over = false;
        $('#slug-article').val('');
        var slug = $('#slug-article').val();
        loadData(page,querry,append,slug);
    })

    $('body').on('click','.btn-slug',function(){

        var slug = $(this).data('slug');
        $('#slug-article').val(slug);
        $('.input-news').val('');
        var querry = $('.input-news').val();
        let append = false;
        $('#hidden_page').val(1);
        page = $('#hidden_page').val();
        is_over = false;
        loadData(page,querry,append,slug);

    })
});

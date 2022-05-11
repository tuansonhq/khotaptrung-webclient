$(document).ready(function(){
    let page = $('.hidden_page').val();
    const media = "https://media-tt.nick.vn";

    $(document).on('click', '.paginate__v1_index .pagination a',function(event){
        event.preventDefault();

        var page = $(this).attr('href').split('page=')[1];

        $('.hidden_page').val(page);

        $('li').removeClass('active');
        $(this).parent().addClass('active');

        var querry = $('.input-news').val();

        var slug = $('.slug-article').val();

        loadData(page,querry,slug)
    });

    function loadData(page,querry,slug) {

        var url = '/tin-tuc/'+ slug;

        request = $.ajax({
            type: 'GET',
            url: url,
            data: {
                page:page,
                querry:querry,
                slug:slug,
            },
            beforeSend: function (xhr) {
                $('#loading-item').removeClass('hide');
            },
            success: (data) => {
                $(".article_data").empty().html('');
                $(".article_data").empty().html(data);
            },
            error: function (data) {

            },
            complete: function (data) {
                $('#loading-item').addClass('hide')
            }
        });
    }

    $('.btn-news').click(function (e) {
        e.preventDefault();
        var querry = $('.input-news').val();

        $('.hidden_page').val(1);
        page = $('.hidden_page').val();

        var slug = $('.slug-article').val();

        loadData(page,querry,slug)
    })

});

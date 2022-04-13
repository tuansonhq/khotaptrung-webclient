$(document).ready(function(){
    let page = $('.hidden_page').val();
    const media = "https://media-tt.nick.vn";

    $(document).on('click', '.paginate__v1_index .pagination a',function(event){
        event.preventDefault();
        var page = $(this).attr('href').split('page=')[1];

        $('.hidden_page').val(page);

        $('li').removeClass('active');
        $(this).parent().addClass('active');

        var querry = $('.btn_new').val();

        loadData(page,querry)
    });

    function loadData(page,querry) {

        request = $.ajax({
            type: 'GET',
            url: '/blog/data',
            data: {
                page:page,
                querry:querry,
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

    $('.form_new').submit(function (e) {
        e.preventDefault();
        var querry = $('.btn_new').val();


    })

});

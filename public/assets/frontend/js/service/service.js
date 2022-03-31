$(document).ready(function(){
    let page = $('#hidden_page_service__show').val();

    loadDataService();

    $(document).on('click', '.paginate__v1__get__service .pagination a',function(event){
        event.preventDefault();

        var page = $(this).attr('href').split('page=')[1];

        $('#hidden_page_service__show').val(page);

        $('li').removeClass('active');
        $(this).parent().addClass('active');

        var title_data = $('.title_data').val();

        loadDataService(page,title_data)

    });

    function loadDataService(page,title) {
        var slug = 'dich-vu';
        request = $.ajax({
            type: 'GET',
            url: '/' + slug + '/data',
            data: {
                page:page,
                title:title,
            },
            beforeSend: function (xhr) {

            },
            success: (data) => {
                $("#getshowservice_data").empty().html('');
                $("#getshowservice_data").empty().html(data);
            },
            error: function (data) {

            },
            complete: function (data) {

            }
        });
    }

    $(document).on('submit', '.form_get_show_service', function(e){
        e.preventDefault();

        var title = $('.title').val();

        if (title == null || title == undefined || title == ''){
            $('.title_data').val('');
        }else {
            $('.title_data').val(title);
        }

        var title_data = $('.title_data').val();

        var page = $('#hidden_page_service__show').val();

        loadDataService(page,title_data)

    });

    $('body').on('click','.btn-all',function(e){

        $('.title_data').val('');

        var title_data = $('.title_data').val();

        var page = $('#hidden_page_service__show').val();

        loadDataService(page,title_data)

    });
})

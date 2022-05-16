$(document).ready(function(){
    let page = $('#hidden_page_service__show').val();

    // loadDataService();

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
        // if (page == null || page == '' || page == undefined){
        //     page = 1;
        // }
        request = $.ajax({
            type: 'GET',
            url: '/dich-vu',
            data: {
                page:page,
                title:title,
            },
            beforeSend: function (xhr) {

            },
            success: (data) => {
                if (data.status == 1){

                    $("#getshowservice_data").empty().html('');
                    $("#getshowservice_data").empty().html(data.data);

                }else if (data.status == 0){
                    console.log(data.message)
                    var html = '';
                    html += '<div class="row pb-3 pt-3"><div class="col-md-12 text-center"><span style="color: red;font-size: 16px;">Dữ liệu cần tìm không tồn tại, vui lòng thử lại.!</span></div></div>';

                    $("#getshowservice_data").empty().html('');
                    $("#getshowservice_data").empty().html(html);
                }

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

    $('body').on('click','.btn-tatca',function(e){
        e.preventDefault();
        // var htmlloading = '';
        // htmlloading += '<div class="loading"></div>';
        // $('.loading-data__all').html('');
        // $('.loading-data__all').html(htmlloading);

        $('.title_data').val('');
        $('.title').val('');

        var title_data = $('.title_data').val();

        var page = $('#hidden_page_service__show').val();

        loadDataService(page,title_data)

    });

    // $('.btn-news').click(function (e) {
    //     e.preventDefault();
    //     var querry = $('.input-news').val();
    //
    //     window.location.href = '/dich-vu?page=1&querry=' + querry + '';
    // })
})

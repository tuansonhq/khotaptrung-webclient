$(document).ready(function(){
    const csrf_token = $('meta[name="csrf-token"]').attr('content');
    const token =  $('meta[name="jwt"]').attr('content');
    let page = $('#hidden_page_service').val();

    $(document).on('click', '.paginate__v1 .pagination a',function(event){
        event.preventDefault();

        var page = $(this).attr('href').split('page=')[1];

        $('#hidden_page_service').val(page);

        $('li').removeClass('active');
        $(this).parent().addClass('active');
        var sort_by_data = $('.sort_by_data').val();
        var config_data = $('.config_data').val();
        var status_data = $('.status_data').val();
        var started_at_data = $('.started_at_data').val();
        var ended_at_data = $('.ended_at_data').val();

        loadDataAccountList(page,config_data,status_data,started_at_data,ended_at_data,sort_by_data)
    });

    $(document).on('submit', '.form-charge__accounttxns', function(e){
        e.preventDefault();

        var config = $('.config').val();
        var started_at = $('.started_at').val();
        var ended_at = $('.ended_at').val();
        var status = $('.status').val();

        if (started_at == null || started_at == undefined || started_at == ''){
            $('.started_at_data').val('');
        }else {
            $('.started_at_data').val(started_at);
        }

        if (ended_at == null || ended_at == undefined || ended_at == ''){
            $('.ended_at_data').val('');
        }else {
            $('.ended_at_data').val(ended_at);
        }

        if (config == null || config == undefined || config == ''){
            $('.config_data').val('');
        }else {
            $('.config_data').val(config);
        }

        if (status == null || status == undefined || status == ''){
            $('.status_data').val('');
        }else {
            $('.status_data').val(status);
        }

        var config_data = $('.config_data').val();

        var status_data = $('.status_data').val();
        var started_at_data = $('.started_at_data').val();
        var ended_at_data = $('.ended_at_data').val();
        var sort_by_data = $('.sort_by_data').val();
        var page = $('#hidden_page_service').val();


        loadDataAccountList(page,config_data,status_data,started_at_data,ended_at_data,sort_by_data)

    });

    $('body').on('click','.btn-all',function(e){

        $('.config_data').val('');
        $('.status_data').val('');
        $('.started_at_data').val('');
        $('.ended_at_data').val('');

        var config_data = $('.config_data').val();
        var status_data = $('.status_data').val();
        var started_at_data = $('.started_at_data').val();
        var ended_at_data = $('.ended_at_data').val();
        var page = $('#hidden_page_service').val();
        var sort_by_data = $('.sort_by_data').val();

        loadDataAccountList(page,config_data,status_data,started_at_data,ended_at_data,sort_by_data)

    });

    $('body').on('change','.sort_by',function(e){

        var config_data = $('.config_data').val();

        var status_data = $('.status_data').val();
        var started_at_data = $('.started_at_data').val();
        var ended_at_data = $('.ended_at_data').val();

        var sort_by = $('.sort_by').val();
        $('.sort_by_data').val(sort_by);
        var sort_by_data = $('.sort_by_data').val();

        var page = $('#hidden_page_service').val();

        loadDataAccountList(page,config_data,status_data,started_at_data,ended_at_data,sort_by_data)

    });
    loadDataAccountList()
    function loadDataAccountList(page,config_data,status_data,started_at_data,ended_at_data,sort_by_data) {
        if (page == null || page == '' || page == undefined){
            page = 1;
        }
        request = $.ajax({
            type: 'GET',
            url: '/lich-su-giao-dich',
            data: {
                page:page,
                config:config_data,
                status:status_data,
                started_at:started_at_data,
                ended_at:ended_at_data,
                sort_by:sort_by_data,
            },
            beforeSend: function (xhr) {

            },
            success: (data) => {
                // console.log(data)
                if (data.status == 1){


                    $("#data_lich__su_history").empty().html('');
                    $("#data_lich__su_history").empty().html(data.data);

                    $(".data__status").empty().html('');
                    $(".data__status").empty().html(data.datastatus);

                    $(".data__config").empty().html('');
                    $(".data__config").empty().html(data.dataconfig);
                    $(".booking_detail")[0].scrollIntoView();

                }

            },
            error: function (data) {

            },
            complete: function (data) {

            }
        });
    }
})

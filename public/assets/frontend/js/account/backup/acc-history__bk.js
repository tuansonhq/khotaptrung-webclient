$(document).ready(function(){

    $(document).on('click', '.paginate__v1 .pagination a',function(event){
        event.preventDefault();

        var page = $(this).attr('href').split('page=')[1];

        $('#hidden_page_service').val(page);

        $('li').removeClass('active');
        $(this).parent().addClass('active');

        var serial_data = $('.serial_data').val();
        var key_data = $('.key_data').val();
        var price_data = $('.price_data').val();
        var status_data = $('.status_data').val();
        var started_at_data = $('.started_at_data').val();
        var ended_at_data = $('.ended_at_data').val();

        loadDataAccountList(page,serial_data,key_data,price_data,status_data,started_at_data,ended_at_data)
    });

    function loadDataAccountList(page,serial,key,price,status,started_at,ended_at) {

        request = $.ajax({
            type: 'GET',
            url: '/lich-su-mua-account/data',
            data: {
                page:page,
                serial:serial,
                key:key,
                price:price,
                status:status,
                started_at:started_at,
                ended_at:ended_at,
            },
            beforeSend: function (xhr) {

            },
            success: (data) => {
                $("#data_pay_account_history").empty().html('');
                $("#data_pay_account_history").empty().html(data);
            },
            error: function (data) {

            },
            complete: function (data) {

            }
        });
    }

    $(document).on('submit', '.form-charge', function(e){
        e.preventDefault();

        var serial = $('.serial').val();
        var key = $('.key').val();
        var price = $('.price').val();
        var status = $('.status').val();
        var started_at = $('.started_at').val();
        var ended_at = $('.ended_at').val();

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

        if (serial == null || serial == undefined || serial == ''){
            $('.serial_data').val('');
        }else {
            $('.serial_data').val(serial);
        }

        if (key == null || key == undefined || key == ''){
            $('.key_data').val('');
        }else {
            $('.key_data').val(key);
        }

        if (price == null || price == undefined || price == ''){
            $('.price_data').val('');
        }else {
            $('.price_data').val(price);
        }

        if (status == null || status == undefined || status == ''){
            $('.status_data').val('');
        }else {
            $('.status_data').val(status);
        }

        if (itemselect == null || itemselect == undefined || itemselect == ''){
            $('.select_data').val('');
        }else {
            $('.select_data').val(itemselect);
        }


        var serial_data = $('.serial_data').val();
        var key_data = $('.key_data').val();
        var price_data = $('.price_data').val();
        var status_data = $('.status_data').val();
        var started_at_data = $('.started_at_data').val();
        var ended_at_data = $('.ended_at_data').val();

        var page = $('#hidden_page_service').val();

        loadDataAccountList(page,serial_data,key_data,price_data,status_data,started_at_data,ended_at_data)

    });

    $('body').on('click','.btn-all',function(e){

        $('.serial_data').val('');
        $('.key_data').val('');
        $('.price_data').val('');
        $('.status_data').val('');
        $('.started_at_data').val('');
        $('.ended_at_data').val('');

        var serial_data = $('.serial_data').val();
        var key_data = $('.key_data').val();
        var price_data = $('.price_data').val();
        var status_data = $('.status_data').val();
        var started_at_data = $('.started_at_data').val();
        var ended_at_data = $('.ended_at_data').val();

        var page = $('#hidden_page_service').val();

        loadDataAccountList(page,serial_data,key_data,price_data,status_data,started_at_data,ended_at_data)

    });
})

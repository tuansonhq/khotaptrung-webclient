$(document).ready(function(){

    let page = $('#hidden_page_service').val();

    $(document).on('click', '.paginate__v1 .pagination a',function(event){
        event.preventDefault();

        var page = $(this).attr('href').split('page=')[1];

        $('#hidden_page_service').val(page);

        $('li').removeClass('active');
        $(this).parent().addClass('active');

        loadDataAccountList(page);
    });

    function loadDataAccountList(page) {
        let slug_category = $('.slug_category').val();
        let slug = $('.slug').val();

        var url = '/' + slug_category + '/' + slug + '/data';
        // alert(url)
        request = $.ajax({
            type: 'GET',
            url: url,
            data: {
                page:page,
            },
            beforeSend: function (xhr) {

            },
            success: (data) => {
                $("#account_data").empty().html('');
                $("#account_data").empty().html(data);
            },
            error: function (data) {

            },
            complete: function (data) {

            }
        });
    }

    $(document).on('submit', '.form-charge', function(e){
        e.preventDefault();

        var serial_data = $('.serial').val();
        $('.serial_data').val(serial_data);
        var key_data = $('.key').val();
        $('.key_data').val(key_data);
        var status_data =  $('.status').val();
        $('.status_data').val(status_data);
        var started_at_data = $('.started_at').val();
        $('.started_at_data').val(started_at_data);
        var ended_at_data =  $('.ended_at').val();
        $('.ended_at_data').val(ended_at_data);

        var serial = $('.serial_data').val();
        var key =  $('.key_data').val();
        var status =  $('.status_data').val();
        var started_at = $('.started_at_data').val();
        var ended_at =  $('.ended_at_data').val();
        var page = $('#hidden_page').val();

        loadDataChargeHistory(page, serial, key, status,started_at,ended_at);
    });

    $('body').on('click','.btn-hom-nay',function(e){

        var datestartTime = $('.started_at_day').val();

        var dateEndTime = $('.end_at_day').val();

        //alert(dateEndTime + datestartTime)
        $('.serial').val('');
        $('.key').val('');
        $('.status').val('');
        $('.started_at').val('');
        $('.ended_at').val('');
        $('.serial_data').val('');
        $('.key_data').val('');
        $('.status_data').val('');
        $('.started_at_data').val(datestartTime);
        $('.ended_at_data').val(dateEndTime);

        var serial = $('.serial_data').val();
        var key =  $('.key_data').val();
        var status =  $('.status_data').val();
        var started_at = $('.started_at_data').val();
        var ended_at =  $('.ended_at_data').val();

        loadDataChargeHistory(page, serial, key, status,started_at,ended_at);

    });

    $('body').on('click','.btn-hom-qua',function(e){

        var datestartTime = $('.started_at_yes').val();
        var dateEndTime = $('.end_at_yes').val();

        $('.serial').val('');
        $('.key').val('');
        $('.status').val('');
        $('.started_at').val('');
        $('.ended_at').val('');
        $('.serial_data').val('');
        $('.key_data').val('');
        $('.status_data').val('');
        $('.started_at_data').val(datestartTime);
        $('.ended_at_data').val(dateEndTime);

        var serial = $('.serial_data').val();
        var key =  $('.key_data').val();
        var status =  $('.status_data').val();
        var started_at = $('.started_at_data').val();
        var ended_at =  $('.ended_at_data').val();

        loadDataChargeHistory(page, serial, key, status,started_at,ended_at);

    });

    $('body').on('click','.btn-thang-nay',function(e){

        var datestartTime = $('.started_at_month').val();
        var dateEndTime = $('.end_at_month').val();

        $('.serial').val('');
        $('.key').val('');
        $('.status').val('');
        $('.started_at').val('');
        $('.ended_at').val('');
        $('.serial_data').val('');
        $('.key_data').val('');
        $('.status_data').val('');
        $('.started_at_data').val(datestartTime);
        $('.ended_at_data').val(dateEndTime);

        var serial = $('.serial_data').val();
        var key =  $('.key_data').val();
        var status =  $('.status_data').val();
        var started_at = $('.started_at_data').val();
        var ended_at =  $('.ended_at_data').val();

        loadDataChargeHistory(page, serial, key, status,started_at,ended_at);

    });

    $('body').on('click','.btn-all',function(e){

        $('.serial').val('');
        $('.key').val('');
        $('.status').val('');
        $('.started_at').val('');
        $('.ended_at').val('');
        $('.serial_data').val('');
        $('.key_data').val('');
        $('.status_data').val('');
        $('.started_at_data').val('');
        $('.ended_at_data').val('');

        var serial = $('.serial_data').val();
        var key =  $('.key_data').val();
        var status =  $('.status_data').val();
        var started_at = $('.started_at_data').val();
        var ended_at =  $('.ended_at_data').val();

        loadDataChargeHistory(page, serial, key, status,started_at,ended_at);

    });

})

$(document).ready(function(){
    const csrf_token = $('meta[name="csrf-token"]').attr('content');
    const token =  $('meta[name="jwt"]').attr('content');
    let page = $('#hidden_page').val();

    $(document).on('click', '.paginate__v1 .pagination a',function(event){
        event.preventDefault();

        var page = $(this).attr('href').split('page=')[1];

        $('#hidden_page').val(page);

        $('li').removeClass('active');
        $(this).parent().addClass('active');

        var id_data = $('.id_data').val();
        var key_data = $('.key_data').val();
        var status_data = $('.status_data').val();
        var started_at_data = $('.started_at_data').val();
        var ended_at_data = $('.ended_at_data').val();

        loadDataServiceHistory(page,id_data,key_data,status_data,started_at_data,ended_at_data)
    });

    loadDataServiceHistory()

    function loadDataServiceHistory(page,id_data,key_data,status_data,started_at_data,ended_at_data) {

        if (page == null || page == '' || page == undefined){
            page = 1;
        }

        request = $.ajax({
            type: 'GET',
            url: '/dich-vu-da-mua/data',
            data: {
                page:page,
                id:id_data,
                key:key_data,
                status:status_data,
                started_at:started_at_data,
                ended_at:ended_at_data,
            },
            beforeSend: function (xhr) {

            },
            success: (data) => {

                $('#data_service_history').html('');
                $('#data_service_history').html(data.data);

            },
            error: function (data) {

            },
            complete: function (data) {

            }
        });
    }

    $(document).on('submit', '.account_service_history__v2', function(e){
        e.preventDefault();

        // var htmlloading = '';
        //
        // htmlloading += '<div class="loading"></div>';
        // $('.loading-data__timkiem').html('');
        // $('.loading-data__timkiem').html(htmlloading);

        var id = $('.id').val();
        var key = $('.key').val();
        var status = $('.status').val();
        var started_at = $('.started_at').val();
        var ended_at = $('.ended_at').val();

        if (id == null || id == undefined || id == ''){
            $('.id_data').val('');
        }else {
            $('.id_data').val(id);
        }

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

        if (key == null || key == undefined || key == ''){
            $('.key_data').val('');
        }else {
            $('.key_data').val(key);
        }

        if (status == null || status == undefined || status == ''){
            $('.status_data').val('');
        }else {
            $('.status_data').val(status);
        }


        var id_data = $('.id_data').val();
        var key_data = $('.key_data').val();
        var status_data = $('.status_data').val();
        var started_at_data = $('.started_at_data').val();
        var ended_at_data = $('.ended_at_data').val();
        var page = $('#hidden_page').val();

        loadDataServiceHistory(page,id_data,key_data,status_data,started_at_data,ended_at_data)

    });

    $('body').on('click','.btn-all',function(e){
        e.preventDefault();

        $('.id_data').val('');
        $('.key_data').val('');
        $('.status_data').val('');
        $('.started_at_data').val('');
        $('.ended_at_data').val('');

        var id_data = $('.id_data').val();
        var key_data = $('.key_data').val();
        var status_data = $('.status_data').val();
        var started_at_data = $('.started_at_data').val();
        var ended_at_data = $('.ended_at_data').val();
        var page = $('#hidden_page').val();

        loadDataServiceHistory(page,id_data,key_data,status_data,started_at_data,ended_at_data)

    });

    $('body').on('click','.btn-hom-nay',function(e){
        e.preventDefault();
        var datestartTime = $('.started_at_day_dv').val();

        var dateEndTime = $('.end_at_day_dv').val();

        $('.id_data').val('');
        $('.key_data').val('');
        $('.status_data').val('');
        $('.started_at_data').val(datestartTime);
        $('.ended_at_data').val(dateEndTime);

        var id_data = $('.id_data').val();
        var key_data =  $('.key_data').val();
        var status_data =  $('.status_data').val();
        var started_at_data = $('.started_at_data').val();
        var ended_at_data =  $('.ended_at_data').val();
        var page = $('#hidden_page').val();

        loadDataServiceHistory(page,id_data,key_data,status_data,started_at_data,ended_at_data)

    });

    $('body').on('click','.btn-hom-qua',function(e){
        e.preventDefault();
        var datestartTime = $('.started_at_yes_dv').val();
        var dateEndTime = $('.end_at_yes_dv').val();

        $('.id_data').val('');
        $('.key_data').val('');
        $('.status_data').val('');
        $('.started_at_data').val(datestartTime);
        $('.ended_at_data').val(dateEndTime);

        var id_data = $('.id_data').val();
        var key_data =  $('.key_data').val();
        var status_data =  $('.status_data').val();
        var started_at_data = $('.started_at_data').val();
        var ended_at_data =  $('.ended_at_data').val();
        var page = $('#hidden_page').val();

        loadDataServiceHistory(page,id_data,key_data,status_data,started_at_data,ended_at_data)

    });

    $('body').on('click','.btn-thang-nay',function(e){
        e.preventDefault();
        var datestartTime = $('.started_at_month_dv').val();
        var dateEndTime = $('.end_at_month_dv').val();

        $('.id_data').val('');
        $('.key_data').val('');
        $('.status_data').val('');
        $('.started_at_data').val(datestartTime);
        $('.ended_at_data').val(dateEndTime);

        var id_data = $('.id_data').val();
        var key_data =  $('.key_data').val();
        var status_data =  $('.status_data').val();
        var started_at_data = $('.started_at_data').val();
        var ended_at_data =  $('.ended_at_data').val();
        var page = $('#hidden_page').val();

        loadDataServiceHistory(page,id_data,key_data,status_data,started_at_data,ended_at_data)

    });

    $('body').on('click','#btnDestroy',function(e){
        e.preventDefault();
        var id = $(this).data('id');

        console.log(id)
        getDestroyModal(id);

    })

    function getDestroyModal(id) {

        request = $.ajax({
            type: 'GET',
            url: 'destroyservice',
            data: {
                id:id
            },
            beforeSend: function (xhr) {

            },
            success: (data) => {

                if (data.status == 1){

                    $('#destroyModal').modal('show');
                }else {
                    window.location.reload();
                }


            },
            error: function (data) {

            },
            complete: function (data) {

            }
        });
    }

    $(document).on('submit', '.destroyForm', function(e){
        e.preventDefault();

        var formSubmit = $(this);
        var url = formSubmit.attr('action');
        var btnSubmit = formSubmit.find(':submit');
        btnSubmit.prop('disabled', true);

        $.ajax({
            type: "POST",
            url: url,
            data: formSubmit.serialize(), // serializes the form's elements.
            beforeSend: function (xhr) {

            },
            success: function (response) {
                // console.log(response)
                if(response.status == 1){
                    $('#destroyModal').modal('hide');

                    $('.btnDestroy__data').html('');
                    swal({
                        title: "Thông báo!",
                        text: response.message,
                        type: "success",
                        confirmButtonText: "Đóng!",
                    })
                        .then((result) => {
                            if (result.value) {
                                window.location.reload();
                            }
                        })
                }

            },
            error: function (response) {
                if(response.status === 422 || response.status === 429) {
                    let errors = response.responseJSON.errors;

                    jQuery.each(errors, function(index, itemData) {
                        // console.log(itemData);
                        formSubmit.find('.notify-error').text(itemData[0]);
                        return false; // breaks
                    });
                }else if(response.status === 0){
                    alert(response.message);
                    $('#text__errors').html('<span class="text-danger pb-2" style="font-size: 14px">'+response.message+'</span>');
                }
                else {
                    $('#text__errors').html('<span class="text-danger pb-2" style="font-size: 14px">'+'Kết nối với hệ thống thất bại.Xin vui lòng thử lại'+'</span>');
                }
            },
            complete: function (data) {
                btnSubmit.prop('disabled', false);
            }
        })


    })

    $('body').on('click','#btn-edit',function(e){
        e.preventDefault();
        var id = $(this).data('id');
        var index = $('.index').val();

        getEditModal(id,index);

    })

    function getEditModal(id,index) {

        request = $.ajax({
            type: 'GET',
            url: 'editservice',
            data: {
                id:id,
                index:index
            },
            beforeSend: function (xhr) {

            },
            success: (data) => {

                if (data.status == 1){

                    $('#edit_info').modal('show');
                }else {
                    window.location.reload();
                }


            },
            error: function (data) {

            },
            complete: function (data) {

            }
        });
    }

    $(document).on('submit', '.editForm', function(e){
        e.preventDefault();

        var formSubmit = $(this);
        var url = formSubmit.attr('action');
        var btnSubmit = formSubmit.find(':submit');
        btnSubmit.prop('disabled', true);

        $.ajax({
            type: "POST",
            url: url,
            data: formSubmit.serialize(), // serializes the form's elements.
            beforeSend: function (xhr) {

            },
            success: function (response) {

                if(response.status == 1){
                    $('#edit_info').modal('hide');

                    swal({
                        title: "Thông báo!",
                        text: response.message,
                        type: "success",
                        confirmButtonText: "Đóng!",
                    })
                        .then((result) => {
                            if (result.value) {
                                window.location.reload();
                            }
                        })
                }

            },
            error: function (response) {
                if(response.status === 422 || response.status === 429) {
                    let errors = response.responseJSON.errors;

                    jQuery.each(errors, function(index, itemData) {
                        // console.log(itemData);
                        formSubmit.find('.notify-error').text(itemData[0]);
                        return false; // breaks
                    });
                }else if(response.status === 0){
                    alert(response.message);
                    $('#text__errors').html('<span class="text-danger pb-2" style="font-size: 14px">'+response.message+'</span>');
                }
                else {
                    $('#text__errors').html('<span class="text-danger pb-2" style="font-size: 14px">'+'Kết nối với hệ thống thất bại.Xin vui lòng thử lại'+'</span>');
                }
            },
            complete: function (data) {
                btnSubmit.prop('disabled', false);
            }
        })


    })
})

$(document).ready(function(){

    // $('#telecard').change(function () {
    //     // $("#telecard").on('change', function(){
    //     $('.hide').show();
    //     telecom = $(this).val();
    //     $.ajax({
    //         type: 'GET',
    //         dataType: "json",
    //         data: {
    //             telecom: telecom,
    //
    //         },
    //         url: "/telecom-deposit-auto",
    //         success: function (response) {
    //             console.log(response.data.data)
    //             $('select[name="amount"]').find('option:not(:first)').remove();
    //             for(i = 0; i < response.data.data.length; i++) {
    //
    //                 tele = response.data.data[i];
    //                 let html = '';
    //                 html +=''
    //                 html += '<option value="'+ tele['amount'] +'">'+ tele['amount'] +' VNĐ (nhận ' + tele['agency_ratio_true_amount'] +'%) </option>';
    //                 $('select[name="amount"]').append(html)
    //
    //             };
    //         }
    //     });
    //
    //
    // });
    //
    // $('#reload').click(function () {
    //     $.ajax({
    //         type: 'GET',
    //         url: 'reload-captcha',
    //         success: function (data) {
    //             $(".captcha span").html(data.captcha);
    //         }
    //     });
    // });
    //
    // $('#form-charge').submit(function (e) {
    //     e.preventDefault();
    //     var formSubmit = $(this);
    //     var url = formSubmit.attr('action');
    //     var btnSubmit = formSubmit.find(':submit');
    //     btnSubmit.text('Đang xử lý...');
    //     btnSubmit.prop('disabled', true);
    //     $.ajax({
    //         type: "POST",
    //         url: url,
    //         cache:false,
    //         data: formSubmit.serialize(), // serializes the form's elements.
    //         beforeSend: function (xhr) {
    //
    //         },
    //         success: function (data) {
    //             console.log(data);
    //             if(data.status == 1){
    //                 alert(data.message);
    //
    //                 // formSubmit.remove();
    //             }
    //             else{
    //                 alert(data);
    //                 btnSubmit.text('Xác nhận');
    //                 btnSubmit.prop('disabled', false);
    //             }
    //         },
    //         error: function (data) {
    //             // console.log(data.responseJSON.errors[1])
    //             alert('Điền đúng mã capcha');
    //             btnSubmit.text('Xác nhận');
    //             btnSubmit.prop('disabled', false);
    //         },
    //         complete: function (data) {
    //             $('#imgcaptcha').trigger('click');
    //             $('#form-recharge').trigger("reset");
    //         }
    //     });
    // });

    // get profile
    $(document).ready(function(){
        const csrf_token = $('meta[name="csrf-token"]').attr('content');
        const token =  $('meta[name="jwt"]').attr('content');
        function getInfo(){
            const url = '/profile';
            $.ajax({
                type: "GET",
                url: url,
                cache:false,
                data: {
                    _token:csrf_token,
                    jwt:token
                },
                beforeSend: function (xhr) {

                },
                success: function (data) {

                    if(data.status === "LOGIN"){
                        window.location.href = '/logout';
                        // method = method || 'post';
                        return;
                    }
                    if(data.status === "ERROR"){
                        alert('Lỗi dữ liệu, vui lòng load lại trang để tải lại dữ liệu')
                    }
                    if(data.status == true){
                        $('#tele_user_id strong').html(data.info.id)
                        $('#tele_user_name').html('<input type="text" class="form-control" name="user_name" placeholder="" value="'+data.info.username+ '" readonly>')
                    }
                },
                error: function (data) {
                    alert('Có lỗi phát sinh, vui lòng liên hệ QTV để kịp thời xử lý!')
                    return;
                },
                complete: function (data) {

                }
            });
        }
        getInfo();
    });
    // get tele
    const csrf_token = $('meta[name="csrf-token"]').attr('content');
    const token =  $('meta[name="jwt"]').attr('content');
    function getTele (){
        const url = '/get-tele-card';
        $.ajax({
            type: "GET",
            url: url,
            cache:false,
            data: {
                _token:csrf_token,
                jwt:token
            },
            beforeSend: function (xhr) {

            },
            success: function (data) {
                console.log(111)
                console.log(data.tele)
                if(data.status === "LOGIN"){
                    window.location.href = '/logout';
                    // method = method || 'post';
                    return;
                }
                if(data.status === "ERROR"){
                    alert('Lỗi dữ liệu, vui lòng load lại trang để tải lại dữ liệu')
                }
                if(data.status == true){
                    $('select[name="telecom"]').find('option').remove();
                    for(i = 0; i < data.tele.length; i++) {
                        console.log(data.tele[0])
                        tele = data.tele[i];
                        let html = '';
                        html +=''
                        html += '<option value="'+ tele['key'] +'">'+ tele['title'] +'</option>';
                        $('select[name="telecom"]').append(html);
                        GetAmountTele();
                    };

                }
            },
            error: function (data) {
                alert('Có lỗi phát sinh, vui lòng liên hệ QTV để kịp thời xử lý!')
                return;
            },
            complete: function (data) {

            }
        });
    }
    getTele();

    // get amount

    $("#telecom").on('change', function () {
        GetAmountTele();

    });

    // $(function () {
    $('#telecom').change(function () {
        GetAmountTele()

    });
    function GetAmountTele(){
        $('.hide').show();
        telecom = $("#telecom").val();
        $.ajax({
            type: 'GET',
            dataType: "json",
            data: {
                telecom: telecom,

            },
            url: "/telecom-deposit-auto",
            success: function (response) {

                console.log(response.data)
                $('select[name="amount"]').find('option:not(:first)').remove();
                for(i = 0; i < response.data.data.length; i++) {
                    console.log(response.data.data[0])
                    tele = response.data.data[i];
                    let html = '';
                    html +=''
                    html += '<option value="'+ tele['amount'] +'">'+ formatNumber(tele['amount']) +' VNĐ (nhận ' + tele['ratio_true_amount'] +' %) </option>';
                    $('select[name="amount"]').append(html)
                };


            }

        });
    }

    $('#form-charge-input').submit(function (e) {
        e.preventDefault();
        var formSubmit = $(this);
        var url = formSubmit.attr('action');
        var btnSubmit = formSubmit.find(':submit');
        $.ajax({
            type: "POST",
            url: url,
            cache:false,
            data: formSubmit.serialize(), // serializes the form's elements.
            beforeSend: function (xhr) {
            },
            success: function (data) {
                console.log(data);
                if(data.status == 1){
                    alert(data.message);
                }
                else{
                    alert(data);
                    btnSubmit.text('Thanh toán');
                    btnSubmit.prop('disabled', false);
                }
            },
            error: function (data) {
                alert('Kết nối với hệ thống thất bại.Xin vui lòng thử lại');
                btnSubmit.text('Xác nhận');
            },
            complete: function (data) {
                $('#reload').trigger('click');
                $('#form-charge-input').trigger("reset");
            }
        });
    });


    $('#reload').click(function () {
        $.ajax({
            type: 'GET',
            url: 'reload-captcha',
            success: function (data) {
                $(".captcha span").html(data.captcha);
            }
        });

    });

    let page = $('#hidden_page_service').val();

    $(document).on('click', '.paginate__v1 .pagination a',function(event){
        event.preventDefault();

        var page = $(this).attr('href').split('page=')[1];

        $('#hidden_page').val(page);

        $('li').removeClass('active');
        $(this).parent().addClass('active');


        loadDataChargeHistory(page);
    });

    function loadDataChargeHistory(page) {

        request = $.ajax({
            type: 'GET',
            url: '/nap-the-tu-dong/data',
            data: {
                page:page,
            },
            beforeSend: function (xhr) {

            },
            success: (data) => {
                $("#data_pay_card_history").empty().html('');
                $("#data_pay_card_history").empty().html(data);
            },
            error: function (data) {

            },
            complete: function (data) {

            }
        });
    }


    // nap the trang chủ

    GetAmount();
    $("#tele_card").on('change', function () {
        GetAmount();

    });

    // $("#amount").on('change', function () {
    //     UpdatePrice();
    // });
    //
    // $("#quantity").on('change', function () {
    //     UpdatePrice();
    // });

    // $(function () {
    $('#tele_card').change(function () {
        // $("#telecard").on('change', function(){

    });
    function GetAmount(){
        $('.hide').show();
        telecom = $("#tele_card").val();
        $.ajax({
            type: 'GET',
            dataType: "json",
            data: {
                telecom: telecom,

            },
            url: "/get-amount-card",
            success: function (response) {

                console.log(response.data)
                $('select[name="tele_amount"]').find('option').remove();
                for(i = 0; i < response.data.data.length; i++) {

                    tele = response.data.data[i];
                    let html = '';
                    html +=''
                    html += '<option value="'+ tele['amount'] +'" rel-ratio="'+ tele['ratio_default']+'">'+ formatNumber(tele['amount'])  +' VNĐ - ' + tele['ratio_default'] +'% </option>';
                    $('select[name="amount"]').append(html)
// js
                    UpdatePrice();
                };


            }

        });
    }function formatNumber(num) {
        return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
    }

    // nạp thẻ trang chủ

})

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


    GetAmountTele();
    $("#telecom").on('change', function () {
        GetAmount();

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
                    html += '<option value="'+ tele['amount'] +'">'+ tele['amount'] +' VNĐ (nhận ' + tele['ratio_true_amount'] +' %) </option>';
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
        alert(111)
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
            url: "/nap-the",
            success: function (response) {

                console.log(response.data)
                $('select[name="tele_amount"]').find('option').remove();
                for(i = 0; i < response.data.data.length; i++) {

                    tele = response.data.data[i];
                    let html = '';
                    html +=''
                    html += '<option value="'+ tele['amount'] +'" rel-ratio="'+ tele['ratio_default']+'">'+ tele['amount'] +' VNĐ - ' + tele['ratio_default'] +'% </option>';
                    $('select[name="amount"]').append(html)
// js
                    UpdatePrice();
                };


            }

        });
    }

    // nạp thẻ trang chủ

})

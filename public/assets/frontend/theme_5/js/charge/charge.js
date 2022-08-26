var dataSend = {
    type: null,
    pin: null,
    serial: null,
    captcha: null,
    amount: null,
    _token: $('meta[name="csrf-token"]').attr('content'),
}

function formatNumber(num) {
    return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.')
}

//append new data into confirm modal
function prepareConfirmData() {
    let cardChecked = $('input[name="amount"]:checked');
    let confirmTitle = $('#telecom').val();
    let confirmDiscount = $(cardChecked).data('ratio');
    let confirmPrice = $(cardChecked).val();

    if ( !confirmDiscount || confirmDiscount < 0 ) {
        confirmDiscount = 100;
    }

    let saleAmount = confirmPrice - (confirmPrice * confirmDiscount / 100);
    let totalAmount = confirmPrice - saleAmount;

    if ( saleAmount > 0  && totalAmount > 0 ) {
        $('#totalBill').text(`${ formatNumber(totalAmount)}`);
        $('#totalBillMobile').text(`${ formatNumber(totalAmount)}`);
    } else {
        $('#totalBill').text(`${ formatNumber(confirmPrice)}`);
        $('#totalBillMobile').text(`${ formatNumber(confirmPrice)}`);
    }

    $('#confirmTitle').text(confirmTitle);
    $('#confirmTitleMobile').text(confirmTitle);
    $('#confirmPrice').text(`${formatNumber( confirmPrice )} đ`);
    $('#confirmPriceMobile').text(`${formatNumber( confirmPrice )} đ`);
    $('#confirmDiscount').text(`${confirmDiscount}%`);
    $('#confirmDiscountMobile').text(`${confirmDiscount}%`);
}

//Append new data to submit to backend
function prepareDataSend() {
    let cardChecked = $('input[name="amount"]:checked');
    let pin = $('input[name="pin"]').val().trim();
    let serial = $('input[name="serial"]').val().trim();
    let captcha = $('input[name="captcha"]').val().trim();
    let type = $('#telecom').val();
    let amount = $(cardChecked).val();

    dataSend.type = type;
    dataSend.pin = pin;
    dataSend.serial = serial;
    dataSend.captcha = captcha;
    dataSend.amount = amount;
}

function showConfirmContent () {
    prepareConfirmData();
    prepareDataSend();
    //Close recharge modal if page has this modal
    $('#rechargeModal').modal('hide');
    if ( $(window).width() >= 992 ) { 
        $('#orderCharge').modal('show');
    } else {
        $('#chargeConfirmStep').css('transform', 'translateX(0)');
    }
}

function showHomeConfirmContent () {
    prepareConfirmData();
    prepareDataSend();
    if ( $(window).width() >= 992 ) { 
        $('#orderCharge').modal('show');
    } else {
        $('#step2NT').css('transform', 'translateX(0)');
    }
}

$(document).ready(function () {

    getTelecom();

    $(document).on('click', '#handleOpenRechargeModal',function(e){
        $('#rechargeModal').modal('show');
    });

    //Change web url when switch tab
    $('#chargeNavTab').click(function () {
        let base_url = `${window.location.origin}/nap-the`;
        window.history.pushState("charge_card","", base_url);
    });
    $('#atmNavTab').click(function () {
        let base_url = `${window.location.origin}/recharge-atm`;
        window.history.pushState("charge_card","", base_url);
    });

    $('#telecom').on('change', function () {
        let telecom = $(this).val();
        getAmount(telecom);
    });

    $('#reload_1').click(function () {
        $.ajax({
            type: 'GET',
            url: '/reload-captcha2',
            beforeSend: function () {
                $('.refresh-captcha img').removeClass("paused");
                $("#capchaImage").empty();
            },
            success: function (data) {
                $("#capchaImage").html(data);
            },
            complete: function () {
                setTimeout( function () {
                    $('.refresh-captcha img').addClass("paused");
                }, 1000);
            }
        });
    });

    $(document).on('click', '#confirmSubmitButton', function(e) {
        e.preventDefault();
        $.ajax({
            url:'/nap-the',
            type:'POST',
            data: dataSend,
            beforeSend: function () {
                $('#confirmSubmitButton').prop("disabled", true);
                $('#confirmSubmitButton').text("Đang xử lý");
                //Delete text in success and fail modal
                $('#successMessage').text('');
                $('#failMessage').text('');
            },
            success:function (res) {

                $('#orderCharge').modal('hide');

                if(res.status == 1) {
                    $('#successMessage').text(res.message);
                    $('#modalSuccessPayment').modal('show');
                }
                else if(res.status == 401){
                    $('#failMessage').text('Bạn cần phải đăng nhập để hoàn thiện giao dịch!');
                    $('#modalFailPayment').modal('show');
                }
                else if(res.status == 0){
                    $('#failMessage').text(res.message);
                    $('#modalFailPayment').modal('show');
                }
                else{
                    $('#failMessage').text('Đã có lỗi xảy ra!');
                    $('#modalFailPayment').modal('show');
                }
            },
            error: function (res) {
                $('#orderCharge').modal('hide');
                $('#failMessage').text('Đã có lỗi xảy ra!');
                $('#modalFailPayment').modal('show');
            },
            complete: function () {
                $('#reload_1').trigger('click');
                $('#confirmSubmitButton').prop("disabled", false);
                $('#confirmSubmitButton').text("Xác nhận");
            }
        });
    });

    $(document).on('click', '#confirmSubmitButtonMobile', function(e) {
        e.preventDefault();
        $.ajax({
            url:'/nap-the',
            type:'POST',
            data: dataSend,
            beforeSend: function () {
                $('#confirmSubmitButtonMobile').prop("disabled", true);
                $('#confirmSubmitButtonMobile').text("Đang xử lý");
                //Delete text in success and fail modal
                $('#successMessage').text('');
                $('#failMessage').text('');
            },
            success:function (res) {
                if(res.status == 1) {
                    $('#successMessage').text(res.message);
                    $('#modalSuccessPayment').modal('show');
                }
                else if(res.status == 401){
                    $('#failMessage').text('Bạn cần phải đăng nhập để hoàn thiện giao dịch!');
                    $('#modalFailPayment').modal('show');
                }
                else if(res.status == 0){
                    $('#failMessage').text(res.message);
                    $('#modalFailPayment').modal('show');
                }
                else{
                    $('#failMessage').text('Đã có lỗi xảy ra!');
                    $('#modalFailPayment').modal('show');
                }
            },
            error: function (res) {
                $('#failMessage').text('Đã có lỗi xảy ra!');
                $('#modalFailPayment').modal('show');
            },
            complete: function () {
                $('#reload_1').trigger('click');
                $('#confirmSubmitButtonMobile').prop("disabled", false);
                $('#confirmSubmitButtonMobile').text("Xác nhận");
            }
        });
    });

    function reload_captcha() {
        $.ajax({
            type: 'GET',
            url: '/reload-captcha',
            beforeSend: function () {
                $('.refresh-captcha img').removeClass("paused");
                $("#capchaImage").empty();
            },
            success: function (data) {
                $("#capchaImage").html(data.captcha);
            },
            complete: function () {
                setTimeout( function () {
                    $('.refresh-captcha img').addClass("paused");
                }, 1000);
            }
        });
    };

    // Get card data
    function getTelecom () {
        let url = '/get-tele-card';

        $.ajax({
            type: "GET",
            url: url,
            success: function (data) {
                if(data.status == 1){
                    let html = '';

                    if ( data.data.length > 0 ) {
                        $.each( data.data, function ( key, value ) {
                            html += '<option value="'+value.key+'">'+value.title+'</option>';
                        });
                    } else {
                        html += '<option value="">-- Vui lòng chọn nhà mạng --</option>';
                    }

                    $('select#telecom').html(html)
                    $('.select-form').niceSelect('update');

                    let typeValue = $('#telecom').val();

                    if ( typeValue ) {
                        getAmount(typeValue);
                    } else {

                    }
                }
            },
            error: function (data) {
                swal({
                    title: "Lỗi !",
                    text: "Có lỗi phát sinh vui lòng liên hệ QTV để kịp thời xử lý.",
                    icon: "error",
                    buttons: {
                        cancel: "Đóng",
                    },
                })
            },
            complete: function (data) {
                $('#charge_card .loader-container').remove();
                $('#charge_card .content-block').removeClass('d-none');
            }
        });
    }

    function getAmount (telecom) {
        let url = '/get-amount-tele-card';
        $.ajax({
            type: "GET",
            url: url,
            data: {
                telecom: telecom
            },
            beforeSend: function () {
                $('#cardAmount').empty();
                $('#cardAmountMobile').empty();
                $('#cardAmountModal').empty();
                $('.money-form-group .loader').removeClass('d-none');
            },
            success: function (data) {
                if ( data.status == 1 ) {
                    // Append new data both in mobile and desktop
                    let html = '';
                    let htmlMobile = '';
                    let htmlModal ='';

                    if ( data.data.length > 0 ) {
                        $.each( data.data, function( key, value ) {
                            html += '<div class="col-4 c-px-4 money-radio-form">';
                            htmlMobile += '<div class="col-4 c-px-4 money-radio-form">';
                            htmlModal += '<div class="col-4 c-px-4 money-radio-form">';
                            if ( key == 0 ) {
                                if ( $(window).width() >= 992 ) {
                                    html += '<input name="amount" type="radio" id="recharge_amount_'+key+'" data-ratio="'+value.ratio_true_amount+'" value="'+value.amount+'" hidden checked>';
                                    htmlMobile += '<input name="amount" type="radio" id="recharge_amount_mobile_'+key+'" data-ratio="'+value.ratio_true_amount+'" value="'+value.amount+'" hidden>';
                                } else {
                                    html += '<input name="amount" type="radio" id="recharge_amount_'+key+'" data-ratio="'+value.ratio_true_amount+'" value="'+value.amount+'" hidden >';
                                    htmlMobile += '<input name="amount" type="radio" id="recharge_amount_mobile_'+key+'" data-ratio="'+value.ratio_true_amount+'" value="'+value.amount+'" hidden checked>';
                                }

                                htmlModal += '<input name="amount" type="radio" id="recharge_amount_'+key+'" data-ratio="'+value.ratio_true_amount+'" value="'+value.amount+'" hidden checked>';

                            } else {
                                html += '<input name="amount" type="radio" id="recharge_amount_'+key+'" data-ratio="'+value.ratio_true_amount+'" value="'+value.amount+'" hidden>';
                                htmlMobile += '<input name="amount" type="radio" id="recharge_amount_mobile_'+key+'" data-ratio="'+value.ratio_true_amount+'" value="'+value.amount+'" hidden>';
                                htmlModal += '<input name="amount" type="radio" id="recharge_amount_'+key+'" data-ratio="'+value.ratio_true_amount+'" value="'+value.amount+'" hidden>';
                            }

                            html += '<label for="recharge_amount_'+key+'" class="c-py-16 c-px-8 c-mb-8 brs-8 p_recharge_amount">';
                            html += '<p class="fw-500 fs-15 mb-0">'+ formatNumber(value.amount)  +'đ</p>';
                            html += '</label>';
                            html += '</div>';

                            htmlMobile += '<label for="recharge_amount_mobile_'+key+'" class="c-py-16 c-px-8 c-mb-8 brs-8 p_recharge_amount">';
                            htmlMobile += '<p class="fw-500 fs-15 mb-0">'+ formatNumber(value.amount)  +'đ</p>';
                            htmlMobile += '</label>';
                            htmlMobile += '</div>';

                            htmlModal += '<label for="recharge_amount_'+key+'" class="c-py-16 c-px-8 c-mb-8 brs-8 p_recharge_amount">';
                            htmlModal += '<p class="fw-500 fs-15 mb-0">'+ formatNumber(value.amount)  +'đ</p>';
                            htmlModal += '</label>';
                            htmlModal += '</div>';
                        });
                    }

                    //Append new amount data
                    $('#cardAmount').html(html);
                    $('#cardAmountMobile').html(htmlMobile);
                    $('#cardAmountModal').html(htmlModal);

                    //Refresh captcha
                    reload_captcha();
                }
            },
            error: function (data) {
                swal({
                    title: "Lỗi !",
                    text: "Có lỗi phát sinh vui lòng liên hệ QTV để kịp thời xử lý.",
                    icon: "error",
                    buttons: {
                        cancel: "Đóng",
                    },
                })
            },
            complete: function (data) {
                $('.money-form-group .loader').addClass('d-none');
            }
        });
    }


});

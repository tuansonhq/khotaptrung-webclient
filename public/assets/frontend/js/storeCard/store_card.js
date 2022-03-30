$(document).ready(function(){
    const csrf_token = $('meta[name="csrf-token"]').attr('content');
    const token =  $('meta[name="jwt"]').attr('content');
    getProfile();
    getTelecom();
    function getProfile(){
        const url = '/user/account_info';
        $.ajax({
            type: "POST",
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
                    $('.btn-confirm').html('<a href="/login"><span class="" id="StoreCardPay"><i class="fa fa-credit-card" aria-hidden="true"></i> Đăng nhập để thanh toán</span></a>')
                }
                if(data.status == true){
                    $('.btn-confirm').html('<span class="" id="StoreCardPay"><i class="fa fa-credit-card" aria-hidden="true"></i> Thanh toán</span>')
                }
            },
            error: function (data) {
                
            },
            complete: function (data) {
                $('#loading-data-pay').remove();
            }
        });
    }
    $('body').on('change','#telecom_key',function(){
        var telecom = $(this).val();
        getAmount(telecom)
        $('#quantity').val('1');
        
    });
    $('body').on('change','#amount',function(){
        $('#quantity').val('1');
        updatePrice();
    });
    $('body').on('change','#quantity',function(){
        updatePrice();
    });
    function formatNumber(num) {
        return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
    }
    function getTelecom(){
        var url = '/mua-the/get-telecom';
        $.ajax({
            type: "GET",
            url: url,
            success: function (data) {
                if(data.status == 1){
                    let html = '';
                    if(data.data.length > 0){
                        $.each(data.data,function(key,value){
                            html += '<option value="'+value.key+'">'+value.title+'</option>';
                        });
                    }
                    else{
                        html += '<option value="">-- Vui lòng chọn nhà mạng --</option>';
                    }
                    $('select#telecom_key').html(html)
                    ele = $('select#telecom_key option').first();
                    var telecom = ele.val();
                    getAmount(telecom);
                }
                else{
                    swal({
                        title: "Có lỗi xảy ra !",
                        text: data.message,
                        icon: "error",
                        buttons: {
                            cancel: "Đóng",
                        },
                    })
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
                
            }
        });
    }
    function getAmount(telecom){
        if(telecom == null){
            html = '<option value="">-- Vui lòng chọn mệnh giá --</option>';
            $('slect#amount').html(html)
            return;
        }
        var url = '/mua-the/get-amount';
        $.ajax({
            type: "GET",
            url: url,
            data: {
                telecom:telecom
            },
            beforeSend: function (xhr) {

            },
            success: function (data) {
                if(data.status == 1){
                    let html = '';
                    html += '<option value="">-- Vui lòng chọn mệnh giá --</option>';
                    if(data.data.length > 0){
                        $.each(data.data,function(key,value){
                            html += '<option value="'+ value.amount +'" rel-ratio="'+value.ratio_default+'" data-ratio="'+value.ratio_default+'">'+ formatNumber(value.amount)  +' VNĐ - ' + (100 - value.ratio_default) +'% </option>';
                        });
                    }
                    $('select#amount').html(html);
                }
                else{
                    swal({
                        title: "Có lỗi xảy ra !",
                        text: data.message,
                        icon: "error",
                        buttons: {
                            cancel: "Đóng",
                        },
                    })
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
                updatePrice();
                $('#loading-data').remove();
                $('#loading-data-total').remove();
                $('#formStoreCard').removeClass('hide');
                $('#StoreCardTotal').removeClass('hide');
            }
        });
    }
    function updatePrice(){
        var amount = $("#amount").val();
        if(amount == "" || amount == null){
            price = 0;
        }
        else{
            amount = Number(amount);
            var ratio = $('option:selected','#amount').data("ratio");
            ratio = Number(ratio);
            var quantity = $('#quantity').val();
            quantity = Number(quantity);
            var price = amount * (ratio / 100) * quantity;
        }
        price = formatNumber(price);
        $('#total-amount').html(price)
    }
});

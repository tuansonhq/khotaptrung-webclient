$(document).ready(function(){

    function formatNumber(num) {
        return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.')
    }
    $('.expand-button').on('click', function() {

        $('.special-text').toggleClass('-expanded');

        if ($('.special-text').hasClass('-expanded')) {
            $('.expand-button').html('Thu gọn nội dung');
        } else {
            $('.expand-button').html('Xem thêm nội dung');
        }
    });
    /*option swiper card*/
    let slider_count = 1;
    if ($('.slider--card .swiper-wrapper').children().length > 1) {
        slider_count = 1.4;
    }
    var swiper_card = new Swiper(".slider--card", {
        slidesPerView: slider_count,
        spaceBetween: 16,
        freeMode: true,
        observer: true,
        observeParents: true,
    });
    function getTelecom (){
        const url = '/api/store-card/get-telecom';
        $.ajax({
            type: "GET",
            url: url,
            beforeSend: function (xhr) {
            },
            success: function (data) {
                if(data.status == 1){
                    let html = '';
                    if(data.data.length > 0){
                        $.each(data.data,function(key,value){
                            html += '<option value="'+value.key+'" data-img="'+value.image+'">'+value.key+'</option>';
                        });
                    }
                    $('select#telecom_storecard').html(html)
                    ele = $('select#telecom_storecard option').first();
                    var telecom = ele.val();
                    var telecom_img = ele.data('img');
                    $('.store-card_telecom').text(telecom)
                    $('input[name=store_telecom]').val(telecom)
                    $('input[name=store_telecom_img]').val(telecom_img)

                    getAmount(telecom);
                    $("#buy_telecom_key").on('change', function () {
                        getAmount(telecom);

                    });

                    $("#buy_amount").on('change', function () {
                        UpdatePrice();
                    });

                    $("#quantity").on('change', function () {
                        UpdatePrice();
                    });
                    $('#loading-data').remove();
                    $('#loading-data-total').remove();
                    $('#loading-data-pay').remove();
                    $('#formStoreCard').show();
                    $('#StoreCardTotal').show();
                    $('#StoreCardPay').show();
                    $('#form-storecard').show();
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
                alert('Có lỗi phát sinh, vui lòng liên hệ QTV để kịp thời xử lý!')
                return;
            },
            complete: function (data) {

            }
        });
    }

    function getAmount(telecom){
        var url = '/api/store-card/get-amount';
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
                    if(data.data.length > 0){
                        $.each(data.data,function(key,value){
                            // html+= '<p>'+value.amount +'</p>'
                            html += '<option value="'+ value.amount +'" rel-ratio="'+ value.ratio_default+'">'+ formatNumber(value.amount)  +' VNĐ - ' + (100-value.ratio_default) +'% </option>';
                        });
                    }
                    $('#amount_storecard').html(html);
                    UpdatePrice();
                }
                // else{
                //     swal({
                //         title: "Có lỗi xảy ra !",
                //         text: data.message,
                //         icon: "error",
                //         buttons: {
                //             cancel: "Đóng",
                //         },
                //     })
                // }
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
    $('body').on('change','#telecom_storecard',function(){
        var telecom = $(this).val();


        $("#telecom_storecard option:selected").each(function(){
            var telecom_img = $(this).data('img');
            $('input[name=store_telecom_img]').val(telecom_img);

        });
        $('.store-card_telecom').text(telecom);
        $('input[name=store_telecom]').val(telecom);

        getAmount(telecom)
    });
    getTelecom();
    // $("#telecom_storecard").on('change', function () {
    //     getAmount();
    //
    // });

    $("#amount_storecard").on('change', function () {
        UpdatePrice();

    });

    $("#quantity").on('change', function () {
        UpdatePrice();
    });

    function UpdatePrice(){
        var amount=$("#amount_storecard").val();
        var ratio=$('#amount_storecard option:selected').attr('rel-ratio');
        var quantity=$("#quantity").val();

        $('.store-card_amount').text(formatNumber(amount))
        $('.store-card_quantity').text(quantity)
        $('.store-card_ratito').text(ratio)
        // $('.card--info__value_amount').text(amount)
        $('input[name=store_amount]').val(amount)


        if(amount=='' ||amount==null || ratio=='' ||ratio==null   || quantity=='' ||quantity==null){

            $('#txtPrice').html('Tổng: ' + 0 + ' VNĐ');
            $('#txtPrice').removeClass().addClass('bounceIn animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
                $(this).removeClass();
            });
            return;
        }
        if(ratio<=0 || ratio=="" || ratio==null){
            ratio=100;
        }
        var sale=amount-(amount*ratio/100);
        var total=(amount-sale) *quantity;
        // var total=sale*quantity;
        var totalnotsale = amount*quantity
        if(sale != 0){
            $('#txtPrice').html('Tổng: ' + total.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + ' VNĐ');
            $('#txtPrice').removeClass().addClass('bounceIn animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
                $(this).removeClass();
            });
        }else {
            $('#txtPrice').html('Tổng: ' + totalnotsale.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + ' VNĐ');
            $('#txtPrice').removeClass().addClass('bounceIn animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
                $(this).removeClass();
            });
        }


    }
    $(document).ready(function () {
        $('#btnbeforePurchase').click(function () {
            $('#success_storecard').modal('show');
        });
    });

    var formSubmit = $('#form-storecard');
    var url = formSubmit.attr('action');
    var btnSubmit = formSubmit.find(':submit');

    formSubmit.submit(function (e) {
        e.preventDefault();
        e.stopPropagation();
        $('#openConfirmStorecard').modal('show');
        // $('#success_storecard1').modal('show');
    });

    $('.btn-confirm-charge').on('click', function (m) {
        $.ajax({
            type: "POST",
            url: url,
            cache:false,
            data: formSubmit.serialize(), // serializes the form's elements.
            beforeSend: function (xhr) {
                $('#openConfirmStorecard').modal("hide");
                $('#success_storecard1 .swiper-wrapper').empty();
                swiper_card.update();
            },
            success: function (data) {
                if(data.status == 1){
                    btnSubmit.prop('disabled', true);
                    swal({
                        title: "Thành công !",
                        text: data.message,
                        icon: "success",
                    })
                    amount_card =  $('input[name=store_amount]').val();
                    telecom_card =  $('input[name=store_telecom]').val();
                    telecom_card_img =  $('input[name=store_telecom_img]').val();
                    $('#success_storecard1').modal("show");
                    let html_card = '';
                    if(data.data.data_card.length > 0){
                        $.each(data.data.data_card,function(key,value){
                            html_card += ' <div class="swiper-slide card__detail  swiper-slide-active ">'
                            html_card += ' <div class="card--header__detail p-3">'
                            html_card += ' <div class="card--info__wrap">'
                            html_card += '<div class="card--info__wrap d-flex">'
                            html_card += ' <div class="card--logo d-flex">'
                            html_card += ' <img src="'+telecom_card_img+'" alt="">'
                            html_card += ' </div>'
                            html_card += ' <div class="card--info">'
                            html_card += '<div class="card--info__name " >'+telecom_card+'</div>'
                            html_card += '<div class="card--info__value ">'
                            html_card += ' <a href="javascript:void(0)" class="text-primary" >'+formatNumber(amount_card)+' đ</a>'
                            html_card += ' </div>'
                            html_card += ' </div>'
                            html_card += ' </div>'
                            html_card += ' </div>'
                            html_card += ' </div>'
                            html_card += '  <div class="card--gray p-2 m-2" style="background-color: #F8F8FC;border-radius: 4px">'
                            html_card += ' <div class="card--attr justify-content-between d-flex text-center">'
                            html_card += ' <div class="card--attr__name fw-400 fz-13 text-center">Mã thẻ</div>'
                            html_card += ' <div class="card--attr__value fz-13 fw-500 d-flex">'
                            html_card += ' <div class="card__info c-mr-8">'+value.pin+'</div>'
                            html_card += ' <div class="icon--coppy js-copy-text">'
                            html_card += ' <b class="ml-2"><i style="cursor: pointer" class="fa fa-copy copyData" data-copy="'+value.pin+'" aria-hidden="true"></i></b>\n'
                            html_card += ' </div>'
                            html_card += ' </div>'
                            html_card += ' </div>'
                            html_card += '  <div class="card--attr justify-content-between pt-0 d-flex text-center">'
                            html_card += ' <div class="card--attr justify-content-between pt-0 d-flex text-center"> Seri</div>'
                            html_card += ' <div class="card--attr__value fz-13 fw-500 d-flex">'
                            html_card += ' <div class="card__info c-mr-8">'+value.serial+'</div>'
                            html_card += ' <div class="icon--coppy js-copy-text">'
                            html_card += ' <b class="ml-2"><i style="cursor: pointer" class="fa fa-copy copyData" data-copy="'+value.serial+'" aria-hidden="true"></i></b>\n'
                            html_card += ' </div>'
                            html_card += '</div>'
                            html_card += ' </div>'
                            html_card += ' </div>'
                            html_card += ' </div>'
                            $('.success_storecard1 .swiper-wrapper').append(html_card);

                        });
                    }

                }
                else if(data.status == 401){
                    window.location.href = '/login?return_url='+window.location.href;
                }
                else if(data.status == 0){
                    swal({
                        title: "Mua thẻ thất bại !",
                        text: data.message,
                        icon: "error",
                        buttons: {
                            cancel: "Đóng",
                        },
                    })

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
                    title: "Có lỗi xảy ra !",
                    text: "Có lỗi phát sinh vui lòng liên hệ QTV để kịp thời xử lý.",
                    icon: "error",
                    buttons: {
                        cancel: "Đóng",
                    },
                })
            },
            complete: function (data) {
                $('span#reload').trigger('click');
                formSubmit.trigger("reset");
                // btnSubmit.text('Nạp thẻ');
                btnSubmit.prop('disabled', false);
            }
        });
    });


});

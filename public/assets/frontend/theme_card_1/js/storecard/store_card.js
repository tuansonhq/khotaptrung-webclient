function reply_click(clicked_id) {
    let html = '';

    let button = '';
    button += '<div class="form-group m-form__group row ml-1">';
    button += '<label class="col-lg-2 col-md-4 col-sm-4 col-xs-4 col-form-label" style="font-weight:bold;font-size:16px;line-height: 33px;color:#212121">Số lượng: </label>';
    button += '<div class="col-lg-2 col-md-4 col-sm-4 col-4">';
    button += '<select class="form-control m-input m-input--air" name="quantity" id="quantity" style="border-color: #0000004f;">';
    for (i = 1; i <= 10; i++) {
        button += '<option class="quantity" value="' + i + '">' + i + '</option>';
    }

    button += '</select></div></div>';
    $('#button').html(button);

    var render_denominations = clicked_id;
    $('.denominations').html(render_denominations);
    $(".price_supplier").html("Chưa chọn");
    $(".price_sale").html("0");
    $(".render_quantity").html("1");
    $(".total_price").html("0");

    var getamount = $.get("/mua-the/get-amount?telecom_key=" + clicked_id, function (data, status) {
        $.each(data.store_telecom_value, function (key, value) {
            html += '<div class="text-center">';
            html += '<input type="radio" name="amount" class="amount" id="CheckboxSupplier' + key + '" value="' + value['amount'] + '" rel-ratio="' + value['ratio_default'] + '"/>';
            html += '<input style="display: none" type="text" id="price_' + value['amount'] + '" class="ratio_default" value="' + value['ratio_default'] + '"/>';
            html += '<label class="item-content" for="CheckboxSupplier' + key + '">';
            html += '<h5>' + formatNumber(value['amount']) + ' VNĐ </h5>';
            html += '<p>Giá: <span>' + formatNumber(value['amount'] * value['ratio_default'] / 100) + ' VNĐ</span></p>';
            html += '</label></div>';
        });
        $('#render-supplier').html(html);

    });
    // var pos1 = $('#content');
    // if (pos1.length) {
    //     var top = pos1.offset().top;
    //
    //     $([document.documentElement, document.body]).animate({
    //         scrollTop: top
    //     }, 500);
    // }
}

function formatNumber(num) {
    var num = num+"";
    if(num!="undefined"){
        return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,');
    }
    else{
        return "";
    }
}

$(document).ready(function(){
    function getAmount(telecom){
        var url = '/ajax/store-card/get-amount';
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
                else{
                    // swal({
                    //     title: "Có lỗi xảy ra !",
                    //     text: data.message,
                    //     icon: "error",
                    //     buttons: {
                    //         cancel: "Đóng",
                    //     },
                    // })
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
    $('body').on('change','#telecom_storecard',function(){
        var telecom = $(this).val();
        getAmount(telecom)
    });














    function formatNumber(num) {
        return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.')
    }
    // code cu

    $(document).ready(function () {
        $.ajax({
            url: "/mua-the",
            type: "GET",
            success: function (data) {
                let html = '';
                // html += '<div id="flex-box">';
                var firstClick="";
                $.each(data.store_telecom, function (key, value) {
                    if(key==0){
                        firstClick='.label-' + value['key']

                    }

                    html += '<li>';
                    html += '<div class="nav-link link-supplier text-center" >';
                    html += '<input name="telecom_key" value="' + value['key'] + '" id="myCheckbox' + key + '" type="radio" />';
                    html += '<label class="item-wapper label-' + value['key'] + '" for="myCheckbox' + key + '" onClick="reply_click(this.id)" id="' + value['key'] + '">';
                    if (value['image']) {
                        html += "<img class=\"img-fluid\" src=\"" + value["image"] + "\">";
                    } else {
                        html += value['title'];
                    }
                    // html += value['title'];
                    html += '</label></div>';
                    html += '</li>';
                });
                // html += '</div>';
                $('#tab-supplier').html(html);
                $( firstClick ).click();


            }
        });


        $("#render-supplier").on("click", ".item-content", function () {
            // alert("success");
            $('.item-content').removeClass("active");
            $(this).addClass("active");
            $('#quantity option').prop('selected', function () {
                return this.defaultSelected;
            });
        });

        $("#render-supplier").on("click", function () {
            var amount = $('input[name=amount]:checked').val(),
                quantity = $('.quantity').val();
            sale = $("#price_" + amount).val(),
                $(".render_quantity").html(quantity);
            $(".price_supplier").html(formatNumber(amount) + " VNĐ");
            $(".ratio").html(formatNumber(100-sale) +"%" );
            $(".total_price").html(formatNumber(quantity * (sale * amount / 100))+" VNĐ");

        });


        $("#button").on('change', '#quantity', function () {

            quantity = $('#quantity').val();
            var amount = $('input[name=amount]:checked').val(),
                sale = $("#price_" + amount).val();
            $(".render_quantity").html(quantity);

            $(".price_supplier").html(formatNumber(amount) + " VNĐ");
            $(".ratio").html(formatNumber(formatNumber(100-sale) +"%" ));
            //
            $(".total_price").html(formatNumber(quantity * (sale * amount / 100))+" VNĐ");
        });


        // if (screen.width <= 480) {
        //     var pos1 = $('.menhgia');
        //     if (pos1.length) {
        //         var contentNav = nav.offset().top;
        //         var pos1 = $('.menhgia').offset().top;
        //         var pos1 = pos1 - 15;
        //         $('.ftxt1').click(function () {
        //             $('body, html').animate({
        //                 scrollTop: pos1
        //             }, 'slow');
        //         });
        //     }
        //
        //
        // }
    });

    $("#recharge_supplier").on('submit',function (event) {
        event.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            type: 'POST',
            url: '/mua-the',
            data: formData,
            cache: false,
            contentType: false,
            processData:false,
            beforeSend: function(){
                $(".content-ajax").hide();
                $('#btnBuy').prop('disabled', true);
                $('#btnBuy').html('<i class="fas fa-spinner fa-spin"></i> Chờ xử lý');
            },
            success: (data) =>{
                if(data.errors){
                    $('#modal_pay').modal('hide');

                    swal({
                        title: "Lỗi !",
                        text: data.errors,
                        icon: "error",
                        buttons: {

                            charge: {
                                text: "Nạp tiền",
                                value: "charge",
                            },
                            cancel: "Đóng",
                        },
                    })
                        .then((value) => {
                            switch (value) {
                                case "charge":
                                    window.location.href = "https://thegarenagiare.com/nap-the";
                                    break;
                                default:

                            }
                        });
                }else{
                    $('#modal_pay').modal('hide');
                    $('#showInfor').modal('show');
                    let html = '';
                    html += '<div class="id-infor" data-id="'+data.id+'"></div>';
                    $('#showInforDetails').html(html);
                    var id = $(".id-infor").data('id');
                    $.ajax({
                        url: "/mua-the/"+id+"/thong-tin-the",
                        type:"GET",
                        success: function(data){
                            // console.log(data.data.id);
                            $("#id-item").html(id);
                            $("#description-item").html(data.data.description);
                            $("#money-item").html(formatNumber(data.data.price)+" VNĐ");
                            $("#txns-item").html(100-(data.data.txns[0].ratio)+" %");
                            //
                            // console.log(data.data.store_card);
                            let html = '';
                            $.each(data.arr,function(key,value){
                                html += '<tr>';
                                html += '<td class="pin"><span>'+value['pin_item']+'</span>&nbsp;<i style="cursor: pointer" class="fa fa-copy copyPin" aria-hidden="true"></i></td>';
                                html += '<td class="serial"><span>'+value['serial_item']+' </span>&nbsp;<i style="cursor: pointer" class="fa fa-copy copySerial" aria-hidden="true"></i></td>';
                                html += '</tr>';
                            });
                            $('#store_card').html(html);
                        }
                    });
                }
            },
            complete: function(){
                $('.ajax-loader').hide();
                $(".content-ajax").show();

                $('#btnBuy').prop('disabled', false);
                $('#btnBuy').html('Thanh toán');

            }
        });
    });

    $('#store_card').on('click','.copyPin',function(){
        var text=$(this).prev().text()
        var $temp = $("<input>");
        $("#store_card").append($temp);
        $temp.val($.trim(text)).select();
        document.execCommand("copy");
        $temp.remove();
    });
    $('#store_card').on('click','.copySerial',function(){
        var text=$(this).prev().text()
        var $temp = $("<input>");
        $("#store_card").append($temp);
        $temp.val($.trim(text)).select();
        document.execCommand("copy");
        $temp.remove();
    });
    // code cu

    ele = $('select#telecom_storecard option').first();
    var telecom = ele.val();
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
    // $('#loading-data').remove();
    $('#loading-data-total').remove();
    $('#loading-data-pay').remove();
    // $('#formStoreCard').removeClass('hide');
    $('#StoreCardTotal').removeClass('hide');
    $('#StoreCardPay').removeClass('hide');
    function getAmount(telecom){
        var url = '/ajax/store-card/get-amount';
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
                else{
                    // swal({
                    //     title: "Có lỗi xảy ra !",
                    //     text: data.message,
                    //     icon: "error",
                    //     buttons: {
                    //         cancel: "Đóng",
                    //     },
                    // })
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
    $('body').on('change','#telecom_storecard',function(){
        var telecom = $(this).val();
        getAmount(telecom)
    });
    // getTelecom();
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
    $('body').on('click','.copyData',function(){
        data = $(this).data('copy');
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($.trim(data)).select();
        document.execCommand("copy");
        $temp.remove();
        toastr.success('Đã sao chép: '+ data);
    })

    $('#form-storecard').submit(function (e) {
        e.preventDefault();
        $('#homealert').modal("show");
        var formSubmit = $(this);
        var url = formSubmit.attr('action');
        var btnSubmit = formSubmit.find(':submit');
        // btnSubmit.text('Đang xử lý...');

        $('#ok').off().on('click', function (m) {
            $.ajax({
                type: "POST",
                url: url,
                cache:false,
                data: formSubmit.serialize(), // serializes the form's elements.
                beforeSend: function (xhr) {

                },
                success: function (data) {
                    if(data.status == 1){
                        btnSubmit.prop('disabled', true);
                        swal({
                            title: "Thành công !",
                            text: data.message,
                            icon: "success",
                        })
                        $('#success_storecard').modal("show");
                        let html = '';
                        if(data.data.data_card.length > 0){
                            $.each(data.data.data_card,function(key,value){

                                html+='<div class="col-12 col-md-4 p-2">'
                                html+='<div class="alert alert-info">'
                                html+='<p>Mã thẻ '+key+' </p>'
                                html+='<div class="success_storecard_pin">'
                                html+='<p>Mã thẻ <br>'
                                html+='<span>'+value.pin+'</span>'
                                html+='</p>'
                                html+='<b class="mt-4"><i style="cursor: pointer" class="fa fa-copy copyData" data-copy="'+value.pin+'" aria-hidden="true"></i></b>'
                                html+='</div>'
                                html+='<div class="success_storecard_serial">'
                                html+='<p>Serial  <br>'
                                html+='<span>'+value.serial+'</span>'
                                html+='</p>'
                                html+='<b class="mt-4"><i style="cursor: pointer" class="fa fa-copy copyData" data-copy="'+value.serial+'" aria-hidden="true"></i></b>'
                                html+='</div>'
                                html+='</div>'
                                html+='</div>'

                            });
                        }
                        $('.success_storecard').html(html);
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

});

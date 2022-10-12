
$(document).ready(function(){

});
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
    getAmount(clicked_id)
    function getAmount(clicked_id){
        var url = '/ajax/store-card/get-amount';
        $.ajax({
            type: "GET",
            url: url,
            data: {
                telecom:clicked_id
            },
            beforeSend: function (xhr) {
                let html_loading = '';
                html_loading += ' <div class="loading-wrap">';
                html_loading += ' <span class="modal-loader-spin"></span>';
                html_loading += '  </div>';
                $('#render-supplier').html(html_loading);
            },
            success: function (data) {
                if(data.status == 1){

                    let html = '';
                    if(data.data.length > 0){
                        $.each(data.data,function(key,value){
                            // html+= '<p>'+value.amount +'</p>'
                            if (key == 0){
                                html += '<div class="text-center">';
                                html += '<input type="radio" name="amount" class="amount" id="CheckboxSupplier' + key + '" value="' + value.amount + '" rel-ratio="' + value.ratio_default + '" checked>';
                                html += '<input style="display: none" type="text" id="price_' + value.amount + '" class="ratio_default" value="' + value.ratio_default + '"/>';
                                html += '<label class="item-content active" for="CheckboxSupplier' + key + '">';
                                html += '<h5>' + formatNumber(value.amount) + ' VNĐ </h5>';
                                html += '<p>Giá: <span>' + formatNumber(value.amount * value.ratio_default / 100) + ' VNĐ</span></p>';
                                html += '</label></div>';
                            }else {
                                html += '<div class="text-center">';
                                html += '<input type="radio" name="amount" class="amount" id="CheckboxSupplier' + key + '" value="' + value.amount + '" rel-ratio="' + value.ratio_default + '"/>';
                                html += '<input style="display: none" type="text" id="price_' + value.amount + '" class="ratio_default" value="' + value.ratio_default + '"/>';
                                html += '<label class="item-content" for="CheckboxSupplier' + key + '">';
                                html += '<h5>' + formatNumber(value.amount) + ' VNĐ </h5>';
                                html += '<p>Giá: <span>' + formatNumber(value.amount * value.ratio_default / 100) + ' VNĐ</span></p>';
                                html += '</label></div>';
                            }
                            $('#render-supplier').html(html);
                            UpdatePrice();


                            // html += '<option value="'+ value.amount +'" rel-ratio="'+ value.ratio_default+'">'+ formatNumber(value.amount)  +' VNĐ - ' + (100-value.ratio_default) +'% </option>';
                        });
                    }else {
                        html += '<span style="color: #F25922;font-size: 16px">Thẻ chưa được cấu hình mệnh giá</span>';
                        $('#render-supplier').html(html);

                    }

                    // $('#amount_storecard').html(html);
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
    function UpdatePrice(){
        var amount = $('input[name=amount]:checked').val(),
            quantity = $('.quantity').val();
        sale = $("#price_" + amount).val(),
            $(".render_quantity").html(quantity);
        $(".price_supplier").html(formatNumber(amount) + " VNĐ");
        $(".ratio").html(formatNumber(100-sale) +"%" );
        $(".total_price").html(formatNumber(quantity * (sale * amount / 100))+" VNĐ");


    }
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
    $('.store-telecom0').trigger('click');
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


    function formatNumber(num) {
        return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.')
    }
    // code cu

    $(document).ready(function () {

    });

    $("#recharge_supplier").on('submit',function (event) {
        event.preventDefault();
        // var formData = new FormData(this);
        var formSubmit = $(this);
        var url = formSubmit.attr('action');
        var btnSubmit = formSubmit.find(':submit');
        $.ajax({
            type: "POST",
            url: url,
            cache:false,
            data: formSubmit.serialize(), // serializes the form's elements.
            // data:{
            //     telecom:key,
            //     amount:amount,
            //     quantity:quantity,
            // },
            beforeSend: function (xhr) {
                // $(".overlay").fadeIn(300);
                $("#overlay").fadeIn(300);
            },
            success: function (data) {
                let html = '';
                if(data.errors){
                    $(".info-buy-card").remove();

                    html += '<div class="alert alert-danger mb-3 text-center" role="alert">';
                    html += '<p class="display-6 text-danger mb-0"><i class="las la-frown"></i></p>';
                    html += '<h5 class="mb-0">uh oh, có lỗi xảy ra</h5>';
                    html += '<p class="mb-0">'+data.errors+'</p>';
                    html += '</div>';
                }else{


                    if(data.status == 1){


                        html += '<div class="alert alert-success mb-3 text-center" role="alert">';
                        html += '<p class="display-6 mb-0 text-success"><i class="las la-glass-cheers"></i></p>';
                        html += '<p class="mb-0">Cảm ơn bạn đã lựa chọn chúng tôi, thông tin mã thẻ dưới đây hoặc bạn có thể xem lại trong mục, hồ sơ cá nhân -> <a href="/thong-tin">thẻ đã mua</a></p>';
                        html += '</div>';
                        btnSubmit.prop('disabled', true);
                        swal({
                            title: "Thành công !",
                            text: data.data.message,
                            icon: "success",
                        })
                        let render_html = '';
                        if(data.data.data_card.length > 0){

                            $.each(data.data.data_card,function(key,value){
                                // html+='<div class="col-md-4 p-2">'
                                // html+='<div class="alert alert-info">'
                                // html+='<p>Mã thẻ'+key+' </p>'
                                // html+='<div class="success_storecard_pin">'
                                // html+='<p>Mã thẻ <br>'
                                // html+='<span>'+value.pin+'</span>'
                                // html+='</p>'
                                // html+='<b><i style="cursor: pointer" class="fa fa-copy copyData" data-copy="'+value.pin+'" aria-hidden="true"></i></b>'
                                // html+='</div>'
                                // html+='<div class="success_storecard_serial">'
                                // html+='<p>Serial  <br>'
                                // html+='<span>'+value.serial+'</span>'
                                // html+='</p>'
                                // html+='<b><i style="cursor: pointer" class="fa fa-copy copyData" data-copy="'+value.serial+'" aria-hidden="true"></i></b>'
                                // html+='</div>'
                                // html+='</div>'
                                // html+='</div>'

                                render_html += '<tbody>';
                                render_html += '<tr>';
                                render_html += '<td class="text-secondary">Thẻ '+key+'</td>';
                                render_html += '<td colspan="2"></td>';
                                render_html += '</tr>';
                                render_html += '<tr>';
                                render_html += '<td class="text-secondary">Loại mã thẻ</td>';
                                render_html += '<td colspan="2">'+value.telecom_key+'</td>';
                                render_html += '</tr>';
                                render_html += '<tr>';
                                render_html += '<td class="text-secondary">Mệnh giá</td>';
                                render_html += '<td colspan="2">'+formatNumber(value.amount)+' VNĐ</td>';
                                render_html += '</tr>';
                                render_html += '<tr>';
                                render_html += '<td class="text-secondary">Số series</td>';
                                render_html += '<td colspan="2">'+value.serial+'</td>';
                                render_html += '</tr>';
                                render_html += '<tr>';
                                render_html += '<td class="text-secondary">Mã Pin</td>';
                                render_html += '<td><strong class="text-warning">'+value.pin+'</strong></td>';
                                render_html += '<td width="30"><a href="#"><i class="las la-copy" data-id="' + value.pin + '"></i></a></td>';
                                render_html += '</tr>';
                                render_html += '</tbody>';
                                render_html += '</br>';

                            });
                            $('.table-store-card').html(render_html);

                        }
                    }
                    else if(data.status == 401){
                        window.location.href = '/login';
                    }
                    else if(data.status == 0){
                        $(".info-buy-card").remove();

                        html += '<div class="alert alert-danger mb-3 text-center" role="alert">';
                        html += '<p class="display-6 text-danger mb-0"><i class="las la-frown"></i></p>';
                        html += '<h5 class="mb-0">Mua thẻ thất bại !</h5>';
                        html += '<p class="mb-0">'+data.message+'</p>';
                        html += '</div>';


                        // swal({
                        //     title: "Mua thẻ thất bại !",
                        //     text: data.message,
                        //     icon: "error",
                        //     buttons: {
                        //         cancel: "Đóng",
                        //     },
                        // })
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

                        $(".info-buy-card").remove();

                        html += '<div class="alert alert-danger mb-3 text-center" role="alert">';
                        html += '<p class="display-6 text-danger mb-0"><i class="las la-frown"></i></p>';
                        html += '<h5 class="mb-0">Cố lỗi xảy ra !</h5>';
                        html += '<p class="mb-0">'+data.message+'</p>';
                        html += '</div>';
                    }
                }
                $(".content-notify-content").html(html)


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
                setTimeout(function(){
                    $("#overlay").fadeOut(300);
                    $('.nav-steps-wrapper ul.nav-steps li.nav-item a.nav-link').removeClass('active');
                    $('#step-example .tab-content').removeClass('active');
                    $("#steps-3.tab-content").addClass('active');
                    $('.nav-steps-wrapper ul.nav-steps li.nav-item a.steps-3').addClass('active');
                    $(".content-notify-store").css('display','block');
                },500);
            }
        });
        // $.ajax({
        //     type: 'POST',
        //     url: '/mua-the',
        //     data: formData,
        //     cache: false,
        //     contentType: false,
        //     processData:false,
        //     beforeSend: function(){
        //         $(".content-ajax").hide();
        //         $('#btnBuy').prop('disabled', true);
        //         $('#btnBuy').html('<i class="fas fa-spinner fa-spin"></i> Chờ xử lý');
        //     },
        //     success: (data) =>{
        //         if(data.errors){
        //             $('#modal_pay').modal('hide');
        //
        //             swal({
        //                 title: "Lỗi !",
        //                 text: data.errors,
        //                 icon: "error",
        //                 buttons: {
        //
        //                     charge: {
        //                         text: "Nạp tiền",
        //                         value: "charge",
        //                     },
        //                     cancel: "Đóng",
        //                 },
        //             })
        //                 .then((value) => {
        //                     switch (value) {
        //                         case "charge":
        //                             window.location.href = "https://thegarenagiare.com/nap-the";
        //                             break;
        //                         default:
        //
        //                     }
        //                 });
        //         }else{
        //             $('#modal_pay').modal('hide');
        //             $('#showInfor').modal('show');
        //             let html = '';
        //             html += '<div class="id-infor" data-id="'+data.id+'"></div>';
        //             $('#showInforDetails').html(html);
        //             var id = $(".id-infor").data('id');
        //             $.ajax({
        //                 url: "/mua-the/"+id+"/thong-tin-the",
        //                 type:"GET",
        //                 success: function(data){
        //                     // console.log(data.data.id);
        //                     $("#id-item").html(id);
        //                     $("#description-item").html(data.data.description);
        //                     $("#money-item").html(formatNumber(data.data.price)+" VNĐ");
        //                     $("#txns-item").html(100-(data.data.txns[0].ratio)+" %");
        //                     //
        //                     // console.log(data.data.store_card);
        //                     let html = '';
        //                     $.each(data.arr,function(key,value){
        //                         html += '<tr>';
        //                         html += '<td class="pin"><span>'+value['pin_item']+'</span>&nbsp;<i style="cursor: pointer" class="fa fa-copy copyPin" aria-hidden="true"></i></td>';
        //                         html += '<td class="serial"><span>'+value['serial_item']+' </span>&nbsp;<i style="cursor: pointer" class="fa fa-copy copySerial" aria-hidden="true"></i></td>';
        //                         html += '</tr>';
        //                     });
        //                     $('#store_card').html(html);
        //                 }
        //             });
        //         }
        //     },
        //     complete: function(){
        //         $('.ajax-loader').hide();
        //         $(".content-ajax").show();
        //
        //         $('#btnBuy').prop('disabled', false);
        //         $('#btnBuy').html('Thanh toán');
        //
        //     }
        // });
    });


    // code cu

    // ele = $('select#telecom_storecard option').first();
    // var telecom = ele.val();
    // getAmount(telecom);
    // $("#buy_telecom_key").on('change', function () {
    //     getAmount(telecom);
    //
    // });
    //
    // $("#buy_amount").on('change', function () {
    //     UpdatePrice();
    // });
    //
    // $("#quantity").on('change', function () {
    //     UpdatePrice();
    // });
    // // $('#loading-data').remove();
    // $('#loading-data-total').remove();
    // $('#loading-data-pay').remove();
    // // $('#formStoreCard').removeClass('hide');
    // $('#StoreCardTotal').removeClass('hide');
    // $('#StoreCardPay').removeClass('hide');
    // function getAmount(telecom){
    //     var url = '/ajax/store-card/get-amount';
    //     $.ajax({
    //         type: "GET",
    //         url: url,
    //         data: {
    //             telecom:telecom
    //         },
    //         beforeSend: function (xhr) {
    //
    //         },
    //         success: function (data) {
    //
    //             if(data.status == 1){
    //
    //                 let html = '';
    //                 if(data.data.length > 0){
    //                     $.each(data.data,function(key,value){
    //                         // html+= '<p>'+value.amount +'</p>'
    //                         html += '<option value="'+ value.amount +'" rel-ratio="'+ value.ratio_default+'">'+ formatNumber(value.amount)  +' VNĐ - ' + (100-value.ratio_default) +'% </option>';
    //                     });
    //                 }
    //                 $('#amount_storecard').html(html);
    //                 UpdatePrice();
    //             }
    //             else{
    //                 // swal({
    //                 //     title: "Có lỗi xảy ra !",
    //                 //     text: data.message,
    //                 //     icon: "error",
    //                 //     buttons: {
    //                 //         cancel: "Đóng",
    //                 //     },
    //                 // })
    //             }
    //         },
    //         error: function (data) {
    //             swal({
    //                 title: "Lỗi !",
    //                 text: "Có lỗi phát sinh vui lòng liên hệ QTV để kịp thời xử lý.",
    //                 icon: "error",
    //                 buttons: {
    //                     cancel: "Đóng",
    //                 },
    //             })
    //         },
    //         complete: function (data) {
    //
    //         }
    //     });
    // }
    // $('body').on('change','#telecom_storecard',function(){
    //     var telecom = $(this).val();
    //     getAmount(telecom)
    // });
    // // getTelecom();
    // // $("#telecom_storecard").on('change', function () {
    // //     getAmount();
    // //
    // // });
    //
    // $("#amount_storecard").on('change', function () {
    //     UpdatePrice();
    // });
    //
    // $("#quantity").on('change', function () {
    //     UpdatePrice();
    // });
    //
    // function UpdatePrice(){
    //     var amount=$("#amount_storecard").val();
    //     var ratio=$('#amount_storecard option:selected').attr('rel-ratio');
    //     var quantity=$("#quantity").val();
    //
    //     if(amount=='' ||amount==null || ratio=='' ||ratio==null   || quantity=='' ||quantity==null){
    //
    //         $('#txtPrice').html('Tổng: ' + 0 + ' VNĐ');
    //         $('#txtPrice').removeClass().addClass('bounceIn animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
    //             $(this).removeClass();
    //         });
    //         return;
    //     }
    //     if(ratio<=0 || ratio=="" || ratio==null){
    //         ratio=100;
    //     }
    //     var sale=amount-(amount*ratio/100);
    //     var total=(amount-sale) *quantity;
    //     // var total=sale*quantity;
    //     var totalnotsale = amount*quantity
    //     if(sale != 0){
    //         $('#txtPrice').html('Tổng: ' + total.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + ' VNĐ');
    //         $('#txtPrice').removeClass().addClass('bounceIn animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
    //             $(this).removeClass();
    //         });
    //     }else {
    //         $('#txtPrice').html('Tổng: ' + totalnotsale.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + ' VNĐ');
    //         $('#txtPrice').removeClass().addClass('bounceIn animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
    //             $(this).removeClass();
    //         });
    //     }
    //
    //
    // }
    // $(document).ready(function () {
    //     $('#btnbeforePurchase').click(function () {
    //         $('#success_storecard').modal('show');
    //     });
    // });
    // $('body').on('click','.copyData',function(){
    //     data = $(this).data('copy');
    //     var $temp = $("<input>");
    //     $("body").append($temp);
    //     $temp.val($.trim(data)).select();
    //     document.execCommand("copy");
    //     $temp.remove();
    //     toastr.success('Đã sao chép: '+ data);
    // })
    //
    // $('#form-storecard').submit(function (e) {
    //     e.preventDefault();
    //     $('#homealert').modal("show");
    //     var formSubmit = $(this);
    //     var url = formSubmit.attr('action');
    //     var btnSubmit = formSubmit.find(':submit');
    //     // btnSubmit.text('Đang xử lý...');
    //
    //     $('#ok').off().on('click', function (m) {
    //         $.ajax({
    //             type: "POST",
    //             url: url,
    //             cache:false,
    //             data: formSubmit.serialize(), // serializes the form's elements.
    //             beforeSend: function (xhr) {
    //
    //             },
    //             success: function (data) {
    //                 if(data.status == 1){
    //                     btnSubmit.prop('disabled', true);
    //                     swal({
    //                         title: "Thành công !",
    //                         text: data.message,
    //                         icon: "success",
    //                     })
    //                     $('#success_storecard').modal("show");
    //                     let html = '';
    //                     if(data.data.data_card.length > 0){
    //                         $.each(data.data.data_card,function(key,value){
    //
    //                             html+='<div class="col-12 col-md-4 p-2">'
    //                             html+='<div class="alert alert-info">'
    //                             html+='<p>Mã thẻ '+key+' </p>'
    //                             html+='<div class="success_storecard_pin">'
    //                             html+='<p>Mã thẻ <br>'
    //                             html+='<span>'+value.pin+'</span>'
    //                             html+='</p>'
    //                             html+='<b class="mt-4"><i style="cursor: pointer" class="fa fa-copy copyData" data-copy="'+value.pin+'" aria-hidden="true"></i></b>'
    //                             html+='</div>'
    //                             html+='<div class="success_storecard_serial">'
    //                             html+='<p>Serial  <br>'
    //                             html+='<span>'+value.serial+'</span>'
    //                             html+='</p>'
    //                             html+='<b class="mt-4"><i style="cursor: pointer" class="fa fa-copy copyData" data-copy="'+value.serial+'" aria-hidden="true"></i></b>'
    //                             html+='</div>'
    //                             html+='</div>'
    //                             html+='</div>'
    //
    //                         });
    //                     }
    //                     $('.success_storecard').html(html);
    //                 }
    //                 else if(data.status == 401){
    //                     window.location.href = '/login?return_url='+window.location.href;
    //                 }
    //                 else if(data.status == 0){
    //                     swal({
    //                         title: "Mua thẻ thất bại !",
    //                         text: data.message,
    //                         icon: "error",
    //                         buttons: {
    //                             cancel: "Đóng",
    //                         },
    //                     })
    //                 }
    //                 else{
    //                     swal({
    //                         title: "Có lỗi xảy ra !",
    //                         text: data.message,
    //                         icon: "error",
    //                         buttons: {
    //                             cancel: "Đóng",
    //                         },
    //                     })
    //                 }
    //             },
    //             error: function (data) {
    //                 swal({
    //                     title: "Có lỗi xảy ra !",
    //                     text: "Có lỗi phát sinh vui lòng liên hệ QTV để kịp thời xử lý.",
    //                     icon: "error",
    //                     buttons: {
    //                         cancel: "Đóng",
    //                     },
    //                 })
    //             },
    //             complete: function (data) {
    //                 $('span#reload').trigger('click');
    //                 formSubmit.trigger("reset");
    //                 // btnSubmit.text('Nạp thẻ');
    //                 btnSubmit.prop('disabled', false);
    //             }
    //         });
    //     });
    //
    // });

});

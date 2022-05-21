$(document).ready(function () {
    // $(document).on('click', '.buyacc',function(e){
    //     e.preventDefault();
    //     var htmlloading = '';
    //
    //     htmlloading += '<div class="loading"></div>';
    //     $('.loading-data__buyacc').html('');
    //     $('.loading-data__buyacc').html(htmlloading);
    //
    //     var id = $(this).data("id");
    //
    //     if (id == null || id == '' || id == undefined){}else {
    //         $('.formDonhangAccount').attr('action','/acc/' + id + '/databuy');
    //
    //         var htmltttk = '';
    //         htmltttk += 'Thông tin tài khoản #' + id + '';
    //
    //         $('.data__tttk').html('');
    //         $('.data__tttk').html(htmltttk);
    //
    //     }
    //
    //     var game  = $(this).data("game");
    //
    //     if (game == null || game == '' || game == undefined){}else {
    //         var htmlgame = '';
    //         htmlgame += game;
    //
    //         $('.data__game').html('');
    //         $('.data__game').html(htmlgame);
    //     }
    //     var price  = $(this).data("price");
    //     if (price == null || price == '' || price == undefined){}else {
    //         var priceht = price;
    //         priceht = priceht.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1.');
    //         priceht = priceht.split('').reverse().join('').replace(/^[\.]/,'');
    //         var htmlprice = '';
    //         htmlprice += priceht + ' đ';
    //
    //         $('.data__price').html('');
    //         $('.data__price').html(htmlprice);
    //     }
    //
    //     var groups  = $(this).data("groups");
    //
    //     if (groups == null || groups == '' || groups == undefined){}else {
    //         $.each(groups,function(key,value){
    //
    //             if (value.module == 'acc_provider'){
    //                 var htmltitle = '';
    //                 htmltitle += value.title;
    //
    //                 $('.data__title').html('');
    //                 $('.data__title').html(htmltitle);
    //             }
    //         })
    //     }
    //
    //     var params  = $(this).data("params");
    //
    //     var htmlparams = '';
    //
    //     if (id == null || id == '' || id == undefined){}else {
    //
    //         htmlparams += '<tr>';
    //             htmlparams += '<th colspan="2">';
    //                 htmlparams += 'Chi tiết tài khoản #' + id + '';
    //             htmlparams += '</th>';
    //         htmlparams += '</tr>';
    //     }
    //
    //     if (groups == null || groups == '' || groups == undefined){}else {
    //         $.each(groups,function(key,value){
    //
    //             if(value.module == 'acc_label' && value.is_slug_override == null){
    //                 if (value.parent[0] == null || value.parent[0] == '' || value.parent[0] == undefined){}else {
    //                     htmlparams += '<tr>';
    //                         htmlparams += '<td style="width:50%">' + value.parent[0].title + ':</td>';
    //                         htmlparams += '<td class="text-danger" style="font-weight: 700">' + value.title + '</td>';
    //                     htmlparams += '</tr>';
    //                 }
    //             }
    //         })
    //     }
    //
    //     var attribute = $(this).data("attribute");
    //
    //     if (params == null || params == '' || params == undefined){}else {
    //         if (attribute == null || attribute == '' || attribute == undefined){}else {
    //             $.each(attribute,function(keyatt,varlueatt){
    //                 if (varlueatt.position == 'text'){
    //                     if (varlueatt.childs == null || varlueatt.childs == '' || varlueatt.childs == undefined){}else {
    //                         $.each(varlueatt.childs,function(keychild,varluechild){
    //                             $.each(params,function(keyparam,valueparam){
    //                                 if (keyparam == varluechild.id){
    //                                     htmlparams += '<tr>';
    //                                     htmlparams += '<td style="width:50%">' + varluechild.title + ':</td>';
    //                                     htmlparams += '<td class="text-danger" style="font-weight: 700">' + valueparam + '</td>';
    //                                     htmlparams += '</tr>';
    //                                 }
    //                             })
    //                         })
    //                     }
    //                 }
    //             })
    //         }
    //     }
    //
    //
    //     $('.data__table').html('');
    //     $('.data__table').html(htmlparams);
    //
    //     const jwt =  $('meta[name="jwt').attr('content');
    //
    //     var balance  = $(this).data("balance");
    //
    //     if (jwt == null || jwt == '' || jwt == undefined || jwt === 'jwt'){
    //         var htmlauth = '';
    //         htmlauth += '<a class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold" href="/login?return_url=/acc/' + id + '">Đăng nhập</a>';
    //         htmlauth += '<button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button>';
    //
    //         $('.data__modal__buyacc').html('');
    //         $('.data__modal__buyacc').html(htmlauth);
    //
    //         var htmlform = '';
    //         htmlform += '<label class="col-md-12 form-control-label text-danger" style="text-align: center;margin: 10px 0; ">Bạn phải đăng nhập mới có thể mua tài khoản tự động.</label>';
    //
    //         $('.form__data__buyacc').html('');
    //         $('.form__data__buyacc').html(htmlform);
    //     }else {
    //
    //         if (parseInt(price) > parseInt(balance)){
    //             var htmlauth = '';
    //             htmlauth += '<a class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold gallery__bottom__span_bg__2" href="/nap-the" id="d3">Nạp thẻ cào</a>';
    //             htmlauth += '<a class="btn c-bg-green-4 c-font-white c-btn-square c-btn-uppercase c-btn-bold load-modal gallery__bottom__span_bg__2" style="color: #FFFFFF" data-dismiss="modal" href="/recharge-atm" data-dismiss="modal">Nạp từ ATM - Ví điện tử</a>';
    //             htmlauth += '<button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button>';
    //
    //             $('.data__modal__buyacc').html('');
    //             $('.data__modal__buyacc').html(htmlauth);
    //
    //             var htmlform = '';
    //             htmlform += '<div class="col-md-12"><label class="form-control-label text-danger" style="text-align: center;margin: 10px 0; ">Bạn không đủ số dư để mua tài khoản này. Bạn hãy click vào nút nạp thẻ để nạp thêm và mua tài khoản.</label></div>';
    //
    //             $('.form__data__buyacc').html('');
    //             $('.form__data__buyacc').html(htmlform);
    //
    //         }else if (parseInt(price) <= parseInt(balance)){
    //             var htmlauth = '';
    //             htmlauth += '<button type="submit" class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold loginBox__layma__button__displayabs"  id="d3" style="position: relative">Xác nhận mua<div class="row justify-content-center loading-data__muangay"></div></button>';
    //             htmlauth += '<button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button>';
    //
    //             $('.data__modal__buyacc').html('');
    //             $('.data__modal__buyacc').html(htmlauth);
    //
    //             var htmlform = '';
    //             htmlform += '<div class="col-md-12"><label class="form-control-label" style="text-align: center;margin: 10px 0; ">Tài khoản của bạn chưa cấu hình bảo mật ODP nên chỉ cần click vào nút xác nhận mua để hoàn tất giao dịch</label></div>';
    //
    //             $('.form__data__buyacc').html('');
    //             $('.form__data__buyacc').html(htmlform);
    //         }
    //     }
    //
    //     $('.loadModal__acount').modal('toggle');
    //     $('.loading-data__buyacc').html('');
    //     // getBuyAcc(id)
    // });

    $(document).on('click', '.buyacc',function(e){
        e.preventDefault();
        var htmlloading = '';

        htmlloading += '<div class="loading"></div>';
        $('.loading-data__buyacc').html('');
        $('.loading-data__buyacc').html(htmlloading);

        var id = $(this).data("id");

        var html = $('.formDonhangAccount' + id + '').html();
        $('.data__form__random').html('');
        $('.data__form__random').html(html);

        $('.loadModal__acount').modal('toggle');
        $('.loading-data__buyacc').html('');
        // getBuyAcc(id)
    });

    $(document).on('submit', '#LoadModal .formDonhangAccount', function(e){
        e.preventDefault();
        var htmlloading = '';

        htmlloading += '<div class="loading"></div>';
        $('.loading-data__muangay').html('');
        $('.loading-data__muangay').html(htmlloading);

        var formSubmit = $(this);
        var url = formSubmit.attr('action');
        var btnSubmit = formSubmit.find(':submit');
        btnSubmit.prop('disabled', true);
        $('.loginBox__layma__button__displayabs').prop('disabled', true);

        $.ajax({
            type: "POST",
            url: url,
            data: formSubmit.serialize(), // serializes the form's elements.
            beforeSend: function (xhr) {

            },
            success: function (response) {
                
                $('.data__form__random').html('');

                if(response.status == 1){
                    $('.loadModal__acount').modal('hide');
                    swal({
                        title: "Mua tài khoản thành công?",
                        text: "Thông tin chi tiết tài khoản vui lòng về lịch sử đơn hàng.",
                        type: "success",
                        confirmButtonText: "Về lịch sử đơn hàng!",
                        showCancelButton: true,
                        cancelButtonText: "Đóng",
                    })
                        .then((result) => {
                            if (result.value) {
                                window.location = '/lich-su-mua-account';
                            } else if (result.dismiss === "Đóng") {
                                location.reload();
                            }else {
                                location.reload();
                            }
                        })
                }
                else if (response.status == 2){
                    $('.loadModal__acount').modal('hide');

                    swal(
                        'Thông báo!',
                        response.message,
                        'warning'
                    )
                    $('.loginBox__layma__button__displayabs').prop('disabled', false);
                }else {
                    $('.loadModal__acount').modal('hide');
                    swal(
                        'Lỗi!',
                        response.message,
                        'error'
                    )
                    $('.loginBox__layma__button__displayabs').prop('disabled', false);
                }
                $('.loading-data__muangay').html('');
            },
            error: function (response) {
                if(response.status === 422 || response.status === 429) {
                    let errors = response.responseJSON.errors;

                    jQuery.each(errors, function(index, itemData) {

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


});

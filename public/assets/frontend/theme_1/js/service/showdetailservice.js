$(document).ready(function(){

    const media = "http://cdn.upanh.info/";

    var slug = $('#slug').val();

    getShowBot(slug)

    function getShowBot(slug){

        request = $.ajax({
            type: 'GET',
            url: '/show-bot',
            data: {
                slug:slug
            },
            beforeSend: function (xhr) {

            },
            success: (response) => {

                if (response.status == 1){
                    $('.data-bot').html('');
                    $('.data-bot').html(response.data);
                }
            },
            error: function (data) {

            },
            complete: function (data) {

            }
        });
    }


    $('body').on('click','#btnPurchase',function(e){
        e.preventDefault();
        if (!auth_check) {
            location.href = '/login?return_url=' + window.location.href;
            return
        }
        var selected = $('[name="selected"]').val();

        if (selected == null || selected == '' || selected == undefined){
            return false;
        }

        var value = $('[name="value"]').val();

        if (value == null || value == '' || value == undefined){
            return false;
        }

        // var price = $('[name="value"]').val();
        var htmlloading = '';
        htmlloading += '<div class="loading"></div>';
        $('.loading-data__thanhtoan').html('');
        $('.loading-data__thanhtoan').html(htmlloading);


        var slug = $('.slug_category').val();
        if (!auth_check){
            var html = '';
            html += '<a class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold" href="/login?return_url=/dich-vu/' + slug + '">Đăng nhập</a>';
            html += '<button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button>';
            $('.modal-footer__data').html('');
            $('.modal-footer__data').html(html);
        }else {

            var html = '';
            html += '<button type="submit" class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold" id="d3" style="" >Xác nhận thanh toán<div class="row justify-content-center loading-data__buydichvu"></div></button>';
            html += '<button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button>';
            $('.modal-footer__data').html('');
            $('.modal-footer__data').html(html);
        }

        var htmlloading = '';
        htmlloading += '<div class="loading"></div>';
        $('.loading-data__pay').html('');
        $('.loading-data__pay').html(htmlloading);



        $('#homealert').modal('show');
        //
        $('.loading-data__pay').html('');
        $('.loading-data__thanhtoan').html('');
        // // getModalService(price)
    })

    $('body').on('click','.pay',function(e){
        e.preventDefault();

        var selected = $('[name="selected"]').val();

        if (selected == null || selected == '' || selected == undefined){
            return false;
        }

        var value = $('[name="value"]').val();

        if (value == null || value == '' || value == undefined){
            return false;
        }

        var htmlloading = '';
        htmlloading += '<div class="loading"></div>';
        $('.loading-data__pay').html('');
        $('.loading-data__pay').html(htmlloading);



        if (jwt == null || jwt == '' || jwt == undefined || jwt == 'jwt'){
            var html = '';
            html += '<a class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold" href="/login">Đăng nhập</a>';
            html += '<button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button>';
            $('.modal-footer__data').html('');
            $('.modal-footer__data').html(html);
        }else {

            var html = '';
            html += '<button type="submit" class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold" id="d3" style="" >Xác nhận thanh toán<div class="row justify-content-center loading-data__buydichvu"></div></button>';
            html += '<button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button>';
            $('.modal-footer__data').html('');
            $('.modal-footer__data').html(html);
        }





        $('#homealert').modal('show');

        $('.loading-data__pay').html('');
        $('.loading-data__thanhtoan').html('');
        // getModalService(price)
    })


    function getModalService(price) {
        let slug = $('#slug').val();

        request = $.ajax({
            type: 'GET',
            url: '/dich-vu/'+ slug +'/modaldata',
            data: {
                price:price
            },
            beforeSend: function (xhr) {

            },
            success: (response) => {
                if (response.status == 1){

                    var data = jQuery.parseJSON(response.params);
                    var send_name = data['send_name'];
                    var send_type = data['send_type'];
                    //Data show detail
                    var index = 0;
                    var htmlmodal = '';

                    htmlmodal += '<div class="modal-header">';//L1
                        htmlmodal += '<h4 class="modal-title" style="font-weight: bold;text-transform: uppercase;color: #FF0000;text-align: center">Xác nhận thông tin thanh toán</h4>';
                        htmlmodal += '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>';
                    htmlmodal += '</div>';
                    htmlmodal += '<div class="modal-body">';//L2
                    if (send_name == null || send_name == '' || send_name == undefined || send_name.length <= 0){
                        htmlmodal += '<p> Bạn thực sự muốn thanh toán?</p>';
                    }else{
                        $.each(send_name,function(key,value){
                            if (value == null || value == '' || value == undefined){}else {
                                htmlmodal += '<span class="mb-15 control-label bb">';//L1
                                    htmlmodal += value + ':';
                                htmlmodal += '</span>';

                                if (send_type[key] == 1 || send_type[key] == 2 || send_type[key] == 3){
                                    index = index + 1;
                                    htmlmodal += '<div class="mb-15">';//L2
                                        htmlmodal += '<input type="text" required name="customer_data' + key + '" class="form-control t14 " placeholder="' + value + '" value="">';
                                    htmlmodal += '</div>';
                                }else if (send_type[key] == 4){
                                    index = index + 1;
                                    htmlmodal += '<div class="mb-15">';//L2
                                    htmlmodal += '<input type="file" required accept="image/*" class="form-control" name="customer_data' + key + '" placeholder="' + value + '">';
                                    htmlmodal += '</div>';
                                }else if (send_type[key] == 5){
                                    index = index + 1;
                                    htmlmodal += '<div class="mb-15">';//L2
                                    htmlmodal += '<input type="password" required class="form-control" name="customer_data' + key + '" placeholder="' + value + '">';
                                    htmlmodal += '</div>';
                                }else if (send_type[key] == 6){
                                    index = index + 1;
                                    htmlmodal += '<div class="mb-15">';//L2
                                        htmlmodal += '<select name="customer_data' + key + '" required class="form-control mb-15 control-label bb">';
                                            var send_data = data['send_data'+key];

                                            if (send_data == null || send_data == '' || send_data == undefined){}else {
                                                $.each(send_data,function(i,val){
                                                    htmlmodal += '<option value="' + i + '">';
                                                        htmlmodal += val;
                                                    htmlmodal += '</option>';
                                                })
                                            }
                                        htmlmodal += '</select>';
                                    htmlmodal += '</div>';
                                }

                            }
                        })
                    }
                    htmlmodal += '<input type="hidden" name="index" value="' + index + '">';
                    htmlmodal += '</div>';
                    htmlmodal += '<div class="modal-footer">';//l3
                        if (response.aucheck == 0){
                            htmlmodal += '<a class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold" href="/login?return_url='+window.location.href+'">Đăng nhập</a>';
                        }else if (response.aucheck == 1){
                            if (parseInt(response.balance) < parseInt(response.price)){
                                htmlmodal += '<a class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold gallery__bottom__span_bg__2" href="/nap-the-cham" id="d3">Nạp thẻ cào</a>';
                                htmlmodal += '<a class="btn c-bg-green-4 c-font-white c-btn-square c-btn-uppercase c-btn-bold load-modal gallery__bottom__span_bg__2" style="color: #FFFFFF" data-dismiss="modal" rel="/atm" data-dismiss="modal">Nạp từ ATM - Ví điện tử</a>';
                            }else {
                                htmlmodal += '<button type="submit" class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold " id="d3" style="position: relative" >';
                                htmlmodal += 'Xác nhận thanh toán';
                                htmlmodal += '<div class="row justify-content-center loading-data__buydichvu">';
                                // html += '';
                                htmlmodal += '</div>';
                                htmlmodal += '</button>';
                            }
                        }
                        htmlmodal += '<button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button>';
                    htmlmodal += '</div>';

                    $('.modal-content__data').html('');
                    $('.modal-content__data').html(htmlmodal);

                    $('#homealert').modal('show');
                }
                $('.loading-data__pay').html('');
                $('.loading-data__thanhtoan').html('');


            },
            error: function (data) {

            },
            complete: function (data) {

            }
        });
    }

    $(document).on('submit', '.purchaseForm', function(e){
        e.preventDefault();
        var htmlloading = '';

        htmlloading += '<div class="loading"></div>';

        $('.loading-data__buydichvu').html('');
        $('.loading-data__buydichvu').html(htmlloading);

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
                    $('.loadModal__acount').modal('hide');
                    $('#homealert').modal('hide');
                    swal({
                        title: "Mua dịch vụ thành công!",
                        text: "Thông tin chi tiết tài khoản vui lòng về lịch sử dịch vụ.",
                        type: "success",
                        confirmButtonText: "Về lịch sử dịch vụ!",
                        showCancelButton: true,
                        cancelButtonText: "Đóng",
                    })
                        .then((result) => {
                            if (result.value) {
                                window.location = '/dich-vu-da-mua';
                            } else if (result.dismiss === 'Đóng') {

                            }
                        })
                }
                else if (response.status == 2){

                    var html = '';
                    html += '<div class="col-md-12 text-center"><span style="font-size: 12px;color: red">' + response.message + '</span></div>';

                    $('.error__service').html('');
                    $('.error__service').html(html);
                    // swal(
                    //     'Thông báo!',
                    //     response.message,
                    //     'warning'
                    // )
                    $('.loginBox__layma__button__displayabs').prop('disabled', false);
                }else {

                    $('.loadModal__acount').modal('hide');
                    var html = '';
                    html += '<div class="col-md-12 text-center"><span style="font-size: 12px;color: red">' + response.message + '</span></div>';

                    $('.error__service').html('');
                    $('.error__service').html(html);
                    $('.loginBox__layma__button__displayabs').prop('disabled', false);
                }
                $('.loading-data__buydichvu').html('');
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

$(document).ready(function () {

    $(document).on('click', '.buyacc',function(e){
        e.preventDefault();
        var htmlloading = '';

        htmlloading += '<div class="loading"></div>';
        $('.loading-data__buyacc').html('');
        $('.loading-data__buyacc').html(htmlloading);

        var id = $(this).data("id");
        var price = $(this).data("price");
        getBuyAcc(id,price)
    });

    // $(document).on('click', '.buyacc',function(e){
    //     e.preventDefault();
    //     var htmlloading = '';
    //
    //     htmlloading += '<div class="loading"></div>';
    //     $('.loading-data__buyacc').html('');
    //     $('.loading-data__buyacc').html(htmlloading);
    //
    //     var id = $(this).data("id");
    //     getBuyAcc(id)
    // });

    function getBuyAcc(id,price) {

        var url = '/acc/'+ id+ '/databuy';
        request = $.ajax({
            type: 'GET',
            url: url,
            data: {
                price:price
            },
            beforeSend: function (xhr) {

            },
            success: (data) => {

                if (data.status == 1){
                    if (data.auth == 1){
                        if (data.index == 1){

                            var html = '';
                            html += '<button type="submit" class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold loginBox__layma__button__displayabs"  id="d3" style="position: relative">Xác nhận mua<div class="row justify-content-center loading-data__muangay"></div></button>';
                            html += '<button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button>';

                            $('.data_modal_footer').html('');
                            $('.data_modal_footer').html(html);

                            var htmlform = '';
                            htmlform += '<div class="col-md-12"><label class="form-control-label" style="text-align: center;margin: 10px 0; ">Tài khoản của bạn chưa cấu hình bảo mật ODP nên chỉ cần click vào nút xác nhận mua để hoàn tất giao dịch</label></div>';

                            $('.buyacc_form_data').html('');
                            $('.buyacc_form_data').html(htmlform);

                        }else if (data.index == 0){
                            var html = '';
                            html += '<a class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold gallery__bottom__span_bg__2" href="/nap-the" id="d3">Nạp thẻ cào</a>';
                            html += '<a class="btn c-bg-green-4 c-font-white c-btn-square c-btn-uppercase c-btn-bold load-modal gallery__bottom__span_bg__2" style="color: #FFFFFF" data-dismiss="modal" rel="/atm" data-dismiss="modal">Nạp từ ATM - Ví điện tử</a>';
                            html += '<button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button>';

                            $('.data_modal_footer').html('');
                            $('.data_modal_footer').html(html);

                            var htmlform = '';
                            htmlform += '<div class="col-md-12"><label class="form-control-label text-danger" style="text-align: center;margin: 10px 0; ">Bạn không đủ số dư để mua tài khoản này. Bạn hãy click vào nút nạp thẻ để nạp thêm và mua tài khoản.</label></div>';

                            $('.buyacc_form_data').html('');
                            $('.buyacc_form_data').html(htmlform);
                        }
                    }else if (data.auth == 0){
                        var html = '';
                        html += '<a class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold" href="/login?return_url=/acc/' + data.slug + '">Đăng nhập</a>';
                        html += '<button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button>';
                        $('.data_modal_footer').html('');
                        $('.data_modal_footer').html(html);

                        var htmlform = '';
                        htmlform += '<label class="col-md-12 form-control-label text-danger" style="text-align: center;margin: 10px 0; ">Bạn phải đăng nhập mới có thể mua tài khoản tự động.</label>';

                        $('.buyacc_form_data').html('');
                        $('.buyacc_form_data').html(htmlform);

                    }
                    $('.loadModal__acount').modal('toggle');
                    $('.loading-data__buyacc').html('');
                }

            },
            error: function (data) {

            },
            complete: function (data) {

            }
        });
    }

    $(document).on('submit', '.formDonhangAccount', function(e){
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
                            } else if (result.dismiss === 'đóng') {

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

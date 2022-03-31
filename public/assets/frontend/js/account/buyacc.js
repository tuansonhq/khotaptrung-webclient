$(document).ready(function () {

    $(document).on('click', '.buyacc',function(e){
        e.preventDefault();

        var id = $(this).data("id");
        getBuyAcc(id)
    });

    function getBuyAcc(id) {

        var url = '/acc/'+ id+ '/databuy';
        request = $.ajax({
            type: 'GET',
            url: url,
            data: {
                // id:id
            },
            beforeSend: function (xhr) {

            },
            success: (data) => {

                $('.loadModal__acount').modal('toggle');
                $('.modal-content_accountlist').html(data.data);

            },
            error: function (data) {

            },
            complete: function (data) {

            }
        });
    }

    $(document).on('submit', '.formDonhangAccount', function(e){
        e.preventDefault();
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
                console.log(response)
                if(response.status == 1){
                    $('.loadModal__acount').modal('hide');
                    swal({
                        title: "Thanh toán thành công?",
                        text: "Đợi chút để QTV xác nhận nhé.",
                        type: "success",
                        confirmButtonText: "Về lịch sử đơn hàng!",
                        showCancelButton: true
                    })
                        .then((result) => {
                            if (result.value) {
                                window.location = '/lich-su-mua-account';
                            } else if (result.dismiss === 'cancel') {

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
                        'Vui lòng kiểm tra lại tài khoản hoặc liên hệ với chăm sóc khách hàng!',
                        'error'
                    )
                    $('.loginBox__layma__button__displayabs').prop('disabled', false);
                }
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

});

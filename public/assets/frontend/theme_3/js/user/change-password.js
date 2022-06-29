$(document).ready(function (e) {

    // $('body').on('click','.btn-data',function(){
    //     var password_old = $('.password-old').val();
    //     var isSet = true;
    //     if (!password_old){
    //         var html = '';
    //         html += '';
    //
    //         html += '<div class="row marginauto order-errors"><div class="col-md-12 left-right default-span"><small>Bạn chưa nhập mật khẩu cũ.</small></div></div>';
    //
    //         $('.password-old-error').html('');
    //         $('.password-old-error').html(html);
    //         isSet = false;
    //     }else {
    //         $('.password-old-error').html('');
    //     }
    //
    //     var password_new = $('.password-new').val();
    //
    //     if (!password_new){
    //         var html = '';
    //         html += '';
    //
    //         html += '<div class="row marginauto order-errors"><div class="col-md-12 left-right default-span"><small>Bạn chưa nhập mật mới.</small></div></div>';
    //
    //         $('.password-new-error').html('');
    //         $('.password-new-error').html(html);
    //         isSet = false;
    //     }else {
    //         $('.password-new-error').html('');
    //     }
    //
    //     var password_confirm = $('.password-confirm').val();
    //
    //     if (!password_confirm){
    //         var html = '';
    //         html += '';
    //
    //         html += '<div class="row marginauto order-errors"><div class="col-md-12 left-right default-span"><small>Bạn chưa xác nhận mật khẩu.</small></div></div>';
    //
    //         $('.password-confirm-error').html('');
    //         $('.password-confirm-error').html(html);
    //         isSet = false;
    //     }else {
    //         $('.password-confirm-error').html('');
    //     }
    //
    //     if (isSet == false){
    //         return false;
    //     }
    //
    //
    // })
    $('#form-changePassword').submit(function (e) {
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
                // alert(data)
                if(data.status == 1){
                    $('#successModal').modal('show');
                    let html = '';
                    html +='';
                    $('.changepassword_error').html(html)
                    // window.location.href = '/';

                }else{
                    let html = '';
                    html +='';
                    html += '<p style="color: red;text-align: center;font-size: 14px;font-weight: 600">'+ data.message +'</p>';
                    $('.changepassword_error').html(html)
                }

            },
            error: function (data) {
                alert('Kết nối với hệ thống thất bại.Xin vui lòng thử lại');
                btnSubmit.text('Đăng nhập');
            },
            complete: function (data) {
                $('.changepassword_error').html()
                formSubmit.trigger("reset");
            }
        });
    });
})

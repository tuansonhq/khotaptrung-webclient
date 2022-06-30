Validator({
    form:'#form-changePassword',
    formGroupSelector:'.text-change-password-default',
    errorSelector:'.message-error',
    rules:[
        Validator.isRequired('.password-old'),
        Validator.isRequired('.password-new'),
        Validator.isRequired('.password-confirm'),
        Validator.minLength('.password-new',6),
        Validator.isConfirm('.password-confirm',function () {
            return document.querySelector('#form-changePassword .password-new').value
        },'Mật khẩu nhập lại không chính xác'),
    ],
    onSubmit:function (data) {
        var formSubmit = $('#form-changePassword');
        var url = formSubmit.attr('action');
        var btnSubmit = formSubmit.find(':submit');
        $.ajax({
            type: "POST",
            url: url,
            cache:false,
            data: formSubmit.serialize(), // serializes the form's elements.
            beforeSend: function (xhr) {
            },
            success: function (res) {
                console.log(res)
                if (res.status == 'LOGIN'){
                    openLoginModal();
                }
                if (res.status == 1){
                    $('.modal_message').text(res.message)
                    $('#successModal').modal('show');
                }
            },
            error: function (data) {
                alert('Kết nối với hệ thống thất bại.Xin vui lòng thử lại');
                btnSubmit.text('Đăng nhập');
            }
        });
    }
})


// change password

$(document).ready(function (e) {

    $('body').on('click','.btn-data',function(){
        var password_old = $('.password-old').val();
        var isSet = true;
        if (!password_old){
            var html = '';
            html += '';

            html += '<div class="row marginauto order-errors"><div class="col-md-12 left-right default-span"><small>Bạn chưa nhập mật khẩu cũ.</small></div></div>';

            $('.password-old-error').html('');
            $('.password-old-error').html(html);
            isSet = false;
        }else {
            $('.password-old-error').html('');
        }

        var password_new = $('.password-new').val();

        if (!password_new){
            var html = '';
            html += '';

            html += '<div class="row marginauto order-errors"><div class="col-md-12 left-right default-span"><small>Bạn chưa nhập mật mới.</small></div></div>';

            $('.password-new-error').html('');
            $('.password-new-error').html(html);
            isSet = false;
        }else {
            $('.password-new-error').html('');
        }

        var password_confirm = $('.password-confirm').val();

        if (!password_confirm){
            var html = '';
            html += '';

            html += '<div class="row marginauto order-errors"><div class="col-md-12 left-right default-span"><small>Bạn chưa xác nhận mật khẩu.</small></div></div>';

            $('.password-confirm-error').html('');
            $('.password-confirm-error').html(html);
            isSet = false;
        }else {
            $('.password-confirm-error').html('');
        }

        if (isSet == false){
            return false;
        }

        $('#successModal').modal('show')
    })
})

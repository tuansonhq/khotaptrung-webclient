$(document).ready(function(){
    const csrf_token = $('meta[name="csrf-token"]').attr('content');
    const token =  $('meta[name="jwt"]').attr('content');
    function getInfo(){
        const url = '/user/account_info';
        if(token == 'undefined' || token == null || token =='' || token == undefined){
            $('#info .loading').remove();
            $('#logout .loading').remove();
            $('#info').attr('href','/login')
            $('#logout').attr('href','/register')
            $('#info').html('<i class="fas fa-user"></i> Đăng nhập')
            $('#logout').html('<i class="fas fa-user"></i> Đăng kí')
            return;
        }
        $.ajax({
            type: "POST",
            url: url,
            cache:false,
            data: {
                _token:csrf_token
            },
            beforeSend: function (xhr) {
                
            },
            success: function (data) {
                if(data.status === "LOGIN"){
                    window.location.href = '/logout';
                }
                if(data.status === "ERROR"){
                    alert('Lỗi dữ liệu, vui lòng load lại trang để tải lại dữ liệu')
                }
                if(data.status == true){
                    $('#info .loading').remove();
                    $('#logout .loading').remove();
                    $('#info').attr('href','/thong-tin')
                    $('#logout').attr('href','/logout')
                    $('#info').html('<i class="fas fa-user"></i> '+data.info.username)
                    $('#logout').html('<i class="fas fa-user"></i> Đăng xuất')
                }
            },
            error: function (data) {
                alert('Có lỗi phát sinh, vui lòng liên hệ QTV để kịp thời xử lý!')
            },
            complete: function (data) {
              
            }
        });
    }
    getInfo();
});
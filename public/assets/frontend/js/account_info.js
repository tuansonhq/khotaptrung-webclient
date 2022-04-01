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


            $('#info_mobile .loading').remove();
            $('#logout_mobile .loading').remove();
            $('#info_mobile').attr('href','/login')
            $('#logout_mobile').attr('href','/register')
            $('#info_mobile').html('Đăng nhập')
            $('#logout_mobile').html('Đăng kí')

            $('#info_tab_mobile .loading').remove();
            $('#logout_tab_mobile .loading').remove();
            $('#info_tab_mobile').attr('href','/login')
            $('#logout_tab_mobile').attr('href','/register')
            $('#info_tab_mobile').html('<i class="fas fa-user"></i> Đăng nhập')
            $('#logout_tab_mobile').html('<i class="fas fa-user"></i> Đăng kí')



            return;
        }
        $.ajax({
            type: "POST",
            url: url,
            cache:false,
            data: {
                _token:csrf_token,
                jwt:token
            },
            beforeSend: function (xhr) {

            },
            success: function (data) {
                if(data.status === "LOGIN"){
                    $('#info .loading').remove();
                    $('#logout .loading').remove();
                    $('#info').attr('href','/login')
                    $('#logout').attr('href','/register')
                    $('#info').html('<i class="fas fa-user"></i> Đăng nhập')
                    $('#logout').html('<i class="fas fa-user"></i> Đăng kí')


                    $('#info_mobile .loading').remove();
                    $('#logout_mobile .loading').remove();
                    $('#info_mobile').attr('href','/login')
                    $('#logout_mobile').attr('href','/register')
                    $('#info_mobile').html('Đăng nhập')
                    $('#logout_mobile').html('Đăng kí')

                    $('#info_tab_mobile .loading').remove();
                    $('#logout_tab_mobile .loading').remove();
                    $('#info_tab_mobile').attr('href','/login')
                    $('#logout_tab_mobile').attr('href','/register')
                    $('#info_tab_mobile').html('<i class="fas fa-user"></i> Đăng nhập')
                    $('#logout_tab_mobile').html('<i class="fas fa-user"></i> Đăng kí')
                    //
                    // window.location.href = '/login';
                    // // method = method || 'post';
                    // return;
                }
                if(data.status === "ERROR"){
                    alert('Lỗi dữ liệu, vui lòng load lại trang để tải lại dữ liệu')
                }
                if(data.status == true){
                    $('#username').val(data.info.username);
                    $('#info .loading').remove();
                    $('#logout .loading').remove();
                    $('#info').attr('href','/thong-tin')
                    $('#logout').attr('href','/logout')

                    // mobile tab
                    $('#info_tab_mobile .loading').remove();
                    $('#logout_tab_mobile .loading').remove();
                    $('#info_tab_mobile').attr('href','/thong-tin')
                    $('#logout_tab_mobile').attr('href','/logout')

                    $('#logout-form').attr('href','/logout')



                    $('#logout').attr('onclick','event.preventDefault();\ndocument.getElementById(\'logout-form\').submit();')
                    $('#info').html('<i class="fas fa-user"></i> '+ fn(data.info.username, 6)  +' - $' +formatNumber(data.info.balance))
                    $('#logout').html('<i class="fas fa-user"></i> Đăng xuất')

                    // mobile
                    $('#info_mobile .loading').remove();
                    $('#logout_mobile .loading').remove();
                    $('#info_mobile').attr('href','/thong-tin')
                    // $('#logout_mobile').attr('href','/logout')

                    $('#logout_mobile').attr('onclick','event.preventDefault();\ndocument.getElementById(\'logout-form\').submit();')
                    $('#info_mobile').html(fn(data.info.username, 8) +' - $' +formatNumber(data.info.balance))
                    $('#logout_mobile').css('display','none')


                    $('#logout_tab_mobile').attr('onclick','event.preventDefault();\ndocument.getElementById(\'logout-form\').submit();')
                    $('#info_tab_mobile').html('<i class="fas fa-user"></i> '+fn(data.info.username, 12) +' - $' +formatNumber(data.info.balance))
                    $('#logout_tab_mobile').html('<i class="fas fa-user"></i> Đăng xuất')


                }
            },
            error: function (data) {
                alert('Có lỗi phát sinh, vui lòng liên hệ QTV để kịp thời xử lý!')
                return;
            },
            complete: function (data) {

            }
        });
    }
    getInfo();

    function formatNumber(num) {
        return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
    }
    function fn(text, count){
        return text.slice(0, count) + (text.length > count ? "..." : "");
    }

});
//
// // new
// $(document).ready(function(){
//     const csrf_token = $('meta[name="csrf-token"]').attr('content');
//     const token =  $('meta[name="jwt"]').attr('content');
//     function getInfo(){
//         const url = '/user/account_info';
//         if(token == 'undefined' || token == null || token =='' || token == undefined){
//             $('#info .loading').remove();
//             $('#logout .loading').remove();
//             $('#info').attr('href','/login');
//             $('#logout').attr('href','/register');
//             $('#info').html('<i class="fas fa-user"></i> Đăng nhập');
//             $('#logout').html('<i class="fas fa-user"></i> Đăng kí');
//             return;
//         }
//         $.ajax({
//             type: "POST",
//             url: url,
//             cache:false,
//             data: {
//                 _token:csrf_token,
//                 jwt:token
//             },
//             beforeSend: function (xhr) {
//
//             },
//             success: function (data) {
//                 // if(data.status === "LOGIN"){
//                 //     window.location.href = '/login';
//                 //     // method = method || 'post';
//                 //     return;
//                 // }
//                 // if(data.status === "ERROR"){
//                 //     alert('Lỗi dữ liệu, vui lòng load lại trang để tải lại dữ liệu')
//                 // }
//                 console.log(data);
//                 if(data.status == 1){
//                     $('#info .loading').remove();
//                     $('#logout .loading').remove();
//                     $('#info').attr('href','/thong-tin')
//                     $('#logout').attr('href','/logout')
//                     $('#logout-form').attr('href','/logout')
//
//                     $('#logout').attr('onclick','event.preventDefault();\ndocument.getElementById(\'logout-form\').submit();')
//                     $('#info').html('<i class="fas fa-user"></i> '+data.info.username)
//                     $('#logout').html('<i class="fas fa-user"></i> Đăng xuất')
//                 }
//                 else{
//                     $('#info').attr('href','/login');
//                     $('#logout').attr('href','/register');
//                     $('#info').html('<i class="fas fa-user"></i> Đăng nhập');
//                     $('#logout').html('<i class="fas fa-user"></i> Đăng kí');
//                 }
//             },
//             error: function (data) {
//                 alert('Có lỗi phát sinh, vui lòng liên hệ QTV để kịp thời xử lý!')
//                 return;
//             },
//             complete: function (data) {
//
//             }
//         });
//     }
//     getInfo();
// });
